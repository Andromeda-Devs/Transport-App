<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Cargo
 * @package App\Models
 * @version November 6, 2020, 4:02 am UTC
 *
 * @property string $nombre
 * @property string $departamento
 * @property boolean $activo
 */
class Cargo extends Model
{
    use SoftDeletes;

    public $table = 'cargos';
    

    protected $dates = ['deleted_at'];



    public $fillable = [
        'nombre',
        'departamento',
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
        'departamento' => 'string',
        'activo' => 'boolean'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'nombre' => 'required',
        'departamento' => 'required'
    ];

    
}
