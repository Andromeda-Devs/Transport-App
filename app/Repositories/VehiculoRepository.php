<?php

namespace App\Repositories;

use App\Models\Vehiculo;
use App\Repositories\BaseRepository;

/**
 * Class VehiculoRepository
 * @package App\Repositories
 * @version November 6, 2020, 4:03 am UTC
*/

class VehiculoRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'TipoVehiculo_id'
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
        return Vehiculo::class;
    }
}
