<?php

namespace App\Repositories\Admin;

use App\Models\Property;
use InfyOm\Generator\Common\BaseRepository;

class PropertyRepository extends BaseRepository
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
        return Property::class;
    }
}
