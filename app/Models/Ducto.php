<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Ducto
 * @package App\Models
 * @version November 6, 2020, 4:03 am UTC
 *
 * @property string $descripcion
 * @property string $tipo
 * @property boolean $activo
 */
class Ducto extends Model
{
    use SoftDeletes;

    public $table = 'ductos';


    protected $dates = ['deleted_at'];



    public $fillable = [
        'descripcion',
        'tipo',
        'activo'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'descripcion' => 'string',
        'tipo' => 'string',
        'activo' => 'boolean'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'descripcion' => 'required',
        'tipo' => 'required'
    ];


    public function requerimientos()
    {
        return $this->hasMany(\App\Models\Requerimiento::class);
    }

}
