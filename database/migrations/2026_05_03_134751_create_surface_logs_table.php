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
        Schema::create('surface_logs', function (Blueprint $table) {
            $table->id(); 
            $table->foreignId('road_id')->constrained('roads')->onDelete('cascade');
            $table->decimal('start_length', 10, 2);
            $table->decimal('end_length', 10, 2);
            $table->enum('side', ['left', 'right']);
            $table->foreignId('surface_subtype_id')->constrained('surface_subtypes')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('surface_logs');
    }
};
