<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UserRequest extends FormRequest
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
     * @return array
     */
    public function rules()
    {
        return [
            'username' => 'required|unique:users,username|min:5',
            'password' => 'required|min:5',
            'email' => 'required|unique:users,email|email',
            'phone' => 'required|unique:users,phone|min:10'
        ];
    }

    public function messages()
    {
        return [
            'username.required' => 'Không được để trống',
            'username.unique' => 'Tên người dùng đã tồn tại',
            'username.min' => 'Tối thiểu 5 kí tự',
            'password.required' => 'Không được để trống',
            'password.min' => 'Tối thiểu 5 kí tự',
            'email.required' => 'Không được để trống',
            'email.email' => 'Sai định dạng email',
            'email.unique' => 'Email đã tồn tại',
            'phone.unique' => 'Số điện thoại đã tồn tại',
            'phone.min' => 'Số điện thoại phải là 10 chữ số',
            'phone.required' => 'Không được để trống',
        ];
    }
}
