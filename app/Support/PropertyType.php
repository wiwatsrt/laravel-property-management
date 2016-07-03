<?php

namespace App\Support;

class PropertyType extends AbstractSelectList
{
    protected static $languageKey = 'property.types';

    protected static $dropdownArray = [
        '1' => 'buy',
        '2' => 'rent',
    ];
}