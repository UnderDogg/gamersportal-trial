<?php

Route::group(['middleware' => 'web', 'prefix' => 'platforms', 'namespace' => 'Modules\Platforms\Http\Controllers'], function()
{
    Route::get('/', 'PlatformsController@index');
});
