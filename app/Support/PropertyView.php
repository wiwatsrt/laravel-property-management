<?php

namespace App\Support;

class PropertyView
{
    protected static $views = [
        '0' => 'any',
        '1' => 'sea_view',
        '2' => 'lake_view',
        '3' => 'golf_view',
    ];

    /**
     * Returns an array of statuses to populate dropdown list.
     *
     * @return array
     */
    public static function lists()
    {
        $views = static::$views;
        unset($views['0']);
        foreach ($views as $key => $view) {
            $views[$key] = trans('property.views.' . $view);
        }

        return $views;
    }
}