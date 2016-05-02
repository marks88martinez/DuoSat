<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddCamposTextoYPosicionesABanners extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('imagenes_banner', function (Blueprint $table) {
            $table->text('texto');
            $table->string('style_font_size')->default('40px');
            $table->string('style_padding_bottom')->default('30px');
            $table->string('style_left')->default('20%');
            $table->string('style_right')->default('20%');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('imagenes_banner', function (Blueprint $table) {
            $table->dropColumn('texto');
            $table->dropColumn('style_font_size');
            $table->dropColumn('style_padding_bottom');
            $table->dropColumn('style_left');
            $table->dropColumn('style_right');
        });
    }
}
