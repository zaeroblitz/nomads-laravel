@extends('layouts.app')

@section('title', 'Paket Travel Detail')

@section('additonal-styles')
    <link rel="stylesheet" href="{{ url('frontend/styles/details.css') }}">
@endsection

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
                            <h3>Nusa Penida</h3>
                            <p>Republic of Indonesia Raya</p>

                            <!-- Gallery -->
                            <div class="gallery">
                                <div class="xzoom-container">
                                    <img src="frontend/images/NusaPenida1Original.png" class="xzoom" id="xzoom-default"
                                        xoriginal="frontend/images/NusaPenida1Original.png">
                                </div>
                                <div class="xzoom-thumbnails">
                                    <a href="frontend/images/NusaPenida1Original.png">
                                        <img src="frontend/images/NusaPenida1Preview.png" class="xzoom-gallery" width="120"
                                            xpreview="frontend/images/NusaPenida1Original.png">
                                    </a>
                                    <a href="frontend/images/NusaPenida2Original.jpg">
                                        <img src="frontend/images/NusaPenida2Preview.png" class="xzoom-gallery" width="120"
                                            xpreview="frontend/images/NusaPenida2Original.jpg">
                                    </a>
                                    <a href="frontend/images/NusaPenida3Original.jpg">
                                        <img src="frontend/images/NusaPenida3Preview.png" class="xzoom-gallery" width="120"
                                            xpreview="frontend/images/NusaPenida3Original.jpg">
                                    </a>
                                    <a href="frontend/images/NusaPenida4Original.jpg">
                                        <img src="frontend/images/NusaPenida4Preview.png" class="xzoom-gallery" width="120"
                                            xpreview="frontend/images/NusaPenida4Original.jpg">
                                    </a>
                                    <a href="frontend/images/NusaPenida5Original.jpg">
                                        <img src="frontend/images/NusaPenida5Preview.png" class="xzoom-gallery" width="120"
                                            xpreview="frontend/images/NusaPenida5Original.jpg">
                                    </a>
                                </div>
                            </div>

                            <!-- Card Detail -->
                            <h4>Tentang Wisata</h4>
                            <p>
                                Nusa Penida is an island southeast of Indonesia’s island Bali and a district of
                                Klungkung
                                Regency that includes the neighbouring small island of Nusa Lembongan. The Badung
                                Strait separates the island and Bali. The interior of Nusa Penida is hilly with a
                                maximum
                                altitude of 524 metres. It is drier than the nearby island of Bali.
                            </p>
                            <p>
                                Bali and a district of Klungkung Regency that includes the neighbouring small island of
                                Nusa Lembongan. The Badung Strait separates the island and Bali.
                            </p>

                            <!-- Card Icon -->
                            <div class="features row justify-content-center align-items-center">
                                <div class="col-md-4 p-3">
                                    <img src="frontend/images/ic_event.png" alt="Icon Event">
                                    <div class="description">
                                        <h5>Featured Event</h5>
                                        <p>Tari Kecak</p>
                                    </div>
                                </div>
                                <div class="col-md-4 p-3">
                                    <img src="frontend/images/ic_language.png" alt="Icon Language">
                                    <div class="description">
                                        <h5>Language</h5>
                                        <p>Bahasa Indonesia</p>
                                    </div>
                                </div>
                                <div class="col-md-4 p-3">
                                    <img src="frontend/images/ic_foods.png" alt="Icon Foods">
                                    <div class="description">
                                        <h5>Foods</h5>
                                        <p>Local Foods</p>
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
                                <img src="frontend/images/Member1.png" width="40" height="40" class="rounded-circle">
                                <img src="frontend/images/Member2.png" width="40" height="40" class="rounded-circle">
                                <img src="frontend/images/Member3.png" width="40" height="40" class="rounded-circle">
                                <img src="frontend/images/Member4.png" width="40" height="40" class="rounded-circle">
                                <img src="frontend/images/MemberOthers.png" width="40" height="40" class="rounded-circle">
                            </div>

                            <hr>

                            <!-- Trip Informations -->
                            <h4>Trip Informations</h4>
                            <table>
                                <tr>
                                    <th width="50%">Date of Departure</th>
                                    <td width="50% text-right">22 Aug, 2021</td>
                                </tr>
                                <tr>
                                    <th width="50%">Duration</th>
                                    <td width="50% text-right">4D 3N</td>
                                </tr>
                                <tr>
                                    <th width="50%">Type</th>
                                    <td width="50% text-right">Open Trip</td>
                                </tr>
                                <tr>
                                    <th width="50%">Price</th>
                                    <td width="50% text-right">$80,00 / person</td>
                                </tr>
                            </table>
                        </div>

                        <!-- Button -->
                        <div class="join-container justify-content-center row mt-2">
                            <a href="checkout.html" class="btn btn-join">Join Now</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
@endsection

@section('addtional-scritps')
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
@endsection
