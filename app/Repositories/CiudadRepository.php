<?php

namespace App\Repositories;

use App\Models\Ciudad;
use App\Repositories\BaseRepository;

/**
 * Class CiudadRepository
 * @package App\Repositories
 * @version November 6, 2020, 4:02 am UTC
*/

class CiudadRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'region_id'
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
        return Ciudad::class;
    }
}
