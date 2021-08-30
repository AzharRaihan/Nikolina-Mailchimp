@extends('layouts.frontend.master')
@section('page-title','nikolina|speaking')
@push('page-css')

@endpush
@section('page-content')
        <!-- Speaking Section Section -->
        <section class="speaking">
            <div class="speaking-banner">
                <img src="{{ asset('assets/frontend/img/other-page-banner/speaking.jpg') }}" alt="public-speaking" class="img-fluid">
            </div>
            <div class="container mobile-pb-20">
                <div class="speaking-wrap">
                    <div class="speaking-heading">
                        <h1>BOOK ME: <span class="book-me-speaking">Speaking</span></h1>
                    </div>
                    <div class="common-content">
                        <p class="pb-sm-3 pb-md-4 pb-lg-5 mobile-pb-20">Nikolina has a reputation as one of the most engaging and informative speakers in the gaming and tech industry circuit, with more than 20 speaking appearances within the last two years. She’s a master of storytelling and deeply passionate about topics she delivers, leaving her audience not only highly informed but also deeply exhilarated. Every talk she delivers, it’s painstakingly crafted to suit the audience and the event, but without ever losing her authentic voice and unique delivery style.</p>
                    </div>
                </div>
            </div>
        </section>
        <!-- Speaking Section End -->
    
        <section class="keynotes-wrap py-sm-3 py-md-4 py-lg-5 mobile-py-20">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-7">
                        <h4 class="pb-sm-3 pb-md-4 pb-lg-5 text-center mobile-pb-20">Regularly rated as one of the best speakers at the event, Nikolina speaks about the following:</h4>
                        <h2 class="keynotes pb-sm-2 pb-md-3 mobile-pb-10">KEYNOTES/PANELS/TALKS</h2>
                        <ul class="pl-sm-2 pl-md-3 pl-lg-5 mobile-pl-20">
                            <li>Practical approach to diversity and inclusion</li>
                            <li>Building company culture</li>
                            <li>Female entrepreneurship</li>
                            <li>Entering games and tech industry</li>
                            <li>Games production</li>
                            <li>Live Ops in games</li>
                            <li>Leadership</li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>
    
    
        <section class="pb-sm-3 pb-md-4 pb-lg-5">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="notable-watch-heading">
                            <h1>NOTABLE TALKS : <span class="notable-links-watch">Watch Now</span></h1>
                        </div>
                        <div class="notable-speaking">
                            <div class="notable-img-sec">
                                <img src="{{ asset('assets/frontend/img/speaking/notable-talk-s.png') }}" alt="" class="img-fluid">
                            </div>
                            <div class="notable-video-sec text-light text-center">
                                <h4><strong>Power of being different</strong></h4>
                                <h5 class="py-sm-2 py-md-3 py-lg-4 mobile-py-10">Why and how we build one of the most unusual studios in the industry</h5>
                                <div class="notable-talk-links">
                                    <a href="https://www.youtube.com/watch?v=uPWsS0tQZyA" class="venobox btn-watch-video" data-vbtype="video" data-autoplay="true"><i class="far fa-play-circle"></i> Watch Video</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    
        <section class="mobile-pt-20">
            <div class="container">
                <div class="row">
                    <div class="col-12 col-sm-6 col-md-4 col-lg-4 col-xl-4 mobile-pb-20">
                        <div class="speaking-card">
                            <img src="{{ asset('assets/frontend/img/speaking/sp-2.png') }}" alt="" class="img-fluid">
                            <div class="caption">
                                <p class="py-3"><strong>Panel : </strong>Games for good</p>
                            </div>
                            <div class="speaking-card-content">
                                <p class="pb-3">In this panel from the Industry Visions & Values track at Pocket Gamer Connects London on January 21 2020 our experts discuss how games can have a positive impact in society.</p>
                                <p><strong>Speaker :</strong> Nikolina Zidar, Unicorn Pirates</p>
                                <p><Strong>Track : </Strong>Industry Visions & Values</p>
                                <p><strong>Event : </strong>Pocket Gamer Connects London 2020</p>
                            </div>
                            <div class="notable-talk-links py-2">
                                <a href="https://youtu.be/QsGfxyNO6Zo" class="venobox btn-watch-video" data-vbtype="video" data-autoplay="true"><i class="far fa-play-circle"></i> Watch Video </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-sm-6 col-md-4 col-lg-4 col-xl-4 mobile-pb-20">
                        <div class="speaking-card">
                            <img src="{{ asset('assets/frontend/img/speaking/sp-3.png') }}" alt="" class="img-fluid">
                            <div class="caption">
                                <p class="py-3"><strong>The Art of Free to Play</strong></p>
                            </div>
                            <div class="speaking-card-content">
                                <p class="pb-3">'The Art of Free to Play Games' was a live virtual 15 minute keynote held at UPPSTART on 4th September 2020. It took place on our Gaming Track.</p>
                                <p><strong>Speaker :</strong> Nikolina Zidar, Unicorn Pirates</p>
                                <p><strong>Track :</strong> Learn the pros and cons of F2P games and how free games make revenue.</p>
                                <p><strong>Event : </strong>Uppstart 2020</p>
                            </div>
                            <div class="notable-talk-links py-2">
                                <a href="https://youtu.be/d7GSLTZ_BNw" class="venobox btn-watch-video" data-vbtype="video" data-autoplay="true"><i class="far fa-play-circle"></i> Watch Video </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-sm-6 col-md-4 col-lg-4 col-xl-4 mobile-pb-20">
                        <div class="speaking-card">
                            <img src="{{ asset('assets/frontend/img/speaking/sp-4.png') }}" class="img-fluid">
                            <div class="caption">
                                <p class="py-3"><strong>Mirror Image - Games as representation of our studio</strong></p>
                            </div>
                            <div class="speaking-card-content">
                                <p class="pb-3">Studios create games that it’s creators want to play. Our panel will consider how women in gaming and diversity in the workplace can give studios a creative edge and why it’s essential for companies to have a culture in place to support it’s workforce.</p>
                                <p><strong>Speaker :</strong> Nikolina Zidar, Unicorn Pirates</p>
                                <p><strong>Track :</strong> Game Studio Culture Forum</p>
                                <p><strong>Games Forum Seattle, 2018</p>
                            </div>
                            <div class="notable-talk-links py-2">
                                <a href="https://youtu.be/d7GSLTZ_BNw" class="venobox btn-watch-video" data-vbtype="video" data-autoplay="true"><i class="far fa-play-circle"></i> Watch Video </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    
        <!-- Speaker Presentation Section Start -->
        <!-- <section class="speaker-presentation-wrap my-sm-3 my-md-4 my-lg-5">
            <div class="speaker-presentation-img">
                <img src="{{ asset('assets/frontend/img/speaking/speaking3.png') }}" alt="" class="img-fluid">
            </div>
            <div class="speaker-presentation-content px-sm-3 px-md-4 py-lg-5">
                <h3 class="text-light">UPCOMING APPEARANCES:</h3>
                <h4 class="text-center py-sm-2 py-md-3">
                    <a href="https://esportsgamingsummit.com/" class="text-light" target="_blank">Keynote at MENA Esports & Gaming Summit, 5th & 6th of April 2021, Dubai UAE</a>
                </h4>
                <a href="https://esportsgamingsummit.com/" style="color: #FF0D92">
                    https://esportsgamingsummit.com/
                </a>
            </div>
        </section> -->
    
        <section class="my-sm-3 my-md-4 my-lg-5 py-sm-3 py-md-4 py-lg-5 mobile-my-20 mobile-py-20" style="background: black">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12 col-md-5 col-lg-6 mt-sm-4 mt-md-0 m-auto mobile-py-20">
                        <div class="speaker-presentation-img">
                            <img src="{{ asset('assets/frontend/img/speaking/speaking3.png') }}" alt="" class="img-fluid">
                        </div>
                    </div>
                    <div class="col-sm-12 col-md-7 col-lg-6 mt-sm-4 mt-md-0 mobile-py-20">
                        <div class="speaker-presentation-content">
                            <h3 class="text-light">UPCOMING APPEARANCES:</h3>
                            <h4 class="py-sm-2 py-md-3">
                                <a href="https://esportsgamingsummit.com/" class="text-light" target="_blank">Keynote at MENA Esports & Gaming Summit, 5th & 6th of April 2021, Dubai UAE</a>
                            </h4>
                            <a href="https://esportsgamingsummit.com/" style="color: #FF0D92">
                                https://esportsgamingsummit.com/
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Speaker Presentation Section End -->
    
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