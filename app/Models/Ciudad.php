<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Ciudad
 * @package App\Models
 * @version November 6, 2020, 4:02 am UTC
 *
 * @property string $nombre
 * @property unsignedInteger $region_id
 * @property boolean $activo
 */
class Ciudad extends Model
{
    use SoftDeletes;

    public $table = 'ciudads';
    

    protected $dates = ['deleted_at'];



    public $fillable = [
        'nombre',
        'region_id',
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
        'region_id' => 'required'
    ];

    public function region()
    {
        return $this->belongsTo('App\Models\Region');
    }
    
}
