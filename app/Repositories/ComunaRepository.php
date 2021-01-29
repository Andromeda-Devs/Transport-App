<?php

namespace App\Repositories;

use App\Models\Comuna;
use App\Repositories\BaseRepository;

/**
 * Class ComunaRepository
 * @package App\Repositories
 * @version November 6, 2020, 4:02 am UTC
*/

class ComunaRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'ciudad_id'
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
        return Comuna::class;
    }
}
