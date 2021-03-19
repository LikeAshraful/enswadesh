<?php

namespace App\Http\Controllers\Auth;

use Repository\Role\RoleRepository;
use Repository\User\UserRepository;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use App\Providers\RouteServiceProvider;
use Symfony\Component\HttpFoundation\Request;
use Illuminate\Foundation\Auth\RedirectsUsers;
use Illuminate\Foundation\Auth\ThrottlesLogins;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use App\Http\Requests\Users\SignInRequest;

class LoginController extends Controller
{
    use RedirectsUsers;
    use ThrottlesLogins;

    protected $redirectTo = RouteServiceProvider::HOME;

    public $authRepo;
    public $roleRepo;

    public function __construct(UserRepository $authRepository, RoleRepository $roleRepository)
    {
        $this->authRepo = $authRepository;
        $this->roleRepo  = $roleRepository;

        $this->middleware('guest')->except('logout');
    }

    public function username()
    {
         $login = request()->input('phone_number');

        $field = filter_var($login, FILTER_VALIDATE_EMAIL) ? 'email' : 'phone_number';
        request()->merge([$field => $login]);
        return $field;
    }

    public function showLoginForm()
    {
        return view('auth.login');
    }

    public function login(SignInRequest $request)
    {
        $user = $this->authRepo->model()::where($this->username(), $request->phone_number)->first();
        if(!empty($user)){
            if($user->role_id == $this->roleRepo->getRoleForAdmin()->id || $user->role_id == $this->roleRepo->getAllRoleForSuperAdmin()->id || $user->role_id == $this->roleRepo->getRoleForManager()->id){
                if($user->status == 1){
                    if ($this->hasTooManyLoginAttempts($request)) {
                    $this->fireLockoutEvent($request);
                    return $this->sendLockoutResponse($request);
                    }
                    if (Auth::attempt(([$this->username()=>$request->phone_number, 'password'=>$request->password]))) {
                        $user = auth()->user();
                        notify()->success('Welcome ' .$user->name . ' To ENSWADESH');
                        return redirect()->route('backend.dashboard');
                    }
                }else{
                    notify()->warning('You are not approved as an admin');
                    return redirect()->route('login');
                }
            }else{
                notify()->warning('Authentication process will be valid for Super admin, admin and manager');
                return redirect()->route('login');
            }
        }else{
            notify()->warning('Invalid Credentials');
            return redirect()->route('login');
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

}
