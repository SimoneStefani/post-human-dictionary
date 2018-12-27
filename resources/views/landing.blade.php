@extends('master')

@section('content')
<header>
    <div class="container heading-wrapper" style="background-image: url('img/esb-landing.jpg');">
        <div class="d-flex justify-content-center align-items-center flex-column h-100" style="padding-top: 8rem">
            <div class="d-flex justify-content-center align-items-center flex-column h-100" style="padding-top: 8rem">
                <h1 class="text-center text-uppercase text-black" style="letter-spacing: 0.7rem; font-weight: bold;">Post-human Dictionary</h1>
                <h4 class="w-50 text-center text-grey-dark">50 terms to find your way in the debate on the future of the body and mind of Homo Sapiens</h4>
            </div>
            <a href="#about">
                <img src="{{ url('img/chevron-down.svg') }}" style="margin-bottom: 2rem">
            </a>
        </div>
    </div>
</header>

<section class="my-5">
    <div class="container">
        <h2 id="about" class="text-black">{{ $about->title }}</h2>

        <p class="text-justify text-black">{!! $about->body !!}</p>
    </div>
</section>

<section class="my-5">
    <div class="container">
        <h2 id="chapters" class="text-black">Chapters</h2>
        <div class="row">
            @foreach ($chapters as $chapter)
                <div class="col-12 col-md-6">
                    <h4 class="text-black"><strong>{{ $chapter->name }}</strong></h4>
                    <div class="mx-4">
                        @foreach ($chapter->posts as $post)
                            <a href="{{ '/terms/' . $post->slug }}" class="toc-link"><h5>{{ $post->title }}</h5></a>
                        @endforeach
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>
@endsection
