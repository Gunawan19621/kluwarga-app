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
        Schema::create('pengaturan_komunitas', function (Blueprint $table) {
            $table->id();
            $table->index(['komunitas_id', 'pengguna_id']);
            $table->foreignId('komunitas_id')->constrained('komunitas')->onDelete('cascade');
            $table->foreignId('pengguna_id')->constrained('penggunas')->onDelete('cascade');
            $table->mediumText('pertanyaan');
            $table->string('aksi');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pengaturan_komunitas');
    }
};
