<?php

namespace App\Repositories;

use App\Models\Requerimiento;
use App\Repositories\BaseRepository;

/**
 * Class RequerimientoRepository
 * @package App\Repositories
 * @version November 6, 2020, 4:18 am UTC
*/

class RequerimientoRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'nombre_cliente',
        'ducto'
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
        return Requerimiento::class;
    }
}
