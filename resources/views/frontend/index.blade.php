@extends('layouts.frontend.master')
@section('page-title','index')
@push('page-css')

@endpush
@section('page-content')
    <!-- Banner Section Start -->
    <div class="owl-carousel owl-theme">
      <div class="item text-center">
          <img src="{{ asset('assets/frontend/img/banner/banner-1.png') }}" alt="" class="img-fluid">
      </div>
      <div class="item">
          <img src="{{ asset('assets/frontend/img/banner/banner-2.png') }}" alt="" class="img-fluid">
      </div>
      <div class="item">
          <img src="{{ asset('assets/frontend/img/banner/banner-4.png') }}" alt="" class="img-fluid">
      </div>
    </div>
    <!-- Banner Section End -->

    <!-- Who I Am Section Start -->
    <section class="who">
        <div class="container">
            <div class="common-heading">
                <h1>Who I Am!</h1>
            </div>
            <div class="common-content">
                <p>Public speaker, serial entrepreneur, game developer, and diversity champion. My arena is the tech industry and my passion is games.

                    Hi, I’m Nikolina and welcome to my page! I’m a public speaker, a lecturer, podcast host, diversity champion and professional consultant. My professional journey took me from government job, through travel industry to tech.I have been a serial entrepreneur in the tech space with the mission to empower and give safe space to underrepresented people in tech. If you are looking for practical advice on diversity and inclusion, mobile game development and transformative leadership, I can help you.
                    
                    In my career, I worked on over 20 games. As a consultant, I worked with tech giants like Nokia as well as a wide range of gaming studios and NGO’s.
                </p>
            </div>
            <div class="nikolina-fiinska">
                <img src="{{ asset('assets/frontend/img/signiture.png') }}" alt="" class="img-fluid">
            </div>
        </div>
    </section>
    <!-- Who I Am Section End -->

    <!-- Making Magical Section Start -->
    <section class="making-magical">
        <div class="container">
            <div class="row my-sm-1 my-md-3 my-lg-4  py-lg-5 py-sm-3 py-md-4 py-xl-5">
                <div class="col-sm-4 col-md-4">
                    <div class="single-image">
                    <img src="{{ asset('assets/frontend/img/portfolio/pf-1.png') }}" class="img-fluid " alt="">
                    </div>
                    <div class="single-image">
                    <img src="{{ asset('assets/frontend/img/portfolio/pf-4.png') }}" class="img-fluid" alt="">
                    </div>
                </div>
                <div class="col-sm-4 col-md-4">
                    <div class="single-image">
                    <img src="{{ asset('assets/frontend/img/portfolio/pf-2.png') }}" class="img-fluid" alt="">
                    </div>
                    <div class="single-image">
                    <img src="{{ asset('assets/frontend/img/portfolio/pf-5.png') }}" class="img-fluid" alt="">
                    </div>
                </div>
                <div class="col-sm-4 col-md-4">
                    <div class="single-image">
                        <img src="{{ asset('assets/frontend/img/portfolio/pf-3.png') }}" class="img-fluid" alt="">
                    </div>
                    <div class="single-image">
                        <img src="{{ asset('assets/frontend/img/portfolio/pf-6.png') }}" class="img-fluid" alt="">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Making Magical Section End -->

    <!-- Listen Section Start -->
    <section class="listen">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="listen-head">
                        <h1>It’s time to talk</h1>
                        <h3>Listen To 
                        The Podcast</h3>
                    </div>
                    <div class="subscribe">
                        <a href="#" data-toggle="modal" data-target="#subscriber">Subscribe now</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Listen Section End -->

    <!-- About Brand Section Start -->
    <section class="about-brand">
        <div class="container">
            <div class="common-heading">
                <h3>COMPANIES I WORKED WITH</h3>
            </div>
            <div class="row">
                <div class="col-md-8 offset-md-2">
                    <div class="row">
                        <div class="col-md-3 col-sm-6 col-6 pb-4">
                            <img src="{{ asset('assets/frontend/img/about-brand/nokia.png') }}" alt="nokia" class="img-fluid">
                        </div>
                        <div class="col-md-3 col-sm-6 col-6  pb-4">
                            <img src="{{ asset('assets/frontend/img/about-brand/rovio.png') }}" alt="rovio" class="img-fluid">
                        </div>
                        <div class="col-md-3 col-sm-6 col-6  pb-4">
                            <img src="{{ asset('assets/frontend/img/about-brand/music.png') }}" alt="music" class="img-fluid">
                        </div>
                        <div class="col-md-3 col-sm-6 col-6  pb-4">
                            <img src="{{ asset('assets/frontend/img/about-brand/next-games.png') }}" alt="games" class="img-fluid">
                        </div>
                    </div>

                </div>
            </div>
            <div class="row pb-sm-3 pb-md-4 pb-lg-5">
                <div class="col-md-6 offset-md-3">
                   <div class="row">
                        <div class="col-md-4 col-sm-6 col-6  pb-4">
                            <img src="{{ asset('assets/frontend/img/about-brand/women-sponsor.png') }}" alt="games" class="img-fluid">
                        </div>
                        <div class="col-md-4 col-sm-6 col-6  pb-4">
                            <img src="{{ asset('assets/frontend/img/about-brand/lgin.png') }}" alt="games" class="img-fluid">
                        </div>
                        <div class="col-md-4 col-sm-6 col-6  pb-4">
                            <img src="{{ asset('assets/frontend/img/about-brand/game-academy.png') }}" alt="games" class="img-fluid">
                        </div>
                   </div>
                </div>
            </div>
        </div>
    </section>
    <!-- About Brand Section End -->


    <section class="brands">
      <div class="container">
        <div class="text-center">
          <img src="{{ asset('assets/frontend/img/other-page-banner/brands.png') }}" alt="" class="img-fluid">
        </div>
      </div>
    </section>


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


    <!-- Lets Talk Modal -->
    <div class="modal fade" id="subscriber" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
          <div class="modal-content">
              <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalLabel">Subscribe</h5>
                  <button type="button" class="btn btn-default close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                  </button>
              </div>

              <form  method="POST" action="{{ route('subscriber.store') }}">
                @csrf
                  <div class="modal-body">
                      <div class="form-group pt-2">
                          <label for="from-email" class="pb-1">Email</label>
                          <input type="email" class="form-control @error('email') is-invalid @enderror" value="{{ old('email') }}" id="from-email" placeholder="example@gmail.com" name="email">
                      </div>
                  </div>
                  <div class="modal-footer">
                      <button type="submit"  class="btn btn-info btn-sm text-light">Submit</button>
                      <button type="button" class="btn btn-danger btn-sm" data-dismiss="modal">Close</button>
                  </div>
              </form>
          </div>
        </div>
    </div>
    <!-- Lets Talk Modal -->

@endsection
@push('page-js')
    
@endpush