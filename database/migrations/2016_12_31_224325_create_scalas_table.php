<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateScalasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('scalas', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('escala')->unsigned()->nullable();
            $table->decimal('precio',5,2)->nullable();
            $table->decimal('precioimp',5,2)->nullable();
            $table->integer('product_id')->unsigned()->nullable();
            $table->foreign('product_id')->nullable()
                  ->references('id')
                  ->on('products')
                  ->onDelete('cascade');
            //$table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('scalas');
    }
}
