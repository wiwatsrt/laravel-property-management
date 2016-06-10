<?php

namespace App\Models;

use Eloquent as Model;

/**
 * Class SlideHome
 * @package App\Models
 */
class SlideHome extends Model
{
    public $table = "slide_homes";
    
    public $fillable = [
        'filename'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'filename' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'image' => 'required|image'
    ];

    public function getImageUrlAttribute()
    {
        return url('uploads/slideHomes/' . $this->attributes['filename']);
    }
}
