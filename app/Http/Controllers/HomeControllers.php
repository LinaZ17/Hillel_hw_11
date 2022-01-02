<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeControllers extends Controller
{
    public function index()
    {
        return '<h2>Hello I`m HomeControllers!<h2/>';
    }
}
