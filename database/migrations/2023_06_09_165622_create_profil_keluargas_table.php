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
        Schema::create('profil_keluargas', function (Blueprint $table) {
            $table->id();
            $table->index('pengguna_id');
            $table->foreignId('pengguna_id')->constrained('penggunas')->cascadeOnDelete();
            $table->string('nama_anggota_keluarga')->nullable();
            $table->enum('hubungan_keluarga', ['Suami', 'Istri', 'Anak', 'Lainnya'])->nullable();
            $table->enum('jenis_kelamin', ['L', 'P'])->nullable();
            $table->date('tanggal_lahir')->nullable();
            $table->enum('agama', ['Islam', 'Kristen', 'Katolik', 'Hindu', 'Budha', 'Konghucu'])->nullable();
            $table->string('pekerjaan')->nullable();
            $table->string('phone')->unique()->nullable();
            $table->string('email')->unique()->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('profil_keluargas');
    }
};
