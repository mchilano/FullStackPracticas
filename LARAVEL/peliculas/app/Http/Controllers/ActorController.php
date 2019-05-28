<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Actor;

class ActorController extends Controller
{
    public function index() {

      $actors = Actor::all();


    return view('actors.index')->with ( [
      'actores' => $actors
    ]
  );

}
}
