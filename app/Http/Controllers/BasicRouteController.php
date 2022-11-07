<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BasicRouteController extends Controller
{
    /**
     * 
     */
    public function index() 
    {
        echo 'This is basic route for demo.';
    }

    /** 
     * 
     */
    public function show($id) 
    {
        echo $id;
    }

    /**
     * 
     */
    public function defineName() 
    {
        echo 'defineName';
    }
}
