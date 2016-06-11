<?php

namespace App\Models;

use Dimsav\Translatable\Translatable;
use Eloquent as Model;

/**
 * Class Property
 * @package App\Models
 */
class Property extends Model
{
    use Translatable;

    public $table = "properties";

    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';

    public $translatedAttributes = ['name', 'detail', 'key_feature', 'location'];

    public $fillable = [
        'location_id',
        'type_id',
        'category_id',
        'view_id',
        'ownership',
        'bedrooms',
        'bathrooms',
        'parking',
        'parking_cars',
        'swimming_pool',
        'land_area',
        'building_area',
        'price',
        'detail',
        'key_feature',
        'location'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'location_id' => 'integer',
        'type_id' => 'integer',
        'category_id' => 'integer',
        'view_id' => 'integer',
        'ownership' => 'integer',
        'bedrooms' => 'boolean',
        'bathrooms' => 'boolean',
        'parking' => 'boolean',
        'parking_cars' => 'boolean',
        'swimming_pool' => 'boolean'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'land_area' => 'required',
        'building_area' => 'required',
        'bedrooms' => 'required',
        'bathrooms' => 'required'
    ];
}
