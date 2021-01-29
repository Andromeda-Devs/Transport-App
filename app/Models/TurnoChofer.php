<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class TurnoChofer
 * @package App\Models
 * @version November 27, 2020, 3:59 pm UTC
 *
 * @property string $turno
 * @property unsignedInteger $chofer_id
 * @property string $viaje
 * @property unsignedInteger $Aprobado_id
 * @property boolean $concentradora
 * @property boolean $rechazado
 * @property string $motivo
 * @property unsignedInteger $Gtesh001_id
 * @property string $Gtesh001
 * @property string $Gtesh002
 * @property string $Gtesh003
 * @property string $Gtesh004
 * @property string $Gtesh005
 * @property string $Gtesh006
 * @property string $Gtesh007
 * @property string $Gtesh008
 * @property string $Gtesh010
 * @property string $Gtesh012
 * @property string $Gtesh013
 * @property string $Gtesh016
 * @property string $Gtesh018
 */
class TurnoChofer extends Model
{
    use SoftDeletes;

    public $table = 'turno_chofers';
    

    protected $dates = ['deleted_at'];



    public $fillable = [
        'programacion_id',
        'turno',
        'chofer_id',
        'viaje',
        'Aprobado_id',
        'concentradora',
        'rechazado',
        'motivo',
        'Gtesh001_id',
        'Gtesh001',
        'Gtesh002',
        'Gtesh003',
        'Gtesh004',
        'Gtesh005',
        'Gtesh006',
        'Gtesh007',
        'Gtesh008',
        'Gtesh010',
        'Gtesh012',
        'Gtesh013',
        'Gtesh016',
        'Gtesh018',
        'cumpleGtesh001',
        'cumpleGtesh002',
        'cumpleGtesh003',
        'cumpleGtesh004',
        'cumpleGtesh005',
        'cumpleGtesh006',
        'cumpleGtesh007',
        'cumpleGtesh008',
        'cumpleGtesh010',
        'cumpleGtesh012',
        'cumpleGtesh013',
        'cumpleGtesh016',
        'cumpleGtesh018',
        'enviado',
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'programacion_id' => 'integer',
        'turno' => 'string',
        'viaje' => 'string',
        'concentradora' => 'boolean',
        'rechazado' => 'boolean',
        'motivo' => 'string',
        'Gtesh001' => 'string',
        'Gtesh002' => 'string',
        'Gtesh003' => 'string',
        'Gtesh004' => 'string',
        'Gtesh005' => 'string',
        'Gtesh006' => 'string',
        'Gtesh007' => 'string',
        'Gtesh008' => 'string',
        'Gtesh010' => 'string',
        'Gtesh012' => 'string',
        'Gtesh013' => 'string',
        'Gtesh016' => 'string',
        'Gtesh018' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'turno' => 'required',
        'chofer_id' => 'required',
        'viaje' => 'required',
        'Aprobado_id' => 'required',
        'motivo' => 'required|max:200',
        'Gtesh001_id' => 'required',
        'programacion_id' => 'required',
    ];

    public function chofer()
    {
        return $this->belongsTo('App\User', 'chofer_id');
    }

    public function aprobado()
    {
        return $this->belongsTo('App\User', 'Aprobado_id');
    }

    public function programacion()
    {
        return $this->belongsTo('App\Models\Programacion', 'programacion_id');
    }
}
