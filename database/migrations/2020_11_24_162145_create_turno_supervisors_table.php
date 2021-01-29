<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTurnoSupervisorsTable extends Migration
{

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('turno_supervisors', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('programacion_id')->nullable();
            $table->string('turno')->nullable();
            $table->string('viaje')->nullable();
            $table->unsignedInteger('chofer_id')->nullable();
            $table->unsignedInteger('auxiliar_id')->nullable();
            $table->boolean('concentradora')->nullable();
            $table->string('notas')->nullable();
            $table->boolean('autorizado')->nullable();
            $table->unsignedBigInteger('created_by')->nullable();
            $table->unsignedBigInteger('updated_by')->nullable();
            $table->unsignedBigInteger('deleted_by')->nullable();
            $table->timestamps();
            $table->softDeletes();
            $table->foreign('programacion_id')->references('id')->on('programacions');
            $table->foreign('chofer_id')->references('id')->on('users');
            $table->foreign('auxiliar_id')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('turno_supervisors');
    }
}
