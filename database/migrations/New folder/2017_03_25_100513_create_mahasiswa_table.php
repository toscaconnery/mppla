<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class MahasiswaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //Mahasiswa table
        Schema::create('mahasiswa', function( Blueprint $table) {
            $table->increments('id');       //primary key
            $table->integer('id_proyek');   //foreign key from Lbe
            $table->integer('id_lab');      //foreign key from Laboratorium
            $table->string('nama');
            $table->string('nrp');
            $table->integer('angkatan');
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
        //Mahasiswa table
        Schema::drop('mahasiswa');
    }
}
