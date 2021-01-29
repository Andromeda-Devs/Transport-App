<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class TurnoAuxiliar
 * @package App\Models
 * @version November 24, 2020, 4:22 pm UTC
 *
 * @property string $turno
 * @property unsignedInteger $auxiliar_id
 * @property string $viaje
 * @property unsignedInteger $Aprobado_id
 * @property boolean $concentradora
 * @property boolean $rechazado
 * @property string $motivo
 * @property string $Gtesh010
 * @property string $Gtesh011
 * @property string $Gtesh012
 * @property string $Gtesh018
 */
class TurnoAuxiliar extends Model
{
    use SoftDeletes;

    public $table = 'turno_auxiliars';
    

    protected $dates = ['deleted_at'];



    public $fillable = [
        'programacion_id',
        'turno',
        'auxiliar_id',
        'viaje',
        'Aprobado_id',
        'concentradora',
        'rechazado',
        'motivo',
        'Gtesh010',
        'Gtesh011',
        'Gtesh012',
        'Gtesh018',
        'cumpleGtesh010',
        'cumpleGtesh011',
        'cumpleGtesh012',
        'cumpleGtesh018',
        'enviado'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'turno' => 'string',
        'viaje' => 'string',
        'concentradora' => 'boolean',
        'rechazado' => 'boolean',
        'motivo' => 'string',
        'Gtesh010' => 'string',
        'Gtesh011' => 'string',
        'Gtesh012' => 'string',
        'Gtesh018' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'turno' => 'required',
        'auxiliar_id' => 'required',
        'viaje' => 'required',
        'Aprobado_id' => 'required',
        'motivo' => 'required'
    ];

    public function auxiliar()
    {
        return $this->belongsTo('App\User', 'auxiliar_id');
    }

    public function aprobado()
    {
        return $this->belongsTo('App\User', 'Aprobado_id');
    }

    public function programacion()
    {
        return $this->belongsTo('App\Models\Programacion', 'programacion_id');
    }

    
}
