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
          $table->string('nama');
          $table->date  ('tanggal_lahir');
          $table->date  ('pekerjaan');
          $table->date  ('pendidikan');
          $table->date  ('alamat');
          $table->date  ('no_handphone');
          $table->string('email')->unique();
          $table->timestamp('email_verified_at')->nullable();
          $table->string  ('username');
          $table->string('password');
          $table->string  ('No_KTP');
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
        Schema::dropIfExists('users');
    }
}
