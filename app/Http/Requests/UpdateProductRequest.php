<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class UpdateProductRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array|string>
     */
    public function rules(): array
    {
        $product_code = $this->route('product');

        return [
            'name' => 'required|string|max:255',
            'code' => [
                'required',
                'alpha_num',
                'max:255',
                Rule::unique('products')->ignore($product_code, 'code')
            ],
            'image_url' => [
                'required',
                function ($attribute, $value, $fail) {
                    $imageData = @getimagesize($value);
                    if (!is_array($imageData)) {
                        $fail('The URL does not point to a valid image.');
                    }
                }
            ],
            'price' => 'required|numeric'
        ];
    }
}
