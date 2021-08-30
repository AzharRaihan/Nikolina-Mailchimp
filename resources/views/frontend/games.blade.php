@extends('layouts.frontend.master')
@section('page-title','nikolina|games')
@push('page-css')

@endpush
@section('page-content')
       <!-- Speaking Banner Section Start -->
       <img src="{{ asset('assets/frontend/img/other-page-banner/game.jpg') }}" alt="public-speaking" class="img-fluid">
       <!-- Speaking Banner Section End -->
   
       <!-- Games Categories -->
       <section class="game-page">
           <div class="container">
               <div class="common-heading">
                   <h1>Games</h1>
               </div>
               <div class="common-content">
                   <p>In my career, I worked on more than 20 games, on the range of platforms, from consoles, smart TV, social networks and VR, but mostly on mobile. I specialise in F2P production and product management, with strong expertise in live ops. I worked in the gaming industry in many roles, from QA management through design and production, and for the last few years, mostly in product leadership and key design.</p>
               </div>
               <div class="pb-5">
                   <div class="row ">
                       <div class="col-12 col-md-6 col-lg-6 col-xl-6 pt-5">
                           <div class="games-icon text-center">
                               <img src="{{ asset('assets/frontend/img/games-categories/idle-cat-stars.png') }}" alt="games1" class="img-fluid">
                           </div>
                           <a href="#">
                               <div class="games-body">
                                   <div class="games-content-head" style="color: #FF119B;">Idle Cat Stars</div>
                                   <div class="platform-wrap">
                                       <h3><strong>Platform :</strong></h3>
                                       <div class="platform-icon">
                                           <i class="fab fa-apple"></i>
                                           <i class="fab fa-android"></i>
                                       </div>
                                   </div>
                               </div>
                           </a>
                       </div>
                       <div class="col-12 col-md-6 col-lg-6 col-xl-6 pt-5">
                           <div class="games-icon text-center">
                               <img src="{{ asset('assets/frontend/img/games-categories/compas-point2.png') }}" alt="games2" class="img-fluid">
                           </div>
                           <a href="#">
                               <div class="games-body">
                                   <div class="games-content-head" style="color: #FF119B;">Compass Point West</div>
                                   <div class="platform-wrap">
                                       <h3><strong>Platform :</strong></h3>
                                       <div class="platform-icon">
                                           <i class="fab fa-apple"></i>
                                       </div>
                                   </div>
                               </div>
                           </a>
                       </div>
                       <div class="col-12 col-md-6 col-lg-6 col-xl-6 pt-5">
                           <div class="games-icon text-center">
                               <img src="{{ asset('assets/frontend/img/games-categories/angry-birds.png') }}" alt="games3" class="img-fluid">
                           </div>
                           <a href="#">
                               <div class="games-body">
                                   <div class="games-content-head" style="color: #FF119B;">Angry Birds Trilogy</div>
                                   <div class="platform-wrap">
                                       <h3><strong>Platform :</strong></h3>
                                       <div class="platform-icon">
                                           <i class="fab fa-xbox"></i>
                                           <i class="fab fa-playstation"></i>
                                       </div>
                                   </div>
                               </div>
                           </a>
                       </div>
                       <div class="col-12 col-md-6 col-lg-6 col-xl-6 pt-5">
                           <div class="games-icon text-center">
                               <img src="{{ asset('assets/frontend/img/games-categories/juice-cubes.png') }}" alt="games1" class="img-fluid">
                           </div>
                           <a href="#">
                               <div class="games-body">
                                   <div class="games-content-head" style="color: #FF119B;">Juice Cubes</div>
                                   <div class="platform-wrap">
                                       <h3><strong>Platform :</strong></h3>
                                       <div class="platform-icon">
                                           <i class="fab fa-apple"></i>
                                           <i class="fab fa-android"></i>
                                           <i class="fab fa-facebook"></i>
                                           <i class="fab fa-amazon"></i>
                                       </div>
                                   </div>
                               </div>
                           </a>
                       </div>
                       <div class="col-12 col-md-6 col-lg-6 col-xl-6 pt-5">
                           <div class="games-icon text-center">
                               <img src="{{ asset('assets/frontend/img/games-categories/quantumsiege.png') }}" alt="games2" class="img-fluid">
                           </div>
                           <a href="#">
                               <div class="games-body">
                                   <div class="games-content-head" style="color: #FF119B;">Quantum Siege</div>
                                   <div class="platform-wrap">
                                       <h3><strong>Platform :</strong></h3>
                                       <div class="platform-icon">
                                           <i class="fab fa-apple"></i>
                                           <i class="fab fa-android"></i>
                                       </div>
                                   </div>
                               </div>
                           </a>
                       </div>
                       <div class="col-12 col-md-6 col-lg-6 col-xl-6 pt-5">
                           <div class="games-icon text-center">
                               <img src="{{ asset('assets/frontend/img/games-categories/sky-punks.png') }}" alt="games3" class="img-fluid">
                           </div>
                           <a href="#">
                               <div class="games-body">
                                   <div class="games-content-head" style="color: #FF119B;">Sky Punks</div>
                                   <div class="platform-wrap">
                                       <h3><strong>Platform :</strong></h3>
                                       <div class="platform-icon">
                                           <i class="fab fa-apple"></i>
                                           <i class="fab fa-android"></i>
                                       </div>
                                   </div>
                               </div>
                           </a>
                       </div>
                   </div>
               </div>
               <ul class="pagination justify-content-end pb-3">
                   <li class="page-item"><a class="page-link" href="{{ route('games') }}">Previous</a></li>
                   <li class="page-item"><a class="page-link" href="{{ route('games') }}">1</a></li>
                   <li class="page-item"><a class="page-link" href="{{ route('games2') }}">2</a></li>
                   <li class="page-item"><a class="page-link" href="{{ route('games3') }}">3</a></li>
                   <li class="page-item"><a class="page-link" href="{{ route('games2') }}">Next</a></li>
               </ul>
           </div>
       </section>
       <!-- End Games Categories -->
   
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