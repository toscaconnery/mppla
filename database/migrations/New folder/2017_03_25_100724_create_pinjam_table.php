<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class PinjamTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //Pinjam table
        Schema::create('pinjam', function( Blueprint $table) {
            $table->increments('id');
            $table->integer('id_lab');
            $table->date('tanggal');
            $table->time('jam_mulai');
            $table->time('jam_selesai');
            $table->string('status_verif');
            $table->string('nrp');
            $table->string('peminjam');
            $table->string('keperluan');
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
        //Pinjam table
        Schema::drop('pinjam');
    }
}
