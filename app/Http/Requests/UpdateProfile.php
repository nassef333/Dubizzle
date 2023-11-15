<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateProfile extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return auth()->check();
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array|string>
     */
    public function rules(): array
    {
        return [
            'name' => ['max:255', 'nullable', 'string'],
            'email' => ['email', 'max:255', 'nullable', 'unique:users,email,' . auth()->id()],
            'phone' => ['max:255', 'nullable', 'string', 'unique:users,phone,' . auth()->id()],
            'address' => ['max:255', 'nullable', 'string'],
        ];
    }
}
