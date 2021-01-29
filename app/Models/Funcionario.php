<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Funcionario
 * @package App\Models
 * @version November 6, 2020, 4:03 am UTC
 *
 * @property string $rut
 * @property string $nombre
 * @property string $nacionalidad
 * @property integer $sexo
 * @property string $departamento
 * @property unsignedInteger $cargo_id
 * @property boolean $estado
 */
class Funcionario extends Model
{
    use SoftDeletes;

    public $table = 'funcionarios';
    

    protected $dates = ['deleted_at'];



    public $fillable = [
        'rut',
        'nombre',
        'nacionalidad',
        'sexo',
        'departamento',
        'cargo_id',
        'estado'
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
        'nacionalidad' => 'string',
        'sexo' => 'integer',
        'departamento' => 'string',
        'estado' => 'boolean'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'rut' => 'required',
        'nombre' => 'required',
        'nacionalidad' => 'required',
        'departamento' => 'required',
        'cargo_id' => 'required'
    ];

    
}
