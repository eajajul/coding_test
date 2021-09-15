<?php

namespace App\Http\Controllers\Auth;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class LoginController extends Controller
{    
    /**
     * Index
     *
     * @return view
     */
    public function Index()
    {
        return view('auth.login');
    }
    
    /**
     * Login the requested user
     *
     * @param  mixed $request
     * @return void
     */
    public function Login(Request $request)
    {
        $this->validate($request,[
            'email'=>'required',
            'password'=>'required'
        ]);

        $credentials = $request->only('email', 'password');
        if (Auth::attempt($credentials)) {
            return redirect()->route('Home.home');
        }
        Session::flash('error','Invalid Login credentials');
        return redirect()->route('Login.login');
    }
}
