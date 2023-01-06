<?php

namespace App\Http\Controllers;

use App\Helpers\ApiFormatter;
use App\Http\Requests\LoginRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    use \App\Traits\HttpResponse;

    public function login(LoginRequest $request){
        $request->validated($request->all());

        if(!Auth::attempt($request->all())){
            return $this->error(null, "Credential was invalid.", 401);
        }
        
        $token = $request->user()->createToken("LoginTokenOf_" . $request->email)->plainTextToken;
        return $this->success(["token" => $token], "Authenticated",201);
    }

    public function logout(Request $request)
    {
        $user = $request->user();
        $logout = $user->tokens()->delete();
        if(!$logout){
            return $this->error(null, "Failed logout", 400);
        }
        return $this->success(null, "Logged out.", 200);
    }

    public function session(Request $request)
    {
        $user = $request->user();
        return $this->success($user, "Authenticated", 200);
    }
}
