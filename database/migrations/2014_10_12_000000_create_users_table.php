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
        $table->string('cpf');
        $table->string('rg');
        $table->date('dataNascimento');
        $table->string('telefone');
        $table->string('celular');
        $table->string('rua');
        $table->string('numero');
        $table->string('complemento')->nullable();
        $table->string('bairro');
        $table->string('cidade');
        $table->string('estado');
        $table->string('email')->unique();
        $table->string('password');
        $table->integer('sysactive')->boolval();
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
