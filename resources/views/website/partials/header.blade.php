<header id="header" class="header-section">
    <div class="top-header">
        <div class="container">
            <div class="top-content-wrap row">
                <div class="col-sm-8">
                    <ul class="left-info">
                        <li><a href="mailto:{{config('app.company_email')}}"><i class="ti-email"></i>{{config('app.company_email')}}</a>
                        </li>
                        <li><a href="tel:{{config('app.company_phone')}}"><i class="ti-mobile"></i>{{config('app.company_phone')}}</a></li>
                    </ul>
                </div>
                <div class="col-sm-4 d-none d-md-block">
                    <ul class="right-info">
                        <li><a href="{{config('app.company_facebook')}}" target="_blank"><i class="fa fa-facebook"></i></a></li>
                        <li><a href="{{config('app.company_twitter')}}" target="_blank"><i class="fa fa-twitter"></i></a></li>
                        <li><a href="{{config('app.company_instagram')}}" target="_blank"><i class="fa fa-instagram"></i></a></li>
                        <li><a href="{{config('app.company_linkedin')}}" target="_blank"><i class="fa fa-linkedin"></i></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="bottom-header">
        <div class="container">
            <div class="bottom-content-wrap row">
                <div class="col-sm-4">
                    <div class="site-branding">
                        <a href="#"><img src="{{asset('website/img/logo.jpg')}}" style="height: 80px" alt="Brand"></a>
                    </div>
                </div>
                <div class="col-sm-8 text-right">
                    <ul id="mainmenu" class="nav navbar-nav nav-menu">
                        <li><a href="{{route('home')}}">Home</a></li>
                        <li><a href="{{route('impact')}}">Impact</a></li>
                        <li><a href="#">Donation</a>
                            <ul>
                                <li><a href="{{route('donate')}}">Donate</a></li>
                                <li><a href="{{route('donation.history')}}">History</a></li>
                            </ul>
                        </li>
                        <li><a href="{{route('about')}}">About</a></li>
                        <li><a href="{{route('contact')}}">Contact</a></li>
                    </ul>
                    <a href="{{route('donate')}}" class="default-btn">Donate Now</a>
                </div>
            </div>
        </div>
    </div>
</header><!-- /Header Section -->

<div class="header-height"></div>
