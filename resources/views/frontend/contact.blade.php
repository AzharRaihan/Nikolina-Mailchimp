@extends('layouts.frontend.master')
@section('page-title','nikolina|contact')
@push('page-css')
@endpush
@section('page-content')
    <!-- Banner -->
    <div class="contact-banner">
        <img src="{{ asset('assets/frontend/img/other-page-banner/contact-banner.png') }}" alt="" class="img-fluid">
    </div>
    <!-- EndBanner -->

    <!-- Lets Work Start -->
    <section class="lest-work-wrap">
        <div class="container">
            <div class="contact-book-me-heading">
                <h1>LET'S WORK : <span class="book-me-speaking">Book Me!</span></h1>
            </div>
            <div class="bookme-speaking-category row pb-4">
                <div class="bookme-card col-12 col-sm-6 col-md-4 col-lg-4 col-xl-4 mobile-pb-20 mobile-mb-20">
                    <img src="{{ asset('assets/frontend/img/contact/speaking.jpg') }}" alt="" class="img-fluid">
                    <h5 class="pt-4 text-center"><strong>SPEAKING</strong></h5>
                </div>
                <div class="bookme-card col-12 col-sm-6 col-md-4 col-lg-4 col-xl-4 mobile-pb-20 mobile-mb-20">
                    <img src="{{ asset('assets/frontend/img/contact/lecturing.jpg') }}" alt="" class="img-fluid">
                    <h5 class="pt-4 text-center"><strong>LECTURING</strong></h5>
                </div>
                <div class="bookme-card col-12 col-sm-6 col-md-4 col-lg-4 col-xl-4 mobile-pb-20 mobile-mb-20">
                    <img src="{{ asset('assets/frontend/img/contact/consulting.jpg') }}" alt="" class="img-fluid">
                    <h5 class="pt-4 text-center"><strong>CONSULTING</strong></h5>
                </div>
            </div>
        </div>
    </section>
    <!-- Lets Work End -->

    <!-- Help Section-->
    <section class="help-section">
        <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-8">
            <h1>how can i help? <strong>Let's talk!</strong></h1>
            <ul>
                <li>I’m a conference or event looking for a speaker.<a href="#" data-toggle="modal" data-target="#letstalk">Speaker rates and info</a></li>
                <li>I’m a school or university looking for a lecture. <a href="#" data-toggle="modal" data-target="#letstalk">Availability and rates </a></li>
                <li>I’m a company looking to improve diversity hiring, inclusion practices or game production <a href="#" data-toggle="modal" data-target="#letstalk">Let’s work together</a></li>
                <li>I’m a great brand looking to promote our awesome stuff at your podcast. <a href="#" data-toggle="modal" data-target="#letstalk">Let’s work together</a></li>
                <li>I’m an investor interested in funding female entrepreneurs. <a href="#" data-toggle="modal" data-target="#letstalk">Let’s chat</a></li>
            </ul>
            <h1 class="pt-sm-3 pt-md-4 pt-lg-5">You really like this <strong>web page?</strong></h1>
            <p>I’m happy to say that this web page has been done by an exceptional all female team, Lumina Dev, part of Women in Digital. Women in Digital is based in Bangladesh and it’s on a mission to digitally educate and empower women from underprivileged background.  Lumina Digital is a female-led agency, proudly operating out of Bangladesh. Many of the engineers at Lumina are the top-performing graduates from Women in Digital program. Empower more female businesses by hiring Women in Digital for your next game, web page or other digital project.</p>
            </div>
        </div>
        </div>
    </section>
    <div id="particles-js">
    </div>
    <!-- End Help Section-->

    <!-- Women In Digital -->
    <section class="women-in-digital py-sm-3 py-md-4 py-lg-5">
        <div class="container">
        <div class="row py-sm-4">
        <div class="col-sm-12 col-md-8">
            <img src="{{ asset('assets/frontend/img/contact/women-in-digital.jpg') }}" alt="" class="img-fluid">
        </div>
        <div class="col-sm-12 col-md-4 m-auto mobile-py-20">
            <div class="text-center pt-sm-3">
            <h5 class="email pb-3">
                <a href="mailto:info@womenindigital.net" style="color: #FF0094"><strong>email:</strong>info@womenindigital.net</a>
            </h5>
            <h5 class="tel">
                <a href="tel:+8801716789541" style="color: #FF0094"><strong>whatsapp:</strong> +8801716789541</a>
            </h5>
            </div>
        </div>
        </div>
        </div>
    </section>
    <!-- End Women In Digital -->

    <!--  Say hello Section Start -->/
    <section class="say-hello">
        <div class="say-hello-overlay">
        <div class="container come-adn-say">
            <!-- Contact Form -->
            <div class="row justify-content-center" id="contact-form">
            <div class="col-md-12  col-lg-8">
                <div class="container">
                <form method="POST" action="{{ route('contact.store') }}">
                @csrf
                <div class="row pb-sm-2 pb-md-3 mobile-pb-20">
                    <div class="col-md-12">
                        <div class="form-group">
                        <label for="name"><strong>Name</strong></label>
                        <input placeholder="Full Name" class="form-control" type="text" name="name" id="name">
                        </div>
                    </div>
                </div>

                <div class="row pb-sm-2 pb-md-3 mobile-pb-20">
                    <div class="col-12">
                    <div class="form-group">
                        <label for="company"><strong>Company</strong></label>
                        <input placeholder="Company Name" class="form-control" type="text" name="company" id="company">
                    </div>
                    </div>
                </div>


                    <div class="row pb-sm-2 pb-md-3 mobile-pb-20">
                    <div class="col-md-6">
                        <div class="form-group">
                        <label for="email"><strong>Email</strong></label>
                        <input placeholder="Email:email@yourdomain.com" class="form-control" type="email" name="email" id="email">
                    </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                        <label for="phone"><strong>Phone</strong></label>
                        <input placeholder="Phone:555-444-333" class="form-control" type="number" name="phone" id="phone">
                        </div>
                    </div>
                    </div>

                    <div class="row pb-sm-2 pb-md-3 mobile-pb-20">
                    <div class="col-12">
                    <div class="form-group">
                        <label for="subject"><strong>Subject</strong></label>
                        <input placeholder="Write the subject of your message here..." class="form-control" type="text" name="subject" id="subject">
                    </div>
                    </div>
                    </div>

                    <div class="row pb-sm-2 pb-md-3 mobile-pb-20">
                    <div class="col-12">
                    <div class="form-group">
                        <label for="message"><strong>Message</strong></label>
                        <textarea placeholder="Write your message here..." class="form-control" name="message" id="message"></textarea>
                    </div>
                    </div>
                    </div>
                    <div class="row pb-sm-2 pb-md-3 mobile-pb-20">
                    <div class="col-12">
                        <button type="submit" name="esubmit" class="btn btn-submit">Submit</button>
                    </div>
                    </div>
                </form>
            </div>
            </div>
            </div>
            <div class="row contact-card-wrap">
            <div class="col-md-6 offset-md-3">
                <div class="contact-card">
                <h1>Contact</h1>
                <a class="contact-body" href="mailto:info@nikolina.com">info@nikolina.com</a><br>
                </div>
            </div>
            </div>
        </div>
        </div>
    </section>
    <!-- Say hello Section End -->

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
    <div class="modal fade" id="letstalk" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Contact</h5>
            <button type="button" class="close btn btn-default" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
            </div>
        
            <form method="POST" action="{{ route('lets.talk.store') }}">
                @csrf
                <div class="modal-body">
                    <div class="form-group pt-2">
                        <label class="pb-1">To :</label>
                        <input type="email" class="form-control" disabled value="info@nikolinaworks.com">
                        <input type="hidden" name="to_email" value="info@nikolinaworks.com">
                    </div>
                    <div class="form-group pt-2">
                        <label for="from-email" class="pb-1">From :</label>
                        <input type="email" class="form-control" id="from-email" placeholder="example@gmail.com" name="from_email">
                    </div>
                    <div class="form-group pt-2">
                        <label for="message" class="pb-1">Message</label>
                        <textarea class="form-control" id="message" rows="4" name="message"></textarea>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-info btn-sm text-light">Submit</button>
                    <button type="button" class="btn btn-danger btn-sm" data-dismiss="modal">Close</button>
                </div>
            </form>
        </div>
        </div>
    </div>
    <!-- Lets Talk Modal -->

    <!-- Book Modal -->
    <div class="modal fade" id="booking" role="dialog">
        <div class="modal-dialog">
        <!-- Modal content-->
        <form action="#">
            <div class="modal-content">
            <div class="modal-header">
                <strong>Book Me</strong>
                <button type="button" class="close" data-dismiss="modal" style="border: none; background: white;">&times;</button>
            </div>
            <div class="modal-body">
                <div class="form-group pt-2">
                <label for="name" class="pb-1">Name :</label>
                <input type="name" class="form-control" id="name" placeholder="Enter Name" name="name">
                </div>
                <div class="form-group pt-2">
                <label for="phone" class="pb-1">Phone :</label>
                <input type="number" class="form-control" id="phone" placeholder="Enter Phone Number" name="phone">
                </div>
                <div class="form-group pt-2">
                <label for="address" class="pb-1">Address</label>
                <textarea class="form-control" id="address" rows="4"></textarea>
                </div>
            </div>
            <div class="modal-footer">
                <button type="submit" class="btn btn-info btn-sm text-light">Submit</button>
                <button type="button" class="btn btn-danger btn-sm" data-dismiss="modal">Close</button>
            </div>
            </div>
        </form>
        </div>
    </div>
    <!-- Sponsorship Modal -->
    <div class="modal fade" id="sponsorship" role="dialog">
        <div class="modal-dialog">
        <!-- Modal content-->
        <form action="#">
            <div class="modal-content">
            <div class="modal-header">
                <strong>Sponsorship</strong>
                <button type="button" class="close" data-dismiss="modal" style="border: none; background: white;">&times;</button>
            </div>
            <div class="modal-body">
                <div class="form-group pt-2">
                <label for="name" class="pb-1">Name :</label>
                <input type="name" class="form-control" id="name" placeholder="Enter Name" name="name">
                </div>
                <div class="form-group pt-2">
                <label for="phone" class="pb-1">Phone :</label>
                <input type="number" class="form-control" id="phone" placeholder="Enter Phone Number" name="phone">
                </div>
                <div class="form-group pt-2">
                <label for="address" class="pb-1">Address</label>
                <textarea class="form-control" id="address" rows="4"></textarea>
                </div>
            </div>
            <div class="modal-footer">
                <button type="submit" class="btn btn-info btn-sm text-light">Submit</button>
                <button type="button" class="btn btn-danger btn-sm" data-dismiss="modal">Close</button>
            </div>
            </div>
        </form>
        </div>
    </div>
@endsection
@push('page-js')
    <!-- Particles Js -->
    <script src="{{ asset('assets/frontend/js/particles.js') }}"></script>
    <script src="{{ asset('assets/frontend/js/app.js') }}"></script>
@endpush