<?php

namespace App\Repositories;

use App\Models\TrasporteAgua;
use App\Repositories\BaseRepository;

/**
 * Class TrasporteAguaRepository
 * @package App\Repositories
 * @version November 6, 2020, 4:04 am UTC
*/

class TrasporteAguaRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'fecha_inicio',
        'conductor',
        'auxiliar',
        'origen',
        'destino',
        'camion',
        'acoplado',
        'fecha_final'
    ];

    /**
     * Return searchable fields
     *
     * @return array
     */
    public function getFieldsSearchable()
    {
        return $this->fieldSearchable;
    }

    /**
     * Configure the Model
     **/
    public function model()
    {
        return TrasporteAgua::class;
    }
}
