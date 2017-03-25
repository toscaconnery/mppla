<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class DosenTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //Dosen table
        Schema::create('dosen', function( Blueprint $table) {
            $table->increments('id');
            $table->integer('id_lab');
            $table->string('nip');
            $table->string('nama');
            $table->string('email');
            $table->string('no_hp');
            $table->string('alamat');
            $table->softDeletes();
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
        //Dosen table
        Schema::drop('dosen');
    }
}
