<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Cliente
 * @package App\Models
 * @version November 6, 2020, 4:03 am UTC
 *
 * @property string $rut
 * @property string $nombre
 * @property string $giro
 * @property unsignedInteger $ciudad_id
 * @property string $direccion
 * @property string $telefono
 * @property string $email
 * @property string $nombre_contacto
 * @property string $telefono_contacto
 * @property string $email_contacto
 * @property boolean $activo
 */
class Cliente extends Model
{
    use SoftDeletes;

    public $table = 'clientes';
    

    protected $dates = ['deleted_at'];



    public $fillable = [
        'rut',
        'nombre',
        'giro',
        'ciudad_id',
        'direccion',
        'telefono',
        'email',
        'nombre_contacto',
        'telefono_contacto',
        'email_contacto',
        'activo'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'rut' => 'string',
        'nombre' => 'string',
        'giro' => 'string',
        'direccion' => 'string',
        'telefono' => 'string',
        'email' => 'string',
        'nombre_contacto' => 'string',
        'telefono_contacto' => 'string',
        'email_contacto' => 'string',
        'activo' => 'boolean'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'rut' => 'required',
        'nombre' => 'required',
        'giro' => 'required',
        'ciudad_id' => 'required'
    ];

    public function ciudad()
    {
        return $this->belongsTo('App\Models\Ciudad');
    }
}
