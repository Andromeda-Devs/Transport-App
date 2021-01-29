<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTurnoChofersTable extends Migration
{

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('turno_chofers', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('programacion_id');
            $table->string('turno')->nullable();
            $table->unsignedInteger('chofer_id')->nullable();
            $table->string('viaje')->nullable();
            $table->unsignedInteger('Aprobado_id')->nullable();
            $table->boolean('concentradora')->nullable();
            $table->boolean('rechazado')->nullable();
            $table->string('motivo')->nullable();
            $table->unsignedInteger('Gtesh001_id')->nullable();
            $table->mediumText('Gtesh001')->nullable();
            $table->boolean('cumpleGtesh001')->default(0);
            $table->mediumText('Gtesh002')->nullable();
            $table->boolean('cumpleGtesh002')->default(0);
            $table->mediumText('Gtesh003')->nullable();
            $table->boolean('cumpleGtesh003')->default(0);
            $table->mediumText('Gtesh004')->nullable();
            $table->boolean('cumpleGtesh004')->default(0);
            $table->mediumText('Gtesh005')->nullable();
            $table->boolean('cumpleGtesh005')->default(0);
            $table->mediumText('Gtesh006')->nullable();
            $table->boolean('cumpleGtesh006')->default(0);
            $table->mediumText('Gtesh007')->nullable();
            $table->boolean('cumpleGtesh007')->default(0);
            $table->mediumText('Gtesh008')->nullable();
            $table->boolean('cumpleGtesh008')->default(0);
            $table->mediumText('Gtesh010')->nullable();
            $table->boolean('cumpleGtesh010')->default(0);
            $table->mediumText('Gtesh012')->nullable();
            $table->boolean('cumpleGtesh012')->default(0);
            $table->mediumText('Gtesh013')->nullable();
            $table->boolean('cumpleGtesh013')->default(0);
            $table->mediumText('Gtesh016')->nullable();
            $table->boolean('cumpleGtesh016')->default(0);
            $table->mediumText('Gtesh018')->nullable();
            $table->boolean('cumpleGtesh018')->default(0);
            $table->boolean('enviado')->default(0);
            $table->unsignedBigInteger('created_by')->nullable();
            $table->unsignedBigInteger('updated_by')->nullable();
            $table->unsignedBigInteger('deleted_by')->nullable();
            $table->timestamps();
            $table->softDeletes();
            $table->foreign('programacion_id')->references('id')->on('programacions');
            $table->foreign('chofer_id')->references('id')->on('users');
            $table->foreign('Aprobado_id')->references('id')->on('users');
            $table->foreign('Gtesh001_id')->references('id')->on('gtesh001s');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('turno_chofers');
    }
}
