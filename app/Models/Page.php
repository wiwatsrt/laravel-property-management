<?php

namespace App\Models;

use Dimsav\Translatable\Translatable;
use Eloquent as Model;

/**
 * Class Page
 * @package App\Models
 */
class Page extends Model
{
    use Translatable;

    public $table = "pages";

    public $translatedAttributes = ['title', 'content'];

    public $fillable = [
        'slug',
        'title',
        'content'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'slug' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'slug' => 'required'
    ];
}
