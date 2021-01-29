<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class TrasporteAgua
 * @package App\Models
 * @version November 6, 2020, 4:04 am UTC
 *
 * @property string $nro_guia
 * @property string $fecha_inicio
 * @property string $odometro_inicio
 * @property string $lts_combustible
 * @property string $medidor_inicio
 * @property string $medidor_final
 * @property string $nivel_cloro_inicio
 * @property unsignedInteger $conductor
 * @property unsignedInteger $auxiliar
 * @property unsignedInteger $origen
 * @property unsignedInteger $destino
 * @property unsignedInteger $camion
 * @property unsignedInteger $acoplado
 * @property string $fecha_final
 * @property string $odometro_final
 * @property string $nivel_cloro_final
 * @property string $desviacion_observacion
 * @property string $medidas_adoptadas
 */
class TrasporteAgua extends Model
{
    use SoftDeletes;

    public $table = 'trasporte_aguas';
    

    protected $dates = ['deleted_at'];



    public $fillable = [
        'nro_guia',
        'fecha_inicio',
        'odometro_inicio',
        'lts_combustible',
        'medidor_inicio',
        'medidor_final',
        'nivel_cloro_inicio',
        'conductor',
        'auxiliar',
        'origen',
        'destino',
        'camion',
        'acoplado',
        'fecha_final',
        'odometro_final',
        'nivel_cloro_final',
        'desviacion_observacion',
        'medidas_adoptadas'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'nro_guia' => 'string',
        'fecha_inicio' => 'datetime',
        'odometro_inicio' => 'string',
        'lts_combustible' => 'string',
        'medidor_inicio' => 'string',
        'medidor_final' => 'string',
        'nivel_cloro_inicio' => 'string',
        'fecha_final' => 'datetime',
        'odometro_final' => 'string',
        'nivel_cloro_final' => 'string',
        'desviacion_observacion' => 'string',
        'medidas_adoptadas' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'nro_guia' => 'required',
        'fecha_inicio' => 'required',
        'conductor' => 'required',
        'auxiliar' => 'required',
        'origen' => 'required',
        'destino' => 'required',
        'camion' => 'required',
        'acoplado' => 'required'
    ];

    
}
