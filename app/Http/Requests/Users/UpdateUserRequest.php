<?php

namespace App\Http\Requests\Users;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Gate;

class UpdateUserRequest extends FormRequest
{
    public function rules()
    {
        return [
            'name'      => ['required', 'string', 'max:255'],
            'email'     => ['required', 'string', 'email', 'max:255', 'unique:users,email,' . request()->route('super_admin')],
            'password'  => ['nullable', 'string', 'min:8', 'confirmed'],
            'role'      => ['required'],
            'image'     => 'nullable|mimes:jpeg,jpg,png|max:500',
        ];
    }
}
