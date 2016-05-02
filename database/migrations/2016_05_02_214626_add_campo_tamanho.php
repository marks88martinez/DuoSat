<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddCampoTamanho extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('banner_chico', function (Blueprint $table) {
            $table->string('style_font_size')->default('25px');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('banner_chico', function (Blueprint $table) {
            $table->dropColumn('style_font_size');
        });
    }
}
