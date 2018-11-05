<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDatosDiasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('datos_dias', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('cliente_id');
            $table->date('fecha');
            $table->float('peso');
            $table->float('masa_muscular');
            $table->float('grasa_corporal');
            $table->float('grasa_viceral');

            $table->string('todas_las_comidas');
            $table->tinyInteger('actividad_fisica');
            $table->string('que_tipo')->nullable();
            $table->string('que_tiempo')->nullable();
            $table->tinyInteger('suplemento');
            $table->timestamps();

            $table->foreign('cliente_id')->references('id')->on('clientes');

            // $table->primary(['cliente_id','fecha']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('datos_dias');
    }
}
