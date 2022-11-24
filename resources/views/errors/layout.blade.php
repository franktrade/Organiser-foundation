@extends('website.partials.layout')

@section('content')
    <section class="error-section padding">
        <div class="container">
            <div class="error-content text-center">
                <h2>@yield('code')</h2>
                <h5>@yield('message')</h5>
                <p>@yield('description')</p>
                <a href="{{route('home')}}" class="default-btn">Back to Home</a>
            </div>
        </div>
    </section><!-- /Error Section -->
@endsection
