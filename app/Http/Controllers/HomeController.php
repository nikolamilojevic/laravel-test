<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    //
    public function show($id)
    {
        return view('single-home', compact('id'));
    }
}
