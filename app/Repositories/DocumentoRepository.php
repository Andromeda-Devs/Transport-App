<?php

namespace App\Repositories;

use App\Models\Documento;
use App\Repositories\BaseRepository;

/**
 * Class DocumentoRepository
 * @package App\Repositories
 * @version November 6, 2020, 4:19 am UTC
*/

class DocumentoRepository extends BaseRepository
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
        return Documento::class;
    }
}
