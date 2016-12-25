<?php

Route::group(['middleware' => 'web', 'prefix' => 'gamelinks', 'namespace' => 'Modules\GameLinks\Http\Controllers'], function()
{
    Route::get('/', 'GameLinksController@index');
});
