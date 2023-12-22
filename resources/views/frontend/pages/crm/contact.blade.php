@extends('frontend.master')
@section('metadata')
@endsection
@section('content')
    <div class="container">
        <div class="row headerBar align-items-center">
            <div class="col-2"></div>
            <div class="col-8 text-center">
                <h1 class="modalh1">Attention</h1>
            </div>
            <div class="col-2 text-end">
            </div>
        </div>
        <div class="modalContent text-center">
            <h1 class="mb-3 modalh1">The Website is in Under Construction</h1>
            <h6 class="mb-5">We are sorry for the temporary inconvenience. If you face any problem, contact our
                support team.</h6>
            <a href="{{ route('homepage') }}" class="buttonStyle">Back to Home Page</a>
        </div>
    </div>
@endsection