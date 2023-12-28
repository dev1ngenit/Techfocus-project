@extends('frontend.master')
@section('metadata')
@endsection
@section('content')
    <!--Banner -->
    <div class="swiper bannerSwiper product-banner">
        <div class="swiper-wrapper">
            <div class="swiper-slide">
                <img src="https://img.directindustry.com/images_di/bnr/7315/hd/54528.jpg" class="img-fluid" alt="" />
            </div>
            <div class="swiper-slide">
                <img src="https://img.directindustry.com/images_di/bnr/35784/hd/55169.jpg" class="img-fluid" alt="" />
            </div>
            <div class="swiper-slide">
                <img src="https://img.directindustry.com/images_di/bnr/4959/hd/54488.jpg" class="img-fluid"
                    alt="" />
            </div>
        </div>
        <div class="swiper-pagination"></div>
    </div>
    <!-- content start -->
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="breadcrumbs">
                    <div>
                        <a href="index.html" class="">Home</a> &gt;
                        <span class="txt-mcl">Robotics - Automation - Industrial IT</span>
                        &gt;
                        <a href="index.html" class="txt-mcl active">Industrial Computing</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container mb-5">
        <h3 class="text-center border-bottom industry_title">
            FLOW, PRESSURE AND LEVEL MEASUREMENT
        </h3>
        <div class="p-3">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-sm-12">
                        <div class="hoverizeList">
                            <ul class="category-grouplist category-list"">
                                <li>
                                    <div class="imgSubCat">
                                        <img src="https://img.directindustry.com/images_di/cat-pc/1623.jpg"
                                            alt="Laptop computers" />
                                    </div>
                                    <a href="{{ route('filtering.products', 'laptop-computers') }}">Laptop computers</a>

                                </li>
                                <li>
                                    <div class="imgSubCat hidden">
                                        <img src="https://img.directindustry.com/images_di/cat-pc/1636.jpg"
                                            alt="Tablets" />
                                    </div>
                                    <a
                                        href="https://www.directindustry.com/industrial-manufacturer/tablet-77284.html">Tablets</a>
                                </li>
                                <li>
                                    <div class="imgSubCat hidden">
                                        <img src="https://img.directindustry.com/images_di/cat-pc/2940.jpg"
                                            alt="Industrial smartphones" />
                                    </div>
                                    <a
                                        href="https://www.directindustry.com/industrial-manufacturer/industrial-smartphone-133485.html">Industrial
                                        smartphones</a>
                                </li>
                                <li>
                                    <div class="imgSubCat hidden">
                                        <img src="https://img.directindustry.com/images_di/cat-pc/1637.jpg"
                                            alt="Vehicle-mount computers" />
                                    </div>
                                    <a
                                        href="https://www.directindustry.com/industrial-manufacturer/vehicle-mount-computer-78862.html">Vehicle-mount
                                        computers</a>
                                </li>
                                <li>
                                    <div class="imgSubCat hidden">
                                        <img src="https://img.directindustry.com/images_di/cat-pc/195.jpg"
                                            alt="Handheld computers" />
                                    </div>
                                    <a
                                        href="https://www.directindustry.com/industrial-manufacturer/handheld-computer-76222.html">Handheld
                                        computers</a>
                                </li>
                            </ul>
                            <ul class="category-grouplist category-list"">
                                <li>
                                    <div class="imgSubCat">
                                        <img src="https://img.directindustry.com/images_di/cat-pc/1623.jpg"
                                            alt="Laptop computers" />
                                    </div>
                                    <a
                                        href="{{ route('filtering.products',[$slug = 'laptop-computers']) }}">Laptop
                                        computers</a>
                                </li>
                                <li>
                                    <div class="imgSubCat hidden">
                                        <img src="https://img.directindustry.com/images_di/cat-pc/1636.jpg"
                                            alt="Tablets" />
                                    </div>
                                    <a
                                        href="https://www.directindustry.com/industrial-manufacturer/tablet-77284.html">Tablets</a>
                                </li>
                                <li>
                                    <div class="imgSubCat hidden">
                                        <img src="https://img.directindustry.com/images_di/cat-pc/2940.jpg"
                                            alt="Industrial smartphones" />
                                    </div>
                                    <a
                                        href="https://www.directindustry.com/industrial-manufacturer/industrial-smartphone-133485.html">Industrial
                                        smartphones</a>
                                </li>
                                <li>
                                    <div class="imgSubCat hidden">
                                        <img src="https://img.directindustry.com/images_di/cat-pc/1637.jpg"
                                            alt="Vehicle-mount computers" />
                                    </div>
                                    <a
                                        href="https://www.directindustry.com/industrial-manufacturer/vehicle-mount-computer-78862.html">Vehicle-mount
                                        computers</a>
                                </li>
                                <li>
                                    <div class="imgSubCat hidden">
                                        <img src="https://img.directindustry.com/images_di/cat-pc/195.jpg"
                                            alt="Handheld computers" />
                                    </div>
                                    <a
                                        href="https://www.directindustry.com/industrial-manufacturer/handheld-computer-76222.html">Handheld
                                        computers</a>
                                </li>
                            </ul>
                            <ul class="category-grouplist category-list"">
                                <li>
                                    <div class="imgSubCat">
                                        <img src="https://img.directindustry.com/images_di/cat-pc/1623.jpg"
                                            alt="Laptop computers" />
                                    </div>
                                    <a
                                        href="https://www.directindustry.com/industrial-manufacturer/laptop-computer-76225.html">Laptop
                                        computers</a>
                                </li>
                                <li>
                                    <div class="imgSubCat hidden">
                                        <img src="https://img.directindustry.com/images_di/cat-pc/1636.jpg"
                                            alt="Tablets" />
                                    </div>
                                    <a
                                        href="https://www.directindustry.com/industrial-manufacturer/tablet-77284.html">Tablets</a>
                                </li>
                                <li>
                                    <div class="imgSubCat hidden">
                                        <img src="https://img.directindustry.com/images_di/cat-pc/2940.jpg"
                                            alt="Industrial smartphones" />
                                    </div>
                                    <a
                                        href="https://www.directindustry.com/industrial-manufacturer/industrial-smartphone-133485.html">Industrial
                                        smartphones</a>
                                </li>
                                <li>
                                    <div class="imgSubCat hidden">
                                        <img src="https://img.directindustry.com/images_di/cat-pc/1637.jpg"
                                            alt="Vehicle-mount computers" />
                                    </div>
                                    <a
                                        href="https://www.directindustry.com/industrial-manufacturer/vehicle-mount-computer-78862.html">Vehicle-mount
                                        computers</a>
                                </li>
                                <li>
                                    <div class="imgSubCat hidden">
                                        <img src="https://img.directindustry.com/images_di/cat-pc/195.jpg"
                                            alt="Handheld computers" />
                                    </div>
                                    <a
                                        href="https://www.directindustry.com/industrial-manufacturer/handheld-computer-76222.html">Handheld
                                        computers</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-12">
                        <div>
                            <p class="w-25 side_border"></p>
                            <div>
                                <img class="img-fluid w-100" src="https://img.directindustry.com/images_di/cat-mc/AO.jpg"
                                    alt="">
                            </div>
                            <div class="bg-black px-5 py-5 text-white">
                                <h3 class="main-color">Subscribe to our newsletter</h3>
                                <p>Receive updates on this section every two weeks.</p>
                                <div class="input-group ">
                                    <input type="text" class="form-control rounded-0"
                                        placeholder="Recipient's username" aria-label="Recipient's username"
                                        aria-describedby="basic-addon2">
                                    <div class="input-group-append">
                                        <button class="input-group-text rounded-0 p-3" id="basic-addon2"><i
                                                class="fa-solid fa-magnifying-glass"></i></button>
                                    </div>
                                </div>
                            </div>
                            <p>
                                <i class="font-two">Please refer to our <a href="#" class="main-color">Privacy
                                        Policy</a> for details on how DirectIndustry processes your personal data.</i>
                            </p>
                            <div class="mt-5" style="border-right: 1px solid #f48d35;border-top: 1px solid #f48d35;">
                                <h6 class="p-1 text-white main-bg" style="width: 58%; margin-top: -15px;">Consult our
                                    buying guides</h6>
                                <a href="">
                                    <div>
                                        <p>Shot blasting machine</p>
                                        <p>A shot blasting machine is used for the surface treatment of metallurgical
                                            products. It deburrs, smooths the surface ...</p>
                                    </div>
                                    <div class="d-flex justify-content-end"
                                        style="margin-right: -7px;
                margin-top: -10px;">
                                        <i class="fa-solid fa-plus main-bg text-white"></i>
                                    </div>
                                </a>
                            </div>
                            <div class="mt-5" style="border-right: 1px solid #f48d35;border-top: 1px solid #f48d35;">
                                <h6 class=" p-1 main-bg text-white" style="width: 58%; margin-top: -15px;">Consult our
                                    buying guides</h6>
                                <a href="">
                                    <div>
                                        <p>Shot blasting machine</p>
                                        <p>A shot blasting machine is used for the surface treatment of metallurgical
                                            products. It deburrs, smooths the surface ...</p>
                                    </div>
                                    <div class="d-flex justify-content-end"
                                        style="margin-right: -7px;
                margin-top: -10px;">
                                        <i class="fa-solid fa-plus main-bg text-white"></i>
                                    </div>
                                </a>
                            </div>
                            <div class="mt-3">
                                <img class="img-fluid w-100" src="https://img.directindustry.com/images_di/cat-mc/AO.jpg"
                                    alt="">
                            </div>
                            <div class="row gx-1 mt-5">
                                <p>New products</p>
                                <hr class="pb-0 mb-0">
                                <div class="col-lg-3 mb-2">
                                    <img class="img-fluid w-100"
                                        src="https://img.directindustry.com/images_di/photo-pc/16045-18098566.jpg"
                                        alt="airless sprayerKING 45:1GRACO">
                                </div>
                                <div class="col-lg-3 mb-2">
                                    <img class="img-fluid w-100"
                                        src="https://img.directindustry.com/images_di/photo-pc/16045-18098566.jpg"
                                        alt="airless sprayerKING 45:1GRACO">
                                </div>
                                <div class="col-lg-3 mb-2">
                                    <img class="img-fluid w-100"
                                        src="https://img.directindustry.com/images_di/photo-pc/16045-18098566.jpg"
                                        alt="airless sprayerKING 45:1GRACO">
                                </div>
                                <div class="col-lg-3 mb-2">
                                    <img class="img-fluid w-100"
                                        src="https://img.directindustry.com/images_di/photo-pc/16045-18098566.jpg"
                                        alt="airless sprayerKING 45:1GRACO">
                                </div>
                                <div class="col-lg-3 mb-2">
                                    <img class="img-fluid w-100"
                                        src="https://img.directindustry.com/images_di/photo-pc/16045-18098566.jpg"
                                        alt="airless sprayerKING 45:1GRACO">
                                </div>
                                <div class="col-lg-3 mb-2">
                                    <img class="img-fluid w-100"
                                        src="https://img.directindustry.com/images_di/photo-pc/16045-18098566.jpg"
                                        alt="airless sprayerKING 45:1GRACO">
                                </div>
                                <div class="col-lg-3 mb-2">
                                    <img class="img-fluid w-100"
                                        src="https://img.directindustry.com/images_di/photo-pc/16045-18098566.jpg"
                                        alt="airless sprayerKING 45:1GRACO">
                                </div>
                                <div class="col-lg-3 mb-2">
                                    <img class="img-fluid w-100"
                                        src="https://img.directindustry.com/images_di/photo-pc/16045-18098566.jpg"
                                        alt="airless sprayerKING 45:1GRACO">
                                </div>
                                <div class="col-lg-3 mb-2">
                                    <img class="img-fluid w-100"
                                        src="https://img.directindustry.com/images_di/photo-pc/16045-18098566.jpg"
                                        alt="airless sprayerKING 45:1GRACO">
                                </div>
                                <div class="col-lg-3 mb-2">
                                    <img class="img-fluid w-100"
                                        src="https://img.directindustry.com/images_di/photo-pc/16045-18098566.jpg"
                                        alt="airless sprayerKING 45:1GRACO">
                                </div>
                                <div class="col-lg-3 mb-2">
                                    <img class="img-fluid w-100"
                                        src="https://img.directindustry.com/images_di/photo-pc/16045-18098566.jpg"
                                        alt="airless sprayerKING 45:1GRACO">
                                </div>
                                <div class="col-lg-3 mb-2">
                                    <img class="img-fluid w-100"
                                        src="https://img.directindustry.com/images_di/photo-pc/16045-18098566.jpg"
                                        alt="airless sprayerKING 45:1GRACO">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row p-3">
                <div class="col-lg-12 col-sm-12">
                    <p class="sub-color text-center w-75 mx-auto">
                        *Prices are pre-tax. They exclude delivery charges and customs
                        duties and do not include additional charges for installation or
                        activation options. Prices are indicative only and may vary by
                        country, with changes to the cost of raw materials and exchange
                        rates.
                    </p>
                </div>
            </div>
        </div>
    </div>
@endsection
