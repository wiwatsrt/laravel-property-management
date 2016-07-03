<?php

namespace App\Repositories\Admin;

use App\Models\SlideHome;
use App\Repositories\BaseRepository;

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
