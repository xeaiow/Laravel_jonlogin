<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AddMemberRequest extends FormRequest
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
            'email' => 'required',
            'phone' => 'required',
            'group' => 'required',
        ];
    }

    public function attributes() {

        return [
            'username' => '帳號',
            'password' => '密碼',
            'firstname' => '姓名',
            'email' => 'E-mail',
            'phone' => '手機',
            'group' => '群組',
        ];
    }
}
