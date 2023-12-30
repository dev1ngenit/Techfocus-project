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
        max-width: 1320px;
    }
    
</style>
<style>
    @keyframes wave {
      0% {
        transform: translateY(0);
      }
      50% {
        transform: translateY(-10px);
      }
      100% {
        transform: translateY(0);
      }
    }
  
    .wave-bg {
      animation: wave 2s infinite;
    }
  </style>
<!--Banner -->
@include('frontend.pages.brandPage.partials.page_header')
<!-- content start -->
<div class="container">
    <div class="row">
        <div class="col-lg-12 p-0">
            <div class="card rounded-0 border-0">
                <div class="card-body p-0">
                    <div class="row px-5 pt-4">
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
                    <div class="row px-5">
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
                    <div class="row px-5">
                        <div class="col-lg-12">
                            <div class="devider-wrap">
                                <h4 class="devider-content">
                                    <span class="devider-text bg-white">Our values </span>
                                </h4>
                            </div>
                        </div>
                    </div>
                    {{-- Fist Row --}}
                    <div class="row align-items-center px-5">
                        <div class="col-lg-6">
                            <h3 class="title ">More Than Your Average Cloud Backup – A Complete Cyber Protection
                                Solution</h3>
                            <p style="text-align: justify;">Maximize the advantages of fortified backup capabilities
                                seamlessly integrated with
                                advanced cyber protection features. Safeguard your data with confidence, covering over
                                20 different workload types. Explore the robust backup and data protection capabilities
                                offered by Acronis Cyber Protect Cloud, ensuring comprehensive security.</p>
                            <p style="text-align: justify;">Maximize the advantages of fortified backup capabilities
                                seamlessly integrated with
                                advanced cyber protection features. Safeguard your data with confidence, covering over
                                20 different workload types. Explore the robust backup and data protection capabilities
                                offered by Acronis Cyber Protect Cloud, ensuring comprehensive security.</p>
                            <a href="guide.html" class="btn common-btn-3 rounded-0 w-25 mt-2">Shop Online</a>
                        </div>
                        <div class="col-lg-6">
                            <div class="d-flex justify-content-center align-items-center">
                                <img class="img-fluid shadow-sm"
                                    src="http://ngenitltd.com/storage/ccpLEaB2qKR1OYwK1697888641.jpg" alt="">
                            </div>
                        </div>
                    </div>
                    {{-- Second Row --}}
                    <div class="row my-5 align-items-center px-5">
                        <div class="col-lg-6">
                            <div class="d-flex justify-content-center align-items-center">
                                <img class="img-fluid shadow-sm"
                                    src="http://ngenitltd.com/storage/ccpLEaB2qKR1OYwK1697888641.jpg" alt="">
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <h3 class="title ">Achieve Near-Zero RPOs With Continuous Data Protection</h3>
                            <p style="text-align: justify;">Maximize the advantages of fortified backup capabilities
                                seamlessly integrated with
                                advanced cyber protection features. Safeguard your data with confidence, covering over
                                20 different workload types. Explore the robust backup and data protection capabilities
                                offered by Acronis Cyber Protect Cloud, ensuring comprehensive security.</p>
                            <p style="text-align: justify;">Maximize the advantages of fortified backup capabilities
                                seamlessly integrated with
                                advanced cyber protection features. Safeguard your data with confidence, covering over
                                20 different workload types. Explore the robust backup and data protection capabilities
                                offered by Acronis Cyber Protect Cloud, ensuring comprehensive security.</p>
                            <a href="guide.html" class="btn common-btn-3 rounded-0 w-25 mt-2">Shop Online</a>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-12 wave-bg">
                            <img class="img-fluid" src="http://ngenitltd.com/storage/G1qAS5TJukJNqepJ1697881966.jpg"
                                alt="">
                        </div>
                    </div>
                    {{-- Third Row --}}
                    <div class="row my-5 align-items-center px-5">
                        <div class="col-lg-6">
                            <h3 class="title ">Enable Quick And Easy Recovery With Minimal IT Intervention</h3>
                            <p style="text-align: justify;">Maximize the advantages of fortified backup capabilities
                                seamlessly integrated with
                                advanced cyber protection features. Safeguard your data with confidence, covering over
                                20 different workload types. Explore the robust backup and data protection capabilities
                                offered by Acronis Cyber Protect Cloud, ensuring comprehensive security.</p>
                            <p style="text-align: justify;">Maximize the advantages of fortified backup capabilities
                                seamlessly integrated with
                                advanced cyber protection features. Safeguard your data with confidence, covering over
                                20 different workload types. Explore the robust backup and data protection capabilities
                                offered by Acronis Cyber Protect Cloud, ensuring comprehensive security.</p>
                            <a href="guide.html" class="btn common-btn-3 rounded-0 w-25 mt-2">Shop Online</a>
                        </div>
                        <div class="col-lg-6">
                            <div class="d-flex justify-content-center align-items-center">
                                <img class="img-fluid shadow-sm"
                                  src="http://ngenitltd.com/storage/ccpLEaB2qKR1OYwK1697888641.jpg" alt="">
                              </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row p-3">
        <div class="col-lg-12 col-sm-12">
            <p class="sub-color text-center mx-auto pt-4 pb-2"> *Prices are pre-tax. They exclude delivery charges and
                customs duties
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