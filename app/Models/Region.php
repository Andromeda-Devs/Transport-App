<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Region
 * @package App\Models
 * @version November 6, 2020, 4:02 am UTC
 *
 * @property string $nombre
 * @property string $pais
 * @property boolean $activo
 */
class Region extends Model
{
    use SoftDeletes;

    public $table = 'regions';
    

    protected $dates = ['deleted_at'];



    public $fillable = [
        'nombre',
        'pais',
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
        'pais' => 'string',
        'activo' => 'boolean'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'nombre' => 'required',
        'pais' => 'required'
    ];

    public function paisRel()
    {
        return $this->belongsTo('App\Models\Pais', 'pais');
    }

    
}
