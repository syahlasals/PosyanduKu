<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;

class OutController extends Controller
{
    public function logout(Request $request)
    {
    Auth::logout();
 
    $request->session()->invalidate();
    $request->session()->regenerateToken();
    return redirect('/');
    }
}
