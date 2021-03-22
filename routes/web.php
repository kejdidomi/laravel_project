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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

// Access UserController inside app> Http > Controllers > Admin 
//Route::resource('admin/users', 'Admin\UserController', ['except'=>["store", 'show', 'create']]);
// Lets remove the need for Admin in Admin\UserController
// the prefix adds admin at the start of the url
Route::namespace("Admin")->prefix("admin")->name("admin.")->middleware('can:manage-users')->group(function(){
    Route::resource('users', 'UserController', ['except'=>["store", 'show', 'create']]);

    
});
