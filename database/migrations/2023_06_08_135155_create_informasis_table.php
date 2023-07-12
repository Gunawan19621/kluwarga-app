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
        Schema::create('informasis', function (Blueprint $table) {
            $table->id();
            $table->index('pengguna_id');
            $table->foreignId('pengguna_id')->constrained('penggunas')->cascadeOnDelete();
            $table->string('judul_informasi')->nullable();
            $table->mediumText('deskripsi_singkat')->nullable();
            $table->mediumText('isi_informasi')->nullable();
            $table->string('file')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('informasis');
    }
};
