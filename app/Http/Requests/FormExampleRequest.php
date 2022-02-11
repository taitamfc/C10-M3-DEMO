<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class FormExampleRequest extends FormRequest
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
            'name'  => 'required|max:255',//yeu cau va do dai toi da 255
            'email' => 'required|unique:customers',//yeu cau va duy nhat
            'phone' => 'required',//yeu cau
        ];
    }

    public function messages()
    {
        $messages = [
            'name.required'  => 'Ten la bat buoc',
            'email.required' => 'Email la bat buoc',
            'phone.required' => 'Phone la bat buoc',
            'unique'         => 'Da ton tai'
        ];
        return $messages;
    }
}
