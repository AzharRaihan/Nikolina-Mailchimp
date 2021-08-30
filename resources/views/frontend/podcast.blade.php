@extends('layouts.frontend.master')
@section('page-title','nikolina|podcast')
@push('page-css')

@endpush
@section('page-content')
    <!-- Poscast Section Start -->
    <section style="background: #E1E1E1">
        <img src="{{ asset('assets/frontend/img/other-page-banner/podcast.jpg') }}" alt="public-speaking" class="img-fluid">
        <div class="container">
            <div class="common-content ">
                <p class="py-3 py-sm-3 py-md-4 py-lg-5 mobile-py-20">It’s time to talk! It’s bi-weekly podcast where I speak about my practical experiences on building one of the most diverse gaming studios in the world. I will be hosting guests from gaming and tech to speak about their experiences with diversity and inclusion. New episode every other Thursday and you can find the latest episode below. Our sponsorship slots are limited, for availability and prices please inquire here:</p>
            </div>
        </div>
    </section>

    <section id="podcast" class="mobile-mb-20">
        <div class="container">
            <!-- Insert picture with microphone in it -->
            <div class="notable-watch-heading">
                <h1>Podcast : <span class="notable-links-watch">Stream Audio</span></h1>
            </div>
            <div class="img-video-wrap podcast-wrap mb-sm-3 mb-md-4 mb-lg-5">
                <div class="img-sec">
                    <img src="{{ asset('assets/frontend/img/podcast/podcast.png') }}" alt="" class="img-fluid">
                </div>
                <div class="video-sec">
                    <h5 class="px-3 pb-sm-3 text-light text-center">Find the latest episode below.</h5>
                    <div class="notable-talk-links">
                        <a href="#"><i class="fas fa-volume-up"></i> Stream Audio</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Podcast Section End -->

    <!-- Contact Section Start -->
    <section class="contact">
        <div class="container">
            <div class="secondary pb-sm-4 pb-md-5 mb-4 mobile-mb-20">
                <a href="#">
                    I’m honoured to be nominated for Everywoman in Tech International Inspiration Award! 
                </a>
            </div>
            <div class="sponsor text-center">
                <img src="{{ asset('assets/frontend/img/sponsor-2.png') }}" alt="" class="img-fluid">
            </div>
        </div>
    </section>
    <!-- Contact Section End -->

@endsection
@push('page-js')
    
@endpush