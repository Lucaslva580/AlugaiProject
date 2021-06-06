<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Administrator extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {Schema::create('administrators', function (Blueprint $table) {
        $table->id();
        $table->string('name');
        $table->string('corporate_email')->unique();
        $table->string('password');
        $table->timestamp('created_at')->nullable();
        $table->timestamp('updated_at');
        });
        
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('administrators');
    }
}
