<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Request;

class StorePostRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(Request $request): bool
    {
        return $request->title != 'unauthorized';
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'title' => 'required|max:255|string',
            'content' => 'required|string',
            'slug' => 'required|unique:posts|max:255|string',
            'category_id' => 'required|exists:categories,id|integer'
        ];
    }

    public function messages(): array
    {
        return [
            'required' => 'Поле :attribute обовязкове',
        ];
    }
}
