<?php

namespace App\Repositories;

use App\Models\Employe;
use App\Repositories\BaseRepository;

/**
 * Class EmployeRepository
 * @package App\Repositories
*/

class EmployeRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'name',
        'email', 
        'rut',
        'nacionalidad',
        'sexo',
        'departamento',
        'cargo',
        'estado',
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
        return Employe::class;
    }
}
