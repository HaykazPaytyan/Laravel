<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Job;

class HomeController extends Controller
{
    public function index(){

     $jobs = Job::all();	

     return view('home.index',['jobs' => $jobs]);
    }
}
