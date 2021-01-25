@extends('layouts.app')
@section('content')
@include('includes.banner')

<section class="site-section">
   <div class="container">
      <div class="row align-items-center mb-5">
         <div class="col-lg-8 mb-4 mb-lg-0">
            <div class="d-flex align-items-center">
               <div>
                  <h2>Edit Job Post</h2>
               </div>
            </div>
         </div>
         <div class="col-lg-4"></div>
      </div>
      <div class="row mb-5">
         <div class="col-lg-12">
            <form  action="/jobs/{{ $job->job_name }}" 
                   method="POST" 
                   class="p-4 p-md-5 border rounded" >
              @csrf
              @method('PATCH')

               <h3 class="text-black mb-5 border-bottom pb-2">Job Details</h3>

               <div class="form-group">
                  <label for="job_title_update">Job Title</label>
                  <input type="text" 
                         name="job_title_update" 
                         class="form-control" 
                         id="job_title_update" 
                         value="{{ $job->job_title }}" 
                         placeholder="Job Title">

                  @error('job_title_update')
                        <div class="alert alert-danger">{{ $message }}</div>
                  @enderror 

               </div>


               <div class="form-group">
                  <label for="job_region_update">Job Region</label>
                  <select class="selectpicker border rounded" 
                          id="job_region_update" 
                          name="job_region_update" 
                          data-style="btn-black" 
                          data-width="100%" 
                          data-live-search="true" 
                          title="{{ $job->job_region }}">
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

                  @error('job_region_update')
                        <div class="alert alert-danger">{{ $message }}</div>
                  @enderror 

               </div>

               <div class="form-group">
                  <label for="job_status_update">Employment Status</label>
                  <select class="selectpicker border rounded"
                          name="job_status_update" 
                          id="job_status_update" 
                          data-style="btn-black" 
                          data-width="100%" 
                          data-live-search="true" 
                          title="{{ $job->job_status }}">
                     <option value="Part Time">Part Time</option>
                     <option value="Full Time">Full Time</option>
                  </select>

                  @error('job_status_update')
                        <div class="alert alert-danger">{{ $message }}</div>
                  @enderror 

               </div>

               <div class="form-group">
                  <label for="job_experience_1_update">Experience</label>
                  <input type="text"
                         name="job_experience_1_update" 
                         class="form-control" 
                         id="job_experience_1_update"
                         value="{{ $job->job_experience_1 }}">

                  @error('job_experience_1_update')
                        <div class="alert alert-danger">{{ $message }}</div>
                  @enderror 
                         
               </div>

               <div class="form-group">
                  <label for="job_sallary_update">Sallary</label>
                  <input type="text"
                         name="job_sallary_update" 
                         class="form-control" 
                         id="job_sallary" 
                         value="{{ $job->job_sallary }}">

                  @error('job_sallary_update')
                        <div class="alert alert-danger">{{ $message }}</div>
                  @enderror
                         
               </div>

               <div class="form-group">
                  <label for="job_deadline_update">Deadline</label>
                  <input type="date"
                         name="job_deadline_update" 
                         class="form-control" 
                         id="job_deadline"
                         value="{{ $job->job_deadline }}">

                  @error('job_deadline_update')
                        <div class="alert alert-danger">{{ $message }}</div>
                  @enderror
                         
               </div>

               <div class="form-group">
                  <label for="job_description_update">Job Description</label>
                  <textarea name="job_description_update" 
                            id="job_description_update"
                            class="form-control"  
                            cols="20" 
                            rows="10">
                            {{ $job->job_description }}        
                  </textarea>

                  @error('job_description_update')
                        <div class="alert alert-danger">{{ $message }}</div>
                  @enderror 

               </div>

               <div class="form-group">
                  <label for="job_responsibilities_update">Job Responsibilities</label>
                  <textarea name="job_responsibilities_update" 
                            id="jresponsibilities_update"
                            class="form-control"  
                            cols="20" 
                            rows="10">
                            {{ $job->job_responsibilities }}
                  </textarea>

                  @error('job_responsibilities_update')
                        <div class="alert alert-danger">{{ $message }}</div>
                  @enderror
               </div>

               <div class="form-group">
                  <label for="job_experience_2_update">Job Experience</label>
                  <textarea name="job_experience_2_update" 
                            id="job_experience_2_update"
                            class="form-control"  
                            cols="10" 
                            rows="10">
                            {{ $job->job_experience_2 }}
                  </textarea>

                  @error('job_experience_2_update')
                        <div class="alert alert-danger">{{ $message }}</div>
                  @enderror

               </div>

               <div class="form-group">
                  <label for="job_benefit_update">Job Benefit</label>
                  <textarea name="job_benefit_update" 
                            id="job_benefit_update"
                            class="form-control"  
                            cols="10" 
                            rows="10">
                            {{ $job->job_benefit }}
                  </textarea>

                  @error('job_benefit_update')
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