<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FirstViewController extends Controller
{
    public function firstView()
    {
        return view('day6.firstView');
    }
}
