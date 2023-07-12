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
        Schema::create('iuran_penggunas', function (Blueprint $table) {
            $table->id();
            $table->index(['iuran_id', 'pengguna_id']);
            $table->foreignId('iuran_id')->constrained('iurans')->onDelete('cascade');
            $table->foreignId('pengguna_id')->constrained('penggunas')->onDelete('cascade');
            $table->enum('metode_pembayaran', ['mbanking', 'dana', 'cash']);
            $table->decimal('jumlah');
            $table->mediumText('keterangan');
            $table->string('bukti_pembayaran');
            $table->enum('status_pembayaran', ['menunggu_konfirmasi', 'lunas', 'ditolak']);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('iuran_penggunas');
    }
};
