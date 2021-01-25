<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use App\Facades\Upload;
use App\Services\ImageUploader;
use Illuminate\Http\UploadedFile;



class UpdateProfile extends FormRequest
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
            'profile_description' => ['required','string'],
            'profile_background' => ['required','image'],
            'profile_image' => ['required','image','dimensions:max_width=200,max_height=200'],
            'profile_address' => ['required','string','max:255'],
            'profile_telephone' => ['required','string','max:255'],
            'profile_website' => ['required','string','max:255']
        ];
    }

    public function messages()
    {
        return [
            'profile_description.required' => 'This field is required*',
            'profile_description.string' => 'Invalid value*',
            'profile_background.required' => 'This field is required*',
            'profile_background.image' => 'Invalid value*',
            'profile_image.required' => 'This field is required*',
            'profile_image.image' => 'Invalid value*',
            'profile_address.required' => 'This field is required*',
            'profile_address.string' => 'Invalid value*',
            'profile_address.max'=> 'Address must not exceed 255 characters*',
            'profile_telephone.required' => 'This field is required*',
            'profile_telephone.string' => 'Invalid value*',
            'profile_telephone.max'=> 'Address must not exceed 255 characters*',
            'profile_website.required' => 'This field is required*',
            'profile_website.string' => 'Invalid value*',
            'profile_website.max'=> 'Website must not exceed 255 characters*'


        ];
    }


    
   protected function prepareForValidation()
   {
      $this->merge([
        'profile_background' => Upload::storeBackground($this->profile_background),
        'profile_image' => Upload::storeImage($this->profile_image)
      ]);
   } 


   public function fullValid()
   {
      $validated = $this->validated();

      $validated['profile_background'] = $validated['profile_background']->getClientOriginalName();
      $validated['profile_image'] = $validated['profile_image']->getClientOriginalName(); 
      return $validated;
   }  

  
}
