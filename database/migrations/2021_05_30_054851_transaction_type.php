<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

class TransactionType extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {Schema::create('transaction_type', function (Blueprint $table) {
        $table->id();
        $table->string('transacao_via');

    });
    DB::insert('insert into transaction_type (id, transacao_via) values (?, ?)', [1, 'Dinheiro']);
    DB::insert('insert into transaction_type (id, transacao_via) values (?, ?)', [2, 'Boleto']);
    DB::insert('insert into transaction_type (id, transacao_via) values (?, ?)', [3, 'Paypal']);
    DB::insert('insert into transaction_type (id, transacao_via) values (?, ?)', [4, 'TED']);
    DB::insert('insert into transaction_type (id, transacao_via) values (?, ?)', [5, 'PIX']);
    DB::insert('insert into transaction_type (id, transacao_via) values (?, ?)', [6, 'Cartão de crédito']);
    DB::insert('insert into transaction_type (id, transacao_via) values (?, ?)', [7, 'Outros']);    //
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        
        Schema::dropIfExists('transaction_type');
    }
}
