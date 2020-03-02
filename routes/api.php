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

Route::resource('profile/users', 'Api\UserController')/*->middleware('auth')*/;
Route::resource('profile/apps', 'Api\AppController')/*->middleware('auth')*/;
Route::resource('profile/scores', 'Api\ScoreController')/*->middleware('auth')*/;
Route::resource('profile/questions', 'Api\QuestionController')/*->middleware('auth')*/;
Route::resource('profile/wins', 'Api\WinController')/*->middleware('auth')*/;

#App
Route::get('info_user/{fb_id}/{app_id}', 'Api\RequestController@info_user')/*->middleware('auth')*/;
Route::get('info_question/{app_id}', 'Api\RequestController@info_question')/*->middleware('auth')*/;
Route::get('info_result/{app_id}', 'Api\RequestController@info_result')/*->middleware('auth')*/;
Route::get('info_score/{app_id}', 'Api\RequestController@info_score')/*->middleware('auth')*/;
