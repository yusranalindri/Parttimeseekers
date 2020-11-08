<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersPelamarTableTableusers extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::create('pelamar', function (Blueprint $table) {
          $table->bigIncrements('id');
          $table->string('name');
          $table->string('alamat2');
          $table->string('tglahir');
          $table->string('pekerjaan');
          $table->string('pendidikan');
          $table->string('phone2');
          $table->string('email')->unique();
          $table->timestamp('email_verified_at')->nullable();
          $table->string('username');
          $table->string('password');
          $table->string('KTP');
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
        Schema::dropIfExists('pelamar');
    }
}
