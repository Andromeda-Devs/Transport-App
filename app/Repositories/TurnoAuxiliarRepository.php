<?php

namespace App\Repositories;

use App\Models\TurnoAuxiliar;
use App\Repositories\BaseRepository;

/**
 * Class TurnoAuxiliarRepository
 * @package App\Repositories
 * @version November 24, 2020, 4:22 pm UTC
*/

class TurnoAuxiliarRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'auxiliar_id',
        'Aprobado_id'
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
        return TurnoAuxiliar::class;
    }
}
