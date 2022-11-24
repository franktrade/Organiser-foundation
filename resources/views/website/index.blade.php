@extends('website.partials.layout')

@section('title', 'Welcome')

@section('content')
    <section class="hero-section">
        <div class="container">
            <div class="hero-content">
                <h4>Join Us Today</h4>
                <h1>Give a little. Change a lot.</h1>
                <p>Help today because tomorrow you may be the one who needs helping! <br>Forget what you can get and see
                    what you can give.</p>
                <a href="#" class="default-btn">Donate Now</a>
            </div>
        </div>
    </section><!-- /Hero Section -->

    <section class="about-section bd-bottom shape circle padding">
        <div class="container">
            <div class="row">
                <div class="col-md-4 xs-padding">
                    <div class="profile-wrap">
                        <img class="profile" src="website/img/profile.jpeg" alt="profile">
                        <h3>Odinakachi Eunicemary Ijeoma<span>CEO & Founder.</span></h3>
                        <p>A world of hope, equality and equity for all.</p>
                        <img src="website/img/sign.png" alt="sign">
                    </div>
                </div>
                <div class="col-md-8 xs-padding">
                    <div class="about-wrap row">
                        <div class="col-md-6 xs-padding">
                            <img src="{{asset('website/img/about-home.jpg')}}" alt="about-thumb">
                            <h3>About Us</h3>
                            <p>Eunice Egowure Empowerment Foundation is an Edutech NGO, incorporated in the Federal
                                Republic of Nigeria as an Incorporated Trustee in 2019.</p>
                            <a href="{{route('about')}}" class="default-btn">Read More</a>
                        </div>
                        <div class="col-md-6 xs-padding">
                            <img src="{{asset('website/img/mission.jpg')}}" alt="about-thumb">
                            <h3>Our Mission</h3>
                            <p>Our mission is to aid the alleviation of poverty in rural communities and provide for the total well-being of the less privileged especially women, youth and children through provision of development needs with special focus on education and establishment of small and medium scale enterprises  by collaborating with authorities, groups and organizations to implement programs.</p>
                            <a href="#" class="default-btn">Read More</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section><!-- /Intro Section -->

    <section class="campaigns-section bd-bottom">
        <div class="container">
            <div class="row">
                <div class="col-md-6 xs-padding">
                    <div class="campaigns-wrap">
                        <h4>Featured Project</h4>
                        <h2>The Girl Child Education</h2>
                        <p>The secret to happiness lies in helping others. Never underestimate the difference YOU can
                            make in the lives of the poor, the abused and the helpless.</p>
                        <div class="progress">
                            <div class="progress-bar" role="progressbar" style="width: 100%;" aria-valuenow="25"
                                 aria-valuemin="0" aria-valuemax="100"><span
                                    class="wow cssanimation fadeInLeft">100%</span></div>
                        </div>
                        <div class="donation-box">
                            <h3><i class="ti-bar-chart"></i>Goal: 100,000 NGN</h3>
                            <h3><i class="ti-thumb-up"></i>Raised: 100,000 NGN</h3>
                        </div>
                        <a href="#" class="default-btn">Donate Now</a>
                    </div>
                </div>
                <div class="col-md-6 xs-padding">
                    <div class="video-wrap">
                        <img src="website/img/unicef4.jpg" alt="video"> 
                    </div>
                </div>
                
                <div class="col-md-6 xs-padding">
                    <div class="video-wrap">
                        <img src="website/img/unicef3.jpg" alt="video"> 
                    </div>
                </div>

                <div class="col-md-6 xs-padding">
                    <div class="video-wrap">
                        <img src="website/img/unicef2.jpg" alt="video"> 
                    </div>
                </div>

                <div class="col-md-6 xs-padding">
                    <div class="video-wrap">
                        <img src="website/img/unicef1.jpg" alt="video"> 
                    </div>
                </div>
            </div>
        </div>

                <!-- <div class="col-md-6 xs-padding">
                    <div class="video-wrap">
                        <img src="website/img/video1mp4.mp4" alt="video">
                        <div class="play">
                            <a class="img-popup" data-autoplay="true" data-vbtype="video"
                               href=""><i class="ti-control-play"></i></a>
                        </div>
                    </div>
                </div> -->
    </section><!-- /Featured Campaigns Section -->

    <!-- <section class="blog-section bg-grey bd-bottom padding">
        <div class="container">
            <div class="section-heading text-center mb-40">
                <h2>Our Impact</h2>
                <span class="heading-border"></span>
                <p>Take a look at what we have done so far.</p>
            </div><!-- /Section Heading -->
            <div class="row">
                <div class="col-lg-12 xs-padding">
                    <div class="blog-items grid-list row">
                        @each('website.partials.impact-item', $impacts, 'impact')
                    </div>
                </div><!-- Blog Posts -->
            </div>
        </div>
    </section> -->

    <section id="counter" class="counter-section">
        <div class="container">
            <ul class="row counters">
                <li class="col-md-4 col-sm-6 sm-padding">
                    <div class="counter-content">
                        <i class="">&#8358;</i>
                        <h3 class="counter">100000</h3>
                        <h4 class="text-white">Money Donated</h4>
                    </div>
                </li>
                <li class="col-md-4 col-sm-6 sm-padding">
                    <div class="counter-content">
                        <i class="ti-face-smile"></i>
                        <h3 class="counter">10</h3>
                        <h4 class="text-white">Volunteer Around The World</h4>
                    </div>
                </li>
                <li class="col-md-4 col-sm-6 sm-padding">
                    <div class="counter-content">
                        <i class="ti-user"></i>
                        <h3 class="counter">100</h3>
                        <h4 class="text-white">People Impacted</h4>
                    </div>
                </li>
            </ul>
        </div>
    </section><!-- Counter Section -->

    <section class="testimonial-section bd-bottom padding">
        <div class="container">
            <div class="section-heading text-center mb-40">
                <h2>What People Say</h2>
                <span class="heading-border"></span>
                <p>People are talking about our impact and out reaches!</p>
            </div><!-- /Section Heading -->
            <div id="testimonial-carousel" class="testimonial-carousel owl-carousel">
                @foreach($testimonials as $testimonial)
                    <div class="testimonial-item">
                        <p>{{$testimonial->content}}</p>
                        <div class="testi-footer">
                            <!-- <img src="{{Storage::url($testimonial->image)}}" alt="profile"> -->
                           <img src=" {{ asset('img/' . $testimonial->image) }}" />
                           
                            <h4>{{$testimonial->name}} <span>{{$testimonial->title}}</span></h4>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section><!-- Testimonial Section -->

    <div class="sponsor-section bd-bottom">
    </div><!-- ./Sponsor Section -->
@endsection
