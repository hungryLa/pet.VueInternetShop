<?php

namespace App\Http\Requests\Product;

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
            'title' => 'required|string',
            'category' => 'required|string',
            'description' => 'required|string',
            'contents' => 'required|string',
            'preview_image' => 'required|image',
            'price' => 'required|integer',
            'count' => 'required|integer',
            'is_published' => 'nullable|boolean',
            'tags' => 'nullable|array',
            'tags.*' => 'required|string',
            'colors' => 'nullable|array',
            'colors.*' => 'required|string',
        ];
    }
}
