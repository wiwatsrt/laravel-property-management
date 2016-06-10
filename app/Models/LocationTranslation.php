<?php

namespace App\Models;

use Eloquent as Model;

/**
 * Class LocationTranslation
 * @package App\Models
 */
class LocationTranslation extends Model
{
    public $timestamps = false;
    
    protected $fillable = ['name'];
}
