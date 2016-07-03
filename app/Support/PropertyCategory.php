<?php

namespace App\Support;

class PropertyCategory extends AbstractSelectList
{
    protected static $languageKey = 'property.categories';

    protected static $dropdownArray = [
        '0' => 'all',
        '1' => 'villas_and_houses',
        '2' => 'apartments_and_condos',
        '3' => 'land',
        '4' => 'commercial',
    ];
}