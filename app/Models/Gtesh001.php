<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Gtesh001
 * @package App\Models
 * @version November 27, 2020, 11:02 pm UTC
 *
 * @property unsignedInteger $programacion_id
 * @property string $nombre_responsable
 * @property string $fono_contacto
 * @property string $fecha
 * @property unsignedInteger $patente_camion
 * @property string $patente_estanque
 * @property string $odometro
 * @property boolean $revision_tecnica_tracto
 * @property string $fecha_revision_tecnica_tracto
 * @property boolean $revision_tecnica_estanque
 * @property string $fecha_revision_tecnica_estanque
 * @property boolean $poliza_seguro_tracto
 * @property string $fecha_poliza_seguro_tracto
 * @property boolean $poliza_seguro_estanque
 * @property string $fecha_poliza_seguro_estanque
 * @property boolean $permiso_circulacion_tracto
 * @property string $fecha_permiso_circulacion_tracto
 * @property boolean $permiso_circulacion_estanque
 * @property string $fecha_permiso_circulacion_estanque
 * @property boolean $procedimientos_trabajo_seguro
 * @property boolean $lista_asistencia
 * @property boolean $ast
 * @property boolean $certificado_minsal
 * @property boolean $check_list_camion
 * @property boolean $guias_de_despacho
 * @property boolean $logo_de_empresa
 * @property boolean $sticker_ultima_mantencion
 * @property boolean $lic_del_conductor
 * @property boolean $credencial_auxiliar
 * @property boolean $credencial_conductor
 * @property boolean $licencia_interna
 * @property boolean $seis_conos
 * @property boolean $cuatro_cunas
 * @property boolean $dos_extintor
 * @property boolean $gata_hidraulica
 * @property boolean $llave_de_rueda
 * @property boolean $triangulos
 * @property boolean $sanitizador
 * @property boolean $radio_transmisora
 * @property boolean $caja_de_herramientas
 * @property boolean $kit_de_invierno
 * @property boolean $botiquin
 * @property boolean $parabrisas
 * @property boolean $senor_somnolencia
 * @property boolean $ventanas
 * @property boolean $cinturon_seguridad
 * @property boolean $tercer_ojo
 * @property boolean $parachoque_delantero
 * @property boolean $parachoque_trasero
 * @property boolean $pertiga_y_baliza
 * @property boolean $retrovisores
 * @property boolean $checkpoint_de_rueda
 * @property boolean $kit_covid
 * @property string $observaciones
 * @property boolean $luces_altas_bajas
 * @property boolean $luces_intermitentes
 * @property boolean $luces_de_estacionamiento
 * @property boolean $luz_y_alarma_de_retroceso
 * @property boolean $luz_de_freno
 * @property boolean $sistema_de_frenos_tracto
 * @property boolean $fugas_de_aceite
 * @property boolean $fugas_de_refrigerante
 * @property boolean $fugas_de_aire
 * @property boolean $sistema_de_direccion
 * @property boolean $tablero_de_instrumentos
 * @property boolean $tapas_de_petroleo
 * @property boolean $guarda_fangos
 * @property boolean $pisaderas
 * @property boolean $plumillas
 * @property boolean $neumaticos_malos
 * @property boolean $neumatico_malo_01
 * @property boolean $neumatico_malo_02
 * @property boolean $neumatico_malo_03
 * @property boolean $neumatico_malo_04
 * @property boolean $neumatico_malo_05
 * @property boolean $neumatico_malo_06
 * @property boolean $neumatico_malo_07
 * @property boolean $neumatico_malo_08
 * @property boolean $neumatico_malo_09
 * @property boolean $neumatico_malo_10
 * @property boolean $estado_de_tubo_escape
 * @property boolean $ac
 * @property boolean $baterias
 * @property boolean $reflectantes
 * @property boolean $logos
 * @property boolean $luces_intermitentes_2
 * @property boolean $luces_de_estacionamiento_2
 * @property boolean $luz_y_alarma_de_retroceso_2
 * @property boolean $luz_de_freno_2
 * @property boolean $parachoques
 * @property boolean $barra_lateral_anticiclista
 * @property boolean $llave_de_descarga_cuatro
 * @property boolean $estado_escotillas
 * @property boolean $estado_pasamanos
 * @property boolean $estado_de_ballestas
 * @property boolean $estado_escaleras
 * @property boolean $sistema_de_frenos
 * @property boolean $fugas_de_aire_2
 * @property boolean $reflectantes_2
 * @property boolean $neumaticos
 * @property boolean $neumatico_malo_001
 * @property boolean $neumatico_malo_002
 * @property boolean $neumatico_malo_003
 * @property boolean $neumatico_malo_004
 * @property boolean $neumatico_malo_005
 * @property boolean $neumatico_malo_006
 * @property boolean $neumatico_malo_007
 * @property boolean $neumatico_malo_008
 * @property boolean $neumatico_malo_009
 * @property boolean $neumatico_malo_010
 * @property boolean $neumatico_malo_011
 * @property boolean $neumatico_malo_012
 * @property boolean $dos_neumaticos_de_repuesto
 * @property string $firma_responsable
 * @property string $firma_vb
 */
class Gtesh001 extends Model
{
    use SoftDeletes;

    public $table = 'gtesh001s';
    

    protected $dates = ['deleted_at'];



    public $fillable = [
        'programacion_id',
        'nombre_responsable',
        'fono_contacto',
        'fecha',
        'patente_camion',
        'patente_estanque',
        'odometro',
        'revision_tecnica_tracto',
        'fecha_revision_tecnica_tracto',
        'revision_tecnica_estanque',
        'fecha_revision_tecnica_estanque',
        'poliza_seguro_tracto',
        'fecha_poliza_seguro_tracto',
        'poliza_seguro_estanque',
        'fecha_poliza_seguro_estanque',
        'permiso_circulacion_tracto',
        'fecha_permiso_circulacion_tracto',
        'permiso_circulacion_estanque',
        'fecha_permiso_circulacion_estanque',
        'procedimientos_trabajo_seguro',
        'lista_asistencia',
        'ast',
        'certificado_minsal',
        'check_list_camion',
        'guias_de_despacho',
        'logo_de_empresa',
        'sticker_ultima_mantencion',
        'lic_del_conductor',
        'credencial_auxiliar',
        'credencial_conductor',
        'licencia_interna',
        'seis_conos',
        'cuatro_cunas',
        'dos_extintor',
        'gata_hidraulica',
        'llave_de_rueda',
        'triangulos',
        'sanitizador',
        'radio_transmisora',
        'caja_de_herramientas',
        'kit_de_invierno',
        'botiquin',
        'parabrisas',
        'senor_somnolencia',
        'ventanas',
        'cinturon_seguridad',
        'tercer_ojo',
        'parachoque_delantero',
        'parachoque_trasero',
        'pertiga_y_baliza',
        'retrovisores',
        'checkpoint_de_rueda',
        'kit_covid',
        'observaciones',
        'luces_altas_bajas',
        'luces_intermitentes',
        'luces_de_estacionamiento',
        'luz_y_alarma_de_retroceso',
        'luz_de_freno',
        'sistema_de_frenos_tracto',
        'fugas_de_aceite',
        'fugas_de_refrigerante',
        'fugas_de_aire',
        'sistema_de_direccion',
        'tablero_de_instrumentos',
        'tapas_de_petroleo',
        'guarda_fangos',
        'pisaderas',
        'plumillas',
        'neumaticos_malos',
        'neumatico_malo_01',
        'neumatico_malo_02',
        'neumatico_malo_03',
        'neumatico_malo_04',
        'neumatico_malo_05',
        'neumatico_malo_06',
        'neumatico_malo_07',
        'neumatico_malo_08',
        'neumatico_malo_09',
        'neumatico_malo_10',
        'estado_de_tubo_escape',
        'ac',
        'baterias',
        'reflectantes',
        'logos',
        'luces_intermitentes_2',
        'luces_de_estacionamiento_2',
        'luz_y_alarma_de_retroceso_2',
        'luz_de_freno_2',
        'parachoques',
        'barra_lateral_anticiclista',
        'llave_de_descarga_cuatro',
        'estado_escotillas',
        'estado_pasamanos',
        'estado_de_ballestas',
        'estado_escaleras',
        'sistema_de_frenos',
        'fugas_de_aire_2',
        'reflectantes_2',
        'neumaticos',
        'neumatico_malo_001',
        'neumatico_malo_002',
        'neumatico_malo_003',
        'neumatico_malo_004',
        'neumatico_malo_005',
        'neumatico_malo_006',
        'neumatico_malo_007',
        'neumatico_malo_008',
        'neumatico_malo_009',
        'neumatico_malo_010',
        'neumatico_malo_011',
        'neumatico_malo_012',
        'dos_neumaticos_de_repuesto',
        'firma_responsable',
        'firma_vb'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'nombre_responsable' => 'string',
        'fono_contacto' => 'string',
        'fecha' => 'date',
        'patente_estanque' => 'string',
        'odometro' => 'string',
        'revision_tecnica_tracto' => 'boolean',
        'fecha_revision_tecnica_tracto' => 'date',
        'revision_tecnica_estanque' => 'boolean',
        'fecha_revision_tecnica_estanque' => 'date',
        'poliza_seguro_tracto' => 'boolean',
        'fecha_poliza_seguro_tracto' => 'date',
        'poliza_seguro_estanque' => 'boolean',
        'fecha_poliza_seguro_estanque' => 'date',
        'permiso_circulacion_tracto' => 'boolean',
        'fecha_permiso_circulacion_tracto' => 'date',
        'permiso_circulacion_estanque' => 'boolean',
        'fecha_permiso_circulacion_estanque' => 'date',
        'procedimientos_trabajo_seguro' => 'boolean',
        'lista_asistencia' => 'boolean',
        'ast' => 'boolean',
        'certificado_minsal' => 'boolean',
        'check_list_camion' => 'boolean',
        'guias_de_despacho' => 'boolean',
        'logo_de_empresa' => 'boolean',
        'sticker_ultima_mantencion' => 'boolean',
        'lic_del_conductor' => 'boolean',
        'credencial_auxiliar' => 'boolean',
        'credencial_conductor' => 'boolean',
        'licencia_interna' => 'boolean',
        'seis_conos' => 'boolean',
        'cuatro_cunas' => 'boolean',
        'dos_extintor' => 'boolean',
        'gata_hidraulica' => 'boolean',
        'llave_de_rueda' => 'boolean',
        'triangulos' => 'boolean',
        'sanitizador' => 'boolean',
        'radio_transmisora' => 'boolean',
        'caja_de_herramientas' => 'boolean',
        'kit_de_invierno' => 'boolean',
        'botiquin' => 'boolean',
        'parabrisas' => 'boolean',
        'senor_somnolencia' => 'boolean',
        'ventanas' => 'boolean',
        'cinturon_seguridad' => 'boolean',
        'tercer_ojo' => 'boolean',
        'parachoque_delantero' => 'boolean',
        'parachoque_trasero' => 'boolean',
        'pertiga_y_baliza' => 'boolean',
        'retrovisores' => 'boolean',
        'checkpoint_de_rueda' => 'boolean',
        'kit_covid' => 'boolean',
        'observaciones' => 'string',
        'luces_altas_bajas' => 'boolean',
        'luces_intermitentes' => 'boolean',
        'luces_de_estacionamiento' => 'boolean',
        'luz_y_alarma_de_retroceso' => 'boolean',
        'luz_de_freno' => 'boolean',
        'sistema_de_frenos_tracto' => 'boolean',
        'fugas_de_aceite' => 'boolean',
        'fugas_de_refrigerante' => 'boolean',
        'fugas_de_aire' => 'boolean',
        'sistema_de_direccion' => 'boolean',
        'tablero_de_instrumentos' => 'boolean',
        'tapas_de_petroleo' => 'boolean',
        'guarda_fangos' => 'boolean',
        'pisaderas' => 'boolean',
        'plumillas' => 'boolean',
        'neumaticos_malos' => 'boolean',
        'neumatico_malo_01' => 'boolean',
        'neumatico_malo_02' => 'boolean',
        'neumatico_malo_03' => 'boolean',
        'neumatico_malo_04' => 'boolean',
        'neumatico_malo_05' => 'boolean',
        'neumatico_malo_06' => 'boolean',
        'neumatico_malo_07' => 'boolean',
        'neumatico_malo_08' => 'boolean',
        'neumatico_malo_09' => 'boolean',
        'neumatico_malo_10' => 'boolean',
        'estado_de_tubo_escape' => 'boolean',
        'ac' => 'boolean',
        'baterias' => 'boolean',
        'reflectantes' => 'boolean',
        'logos' => 'boolean',
        'luces_intermitentes_2' => 'boolean',
        'luces_de_estacionamiento_2' => 'boolean',
        'luz_y_alarma_de_retroceso_2' => 'boolean',
        'luz_de_freno_2' => 'boolean',
        'parachoques' => 'boolean',
        'barra_lateral_anticiclista' => 'boolean',
        'llave_de_descarga_cuatro' => 'boolean',
        'estado_escotillas' => 'boolean',
        'estado_pasamanos' => 'boolean',
        'estado_de_ballestas' => 'boolean',
        'estado_escaleras' => 'boolean',
        'sistema_de_frenos' => 'boolean',
        'fugas_de_aire_2' => 'boolean',
        'reflectantes_2' => 'boolean',
        'neumaticos' => 'boolean',
        'neumatico_malo_001' => 'boolean',
        'neumatico_malo_002' => 'boolean',
        'neumatico_malo_003' => 'boolean',
        'neumatico_malo_004' => 'boolean',
        'neumatico_malo_005' => 'boolean',
        'neumatico_malo_006' => 'boolean',
        'neumatico_malo_007' => 'boolean',
        'neumatico_malo_008' => 'boolean',
        'neumatico_malo_009' => 'boolean',
        'neumatico_malo_010' => 'boolean',
        'neumatico_malo_011' => 'boolean',
        'neumatico_malo_012' => 'boolean',
        'dos_neumaticos_de_repuesto' => 'boolean',
        'firma_responsable' => 'string',
        'firma_vb' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        
    ];

    public function programacion()
    {
        return $this->belongsTo('App\Models\Programacion', 'programacion_id');
    }

    
}
