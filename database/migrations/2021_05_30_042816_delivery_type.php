<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

class DeliveryType extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {Schema::create('delivery_type', function (Blueprint $table) {
        $table->id();
        $table->string('tipo_de_delivery');

    });
    DB::insert('insert into delivery_type (id, tipo_de_delivery) values (?, ?)', [1, 'emMãos']);
    DB::insert('insert into delivery_type (id, tipo_de_delivery) values (?, ?)', [2, 'correios']);
    DB::insert('insert into delivery_type (id, tipo_de_delivery) values (?, ?)', [3, 'loggi']);
    DB::insert('insert into delivery_type (id, tipo_de_delivery) values (?, ?)', [4, 'logbee']);
    DB::insert('insert into delivery_type (id, tipo_de_delivery) values (?, ?)', [5, 'shippfy']);
    DB::insert('insert into delivery_type (id, tipo_de_delivery) values (?, ?)', [6, 'james']);
    DB::insert('insert into delivery_type (id, tipo_de_delivery) values (?, ?)', [7, 'outros']);
        //
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('delivery_type');
    }
}
