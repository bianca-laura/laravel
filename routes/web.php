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
use app\Http\Contollers\EventController;

Route::get('/', 'EventController@index');
Route::get('/events/create', 'EventController@create');
Route::get('/events/signin', 'EventController@signin');
Route::get('/events/signup', 'EventController@signup');

/*Route::get('/contact', function () {
    return view('contact');
});

Route::get('/search/{id?}', function ($id = 1) {
    
    return view('search', ['id' => $id]);
});

Route::get('product', function () {
    $busca = request('search');
    return view('product', ['busca' => $busca]);
}); */