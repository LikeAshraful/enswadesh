<?php

namespace App\Http\Resources\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Resources\Json\JsonResource;

class AuthResource extends JsonResource
{
    public function toArray($request,$accessToken)
    {
        return [
            'name'          => $this->name,
            'email'         => $this->email,
            'status'        => $this->status,
            'phone_number'  => $this->phone_number,
            'access_token'  => $this->accessToken,
            'created_at'    => $this->created_at->diffForHumans()
        ];
    }
}
