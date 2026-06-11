<?php

namespace App\Http\Controllers;

use App\Models\MaintenanceLog;
use App\Models\Setting;
use Illuminate\Http\Request;

class SettingController extends Controller
{
    public function index()
    {
        $setting = Setting::first();

        return response()->json([
            'success' => true,
            'data' => $setting
        ]);
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'proposal_max_year' => 'required|integer'
        ]);

        $setting = Setting::findOrFail($id);

        $activeYear = $setting->proposal_max_year;

        $alreadyClosed = MaintenanceLog::where(
            'year',
            $activeYear
        )->exists();

        if (
            $request->proposal_max_year > $activeYear &&
            !$alreadyClosed
        ) {
            return response()->json([
                'success' => false,
                'message' => "Tahun {$activeYear} belum di Close Year."
            ], 422);
        }

        $targetYearClosed = MaintenanceLog::where(
            'year',
            $request->proposal_max_year
        )->exists();

        if ($targetYearClosed) {
            return response()->json([
                'success' => false,
                'message' => "Tahun {$request->proposal_max_year} sudah ditutup dan tidak dapat dipilih kembali."
            ], 422);
        }

        $setting->update([
            'proposal_max_year' => $request->proposal_max_year
        ]);

        return response()->json([
            'success' => true,
            'message' => 'Setting updated successfully!',
            'data' => $setting
        ]);
    }
}
