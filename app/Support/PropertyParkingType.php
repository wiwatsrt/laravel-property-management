<?php

namespace App\Support;

class PropertyParkingType extends AbstractSelectList
{
    protected static $languageKey = 'property.parking_types';

    protected static $dropdownArray = [
        '0' => 'none',
        '1' => 'share',
        '2' => 'private',
    ];
}