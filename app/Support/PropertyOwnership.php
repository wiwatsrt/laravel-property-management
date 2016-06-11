<?php

namespace App\Support;

class PropertyOwnership
{
    protected static $ownerships = [
        '1' => 'leasehold',
        '2' => 'freehold',
        '3' => 'thai_freehold_or_leasehold',
    ];

    /**
     * Returns an array of statuses to populate dropdown list.
     *
     * @return array
     */
    public static function lists()
    {
        $ownerships = static::$ownerships;
        foreach ($ownerships as $key => $ownership) {
            $ownerships[$key] = trans('property.ownerships.' . $ownership);
        }

        return $ownerships;
    }
}