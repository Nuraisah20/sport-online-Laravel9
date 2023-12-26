<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class upDataRequest extends FormRequest
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
            'nama' => ['required', 'max:100'],
            'deskripsi' => ['required', 'max:200'],
            'harga' => ['required', 'max:30'],
            'gambar' => 'required|image|mimes:jpeg,png,jpg|max:2048',
        ];
    }
}
