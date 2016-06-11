<?php

namespace App\Providers;

use App\Repositories\Admin\SettingRepository;
use Illuminate\Support\ServiceProvider;

class ConfigServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @param SettingRepository $settingRepository
     */
    public function boot(SettingRepository $settingRepository)
    {
        $settingRepository->setAll();
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
