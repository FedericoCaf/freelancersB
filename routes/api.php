<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

// Route::middleware('auth:api')->get('/user', function (Request $request) {
//     return $request->user();
// });

Route::namespace('Api')
    ->group(function(){
        Route::get('/', 'UserController@index');

        Route::get('categories/{name}', 'UserController@getCategoryUser');

        Route::get('categories/search', 'UserController@searchCategory');

        Route::get('profile/{user.slug}', 'UserController@show');

        Route::post('message/', 'MessageController@store');

        Route::post('review/', 'ReviewController@store');

        Route::post('review/{slug}', 'ReviewController@getReview');

    });
