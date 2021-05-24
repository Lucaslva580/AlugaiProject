<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Categories extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {Schema::create('categories', function (Blueprint $table) {
        $table->id();
        $table->string('categoria');

        
        
        
    });
    DB::insert('insert into categories (id, categoria) values (?, ?)', [1, 'ferramentas']);
    DB::insert('insert into categories (id, categoria) values (?, ?)', [2, 'artigosDeEsporte']);
    DB::insert('insert into categories (id, categoria) values (?, ?)', [3, 'utensilios']);
    DB::insert('insert into categories (id, categoria) values (?, ?)', [4, 'brinquedos']);
    DB::insert('insert into categories (id, categoria) values (?, ?)', [5, 'veiculos']);
    DB::insert('insert into categories (id, categoria) values (?, ?)', [6, 'aparelhosEletronicos']);
    DB::insert('insert into categories (id, categoria) values (?, ?)', [7, 'outros']);
    }
    

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('categories');
    }
}
