<?php

namespace App\Http\Requests\API\User;

use Illuminate\Foundation\Http\FormRequest;

class SignUpRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'email'         => 'required|string|max:255',
            'phone_number'  => 'required|string|max:12|unique:users',
            'password'      => 'required|string|min:8|max:255|confirmed'
        ];
    }

    public function messages()
    {
        return [
            'name.required'         => 'The name field is required.',
            'name.string'           => 'The name field must be string.',
            'name.between'          => 'The name field must be between 2-100 characters.',
            'email.required'        => 'The email field is required.',
            'email.email'           => 'Invalid email format.',
            'email.unique'          => 'The email has already been taken.',
            'password.required'     => 'The password filed is required.',
            'password.confirmed'    => 'Password does not match with confirm password.',
            'password.min'          => 'The password length must be at least 6 characters',
        ];
    }
}
