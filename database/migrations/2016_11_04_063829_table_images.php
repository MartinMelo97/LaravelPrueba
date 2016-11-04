<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class TableImages extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Imagenes', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nombre');
            $table->integer('articulo_id')->unsigned();
            $table->foreign('articulo_id')->references('id')->on('Articulos')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('Imagenes');
    }
}
