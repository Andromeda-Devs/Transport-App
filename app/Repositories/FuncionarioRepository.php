<?php

namespace App\Repositories;

use App\Models\Funcionario;
use App\Repositories\BaseRepository;

/**
 * Class FuncionarioRepository
 * @package App\Repositories
 * @version November 6, 2020, 4:03 am UTC
*/

class FuncionarioRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'cargo_id'
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
        return Funcionario::class;
    }
}
