<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PerpusController extends Controller
{
    public function index()
    {
        return view('perpus.index');
    }
}
