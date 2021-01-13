<?php

namespace App\Http\Controllers\Backend;

use App\Models\Role;
use App\Models\User;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Gate;

class DashboardController extends Controller
{
    public function index()
    {
        Gate::authorize('backend.dashboard');
        $data['usersCount'] = User::count();
        $data['rolesCount'] = Role::count();
        return view('backend.dashboard', $data);
    }
}
