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

Route::get('/', function () {
    return view('welcome');
});

//Auth::routes(['verify'=>true]);

//Route::get('/register', 'App\Http\Controllers\Auth\RegisterController@showRegistrationForm')->name('register');
//Route::get('/AAE/register',[App\Http\Controllers\Auth\RegisterController::class,'showRegistrationForm'])->name('register');
//Route::post('/AAE/register',[App\Http\Controllers\Auth\RegisterController::class,'register'])->name('registro');
//Route::post('AAE/registro', 'App\Http\Controllers\Auth\RegisterController@register');

Route::get('/AAE/registro', [
    'as' => 'register',
    'uses' => 'App\Http\Controllers\Auth\RegisterController@showRegistrationForm'
  ]);
  Route::post('/AAE/registro', [
    'as' => 'register',
    'uses' => 'App\Http\Controllers\Auth\RegisterController@register'
  ]);



 //Authentication Routes
 Route::get('/AAE/login','App\Http\Controllers\Auth\LoginController@showLoginForm')->name('login' ) ;
 Route::post('/AAE/login','App\Http\Controllers\Auth\LoginController@login');
 Route::post('/AAE/logout','App\Http\Controllers\Auth\LoginController@logout')->name('logout');


 //Email Verification Routes...
Route::get('/AAE/email/verify','App\Http\Controllers\Auth\VerificationController@show')->name('verification.notice');
Route::get('/AAE/email/verify/{id}/{hash}','App\Http\Controllers\Auth\VerificationController@verify')->name('verification.verify');
Route::get('/AAE/email/resend','App\Http\Controllers\Auth\VerificationController@resend')->name('verification.resend');



Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home')->middleware('verified');
