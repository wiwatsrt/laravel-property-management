<?php

namespace App\Support;

class PropertyType
{
    protected static $types = [
        '1' => 'buy',
        '2' => 'rent',
    ];

    /**
     * Returns an array of statuses to populate dropdown list.
     *
     * @return array
     */
    public static function lists()
    {
        $types = static::$types;
        foreach ($types as $key => $type) {
            $types[$key] = trans('property.types.' . $type);
        }

        return $types;
    }

    /**
     * Returns the type name.
     *
     * @param $key
     * @return int
     */
    public static function getTypeName($key)
    {
        return isset(static::$types[$key]) ? static::$types[$key] : null;
    }
}