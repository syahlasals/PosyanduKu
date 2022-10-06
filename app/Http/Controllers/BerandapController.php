<?php

namespace App\Http\Controllers;

use App\Models\Berandap;
use Illuminate\Http\Request;


class BerandapController extends Controller
{
    public function index()
    {
        return view('pengelola.index');
    }
}
