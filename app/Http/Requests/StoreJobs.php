<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreJobs extends FormRequest
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
             'job_title' => 'required',
             'job_region' => 'required',
             'job_status' => 'required',
             'job_experience_1' => 'required',
             'job_sallary' => 'required',
             'job_deadline' => ['required','date'],
             'job_description' => ['required','min:10'],
             'job_responsibilities' => ['required','min:10'],
             'job_experience_2' => ['required','min:10'],
             'job_benefit' => ['required','min:10']
        ];
    }


    public function messages()
    {
        return [
            'job_title.required' => 'This field is required*',
            'job_region.required' => 'This field is required*',
            'job_status.required' => 'This field is required*',
            'job_experience_1.required' => 'This field is required*',
            'job_sallary.required' => 'This field is required*',
            'job_deadline.required' => 'This field is required*',
            'job_deadline.date' => 'Please select a new date*',
            'job_description.required' => 'This field is required*',
            'job_description.min' => 'Description must be last 10 characters*',
            'job_responsibilities.required' => 'This field is required*',
            'job_responsibilities.min' => 'Responsibilities must be last 10 characters*',
            'job_experience_2.required' => 'This field is required*',
            'job_experience_2.min' => 'Experience must be last 10 characters*',
            'job_benefit.required' => 'This field is required*',
            'job_benefit.min' => 'Benefits must be last 10 characters*'
        ];
    }
}
