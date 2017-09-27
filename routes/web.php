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

Route::middleware('auth')->get('/problem/ranking', 'ProblemController@ranking');
Route::middleware('auth')->resource('problem', 'ProblemController');

Route::middleware('auth')->resource('submission', 'SubmissionController');

Route::middleware('auth')->get('/ranking', 'RankingController@index');
