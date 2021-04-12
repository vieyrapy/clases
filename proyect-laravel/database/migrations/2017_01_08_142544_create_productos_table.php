<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::create('productos', function (Blueprint $table) {
        $table->engine = 'InnoDB';
        $table->increments('id_productos');
        $table->string('nombre_producto');
        $table->integer('precio');
        $table->integer('id_marcas')->length(10)->unsigned();
        $table->timestamps();

        $table->foreign('id_marcas')->references('id_marcas')->on('marcas');
      });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('productos');
    }
}
