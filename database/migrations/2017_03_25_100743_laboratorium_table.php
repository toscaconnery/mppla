<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class LaboratoriumTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //Laboratorium table
        Schema::create('laboratorium', function( Blueprint $table) {
            $table->increments('id');
            $table->string('nama_lab');
            $table->string('deskripsi_lab');
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
        //Laboratorium table
        Schema::drop('laboratorium');
    }
}
