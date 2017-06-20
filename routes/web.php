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

// teams
Route::get('teams', 'TeamController@index');
Route::get('teams/{id}', 'TeamController@show');
Route::post('teams', 'TeamController@store');

// fixtures
Route::get('fixtures', 'FixtureController@index');
Route::get('fixtures/{id}', 'FixtureController@show');


// teams Fixtures
Route::get('teams/{teamId}/fixtures', 'TeamFixtureController@index');
Route::get('teams/{teamId}/fixtures/{fixtureId}', 'TeamFixtureController@show');

