<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class TableTags extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Tags', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nombre',100);
            $table->timestamps();
        });

        /*Creamos una tabla pivote*/
        Schema::create('articulo_tag', function (Blueprint $table){
            $table->increments('id');
            $table->integer('articulo_id')->unsigned();
            $table->integer('tag_id')->unsigned();
            $table->foreign('articulo_id')->references('id')->on('Articulos');
            $table->foreign('tag_id')->references('id')->on('Tags');
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
        Schema::drop('Tags');
    }
}
