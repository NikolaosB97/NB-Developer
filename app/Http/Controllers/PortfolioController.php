<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PortfolioController extends Controller
{
    public function index()
    {
        return view('index');
    }

    public function progetti()
    {
        return view('progetti');
    }

    public function contatti()
    {
        return view('contatti');
    }
}
