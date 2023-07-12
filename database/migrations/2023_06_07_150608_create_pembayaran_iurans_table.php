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
        Schema::create('pembayaran_iurans', function (Blueprint $table) {
            $table->id();
            $table->index('jenis_iuran_id');
            $table->foreignId('jenis_iuran_id')->nullable()->constrained('jenis_iurans')->cascadeOnUpdate()->nullOnDelete();
            $table->enum('metode_pembayaran', ['mbanking', 'ewalet', 'cash', 'lainnya']);
            $table->string('nama_pengirim');
            $table->decimal('jumlah pembayaran');
            $table->string('tanggal_pembayaran');
            $table->mediumText('Keterangan');
            $table->string('bukti_pembayaran');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pembayaran_iurans');
    }
};
