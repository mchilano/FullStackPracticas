<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Genre extends Model{

  public function index() {
    $genres = \App\Genre::all();
    //dd($genres);
    foreach ($genres as $genre) {
      echo $genre->name. '<br>';

    }
}



}
