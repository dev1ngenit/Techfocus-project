<div class="swiper bannerSwiper product-banner">
    <div class="swiper-wrapper">
        <div class="swiper-slide">
            <img src="https://img.directindustry.com/images_di/bnr/182419/hd/54658v1.jpg" class="img-fluid"
                alt="" />
        </div>
        <div class="swiper-slide">
            <img src="https://img.directindustry.com/images_di/bnr/182601/hd/53814.webp" class="img-fluid"
                alt="" />
        </div>
        <div class="swiper-slide">
            <img src="https://img.directindustry.com/images_di/bnr/13615/hd/54244.webp" class="img-fluid"
                alt="" />
        </div>
    </div>
    <div class="swiper-pagination"></div>
</div>

<div class="container">
    <div class="row">
        <div class="col-lg-12">
            <div class="breadcrumbs">
                <div>
                    <a href="index.html" class="">Home</a> &gt;
                    <span class="txt-mcl active">User Profile</span>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="container sticky-top">
    <div class="row bg-white shadow-sm">
        <div class="col-lg-10 offset-lg-1">
            <div class="d-flex justify-content-start align-items-center">
                <!-- Logo Or Content -->
                <div>
                    <h2 class="mb-0">My TechFocus</h2>
                </div>
                <!-- Tab Menu Content -->
                <div class="ms-5">
                    <ul class="d-flex pt-3">
                        <li class="border-left-side p-3 {{ Route::current()->getName() == 'client.profile' ? 'product-tabbing-menu-active' : '' }}">
                            <a href="{{ route('client.profile') }}">My Profile</a>
                        </li>
                        <li class="border-left-side p-3 {{ Route::current()->getName() == 'client.subscription' ? 'product-tabbing-menu-active' : '' }}">
                            <a href="{{ route('client.subscription') }}">My Subscriptions</a>
                        </li>
                        <li class="border-left-side p-3 {{ Route::current()->getName() == 'client.favourites' ? 'product-tabbing-menu-active' : '' }}">
                            <a href="{{ route('client.favourites') }}">My Favourites</a>
                        </li>
                        <li class="border-left-side p-3 {{ Route::current()->getName() == 'client.requests' ? 'product-tabbing-menu-active' : '' }}">
                            <a href="{{ route('client.requests') }}">My Requests</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
