<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\StoreJobs;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;
use App\Models\User;
use App\Models\Job;
use App\Http\Requests\UpdateJobs;

class JobsController extends Controller
{
    

    public function __construct()
    {
        $this->middleware('auth')->except('index');
    }


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {    
        $jobs = Job::all();

        return view('jobs.index',['jobs' => $jobs]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('jobs.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreJobs $request)
    {
        $validated = $request->validated();

        $jobData = Auth::user()->job()
            ->create(['job_name' => Str::random(16) , 'job_title' => $validated['job_title'], 'job_region' => $validated['job_region'], 'job_status' => $validated['job_status'], 'job_experience_1' => $validated['job_experience_1'], 'job_sallary' => $validated['job_sallary'], 'job_deadline' => $validated['job_deadline'], 'job_description' => $validated['job_description'], 'job_responsibilities' => $validated['job_responsibilities'], 'job_experience_2' => $validated['job_experience_2'], 'job_benefit' => $validated['job_benefit']

        ]);

        $job = Auth::user()->job()
            ->find($jobData['job_name']);

        return redirect()->route('jobs.show', ['job' => $job]);

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($name)
    {
        $job = Auth::user()->job()
            ->find($name);

        return view('jobs.show', compact('job'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($name)
    {
        $job = Auth::user()->job()
            ->findOrFail($name);

        return view('jobs.edit', compact('job'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateJobs $request, $name)
    {

        Auth::user()->job()->where('job_name',$name)->update($request->validated());
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        
    }
}

