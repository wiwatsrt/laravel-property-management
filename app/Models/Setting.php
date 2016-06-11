<?php

namespace App\Models;

use Eloquent as Model;

/**
 * Class Setting
 * @package App\Models
 */
class Setting extends Model
{
    public $table = "settings";
    
    public $fillable = [
        'setting_key',
        'setting_value'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'setting_key' => 'string',
        'setting_value' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [

    ];
}
