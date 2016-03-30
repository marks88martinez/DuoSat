<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Categorias extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
       Schema::create('categorias', function(Blueprint $table){
            $table->increments('codigo_categoria');
            $table->string('nombre');
            $table->text('descripcion');
            $table->text('url_icon');
       });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('categorias');
    }
}
