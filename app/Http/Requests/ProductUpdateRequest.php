<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProductUpdateRequest extends FormRequest
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
            'slug' => ['required', 'max:255', 'string'],
            'name' => ['required', 'max:255', 'string'],
            'price' => ['required', 'numeric'],
            'description' => ['required', 'max:255', 'string'],
            'image' => ['nullable', 'image', 'max:1024'],
            'category_id' => ['required', 'exists:categories,id'],
        ];
    }
}
