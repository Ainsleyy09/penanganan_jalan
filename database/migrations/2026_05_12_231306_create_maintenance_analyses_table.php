<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('maintenance_analyses', function (Blueprint $table) {
            $table->id();
            $table->foreignId('maintenance_proposal_id')->constrained('maintenance_proposals')->onDelete('cascade');
            $table->json('antecedent');
            $table->json('consequent');
            $table->float('support');
            $table->float('confidence');
            $table->float('lift');
            $table->enum('status', ['approved','review']);
            $table->text('description');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('maintenance_analyses');
    }
};
