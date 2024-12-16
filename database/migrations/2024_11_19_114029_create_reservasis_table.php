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
        Schema::create('reservasis', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained()->onDelete('cascade');
            $table->foreignId('dokter_id')->constrained()->onDelete('cascade');
            $table->foreignId('jadwal_dokter_id')->constrained()->onDelete('cascade');
            $table->string('keluhan');
            $table->enum('status',['menunggu','ditolak','diterima'])->default('menunggu');
            $table->date('tanggal_reservasi');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('reservasis');
    }
};
