<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

//Route::get('country', array('as' => 'country.index', 'uses' => 'CountryController@index'));

Route::resource('country', 'CountryController');

Route::resource('league', 'LeagueController');

Route::resource('group', 'GroupController');

Route::resource('team', 'TeamController');

Route::resource('teamAttributes', 'TeamAttributesController');

Route::resource('player', 'PlayerController');

Route::resource('playerAttributes', 'PlayerAttributesController');

Route::resource('match', 'MatchController');

Route::resource('lineup', 'LineupController');

Route::resource('livescore', 'LivescoreController');

Route::resource('standings', 'StandingController');

Route::resource('schedule', 'ScheduleController');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
