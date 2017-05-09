<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AddUserRequest extends FormRequest
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
            'username' => 'required',
            'password' => 'required',
            'firstname' => 'required',
            'email' => 'required|email|unique:users,email',
            'phone' => 'required',
            'point' => 'required',
        ];
    }

    public function attributes() {

        return [
            'username' => '帳號',
            'password' => '密碼',
            'firstname' => '姓名',
            'email' => 'E-mail',
            'phone' => '手機',
            'point' => '點數',
        ];
    }

    // 自訂錯誤訊息
    public function messages()
    {
        return [
            'required' => '請填寫所有欄位！',
            'email.unique' => '此信箱已被註冊'
        ];
    }

    // 回傳錯誤訊息
    public function response (array $errors)
    {
        return back()->withErrors($errors)->withInput();
    }
}
