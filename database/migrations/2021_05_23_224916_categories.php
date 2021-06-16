<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
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
    DB::insert('insert into categories (id, categoria) values (?, ?)', [1, 'Ferramentas']);
    DB::insert('insert into categories (id, categoria) values (?, ?)', [2, 'Artigos de Esporte']);
    DB::insert('insert into categories (id, categoria) values (?, ?)', [3, 'Utensílios']);
    DB::insert('insert into categories (id, categoria) values (?, ?)', [4, 'Brinquedos']);
    DB::insert('insert into categories (id, categoria) values (?, ?)', [5, 'Veículos']);
    DB::insert('insert into categories (id, categoria) values (?, ?)', [6, 'Aparelhos Eletrônicos']);
    DB::insert('insert into categories (id, categoria) values (?, ?)', [7, 'Outros']);
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
