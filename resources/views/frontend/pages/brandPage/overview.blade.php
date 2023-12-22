@extends('frontend.master')
@section('metadata')
@endsection
@section('content')
    <!--Banner -->
    @include('frontend.pages.brandPage.partials.page_header')
    <!-- content start -->
    <div class="container">
        <div class="row mb-5 mt-5">
            <div class="col-lg-12">
                <div class="card rounded-0 border-0 p-5">
                    <div class="card-body">
                        <h3 class="titles">EXPERT-TÜNKERS GmbH</h3>
                        <div class="row mt-3 mb-2">
                            <div class="col-lg-12">
                                <div class="devider-wrap">
                                    <h4 class="devider-content">
                                        <span class="devider-text bg-white">TRANSPORTING TECHNOLOGY - LIFT POWERED
                                            ROLLERBED
                                        </span>
                                    </h4>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-12">
                                <p>
                                    Since 1961, the company EXPERT stands for innovation,
                                    reliability, and precision in automation technology.
                                </p>
                                <p>
                                    EXPERT Maschinenbau GmbH was founded on 23rd of May, 1961
                                    in the small southern Hessian town Lorsch. The young
                                    company quickly developed into a globally active group of
                                    companies. During its peak of growth, EXPERT not only
                                    offered solutions for welding, handling and transporting
                                    applications. In addition, EXPERT was also a leading
                                    supplier of special machines and plant construction for
                                    the automotive sector all over the world.
                                </p>
                                <p>
                                    In 2006 Tünkers Maschinenbau GmbH from Ratingen took over
                                    EXPERT Maschinenbau, as a 100% subsidiary. The
                                    family-owned enterprise in the second generation is well
                                    known as an international supplier of rotary tables and
                                    automation technology for serial production. The history
                                    and knowledge of EXPERT Maschinenbau are continued by the
                                    renamed company EXPERT-TÜNKERS GmbH.
                                </p>
                            </div>
                        </div>
                        <div class="row mt-3 mb-2">
                            <div class="col-lg-12">
                                <div class="devider-wrap">
                                    <h4 class="devider-content">
                                        <span class="devider-text bg-white">Our values </span>
                                    </h4>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-12">
                                <p>
                                    As a reason, precise, fast and reliable automation
                                    solutions have been our core competence - let us convince
                                    you of our quality. EXPERT - INDEXING AND POSITIONING
                                    since 1961
                                </p>


                                <div class="xzoom-container w-100">
                                    <!-- Main Image Default Show -->
                                    <a data-fancybox-trigger="gallery" href="javascript:;">
                                        <img class="xzoom" id="xzoom-default"
                                            src="https://img.directindustry.com/images_di/photo-mg/16788-18842734.webp"
                                            xoriginal="https://img.directindustry.com/images_di/photo-mg/16788-18842734.webp"
                                            width="100%" height="100%" />
                                    </a>
                                    <!-- Main Image Default Show End-->
                                    <div class="xzoom-thumbs">
                                        <a class="popup" data-fancybox="gallery"
                                            href="https://img.directindustry.com/images_di/photo-mg/16788-18842712.webp"><img
                                                class="xzoom-gallery"
                                                src="https://img.directindustry.com/images_di/photo-mg/16788-18842712.webp"
                                                xpreview="https://img.directindustry.com/images_di/photo-mg/16788-18842712.webp"
                                                width="80" height="80" /></a>
                                        <a class="popup" data-fancybox="gallery"
                                            href="https://img.directindustry.com/images_di/photo-mg/16788-18842722.webp"><img
                                                class="xzoom-gallery"
                                                src="https://img.directindustry.com/images_di/photo-mg/16788-18842722.webp"
                                                xpreview="https://img.directindustry.com/images_di/photo-mg/16788-18842722.webp"
                                                width="80" height="80" /></a>
                                        <a class="popup" data-fancybox="gallery"
                                            href="https://img.directindustry.com/images_di/photo-mg/16788-18842734.webp"><img
                                                class="xzoom-gallery"
                                                src="https://img.directindustry.com/images_di/photo-mg/16788-18842734.webp"
                                                xpreview="https://img.directindustry.com/images_di/photo-mg/16788-18842734.webp"
                                                width="80" height="80" /></a>
                                    </div>
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
                    and do not include additional charges for installation or activation options. Prices are indicative
                    only and may vary by country, with changes to the cost of raw materials and exchange rates. </p>
            </div>
        </div>
    </div>
@endsection

@push('scripts')
    {{-- <script>
        document.addEventListener("DOMContentLoaded", function() {
            var accordions = document.querySelectorAll('.accordion');

            accordions.forEach(function(accordion) {
                accordion.addEventListener('show.bs.collapse', function(event) {
                    var currentlyOpen = accordion.querySelector('.show');
                    if (currentlyOpen && currentlyOpen !== event.target) {
                        bootstrap.Collapse.getInstance(currentlyOpen).hide();
                    }
                });
            });
        });
    </script> --}}
@endpush
