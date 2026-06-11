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
        Schema::create('final_maintenances', function (Blueprint $table) {
            $table->id();
            $table->foreignId('maintenance_proposal_id')->constrained('maintenance_proposals')->onDelete('cascade');
            $table->foreignId('maintenancetype_id')->constrained('maintenance_types')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('final_maintenances');
    }
};
