<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WinnerController extends Controller
{
    public function index()
    {
        return view('winner.index');
    }
}
