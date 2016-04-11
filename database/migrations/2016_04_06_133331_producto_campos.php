<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class ProductoCampos extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('producto_campos', function(Blueprint $table){
            $table->increments('codigo_prod_campo');
            $table->integer('codigo_campo', false, true)->nullable();
            $table->integer('codigo_producto', false, true)->nullable();
            $table->text('descripcion');
            $table->integer('cheked');

            $table->foreign('codigo_campo')->references('codigo_campo')->on('campos');
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
        Schema::drop('producto_campos');
    }
}
