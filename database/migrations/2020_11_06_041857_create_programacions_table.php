<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProgramacionsTable extends Migration
{

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('programacions', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('requerimiento_id');
            $table->unsignedInteger('equipo')->nullable();
            $table->boolean('aprobado')->nullable();
            $table->unsignedInteger('conductor')->nullable();
            $table->unsignedInteger('auxiliar')->nullable();
            $table->unsignedBigInteger('created_by')->nullable();
            $table->unsignedBigInteger('updated_by')->nullable();
            $table->unsignedBigInteger('deleted_by')->nullable();
            $table->timestamps();
            $table->softDeletes();
            $table->foreign('requerimiento_id')->references('id')->on('requerimientos');
            $table->foreign('equipo')->references('id')->on('vehiculos');
            $table->foreign('conductor')->references('id')->on('users');
            $table->foreign('auxiliar')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('programacions');
    }
}
