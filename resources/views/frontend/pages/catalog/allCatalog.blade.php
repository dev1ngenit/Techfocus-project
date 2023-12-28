@extends('frontend.master')
@section('metadata')
@endsection
@section('content')
    <!--Banner -->
    <div class="swiper bannerSwiper">
        <div class="swiper-wrapper">
            <div class="swiper-slide">
                <img src="https://i.ibb.co/TvqFnbV/54658v1.jpg" class="img-fluid" alt="" />
            </div>
            <div class="swiper-slide">
                <img src="https://i.ibb.co/ZhLgfWB/54490v1-1.jpg" class="img-fluid" alt="" />
            </div>
            <div class="swiper-slide">
                <img src="https://i.ibb.co/ZhLgfWB/54490v1-1.jpg" class="img-fluid" alt="" />
            </div>
        </div>
        <div class="swiper-pagination"></div>
    </div>

    <!-- content start -->
    <div class="container my-4">
        <div class="row align-items-center">
            <div class="container px-4">
                <div class="row gx-5">
                    <div class="col-lg-3">
                        <div class="pt-4 pb-2 text-center">CATALOGS BY CATEGORIES</div>
                        <div>
                            <ul class="nav nav-tabs flex-column" id="myTab" role="tablist">
                                <li class="nav-item p-0 mt-1 shadow-lg univers-group-item" role="presentation">
                                    <span class="nav-link ps-3 active" id="home-tab" data-bs-toggle="tab"
                                        data-bs-target="#home" type="button" role="tab" aria-controls="home"
                                        aria-selected="true">
                                        All
                                    </span>
                                </li>
                                @if (count($categories) > 0)
                                    @foreach ($categories as $key => $category)
                                        <li class="nav-item p-0 mt-1 shadow-lg univers-group-item" role="presentation">
                                            <span class="nav-link ps-3" id="category-item-{{ $key }}-tab" data-bs-toggle="tab"
                                                data-bs-target="#category-item-{{ $key }}" type="button" role="tab"
                                                aria-controls="category-item-{{ $key }}" aria-selected="false">
                                                {{ $category->name }}
                                            </span>
                                        </li>
                                    @endforeach
                                @endif
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-9">
                        
                        <div>
                            <div class="tab-content" id="myTabContent">
                                <div class="tab-pane fade show active" id="home" role="tabpanel"
                                    aria-labelledby="home-tab">
                                    <!-- Content -->
                                    <div class="devider-wrap">
                                        <h4 class="devider-content mb-4">
                                            <span class="devider-text">All Catalogs</span>
                                        </h4>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-3">
                                            <a href="{{ route('pdf.details','machine-safeguard') }}">
                                                <div class="card projects-card rounded-0">
                                                    <img src="https://img.directindustry.com/pdf/repository_di/12525/2022-power-generation-products-1050613_1b.jpg"
                                                        class="card-img-top img-fluid rounded-0" alt="..." />
                                                    <div class="card-body">
                                                        <p class="card-text project-para text-center">
                                                            Machine safeguard
                                                        </p>
                                                        <div class="catalog-logo-area">
                                                            <img title="Key Technology (China) Limited"
                                                                class="catalog-logo lazyLoaded"
                                                                src="https://img.directindustry.com/images_di/logo-pp/L68381.gif" />
                                                        </div>
                                                        <div class="catalog-logo-area mt-3">
                                                            <p class="p-0 m-0" style="font-size: 10px">
                                                                2 Pages
                                                            </p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                @if (count($categories) > 0) 
                                    @foreach ($categories as $key => $category)
                                        <div class="tab-pane fade" id="category-item-{{ $key }}" role="tabpanel"
                                            aria-labelledby="category-item-{{ $key }}-tab">
                                               <!-- Content -->
                                               <div class="devider-wrap">
                                                <h4 class="devider-content mb-4">
                                                    <span class="devider-text">{{ $category->name }} Catalogs</span>
                                                </h4>
                                            </div>
                                            <div class="row">
                                                <div class="col-lg-3">
                                                    <a href="">
                                                        <div class="card projects-card rounded-0">
                                                            <img src="https://img.directindustry.com/pdf/repository_di/12525/2022-power-generation-products-1050613_1b.jpg"
                                                                class="card-img-top img-fluid rounded-0" alt="..." />
                                                            <div class="card-body">
                                                                <p class="card-text project-para text-center">
                                                                    Machine safeguard
                                                                </p>
                                                                <div class="catalog-logo-area">
                                                                    <img title="Key Technology (China) Limited"
                                                                        class="catalog-logo lazyLoaded"
                                                                        src="https://img.directindustry.com/images_di/logo-pp/L68381.gif" />
                                                                </div>
                                                                <div class="catalog-logo-area mt-3">
                                                                    <p class="p-0 m-0" style="font-size: 10px">
                                                                        2 Pages
                                                                    </p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    @endforeach
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container my-5 pt-5">
        <div class="row">
            <div class="col-lg-12">
                <p class="text-center">CHOOSE BY COMPANY NAME</p>
                <div class="d-flex justify-content-center">
                    <div class="pagination">
                        <a href="javascript:void(0).html">0-9</a>
                        <span>-</span>
                        <a href="javascript:void(0)">A</a>
                        <span>-</span>
                        <a href="javascript:void(0)">B</a>
                        <span>-</span>
                        <a href="javascript:void(0)">C</a>
                        <span>-</span>
                        <a href="javascript:void(0)">D</a>
                        <span>-</span>
                        <a href="javascript:void(0)">E</a>
                        <span>-</span>
                        <a href="javascript:void(0)">F</a>
                        <span>-</span>
                        <a href="javascript:void(0)">G</a>
                        <span>-</span>
                        <a href="javascript:void(0)">H</a>
                        <span>-</span>
                        <a href="javascript:void(0)">I</a>
                        <span>-</span>
                        <a href="javascript:void(0)">J</a>
                        <span>-</span>
                        <a href="javascript:void(0)">K</a>
                        <span>-</span>
                        <a href="javascript:void(0)">L</a>
                        <span>-</span>
                        <a href="javascript:void(0)">M</a>
                        <span>-</span>
                        <a href="javascript:void(0)">N</a>
                        <span>-</span>
                        <a href="javascript:void(0)">O</a>
                        <span>-</span>
                        <a href="javascript:void(0)">P</a>
                        <span>-</span>
                        <a href="javascript:void(0)">Q</a>
                        <span>-</span>
                        <a href="javascript:void(0)">R</a>
                        <span>-</span>
                        <a href="javascript:void(0)">S</a>
                        <span>-</span>
                        <a href="javascript:void(0)">T</a>
                        <span>-</span>
                        <a href="javascript:void(0)">U</a>
                        <span>-</span>
                        <a href="javascript:void(0)">V</a>
                        <span>-</span>
                        <a href="javascript:void(0)">W</a>
                        <span>-</span>
                        <a href="javascript:void(0)">X</a>
                        <span>-</span>
                        <a href="javascript:void(0)">Y</a>
                        <span>-</span>
                        <a href="javascript:void(0)">Z</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12 col-sm-12">
                <p class="sub-color text-center w-75 mx-auto"> *Prices are pre-tax. They exclude delivery charges and customs duties
                    and
                    do not include additional charges for installation or activation options. Prices are indicative only and
                    may
                    vary by country, with changes to the cost of raw materials and exchange rates. </p>
            </div>
        </div>
    </div>
@endsection
