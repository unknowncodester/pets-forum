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

Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');

// api routes
Route::group(['prefix' => 'api'], function () {

    Route::post('posts', 'PostController@store')->middleware('role:admin', 'auth');

    // team
    Route::get('teams', 'TeamController@index');
    Route::get('teams/{id}', 'TeamController@show');
    Route::post('teams', 'TeamController@store');

    // fixtures
    Route::get('matches', 'MatchController@index');
    Route::get('matches/{id}', 'MatchController@show');

    // Teams' Fixtures
    Route::get('teams/{teamId}/matches', 'TeamMatchController@index');
    Route::get('teams/{teamId}/matches/{matchId}', 'TeamMatchController@show');

    // topics
    Route::get('topics', 'TopicController@index');
    Route::get('topics/{id}', 'TopicController@show');

    // posts
    Route::get('posts', 'PostController@index');
    Route::get('posts/{id}', 'PostController@show');

    // league table
    Route::get('league', 'LeagueTableController@index');

});
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
