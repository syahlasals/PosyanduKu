<?php

namespace App\Http\Controllers;
use App\Models\Profile;
use Illuminate\Support\Facades\DB;

use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function index()
    {
        $profiles = Profile::with('imunisasis')->get();
        return view('pengelola.dataPosyandu.index', ['profilesList'=>$profiles]);
    }
}
