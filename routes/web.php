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

Auth::routes();
Route::group(['middleware' => ['active']], function() {

    Route::get('/', 'HomeController@index')->name('home');
    Route::post('upload', 'UserController@uploadFile')->name('uploadFile');
    Route::get('my-documents', 'UserController@myDocuments')->name('mydocuments');

});

Route::resource('admin/documents', 'DocumentController');
Route::group(['middleware' => ['admin', 'active']], function() {

    Route::get('admin', 'AdminController@index');
    Route::get('admin/notifications', 'NotificationController@index')->name('notifications');

});


// Route::get('/home', 'HomeController@index')->name('home');
