<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Productos extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('productos', function( Blueprint $table){
            $table->increments('codigo_producto');
            $table->string('nombre_producto');
            $table->text('descripcion');
//            $table->integer('codigo_sub_cat', false, true)->nullable();
            $table->integer('codigo_categoria', false, true)->nullable();
            $table->integer('codigo_atributo', false, true)->nullable();
            $table->integer('codigo_imagen', false, true)->nullable();
            $table->integer('estado');

//            $table->foreign('codigo_sub_cat')->references('codigo_sub_categorias')->on('sub_categorias');
            $table->foreign('codigo_categoria')->references('codigo_categoria')->on('categorias');
            $table->foreign('codigo_atributo')->references('codigo_atributo')->on('atributos');
            $table->foreign('codigo_imagen')->references('codigo_imagen')->on('imagenes');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('productos');

    }
}
