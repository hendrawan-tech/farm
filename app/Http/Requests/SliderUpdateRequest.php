<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SliderUpdateRequest extends FormRequest
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
            'badge' => ['required', 'max:255', 'string'],
            'title' => ['required', 'max:255', 'string'],
            'button' => ['required', 'max:255', 'string'],
            'link' => ['required', 'max:255', 'string'],
            'image' => ['nullable', 'image', 'max:1024'],
        ];
    }
}
