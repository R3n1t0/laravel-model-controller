<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Movie;

class MovieController extends Controller
{
    public function index(){

        $movies = Movie::orderBy('date', 'desc')->get();

        return view("movie", compact('movies'));
    }
}
