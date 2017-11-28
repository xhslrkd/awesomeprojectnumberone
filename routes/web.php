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

Route::get('/about', function () {
    return view('about');
});

Route::get('/profile', function () {
    return view('profile');
});
Route::get('form', function () {
    return View::make('form');
});

Route::any('form-submit', function () {
    var_dump(Input::file('file'));
});

Route::get('/addproperty', function () {
    return view('addproperty');

});
Route::get('maintenance', function () {
    return view('maintenance');

});


Auth::routes();

Route::get('/home{name?}', 'HomeController@index')->name('home');

Route::get('manageproperty/{id}', 'ManageProperty@create')->name('manageproperty');

Route::get('managebuilding/{id}', 'ManageBuilding@create')->name('managebuilding');

Route::get('manageunit/{id}', 'ManageUnit@create')->name('manageunit');

Route::get('addbuilding/{id}', 'AddBuildings@create')->name('addbuilding');

Route::get('addunit/{id}', 'AddUnits@create')->name('addunit');

Route::get('addmaintenance', 'MaintenanceRequest@create')->name('addmaintenance');

Route::post('updatedinterests', 'UserController@updateInterests')->name('updateinterests');

Route::post('updatedcart', 'UserController@updateCart')->name('updateCart');

Route::post('updatedproperty', 'RegisterProperty@updateProperty')->name('updateProperty');

Route::post('updatedbuilding/{id}', 'RegisterBuilding@updateBuilding')->name('updateBuilding');

Route::post('updatedunit/{id}', 'RegisterUnit@updateUnits')->name('updateUnit');




