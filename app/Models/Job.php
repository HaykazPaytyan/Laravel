<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Job extends Model
{
    protected $primaryKey = 'job_name';

    public  $incrementing = false;

    protected $fillable = [
    	     'job_name',
             'job_title',
             'job_region',
             'job_status',
             'job_experience_1',
             'job_sallary',
             'job_deadline',
             'job_description',
             'job_responsibilities',
             'job_experience_2',
             'job_benefit'
    ]; 

    public function user()
    {
    	return $this->belongsTo('App\Models\User');
    }
}
