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

Event::listen('illuminate.query', function($sql){

    var_dump($sql);
});

Route::get('/', 'PagesController@index');
Route::get('/places', 'PlacesController@index');
Route::get('/home', 'PlacesController@getAssociatedPlaces');
Route::get('/{user}/places', 'PlacesController@getAssociatedPlaces');
Route::resource('places', 'PlacesController');
Route::get('uploadimages','ImagesController@create');

Route::post('uploadimage', [
    "uses" => "ImagesController@store",
   "as" => "uploadimage_path"
]);


Route::get('test', function(){

    $places = new App\Place;

    $places = new \Illuminate\Pagination\LengthAwarePaginator($places::all(), $places::count(), 10, 2);

    return view('places.index', ['places' => $places]);


});

Route::patch("places/{id}/updateImage", 'PlacesController@updateImage');

Route::controllers([
    'auth' => 'Auth\AuthController',
    'password' => 'Auth\PasswordController',
]);



