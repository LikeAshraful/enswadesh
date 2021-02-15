<?php

namespace App\Http\Requests\API\Staff;

use App\Models\User;
use App\Helpers\API\ApiHelpers;
use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\Gate;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Contracts\Validation\Validator;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\JsonResponse;
use Illuminate\Http\Exceptions\HttpResponseException;

class SignUpRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        $rules = User::REGISTRATION_VALIDATION_RULES;
        if ($this->getMethod() == 'POST') {
            $rules += [
                'email' => [
                    'required',
                    'string',
                    'email',
                    'unique:users'
                ],
                'phone_number' => [
                    'required',
                    'string',
                    'unique:users'
                ],
                'password' => [
                    'required',
                    'string',
                    'confirmed',
                    'min:8'
                ]
            ];
        } else {
            $rules += [
                'email' => [
                    'required',
                    'string',
                    'email',
                    Rule::unique('users', 'email')->ignore(request()->route('users'))
                ],
                'phone_number'  => [
                    'required',
                    'string',
                    Rule::unique('users', 'phone_number')->ignore(request()->route('users'))
                ],
                'password' => [
                    'sometimes',
                    'string',
                    'min:8'
                ]
            ];
        }
        return $rules;
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

    public function failedValidation(Validator $validator)
    {
        $code       = Response::HTTP_UNPROCESSABLE_ENTITY;
        $message    = "Registration Failed!";
        $token      = "";
        $response   = ApiHelpers::createAPIResponse(true, $code, $message, $validator->errors(), $token);
        throw new HttpResponseException(new JsonResponse($response, $code));
    }
}
