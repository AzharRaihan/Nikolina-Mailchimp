@extends('layouts.backend.backend-layouts')
@section('page-title','admin||dashboard')
@push('page-css')
    
@endpush
@section('page-content')
    <div class="content">
        <div class="container-fluid">
            <div class="row">
            <div class="col-xl-12">
                <div class="page-title-box">
                <h4 class="page-title float-left">Dashboard</h4>
                <ol class="breadcrumb float-right">
                    <li class="breadcrumb-item"><a href="#">Nikolina</a></li>
                    <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
                </ol>
                <div class="clearfix"></div>
                </div>
            </div>
            </div><!-- end row -->

            <div class="row">
                <div class="col-md-6 col-xl-3">
                    <div class="card-box tilebox-one">
                        <i class="fa fa-address-book float-right text-muted"></i>
                        <h6 class="text-muted text-uppercase m-b-20">Contact Us</h6>
                        <h2 class="m-b-20" data-plugin="counterup">{{ $contact }}</h2>
                    </div>
                </div>
                <div class="col-md-6 col-xl-3">
                    <div class="card-box tilebox-one">
                        <i class="zmdi zmdi-email float-right text-muted"></i>
                        <h6 class="text-muted text-uppercase m-b-20">Subscribers</h6>
                        <h2 class="m-b-20" data-plugin="counterup">{{ $subscribers }}</h2>
                    </div>
                </div>
                <div class="col-md-6 col-xl-3">
                    <div class="card-box tilebox-one">
                        <i class="fa fa-users float-right text-muted"></i>
                        <h6 class="text-muted text-uppercase m-b-20">Let's Talk</h6>
                        <h2 class="m-b-20" data-plugin="counterup">{{ $lets_talk }}</h2>
                    </div>
                </div>
            </div><!-- end row -->
        </div> <!-- container -->
    </div> 
@endsection
@push('page-js')
    
@endpush