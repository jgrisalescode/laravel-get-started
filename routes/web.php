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

/*
Route::get('/', function () {
    return view('welcome');
});
*/

Route::get('/', 'WebsController@index');
Route::get('/home', 'WebsController@index');
Route::get('/about', 'WebsController@about');
Route::get('/contact', 'WebsController@contact');
Route::get('/blog', 'WebsController@blog');

// Using controller for resolve the routes
/*
Route::get('/index/{id}', 'ExampleController@index');
Route::get('/consoleController', 'ConsoleController@console');
Route::get('/consoleControllerResources', 'ConsoleResourcesController@index');
*/
