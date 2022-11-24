@extends('website.partials.layout')

@section('title', $impact->title)

@section('content')
    {{--    <div class="pager-header">--}}
    {{--        <div class="container">--}}
    {{--            <div class="page-content">--}}
    {{--                <h2>Our Impact</h2>--}}
    {{--                <p>Our vision is to bridge the gap between the rich and the poor through empowerment!</p>--}}
    {{--                <ol class="breadcrumb">--}}
    {{--                    <li class="breadcrumb-item"><a href="{{route('home')}}">Home</a></li>--}}
    {{--                    <li class="breadcrumb-item active">Impact</li>--}}
    {{--                </ol>--}}
    {{--            </div>--}}
    {{--        </div>--}}
    {{--    </div><!-- /Page Header -->--}}

    <section class="blog-section bg-grey padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-10 offset-1 sm-padding">
                    <div class="blog-items single-post row">
                        <img src="{{asset($impact->cover_image)}}" alt="{{$impact->title}}">
                        <h2>{{$impact->title}}</h2>
                        <div class="meta-info">
                            <span>
                                <i class="ti-bookmark"></i> Date: <a
                                    href="#">{{$impact->published_at->toDayDatetimeString()}}</a>
                            </span>
                        </div><!-- Meta Info -->

                        {!! $impact->content !!}

                        <div class="share-wrap">
                            <h4>Share</h4>
                            <ul class="share-icon">
                                <li>
                                    <a href="{{$shareLinks['facebook']}}" target="_blank">
                                        <i class="ti-facebook"></i> Facebook
                                    </a>
                                </li>
                                <li>
                                    <a href="{{$shareLinks['twitter']}}" target="_blank">
                                        <i class="ti-twitter"></i> Twitter
                                    </a>
                                </li>
                                <li>
                                    <a href="{{$shareLinks['whatsapp']}}" target="_blank">
                                        <i class="ti-whatsapp"></i> Whatsapp
                                    </a>
                                </li>
                                <li>
                                    <a href="{{$shareLinks['linkedin']}}" target="_blank">
                                        <i class="ti-linkedin"></i> Linkedin
                                    </a>
                                </li>
                            </ul>
                        </div><!-- Share Wrap -->
                    </div>
                </div><!-- Blog Posts -->
            </div>
        </div>
    </section><!-- /Blog Section -->
@endsection
