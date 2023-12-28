
@extends('frontend.master')
@section('metadata')
@endsection
@section('content')
<div class="container">
    <div class="row mt-5">
        <div class="col-lg-6 offset-lg-3 mb-5">
            <div class="card border-0 rounded-0 p-lg-5 p-3">
                <h3 class="text-center fw-bold mb-0">TechFocus Email Verification</h3>
                <hr class="w-25 mx-auto mt-1" style="color: var(--main-color);">
                <p class="text-center">Thanks for signing up! Before getting started, could you verify your email address by clicking on the link we just emailed to you? <br> 
                    If you didn't receive the email, we will gladly send you another.</p>
                <div class="mt-4 mx-lg-5 mx-3">
                    <div class="d-flex mb-5 justify-content-between align-items-center">
                        <div>
                            <form method="POST" action="{{ route('verification.send') }}">
                                @csrf
                                <button class="btn common-btn-3 rounded-0" type="submit">Resend Verification Email</button>
                            </form>
                        </div>
                        <div>
                            <form method="POST" action="{{ route('logout') }}">
                                @csrf
                                <button class="text-decoration-underline text-primary text-hover-primary" type="submit">Log Out</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@push('scripts')
    
@endpush