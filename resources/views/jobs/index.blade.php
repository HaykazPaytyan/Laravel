

@extends('layouts.app')
@section('content')
<section class="section-hero overlay inner-page bg-image" style="background-image: url('images/hero_1.jpg');" id="home-section">
   <div class="container">
      <div class="row">
         <div class="col-md-7">
            <h1 class="text-white font-weight-bold">Post A Job</h1>
            <div class="custom-breadcrumbs">
               <a href="#">Home</a> <span class="mx-2 slash">/</span>
               <a href="#">Job</a> <span class="mx-2 slash">/</span>
               <span class="text-white"><strong>Post a Job</strong></span>
            </div>
         </div>
      </div>
   </div>
</section>
<section class="site-section" id="next">
   <div class="container">
      <div class="row mb-5 justify-content-center">
         <div class="col-md-7 text-center">
            <h2 class="section-title mb-2">43,167 Job Listed</h2>
         </div>
      </div>
      @foreach($jobs as $job)
      <ul class="job-listings mb-5">
         <li class="job-listing d-block d-sm-flex pb-3 pb-sm-0 align-items-center">
            <a href="/jobs/{{ $job->job_name }}"></a>
            <div class="job-listing-logo">
               <img src="images/job_logo_1.jpg" alt="Image" class="img-fluid">
            </div>
            <div class="job-listing-about d-sm-flex custom-width w-100 justify-content-between mx-4">
               <div class="job-listing-position custom-width w-50 mb-3 mb-sm-0">
                  <h2>{{ $job->job_title }}</h2>
                  <strong>{{ $job->user_name }}</strong>
               </div>
               <div class="job-listing-location mb-3 mb-sm-0 custom-width w-25">
                  <span class="icon-room"></span> {{ $job->job_region }}
               </div>
               <div class="job-listing-meta">
                  <span class="badge badge-danger">{{ $job->job_status}}</span>
               </div>
            </div>
         </li>
      </ul>
      @endforeach
      <div class="row pagination-wrap">
         <div class="col-md-6 text-center text-md-left mb-4 mb-md-0">
            <span>Showing 1-7 Of 43,167 Jobs</span>
         </div>
         <div class="col-md-6 text-center text-md-right">
            <div class="custom-pagination ml-auto">
               <a href="#" class="prev">Prev</a>
               <div class="d-inline-block">
                  <a href="#" class="active">1</a>
                  <a href="#">2</a>
                  <a href="#">3</a>
                  <a href="#">4</a>
               </div>
               <a href="#" class="next">Next</a>
            </div>
         </div>
      </div>
   </div>
</section>
<section class="py-5 bg-image overlay-primary fixed overlay" style="background-image: url('images/hero_1.jpg');">
   <div class="container">
      <div class="row align-items-center">
         <div class="col-md-8">
            <h2 class="text-white">Looking For A Job?</h2>
            <p class="mb-0 text-white lead">Lorem ipsum dolor sit amet consectetur adipisicing elit tempora adipisci impedit.</p>
         </div>
         <div class="col-md-3 ml-auto">
            <a href="#" class="btn btn-warning btn-block btn-lg">Sign Up</a>
         </div>
      </div>
   </div>
</section>
@endsection

