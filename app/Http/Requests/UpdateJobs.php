<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateJobs extends FormRequest
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
             'job_title_update' => 'required',
             'job_region_update' => 'required',
             'job_status_update' => 'required',
             'job_experience_1_update' => 'required',
             'job_sallary_update' => 'required',
             'job_deadline_update' => ['required','date'],
             'job_description_update' => ['required','min:10'],
             'job_responsibilities_update' => ['required','min:10'],
             'job_experience_2_update' => ['required','min:10'],
             'job_benefit_update' => ['required','min:10']
        ];
    }


    public function messages()
    {
        return [
            'job_title_update.required' => 'This field is required*',
            'job_region_update.required' => 'This field is required*',
            'job_status_update.required' => 'This field is required*',
            'job_experience_1_update.required' => 'This field is required*',
            'job_sallary_update.required' => 'This field is required*',
            'job_deadline_update.required' => 'This field is required*',
            'job_deadline_update.date' => 'Please select a new date*',
            'job_description_update.required' => 'This field is required*',
            'job_description_update.min' => 'Description must be last 10 characters*',
            'job_responsibilities_update.required' => 'This field is required*',
            'job_responsibilities_update.min' => 'Responsibilities must be last 10 characters*',
            'job_experience_2_update.required' => 'This field is required*',
            'job_experience_2_update.min' => 'Experience must be last 10 characters*',
            'job_benefit_update.required' => 'This field is required*',
            'job_benefit_update.min' => 'Benefits must be last 10 characters*'
        ];
    }
}
