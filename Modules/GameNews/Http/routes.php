<?php

Route::group(['middleware' => 'web', 'prefix' => 'gamenews', 'namespace' => 'Modules\GameNews\Http\Controllers'], function()
{
    Route::get('/', 'GameNewsController@index');
});
