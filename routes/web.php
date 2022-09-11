<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
Auth::routes();
Route::get('/welcome', function(){
    return view('FormHTML.welcome');
});

Route::get('/admin', function(){
    return view('admin.index');
});


Route::get('/', 'indexController@home');
// Route::get('/register', 'authController@form');
// Route::post('/welcome', 'authController@page');
Route::resource('/profile', 'ProfileController')->only(['index','update']);
Route::resource('/review', 'ReviewController')->only(['index','store']);


// CRUD Routes
Route::get('/rating','ratingController@index')->name('rating.index');  
Route::get('/rating/create','ratingController@create')->name('rating.create');        
Route::post('/rating','ratingController@store')->name('rating.store');
Route::get('/rating/{id}','ratingController@show')->name('rating.show');
Route::get('/rating/{id}/edit','ratingController@edit')->name('rating.edit');
Route::put('/rating/{id}','ratingController@update')->name('rating.update');
Route::delete('/rating/{id}','ratingController@destroy')->name('rating.destroy');

// CRUD Genre Routes
Route::get('/genre','GenreController@index')->name('genre.index');  
Route::get('/genre/create','GenreController@create')->name('genre.create');        
Route::post('/genre','GenreController@store')->name('genre.store');
Route::get('/genre/{id}','GenreController@show')->name('genre.show');
Route::get('/genre/{id}/edit','GenreController@edit')->name('genre.edit');
Route::put('/genre/{id}','GenreController@update')->name('genre.update');
Route::delete('/genre/{id}','GenreController@destroy')->name('genre.destroy');

// CRUD Film Routes
Route::get('/film','FilmController@index')->name('film.index');  
Route::get('/film/create','FilmController@create')->name('film.create');        
Route::post('/film','FilmController@store')->name('film.store');
Route::get('/film/{id}','FilmController@show')->name('film.show');
Route::get('/film/{id}/edit','FilmController@edit')->name('film.edit');
Route::put('/film/{id}','FilmController@update')->name('film.update');
Route::delete('/film/{id}','FilmController@destroy')->name('film.destroy');
