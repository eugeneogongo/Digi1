<?php

namespace App\Repositories;

use App\Models\Incidence;
use App\Repositories\BaseRepository;

/**
 * Class IncidenceRepository
 * @package App\Repositories
 * @version October 15, 2019, 10:52 am UTC
*/

class IncidenceRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'details',
        'route_no',
        'route',
        'noplate',
        'sacco',
        'problem'
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
        return Incidence::class;
    }
}
