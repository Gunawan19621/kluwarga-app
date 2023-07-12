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
        Schema::create('komunitas', function (Blueprint $table) {
            $table->id();
            // $table->foreignId('user_id')->constrained('users')->cascadeOnDelete()->cascadeOnUpdate();
            $table->string('nama_komunitas')->nullable();
            $table->string('moto_komunitas')->nullable();
            $table->string('logo_komunitas')->nullable();
            $table->string('jumlah_warga')->nullable();
            $table->string('jumlah_rumah')->nullable();
            $table->string('no_tlp')->nullable();
            $table->mediumText('alamat_komunitas')->nullable();
            $table->string('provinsi')->nullable();
            $table->string('kabupaten')->nullable();
            $table->string('kecamatan')->nullable();
            $table->string('desa')->nullable();
            $table->string('kode_pos')->nullable();
            $table->string('warna_primer')->nullable();
            $table->string('warna_skunder')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('komunitas');
    }
};
