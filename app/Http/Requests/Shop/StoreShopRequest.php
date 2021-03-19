<?php

namespace App\Http\Requests\Shop;

use Illuminate\Foundation\Http\FormRequest;

class StoreShopRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    // public function authorize()
    // {
    //     return false;
    // }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'name' => 'required',
            'shop_no' => 'required',
            'logo' => 'nullable|mimes:jpeg,jpg,png|max:5000',
            'cover_image' => 'nullable|mimes:jpeg,jpg,png|max:5000',
            'meta_og_image' => 'nullable|mimes:jpeg,jpg,png|max:5000',
        ];
    }
}
