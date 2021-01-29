<?php

namespace App\Repositories;

use App\Models\Departamento;
use App\Repositories\BaseRepository;

/**
 * Class DepartamentoRepository
 * @package App\Repositories
 * @version December 5, 2020, 4:34 am UTC
*/

class DepartamentoRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        
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
        return Departamento::class;
    }
}
