<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;
class States extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {Schema::create('states', function (Blueprint $table) {
        $table->id();
        $table->string('estados');
        $table->string('UF');

    });
    DB::insert('insert into states (UF, estados) values (?,?)', ['SP', 'São Paulo']);
    DB::insert('insert into states (UF, estados) values (?,?)', ['RJ','Rio de Janeiro']);
    DB::insert('insert into states (UF, estados) values (?,?)', ['BA','Bahia']);
    DB::insert('insert into states (UF, estados) values (?,?)', ['MG','Minas Gerais']);
    DB::insert('insert into states (UF, estados) values (?,?)', ['AM','Amazonas']);
    DB::insert('insert into states (UF, estados) values (?,?)', ['MS', 'Mato Grosso do Sul']);
    DB::insert('insert into states (UF, estados) values (?,?)', ['RS', 'Rio Grande do Sul']);
    DB::insert('insert into states (UF, estados) values (?,?)', ['RO','Rondônia']);
    DB::insert('insert into states (UF, estados) values (?,?)', ['AC','Acre']);
    DB::insert('insert into states (UF, estados) values (?,?)', ['RR','Roraima']);
    DB::insert('insert into states (UF, estados) values (?,?)', ['PA','Pará']);
    DB::insert('insert into states (UF, estados) values (?,?)', ['AP','Amapá']);
    DB::insert('insert into states (UF, estados) values (?,?)', ['TO','Tocantins']);
    DB::insert('insert into states (UF, estados) values (?,?)', ['MA','Maranhão']);
    DB::insert('insert into states (UF, estados) values (?,?)', ['PI','Piauí']);
    DB::insert('insert into states (UF, estados) values (?,?)', ['CE','Ceará']);
    DB::insert('insert into states (UF, estados) values (?,?)', ['RN','Rio Grande do Norte']);
    DB::insert('insert into states (UF, estados) values (?,?)', ['PB','Paraíba']);
    DB::insert('insert into states (UF, estados) values (?,?)', ['PE','Pernambuco']);
    DB::insert('insert into states (UF, estados) values (?,?)', ['AL','Alagoas']);
    DB::insert('insert into states (UF, estados) values (?,?)', ['SE','Sergipe']);
    DB::insert('insert into states (UF, estados) values (?,?)', ['ES','Espírito Santo']);
    DB::insert('insert into states (UF, estados) values (?,?)', ['PR','Paraná']);
    DB::insert('insert into states (UF, estados) values (?,?)', ['SC','Santa Catarina']);
    DB::insert('insert into states (UF, estados) values (?,?)', ['MT','Mato Grosso']);
    DB::insert('insert into states (UF, estados) values (?,?)', ['GO','Goiás']);
    DB::insert('insert into states (UF, estados) values (?,?)', ['DF','Distrito Federal']);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('states');
    }
}
