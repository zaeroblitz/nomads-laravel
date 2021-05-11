@extends('layouts.app')

@section('title', 'Paket Travel Detail')

    @push('prepend-style')
        <link rel="stylesheet" href="{{ url('frontend/libraries/xzoom/xzoom.css') }}">
        <link rel="stylesheet" href="{{ url('frontend/styles/details.css') }}">
    @endpush

@section('content')
    <main>
        <section class="section-details-header">
        </section>

        <section class="section-details-content">
            <!-- Breadcrumb -->
            <div class="container">
                <div class="row">
                    <div class="col p-3">
                        <nav>
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item">Paket Travel </li>
                                <li class="breadcrumb-item active">Details</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>

            <!-- Card -->
            <div class="container">
                <div class="row">
                    <div class="col-lg-8">
                        <div class="card card-details">

                            <!-- Card Header -->
                            <h3>{{ $item->location }}</h3>
                            <p>{{ $item->country }}</p>

                            <!-- Gallery -->
                            @if ($item->galleries->count())
                                <div class="gallery">
                                    <div class="xzoom-container">
                                        <img src="{{ Storage::url($item->galleries->first()->image) }}" class="xzoom"
                                            id="xzoom-default"
                                            xoriginal="{{ Storage::url($item->galleries->first()->image) }}">
                                    </div>

                                    <div class="xzoom-thumbnails">
                                        @foreach ($item->galleries as $gallery)
                                            <a href="{{ Storage::url($gallery->image) }}">
                                                <img src="{{ Storage::url($gallery->image) }}" class="xzoom-gallery"
                                                    xpreview="{{ Storage::url($gallery->image) }}">
                                            </a>
                                        @endforeach
                                    </div>
                                </div>
                            @endif

                            <!-- Card Detail -->
                            <h4>Tentang Wisata</h4>
                            <p class="about">
                                {{ nl2br($item->about) }}
                            </p>

                            <!-- Card Icon -->
                            <div class="features row justify-content-center align-items-center">
                                <div class="col-md-4 p-3">
                                    <img src="{{ url('frontend/images/ic_event.png') }}" alt="Icon Event">
                                    <div class="description">
                                        <h5>Featured Event</h5>
                                        <p>{{ $item->featured_event }}</p>
                                    </div>
                                </div>
                                <div class="col-md-4 p-3">
                                    <img src="{{ url('frontend/images/ic_language.png') }}" alt="Icon Language">
                                    <div class="description">
                                        <h5>Language</h5>
                                        <p>{{ $item->language }}</p>
                                    </div>
                                </div>
                                <div class="col-md-4 p-3">
                                    <img src="{{ url('frontend/images/ic_foods.png') }}" alt="Icon Foods">
                                    <div class="description">
                                        <h5>Foods</h5>
                                        <p>{{ $item->foods }}</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 mt-2 mt-sm-2 mt-md-2 mt-lg-0">
                        <div class="card card-informations">

                            <!-- Card Members -->
                            <h4>Members are going</h4>
                            <div class="members-photo">
                                <img src="{{ url('frontend/images/Member1.png') }}" width="40" height="40"
                                    class="rounded-circle">
                                <img src="{{ url('frontend/images/Member2.png') }}" width="40" height="40"
                                    class="rounded-circle">
                                <img src="{{ url('frontend/images/Member3.png') }}" width="40" height="40"
                                    class="rounded-circle">
                                <img src="{{ url('frontend/images/Member4.png') }}" width="40" height="40"
                                    class="rounded-circle">
                                <img src="{{ url('frontend/images/MemberOthers.png') }}" width="40" height="40"
                                    class="rounded-circle">
                            </div>

                            <hr>

                            <!-- Trip Informations -->
                            <h4>Trip Informations</h4>
                            <table>
                                <tr>
                                    <th width="50%">Date of Departure</th>
                                    <td width="50% text-right">
                                        {{ \Carbon\Carbon::create($item->departure_date)->format('d M, Y') }}</td>
                                </tr>
                                <tr>
                                    <th width="50%">Duration</th>
                                    <td width="50% text-right">{{ $item->duration }}</td>
                                </tr>
                                <tr>
                                    <th width="50%">Type</th>
                                    <td width="50% text-right">{{ $item->type }}</td>
                                </tr>
                                <tr>
                                    <th width="50%">Price</th>
                                    <td width="50% text-right">${{ $item->price }},00 / person</td>
                                </tr>
                            </table>
                        </div>

                        <!-- Button Checkout-->
                        <div class="join-container">
                            @auth
                                <form action="{{ route('checkout-process', $item->id) }}" method="POST">
                                    @csrf
                                    <button class="btn btn-join justify-content-center mt-2" type="submit">Join Now</button>
                                </form>
                            @endauth

                            @guest
                            <a href="{{ route('login') }}" class="btn btn-login justify-content-center mt-2">Login to Join</a>    
                            @endguest
                        </div>
                        {{-- <div class="join-container justify-content-center row mt-2">
                            <a href="{{ route('checkout') }}" class="btn btn-join">Join Now</a>
                        </div> --}}
                    </div>
                </div>
            </div>
        </section>
    </main>
@endsection

@push('addon-script')
    <script src="{{ url('frontend/libraries/xzoom/xzoom.min.js') }}"></script>
    <script>
        $(document).ready(function() {
            $('.xzoom, .xzoom-gallery').xzoom({
                zoomWidth: 500,
                title: false,
                tint: '#333',
                Xoffset: 15,
            });
        });

    </script>
@endpush
