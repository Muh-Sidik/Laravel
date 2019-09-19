<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function about()
    {
        return view('port.portfolio');
    }

    public function coba()
    {
        return view('coba.index');
    }
}
