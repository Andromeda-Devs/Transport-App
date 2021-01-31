<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Spatie\Activitylog\Traits\LogsActivity;

/**
 * Class Documento
 * @package App\Models
 * @version November 6, 2020, 4:19 am UTC
 *
 * @property string $nombre
 */
class Documento extends Model
{
    use SoftDeletes;
    use LogsActivity;

    public $table = 'documentos';
    

    protected $dates = ['deleted_at'];

    protected static $logName = 'documento';
    protected static $logOnlyDirty = true;
    protected static $logFillable = true;

    public $fillable = [
        'nombre'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'nombre' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        
    ];

    
}
