<section class="widget-section padding">
    <div class="container">
        <div class="widget-wrap row">
            <div class="col-md-4 xs-padding">
                <div class="widget-content">
                    <h3>{{config('app.name')}}</h3>
                    <p>We are on a mission of sensitization, education, vocation skills training, seminars, workshops,
                        mentorship and grant disbursement to positively impact the lives of the poor by focusing on the
                        vulnerable, less privileged women and individuals in both urban and rural areas in Nigeria.</p>
                    <ul class="social-icon">
                        <li><a href="{{config('app.company_facebook')}}" target="_blank"><i class="fa fa-facebook"></i></a>
                        </li>
                        <li><a href="{{config('app.company_twitter')}}" target="_blank"><i
                                    class="fa fa-twitter"></i></a></li>
                        <li><a href="{{config('app.company_instagram')}}" target="_blank"><i
                                    class="fa fa-instagram"></i></a></li>
                        <li><a href="{{config('app.company_linkedin')}}" target="_blank"><i class="fa fa-linkedin"></i></a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-md-4 xs-padding">
                <div class="widget-content">
                    <h3>Our Impact</h3>
                    <ul class="widget-link">
                        @foreach(\App\Models\Impact::published()->latest()->take(4)->get() as $featured)
                            <li><a href="{{route('impact.show', $featured)}}">{{$featured->title}}</span></a></li>
                        @endforeach
                    </ul>
                </div>
            </div>
            <div class="col-md-4 xs-padding">
                <div class="widget-content">
                    <h3>Reach Out To Us</h3>
                    <ul class="address">
                        <li><i class="ti-email"></i> {{config('app.company_email')}}</li>
                        <li><i class="ti-mobile"></i> {{config('app.company_phone')}}</li>
                        <li><i class="ti-world"></i> {{config('app.url')}}</li>
                        <li><i class="ti-location-pin"></i> {{config('app.company_address')}}</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section><!-- ./Widget Section -->

<footer class="footer-section">
    <div class="container">
        <div class="row">
            <div class="col-md-6 sm-padding">
                <div class="copyright">&copy; 2022 {{config('app.name')}}</div>
            </div>
            <div class="col-md-6 sm-padding">
                <ul class="footer-social">
                    {{--                    <li><a href="#">Orders</a></li>--}}
                    {{--                    <li><a href="#">Terms</a></li>--}}
                    {{--                    <li><a href="#">Report Problem</a></li>--}}
                </ul>
            </div>
        </div>
    </div>
</footer><!-- /Footer Section -->
