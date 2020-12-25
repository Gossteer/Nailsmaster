<?php

namespace App\Http\Requests\Api;

use Illuminate\Foundation\Http\FormRequest;

class MasterCreateRequest extends FormRequest
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
            // 'phone_number' => ['required', 'string', 'max:255', 'unique:users'],
            // 'name' => ['required', 'string', 'max:255'],
            // 'surname' => ['required', 'string', 'max:255'],
            // 'lastname' => ['nullable', 'string', 'max:255'],
            'confirmation' => ['nullable', 'boolean'],
            'image' => 'nullable',
            'image.*' => 'mimes:jpeg,jpg,png,gif,csv|max:2048'
        ];
    }
}
