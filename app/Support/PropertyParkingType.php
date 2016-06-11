<?php

namespace App\Support;

class PropertyParkingType
{
    protected static $ParkingTypes = [
        '0' => 'none',
        '1' => 'share',
        '2' => 'private',
    ];

    /**
     * Returns an array of statuses to populate dropdown list.
     *
     * @return array
     */
    public static function lists()
    {
        $ParkingTypes = static::$ParkingTypes;
        foreach ($ParkingTypes as $key => $type) {
            $types[$key] = trans('property.parking_types.' . $type);
        }

        return $types;
    }
}