<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

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
            $table->id();
            $table->string('kode', 25);
            $table->char('nis', 20)->nullable();
            $table->string('fullname');
            $table->string('username')->unique();
            $table->string('password');
            $table->string('kelas')->nullable();
            $table->text('alamat')->nullable();
            $table->string('verif')->nullable();
            $table->enum('role', ['admin', 'user']);
            $table->datetime('join_date')->unique();
            $table->datetime('terakhir_login')->nullable();
            $table->text('foto')->nullable();
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