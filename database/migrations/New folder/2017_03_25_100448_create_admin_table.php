<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AdminTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //Admin table
        Schema::create('admin', function(Blueprint $table) {
            $table->increments('id');
            $table->integer('id_lab');
            $table->string('nama');
            $table->string('nrp');
            $table->string('alamat');
            $table->string('no_hp');
            $table->date('tanggal_masuk');
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
        //Admin table
        Schema::drop('admin');
    }
}
