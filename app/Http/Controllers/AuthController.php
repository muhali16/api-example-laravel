<?php

namespace App\Http\Controllers;

use App\Helpers\ApiFormatter;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function login(Request $request){
        $data = $request->validate([
            "email" => "required",
            "password" => "required"
        ]);

        $email = User::where("email", $data['email'])->first();
        if(!$email){
            return ApiFormatter::createApi(200, "Email not found");
        }

        if(Auth::attempt($data)){
            $token = $request->user()->createToken("usertoken")->plainTextToken;

            return ApiFormatter::createApi(200, "Authenticated", ["token" => $token, "user" => auth()->user()]);
        }

    }

    public function logout()
    {
        auth()->user()->tokens()->delete();

        return ApiFormatter::createApi(200, "Logged Out", auth()->user());
    }
}
