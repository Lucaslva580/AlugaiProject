<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Products extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {Schema::create('products', function (Blueprint $table) {
        $table->id();
        $table->string('name')->index();
        $table->string('category');
        $table->float('product_value');
        $table->string('description');
        $table->timestamp('created_at')->nullable();
        $table->timestamp('updated_at');
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
        Schema::dropIfExists('products');
    }
}
