<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
<<<<<<< HEAD
use Illuminate\Support\Facades\Auth;
=======
>>>>>>> 11350aedcdfb3180f838bc7815c4f7e47abf6e55
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = RouteServiceProvider::HOME;

<<<<<<< HEAD
    public function redirectTo(){
        switch (Auth::user()->role) {
            case 1:
                $this->redirectTo = '/entry';
                return $this->redirectTo;
            break;
            case 2:
                $this->redirectTo = '/pengelola';
                return $this->redirectTo;
            break;
            case 3:
                $this->redirectTo = '/ortu';
                return $this->redirectTo;
            break;
            default:
                $this->redirectTo = '/login';
                return $this->redirectTo;
            break;
        }
    }

=======
>>>>>>> 11350aedcdfb3180f838bc7815c4f7e47abf6e55
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }
}
