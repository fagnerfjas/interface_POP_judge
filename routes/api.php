<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::prefix('problem')->group(function () {
    Route::get('/', 'ProblemController@lista');
    Route::post('create', 'ProblemController@store');
});


Route::prefix('submissoes')->group(function () {
    Route::get('/', 'SubmissionController@lista');
    Route::post('create', 'ProblemController@store');
});

Route::prefix('ranking')->group(function () {
    Route::get('/', 'RankingController@rankingGeral');
});