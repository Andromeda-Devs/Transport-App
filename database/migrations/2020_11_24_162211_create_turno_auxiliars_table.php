<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTurnoAuxiliarsTable extends Migration
{

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('turno_auxiliars', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('programacion_id');
            $table->string('turno')->nullable();
            $table->unsignedInteger('auxiliar_id')->nullable();
            $table->string('viaje')->nullable();
            $table->unsignedInteger('Aprobado_id')->nullable();
            $table->boolean('concentradora')->nullable();
            $table->boolean('rechazado')->nullable();
            $table->string('motivo')->nullable();
            $table->mediumText('Gtesh010')->nullable();
            $table->boolean('cumpleGtesh010')->default(0);
            $table->mediumText('Gtesh011')->nullable();
            $table->boolean('cumpleGtesh011')->default(0);
            $table->mediumText('Gtesh012')->nullable();
            $table->boolean('cumpleGtesh012')->default(0);
            $table->mediumText('Gtesh018')->nullable();
            $table->boolean('cumpleGtesh018')->default(0);
            $table->boolean('enviado')->default(0);
            $table->unsignedBigInteger('created_by')->nullable();
            $table->unsignedBigInteger('updated_by')->nullable();
            $table->unsignedBigInteger('deleted_by')->nullable();
            $table->timestamps();
            $table->softDeletes();
            $table->foreign('programacion_id')->references('id')->on('programacions');
            $table->foreign('auxiliar_id')->references('id')->on('users');
            $table->foreign('Aprobado_id')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('turno_auxiliars');
    }
}
