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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/inquiries',function(){
    $requests = App\Requests::all();
    return view('requests/requests',compact('requests'));
});
Route::get('/requests','RequestsController@create');

Route::post('/requests','RequestsController@store');

Route::get('/gallery',function(){
    return view('gallery');
});
Route::get('/details',function(){
   return view('details');
});
Route::get('/copyright',function(){
    return view('copyright');
});
Route::get('/galleryimages',function(){
    return view('galleryimages');
});
Route::get('/about',function(){
    return view('about');
});
Route::get('/contact',function(){
    return view('contact');
});