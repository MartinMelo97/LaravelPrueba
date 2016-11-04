<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class TableArticulos extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Articulos', function (Blueprint $table) {
            $table->increments('id');
            $table->string('title',140);
            $table->text('content');
            $table->integer('user_id')->unsigned();
            $table->integer('categoria_id')->unsigned();

            $table->foreign('user_id')->references('id')->on('Users')->onDelete('cascade');
            $table->foreign('categoria_id')->references('id')->on('Categorias')->onDelete('cascade');
            
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
        Schema::drop('Articulos');
    }
}
