<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Atributos extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
       Schema::create('atributos', function(Blueprint $table){
           $table->increments('codigo_atributo');

           $table->text('nombre_atributo');

           $table->integer('estado');


       });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {

        Schema::drop('atributos');
    }
}
