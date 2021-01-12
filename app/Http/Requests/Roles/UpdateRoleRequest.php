<?php

namespace App\Http\Requests\Roles;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Gate;

class UpdateRoleRequest extends FormRequest
{
    public function authorize()
    {
        Gate::authorize('backend.roles.edit');
        return true;
    }

    public function rules()
    {
        return [
            'name' => [
                'required',
                'unique:roles,name,'.$this->route()->parameters()['role']
            ],
            'permissions.*' => [
                'integer',
            ],
            'permissions' => [
                'required',
                'array',
            ],
        ];
    }
}
