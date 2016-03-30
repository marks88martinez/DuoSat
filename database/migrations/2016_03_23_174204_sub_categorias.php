<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class SubCategorias extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sub_categorias', function(Blueprint $table){


            $table->increments('codigo_sub_categorias');
            $table->string('nombre_sub_categoria');
            $table->string('nombre');
            $table->text('descripcion');
            $table->integer('codigo_categoria', false, true)->nullable();

            $table->foreign('codigo_categoria')->references('codigo_categoria')->on('categorias');

        });
    }


    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {


        Schema::drop('sub_categorias');
    }


}
