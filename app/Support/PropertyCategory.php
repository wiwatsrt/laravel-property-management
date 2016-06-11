<?php

namespace App\Support;

class PropertyCategory
{
    protected static $categories = [
        '0' => 'all',
        '1' => 'villas_and_houses',
        '2' => 'apartments_and_condos',
        '3' => 'land',
        '4' => 'commercial',
    ];

    /**
     * Returns an array of statuses to populate dropdown list.
     *
     * @return array
     */
    public static function lists()
    {
        $categories = static::$categories;
        unset($categories['0']);
        foreach ($categories as $key => $category) {
            $categories[$key] = trans('property.categories.' . $category);
        }

        return $categories;
    }

    /**
     * Returns the category name.
     *
     * @param $key
     * @return int
     */
    public static function getCategoryName($key)
    {
        return isset(static::$categories[$key]) ? static::$categories[$key] : null;
    }
}