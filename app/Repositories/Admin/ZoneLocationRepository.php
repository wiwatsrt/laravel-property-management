<?php

namespace App\Repositories\Admin;

use App\Models\ZoneLocation;
use App\Repositories\BaseRepository;

class ZoneLocationRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return ZoneLocation::class;
    }

    public function lists($column, $key = null)
    {
        return $this->makeModel()->listsTranslations('name')->lists('name', 'id');
    }
}
