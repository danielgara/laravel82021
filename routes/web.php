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

Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name("home.index");

# ADMIN
Route::get('/admin', 'App\Http\Controllers\AdminHomeController@index')->name("admin.home.index");
Route::get('/admin/seed/show/{id}', 'App\Http\Controllers\AdminHomeController@show')->name("admin.show");
Route::get('/admin/seed/create', 'App\Http\Controllers\AdminHomeController@create')->name("admin.create");
Route::post('/admin/seed/save', 'App\Http\Controllers\AdminHomeController@save')->name("admin.save");
Route::get('/admin/seed/list', 'App\Http\Controllers\AdminHomeController@listAll')->name("admin.list");
Route::get('/admin/seed/show/{id}/delete', 'App\Http\Controllers\AdminHomeController@delete')->name("admin.delete");

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/store/{id}', 'App\Http\Controllers\SeedController@show')->name("seed.show");

Route::get('/store', 'App\Http\Controllers\SeedController@listAll')->name("seed.list");
