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
        Schema::create('iurans', function (Blueprint $table) {
            $table->id();
            $table->string('nama_iuran')->nullable();
            $table->decimal('jumlah', 12)->nullable();
            $table->enum('periode', ['sekali', 'perminggu', 'perbulan', 'pertahun'])->nullable();
            $table->enum('status_iuran', ['wajib', 'sukarela'])->nullable();
            $table->enum('status_pembayaran', ['lunas', 'belum lunas', 'menunggu konfirmasi'])->nullable();
            $table->enum('pj_iuran', ['pemilik', 'penghuni', 'semua'])->nullable();
            $table->enum('nama_bank', ['mandiri', 'bca', 'bri', 'bni'])->nullable();
            $table->string('no_rekening')->nullable();
            $table->enum('nama_wallet', ['gopay', 'ovo', 'dana', 'shopeepay'])->nullable();
            $table->string('no_wallet')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('iurans');
    }
};
