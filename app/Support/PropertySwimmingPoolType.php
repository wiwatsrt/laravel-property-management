<?php

namespace App\Support;

class PropertySwimmingPoolType
{
    protected static $SwimmingPoolTypes = [
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
        $SwimmingPoolTypes = static::$SwimmingPoolTypes;
        foreach ($SwimmingPoolTypes as $key => $type) {
            $types[$key] = trans('property.swimming_pool_types.' . $type);
        }

        return $types;
    }
}