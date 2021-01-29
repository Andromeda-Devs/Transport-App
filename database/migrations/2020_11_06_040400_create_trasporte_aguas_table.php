<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTrasporteAguasTable extends Migration
{

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('trasporte_aguas', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nro_guia');
            $table->dateTime('fecha_inicio');
            $table->string('odometro_inicio')->nullable();
            $table->string('lts_combustible')->nullable();
            $table->string('medidor_inicio')->nullable();
            $table->string('medidor_final')->nullable();
            $table->string('nivel_cloro_inicio')->nullable();
            $table->unsignedInteger('conductor')->nullable();
            $table->unsignedInteger('auxiliar')->nullable();
            $table->unsignedInteger('origen')->nullable();
            $table->unsignedInteger('destino')->nullable();
            $table->unsignedInteger('camion')->nullable();
            $table->unsignedInteger('acoplado')->nullable();
            $table->dateTime('fecha_final')->nullable();
            $table->string('odometro_final')->nullable();
            $table->string('nivel_cloro_final')->nullable();
            $table->text('desviacion_observacion')->nullable();
            $table->text('medidas_adoptadas')->nullable();
            $table->unsignedBigInteger('created_by')->nullable();
            $table->unsignedBigInteger('updated_by')->nullable();
            $table->unsignedBigInteger('deleted_by')->nullable();
            $table->timestamps();
            $table->softDeletes();
            $table->foreign('conductor')->references('id')->on('users');
            $table->foreign('auxiliar')->references('id')->on('users');
            $table->foreign('origen')->references('id')->on('ductos');
            $table->foreign('destino')->references('id')->on('ductos');
            $table->foreign('camion')->references('id')->on('vehiculos');
            $table->foreign('acoplado')->references('id')->on('vehiculos');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('trasporte_aguas');
    }
}
