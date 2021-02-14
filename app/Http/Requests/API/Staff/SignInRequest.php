<?php

namespace App\Http\Requests\API\Staff;

use App\Helpers\API\ApiHelpers;
use App\Models\User;
use Illuminate\Contracts\Validation\Validator;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Exceptions\HttpResponseException;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Response;

class SignInRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'email' => 'required|string|max:255',
            'password' => 'required|string|min:8|max:255'
        ];
    }

    public function messages()
    {
        return [
            'email_or_phone.required'    => 'The email field is required.',
            'password.required' => 'The password filed is required.',
            'password.min'      => 'The password length must be at least 6 characters',
        ];
    }
}
