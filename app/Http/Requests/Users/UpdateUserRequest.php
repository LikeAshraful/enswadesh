<?php

namespace App\Http\Requests\Users;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Gate;

class UpdateUserRequest extends FormRequest
{
    public function rules()
    {
        if(request()->route('admin')){
            $parameter  = request()->route('admin');
        }elseif(request()->route('super_admin')){
            $parameter  = request()->route('super_admin');
        }elseif(request()->route('vendor')){
            $parameter  = request()->route('vendor');
        }

        return [
            'name'      => ['required', 'string', 'max:255'],
            'email'     => ['required', 'string', 'email', 'max:255', 'unique:users,email,' . $parameter],
            'password'  => ['nullable', 'string', 'min:8', 'confirmed'],
            'role'      => ['required'],
        ];
    }
}
