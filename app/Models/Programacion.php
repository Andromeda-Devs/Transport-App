<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Programacion
 * @package App\Models
 * @version November 24, 2020, 2:57 am UTC
 *
 * @property unsignedInteger $requerimiento_id
 * @property unsignedInteger $equipo
 * @property boolean $aprobado
 * @property unsignedInteger $conductor
 * @property unsignedInteger $auxiliar
 */
class Programacion extends Model
{
    use SoftDeletes;

    public $table = 'programacions';


    protected $dates = ['deleted_at'];



    public $fillable = [
        'requerimiento_id',
        'equipo',
        'aprobado',
        'conductor',
        'auxiliar',
        'acoplado',
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'aprobado' => 'boolean'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'requerimiento_id' => 'required',
        'equipo' => 'required',
        'conductor' => 'required',
        'auxiliar' => 'required'
    ];

    public function conductor_rel()
    {
        return $this->belongsTo('App\User', 'conductor');
    }

    public function auxiliar_rel()
    {
        return $this->belongsTo('App\User', 'auxiliar');
    }

    public function gtesh001()
    {
        return $this->hasOne('App\Models\Gtesh001');
    }

    public function turnoChofer()
    {
        return $this->hasOne('App\Models\TurnoChofer');
    }

    public function turnoSupervisor()
    {
        return $this->hasOne('App\Models\TurnoSupervisor');
    }

    public function vehiculo()
    {
        return $this->belongsTo(\App\Models\Vehiculo::class, 'equipo', 'id');
    }

    public function acoplado_rel()
    {
        return $this->belongsTo(\App\Models\Vehiculo::class, 'acoplado');
    }

    public function requerimiento()
    {
        return $this->belongsTo('App\Models\Requerimiento');
    }

}
