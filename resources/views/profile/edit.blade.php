@extends('layouts.app') 
@section('content')


<section class="section-hero overlay inner-page bg-image" style="background-image: url('/images/hero_1.jpg');" id="home-section">
    <div class="container">
        <div class="row">
            <div class="col-md-7">
                <h1 class="text-white font-weight-bold">Edit Profile</h1>
            </div>
        </div>
    </div>
</section>

<section class="site-section">
    <div class="container">
        <div class="row">
            <div class="col-lg-2"></div>
            <div class="col-lg-8">
                <form action="/profile/{{ $user->name }}" 
                      method="POST" 
                      enctype="multipart/form-data" >
                    @csrf 
                    @method('PATCH')

                    <div class="row form-group">
                        <div class="col-md-12 mb-3 mb-md-0">
                            <label class="text-black" for="profile_description">Company Inform</label>
                            <input    type="text" 
                                      name="profile_description" 
                                      id="profile_description" 
                                      class="form-control @error('profile_description') is-invalid @enderror"
                                      placeholder="Compnay information">

                             @error('profile_description')
                                      <div class="alert alert-danger">{{ $message }}</div>
                             @enderror          
                                      
                        </div>
                    </div>

                    <div class="row form-group">
                        <div class="col-md-12 mb-3 mb-md-0">
                            <label for="profile_background">Add Profile Background</label>
                            <input type="file" 
                                   name="profile_background" 
                                   id="profile_background" 
                                   class="form-control-file @error('profile_background') is-invalid @enderror" />

                            @error('profile_background')
                                      <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                                    
                        </div>
                    </div>

                    <div class="row form-group">
                        <div class="col-md-12 mb-3 mb-md-0">
                            <label for="profile_image">Add Profile Logo</label>
                            <input type="file" 
                                   name="profile_image" 
                                   id="profile_image" 
                                   class="form-control-file @error('profile_image') is-invalid @enderror" />

                             @error('profile_image')
                                      <div class="alert alert-danger">{{ $message }}</div>
                             @enderror
                             
                        </div>
                    </div>

                    <div class="row form-group">
                        <div class="col-md-12 mb-3 mb-md-0">
                            <label class="text-black" for="profile_address">Address</label>
                            <input type="text" 
                                   name="profile_address" 
                                   id="profile_address" 
                                   class="form-control @error('profile_address') is-invalid @enderror" 
                                   placeholder="Address" />

                             @error('profile_address')
                                   <div class="alert alert-danger">{{ $message }}</div>
                             @enderror

                        </div>
                    </div>

                    <div class="row form-group">
                        <div class="col-md-12 mb-3 mb-md-0">
                            <label class="text-black" for="profile_telephone">Telephone</label>
                            <input type="text" 
                                   name="profile_telephone" 
                                   id="profile_telephone" 
                                   class="form-control @error('profile_telephone') is-invalid @enderror" 
                                   placeholder="Thelephone" />

                             @error('profile_telephone')
                                      <div class="alert alert-danger">{{ $message }}</div>
                             @enderror

                        </div>
                    </div>

                    <div class="row form-group">
                        <div class="col-md-12 mb-3 mb-md-0">
                            <label class="text-black" for="profile_website">Website</label>
                            <input type="text" 
                                   name="profile_website" 
                                   id="profile_website" 
                                   class="form-control @error('profile_website') is-invalid @enderror" 
                                   placeholder="Website" />

                             @error('profile_website')
                                      <div class="alert alert-danger">{{ $message }}</div>
                             @enderror

                        </div>
                    </div>
                    
                    <div class="row form-group">
                        <div class="col-md-12 mb-3 mb-md-0">
                            <button type="submit" class="btn btn-primary">Edit</button>
                        </div>
                    </div>

                </form>
            </div>
            <div class="col-lg-2"></div>
        </div>
    </div>
</section>

@endsection
