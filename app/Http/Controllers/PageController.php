<?php

namespace App\Http\Controllers;

use App\Movie;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function list (){
       $film = Movie::all();
    //    dd($film);
    return view('list', compact('film'));
    }
}
