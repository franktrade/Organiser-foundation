@extends('website.partials.layout')

@section('title', 'Contact Us')

@section('content')
    <div class="pager-header">
        <div class="container">
            <div class="page-content">
                <h2>Contact Us</h2>
                <p>We’d love to hear from you!</p>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{route('home')}}">Home</a></li>
                    <li class="breadcrumb-item active">Contact</li>
                </ol>
            </div>
        </div>
    </div><!-- /Page Header -->

    <section class="contact-section padding">
        <div id="google_map"></div><!-- /#google_map -->
        <div class="container">
            <div class="row contact-wrap">
                <div class="col-md-6 xs-padding">
                    <div class="contact-info">
                        <h3>Get in touch</h3>
                        <p>Have questions about our NGO? Reach out to us via any of our contact options provided
                            below:</p>
                        <ul>
                            <li><i class="ti-location-pin"></i> {{config('app.company_address')}}</li>
                            <li><i class="ti-mobile"></i> {{config('app.company_phone')}}</li>
                            <li><i class="ti-email"></i> {{config('app.company_email')}}</li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-6 xs-padding">
                    <div class="contact-form">
                        <h3>Send A Message</h3>
                        <form action="{{route('contact')}}" method="post" id="ajax_form" class="form-horizontal">
                            @csrf
                            <div class="form-group colum-row row">
                                <div class="col-sm-6">
                                    <input type="text" id="name" name="name" value="{{old('name')}}"
                                           class="form-control" placeholder="Name"
                                           required>
                                    @if ($errors->has('name'))
                                        <span class="help-block text-danger">
                                            <strong>{{ $errors->first('name') }}</strong>
                                        </span>
                                    @endif
                                </div>
                                <div class="col-sm-6">
                                    <input type="email" id="email" name="email" value="{{old('email')}}"
                                           class="form-control" placeholder="Email" required>
                                    @if ($errors->has('email'))
                                        <span class="help-block text-danger">
                                            <strong>{{ $errors->first('email') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-md-12">
                                    <textarea id="message" name="message"  cols="30" rows="5"
                                              class="form-control message" placeholder="Message" required>{{old('message')}}</textarea>
                                    @if ($errors->has('message'))
                                        <span class="help-block text-danger">
                                            <strong>{{ $errors->first('message') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-md-12">
                                    {!! \Anhskohbo\NoCaptcha\Facades\NoCaptcha::display() !!}
                                    @if ($errors->has('message'))
                                        <span class="help-block text-danger">
                                            <strong>{{ $errors->first('message') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group row">
                                <div class="col-md-12">
                                    <button id="submit" class="default-btn" type="submit">Send Message</button>
                                </div>
                            </div>
                            <div id="form-messages" class="alert" role="alert"></div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section><!-- /Contact Section -->
@endsection
