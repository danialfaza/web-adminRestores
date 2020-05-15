<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRestoran extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('restoran', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nama_restoran');
            $table->text('deskripsi');
            $table->string('alamat');
            $table->string('jam_buka');
            $table->string('telfon');
            $table->string('gambar');
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
        Schema::dropIfExists('restoran');
    }
}
