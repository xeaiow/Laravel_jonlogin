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
            'point' => 'required'
        ];
    }

    public function attributes() {

        return [
            'username' => '帳號',
            'password' => '密碼',
            'firstname' => '姓名',
            'email' => 'E-mail',
            'phone' => '手機',
            'point' => '點數'
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
            'point.required' => '點數位填寫'
        ];
    }

    // 回傳錯誤訊息
    public function response (array $errors)
    {
        return back()->withErrors($errors)->withInput();
    }
}
