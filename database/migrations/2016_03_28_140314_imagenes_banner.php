<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class ImagenesBanner extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
       Schema::create('imagenes_banner', function( Blueprint $table){
           $table->increments('codigo_imagen');
           $table->string('nombre_banner');
           $table->text('url_banner');
       });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('imagenes_banner');
    }
}
