<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTugasLbeTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tugas_lbe', function(Blueprint $table) {
            $table->increments('id');
            $table->integer('id_proyek');
            $table->integer('id_mhs');
            $table->string('judul');
            $table->text('tugas');
            $table->string('upload_tugas');
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
        Schema::drop('tugas_lbe');
    }
}
