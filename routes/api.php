<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::get('/documents', ['middleware' => 'admin', 'uses' => 'DocumentController@apiIndex']);
Route::post('/update/document/{id}', ['middleware' => 'admin', 'uses' => 'DocumentController@apiUpdate']);
Route::get('/delete/document/{id}', ['middleware' => 'admin', 'uses' => 'DocumentController@apiDelete']);
Route::get('/notifications', ['middleware' => 'admin', 'uses' => 'NotificationController@apiIndex']);
Route::post('/update/notifications', ['middleware' => 'admin', 'uses' => 'NotificationController@apiUpdate']);
// Route::middleware('auth:api')->get('/user', function (Request $request) {
//     return $request->user();
// });
