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

Route::get('/home', function () {
    return view('welcome');
});

Route::get('/admin/login', 'Frontend\LoginController@index')->name('admin.login');
Route::post('/admin/login', 'Frontend\LoginController@login')->name('admin.postlogin');


// Admin Dashboard Route
Route::get('admin/dashboard','Backend\Admin\DashboardController@index')->name('admin.dashboard');
Route::post('admin/logout','Backend\Admin\DashboardController@logout')->name('admin.logout');


