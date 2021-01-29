<?php

namespace App\Repositories;

use App\Models\TurnoSupervisor;
use App\Repositories\BaseRepository;

/**
 * Class TurnoSupervisorRepository
 * @package App\Repositories
 * @version November 24, 2020, 4:21 pm UTC
*/

class TurnoSupervisorRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'chofer_id',
        'auxiliar_id'
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
        return TurnoSupervisor::class;
    }
}
