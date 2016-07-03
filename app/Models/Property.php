<?php

namespace App\Models;

use App\Support\PropertyCategory;
use App\Support\PropertyType;
use Dimsav\Translatable\Translatable;
use Eloquent as Model;
use App\Support\CurrencyFormatter;

/**
 * Class Property
 * @package App\Models
 */
class Property extends Model
{
    use Translatable;

    public $table = "properties";
    
    public $translatedAttributes = ['name', 'detail', 'key_feature', 'location_detail'];

    /**
     * The relations to eager load on every query.
     *
     * @var array
     */
    //protected $with = ['translations'];

    public $fillable = [
        'location_id',
        'type_id',
        'category_id',
        'view_id',
        'ownership',
        'image',
        'bedrooms',
        'bathrooms',
        'parking',
        'parking_cars',
        'swimming_pool',
        'land_area',
        'building_area',
        'price',
        'name',
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
        'image' => 'required',
        'land_area' => 'required',
        'building_area' => 'required',
        'bedrooms' => 'required',
        'bathrooms' => 'required'
    ];

    public function getFormattedPriceAttribute()
    {
        return CurrencyFormatter::thousandsCurrencyFormat($this->attributes['price']);
    }

    public function getImageUrlAttribute()
    {
        if ($this->attributes['image'] != null) {
            return asset('uploads/property/' . $this->attributes['image']);
        }else{
            return '';
        }
    }

    public function getTypeAttribute()
    {
        return PropertyType::getText($this->attributes['type_id']);
    }

    public function getCategoryAttribute()
    {
        return PropertyCategory::getText($this->attributes['category_id']);
    }

    public function location()
    {
        return $this->belongsTo('App\Models\Location');
    }
}
