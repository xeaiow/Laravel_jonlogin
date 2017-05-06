<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class EditFunctionRequest extends FormRequest
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
            'title' => 'required'
        ];
    }

    public function attributes()
    {
        return [
            'title' => '群組名稱'
        ];
    }

    // 自訂錯誤訊息
    public function messages()
    {
        return [
            'title.required' => '群組名稱未填寫'
        ];
    }

    // 回傳錯誤訊息
    public function response (array $errors)
    {
        return back()->withErrors($errors)->withInput();
    }
}
