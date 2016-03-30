<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class ProductoAtributo extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('producto_atributo',function(Blueprint $table){
            $table->increments('codigo');
            $table->integer('codigo_atributo', false, true)->nullable();
            $table->integer('codigo_producto', false, true)->nullable();
            $table->text('descripcion');

            $table->foreign('codigo_atributo')->references('codigo_atributo')->on('atributos');
            $table->foreign('codigo_producto')->references('codigo_producto')->on('productos');



        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('producto_atributo');


    }
}
