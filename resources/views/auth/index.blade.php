@extends('layouts.app')
@section('content')

<section class="section-hero overlay inner-page bg-image" style="background-image: url('images/hero_1.jpg');" id="home-section">
      <div class="container">
        <div class="row">
          <div class="col-md-7">
            <h1 class="text-white font-weight-bold">Sign Up/Login</h1>
            <div class="custom-breadcrumbs">
              <a href="#">Home</a> <span class="mx-2 slash">/</span>
              <span class="text-white"><strong>Log In</strong></span>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section class="site-section">
      <div class="container">
        <div class="row">
          <div class="col-lg-6 mb-5">
            <h2 class="mb-4">Sign Up To JobBoard</h2>
            <form  action="{{ route('register.store') }}" 
                   method="POST" 
                   class="p-4 border rounded" 
                   autocomplete="off">
                   @csrf

                 <div class="row form-group">
                   <div class="col-md-12 mb-3 mb-md-0">
                     <label class="text-black" for="register_name">Organisation Name</label>
                     <input type="text"
                            name="register_name"
                            id="register_name"
                            class="form-control @error('register_name') is-invalid @enderror"
                            placeholder="Organisation Name">

                      @error('register_name')
                            <div class="alert alert-danger">{{ $message }}</div>
                      @enderror 

                   </div>
                 </div>
              <div class="row form-group">
                <div class="col-md-12 mb-3 mb-md-0">
                  <label class="text-black" for="register_email">Email</label>
                  <input type="text"
                         name="register_email"
                         id="register_email"
                         class="form-control @error('register_email') is-invalid @enderror"
                         placeholder="Email address">

                   @error('register_email')
                            <div class="alert alert-danger">{{ $message }}</div>
                   @enderror  

                </div>
              </div>
              <div class="row form-group">
                <div class="col-md-12 mb-3 mb-md-0">
                  <label class="text-black" for="register_pwd">Password</label>
                  <input type="password"
                         name="register_pwd"
                         id="register_pwd"
                         class="form-control @error('register_pwd') is-invalid @enderror"
                         placeholder="Password" >

                   @error('register_pwd')
                            <div class="alert alert-danger">{{ $message }}</div>
                   @enderror 

                </div>
              </div>
              <div class="row form-group mb-4">
                <div class="col-md-12 mb-3 mb-md-0">
                  <label class="text-black" for="register_pwd_confirmation">Confirm Password</label>
                  <input type="password"
                         name="register_pwd_confirmation"
                         id="register_pwd_confirmation"
                         class="form-control @error('register_pwd_confirmation') is-invalid @enderror"
                         placeholder="Confirm Password" >

                   @error('register_pwd_confirmation') 
                            <div class="alert alert-danger">{{ $message }}</div>
                   @enderror 
                         
                </div>
              </div>

              <div class="row form-group">
                <div class="col-md-12">
                  <button type="submit"  class="btn px-4 btn-primary text-white">Sign Up</button>
                </div>
              </div>

            </form>
          </div>
          <div class="col-lg-6">
            <h2 class="mb-4">Log In To JobBoard</h2>
            <form action="{{ route('login.store') }}"  method="POST" class="p-4 border rounded">
             @csrf
              <div class="row form-group">
                <div class="col-md-12 mb-3 mb-md-0">
                  <label class="text-black" for="name">Organisation Name</label>
                  <input type="text"
                         name="name" 
                         id="name" 
                         class="form-control @error('name') is-invalid @enderror" 
                         placeholder="Organisation Name">

                  @error('name') 
                            <div class="alert alert-danger">{{ $message }}</div>
                  @enderror 

                </div>
              </div>
              <div class="row form-group mb-4">
                <div class="col-md-12 mb-3 mb-md-0">
                  <label class="text-black" for="password">Password</label>
                  <input type="password" 
                         name="password" 
                         id="password" 
                         class="form-control @error('password') is-invalid @enderror" 
                         placeholder="Password">

                  @error('password') 
                            <div class="alert alert-danger">{{ $message }}</div>
                  @enderror

                </div>
              </div>

              <div class="row form-group">
                <div class="col-md-12">
                  <input type="submit" value="Log In" class="btn px-4 btn-primary text-white">
                </div>
              </div>

            </form>
          </div>
        </div>
      </div>
    </section>
@endsection
