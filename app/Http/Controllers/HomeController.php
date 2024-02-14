<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    // Métodos
    public function __invoke()
    {
        return view('home');
    }
    //invoke es cuando solo quiere poner un método
}
