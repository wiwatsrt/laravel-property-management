<?php

namespace App\Support;

class PropertySwimmingPoolType extends AbstractSelectList
{
    protected static $languageKey = 'property.swimming_pool_types';
    
    protected static $dropdownArray = [
        '0' => 'none',
        '1' => 'share',
        '2' => 'private',
    ];
}