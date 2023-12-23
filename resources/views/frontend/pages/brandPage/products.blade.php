@extends('frontend.master')
@section('metadata')
@endsection
@section('content')
    @include('frontend.pages.brandPage.partials.page_header')
    <!-- content start -->
    <div class="container">

        <div class="row mb-3 mt-5">
            <div class="col-lg-12">
                <p class="">ALL STÄUBLI ROBOTICS PRODUCTS</p>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <div class="devider-wrap">
                    <h4 class="devider-content">
                        <span class="devider-text">6-AXIS ROBOTIC ARMS</span>
                    </h4>
                </div>
            </div>
        </div>
        <div class="row mb-5">
            <div class="col-lg-3">
                <a href="{{ route('product.details','articulated-robot') }}">
                    <div class="card projects-card rounded-0">
                        <div>
                            <p class="video-tag">Video</p>
                        </div>
                        <img src="https://img.directindustry.com/images_di/photo-m2/17645-12350564.jpg"
                            class="card-img-top img-fluid rounded-0" alt="..." />
                        <div class="card-body mb-5">
                            <p class="card-text project-para text-center">
                                ARTICULATED ROBOT TX2-40
                            </p>
                            <div class="text-center">
                                <span><i class="fa-solid fa-tag me-1 main-color"></i>Collaborative</span>
                                <span><i class="fa-solid fa-tag me-1 main-color"></i>6axis</span>
                                <span><i class="fa-solid fa-tag me-1 main-color"></i>Floor Mounted</span>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-lg-3">
                <a href="">
                    <div class="card projects-card rounded-0">
                        <div>
                            <p class="video-tag">Video</p>
                        </div>
                        <img src="https://img.directindustry.com/images_di/photo-m2/17645-16409285.jpg"
                            class="card-img-top img-fluid rounded-0" alt="..." />
                        <div class="card-body mb-5">
                            <p class="card-text project-para text-center">
                                ARTICULATED ROBOT TX2-40
                            </p>
                            <div class="text-center">
                                <span><i class="fa-solid fa-tag me-1 main-color"></i>Collaborative</span>
                                <span><i class="fa-solid fa-tag me-1 main-color"></i>6axis</span>
                                <span><i class="fa-solid fa-tag me-1 main-color"></i>Floor Mounted</span>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <div class="devider-wrap">
                    <h4 class="devider-content">
                        <span class="devider-text">HUMID ENVIRONMENT ROBOTS</span>
                    </h4>
                </div>
            </div>
        </div>
        <div class="row mb-5">
            <div class="col-lg-3">
                <a href="">
                    <div class="card projects-card rounded-0">
                        <div>
                            <p class="video-tag">Video</p>
                        </div>
                        <img src="https://img.directindustry.com/images_di/photo-m2/17645-16395652.jpg"
                            class="card-img-top img-fluid rounded-0" alt="..." />
                        <div class="card-body mb-5">
                            <p class="card-text project-para text-center">
                                ARTICULATED ROBOT TX2-40
                            </p>
                            <div class="text-center">
                                <span><i class="fa-solid fa-tag me-1 main-color"></i>Collaborative</span>
                                <span><i class="fa-solid fa-tag me-1 main-color"></i>6axis</span>
                                <span><i class="fa-solid fa-tag me-1 main-color"></i>Floor Mounted</span>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-lg-3">
                <a href="">
                    <div class="card projects-card rounded-0">
                        <div>
                            <p class="video-tag">Video</p>
                        </div>
                        <img src="https://img.directindustry.com/images_di/photo-m2/17645-16395749.jpg"
                            class="card-img-top img-fluid rounded-0" alt="..." />
                        <div class="card-body mb-5">
                            <p class="card-text project-para text-center">
                                ARTICULATED ROBOT TX2-40
                            </p>
                            <div class="text-center">
                                <span><i class="fa-solid fa-tag me-1 main-color"></i>Collaborative</span>
                                <span><i class="fa-solid fa-tag me-1 main-color"></i>6axis</span>
                                <span><i class="fa-solid fa-tag me-1 main-color"></i>Floor Mounted</span>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <div class="devider-wrap">
                    <h4 class="devider-content">
                        <span class="devider-text">4-AXIS SCARA ROBOTIC ARMS</span>
                    </h4>
                </div>
            </div>
        </div>
        <div class="row mb-5">
            <div class="col-lg-3">
                <a href="">
                    <div class="card projects-card rounded-0">
                        <div>
                            <p class="video-tag">Video</p>
                        </div>
                        <img src="https://img.directindustry.com/images_di/photo-m2/17645-17445979.jpg"
                            class="card-img-top img-fluid rounded-0" alt="..." />
                        <div class="card-body mb-5">
                            <p class="card-text project-para text-center">
                                ARTICULATED ROBOT TX2-40
                            </p>
                            <div class="text-center">
                                <span><i class="fa-solid fa-tag me-1 main-color"></i>Collaborative</span>
                                <span><i class="fa-solid fa-tag me-1 main-color"></i>6axis</span>
                                <span><i class="fa-solid fa-tag me-1 main-color"></i>Floor Mounted</span>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-lg-3">
                <a href="">
                    <div class="card projects-card rounded-0">
                        <div>
                            <p class="video-tag">Video</p>
                        </div>
                        <img src="https://img.directindustry.com/images_di/photo-m2/17645-17445989.jpg"
                            class="card-img-top img-fluid rounded-0" alt="..." />
                        <div class="card-body mb-5">
                            <p class="card-text project-para text-center">
                                ARTICULATED ROBOT TX2-40
                            </p>
                            <div class="text-center">
                                <span><i class="fa-solid fa-tag me-1 main-color"></i>Collaborative</span>
                                <span><i class="fa-solid fa-tag me-1 main-color"></i>6axis</span>
                                <span><i class="fa-solid fa-tag me-1 main-color"></i>Floor Mounted</span>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <div class="devider-wrap">
                    <h4 class="devider-content">
                        <span class="devider-text">CLEANROOM ROBOTS</span>
                    </h4>
                </div>
            </div>
        </div>
        <div class="row mb-5">
            <div class="col-lg-3">
                <a href="">
                    <div class="card projects-card rounded-0">
                        <div>
                            <p class="video-tag">Video</p>
                        </div>
                        <img src="https://img.directindustry.com/images_di/photo-m2/17645-14535789.jpg"
                            class="card-img-top img-fluid rounded-0" alt="..." />
                        <div class="card-body mb-5">
                            <p class="card-text project-para text-center">
                                ARTICULATED ROBOT TX2-40
                            </p>
                            <div class="text-center">
                                <span><i class="fa-solid fa-tag me-1 main-color"></i>Collaborative</span>
                                <span><i class="fa-solid fa-tag me-1 main-color"></i>6axis</span>
                                <span><i class="fa-solid fa-tag me-1 main-color"></i>Floor Mounted</span>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-lg-3">
                <a href="">
                    <div class="card projects-card rounded-0">
                        <div>
                            <p class="video-tag">Video</p>
                        </div>
                        <img src="https://img.directindustry.com/images_di/photo-m2/17645-14535825.jpg"
                            class="card-img-top img-fluid rounded-0" alt="..." />
                        <div class="card-body mb-5">
                            <p class="card-text project-para text-center">
                                ARTICULATED ROBOT TX2-40
                            </p>
                            <div class="text-center">
                                <span><i class="fa-solid fa-tag me-1 main-color"></i>Collaborative</span>
                                <span><i class="fa-solid fa-tag me-1 main-color"></i>6axis</span>
                                <span><i class="fa-solid fa-tag me-1 main-color"></i>Floor Mounted</span>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <div class="devider-wrap">
                    <h4 class="devider-content">
                        <span class="devider-text">POWER COBOTS</span>
                    </h4>
                </div>
            </div>
        </div>
        <div class="row mb-5">
            <div class="col-lg-3">
                <a href="">
                    <div class="card projects-card rounded-0">
                        <div>
                            <p class="video-tag">Video</p>
                        </div>
                        <img src="https://img.directindustry.com/images_di/photo-m2/17645-14618557.jpg"
                            class="card-img-top img-fluid rounded-0" alt="..." />
                        <div class="card-body mb-5">
                            <p class="card-text project-para text-center">
                                ARTICULATED ROBOT TX2-40
                            </p>
                            <div class="text-center">
                                <span><i class="fa-solid fa-tag me-1 main-color"></i>Collaborative</span>
                                <span><i class="fa-solid fa-tag me-1 main-color"></i>6axis</span>
                                <span><i class="fa-solid fa-tag me-1 main-color"></i>Floor Mounted</span>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-lg-3">
                <a href="">
                    <div class="card projects-card rounded-0">
                        <div>
                            <p class="video-tag">Video</p>
                        </div>
                        <img src="https://img.directindustry.com/images_di/photo-m2/17645-14618713.jpg"
                            class="card-img-top img-fluid rounded-0" alt="..." />
                        <div class="card-body mb-5">
                            <p class="card-text project-para text-center">
                                ARTICULATED ROBOT TX2-40
                            </p>
                            <div class="text-center">
                                <span><i class="fa-solid fa-tag me-1 main-color"></i>Collaborative</span>
                                <span><i class="fa-solid fa-tag me-1 main-color"></i>6axis</span>
                                <span><i class="fa-solid fa-tag me-1 main-color"></i>Floor Mounted</span>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <div class="devider-wrap">
                    <h4 class="devider-content">
                        <span class="devider-text">MOBILE ROBOT SYSTEM</span>
                    </h4>
                </div>
            </div>
        </div>
        <div class="row mb-5">
            <div class="col-lg-3">
                <a href="">
                    <div class="card projects-card rounded-0">
                        <div>
                            <p class="video-tag">Video</p>
                        </div>
                        <img src="https://img.directindustry.com/images_di/photo-m2/17645-18900602.jpg"
                            class="card-img-top img-fluid rounded-0" alt="..." />
                        <div class="card-body mb-5">
                            <p class="card-text project-para text-center">
                                ARTICULATED ROBOT TX2-40
                            </p>
                            <div class="text-center">
                                <span><i class="fa-solid fa-tag me-1 main-color"></i>Collaborative</span>
                                <span><i class="fa-solid fa-tag me-1 main-color"></i>6axis</span>
                                <span><i class="fa-solid fa-tag me-1 main-color"></i>Floor Mounted</span>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-lg-3">
                <a href="">
                    <div class="card projects-card rounded-0">
                        <div>
                            <p class="video-tag">Video</p>
                        </div>
                        <img src="https://img.directindustry.com/images_di/photo-m2/17645-14618713.jpg"
                            class="card-img-top img-fluid rounded-0" alt="..." />
                        <div class="card-body mb-5">
                            <p class="card-text project-para text-center">
                                ARTICULATED ROBOT TX2-40
                            </p>
                            <div class="text-center">
                                <span><i class="fa-solid fa-tag me-1 main-color"></i>Collaborative</span>
                                <span><i class="fa-solid fa-tag me-1 main-color"></i>6axis</span>
                                <span><i class="fa-solid fa-tag me-1 main-color"></i>Floor Mounted</span>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
        </div>
        <!-- Related Search -->
        <div class="container">
            <div class="row mt-5 mb-5">
                <div class="col bg-light">
                    <div class="card rounded-0 border-0 shadow-lg">
                        <div class="card-header rounded-0">
                            <h4 class="pt-2 text-center">Related Searches</h4>
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-lg-12">
                                    <ul class="related-items">
                                        <li class="rounded-pill bg-light">
                                            <a href="">Rail conveyor</a>
                                        </li>
                                        <li class="rounded-pill bg-light">
                                            <a href="">Belt conveyor</a>
                                        </li>
                                        <li class="rounded-pill bg-light">
                                            <a href="">Transfer conveyor</a>
                                        </li>
                                        <li class="rounded-pill bg-light">
                                            <a href="">Part conveyor</a>
                                        </li>
                                        <li class="rounded-pill bg-light">
                                            <a href="">Compact conveyor</a>
                                        </li>
                                        <li class="rounded-pill bg-light">
                                            <a href="">Assembly line conveyor</a>
                                        </li>
                                        <li class="rounded-pill bg-light">
                                            <a href="">Linear transfer system</a>
                                        </li>
                                        <li class="rounded-pill bg-light">
                                            <a href="">Modular transfer system</a>
                                        </li>
                                        <li class="rounded-pill bg-light">
                                            <a href="">Robot transfer system</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row p-3">
            <div class="col-lg-12 col-sm-12">
                <p class="main-color text-center"> *Prices are pre-tax. They exclude delivery charges and customs duties
                    and
                    do not include additional charges for installation or activation options. Prices are indicative only and
                    may
                    vary by country, with changes to the cost of raw materials and exchange rates. </p>
            </div>
        </div>
    </div>
@endsection