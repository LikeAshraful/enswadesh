<?php

namespace App\Http\Requests\Users;

use Illuminate\Foundation\Http\FormRequest;

class SignInRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'password'      => 'required|string|min:8|max:255'
        ];
    }

    public function messages()
    {
        return [
            'email_or_phone.required' => 'The email field is required.',
            'password.required'       => 'The password filed is required.',
            'password.min'            => 'The password length must be at least 8 characters',
        ];
    }
}