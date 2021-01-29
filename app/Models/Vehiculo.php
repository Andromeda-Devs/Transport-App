<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Vehiculo
 * @package App\Models
 * @version November 6, 2020, 4:03 am UTC
 *
 * @property string $patente
 * @property unsignedInteger $TipoVehiculo_id
 * @property string $marca
 * @property string $modelo
 * @property string $nro_chasis
 * @property string $nro_motor
 * @property boolean $activo
 */
class Vehiculo extends Model
{
    use SoftDeletes;

    public $table = 'vehiculos';


    protected $dates = ['deleted_at'];



    public $fillable = [
        'patente',
        'TipoVehiculo_id',
        'marca',
        'modelo',
        'nro_chasis',
        'nro_motor',
        'activo'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'patente' => 'string',
        'marca' => 'string',
        'modelo' => 'string',
        'nro_chasis' => 'string',
        'nro_motor' => 'string',
        'activo' => 'boolean'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'patente' => 'required',
        'TipoVehiculo_id' => 'required'
    ];

    public function tipoVehiculo()
    {
        return $this->belongsTo('App\Models\TipoVehiculo', 'TipoVehiculo_id');
    }

    public function programaciones()
    {
        return $this->hasMany(\App\Models\Programacion::class);
    }
}
