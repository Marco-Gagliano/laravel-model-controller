<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Movie;
use Facade\Ignition\DumpRecorder\Dump;

class MovieController extends Controller
{
    public function index(){

        $films = Movie::all();

        // dump($films);

        return view('movies', compact('films'));
    }
}
