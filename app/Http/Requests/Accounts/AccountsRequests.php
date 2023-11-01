<?php

namespace App\Http\Requests\Accounts;

use Illuminate\Foundation\Http\FormRequest;

class AccountsRequests extends FormRequest
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
            'username'=>'required',
            'email'=>'required',
            'password' => [
                'required',
                'regex:/^(?=.*[A-Za-z])(?=.*\d).+$/',
            ],
        ];
    }
    public function messages(): array
    {
        return [
            'username.required' => 'Tên không được để trống',
            'email.required' => 'Email không được để trống',
            'email.email' => 'Email không đúng định dạng',
            'password.required' => 'Vui lòng nhập mật khẩu',
            'password.regex' => 'Mật khẩu phải chứa ít nhất một chữ cái và ít nhất một số',
        ];
    }
}
