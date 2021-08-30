@extends('layouts.frontend.master')
@section('page-title','nikolina|courses')
@push('page-css')
<style>
    .course-wrap a{
        color: #444444;
    }
    .common-content a{
        color: #ff0d92;
    }
    .common-content a:hover{
        color: #d40677;
    }
    
</style>

@endpush
@section('page-content')
    <!-- Games work Section Start -->
    <img src="{{ asset('assets/frontend/img/other-page-banner/courses.jpg') }}" alt="courses" class="img-fluid">
    <section class="course-page">
        <div class="container">
            <div class="common-heading">
                <h1 >Courses</h1>
            </div>
            <div class="common-content">
                <p>
                    I have been regularly teaching with the commercial and educational sector for most of my career. Recently, I have been lecturing at KAMK, Amiedu and RAMK in Finland on topics of games business and QA, with ravishing reviews from the attending students and professionals. 
                    <br>
                    You can inquire about lecturing availability and prices at <a href="mailto:info@nikolinawork.com">info@nikolinawork.com</a><br><br>
                    Udemy course on Games QA is available now! If you are currently unemployed and interested in QA, there is a limited amount of free vouchers available. Please contact <a href="mailto:info@nikolinawork.com">info@nikolinawork.com</a> for availability. <br> <br>
                    Games Production course coming in Q3 2021! <br> 
                    <a href="" data-toggle="modal" data-target="#subscriber">Subscribe here</a>  to be notified when new courses becomes available!
               </p>
            </div>
            <div class="common-heading">
                <h1>Coming Soon!</h1>
            </div>
            <div class="row course-wrap">
                <div class="col-12 col-md-6 col-lg-6 col-xl-6">
                    <a href="https://www.udemy.com/course/kick-off-your-gaming-qa-career-basics-of-qa-for-games/" target="blank">
                        <div class="course-card">
                            <div class="course">
                                <div class="body">
                                    <div class="title"><h1 class="text-black">Games QA course available now</h1></div>
                                    <p class="article py-2 text-black">Coming up 21st of March 2021 on Udemy!</p><br>
                                    <div class="text-center">
                                        <div class="black-arrow">
                                            <span class="hvr-forward"><img src="{{ asset('assets/frontend/img/arrow-black.png') }}" alt="arrow"></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="course-card col-12 col-md-6 col-lg-6 col-xl-6">
                    <div class="course course2">
                        <div class="body">
                            <div class="title"><h1>Comming Soon</h1></div>
                            <p class="article py-2">Coming up in April 2021 on Udemy!<br>
                            <div class="text-center">
                                <a href="#" class="black-arrow" target="_blank"><br>
                                    <span class="hvr-forward"><img src="{{ asset('assets/frontend/img/arrow-black.png') }}" alt="arrow"></span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Games Work Section End -->

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