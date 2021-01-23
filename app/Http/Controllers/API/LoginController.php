<?php

namespace App\Http\Controllers\API;

use Illuminate\Http\Request;
use App\Http\Controllers\API\Controller;

class LoginController extends Controller
{
    public function login(Request $request)
    {
        $creds = $request->only(['username', 'password']);

        $token = auth()->attempt($creds);

        if(!$token = auth()->attempt($creds)) {
            return ResponseFormatter::error(['error' => 'Incorrect email/password']);
        }

        $expired_token = 3600;

        return ResponseFormatter::success([
            'token' => $token,
            'token_expired' => $expired_token,
            'username' => $request->username,            
            'valid' => auth()->check()
            ]);
    }
}
