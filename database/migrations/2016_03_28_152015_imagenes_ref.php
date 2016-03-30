<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class ImagenesRef extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('imagenes', function (Blueprint $table) {
            $table->foreign('codigo_producto','productos_imagenes_fk')->references('codigo_producto')->on('productos');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('imagenes', function (Blueprint $table) {
            $table->dropForeign('productos_imagenes_fk');
        });
    }
}
