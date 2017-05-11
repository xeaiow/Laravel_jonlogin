<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class EditMemberRequest extends FormRequest
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
            'email' => 'required|email',
            'phone' => 'required',
        ];
    }

    public function attributes()
    {
        return [
            'username' => '帳號',
            'firstname' => '姓名',
            'email' => '信箱',
            'phone' => '手機',
        ];
    }

    // 自訂錯誤訊息
    public function messages()
    {
        return [
            'username.required' => '帳號未填寫',
            'firstname.required' => '姓名未填寫',
            'email.required' => '信箱未填寫',
            'email.email' => '請輸入正確信箱格式',
            'phone.required' => '手機未填寫',
        ];
    }

    // 回傳錯誤訊息
    public function response (array $errors)
    {
        return back()->withErrors($errors)->withInput();
    }
}
