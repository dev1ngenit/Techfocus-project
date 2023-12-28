@extends('frontend.master')
@section('metadata')
@endsection
@section('content')
    @include('frontend.pages.brandPage.partials.page_header')

        <div class="container my-4">
            <div class="row align-items-center">
                <div class="container px-4">
                    <div class="row gx-5">
                        <div class="col-lg-12">
                            <div class="devider-wrap">
                                <h4 class="devider-content mb-4">
                                    <span class="devider-text">{{ $brand->title }} CATALOGS</span>
                                </h4>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-2">
                            <a href="">
                                <div class="card projects-card rounded-0">
                                    <img src="https://img.directindustry.com/pdf/repository_di/19826/product-line-transformers-power-supplies-reactors-emi-filters-642779_1mg.jpg"
                                        class="card-img-top img-fluid rounded-0" alt="..." />
                                    <div class="card-body">
                                        <p class="card-text project-para text-center">
                                            Product line Transformers
                                        </p>
                                        <div class="catalog-logo-area mt-3">
                                            <p class="p-0 m-0" style="font-size: 10px">
                                                2 Pages
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="col-lg-2">
                            <a href="">
                                <div class="card projects-card rounded-0">
                                    <img src="https://img.directindustry.com/pdf/repository_di/19826/easyb-modular-24v-circuit-breaker-system-693628_1mg.jpg"
                                        class="card-img-top img-fluid rounded-0" alt="..." />
                                    <div class="card-body">
                                        <p class="card-text project-para text-center">
                                            EasyB - 1-Channel circuit breaker
                                        </p>
                                        <div class="catalog-logo-area mt-3">
                                            <p class="p-0 m-0" style="font-size: 10px">
                                                2 Pages
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="col-lg-2">
                            <a href="">
                                <div class="card projects-card rounded-0">
                                    <img src="https://img.directindustry.com/pdf/repository_di/19826/tt3-neo-693630_1mg.jpg"
                                        class="card-img-top img-fluid rounded-0" alt="..." />
                                    <div class="card-body">
                                        <p class="card-text project-para text-center">
                                            Two-phase, primary switched mode power
                                        </p>
                                        <div class="catalog-logo-area mt-3">
                                            <p class="p-0 m-0" style="font-size: 10px">
                                                2 Pages
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="col-lg-2">
                            <a href="">
                                <div class="card projects-card rounded-0">
                                    <img src="https://img.directindustry.com/pdf/repository_di/19826/two-phase-primary-switched-mode-power-supply-pm-2ac-741601_1mg.jpg"
                                        class="card-img-top img-fluid rounded-0" alt="..." />
                                    <div class="card-body">
                                        <p class="card-text project-para text-center">
                                            Two-phase, primary switched mode power
                                        </p>
                                        <div class="catalog-logo-area mt-3">
                                            <p class="p-0 m-0" style="font-size: 10px">
                                                2 Pages
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="col-lg-2">
                            <a href="">
                                <div class="card projects-card rounded-0">
                                    <img src="https://img.directindustry.com/pdf/repository_di/19826/lr3-400-746423_1mg.jpg"
                                        class="card-img-top img-fluid rounded-0" alt="..." />
                                    <div class="card-body">
                                        <p class="card-text project-para text-center">
                                            LR3 400
                                        </p>
                                        <div class="catalog-logo-area mt-3">
                                            <p class="p-0 m-0" style="font-size: 10px">
                                                2 Pages
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="col-lg-2">
                            <a href="">
                                <div class="card projects-card rounded-0">
                                    <img src="https://img.directindustry.com/pdf/repository_di/19826/push-in-terminal-transformers-1059466_1mg.jpg"
                                        class="card-img-top img-fluid rounded-0" alt="..." />
                                    <div class="card-body">
                                        <p class="card-text project-para text-center">
                                            PUSH-IN TERMINAL TRANSFORMERS
                                        </p>
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
        <div class="container my-5 pt-5">
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
                    <p class="sub-color text-center w-75 mx-auto"> *Prices are pre-tax. They exclude delivery charges and customs
                        duties and do not include additional charges for installation or activation options. Prices are
                        indicative only and may vary by country, with changes to the cost of raw materials and exchange
                        rates. </p>
                </div>
            </div>
        </div>
@endsection
