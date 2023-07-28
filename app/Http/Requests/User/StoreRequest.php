<?php

namespace App\Http\Requests\User;

use Illuminate\Foundation\Http\FormRequest;

class StoreRequest extends FormRequest
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
        return [
            'lastname' => 'required|string',
            'name' => 'required|string',
            'middle_name' => 'required|string',
            'age' => 'required|integer',
            'address' => 'required|string',
            'gender' => 'required|integer',
            'email' => 'required|email|unique:users',
            'password' => 'required|string|confirmed',
        ];
    }
}
