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
        Schema::create('system_processes', function (Blueprint $table) {
            $table->id();
            $table->integer('year')->unique();
            $table->boolean('is_closed')->default(false);
            $table->timestamp('closed_at')->nullable();
            $table->boolean('segment_generated')->default(false);
            $table->timestamp('segment_generated_at')->nullable();
            $table->boolean('apriori_generated')->default(false);
            $table->timestamp('apriori_generated_at')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('system_processes');
    }
};
