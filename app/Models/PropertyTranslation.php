<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PropertyTranslation extends Model
{
    public $timestamps = false;
    protected $fillable = ['name', 'detail', 'key_feature', 'location_detail'];
}
