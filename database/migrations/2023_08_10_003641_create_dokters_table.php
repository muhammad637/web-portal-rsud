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
        Schema::create('dokters', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('spesialis_id')->nullable();
            $table->foreign('spesialis_id')->references('id')->on('spesialis')->onDelete('cascade')->onUpdate('cascade');
            // $table->unsignedBigInteger('layanan_id')->nullable();
            // $table->foreign('layanan_id')->references('id')->on('layanans')->onDelete('cascade')->onUpdate('cascade');
            $table->string('tipe_dokter')->nullable();
            $table->string('nama');
            $table->string('gambar')->nullable();
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
        Schema::dropIfExists('dokters');
    }
};
