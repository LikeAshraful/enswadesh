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
        if ($this->getMethod() == 'POST') {
            return User::LOGIN_VALIDATION_RULES;
        }
    }

    public function messages()
    {
        return [
            'email.required'    => 'The email field is required.',
            'email.email'       => 'Invalid email format.',
            'password.required' => 'The password filed is required.',
            'password.min'      => 'The password length must be at least 6 characters',
        ];
    }

    public function failedValidation(Validator $validator)
    {
        $code       = Response::HTTP_UNPROCESSABLE_ENTITY;
        $message    = "Login Failed!";
        $token      = "";
        $response   = ApiHelpers::createAPIResponse(true, $code, $message, $validator->errors(), $token);
        throw new HttpResponseException(new JsonResponse($response, $code));
    }
}