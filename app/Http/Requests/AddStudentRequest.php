<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AddStudentRequest extends FormRequest
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
            'stu_number' => 'required|integer|unique:students',
            'code_meli' => 'required|integer|unique:students',
            'major' => 'required',
            'stu_year' => 'required|integer',
            'age' => 'required|integer',
            'user_name' => 'required|string|unique:users',
            'password' => 'required|min:8|confirmed',
            'password_confirmation' => 'required|same:password'
        ];
    }
}
