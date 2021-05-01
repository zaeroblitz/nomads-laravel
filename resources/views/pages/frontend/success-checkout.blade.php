@extends('layouts.success-checkout')

@section('title', 'Success Checkout')

@section('content')
    <main>
        <section>
            <div class="container">
                <div class="section-success-image">
                    <img src="{{ url('frontend/images/ic_mail.png') }}" width="266" height="266">
                </div>

                <div class="section-success-text">
                    <h3>Yay! Success</h3>
                    <p>We've sent you email for trip instruction <br>
                        please read it well</p>
                </div>

                <div class="section-success-button">
                    <a href="{{ route('home') }}" class="btn btn-homepage">Homepage</a>
                </div>
            </div>
        </section>
    </main>
@endsection

@push('prepend-style')
    <link rel="stylesheet" href="{{ url('frontend/styles/success_checkout.css') }}">
@endpush
