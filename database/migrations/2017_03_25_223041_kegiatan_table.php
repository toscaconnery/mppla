<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class KegiatanTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //Kegiatan table
        Schema::create('kegiatan', function( Blueprint $table) {
            $table->increments('id');
            $table->integer('id_lab');
            $table->date('tanggal');
            $table->integer('jam_mulai');
            $table->integer('jam_selesai');
            $table->string('nama_kegiatan');
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
        //Kegiatan table
        Schema::drop('kegiatan');
    }
}
