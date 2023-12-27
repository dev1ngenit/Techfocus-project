@extends('frontend.master')
@section('metadata')
@endsection
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="breadcrumbs">
                    <a href="index.html" class="">Home page</a> &gt;
                    <span class="txt-mcl active"> Exhibit with us</span>
                </div>
            </div>
        </div>
        <div class="row bg-light p-5">
            <div class="col-lg-12">
                <h1 class="titles text-center">EXHIBIT WITH US</h1>
                <h5 class="text-center">Do you want to find out how to work with us? You are in the right place.</h5>
            </div>
        </div>
    </div>
    <div class="container exhibition-area">
        <div class="row exhibition-content">
            <div class="col-lg-8 offset-lg-2">
                <div class="row align-items-center justify-content-center">
                    <div class="col-lg-6 col-sm-12">
                        <div class="card exhibition-card p-5 rounded-0">
                            <img src="https://img.directindustry.com/media/ps/images/di/carrefour/icon-fab.svg"
                                width="80px">
                            <h3 class="titles text-center">YOU ARE A MANUFACTURER</h3>
                            <p class="mt-5 text-center">SHOWCASE YOUR PRODUCTS <br> & receive international leads</p>
                            <a href="https://www.directindustry.com/exhibit_on_directindustry/subscription"
                                class="btn-mcl-inverted btn rounded-0">SIGN UP!</a>
                        </div>
                    </div>
                    <div class="col-lg-6 col-sm-12">
                        <div class="card exhibition-card p-5 rounded-0">
                            <img src="https://img.directindustry.com/media/ps/images/di/carrefour/icon-distributeur.svg"
                                width="80px">
                            <h3 class="titles text-center">YOU ARE A DISTRIBUTOR</h3>
                            <p class="mt-5 text-center">DISPLAY YOUR PRODUCT CATALOG <br> & receive leads for the products
                                you sell</p>
                            <a href="https://www.directindustry.com/exhibit_on_directindustry/subscription"
                                class="btn-mcl-inverted btn rounded-0">Get Started !</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@push('scripts')
@endpush
