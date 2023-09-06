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
        Schema::create('many_many_kategori_kontent', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('konten_id');
            $table->unsignedBigInteger('kategori_konten_id');
            $table->foreign('konten_id')->references('id')->on('kontens')->onDelete('cascade');
            $table->foreign('kategori_konten_id')->references('id')->on('kategori_kontens')->onDelete('cascade');
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
        Schema::dropIfExists('many_many_kategori_kontent');
    }
};
