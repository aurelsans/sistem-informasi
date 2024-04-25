<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('achievements_tabel', function (Blueprint $table) {
            $table->id();
            $table->string('gambar_prestasi')->nullable(); // Kolom untuk menyimpan URL gambar prestasi
            $table->string('judul_prestasi');
            $table->text('deskripsi_prestasi');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('achievements_tabel');
    }
};
