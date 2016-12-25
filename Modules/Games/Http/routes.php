<?php

Route::group(['middleware' => 'web', 'prefix' => 'games', 'namespace' => 'Modules\Games\Http\Controllers'], function()
{
    Route::get('/', 'GamesController@index');
});
