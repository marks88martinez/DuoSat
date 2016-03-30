<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Imagenes extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('imagenes',function( Blueprint $table){

            $table->increments('codigo_imagen');
            $table->integer('codigo_producto', false, true)->nullable();
            $table->text('url_imagenes');


        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {


        Schema::drop('imagenes');
    }
}
