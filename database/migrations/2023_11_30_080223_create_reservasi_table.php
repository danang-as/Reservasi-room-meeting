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
        Schema::create('reservasi', function (Blueprint $table) {
            $table->id();
            $table->string('kode_booking');
            $table->string('nama_penanggung_jawab');
            $table->date('tanggal');
            $table->time('waktu_mulai');
            $table->time('waktu_selesai');
            $table->string('kegiatan');
            $table->string('jumlah_peserta');
            $table->string('jumlah_panitia');
            $table->string('nama_ruangan');
            $table->string('direktorat');
            $table->string('divisi');
            $table->string('bagian');
            $table->string('pendukung');
            $table->enum('status',['diproses','disetujui','ditolak'])->default('diproses');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('reservasi');
    }
};
