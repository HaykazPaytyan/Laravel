<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreLogin extends FormRequest
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
             'name' => array('required','string','max:100'),
             'password' => array('required','string','min:8','max:50')
        ];
    }


    public function messages()
    {
         return [
            'name.required' => 'Name of organisation  is required field*',
            'name.string' => 'Invalid value*',
            'name.max' => 'Name of Organisation  must not exceed 100 characters*',
            'password.required' => 'Password is required field*',
            'password.string' => 'Invalid value*',
            'password.min' => 'Password must be last 8 characters*',
            'password.max'=> 'Password must not exceed 50 characters*'
        ];
    }
}
