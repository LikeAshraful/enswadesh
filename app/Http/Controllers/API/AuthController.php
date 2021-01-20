<?php

namespace App\Http\Controllers\API;

use Mail;
use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Mail\RegistrationConfirmationEmail;

class AuthController extends Controller
{
    // login system with api
    public function login(Request $request)
    {
        $status = 200;
        $loginData = $request->validate([
            'email' => 'email|required',
            'password' => 'required'
        ]);

        if (!Auth()->attempt($loginData)) {
            return response(['message' => 'Invalid Credentials']);
        }

        $accessToken = Auth()->user()->createToken('authToken')->accessToken;

        return response(['user' => Auth()->user(), 'access_token' => $accessToken], $status);
    }

    // register system with api
    public function register(Request $request)
    {
        $status = 200;
        $validatedData = $request->validate([
            'name' => 'required|max:55',
            'email' => 'email|required|unique:users',
            'password' => 'required|confirmed',
            'phone_number'=> 'required|max:12'
        ]);

        $validatedData['password'] = bcrypt($request->password);
        $validatedData['role_id'] = 3;
        $validatedData['image'] = 'user.png';
        $validatedData['status'] = 1;
        $validatedData['phone_number']= $request->phone_number;

        $user = User::create($validatedData);

        $accessToken = $user->createToken('authToken')->accessToken;
        $message = [
            'messagekk'       => 'Dear '. $user->name . ', Congratulations and Welcome to Success 
                                Team and to Our Family. We want you to know that we appreciate you taking the time to learn more.',
        ];
        Mail::to($user->email)->send(new RegistrationConfirmationEmail($message));
        return response([ 'user' => $user, 'access_token' => $accessToken], $status);
    }

    public function dusers(){
        $status = 200;
        $user = Auth::user();
        return response()->json($user, $status);
    }

}
