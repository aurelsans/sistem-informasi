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
        Schema::create('detail_router', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('router_id');
            $table->foreign('router_id')->references('id')->on('router')->onDelete('cascade');
            $table->string('router_spek');
            $table->string('router_detail');
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
        Schema::dropIfExists('detail_router');
    }
};
