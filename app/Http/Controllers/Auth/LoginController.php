<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use App\Providers\RouteServiceProvider;
use Symfony\Component\HttpFoundation\Request;
use Illuminate\Foundation\Auth\RedirectsUsers;
use Illuminate\Foundation\Auth\ThrottlesLogins;
use Illuminate\Foundation\Auth\AuthenticatesUsers;

class LoginController extends Controller
{
    use RedirectsUsers;
    use ThrottlesLogins;

    public function showLoginForm()
    {
        return view('auth.login');
    }

    public function login(Request $request)
    {
        $this->validate($request, [
            'email' => 'required',
            'password' => 'required',
        ], [
            'email.required' => 'Email or Username not matched with Database!',
            'password.required' => 'Password not matched with Database!',
        ]);
        $checkUserInput = filter_var($request->input('email'), FILTER_VALIDATE_EMAIL) ? 'email' : 'username';
        $user = Auth::guard('web')->attempt([$checkUserInput => $request->email, 'password' => $request->password]);
        if ($user == 'true') {
            if (Auth::user()->status == 1) {
                notify()->success('Welcome ' . Auth::user()->name . ' To ENSWADESH');
                return redirect()->route('backend.dashboard');
            } else {
                notify()->success('User not approved yet!', 'Pendding');
                return redirect()->back()->with(Auth::logout());
            }
        } else {
            notify()->warning('Whoops! Wrong Email or Username or Password !', 'Warning');
            return redirect()->back();
        }
    }

    public function logout(Request $request)
    {
        $this->guard()->logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        if ($response = $this->loggedOut($request)) {
            return $response;
        }
        return $request->wantsJson()
            ? new Response('', 204)
            : redirect('/');
    }
    protected function loggedOut(Request $request)
    {
        //
    }
    protected function guard()
    {
        return Auth::guard();
    }

    protected $redirectTo = RouteServiceProvider::HOME;

    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }
}