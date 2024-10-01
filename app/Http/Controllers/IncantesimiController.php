<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class IncantesimiController extends Controller
{
    public function index()
    { 
        return view('incantesimi.index');
    }
}

