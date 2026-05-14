from sqlalchemy import create_engine, text
import pandas as pd
import json

from itertools import combinations
import warnings

warnings.filterwarnings("ignore")

# koneksi database
engine = create_engine(
    "mysql+pymysql://root:@127.0.0.1/pj"
)

# hapus hasil apriori lama
with engine.begin() as conn:

    conn.execute(
        text("DELETE FROM apriori_results")
    )

# ambil data transaksi
transaksi = pd.read_sql("""

SELECT
    r.id AS road_id,

    r.name AS Ruas,

    CONCAT(
        s.start_length,
        ' - ',
        s.end_length
    ) AS Segmen,

    m.side AS Posisi_Jalur,

    m.maintenance_type AS Jenis_Penanganan

FROM maintenances m

JOIN roads r
ON r.id = m.road_id

JOIN segments s
ON s.id = m.segment_id

""", engine)

# gabungkan item per segmen
transaksi = transaksi.groupby(
    ['road_id', 'Ruas', 'Segmen', 'Posisi_Jalur']
)['Jenis_Penanganan'].apply(

    lambda x: sorted(

        set(

            item.strip()

            for val in x

            for item in val.split(',')

        )
    )

).reset_index()

# tampil transaksi
print(transaksi.head())

# LOOP PER RUAS DAN JALUR
for ruas in transaksi['Ruas'].unique():

    for jalur in transaksi['Posisi_Jalur'].unique():

        subset = transaksi[
            (transaksi['Ruas'] == ruas) &
            (transaksi['Posisi_Jalur'] == jalur)
        ].copy()

        if subset.empty:
            continue

        road_id = subset['road_id'].iloc[0]

        print(f"\n===== {ruas} | Jalur {jalur} =====")

        transactions = subset[
            'Jenis_Penanganan'
        ].tolist()

        if len(transactions) == 0:

            print("Tidak ada data transaksi")

            continue

        # semua item unik
        items = sorted(

            set(

                item

                for t in transactions

                for item in t
            )
        )

        # panjang kombinasi maksimum
        max_len = max(
            len(t)
            for t in transactions
        )

        frequent = {}

        # PEMBENTUKAN C DAN L
        for k in range(1, max_len + 1):

            comb = list(
                combinations(items, k)
            )

            freq = {}

            for c in comb:

                count = sum(

                    1

                    for t in transactions

                    if set(c).issubset(set(t))
                )

                support = count / len(transactions)

                # minimum support
                if support >= 0.1:

                    freq[c] = support

            # stop kalau tidak ada frequent itemset
            if not freq:
                break

            frequent[k] = freq

        found = False

        # HITUNG CONFIDENCE DAN LIFT
        for k, itemsets in frequent.items():

            # association rule minimal 2 item
            if k < 2:
                continue

            for itemset, sup_xy in itemsets.items():

                for i in range(
                    1,
                    len(itemset)
                ):

                    for antecedent in combinations(
                        itemset,
                        i
                    ):

                        consequent = tuple(

                            sorted(

                                set(itemset) -
                                set(antecedent)
                            )
                        )

                        count_x = sum(

                            1

                            for t in transactions

                            if set(antecedent)
                            .issubset(set(t))
                        )

                        count_y = sum(

                            1

                            for t in transactions

                            if set(consequent)
                            .issubset(set(t))
                        )

                        support_x = (
                            count_x /
                            len(transactions)
                        )

                        support_y = (
                            count_y /
                            len(transactions)
                        )

                        confidence = (
                            sup_xy /
                            support_x
                        )

                        lift = (
                            confidence /
                            support_y
                        )

                        # minimum confidence
                        if confidence >= 0.6:

                            found = True

                            print(
                                f"{antecedent} "
                                f"→ "
                                f"{consequent}"
                            )

                            print(
                                f"Support   : "
                                f"{round(sup_xy, 3)}"
                            )

                            print(
                                f"Confidence: "
                                f"{round(confidence, 3)}"
                            )

                            print(
                                f"Lift      : "
                                f"{round(lift, 3)}"
                            )

                            # simpan ke database
                            with engine.begin() as conn:

                                conn.execute(text("""

                                    INSERT INTO apriori_results
                                    (
                                        road_id,
                                        side,
                                        antecedent,
                                        consequent,
                                        support,
                                        confidence,
                                        lift,
                                        total_transactions,
                                        created_at,
                                        updated_at
                                    )

                                    VALUES
                                    (
                                        :road_id,
                                        :side,
                                        :antecedent,
                                        :consequent,
                                        :support,
                                        :confidence,
                                        :lift,
                                        :total_transactions,
                                        NOW(),
                                        NOW()
                                    )

                                """), {

                                    "road_id": int(road_id),

                                    "side": jalur,

                                    "antecedent": json.dumps(
                                        list(antecedent)
                                    ),

                                    "consequent": json.dumps(
                                        list(consequent)
                                    ),

                                    "support": float(
                                        round(sup_xy, 3)
                                    ),

                                    "confidence": float(
                                        round(confidence, 3)
                                    ),

                                    "lift": float(
                                        round(lift, 3)
                                    ),

                                    "total_transactions": len(transactions),
                                })

                            print("-" * 30)

        if not found:

            print(
                "Tidak terdapat aturan "
                "yang memenuhi minimum confidence"
            )
