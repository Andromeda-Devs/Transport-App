<?php

namespace App\Repositories;

use App\Models\Gtesh001;
use App\Repositories\BaseRepository;

/**
 * Class Gtesh001Repository
 * @package App\Repositories
 * @version November 27, 2020, 11:02 pm UTC
*/

class Gtesh001Repository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'programacion_id',
        'patente_camion'
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
        return Gtesh001::class;
    }
}
