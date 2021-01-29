<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Requerimiento
 * @package App\Models
 * @version November 6, 2020, 4:18 am UTC
 *
 * @property string $fecha_programada
 * @property string $codigo
 * @property unsignedInteger $nombre_cliente
 * @property unsignedInteger $cantidad_de_equipos
 * @property unsignedInteger $ducto
 * @property string $observaciones
 */
class Requerimiento extends Model
{
    use SoftDeletes;

    public $table = 'requerimientos';


    protected $dates = ['deleted_at'];



    public $fillable = [
        'fecha_programada',
        'codigo',
        'nombre_cliente',
        'cantidad_de_equipos',
        'ducto',
        'observaciones',
        'programado'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'fecha_programada' => 'date',
        'codigo' => 'string',
        'observaciones' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        // 'codigo' => 'required',
        'nombre_cliente' => 'required',
        'cantidad_de_equipos' => 'required|min:1',
        'ducto' => 'required'
    ];

    public function cliente()
    {
        return $this->belongsTo('App\Models\Cliente', 'nombre_cliente');
    }

    public function ducto_rel()
    {
        return $this->belongsTo(\App\Models\Ducto::class, 'ducto', 'id');
    }
}
