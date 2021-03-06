<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AddMemberRequest extends FormRequest
{

    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'username' => 'required|unique:member,username',
            'password' => 'required',
            'firstname' => 'required',
            'email' => 'required|email|unique:member,email',
            'phone' => 'required',
            'group' => 'required',
        ];
    }

    public function attributes() {

        return [
            'username' => '帳號',
            'password' => '密碼',
            'firstname' => '姓名',
            'email' => '信箱',
            'phone' => '手機',
            'group' => '群組',
        ];
    }

    // 自訂錯誤訊息
    public function messages()
    {
        return [
            'username.required' => '帳號未填寫',
            'username.unique' => '帳號已註冊過',
            'password.required' => '密碼未填寫',
            'firstname.required' => '姓名未填寫',
            'email.required' => '信箱未填寫',
            'email.email' => '請輸入正確信箱格式',
            'email.unique' => '信箱已註冊過',
            'phone.required' => '手機未填寫',
            'group.required' => '群組未填寫',
        ];
    }

    // 回傳錯誤訊息
    public function response (array $errors)
    {
        return back()->withErrors($errors)->withInput();
    }
}
