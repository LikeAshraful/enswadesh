<?php

namespace App\Http\Requests\API\User;

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
            'phone_number'  => 'required|string|max:255',
            'password'      => 'required|string|min:8|max:255'
        ];
    }

    public function messages()
    {
        return [
            'email_or_phone.required' => 'The email field is required.',
            'password.required'       => 'The password filed is required.',
            'password.min'            => 'The password length must be at least 6 characters',
        ];
    }
}