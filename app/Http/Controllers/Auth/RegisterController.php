<?php

namespace App\Http\Controllers\Auth;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{    
    /**
     * Index
     *
     * @return void
     */
    public function Index()
    {
        return view('auth.register');
    }
    
    /**
     * UserRegister
     *
     * @param  mixed $request
     * @return view
     */
    public function UserRegister(Request $request)
    {
        $this->validate($request,[
            'email'=>'required|email|unique:users,email',
            'name'=>'required',
            'phone'=>'required|numeric|unique:users,phone',
            'password'=>'required|confirmed|min:6'
        ]);

        $user= new User();
        $user->email=$request->email;
        $user->name=$request->name;
        $user->phone=$request->phone;
        $user->user_type=1;
        $user->password=Hash::make($request->password);
        $user->save();

        Auth::login($user);
        return redirect()->route('Home.home');
        
    }
}
