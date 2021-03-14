<?php

namespace App\Http\Requests\Api\Product;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class ProductStoreRequesst extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'similar_to' => 'nullable|exists:product.ref,id',
            'ref' => 'nullable',

            'title' => 'required|max:191',
            'description' => 'nullable',
            'can_bargain' => 'boolean|required',
            'product_type' => ['nullable', Rule::in(config('enums.product_types'))],
            'refund_policy' => 'nullable',
            'service_policy' => 'nullable',
            'offers' => 'nullable',
            'tags' => 'nullable',
            'vat' => 'nullable|numeric',

            'brand_id' => 'required|exists:brands,id',
            'category_id' => 'required|exists:categories,id',
            'shop_id' => 'required|exists:shops,id',

            'thumbnail' => 'nullable|mimes:jpeg,jpg,png|max:500',
            'images' => 'nullable|array',
            'images.*' => 'required|mimes:jpeg,jpg,png|max:500',

            'features' => [Rule::requiredIf($this->product_type == 'feature_base'), 'array'],
            'features.*.title' => 'required|max:191',
            'features.*.content' => 'required',

            'sizes' => [Rule::requiredIf($this->product_type == 'size_base'), 'array'],
            'sizes.*.size_id' => 'required|exists:sizes,id',
            'sizes.*.price' => 'required|numeric|min:0|max:999999.99',
            'sizes.*.stocks' => 'required|numeric',

            'weights' => [Rule::requiredIf($this->product_type == 'weight_base'), 'array'],
            'weights.*.weight_id' => 'required|exists:weights,id',
            'weights.*.price' => 'required|numeric|min:0|max:999999.99',
            'weights.*.stocks' => 'required|numeric',

            'audio_file' => 'nullable|mimes:application/octet-stream,audio/mpeg,mpga,mp3,wav|max:20000',
            'video_file' => 'nullable|mimes:mp4,mov,ogg,qt|max:20000',
        ];
    }
}
