<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class TurnoSupervisor
 * @package App\Models
 * @version November 24, 2020, 4:21 pm UTC
 *
 * @property string $turno
 * @property string $viaje
 * @property unsignedInteger $chofer_id
 * @property unsignedInteger $auxiliar_id
 * @property boolean $concentradora
 * @property string $notas
 */
class TurnoSupervisor extends Model
{
    use SoftDeletes;

    public $table = 'turno_supervisors';
    

    protected $dates = ['deleted_at'];



    public $fillable = [
        'programacion_id',
        'turno',
        'viaje',
        'chofer_id',
        'auxiliar_id',
        'concentradora',
        'notas',
        'autorizado',
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
        'notas' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'turno' => 'required',
        'viaje' => 'required',
        'chofer_id' => 'required',
        'auxiliar_id' => 'required',
        'notas' => 'required'
    ];

    public function chofer()
    {
        return $this->belongsTo('App\User', 'chofer_id');
    }

    public function auxiliar()
    {
        return $this->belongsTo('App\User', 'auxiliar_id');
    }

    public function programacion()
    {
        return $this->belongsTo('App\Models\Programacion', 'programacion_id');
    }

    
}
