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

Route::resource('profile/users', 'Api\UserController');
Route::resource('profile/apps', 'Api\AppController');
Route::resource('profile/scores', 'Api\ScoreController');
Route::resource('profile/questions', 'Api\QuestionController');
Route::resource('profile/wins', 'Api\WinController');
Route::get('request/{user_id}/{app_id}', 'Api\RequestController@index');
