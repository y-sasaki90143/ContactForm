<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class FormValidateRequest extends FormRequest
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
            'name' => 'required',
            'mail_address' => 'required|email',
            'title' => 'required',
            'content' => 'required',
        ];
    }

    public function messages()
    {
        return [
            'name.required' => '名前は必須です',
            'mail_address.required' => 'メールアドレスは必須です',
            'mail_address.email' => 'メールアドレスの形で入力してください',
            'title.required' => '件名は必須です',
            'content.required' => '内容は必須です',
        ];
    }
}
