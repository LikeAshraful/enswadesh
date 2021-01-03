<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Role;
use App\Models\User;

class DashboardController extends Controller
{
    public function index()
    {
        $data['usersCount'] = User::count();
        $data['rolesCount'] = Role::count();
        $data['users'] = User::orderBy('last_login_at','desc')->take(10)->get();
        return view('backend.dashboard', $data);
    }
}
