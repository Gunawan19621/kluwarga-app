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
        Schema::create('pengajuan_komunitas', function (Blueprint $table) {
            $table->id();
            $table->index(['user_id', 'komunitas_id']);
            $table->foreignId('user_id')->constrained('users')->cascadeOnDelete()->cascadeOnUpdate();
            $table->foreignId('komunitas_id')->constrained('komunitas')->cascadeOnDelete()->cascadeOnUpdate();
            $table->mediumText('jalan')->nullable();
            $table->string('rt')->nullable();
            $table->string('rw')->nullable();
            $table->string('blok')->nullable();
            $table->string('kode_rumah')->nullable();
            $table->enum('status_hunian', ['pemilik', 'penghuni'])->nullable();
            $table->string('bulan_huni')->nullable();
            $table->string('tahun_huni')->nullable();
            $table->enum('status', ['pending', 'diterima', 'ditolak'])->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pengajuan_komunitas');
    }
};
