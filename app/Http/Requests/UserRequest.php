<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UserRequest extends FormRequest
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
     * @return array<string, \Illuminate\Contracts\Validation\Rule|array|string>
     */
    public function rules(): array
    {

        return
            [
                'name' => 'required|min:5',
                'email' => 'required|email:rfc,dns|unique:users,email,' . $this->id,
                'address' => 'required|nullable',
                'phone' => 'required|nullable',
                'password' => 'required|min:6',
            ];
    }

    public function messages()
    {
        return [
            'name.required' => 'Họ và tên phải bắt buộc nhập',
            'name.min' => 'Họ và tên phải từ :min kí tự trở lên',

            'email.email' => 'Email phải đúng định dạng',
            'email.required' => 'Email phải bắt buộc nhập',
            'email.unique' => 'Email đã tồn tại trên hệ thống',

            'password.required' => 'Mật khẩu phải bắt buộc nhập',
            'password.min' => 'Mật khẩu phải từ :min kí tự trở lên',

            'address.required' => 'Địa chỉ phải bắt buộc nhập',

            'phone.required' => 'Số điện thoại phải bắt buộc nhập',
        ];
    }
}
