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

Route::prefix('a0')->group(function () {

    //All
    Route::resource('all', 'All\AllController');
    Route::get('all/{all}/delete','All\AllController@delete')->name('All.delete');
    //Crud
    Route::resource('crud', 'Crud\CrudController');
    Route::get('crud/{crud}/delete','Crud\CrudController@delete')->name('Crud.delete');

    //404 - Not Found
    Route::fallback(function () {

        abort(404, 'Not Found.');
        // return '<h1>Not Found</h1>';
    });

}); //end route prefix


