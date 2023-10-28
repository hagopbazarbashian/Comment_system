<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Register;
use App\Http\Requests\Login_Submit;
use Auth;

class LoginController extends Controller
{
    public function login_submit(Login_Submit $request){

        $credential = [
            'email' => $request->email,
            'password' => $request->password
        ];

        if(Auth::guard('register')->attempt($credential)) {
            return redirect()->route('user_dashboard');
        } else {
            return redirect()->route('welcome')->with('error', 'Information is not correct!');
        }

    }
}
