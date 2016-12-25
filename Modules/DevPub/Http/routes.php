<?php

Route::group(['middleware' => 'web', 'prefix' => 'devpub', 'namespace' => 'Modules\DevPub\Http\Controllers'], function()
{
    Route::get('/', 'DevPubController@index');
});
