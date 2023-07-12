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
        Schema::create('pengaduans', function (Blueprint $table) {
            $table->id();
            $table->index('pengguna_id');
            $table->foreignId('pengguna_id')->constrained('penggunas')->cascadeOnDelete();
            $table->string('lokasi_kejadian');
            $table->date('waktu_kejadian');
            $table->mediumText('penyebab_kejadian');
            $table->string('judul_pengaduan');
            $table->mediumText('isi_pengaduan');
            $table->string('foto_pengaduan');
            $table->enum('status_pengaduan', ['Proses', 'Selesai', 'Ditolak'])->default('Proses');
            $table->string('tanggapan_pengaduan')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pengaduans');
    }
};
