<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return redirect('admin/dashboard');
});

Route::auth();

Route::get('/home', 'HomeController@index');

// Admin
Route::group(['namespace' => 'Admin','prefix' => 'admin', 'middleware' => ['auth']], function () {
    Route::get('/', 'DashboardController@index');
    Route::get('dashboard', [
        'as' => 'admin.dashboard',
        'uses' => 'DashboardController@index'
    ]);

    Route::resource("slideHomes", "SlideHomeController");
    Route::get('slideHomes/delete/{id}', [
        'as' => 'admin.slideHomes.delete',
        'uses' => 'SlideHomeController@destroy',
    ]);

    Route::resource("pages", "PageController");
    Route::get('pages/delete/{id}', [
        'as' => 'admin.pages.delete',
        'uses' => 'PageController@destroy',
    ]);

    Route::resource("properties", "PropertyController");
    Route::get('properties/delete/{id}', [
        'as' => 'admin.properties.delete',
        'uses' => 'PropertyController@destroy',
    ]);

    Route::resource("locations", "LocationController");
    Route::get('locations/delete/{id}', [
        'as' => 'admin.locations.delete',
        'uses' => 'LocationController@destroy',
    ]);

    Route::resource("zoneLocations", "ZoneLocationController");
    Route::get('zoneLocations/delete/{id}', [
        'as' => 'admin.zoneLocations.delete',
        'uses' => 'ZoneLocationController@destroy',
    ]);
    
    Route::resource("users", "UserController");
    Route::get('users/delete/{id}', [
        'as' => 'admin.users.delete',
        'uses' => 'UserController@destroy',
    ]);

    Route::get('settings', ['as' => 'admin.settings.index', 'uses' => 'SettingController@index',]);
    Route::post('settings/update', ['as' => 'admin.settings.update', 'uses' => 'SettingController@update',]);
});