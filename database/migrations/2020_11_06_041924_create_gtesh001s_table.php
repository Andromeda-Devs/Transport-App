<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGtesh001sTable extends Migration
{

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('gtesh001s', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('programacion_id');
            $table->string('nombre_responsable')->nullable();
            $table->string('fono_contacto')->nullable();
            $table->date('fecha')->nullable();
            $table->unsignedInteger('patente_camion')->nullable();
            $table->string('patente_estanque')->nullable();
            $table->string('odometro')->nullable();
            $table->boolean('revision_tecnica_tracto')->nullable();
            $table->date('fecha_revision_tecnica_tracto')->nullable();
            $table->boolean('revision_tecnica_estanque')->nullable();
            $table->date('fecha_revision_tecnica_estanque')->nullable();
            $table->boolean('poliza_seguro_tracto')->nullable();
            $table->date('fecha_poliza_seguro_tracto')->nullable();
            $table->boolean('poliza_seguro_estanque')->nullable();
            $table->date('fecha_poliza_seguro_estanque')->nullable();
            $table->boolean('permiso_circulacion_tracto')->nullable();
            $table->date('fecha_permiso_circulacion_tracto')->nullable();
            $table->boolean('permiso_circulacion_estanque')->nullable();
            $table->date('fecha_permiso_circulacion_estanque')->nullable();
            $table->boolean('procedimientos_trabajo_seguro')->nullable();
            $table->boolean('lista_asistencia')->nullable();
            $table->boolean('ast')->nullable();
            $table->boolean('certificado_minsal')->nullable();
            $table->boolean('check_list_camion')->nullable();
            $table->boolean('guias_de_despacho')->nullable();
            $table->boolean('logo_de_empresa')->nullable();
            $table->boolean('sticker_ultima_mantencion')->nullable();
            $table->boolean('lic_del_conductor')->nullable();
            $table->boolean('credencial_auxiliar')->nullable();
            $table->boolean('credencial_conductor')->nullable();
            $table->boolean('licencia_interna')->nullable();
            $table->boolean('seis_conos')->nullable();
            $table->boolean('cuatro_cunas')->nullable();
            $table->boolean('dos_extintor')->nullable();
            $table->boolean('gata_hidraulica')->nullable();
            $table->boolean('llave_de_rueda')->nullable();
            $table->boolean('triangulos')->nullable();
            $table->boolean('sanitizador')->nullable();
            $table->boolean('radio_transmisora')->nullable();
            $table->boolean('caja_de_herramientas')->nullable();
            $table->boolean('kit_de_invierno')->nullable();
            $table->boolean('botiquin')->nullable();
            $table->boolean('parabrisas')->nullable();
            $table->boolean('senor_somnolencia')->nullable();
            $table->boolean('ventanas')->nullable();
            $table->boolean('cinturon_seguridad')->nullable();
            $table->boolean('tercer_ojo')->nullable();
            $table->boolean('parachoque_delantero')->nullable();
            $table->boolean('parachoque_trasero')->nullable();
            $table->boolean('pertiga_y_baliza')->nullable();
            $table->boolean('retrovisores')->nullable();
            $table->boolean('checkpoint_de_rueda')->nullable();
            $table->boolean('kit_covid')->nullable();
            $table->string('observaciones')->nullable();
            $table->boolean('luces_altas_bajas')->nullable();
            $table->boolean('luces_intermitentes')->nullable();
            $table->boolean('luces_de_estacionamiento')->nullable();
            $table->boolean('luz_y_alarma_de_retroceso')->nullable();
            $table->boolean('luz_de_freno')->nullable();
            $table->boolean('sistema_de_frenos_tracto')->nullable();
            $table->boolean('fugas_de_aceite')->nullable();
            $table->boolean('fugas_de_refrigerante')->nullable();
            $table->boolean('fugas_de_aire')->nullable();
            $table->boolean('sistema_de_direccion')->nullable();
            $table->boolean('tablero_de_instrumentos')->nullable();
            $table->boolean('tapas_de_petroleo')->nullable();
            $table->boolean('guarda_fangos')->nullable();
            $table->boolean('pisaderas')->nullable();
            $table->boolean('plumillas')->nullable();
            $table->boolean('neumaticos_malos')->nullable();
            $table->boolean('neumatico_malo_01')->default(0);
            $table->boolean('neumatico_malo_02')->default(0);
            $table->boolean('neumatico_malo_03')->default(0);
            $table->boolean('neumatico_malo_04')->default(0);
            $table->boolean('neumatico_malo_05')->default(0);
            $table->boolean('neumatico_malo_06')->default(0);
            $table->boolean('neumatico_malo_07')->default(0);
            $table->boolean('neumatico_malo_08')->default(0);
            $table->boolean('neumatico_malo_09')->default(0);
            $table->boolean('neumatico_malo_10')->default(0);
            $table->boolean('estado_de_tubo_escape')->nullable();
            $table->boolean('ac')->nullable();
            $table->boolean('baterias')->nullable();
            $table->boolean('reflectantes')->nullable();
            $table->boolean('logos')->nullable();
            $table->boolean('luces_intermitentes_2')->nullable();
            $table->boolean('luces_de_estacionamiento_2')->nullable();
            $table->boolean('luz_y_alarma_de_retroceso_2')->nullable();
            $table->boolean('luz_de_freno_2')->nullable();
            $table->boolean('parachoques')->nullable();
            $table->boolean('barra_lateral_anticiclista')->nullable();
            $table->boolean('llave_de_descarga_cuatro')->nullable();
            $table->boolean('estado_escotillas')->nullable();
            $table->boolean('estado_pasamanos')->nullable();
            $table->boolean('estado_de_ballestas')->nullable();
            $table->boolean('estado_escaleras')->nullable();
            $table->boolean('sistema_de_frenos')->nullable();
            $table->boolean('fugas_de_aire_2')->nullable();
            $table->boolean('reflectantes_2')->nullable();
            $table->boolean('neumaticos')->nullable();
            $table->boolean('neumatico_malo_001')->default(0);
            $table->boolean('neumatico_malo_002')->default(0);
            $table->boolean('neumatico_malo_003')->default(0);
            $table->boolean('neumatico_malo_004')->default(0);
            $table->boolean('neumatico_malo_005')->default(0);
            $table->boolean('neumatico_malo_006')->default(0);
            $table->boolean('neumatico_malo_007')->default(0);
            $table->boolean('neumatico_malo_008')->default(0);
            $table->boolean('neumatico_malo_009')->default(0);
            $table->boolean('neumatico_malo_010')->default(0);
            $table->boolean('neumatico_malo_011')->default(0);
            $table->boolean('neumatico_malo_012')->default(0);
            $table->boolean('dos_neumaticos_de_repuesto')->nullable();
            $table->text('firma_responsable')->nullable();
            $table->text('firma_vb')->nullable();
            $table->unsignedBigInteger('created_by')->nullable();
            $table->unsignedBigInteger('updated_by')->nullable();
            $table->unsignedBigInteger('deleted_by')->nullable();
            $table->timestamps();
            $table->softDeletes();
            $table->foreign('programacion_id')->references('id')->on('programacions');
            $table->foreign('patente_camion')->references('id')->on('vehiculos');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('gtesh001s');
    }
}
