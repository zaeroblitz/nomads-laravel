@extends('layouts.app')

@section('title', 'NOMADS')

@section('content')
    <!-- Header -->
    <header class="text-center">
        <h1>Explore The Beautiful World
            <br>
            As Easy One Click
        </h1>
        <p class="mt-3">
            You will see beautiful
            <br>
            moment you never see before
        </p>
        <button class="btn btn-warning btn-get-started mt-4 px-3">
            Get Started
        </button>
    </header>

    <main>
        <!-- Stats -->
        <div class="container">
            <section class="section-stats row justify-content-between text-center" id="stats">
                <div class="col-3 col-md-2 col-sm-2 stats-detail">
                    <h2>20K</h2>
                    <p>Members</p>
                </div>
                <div class="col-3 col-md-2 col-sm-2 stats-detail">
                    <h2>12</h2>
                    <p>Countries</p>
                </div>
                <div class="col-3 col-md-2 col-sm-2 stats-detail">
                    <h2>3K</h2>
                    <p>Hotels</p>
                </div>
                <div class="col-3 col-md-2 col-sm-2 stats-detail">
                    <h2>72</h2>
                    <p>Partners</p>
                </div>
            </section>
        </div>

        <!-- Popular Header -->
        <section class="section-popular" id="popular">
            <div class="container">
                <div class="row">
                    <div class="col text-center section-popular-heading">
                        <h2>Wisata Populer</h2>
                        <p>Something that you never try
                            <br>
                            before in this world
                        </p>
                    </div>
                </div>
            </div>
        </section>

        <!-- Popular Travel -->
        <section class="section-popular-content" id="popularContent">
            <div class="container">
                <div class="section-popular-travel row justify-content-center">
                    <div class="col-sm-6 col-md-4 col-lg-3 py-sm-4 py-md-2 py-lg-0">
                        <div class="card-travel text-center d-flex flex-column"
                            style="background-image: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.1)), url(frontend/images/Deratan-Bali@2x.png)">
                            <div class="travel-country">
                                INDONESIA
                            </div>
                            <div class="travel-location">
                                DERATAN, BALI
                            </div>
                            <div class="travel-button mt-auto">
                                <a href="{{ route('detail') }}" class="btn btn-travel-details px-4">
                                    View Details
                                </a>
                            </div>
                        </div>
                    </div>

                    <div class="col-sm-6 col-md-4 col-lg-3 py-sm-4 py-md-2 py-lg-0">
                        <div class="card-travel text-center d-flex flex-column"
                            style="background-image: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.1)), url(frontend/images/Bromo-Malang@2x.png)">
                            <div class="travel-country">
                                INDONESIA
                            </div>
                            <div class="travel-location">
                                BROMO, MALANG
                            </div>
                            <div class="travel-button mt-auto">
                                <a href="{{ route('detail') }}" class="btn btn-travel-details px-4">
                                    View Details
                                </a>
                            </div>
                        </div>
                    </div>

                    <div class="col-sm-6 col-md-4 col-lg-3 py-sm-4 py-md-2 py-lg-0">
                        <div class="card-travel text-center d-flex flex-column"
                            style="background-image: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.1)), url(frontend/images/Nusa-Penida@2x.png)">
                            <div class="travel-country">
                                INDONESIA
                            </div>
                            <div class="travel-location">
                                NUSA PENIDA
                            </div>
                            <div class="travel-button mt-auto">
                                <a href="{{ route('detail') }}" class="btn btn-travel-details px-4">
                                    View Details
                                </a>
                            </div>
                        </div>
                    </div>

                    <div class="col-sm-6 col-md-4 col-lg-3 py-sm-4 py-md-2 py-lg-0">
                        <div class="card-travel text-center d-flex flex-column"
                            style="background-image: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.1)), url(frontend/images/Dubai@2x.png)">
                            <div class="travel-country">
                                MIDDLE EAST
                            </div>
                            <div class="travel-location">
                                DUBAI
                            </div>
                            <div class="travel-button mt-auto">
                                <a href="{{ route('detail') }}" class="btn btn-travel-details px-4">
                                    View Details
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            </div>
        </section>

        <!-- Networks -->
        <section class="section-networks" id="networks">
            <div class="container">
                <div class="row justify-content-center align-items-center">
                    <div class="col-lg-4 col-md-4 section-networks-header">
                        <h2>Our Networks</h2>
                        <p>Companies are trusted us
                            <br>
                            more than just a trip
                        </p>
                    </div>
                    <div class="col-lg-8 col-md-8 section-networks-partner">
                        <img src="frontend/images/ana@2x.png" alt="ANA" class="img-partner">
                        <img src="frontend/images/disney@2x.png" alt="Disney" class="img-partner">
                        <img src="frontend/images/shangri-la@2x.png" alt="Shangri-La" class="img-partner">
                        <img src="frontend/images/visa@2x.png" alt="Visa" class="img-partner">
                    </div>
                </div>
            </div>
        </section>

        <!-- Testimonial -->
        <section class="section-testimonial" id="testimonial">
            <div class="container">

                <div class="section-testimonial-header">
                    <h1>They Are Loving Us</h1>
                    <p>Moments were giving them
                        <br>
                        the best experience
                    </p>
                </div>
            </div>
        </section>

        <section class="section-testimonial-content">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-4 col-md-6 col-sm-8 col-8">
                        <div class="card section-testimonial-card">
                            <div class="card-profile-pic">
                                <img src="frontend/images/ian-dooley-d1UPkiFd04A-unsplash.jpg" alt="Profile Picture">
                            </div>
                            <div class="card-name">
                                <h4>Michael</h4>
                            </div>
                            <div class="card-message">
                                <q> It was glorious and I could
                                    not stop to say wohooo for
                                    every single moment
                                    Dankeeeeee </q>
                            </div>
                            <div class="card-footer">
                                Trip to Ubud
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 col-sm-6 col-8">
                        <div class="card section-testimonial-card">
                            <div class="card-profile-pic">
                                <img src="frontend/images/michael-dam-mEZ3PoFGs_k-unsplash.jpg" alt="Profile Picture">
                            </div>
                            <div class="card-name">
                                <h4>Shayna</h4>
                            </div>
                            <div class="card-message">
                                <q> The trip was amazing and
                                    I saw something beautiful in
                                    that Island that makes me
                                    want to learn more </q>
                            </div>
                            <div class="card-footer">
                                Trip to Ubud
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 col-sm-8 col-8">
                        <div class="card section-testimonial-card">
                            <div class="card-profile-pic">
                                <img src="frontend/images/toa-heftiba-O3ymvT7Wf9U-unsplash.jpg" alt="Profile Picture">
                            </div>
                            <div class="card-name">
                                <h4>Shabrina</h4>
                            </div>
                            <div class="card-message">
                                <q> I loved it when the waves
                                    was shaking harder — I was
                                    scared too </q>
                            </div>
                            <div class="card-footer">
                                Trip to Ubud
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Buttons  -->
        <section class="section-buttons">
            <div class="container">
                <div class="row justify-content-center">
                    <a href="#" class="btn btn-need-help mr-2">I Need Help</a>
                    <a href="#" class="btn btn-get-started ml-2">Get Started</a>
                </div>
            </div>
        </section>

    </main>
@endsection
