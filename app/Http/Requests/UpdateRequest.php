<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateRequest extends FormRequest
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
            'phone.unique' => 'Số điện thoại đã tồn tại',
            'phone.min' => 'Số điện thoại phải là 10 chữ số',
            'phone.required' => 'Không được để trống',
        ];
    }
}
