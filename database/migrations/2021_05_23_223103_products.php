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
        $table->integer('userId');
        $table->string('name')->index();
        $table->string('category');
        $table->float('product_value');
        $table->string('description');
        $table->string("image")->nullable();
        $table->integer('alugado')->boolval()->nullable();
        $table->boolean("sys_active");
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
