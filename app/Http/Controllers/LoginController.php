<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Hash;
use App\Models\User;
use Auth;
class LoginController extends Controller
{
    public function check(Request $request){
        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);

        if (Auth::attempt($credentials))
        {
            return response()->json([ 'status' => true ,
                'message' => "Success"
            ]);
        }
        return response()->json(['status' => false ,
            'message' => "Fail"

        ]);
    }
}
