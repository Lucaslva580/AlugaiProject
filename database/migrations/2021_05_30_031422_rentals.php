<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Rentals extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {Schema::create('rentals', function (Blueprint $table) {
        $table->id();
        $table->integer('product_id')->index();
        $table->integer('rental_days');
        $table->float('product_value');
        $table->string('transaction_type');
        $table->integer('delivery_type')->nullable();
        $table->float('delivery_fee')->nullable();
        $table->float('rental_value');
        $table->date('negociation_date')->useCurrent();
        $table->date('delivery_start_date');
        $table->date('negociation_end_date');
        $table->date('delivery_prentense_devolution_date');
        $table->date('delivery_end_date')->nullable();
        
    });
        //
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('rentals');
    }
}
