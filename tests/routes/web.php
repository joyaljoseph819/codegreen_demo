<?php

use Illuminate\Support\Facades\Route;

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

// Route::get('/', function () {
    // return view('welcome');
// });
Route::get('/','CodeGreenAuthHandler@viewRoot');
Route::post('postCred','CodeGreenAuthHandler@getLoginCred');

Route::view('login','codegreen.login')->name('login');
Route::post('login','CodeGreenAuthHandler@emailOTP');

Route::get('verify_otp','CodeGreenAuthHandler@viewOTP')->name('otp');
Route::post('verify_otp','CodeGreenAuthHandler@confirmOTP');
Route::post('resend_otp','CodeGreenAuthHandler@resendOTP');

Route::get('logout','CodeGreenAuthHandler@logOut')->name('logout');

Route::get('view_profile','CodeGreenUserService@viewProfile')->name('view_profile');

Route::get('edit_profile','CodeGreenUserService@editProfile')->name('edit_profile');
Route::post('edit_profile','CodeGreenUserService@updateProfile')->name('edit_profile');

Route::get('credentials','CodeGreenUserService@editCredentials')->name('credentials');
Route::post('credentials','CodeGreenUserService@updateCredentials')->name('credentials');
// Route::get('view_profile','CodeGreenUserService@viewProfile')->name('view_profile');
