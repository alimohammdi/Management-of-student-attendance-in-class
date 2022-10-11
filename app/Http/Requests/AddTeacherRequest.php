<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AddTeacherRequest extends FormRequest
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
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'full_name' => 'required|string',
            'code_meli' => 'required|integer|unique:students',
            'degree' => 'required',
            'college' => 'required ',
            'age' => 'required|integer',
            'user_name' => 'required|string|unique:users',
            'password' => 'required|min:8|confirmed',
            'password_confirmation' => 'required|same:password'
        ];
    }
}
