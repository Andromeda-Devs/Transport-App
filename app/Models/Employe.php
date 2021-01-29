<?php


namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Employe extends Model
{
    use SoftDeletes;

    public $table = 'table_employe';
    

    protected $dates = ['deleted_at'];

    protected $fillable = [
        'name',
        'email', 
        'rut',
        'nacionalidad',
        'sexo',
        'departamento',
        'cargo',
        'estado',
    ];

    protected $casts = [
        'id' => 'integer',
        'name' => 'string',
        'email' => 'string',
        'nacionalidad' => 'string',
        'sexo' => 'string',
        'departamento' => 'string',
        'estado' => 'boolean'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'name' => 'required',
        'rut' => 'required'
    ];
}
