<?php

namespace App\Models;

use Dimsav\Translatable\Translatable;
use Eloquent as Model;

/**
 * Class Location
 * @package App\Admin
 */
class Location extends Model
{
    use Translatable;

    public $table = "locations";
    public $translatedAttributes = ['name'];
    public $fillable = [
        'name',
        'name_en',
    ];

    /**
     * The relations to eager load on every query.
     *
     * @var array
     */
    protected $with = ['translations'];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'name_en' => 'string',
        'name_th' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'name_en' => 'required',
        'name_th' => 'required'
    ];
}
