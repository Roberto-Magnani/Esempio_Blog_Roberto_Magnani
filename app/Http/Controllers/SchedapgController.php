<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


class SchedapgController extends Controller
{
    public function index()
    { 
        return view('scheda_pg.index');
    }
    
}
