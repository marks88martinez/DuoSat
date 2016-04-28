<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTablaArchivosDescargas extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('archivos_descargas', function (Blueprint $table) {
            $table->increments('codigo_archivo_descarga');
            $table->string('titulo');
            $table->string('descripcion');
            $table->string('version');
            $table->string('link');
            $table->string('size');
            $table->integer('codigo_descarga', false, true);
            $table->integer('estado')->default(1);
            $table->timestamps();

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
        Schema::drop('archivos_descargas');
    }
}
