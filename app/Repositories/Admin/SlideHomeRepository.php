<?php

namespace App\Repositories\Admin;

use App\Models\SlideHome;
use InfyOm\Generator\Common\BaseRepository;

class SlideHomeRepository extends BaseRepository
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
        return SlideHome::class;
    }
}
