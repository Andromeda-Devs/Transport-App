<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class TipoVehiculo
 * @package App\Models
 * @version November 6, 2020, 4:03 am UTC
 *
 * @property string $nombre
 * @property boolean $activo
 */
class TipoVehiculo extends Model
{
    use SoftDeletes;

    public $table = 'tipo_vehiculos';
    

    protected $dates = ['deleted_at'];



    public $fillable = [
        'nombre',
        'activo'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'nombre' => 'string',
        'activo' => 'boolean'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'nombre' => 'required'
    ];

    
}
