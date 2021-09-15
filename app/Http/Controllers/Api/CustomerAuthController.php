<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Customer;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class CustomerAuthController extends Controller
{
    /**
     * new Customer registration request.
     *
     * @param mixed $request
     *
     * @return void
     */
    public function Register(Request $request)
    {
        $this->validate($request, [
            'name' => 'required',
            'phone' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:8',
        ]);

        $customer = new Customer();
        $customer->name = $request->name;
        $customer->phone = $request->phone;
        $customer->email = $request->email;
        $customer->password = Hash::make($request->password);
        $customer->save();

        $access_token_example = $customer->createToken('passport customer login')->accessToken;

        return response()->json(['token' => $access_token_example], 200);
    }

    /**
     * login user to our application.
     *
     * @param mixed $request
     *
     * @return void
     */
    public function Login(Request $request)
    {
        $login_credentials = [
            'email' => $request->email,
            'password' => $request->password,
        ];
        $customer = Customer::where('email', $login_credentials['email'])->first();
        if (!empty($customer) && Hash::check($login_credentials['password'], $customer->password)) {
            //token generate
            $user_login_token = $customer->createToken('passport customer login')->accessToken;

            return response()->json(['token' => $user_login_token], 200);
        } else {
            return response()->json(['error' => 'Unauthorized Access'], 401);
        }
    }
}
