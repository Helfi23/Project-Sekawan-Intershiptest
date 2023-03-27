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
         Schema::create('car_models', function (Blueprint $table) {
            $table->id('car_id');
            $table->string('merk', 255);
            $table->string('tipe', 255);
            $table->string('plat_nomor', 20)->unique();
            $table->year('tahun_pembuatan');
            $table->unsignedInteger('kapasitas_penumpang');
            $table->enum('status', ['Tersedia', 'Tidak Tersedia'])->default('Tersedia');
            $table->string('photo')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('cars');
    }
};
