<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CommentsRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'full_name' => ['required', 'string', 'regex:/^[a-zA-Zа-яА-Я\s\']{1,}$/u', 'min:3', 'max:255'],
            'email' => ['email', 'required'],
            'phone' => ['required'],
            'message' => ['required', 'string', 'min:3', 'max:255'],
        ];
    }
}
