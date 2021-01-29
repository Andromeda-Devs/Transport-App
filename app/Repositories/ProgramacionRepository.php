<?php

namespace App\Repositories;

use App\Models\Programacion;
use App\Repositories\BaseRepository;

/**
 * Class ProgramacionRepository
 * @package App\Repositories
 * @version November 24, 2020, 2:57 am UTC
*/

class ProgramacionRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'requerimiento_id',
        'equipo',
        'conductor',
        'auxiliar'
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
        return Programacion::class;
    }
}
