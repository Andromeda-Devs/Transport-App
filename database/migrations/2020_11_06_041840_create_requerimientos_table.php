<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRequerimientosTable extends Migration
{

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('requerimientos', function (Blueprint $table) {
            $table->increments('id');
            $table->date('fecha_programada')->nullable();
            $table->string('codigo')->nullable();
            $table->unsignedInteger('nombre_cliente')->nullable();
            $table->unsignedInteger('cantidad_de_equipos')->nullable();
            $table->unsignedInteger('ducto')->nullable();
            $table->string('observaciones')->nullable();
            $table->unsignedBigInteger('created_by')->nullable();
            $table->unsignedBigInteger('updated_by')->nullable();
            $table->unsignedBigInteger('deleted_by')->nullable();
            $table->timestamps();
            $table->softDeletes();
            $table->foreign('nombre_cliente')->references('id')->on('clientes');
            $table->foreign('ducto')->references('id')->on('ductos');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('requerimientos');
    }
}
