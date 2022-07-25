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

Route::group(['namespace' => 'App\Http\Controllers'], function(){

    Route::group(['middleware' => ['guest']], function() {

        Route::post('/register', 'RegisterController@register');
        Route::post('/login', 'LoginController@login');


    });

    Route::group(['middleware' => ['auth']], function() {
        Route::get('/logout', 'LogoutController@logout');
    });
    Route::get('email/verify/{id}', 'VerificationController@verify')->name('verification.verify');;
    Route::get('email/resend', 'VerificationController@resend');
});
