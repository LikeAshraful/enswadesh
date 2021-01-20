<?php

namespace App\Http\Resources\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Resources\Json\JsonResource;

class AuthResource extends JsonResource
{
    public function toArray($request)
    {
        return [
            'name'          => $this->name,
            'email'         => $this->email,
            'password'      => Hash::make($this->password),
            'status'        => $this->status,
            'phone_number'  => $this->phone_number,
            'created_at'    => $this->created_at->diffForHumans()
        ];
    }
}
