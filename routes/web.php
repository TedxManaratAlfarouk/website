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

Route::get('/', 'PagesController@index')->name('index');
Route::get('/about', 'PagesController@about')->name('pages.about');
Route::get('/contact', 'PagesController@contact')->name('pages.contact');

Auth::routes([
    'register' => false,
]);
Route::get('/register/{key}', 'Auth\RegisterController@showRegistrationForm')->name('auth.registrationForm');
Route::post('/register/{key}', 'Auth\RegisterController@register');

Route::get('/register', 'Auth\RegisterController@showRegistration')->name('auth.register');
Route::post('/register', 'Auth\RegisterController@redirectToRegistrationForm');


Route::get('/dashboard', 'DashboardController@index')->name('dashboard');

Route::resource('/profile', 'ProfileController',[
    'except' => [ 'create' ]
]);
