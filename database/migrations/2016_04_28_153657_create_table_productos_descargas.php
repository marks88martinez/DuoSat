<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableProductosDescargas extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('productos_descargas', function (Blueprint $table) {
            $table->increments('codigo_productos_descargas');
            $table->integer('codigo_descarga', false, true);
            $table->integer('codigo_producto', false, true);
            $table->timestamps();

            $table->foreign('codigo_producto')->references('codigo_producto')->on('productos');
            $table->foreign('codigo_descarga')->references('codigo_descarga')->on('descargas');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('productos_descargas');
    }
}
