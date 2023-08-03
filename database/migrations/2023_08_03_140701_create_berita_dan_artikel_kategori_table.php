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
        Schema::create('berita_dan_artikel_kategori', function (Blueprint $table) {
            $table->unsignedBigInteger('berita_dan_artikel_id');
            $table->unsignedBigInteger('kategori_id');
            $table->foreign('berita_dan_arikel_id')->references('id')->on('berita_dan_artikels')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('kategori_id')->references('id')->on('kategoris')->onDelete('cascade')->onUpdate('cascade');
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
        Schema::dropIfExists('berita_dan_artikel_kategori');
    }
};
