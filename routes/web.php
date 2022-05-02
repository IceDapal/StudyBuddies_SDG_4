<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

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

Route::get('/jss', 'PagesController@jss')->name('jss');

Route::get('/sss', 'PagesController@sss')->name('sss');

Route::get('/sss1', 'PagesController@sss1')->name('sss1');

Route::get('/sss2', 'PagesController@sss2')->name('sss2');

Route::get('/sss3', 'PagesController@sss3')->name('sss3');

Route::get('/about', 'PagesController@about')->name('about');

Route::get('/contact', 'PagesController@contact')->name('contact');

Route::get('/create', 'DashboardController@create');

Route::post('/store', 'DashboardController@store');

Route::get('/curricullums/{id}/edit', 'DashboardController@edit');

Route::put('/curricullums/{id}/update', 'DashboardController@update');

Route::get('/curricullums/{id}/delete', 'DashboardController@delete');

Route::resource('curricullums', 'CurricullumsController');

Auth::routes();

Route::get('/dashboard', [App\Http\Controllers\DashboardController::class, 'index'])->name('dashboard');
