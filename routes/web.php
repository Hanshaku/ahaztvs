<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Route::get('/tes', function(){
    return view('tes.home');
});
Route::get('/ini', function(){
    return view('inifilm.index');
});
Route::get('/admin', function(){
    return view('admin.layoutadmin.master');
});
Route::get('/chart', function(){
    return view('admin.index');
});
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
|         MVC Laravel - Pola perancangan software berbasis objek dg memisahkan sesuai Componentnya

Blade       - Penggunaan layout, agar tampilan yang berulang misalnya header, footer, sidebar 
templating    dan sebagainya tidak perlu dibuat berkali-kali sehingga rawan inkonsistensi.
|             Pada umumnya layout ditempatkan dalam sebuah folder yang bernama layout 
|             dalam folder views. Blade merupakan pengaturan tampilan dengan menggunakan HTML markup,
|             dengan penambahan beberapa directive dari Laravel. 

Model       - Kelola tabel untuk memanipulasi Fillable Database     - Eloquent Relationship - Mass Assignment
View        - Tampilan Front end                                    - .blade Templating Engine
Controller  - Mengatur halaman & alur req yang tampil pd Web view   - Validate - CRUD

Model       - Cast (Singular)           Class       - Huruf awal besar          BLADE ESCAPE CHARACTER
View        - Casts (Plural)            Migration   - casts (Plural)            {{  }}   - ?php echo dg htmlspecialchars
Controller  - Cast (Singular)           Column      - cast (Singular)           {!!  !!} - Tidak melakukan escaping

Public      - Menyimpan asset statis seperti file CSS, JS, IMG 
|             {{ asset(...) }} digunakan agar pada sub root masih bisa terkoneksi (statis) 
Migration   - Membuat struktur DB lewat coding. Melacak perubahan yang terjadi di laravel
|             yang memungkinkan kita dapat mendefinisikan schema/structure untuk DB.
.env        - Pengaturan pada aplikasi yang hanya diperlukan oleh dev user tidak perlu tau.
Route       - Mendaftarkan penjaluran web pada aplikasi.
Route Model - Penjaluran web yg lebih advance pada URL agar tidak mudah ditebak oleh user.
Binding
Closure     - function() hingga ; seharusnya diletakkan pada Controller class

Route::get('/', function () {
    return view('welcome', ['name'] => ['Samantha']); 
}); Mengirimkan data name berisikan Samantha kedalam view welcome

@stack > push       - Digunakan u/ CSS, JS, berjalan berulang kali bilamana looping
@yield > section    - Digunakan u/ content, hanya berjalan 1x bilamana looping

function up()       - DO   ~ php artisan migrate         $table->unsignedBigInteger('user_id');
function down()     - UNDO ~ php artisan migrate reverse/rollback 
|                            membalikkan proses migration pada up() / Kebalikannya
|                            $table->dropForeign(['user_id']); $table->dropColumn(['user_id']); 
                           
Eloquent Relation   -  1 to 1  | - Foreign key hasOne
|                              | + Foreign key belongsTo
|                   -  1 to n  | - Foreign key hasMany
|                              | + Foreign key belongsTo
*/

Route::get('/data-tables', function () {   
    return view('FormHTML.table');         
});

Route::get('/', 'indexController@home');
Route::get('/register', 'authController@form');
Route::post('/welcome', 'authController@page');
Route::resource('/profile', 'ProfileController')->only(['index','update']);
Route::resource('/review', 'ReviewController')->only(['index','store']);
Auth::routes();

// CRUD Routes
Route::get('/cast','CastController@index')->name('cast.index');  
Route::get('/cast/create','CastController@create')->name('cast.create');        
Route::post('/cast','CastController@store')->name('cast.store');
Route::get('/cast/{id}','CastController@show')->name('cast.show');
Route::get('/cast/{id}/edit','CastController@edit')->name('cast.edit');
Route::put('/cast/{id}','CastController@update')->name('cast.update');
Route::delete('/cast/{id}','CastController@destroy')->name('cast.destroy');

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



/* CRUD Routes Modes Binding - Route yang mengikat pada Model
Route::get('/cast','CastController@index')->name('cast.index')->middleware('guest');

Route::get('/cast/create','CastController@create')->name('cast.create')->middleware('auth');        
Route::post('/cast','CastController@store')->name('cast.store')->middleware('auth');

Route::get('/cast/{cast}','CastController@show')->name('cast.show')->middleware('guest');
Route::get('/cast/{cast}/edit','CastController@edit')->name('cast.edit')->middleware('auth');
Route::put('/cast/{cast}','CastController@update')->name('cast.update')->middleware('auth');

Route::delete('/cast/{cast}','CastController@destroy')->name('cast.destroy')->middleware('auth');

----------------------------------------------------------------------------------------

Route::get('/game','GameController@index')->name('game.index');  

Route::get('/game/create','GameController@create')->name('game.create');        
Route::post('/game','GameController@store')->name('game.store');

Route::get('/game/{id}','GameController@show')->name('game.show');
Route::get('/game/{id}/edit','GameController@edit')->name('game.edit');
Route::put('/game/{id}','GameController@update')->name('game.update');

Route::delete('/game/{id}','GameController@destroy')->name('game.destroy');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
*/