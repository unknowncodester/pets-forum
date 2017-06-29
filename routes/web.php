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

Route::get('/api', function () {
    return view('welcome');
});

// teams
Route::get('api/teams', 'TeamController@index');
Route::get('api/teams/{id}', 'TeamController@show');
Route::post('api/teams', 'TeamController@store');

// fixtures
Route::get('api/matches', 'MatchController@index');
Route::get('api/matches/{id}', 'MatchController@show');

// teams Fixtures
Route::get('api/teams/{teamId}/matches', 'TeamMatchController@index');
Route::get('api/teams/{teamId}/matches/{matchId}', 'TeamMatchController@show');

// topics
Route::get('api/topics', 'TopicController@index');

// posts
Route::get('api/posts', 'PostController@index');
