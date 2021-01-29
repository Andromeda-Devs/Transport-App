<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Comuna
 * @package App\Models
 * @version November 6, 2020, 4:02 am UTC
 *
 * @property string $nombre
 * @property unsignedInteger $ciudad_id
 * @property boolean $activo
 */
class Comuna extends Model
{
    use SoftDeletes;

    public $table = 'comunas';
    

    protected $dates = ['deleted_at'];



    public $fillable = [
        'nombre',
        'ciudad_id',
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
        'nombre' => 'required',
        'ciudad_id' => 'required'
    ];

    public function ciudad()
    {
        return $this->belongsTo('App\Models\Ciudad');
    }    
}
