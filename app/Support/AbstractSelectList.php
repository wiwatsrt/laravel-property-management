<?php

namespace App\Support;

abstract class AbstractSelectList
{
    public static function dropdownArray()
    {
        return static::$dropdownArray;
    }

    /**
     * Returns an array of statuses to populate dropdown list.
     *
     * @param bool $withDefault
     * @return array
     */
    public static function lists($withDefault = false)
    {
        $dropdowns = static::$dropdownArray;

        if (!$withDefault) {
            unset($dropdowns[0]);
        }

        foreach ($dropdowns as $key => $text) {
            $lists[$key] = trans(static::$languageKey . '.' . $text);
        }

        return $lists;
    }

    /**
     * Returns the list text.
     *
     * @param $key
     * @return string
     */
    public static function getText($key)
    {
        return isset(static::$dropdownArray[$key]) ? trans(static::$languageKey . '.' . static::$dropdownArray[$key]) : null;
    }

    /**
     * Returns the list key.
     *
     * @param  string $value
     * @return integer
     */
    public static function getId($value)
    {
        return array_search($value, static::$dropdownArray);
    }
}