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
        $table->string('nome');
        $table->string('email')->unique();
        $table->bigInteger('cpf')->unique();
        $table->bigInteger('data_de_nacimento')->unique();
        $table->timestamp('email_verified_at')->nullable();
        $table->bigInteger('telefone');
        $table->string('senha');
        $table->string('endereco')->nullable();
        $table->string('cidade');
        $table->string('estado');
        $table->rememberToken()->nullable();
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
