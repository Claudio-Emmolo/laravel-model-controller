<?php

namespace App\Http\Controllers\Guest;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Movie;

class HomeController extends Controller
{
    public function home()
    {
        $movies = Movie::all();
        return view('home', compact('movies'));
    }

    public function index()
    {
        return view('welcome');
    }
}
