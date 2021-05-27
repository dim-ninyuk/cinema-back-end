<?php

namespace App\Http\Controllers;

use App\Genre;
use App\GenreFilm;
use Illuminate\Http\Request;
use App\Film;

class AdminGenreController extends Controller
{
    public function index()
    {
        return Genre::all();
    }
}
