<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{

    protected $fillable = [
        'profile_description', 
        'profile_background', 
        'profile_image',
        'profile_address',
        'profile_telephone',
        'profile_website'
    ];

    public function user()
    {
    	return $this->belongsTo('App\Models\User');
    }
}
