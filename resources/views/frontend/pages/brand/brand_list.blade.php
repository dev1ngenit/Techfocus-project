@extends('frontend.master')
@section('metadata')
@endsection
@section('content')
    <!--Banner -->
    <div class="swiper bannerSwiper">
        <div class="swiper-wrapper">
            <div class="swiper-slide">
                <img src="https://img.directindustry.com/images_di/bnr/7990/hd/54364.jpg" class="img-fluid" alt="" />
            </div>
            <div class="swiper-slide">
                <img src="https://img.directindustry.com/images_di/bnr/7068/hd/55573v1.jpg" class="img-fluid" alt="" />
            </div>
            <div class="swiper-slide">
                <img src="https://img.directindustry.com/images_di/bnr/69508/hd/54314.jpg" class="img-fluid"
                    alt="" />
            </div>
        </div>
        <div class="swiper-pagination"></div>
    </div>

    <!-- content start -->
    <div class="container my-4">
        <div class="row">
            <div class="col-lg-12">
                <div class="breadcrumbs">
                    <div class="mx-3">
                        <a href="index.html" class="">Home</a> &gt;
                        <span class="txt-mcl active"> Brands</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container mb-5">
        <section class="mb-4">
            <div class="devider-wrap">
                <h4 class="devider-content mb-4">
                    <span class="devider-text">Top Brands</span>
                </h4>
            </div>
            <div class="row brand-logos">
                @if (count($top_brands) > 0)
                    @foreach ($top_brands as $top_brand)
                        <div class="col-lg-2 mb-3">
                            <a href="{{ route('brand.overview', $top_brand->slug) }}">
                                <div class="card border-0 card-news-trends" style="height: 220px;">
                                    <div class="content">
                                        <div class="front">
                                            <div class="inset-img d-flex justify-content-center"
                                                style="overflow: hidden; margin-top: 50px; position: relative;">
                                                <img src="{{ !empty($top_brand->logo) && file_exists(public_path('storage/brand/logo/' . $top_brand->logo)) ? asset('storage/brand/logo/' . $top_brand->logo) : asset('backend/images/no-image-available.png') }}"
                                                    class="lazyLoaded" alt="{{ $top_brand->title }}"
                                                    style="height: auto; width: auto;">
                                            </div>
                                            <div class="d-flex align-items-center justify-content-between p-2"
                                                style="margin-top: 50px;">
                                                <h2 class="text-center font-four">{{ $top_brand->title }}</h2>
                                                <!-- Brand Logo -->
                                                <a href="#">
                                                    {{-- <img class="lazyLoaded logo right"
                                                        src="https://img.directindustry.com/images_di/photo-pp/18998-17335319.gif"
                                                        title="Adicomp Srl"> --}}
                                                </a>
                                            </div>
                                        </div>
                                        <div class="back from-bottom text-start">
                                            <a href="{{ route('brand.overview', $top_brand->slug) }}">
                                                <span class="font-two pt-3">
                                                    {{ $top_brand->title }}</span>

                                                <br>
                                                <p class="subtitles"></p>
                                                {{-- <ul class="ms-0 ps-0">
                                                <li>diode laser</li>
                                                <li>pulsed laser</li>
                                                <li> laser</li>
                                                <li>positioning system</li>
                                                <li>laser module</li>
                                                <li>continuous laser</li>
                                                <li>laser projector</li>
                                                <li>infrared laser</li>
                                            </ul> --}}
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>
                    @endforeach
                @endif
            </div>
            <div class="d-flex justify-content-center">
                {{ $top_brands->links() }}
            </div>
        </section>
        <section class="mb-4">
            <div class="devider-wrap">
                <h4 class="devider-content mb-4">
                    <span class="devider-text">Featured Brands</span>
                </h4>
            </div>
            <div class="row brand-logos">
                @if (count($featured_brands) > 0)
                    @foreach ($featured_brands as $featured_brand)
                        <div class="col-lg-2 mb-3">
                            <a href="{{ route('brand.overview', $featured_brand->slug) }}">
                                <div class="card border-0 card-news-trends" style="height: 220px;">
                                    <div class="content">
                                        <div class="front">
                                            <div class="inset-img d-flex justify-content-center"
                                                style="overflow: hidden; margin-top: 50px; position: relative;">
                                                <img src="{{ !empty($featured_brand->logo) && file_exists(public_path('storage/brand/logo/' . $featured_brand->logo)) ? asset('storage/brand/logo/' . $featured_brand->logo) : asset('backend/images/no-image-available.png') }}"
                                                    class="lazyLoaded" alt="{{ $featured_brand->title }}"
                                                    style="height: auto; width: auto;">
                                            </div>
                                            <div class="d-flex align-items-center justify-content-between p-2"
                                                style="margin-top: 50px;">
                                                <h2 class="text-center font-four">{{ $featured_brand->title }}</h2>
                                                <!-- Brand Logo -->
                                                <a href="#">
                                                    {{-- <img class="lazyLoaded logo right"
                                                        src="https://img.directindustry.com/images_di/photo-pp/18998-17335319.gif"
                                                        title="Adicomp Srl"> --}}
                                                </a>
                                            </div>
                                        </div>
                                        <div class="back from-bottom text-start">
                                            <a href="{{ route('brand.overview', $featured_brand->slug) }}">
                                                <span class="font-two pt-3">
                                                    {{ $featured_brand->title }}</span>

                                                <br>
                                                <p class="subtitles"></p>
                                                {{-- <ul class="ms-0 ps-0">
                                                <li>diode laser</li>
                                                <li>pulsed laser</li>
                                                <li> laser</li>
                                                <li>positioning system</li>
                                                <li>laser module</li>
                                                <li>continuous laser</li>
                                                <li>laser projector</li>
                                                <li>infrared laser</li>
                                            </ul> --}}
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>
                    @endforeach
                @endif
                <div class="d-flex justify-content-center">
                    {{ $featured_brands->links() }}
                </div>
            </div>
        </section>
    </div>
@endsection
