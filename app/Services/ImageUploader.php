<?php
namespace App\Services;

use Illuminate\Http\UploadedFile;
use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;

class ImageUploader
{

	public function storeBackground($data)
	{


		if ($data->isValid()) 
		{   

			$this->store($data);

			
		}


	}

	public function storeImage($data)
	{


		if ($data->isValid()) 
		{   

			$this->store($data);		
			
			Image::make($data->getRealPath())->crop('200','200');

			
		}
	}

	public function store($data)
	{
		    $img_name = $data->getClientOriginalName();

			$data->storeAs('uploads',$img_name,'public');	
	}
}