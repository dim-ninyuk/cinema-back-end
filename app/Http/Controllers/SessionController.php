<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Film;
use App\Session;

class SessionController extends Controller
{
    function details (Film $film){
        return Session::where('film_id', $film->id)->get();
    }
}
