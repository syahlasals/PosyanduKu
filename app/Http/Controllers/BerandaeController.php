<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BerandaeController extends Controller
{
    public function index()
    {
        return view('entry.index');
    }
}
