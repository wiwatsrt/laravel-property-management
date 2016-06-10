<?php

namespace App\Models;

use Dimsav\Translatable\Translatable;
use Eloquent as Model;

/**
 * Class ZoneLocation
 * @package App\Models
 */
class ZoneLocation extends Model
{
    use Translatable;

    public $table = "zone_locations";

    public $translatedAttributes = ['name'];

    public $fillable = [
        'name_en',
        'name'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'name_en' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'name_en' => 'required'
    ];
}
