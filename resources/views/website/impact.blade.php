@extends('website.partials.layout')

@section('title', 'Our Impact')

@section('content')
    <div class="pager-header">
        <div class="container">
            <div class="page-content">
                <h2>Our Impact</h2>
                <p>Our vision is to bridge the gap between the rich and the poor through empowerment!</p>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{route('home')}}">Home</a></li>
                    <li class="breadcrumb-item active">Impact</li>
                </ol>
            </div>
        </div>
    </div><!-- /Page Header -->

    <section class="blog-section bg-grey padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 xs-padding">
                    <div class="blog-items grid-list row">
                        @each('website.partials.impact-item', collect($impacts->items())->take(3)->all(), 'impact')
                    </div>
                </div><!-- Blog Posts -->
            </div>
        </div>
    </section><!-- /Blog Section -->

    <section class="cta-section d-flex align-items-center">
        <div class="container">
            <div class="row">
                <div class="col-md-9">
                    <div class="cta-content">
                        <h2>Ready to Join With Us?</h2>
                        <p>Humanity starts when you give. A small gift can make a huge difference.</p>
                    </div>
                </div>
                <div class="col-md-3 d-flex align-items-center text-right">
                    <a href="#" class="default-btn">Donate Now</a>
                </div>
            </div>
        </div>
    </section><!-- Call To Action Section -->

    <section class="blog-section bg-grey padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 xs-padding">
                    <div class="blog-items grid-list row">
                        @each('website.partials.impact-item', collect($impacts->items())->skip(3)->all(), 'impact')
                    </div>

                    {{ $impacts->links('website.partials.pagination') }}

                </div><!-- Blog Posts -->
            </div>
        </div>
    </section><!-- /Blog Section -->

@endsection
