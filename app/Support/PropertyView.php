<?php

namespace App\Support;

class PropertyView extends AbstractSelectList
{
    protected static $languageKey = 'property.views';

    protected static $dropdownArray = [
        '0' => 'any',
        '1' => 'sea_view',
        '2' => 'lake_view',
        '3' => 'golf_view',
    ];
}