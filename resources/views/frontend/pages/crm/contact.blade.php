@extends('frontend.master')
@section('metadata')
@endsection
@section('content')
<style>
    .container,
    .container-lg,
    .container-md,
    .container-sm,
    .container-xl,
    .container-xxl {
        max-width: 1450px;
    }
</style>
<section class="ban_sec">
    <div class="container-fluid p-0">
        <div class="ban_img">
            <img src="https://myefilings.com/wp-content/uploads/2020/06/contact-us-banner.jpg" alt="banner" border="0">
            <div class="ban_text">
                <strong>
                    About Us
                </strong>
                <ul class="d-flex align-items-center ps-0 mt-5">
                    <li class="text-white"><a href="#" class="">Home</a></li>
                    <li class="text-white"><span class="me-2 ms-2">/</span></li>
                    <li class="main-color"><a href="#">About Us</a></li>
                </ul>
            </div>
        </div>
    </div>
</section>
<div class="container custom-spacer">
    <div class="row">
        <div class="col-lg-12">
            <div>
                <p class="main-color mb-0 fw-bold">CONTACT INFO</p>
                <h1 class="pt-4 fw-bold" style="font-size: 42px;"><span class="main-color">Hotline :</span> +84 1900
                    8198</h1>
                <ul class="ms-0 ps-0">
                    <li class="pt-3">
                        <a href=""><i class="fa-solid fa-envelope pe-2 main-color"></i>Info.industris@gmail.com</a>
                    </li>
                    <li class="pt-3"><i class="fa-solid fa-location-dot pe-2 main-color"></i> Crows Nest Apt 69 Sydney,
                        Australia <a href="" class="main-color">(View map)</a> Info.industris@gmail.com</a>
                    </li>
                </ul>
                <hr class="">
            </div>
        </div>
    </div>
</div>
@endsection