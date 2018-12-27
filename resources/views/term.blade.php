@extends('master')

@section('content')
<header>
    <div class="container">
        <a class="d-flex align-items-center justify-content-center my-3" href="/" style="text-decoration: none;">
            <img src="{{ url('img/esb-landing.jpg') }}" height="100"/>
            <div>
                <h6 class="text-uppercase text-black mb-0"><strong>Post-human</strong></h6>
                <h6 class="text-uppercase text-black mb-4">Dictionary</h6>
            </div>
        </a>

        <div>
            <h2>{{ $term->title }}</h2>
            <div class="text-justify">
                {!! $term->body !!}
            </div>
        </div>
    </div>
</header>
@endsection
