<?php

namespace App\Repositories;

use App\Models\Pais;
use App\Repositories\BaseRepository;

/**
 * Class PaisRepository
 * @package App\Repositories
 * @version December 5, 2020, 4:35 am UTC
*/

class PaisRepository extends BaseRepository
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
        return Pais::class;
    }
}
