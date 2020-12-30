<?php

namespace App\Http\Controllers\API;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class ApiAuthController extends Controller
{
    // login system with api
    public function login(Request $request)
    {
        Auth::attempt($request->only(['email', 'password']));
        $status = 200;
        $response = [
            'user' => Auth::user()
        ];

       return response()->json($response, $status);
    }

    // register system with api
    public function register(Request $request)
    {
        $status = 200;
        $user = User::create($request->except('role_id', 'image', 'password') +
                    [
                        'role_id' => 3,
                        'image' => 'user.png',
                        'password' => Hash::make($request->password)
                    ]);
        return response()->json($user, $status);
    }

}
