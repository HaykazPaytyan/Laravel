<?php 
namespace App\Facades;

use Illuminate\Support\Facades\Facade;
use App\Services\ImageUploader;


class Upload extends Facade
{
   protected static function getFacadeAccessor()
   {
   	  return ImageUploader::class;
   }
}