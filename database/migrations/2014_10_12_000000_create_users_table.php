<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('id_lab')->nullable();
            $table->string('name');
            $table->string('email')->unique();
            $table->string('no_hp')->nullable();
            $table->string('password');
            $table->integer('is_admin')->nullable();
            $table->date('tanggal_lahir')->nullable();
            $table->string('tempat_lahir')->nullable();
            $table->integer('is_surabaya')->nullable();
            $table->string('alamat_asal')->nullable();
            $table->string('alamat_surabaya')->nullable();
            $table->string('agama')->nullable();
            $table->string('motivasi')->nullable();
            $table->rememberToken();
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
        Schema::drop('users');
    }
}
