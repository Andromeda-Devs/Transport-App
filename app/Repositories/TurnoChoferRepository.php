<?php

namespace App\Repositories;

use App\Models\TurnoChofer;
use App\Repositories\BaseRepository;

/**
 * Class TurnoChoferRepository
 * @package App\Repositories
 * @version November 27, 2020, 3:59 pm UTC
*/

class TurnoChoferRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'chofer_id',
        'Aprobado_id',
        'Gtesh001_id'
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
        return TurnoChofer::class;
    }
}
