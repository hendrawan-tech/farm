<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AboutUpdateRequest extends FormRequest
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
            'title' => ['required', 'max:255', 'string'],
            'description' => ['required', 'max:255', 'string'],
            'image' => ['nullable', 'image', 'max:1024'],
            'logo' => ['image', 'max:1024', 'nullable'],
            'phone' => ['required', 'max:255', 'string'],
            'sort_description' => ['required', 'max:255', 'string'],
            'email' => ['required', 'email'],
            'address' => ['required', 'max:255', 'string'],
            'link_tokped' => ['nullable', 'max:255', 'string'],
            'link_shopee' => ['nullable', 'max:255', 'string'],
            'link_wa' => ['nullable', 'max:255', 'string'],
        ];
    }
}
