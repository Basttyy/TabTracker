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

Route::group(['prefix' => 'auth'], function ($router) {
    Route::post('/login', 'AuthController@login');
    Route::post('/register', function (Request $request) {
        return ['message' => 'Your user was registered, Have fun!'];
    });
    Route::post('/logout', 'AuthController@logout');
    Route::post('/refresh', 'AuthController@refresh');
    Route::post('/profile', 'AuthController@me');
});

// Route::get('v1/auth/email/verify/{id}', 'Auth\Api\VerificationApiController@verify')->name('verificationapi.verify');
// Route::get('v1/auth/email/resend', 'Auth\Api\VerificationApiController@resend')->name('verificationapi.resend');
// Route::post('v1/auth/resetpassword', 'Auth\Api\ResetPasswordController@sendResetLink');
// Route::put('v1/auth/resetpassword', 'Auth\Api\ResetPasswordController@resetPassword');
// Route::put('v1/auth/changepassword', 'Auth\Api\ResetPasswordController@changePassword');
