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
    return view('welcome');
});

//game Routes
Route::group(['middleware'=> 'web'],function(){
  Route::resource('game','\App\Http\Controllers\GameController');
  Route::post('game/{id}/update','\App\Http\Controllers\GameController@update');
  Route::get('game/{id}/delete','\App\Http\Controllers\GameController@destroy');
  Route::get('game/{id}/deleteMsg','\App\Http\Controllers\GameController@DeleteMsg');
});

//gamenews Routes
Route::group(['middleware'=> 'web'],function(){
  Route::resource('gamenews','\App\Http\Controllers\GamenewsController');
  Route::post('gamenews/{id}/update','\App\Http\Controllers\GamenewsController@update');
  Route::get('gamenews/{id}/delete','\App\Http\Controllers\GamenewsController@destroy');
  Route::get('gamenews/{id}/deleteMsg','\App\Http\Controllers\GamenewsController@DeleteMsg');
});

//gamenews_source Routes
Route::group(['middleware'=> 'web'],function(){
  Route::resource('gamenews_source','\App\Http\Controllers\Gamenews_sourceController');
  Route::post('gamenews_source/{id}/update','\App\Http\Controllers\Gamenews_sourceController@update');
  Route::get('gamenews_source/{id}/delete','\App\Http\Controllers\Gamenews_sourceController@destroy');
  Route::get('gamenews_source/{id}/deleteMsg','\App\Http\Controllers\Gamenews_sourceController@DeleteMsg');
});

//devpub Routes
Route::group(['middleware'=> 'web'],function(){
  Route::resource('devpub','\App\Http\Controllers\DevpubController');
  Route::post('devpub/{id}/update','\App\Http\Controllers\DevpubController@update');
  Route::get('devpub/{id}/delete','\App\Http\Controllers\DevpubController@destroy');
  Route::get('devpub/{id}/deleteMsg','\App\Http\Controllers\DevpubController@DeleteMsg');
});

//gamelink Routes
Route::group(['middleware'=> 'web'],function(){
  Route::resource('gamelink','\App\Http\Controllers\GamelinkController');
  Route::post('gamelink/{id}/update','\App\Http\Controllers\GamelinkController@update');
  Route::get('gamelink/{id}/delete','\App\Http\Controllers\GamelinkController@destroy');
  Route::get('gamelink/{id}/deleteMsg','\App\Http\Controllers\GamelinkController@DeleteMsg');
});

//games_link Routes
Route::group(['middleware'=> 'web'],function(){
  Route::resource('games_link','\App\Http\Controllers\Games_linkController');
  Route::post('games_link/{id}/update','\App\Http\Controllers\Games_linkController@update');
  Route::get('games_link/{id}/delete','\App\Http\Controllers\Games_linkController@destroy');
  Route::get('games_link/{id}/deleteMsg','\App\Http\Controllers\Games_linkController@DeleteMsg');
});

//games_series Routes
Route::group(['middleware'=> 'web'],function(){
  Route::resource('games_series','\App\Http\Controllers\Games_seriesController');
  Route::post('games_series/{id}/update','\App\Http\Controllers\Games_seriesController@update');
  Route::get('games_series/{id}/delete','\App\Http\Controllers\Games_seriesController@destroy');
  Route::get('games_series/{id}/deleteMsg','\App\Http\Controllers\Games_seriesController@DeleteMsg');
});

Route::group(['middleware'=> 'web'],function(){
});

//platform Routes
Route::group(['middleware'=> 'web'],function(){
  Route::resource('platform','\App\Http\Controllers\PlatformController');
  Route::post('platform/{id}/update','\App\Http\Controllers\PlatformController@update');
  Route::get('platform/{id}/delete','\App\Http\Controllers\PlatformController@destroy');
  Route::get('platform/{id}/deleteMsg','\App\Http\Controllers\PlatformController@DeleteMsg');
});

//platformtype Routes
Route::group(['middleware'=> 'web'],function(){
  Route::resource('platformtype','\App\Http\Controllers\PlatformtypeController');
  Route::post('platformtype/{id}/update','\App\Http\Controllers\PlatformtypeController@update');
  Route::get('platformtype/{id}/delete','\App\Http\Controllers\PlatformtypeController@destroy');
  Route::get('platformtype/{id}/deleteMsg','\App\Http\Controllers\PlatformtypeController@DeleteMsg');
});

//genre Routes
Route::group(['middleware'=> 'web'],function(){
  Route::resource('genre','\App\Http\Controllers\GenreController');
  Route::post('genre/{id}/update','\App\Http\Controllers\GenreController@update');
  Route::get('genre/{id}/delete','\App\Http\Controllers\GenreController@destroy');
  Route::get('genre/{id}/deleteMsg','\App\Http\Controllers\GenreController@DeleteMsg');
});

//sery Routes
Route::group(['middleware'=> 'web'],function(){
  Route::resource('sery','\App\Http\Controllers\SeryController');
  Route::post('sery/{id}/update','\App\Http\Controllers\SeryController@update');
  Route::get('sery/{id}/delete','\App\Http\Controllers\SeryController@destroy');
  Route::get('sery/{id}/deleteMsg','\App\Http\Controllers\SeryController@DeleteMsg');
});
