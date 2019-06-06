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

//esta ruta carga el formulario
Route::get('/genres/create', 'GenreController@create');
//esta ruta lo guarda
Route::post('/crearGenero', 'GenreController@save');
Route::get('/genres/{id}', 'GenreController@oneGenre');

Route::get('/genres', 'GenreController@index');
Route::post('/movies/edit/{id}', 'MovieController@update');

Route::get('/movies/edit/{id}', 'MovieController@edit');
Route::get('/movies/create', 'MovieController@create');
Route::get('/movies', 'MovieController@index');

Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');
Route::get('/', 'MainController@index');


Route::get('/miRuta', function() {
 echo " <h1> Mi primer ruta en
Laravel</h1> ";

});

Route::get('/pelicula/{titulo}', function($titulo) {

  $peliculas = [
 ['title' => 'Avatar', 'poster' => 'images/avatar.jpg' , 'genre' => 'Ciencia Ficción'],
 ['title' => 'Infinity War', 'poster' => 'images/avengers.jpg' , 'genre' => 'Acción'],
 ['title' => 'DeadPool', 'poster' => 'images/deadpool1.jpg' , 'genre' => 'Acción'],
 ['title' => 'Dragon Ball', 'poster' => 'images/dragonball.jpg' , 'genre' => 'Animé'],
 ['title' => 'Dunkerque', 'poster' => 'images/dunkirk.jpg' , 'genre' => 'Belico'],
 ['title' => 'Emoji', 'poster' => 'images/emoji.jpg' , 'genre' => 'Animada'],
 ['title' => 'Inception', 'poster' => 'images/inception1.jpg' , 'genre' => 'Drama'],
 ['title' => 'Moana', 'poster' => 'images/moana.jpg' , 'genre' => 'Animada'],
 ['title' => 'Rogue One', 'poster' => 'images/rogueone.jpg' , 'genre' => 'Acción'],
 ['title' => 'Titanic','poster' => 'images/titanic.jpg' , 'genre' => 'Drama'],
 ];

  foreach ($peliculas as $pelicula) {
    if ( $pelicula['title'] == $titulo) {
      return  '<li>'.$pelicula['title'] .' - '. $pelicula['genre'].'<br>'.'<img src="/'.$pelicula["poster"].'">'.'</li>';

    }
     echo 'No existe la pelicula';

  }

});

Route::get('/peliculas/', function() {


  $peliculas = [
 ['title' => 'Avatar', 'poster' => 'images/avatar.jpg' , 'genre' => 'Ciencia Ficción'],
 ['title' => 'Infinity War', 'poster' => 'images/avengers.jpg' , 'genre' => 'Acción'],
 ['title' => 'DeadPool', 'poster' => 'images/deadpool1.jpg' , 'genre' => 'Acción'],
 ['title' => 'Dragon Ball', 'poster' => 'images/dragonball.jpg' , 'genre' => 'Animé'],
 ['title' => 'Dunkerque', 'poster' => 'images/dunkirk.jpg' , 'genre' => 'Belico'],
 ['title' => 'Emoji', 'poster' => 'images/emoji.jpg' , 'genre' => 'Animada'],
 ['title' => 'Inception', 'poster' => 'images/inception1.jpg' , 'genre' => 'Drama'],
 ['title' => 'Moana', 'poster' => 'images/moana.jpg' , 'genre' => 'Animada'],
 ['title' => 'Rogue One', 'poster' => 'images/rogueone.jpg' , 'genre' => 'Acción'],
 ['title' => 'Titanic','poster' => 'images/titanic.jpg' , 'genre' => 'Drama'],
 ];

 echo '
 <!DOCTYPE html>
 <html lang="en" dir="ltr">
   <head>
     <meta charset="utf-8">
     <link rel="stylesheet" href="/css/estilo.css">
     <title></title>
   </head>
   <body>

   <h1> Listado
    de Pelis</h1>

   </body>
 </html>

  ';

  foreach ($peliculas as $pelicula) {
    echo  '<li>'.$pelicula['title'] .' - '. $pelicula['genre'].'<br>'.'<img src="'.$pelicula["poster"].'">'.'</li>';

  }


});




Route::get('/', function () {
    return view('welcome');
});

?>
