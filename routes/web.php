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

/*
Route::get('/aboutme', function () {
    //return view('welcome');
    return "About Me";
});

Route::get('/contactme', function () {
    //return view('welcome');
    return "Contact Me";
});

Route::get('/getintouch', function () {
    //return view('welcome');
    return "Post something awesome!";
});

// URL whit paramethers
Route::get('/post/{id}/{author}', function ($id, $author) {
    //return view('welcome');
    return "Take your post number $id and the author is: $author";
})->where('author', '[a-zA-Z]+');
*/

// Using controller for resolve the routes
Route::get('/index/{id}', 'ExampleController@index');
Route::get('/consoleController', 'ConsoleController@console');
Route::get('/consoleControllerResources', 'ConsoleResourcesController@index');
