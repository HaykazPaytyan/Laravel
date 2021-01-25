@extends('layouts.app')
@section('content')
@include('includes.banner')
<section class="site-section">
   <div class="container">
      <div class="row align-items-center mb-5">
         <div class="col-lg-8 mb-4 mb-lg-0">
            <div class="d-flex align-items-center">
               <div>
                  <h2>Post A Job</h2>
               </div>
            </div>
         </div>
         <div class="col-lg-4"></div>
      </div>
      <div class="row mb-5">
         <div class="col-lg-12">
            <form  action="{{ route('jobs.store') }}" 
                   method="POST" 
                   class="p-4 p-md-5 border rounded" >
              @csrf

               <h3 class="text-black mb-5 border-bottom pb-2">Job Details</h3>

               <div class="form-group">
                  <label for="job_title">Job Title</label>
                  <input type="text" 
                         name="job_title" 
                         class="form-control" 
                         id="job_title" 
                         placeholder="Job Title">

                  @error('job_title')
                        <div class="alert alert-danger">{{ $message }}</div>
                  @enderror 

               </div>


               <div class="form-group">
                  <label for="job_region">Job Region</label>
                  <select class="selectpicker border rounded" 
                          id="job_region" 
                          name="job_region" 
                          data-style="btn-black" 
                          data-width="100%" 
                          data-live-search="true" 
                          title="Select Region">
                     <option>Anywhere</option>
                     <option value="Aragatsotn">Aragatsotn</option>
                     <option value="Ararat">Ararat</option>
                     <option value="Armavir">Armavir</option>
                     <option value="Gegharkunik">Gegharkunik</option>
                     <option value="Kotayk">Kotayk</option>
                     <option value="Lori">Lori</option>
                     <option value="Shirak">Shirak</option>
                     <option value="Syunik">Syunik</option>
                     <option value="Tavush">Tavush</option>
                     <option value="Vayots Dzor">Vayots Dzor</option>
                     <option value="Yerevan">Yerevan</option>
                  </select>

                  @error('job_region')
                        <div class="alert alert-danger">{{ $message }}</div>
                  @enderror 

               </div>

               <div class="form-group">
                  <label for="job_status">Employment Status</label>
                  <select class="selectpicker border rounded"
                          name="job_status" 
                          id="job_status" 
                          data-style="btn-black" 
                          data-width="100%" 
                          data-live-search="true" 
                          title="Select Job Type">
                     <option value="Part Time">Part Time</option>
                     <option value="Full Time">Full Time</option>
                  </select>

                  @error('job_status')
                        <div class="alert alert-danger">{{ $message }}</div>
                  @enderror 

               </div>

               <div class="form-group">
                  <label for="job_experience_1">Experience</label>
                  <input type="text"
                         name="job_experience_1" 
                         class="form-control" 
                         id="job_experience_1" 
                         placeholder="2 to 3 year(s)">

                  @error('job_experience_1')
                        <div class="alert alert-danger">{{ $message }}</div>
                  @enderror 
                         
               </div>

               <div class="form-group">
                  <label for="job_sallary">Sallary</label>
                  <input type="text"
                         name="job_sallary" 
                         class="form-control" 
                         id="job_sallary" 
                         placeholder="$60k - $100k">

                  @error('job_sallary')
                        <div class="alert alert-danger">{{ $message }}</div>
                  @enderror
                         
               </div>

               <div class="form-group">
                  <label for="job_deadline">Deadline</label>
                  <input type="date"
                         name="job_deadline" 
                         class="form-control" 
                         id="job_deadline">

                  @error('job_deadline')
                        <div class="alert alert-danger">{{ $message }}</div>
                  @enderror
                         
               </div>

               <div class="form-group">
                  <label for="job_description">Job Description</label>
                  <textarea name="job_description" 
                            id="job_description"
                            class="form-control"  
                            cols="20" 
                            rows="10">        
                  </textarea>

                  @error('job_description')
                        <div class="alert alert-danger">{{ $message }}</div>
                  @enderror 

               </div>

               <div class="form-group">
                  <label for="job_responsibilities">Job Responsibilities</label>
                  <textarea name="job_responsibilities" 
                            id="jresponsibilities"
                            class="form-control"  
                            cols="20" 
                            rows="10">
                  </textarea>

                  @error('job_responsibilities')
                        <div class="alert alert-danger">{{ $message }}</div>
                  @enderror
               </div>

               <div class="form-group">
                  <label for="job_experience_2">Job Experience</label>
                  <textarea name="job_experience_2" 
                            id="job_experience_2"
                            class="form-control"  
                            cols="10" 
                            rows="10">
                  </textarea>

                  @error('job_experience_2')
                        <div class="alert alert-danger">{{ $message }}</div>
                  @enderror

               </div>

               <div class="form-group">
                  <label for="job_benefit">Job Benefit</label>
                  <textarea name="job_benefit" 
                            id="job_benefit"
                            class="form-control"  
                            cols="10" 
                            rows="10">
                  </textarea>

                  @error('job_benefit')
                        <div class="alert alert-danger">{{ $message }}</div>
                  @enderror

               </div>

               <div class="form-group row">
                   <div class="col-lg-4">
                     <button type="submit" class="btn btn-block btn-primary btn-md">Add Job</button>
                   </div>
                   <div class="col-lg-4"></div>
                   <div class="col-lg-4"></div>
               </div>

            </form>
         </div>
      </div>
   </div>
</section>
@endsection

