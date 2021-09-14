<?php

namespace App\Http\Controllers\Api;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class CustomerAuthController extends Controller
{
       
    /**
     * new user registration request
     *
     * @param  mixed $request
     * @return void
     */
    public function Register(Request $request){
        $this->validate($request,[
            'name'=>'required',
            'email'=>'required|email|unique:users',
            'password'=>'required|min:8',
        ]);

        $user=new User();
        $user->name=$request->name;
        $user->email=$request->email;
        $user->password=bcrypt($request->password);
        $user->save();

        $access_token_example = $user->createToken('passport customer login')->accessToken;
        return response()->json(['token'=>$access_token_example],200);
    }

     
    /**
     * login user to our application
     *
     * @param  mixed $request
     * @return void
     */
    public function Login(Request $request){
        $login_credentials=[
            'email'=>$request->email,
            'password'=>$request->password,
        ];
        if(Auth::attempt($login_credentials)){
            //token generate
            $user_login_token= Auth::user()->createToken('passport customer login')->accessToken;
            return response()->json(['token' => $user_login_token], 200);
        }
        else{
            return response()->json(['error' => 'Unauthorized Access'], 401);
        }
    }
}
