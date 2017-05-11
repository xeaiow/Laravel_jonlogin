<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class EditUserRequest extends FormRequest
{

    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'username' => 'required',
            'firstname' => 'required',
            'email' => 'required',
            'phone' => 'required',
            'point' => 'numeric|min:0|max:999999999'
        ];
    }

    public function attributes()
    {
        return [
            'username' => '帳號',
            'firstname' => '姓名',
            'email' => '信箱',
            'phone' => '手機',
            'point' => '點數'
        ];
    }

    // 自訂錯誤訊息
    public function messages()
    {
        return [
            'username.required' => '帳號未填寫',
            'firstname.required' => '姓名未填寫',
            'email.required' => '信箱未填寫',
            'phone.required' => '手機未填寫',
            'point.numeric' => '點數請填數',
            'point.min' => '點數最小為 0',
            'point.max' => '點數最大為 999999999'
        ];
    }

    // 回傳錯誤訊息
    public function response (array $errors)
    {
        return back()->withErrors($errors)->withInput();
    }
}
