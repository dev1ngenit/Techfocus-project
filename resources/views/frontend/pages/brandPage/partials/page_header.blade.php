<style>
    .sticky-header {
        position: -webkit-sticky;
        position: sticky;
        top: 0;
        z-index: 1020;
        transition: all 0.3s;
    }

    main {
        margin-top: 0rem;
    }
</style>

<div class="swiper bannerSwiper product-banner">
    <div class="swiper-wrapper">
        <div class="swiper-slide">
            <img src="https://img.directindustry.com/images_di/bnr/16788/hd/55424v2.jpg" class="img-fluid" alt="" />
        </div>
    </div>
    <div class="swiper-pagination"></div>
</div>
{{-- <div class="container">
    <div class="row">
        <div class="col-lg-12">
            <div class="breadcrumbs">
                <div>
                    <a href="index.html" class="">Home page</a> &gt;
                    <span class="txt-mcl active"> Handling - Logistics</span> &gt;
                    <span class="txt-mcl active"> Conveying</span> &gt;
                    <span class="txt-mcl active"> Robot transfer system</span>
                </div>
            </div>
        </div>
    </div>
</div> --}}
<section class="header d-lg-block d-sm-none mt-4" id="myHeader">
    <div class="container brand-page-header-container ">
        <!-- Tabbing Section Start -->
        <div class="row bg-white mb-4  align-items-center header" id="myHeader">
            <div class="col-lg-2">
                {{-- <img id="stand-logo"
                    src="{{ !empty($brand->logo) && file_exists(public_path('storage/brand/logo/' . $brand->logo)) ? asset('storage/brand/logo/' . $brand->logo) : asset('backend/images/no-image-available.png') }}"
                    class="img-fluid" /> --}}
                <div class="d-flex justify-content-around align-items-center">
                    <a href="">
                        <img id="stand-logo"
                            src="http://techfocusltd.com/storage/brand/logo/uNE6uamVvau6eiqf1687074668.png"
                            class="img-fluid" />
                    </a>
                    <a href="#" type="button" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
                        <img class="img-fluid custom-video-icon"
                            src="http://ngenitltd.com/frontend/images/no-video-icon.png" alt=""> </a>
                </div>
            </div>
            <div class="col-lg-10">
                <ul class="d-flex justify-content-start align-items-center pt-4 product-tabbing-menu stand-header-nav">
                    <li>
                        <a href="{{ route('brand.overview', $brand->slug) }}"
                            class="{{ Route::current()->getName() == 'brand.overview' ? 'product-tabbing-menu-active' : '' }}">Company</a>
                    </li>
                    <li><a href="{{ route('brand.products', $brand->slug) }}"
                            class="{{ Route::current()->getName() == 'brand.products' ? 'product-tabbing-menu-active' : '' }}">Products</a>
                    </li>
                    <li>
                        <a href="{{ route('brand.pdf', $brand->slug) }}"
                            class="{{ Route::current()->getName() == 'brand.pdf' ? 'product-tabbing-menu-active' : '' }}">Catalogs</a>
                    </li>
                    <li><a href="{{ route('brand.content', $brand->slug) }}"
                            class="{{ Route::current()->getName() == 'brand.content' ? 'product-tabbing-menu-active' : '' }}">News
                            & Trends</a></li>
                    {{-- <li><a href="{{ route('brand.') }}">Exhibitions</a></li> --}}
                </ul>
            </div>
        </div>
        <!-- Tabbing Section End -->
    </div>
</section>

<script>
    document.addEventListener("DOMContentLoaded", function() {
        var isMobile = window.innerWidth <= 768; // Adjust the threshold as needed

        var header, container, sticky;

        if (isMobile) {
            header = document.getElementById("mobileHeader");
            mainHeader = document.querySelector(".main_header");
            container = document.querySelector(".mobile-brand-page-header-container");
            sticky = header.offsetTop;
        } else {
            header = document.getElementById("myHeader");
            mainHeader = document.querySelector(".main_header");
            container = document.querySelector(".brand-page-header-container");
            sticky = header.offsetTop;
        }

        window.onscroll = function() {
            handleScroll(header, container, sticky);
        };

        // function handleScroll(header, container, sticky) {
        //     if (window.pageYOffset > sticky) {
        //         header.classList.add("sticky-header");
        //         container.classList.remove("container");
        //         mainHeader.classList.remove("fixed-top");
        //         container.classList.add("container-fluid");
        //     } else {
        //         mainHeader.classList.add("fixed-top");
        //         header.classList.remove("sticky-header");
        //         container.classList.remove("container-fluid");
        //         container.classList.add("container");
        //     }
        // }
        const threshold = 50; // Adjust the threshold value as needed

        function handleScroll(header, container, sticky) {
            if (window.pageYOffset > threshold) {
                // Scrolled past the threshold, add sticky styles
                header.classList.add("sticky-header");
                container.classList.remove("container");
                mainHeader.classList.remove("fixed-top");
                container.classList.add("container-fluid");
            } else {
                // Not necessarily scrolled past the threshold, but user has started scrolling
                header.classList.add("sticky-header");
                container.classList.remove("container");
                mainHeader.classList.remove("fixed-top");
                container.classList.add("container-fluid");
            }
        }
    });
</script>