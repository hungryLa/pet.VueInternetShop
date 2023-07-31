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
            'category_id' => 'required|integer',
            'group_id' => 'required|integer',
            'description' => 'required|string',
            'contents' => 'required|string',
            'images' => 'array',
            'images.*' => 'required|image',
            'price' => 'required|integer',
            'price_old' => 'nullable|integer',
            'count' => 'required|integer',
            'is_published' => 'nullable|boolean',
            'tags' => 'nullable|array',
            'tags.*' => 'required|string',
            'colors' => 'nullable|array',
            'colors.*' => 'required|string',
        ];
    }
}
