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
        Schema::create('akun_keuangans', function (Blueprint $table) {
            $table->id();
            $table->index('kategori_akun_id');
            $table->foreignId('kategori_akun_id')->constrained('kategori_akun_keuangans')->cascadeOnDelete();
            $table->string('kode_akun')->unique();
            $table->string('nama_akun');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('akun_keuangans');
    }
};
