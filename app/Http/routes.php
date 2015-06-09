<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/


Route::get('/', 'PagesController@index');
Route::get('/places', 'PlacesController@index');
Route::resource('places', 'PlacesController');
Route::get('uploadimages','ImagesController@create');

Route::post('uploadimage', [
    "uses" => "ImagesController@store",
   "as" => "uploadimage_path"
]);

Route::get('uploadimage',function(){

    return "Hell";

});

Route::get('test', function(){

    Storage::makeDirectory("hello");

});

Route::patch("places/{id}/updateImage", 'PlacesController@updateImage');

Route::controllers([
    'auth' => 'Auth\AuthController',
    'password' => 'Auth\PasswordController',
]);



