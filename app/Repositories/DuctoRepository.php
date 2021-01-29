<?php

namespace App\Repositories;

use App\Models\Ducto;
use App\Repositories\BaseRepository;

/**
 * Class DuctoRepository
 * @package App\Repositories
 * @version November 6, 2020, 4:03 am UTC
*/

class DuctoRepository extends BaseRepository
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
        return Ducto::class;
    }
}
