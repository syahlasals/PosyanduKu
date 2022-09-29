<?php

namespace App\Http\Controllers;
use App\Models\profile;
use Illuminate\Support\Facades\DB;

use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function index()
    {
        $profiles = profile::all();
        return view('dataPosyandu.index', compact('profiles'));
    }
}
