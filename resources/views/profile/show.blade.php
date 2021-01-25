@extends('layouts.app') 
@section('content')

<section class="site-section profile-bg">
    <div class="container-fluid">
        <div class="profile-banner" 
             style="background-image: url('/storage/uploads/{{ $user->profile->profile_background  ?? '' }}')">
            @if(Auth::check())
               <a href="/profile/{{ $user->name }}/edit" class="badge badge-dark edit-profile">Edit Profile</a>
            @endif
        </div>
        <div class="profile-picture">
            <img src="/storage/uploads/{{  $user->profile->profile_image ?? '' }}" alt="Profile Image" />
        </div>
        <div class="profile-caption">
            <h1>{{ $user->name }}</h1>
            <p>
                {{ $user->profile->profile_description ?? 'Editable' }}
            </p>
        </div>
    </div>
</section>
<section class="site-section">
    <div class="container">
        <div class="row mb-5 justify-content-center">
            <div class="col-md-7 text-center">
                <h2 class="section-title mb-2">Active Jobs</h2>
            </div>
        </div>

        <ul class="job-listings mb-5">
            <li class="job-listing d-block d-sm-flex pb-3 pb-sm-0 align-items-center">
                <a href="job-single.html"></a>
                <div class="job-listing-logo">
                    <img src="/images/job_logo_1.jpg" alt="Free Website Template by Free-Template.co" class="img-fluid" />
                </div>

                <div class="job-listing-about d-sm-flex custom-width w-100 justify-content-between mx-4">
                    <div class="job-listing-position custom-width w-50 mb-3 mb-sm-0">
                        <h2>Product Designer</h2>
                        <strong>Adidas</strong>
                    </div>
                    <div class="job-listing-location mb-3 mb-sm-0 custom-width w-25"><span class="icon-room"></span> New York, New York</div>
                    <div class="job-listing-meta">
                        <span class="badge badge-danger">Part Time</span>
                    </div>
                </div>
            </li>
        </ul>

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

<section class="site-section profile-contact">
    <div class="container">
        <div class="row">
            <!-- Section Titile -->
            <div class="col-md-12 wow animated fadeInLeft" data-wow-delay=".2s">
                <h1 class="section-title">In touch with us</h1>
            </div>
        </div>
        <div class="row">
            <!-- Section Titile -->
            <div class="col-md-6 mt-3 contact-widget-section2 wow animated fadeInLeft" data-wow-delay=".2s">
                <div class="find-widget">
                    Address: <a href="#">
                                {{ $user->profile->profile_address ?? 'Editable' }}
                             </a>
                </div>
                <div class="find-widget">
                    Phone: <a href="#">
                                {{ $user->profile->profile_telephone ?? 'Editable' }}
                           </a>
                </div>
                <div class="find-widget">
                    Website: <a href="https://uny.ro">
                                {{ $user->profile->profile_website ?? 'Editable' }}
                             </a>
                </div>
            </div>
            <!-- contact form -->
            <div class="col-md-6 wow animated fadeInRight" data-wow-delay=".2s">
                <form class="shake" role="form" method="post" id="contactForm" name="contact-form" data-toggle="validator">
                    <!-- Name -->
                    <div class="form-group label-floating">
                        <label class="control-label" for="name">Name</label>
                        <input class="form-control" id="name" type="text" name="name" required data-error="Please enter your name" />
                        <div class="help-block with-errors"></div>
                    </div>
                    <!-- email -->
                    <div class="form-group label-floating">
                        <label class="control-label" for="email">Email</label>
                        <input class="form-control" id="email" type="email" name="email" required data-error="Please enter your Email" />
                        <div class="help-block with-errors"></div>
                    </div>
                    <!-- Subject -->
                    <div class="form-group label-floating">
                        <label class="control-label">Subject</label>
                        <input class="form-control" id="msg_subject" type="text" name="subject" required data-error="Please enter your message subject" />
                        <div class="help-block with-errors"></div>
                    </div>
                    <!-- Message -->
                    <div class="form-group label-floating">
                        <label for="message" class="control-label">Message</label>
                        <textarea class="form-control" rows="3" id="message" name="message" required data-error="Write your message"></textarea>
                        <div class="help-block with-errors"></div>
                    </div>
                    <!-- Form Submit -->
                    <div class="form-submit mt-5">
                        <button class="btn btn-primary" type="submit" id="form-submit"><i class="material-icons mdi mdi-message-outline"></i> Send Message</button>
                        <div id="msgSubmit" class="h3 text-center hidden"></div>
                        <div class="clearfix"></div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>

@endsection
