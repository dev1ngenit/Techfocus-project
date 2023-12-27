@extends('frontend.master')
@section('metadata')
@endsection
@section('content')
    @include('frontend.pages.brandPage.partials.page_header')

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
    <div class="container-fluid my-4">
        <div class="row align-items-center">
            <div class="container px-4">
                <div class="row gx-5">
                    <div class="col-lg-3">
                        <div class="pt-4 pb-2 text-center">CATALOGS BY THEME</div>
                        <div>
                            <ul class="nav nav-tabs flex-column" id="myTab" role="tablist">
                                <li class="nav-item p-0 mt-1 shadow-lg univers-group-item" role="presentation">
                                    <span class="nav-link ps-3 active" id="home-tab" data-bs-toggle="tab"
                                        data-bs-target="#home" type="button" role="tab" aria-controls="home"
                                        aria-selected="true">
                                        All
                                    </span>
                                </li>
                                <li class="nav-item p-0 mt-1 shadow-lg univers-group-item" role="presentation">
                                    <span class="nav-link ps-3" id="profile-tab" data-bs-toggle="tab"
                                        data-bs-target="#profile" type="button" role="tab" aria-controls="profile"
                                        aria-selected="false">
                                        Detection - Measurement
                                    </span>
                                </li>
                                <li class="nav-item p-0 mt-1 shadow-lg univers-group-item" role="presentation">
                                    <span class="nav-link ps-3" id="contact-tab" data-bs-toggle="tab"
                                        data-bs-target="#contact" type="button" role="tab" aria-controls="contact"
                                        aria-selected="false">
                                        Metrology - Laboratory
                                    </span>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-9">
                        <div class="devider-wrap">
                            <h4 class="devider-content mb-4">
                                <span class="devider-text">NEW CATALOGS</span>
                            </h4>
                        </div>
                        <div>
                            <div class="tab-content" id="myTabContent">
                                <div class="tab-pane fade show active" id="home" role="tabpanel"
                                    aria-labelledby="home-tab">
                                    <!-- Content -->
                                    <div class="row">
                                        <div class="col-lg-3">
                                            <a href="">
                                                <div class="card projects-card rounded-0">
                                                    <img src="https://img.directindustry.com/pdf/repository_di/58198/film-otr-wvtr-test-all-one-system-1051070_1b.jpg"
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
                                        <div class="col-lg-3">
                                            <a href="">
                                                <div class="card projects-card rounded-0">
                                                    <img src="https://img.directindustry.com/pdf/repository_di/160944/medical-equipment-pump-solution-1051059_1b.jpg"
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
                                        <div class="col-lg-3">
                                            <a href="">
                                                <div class="card projects-card rounded-0">
                                                    <img src="https://img.directindustry.com/pdf/repository_di/57240/ws-accessories-906156_1b.jpg"
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
                                        <div class="col-lg-3">
                                            <a href="">
                                                <div class="card projects-card rounded-0">
                                                    <img src="https://img.directindustry.com/pdf/repository_di/162316/refrigerated-meat-mincers-setna-1036360_1b.jpg"
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
                                <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                                    <!-- Content -->
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
                                        <div class="col-lg-3">
                                            <a href="">
                                                <div class="card projects-card rounded-0">
                                                    <img src="https://img.directindustry.com/pdf/repository_di/124669/hpc101sc-fp6412-1047849_1b.jpg"
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
                                        <div class="col-lg-3">
                                            <a href="">
                                                <div class="card projects-card rounded-0">
                                                    <img src="https://img.directindustry.com/pdf/repository_di/4571522/advanced-level-extrusion-1050609_1b.jpg"
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
                                        <div class="col-lg-3">
                                            <a href="">
                                                <div class="card projects-card rounded-0">
                                                    <img src="https://img.directindustry.com/pdf/repository_di/68381/k-tek-m58-oms-nv-151b-dt-dwp-datasheet-1050626_1b.jpg"
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
                                <div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">
                                    <!-- Content -->
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
                                        <div class="col-lg-3">
                                            <a href="">
                                                <div class="card projects-card rounded-0">
                                                    <img src="https://img.directindustry.com/pdf/repository_di/124669/hpc101sc-fp6412-1047849_1b.jpg"
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
                                        <div class="col-lg-3">
                                            <a href="">
                                                <div class="card projects-card rounded-0">
                                                    <img src="https://img.directindustry.com/pdf/repository_di/4571522/advanced-level-extrusion-1050609_1b.jpg"
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
                                        <div class="col-lg-3">
                                            <a href="">
                                                <div class="card projects-card rounded-0">
                                                    <img src="https://img.directindustry.com/pdf/repository_di/68381/k-tek-m58-oms-nv-151b-dt-dwp-datasheet-1050626_1b.jpg"
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
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid my-5 pt-5">
        <div class="row">
            <div class="col-lg-12">
                <p class="text-center">CHOOSE BY COMPANY NAME</p>
                <div class="d-flex justify-content-center">
                    <div class="pagination">
                        <a href="https://pdf.directindustry.com/pdf/soc-0-9.html">0-9</a>
                        <span>-</span>
                        <a href="https://pdf.directindustry.com/pdf/soc-A.html">A</a>
                        <span>-</span>
                        <a href="https://pdf.directindustry.com/pdf/soc-B.html">B</a>
                        <span>-</span>
                        <a href="https://pdf.directindustry.com/pdf/soc-C.html">C</a>
                        <span>-</span>
                        <a href="https://pdf.directindustry.com/pdf/soc-D.html">D</a>
                        <span>-</span>
                        <a href="https://pdf.directindustry.com/pdf/soc-E.html">E</a>
                        <span>-</span>
                        <a href="https://pdf.directindustry.com/pdf/soc-F.html">F</a>
                        <span>-</span>
                        <a href="https://pdf.directindustry.com/pdf/soc-G.html">G</a>
                        <span>-</span>
                        <a href="https://pdf.directindustry.com/pdf/soc-H.html">H</a>
                        <span>-</span>
                        <a href="https://pdf.directindustry.com/pdf/soc-I.html">I</a>
                        <span>-</span>
                        <a href="https://pdf.directindustry.com/pdf/soc-J.html">J</a>
                        <span>-</span>
                        <a href="https://pdf.directindustry.com/pdf/soc-K.html">K</a>
                        <span>-</span>
                        <a href="https://pdf.directindustry.com/pdf/soc-L.html">L</a>
                        <span>-</span>
                        <a href="https://pdf.directindustry.com/pdf/soc-M.html">M</a>
                        <span>-</span>
                        <a href="https://pdf.directindustry.com/pdf/soc-N.html">N</a>
                        <span>-</span>
                        <a href="https://pdf.directindustry.com/pdf/soc-O.html">O</a>
                        <span>-</span>
                        <a href="https://pdf.directindustry.com/pdf/soc-P.html">P</a>
                        <span>-</span>
                        <a href="https://pdf.directindustry.com/pdf/soc-Q.html">Q</a>
                        <span>-</span>
                        <a href="https://pdf.directindustry.com/pdf/soc-R.html">R</a>
                        <span>-</span>
                        <a href="https://pdf.directindustry.com/pdf/soc-S.html">S</a>
                        <span>-</span>
                        <a href="https://pdf.directindustry.com/pdf/soc-T.html">T</a>
                        <span>-</span>
                        <a href="https://pdf.directindustry.com/pdf/soc-U.html">U</a>
                        <span>-</span>
                        <a href="https://pdf.directindustry.com/pdf/soc-V.html">V</a>
                        <span>-</span>
                        <a href="https://pdf.directindustry.com/pdf/soc-W.html">W</a>
                        <span>-</span>
                        <a href="https://pdf.directindustry.com/pdf/soc-X.html">X</a>
                        <span>-</span>
                        <a href="https://pdf.directindustry.com/pdf/soc-Y.html">Y</a>
                        <span>-</span>
                        <a href="https://pdf.directindustry.com/pdf/soc-Z.html">Z</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12 col-sm-12">
                <p class="main-color text-center"> *Prices are pre-tax. They exclude delivery charges and customs duties
                    and do not include additional charges for installation or activation options. Prices are indicative only
                    and may vary by country, with changes to the cost of raw materials and exchange rates. </p>
            </div>
        </div>
    </div>
@endsection
