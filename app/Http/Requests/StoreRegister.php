<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreRegister extends FormRequest
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
            'register_name' => array('required','string','max:100','unique:App\Models\User,name'),
            'register_email' => array('required','string','email','max:100','unique:App\Models\User,email'),
            'register_pwd' => array('required','string','min:8','max:50','confirmed'),
            'register_pwd_confirmation' => array('required','string','min:8','max:50','same:register_pwd')
        ];
    }

    public function messages()
    {
         return [
            'register_name.required' => 'Name of organisation is required field*',
            'register_name.string' => 'Invalid value*',
            'register_name.max' => 'Name of Organisation must not exceed 100 characters*',
            'register_name.unique' => 'The Organisation Name you entered already is being used by another account ,please try another one*',
            'register_email.required' => 'Email is required field*',
            'register_email.string' => 'Invalid value*',
            'register_email.email' => 'The Email must be a valid email address*',
            'register_email.max' => 'Password must not exceed 100 characters*',
            'register_email.unique' => 'The Email address you entered already is being used by another account ,please try another one*',
            'register_pwd.required' => 'Password is required field*',
            'register_pwd.string' => 'Invalid value*',
            'register_pwd.min' => 'Password must be last 8 characters*',
            'register_pwd.max'=> 'Password must not exceed 50 characters*',
            'register_pwd.confirmed' => 'The Password Confirmation does not match*',
            'register_pwd_confirmation.required' => 'Confirm Password is required field*',
            'register_pwd_confirmation.string' => 'Invalid value*',
            'register_pwd_confirmation.min' => 'Confirm Password must be last 8 characters*',
            'register_pwd_confirmation.max' => 'Confirm Password must not exceed 50 characters*',
            'register_pwd_confirmation.same' => 'The Password Confirmation and Password must match*'
        ];
    }
}
