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

Route::prefix('bo')->group(function () {

    Route::get('/', function () {
        
        //return view('bo.index');
        return redirect()->route('home.index');

    })->name('bo');

    //All
    Route::resource('all', 'All\AllController');
    //UserAuth
    Route::get('AuthAdmin/login','AuthAdmin\UserController@showLoginForm')->name('AuthAdmin.login');
    Route::post('AuthAdmin/login','AuthAdmin\UserController@login');
    Route::post('AuthAdmin/logout','AuthAdmin\UserController@logout')->name('AuthAdmin.logout');
    //UserAdmin
    Route::get('UserAdmin/{UserAdmin}/delete','UserAdmin\UserController@delete')->name('UserAdmin.delete');
    Route::resource('UserAdmin', 'UserAdmin\UserController');
    //User
    Route::resource('user', 'User\UserController');
    //Home
    Route::resource('home', 'Home\HomeController');


    //404 - Not Found
    Route::fallback(function () {

        abort(404, 'Not Found.');
        // return '<h1>Not Found</h1>';
    });

}); //end route prefix


