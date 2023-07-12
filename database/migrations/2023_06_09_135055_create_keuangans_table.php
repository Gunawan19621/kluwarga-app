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
        Schema::create('keuangans', function (Blueprint $table) {
            $table->id();
            $table->index('akun_keuangan_id');
            $table->foreignId('akun_keuangan_id')->constrained('akun_keuangans')->cascadeOnDelete();
            $table->decimal('januari')->nullable();
            $table->decimal('februari')->nullable();
            $table->decimal('maret')->nullable();
            $table->decimal('april')->nullable();
            $table->decimal('mei')->nullable();
            $table->decimal('juni')->nullable();
            $table->decimal('juli')->nullable();
            $table->decimal('agustus')->nullable();
            $table->decimal('september')->nullable();
            $table->decimal('oktober')->nullable();
            $table->decimal('november')->nullable();
            $table->decimal('desember')->nullable();
            $table->decimal('total')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('keuangans');
    }
};
