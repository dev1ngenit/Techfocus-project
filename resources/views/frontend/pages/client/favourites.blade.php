@extends('frontend.master')
@section('metadata')
@endsection
@section('content')
    <!--Banner -->
    @include('frontend.pages.client.partials.page_header')
    <div class="container">
        <div class="row my-5">
            <div class="col-lg-6 offset-lg-3">
                <div class="card border-0 rounded-0 shadow-sm">
                    <div class="card-body">
                        
                        <h5 class="card-title text-center py-2 bg-light main-color"> No Products have selected yet as favourites.</h5>
                        
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row p-3">
            <div class="col-lg-12 col-sm-12">
                <p class="main-color text-center">
                    *Prices are pre-tax. They exclude delivery charges and customs
                    duties and do not include additional charges for installation or
                    activation options. Prices are indicative only and may vary by
                    country, with changes to the cost of raw materials and exchange
                    rates.
                </p>
            </div>
        </div>
    </div>
@endsection
