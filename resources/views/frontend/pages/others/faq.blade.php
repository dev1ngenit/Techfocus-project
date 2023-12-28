@extends('frontend.master')
@section('metadata')
@endsection
@section('content')
    <!-- content start -->
    <div class="container-fluid">
        <div class="row breadcrumb-banner-area p-5"
            style="
          background-image: url(https://virtual-expo.my.site.com/Visitors/s/sfsites/c/file-asset/Background1?v=1);
        ">
            <div class="col-lg-12">
                <h1 class="text-center font-poppins my-5 text-uppercase fw-bold">
                    Welcome to the VirtualExpo <br />knowledge base
                </h1>
                <div class="col-lg-12 w-50 mx-auto pt-3">
                    <form action="">
                        <div class="input-group mb-3">
                            <input type="text" class="form-control rounded-pill" placeholder="Search ......"
                                aria-label="Recipient's username" />
                            <div class="input-group-append">
                                <button type="submit" class="btn signin w-auto rounded-pill faq-search">
                                    <i class="fa fa-search"></i>
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- Faq Container -->
    <div class="container overflow-hidden">
        <div class="row">
            <div class="col-lg-8 col-sm-12">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="tab-content" id="myTabContent">
                            <div class="tab-pane fade active show" id="default1" role="tabpanel"
                                aria-labelledby="default-tab1">
                                <div class="row mt-5">
                                    <div class="col-lg-4 col-sm-12">
                                        <a href="">
                                            <div class="faq-menu">
                                                <img src="https://i.ibb.co/PskszQx/pngtree-book-icon-png-image-1110447-removebg-preview.png"
                                                    class="img-fluid" alt="" />
                                                <p class="text-center">Buying Guide</p>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="col-lg-4 col-sm-12">
                                        <a href="">
                                            <div class="faq-menu">
                                                <img src="https://i.ibb.co/PskszQx/pngtree-book-icon-png-image-1110447-removebg-preview.png"
                                                    class="img-fluid" alt="" />
                                                <p class="text-center">Buying Guide</p>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="col-lg-4 col-sm-12">
                                        <a href="">
                                            <div class="faq-menu">
                                                <img src="https://i.ibb.co/PskszQx/pngtree-book-icon-png-image-1110447-removebg-preview.png"
                                                    class="img-fluid" alt="" />
                                                <p class="text-center">Buying Guide</p>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                                <div class="row mb-5">
                                    <div class="col-lg-4 col-sm-12">
                                        <a href="">
                                            <div class="faq-menu">
                                                <img src="https://i.ibb.co/PskszQx/pngtree-book-icon-png-image-1110447-removebg-preview.png"
                                                    class="img-fluid" alt="" />
                                                <p class="text-center">Buying Guide</p>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="col-lg-4 col-sm-12">
                                        <a href="">
                                            <div class="faq-menu">
                                                <img src="https://i.ibb.co/PskszQx/pngtree-book-icon-png-image-1110447-removebg-preview.png"
                                                    class="img-fluid" alt="" />
                                                <p class="text-center">Buying Guide</p>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="col-lg-4 col-sm-12">
                                        <a href="">
                                            <div class="faq-menu">
                                                <img src="https://i.ibb.co/PskszQx/pngtree-book-icon-png-image-1110447-removebg-preview.png"
                                                    class="img-fluid" alt="" />
                                                <p class="text-center">Buying Guide</p>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-12 pb-5">
                                        <div class="d-flex justify-content-center">
                                            <a href="#" class="btn signin rounded-0 w-auto">Contact Support</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="manufacturer" role="tabpanel" aria-labelledby="manufacturer-tab">
                                manufacturer
                            </div>
                            <div class="tab-pane fade" id="product_page" role="tabpanel" aria-labelledby="product_page-tab">
                                product_page
                            </div>
                            <div class="tab-pane fade" id="catalogues" role="tabpanel" aria-labelledby="catalogues-tab">
                                catalogues
                            </div>
                            <div class="tab-pane fade" id="buying" role="tabpanel" aria-labelledby="buying-tab">
                                buying
                            </div>
                            <div class="tab-pane fade" id="interest" role="tabpanel" aria-labelledby="interest-tab">
                                buying
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-sm-12 bg-white">
                <div>
                    <p class="py-2 pt-5 mb-0">Language</p>
                    <select class="form-select rounded-0" aria-label="Default select example">
                        <option selected>English (us)</option>
                        <option value="1">Canada</option>
                        <option value="2">Hindi</option>
                        <option value="3">Bangla</option>
                    </select>

                    <div class="pt-3">
                        <h6 class="fw-bold font-poppins">Trending Articles</h6>
                        <ul class="nav nav-tabs flex-column pb-5 pt-0 mt-0" id="myTab" role="tablist">
                            <li class="nav-item mb-2" role="presentation">
                                <button class="nav-link text-start faq-button-area font-two active"
                                    style="border-left: 3px solid white; background-color: transparent;" id="default-tab1"
                                    data-bs-toggle="tab" data-bs-target="#default1" type="button" role="tab"
                                    aria-controls="default1" aria-selected="true">
                                </button>
                            </li>
                            <li class="nav-item mb-2" role="presentation">
                                <button class="nav-link text-start faq-button-area font-two " id="manufacturer-tab"
                                    data-bs-toggle="tab" data-bs-target="#manufacturer" type="button" role="tab"
                                    aria-controls="manufacturer" aria-selected="true">
                                    How can I contact the manufacturer of a product that interests me?
                                </button>
                            </li>
                            <li class="nav-item mb-2" role="presentation">
                                <button class="nav-link text-start faq-button-area font-two" id="product_page-tab"
                                    data-bs-toggle="tab" data-bs-target="#product_page" type="button" role="tab"
                                    aria-controls="product_page" aria-selected="false">
                                    How can I open a product page?
                                </button>
                            </li>
                            <li class="nav-item mb-2" role="presentation">
                                <button class="nav-link text-start faq-button-area font-two " id="catalogues-tab"
                                    data-bs-toggle="tab" data-bs-target="#catalogues" type="button" role="tab"
                                    aria-controls="catalogues" aria-selected="false">
                                    How can I consult online catalogues?
                                </button>
                            </li>
                            <li class="nav-item mb-2" role="presentation">
                                <button class="nav-link text-start faq-button-area font-two " id="buying-tab"
                                    data-bs-toggle="tab" data-bs-target="#buying" type="button" role="tab"
                                    aria-controls="buying" aria-selected="false">
                                    Where will I find a buying guide?
                                </button>
                            </li>
                            <li class="nav-item mb-2" role="presentation">
                                <button class="nav-link text-start faq-button-area font-two " id="interest-tab"
                                    data-bs-toggle="tab" data-bs-target="#interest" type="button" role="tab"
                                    aria-controls="interest" aria-selected="false">
                                    How do I find the products that interest me?
                                </button>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
