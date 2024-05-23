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
    Schema::create('deskripsi_capaian', function (Blueprint $table) {
        $table->id();
        $table->unsignedBigInteger('capaian_id');
        $table->foreign('capaian_id')->references('id')->on('capaian')->onDelete('cascade');
        $table->text('deskripsi');
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
        Schema::dropIfExists('deskripsi_capaian');
    }
};
