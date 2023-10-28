<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Register;
use App\Http\Requests\Register_Submit;
use Hash;
use Auth;

class RegisterController extends Controller
{
    public function regiter_submit(Register_Submit $request){

        $hashedPassword = Hash::make($request->input('password'));
        $token = hash('sha256' , time());

        $existingRegister = Register::where('email', $request->email)->first();

        if ($existingRegister) {
            return redirect()->route('welcome')->with('error' , 'Email already exists');
        } else {

            $register = Register::create([
                'email' => $request->email,
                'password' => $hashedPassword,
                'token' => $token,
                'status' => 1
            ]);
        }

       return redirect()->route('welcome')->with('succes' , 'You successfully registered ');

     }
}
