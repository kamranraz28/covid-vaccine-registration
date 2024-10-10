<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreRegistrationRequest extends FormRequest
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
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            //
            'name' => 'required|string|max:100|min:5',
            'nid' => [
                'required',
                'unique:users,nid',
                'regex:/^(?:\d{10}|\d{13}|\d{17})$/',
            ],
            'email' => 'required|email|unique:users,email',
            'vaccine_center_id' => 'required|exists:vaccine_centers,id',

        ];
    }

    public function messages(): array
    {
        return [
            'nid.regex' => 'NID must have to be 10, 13, or 17 digits. (Bangladesh has these three types of NID only.)',
        ];
    }

}
