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
        <h2 id="about">About this Dictionary</h2>

        <p class="text-justify">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
    </div>
</section>

<section class="my-5">
    <div class="container">
        <h2 id="chapters">Chapters</h2>
        <div class="row">
            <diV class="col-12 col-md-6">
                <h4><strong>1. Framework teorico e nuove ideologie</strong></h4>
                <div class="mx-4">
                    <h5>POST-UMANO</h5>
                    <h5>POSTUMANESIMO</h5>
                    <h5>TECNOFILIA</h5>
                    <h5>TECNOFOBIA</h5>
                    <h5>TRANSUMANESIMO</h5>
                    <h5>TRANSUMANISTI</h5>
                </div>
            </div>

            <diV class="col-12 col-md-6">
                <h4><strong>2. Il corpo e i suoi alter ego</strong></h4>
                <div class="mx-4">
                    <h5>ANDROIDE</h5>
                    <h5>ARTEFATTO</h5>
                    <h5>AVATAR</h5>
                    <h5>CIBER-</h5>
                    <h5>CIBERCULTURA</h5>
                    <h5>CIBERNETICA</h5>
                    <h5>CIBERSPAZIO</h5>
                    <h5>CIBORG</h5>
                    <h5>CLONAZIONE</h5>
                    <h5>CLONE</h5>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
