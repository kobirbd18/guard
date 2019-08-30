<?php

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


Route::get('admin/login', 'Frontend\LoginController@index')->name('admin.login');
Route::post('admin/login', 'Frontend\LoginController@login')->name('admin.postlogin');



Route::group(
    [
        'as' => 'admin.',
        'prefix' => 'admin',
        'namespace' => 'Backend\Admin',
    ],
    function () {

// Admin Dashboard Route
        Route::get('dashboard','DashboardController@index')->name('dashboard');
        Route::post('logout','DashboardController@logout')->name('logout');
    }
);

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


