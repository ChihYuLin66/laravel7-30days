<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BladeTestController extends Controller
{
    public function bladeTest()
    {
        return view('day7.testContent');
    }
}
