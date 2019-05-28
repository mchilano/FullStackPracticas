<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Genre extends Controller
{
  public function index() {

    $genres = App\Genre;

    Public function index() {
      \App\Genre::all();

      Return: view('genres.index')->with(
        'Generos' => $genres;
        ;}



   }
}
