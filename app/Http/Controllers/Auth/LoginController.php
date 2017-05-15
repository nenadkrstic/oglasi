<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use  Session;
use App\User;


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
    protected $redirectTo = '/';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    /*  public function __construct()

       {


           $this->middleware('guest', ['except' => 'logout']);

       }*/

    public function authenticated(Request $request, $user)



    {
        $password = $user['password'];
        $email = $user['email'];
        $status = $user['status'];

        if(!$status){
            Auth::logout();
            Session::flash('status','trenutno ste blokirani!!!');
            return redirect()->back();
        }elseif (Auth::attempt(['email' => $email, 'password' => $password])) {
            Session::flash('status','Dobrodosli!!!');

            return redirect()->intended('dashboard');
        }
    }

    

   




}

