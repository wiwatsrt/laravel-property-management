<?php

namespace App\Support;

class PropertyOwnership extends AbstractSelectList
{
    protected static $languageKey = 'property.ownerships';

    protected static $dropdownArray = [
        '1' => 'leasehold',
        '2' => 'freehold',
        '3' => 'thai_freehold_or_leasehold',
    ];
}