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
            $table->foreignId('spesialis_id')->constrained('spesialis')->onUpdate('cascade')->onDelete('cascade');
            $table->foreignId('rawatJalan_id')->constrained('rawat_jalans')->onUpdate('cascade')->onDelete('cascade');
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