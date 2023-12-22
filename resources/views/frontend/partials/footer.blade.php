<div class="container-fluid" style="background-color: var(--sub-main-color)">
    <div class="container text-white" style="font-size: 14px">
        <div class="row align-items-center">
            <div class="col-lg-3 p-4 text-start border-left-side">
                <div>
                    <a href="how-source.html">HOW TO SOURCE PRODUCTS </a>
                </div>
            </div>
            <div class="col-lg-2 p-4 text-center border-left-side">
                <div>
                    <a href="exhibit.html">EXHIBIT WITH US </a>
                </div>
            </div>
            <div class="col-lg-2 p-4 text-center border-left-side">
                <div>
                    <a href="{{route('faq')}}">FAQ </a>
                </div>
            </div>
            <div class="col-lg-5 p-4 d-flex justify-content-between align-items-center social-area">
                <ul class="">
                    <li class="pt-2">
                        <a href="brand-list.html">Brand list</a>
                    </li>
                    <li class="pt-2">
                        <a href="manufacturer-account.html"> Manufacturer account</a>
                    </li>
                    <li class="pt-2">
                        <a href="our-service.html"> Our Service</a>
                    </li>
                    <li class="pt-2">
                        <a href="subscriptions.html"> Subscriptions</a>
                    </li>
                    <li class="pt-2">
                        <a href="about-us.html">About Us</a>
                    </li>
                </ul>
                <div class="social-icons-btn">
                    <a class="icons twitter" href="#">
                        <i class="fa-brands fa-twitter"></i>
                    </a>
                    <a class="icons facebook" href="#">
                        <i class="fa-brands fa-facebook-f"></i>
                    </a>
                    <a class="icons instagram" href="#">
                        <i class="fa-brands fa-instagram"></i>
                    </a>
                    <a class="icons linkedin" href="#">
                        <i class="fa-brands fa-linkedin-in"></i>
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="container-fluid" style="background-color: var(--sub-color)">
    <div class="container footer-logo">
        <div class="row pt-5">
            <div class="col-lg-8 offset-lg-2 d-flex">
                <div class="d-flex align-items-center">
                    <a href="brand-news.html" class="border-left-side pe-lg-3">
                        <img src="{{ !empty($site->system_logo_white) && file_exists(public_path('storage/webSetting/systemLogoWhite/' . $site->system_logo_white)) ? asset('storage/webSetting/systemLogoWhite/' . $site->system_logo_white) : asset('backend/images/no-image-available.png') }}" width="180px" class="me-3"
                            alt="" />
                    </a>
                    {{-- <a href="brand-news.html" class="me-4">
                        <img src="https://i.ibb.co/pL02QzP/images-removebg-preview.png" width="120px" alt="" />
                    </a>
                    <a href="brand-news.html" class="me-4">
                        <img src="https://i.ibb.co/CMFMJ5Z/images-removebg-preview-1.png" width="120px"
                            alt="" />
                    </a>
                    <a href="brand-news.html" class="me-4">
                        <img src="https://i.ibb.co/CMFMJ5Z/images-removebg-preview-1.png" width="120px"
                            alt="" />
                    </a>
                    <a href="brand-news.html" class="me-4">
                        <img src="https://i.ibb.co/CMFMJ5Z/images-removebg-preview-1.png" width="120px"
                            alt="" />
                    </a>
                    <a href="brand-news.html" class="me-4">
                        <img src="https://i.ibb.co/CMFMJ5Z/images-removebg-preview-1.png" width="120px"
                            alt="" />
                    </a> --}}
                </div>
            </div>
            <div class="col-lg-12 text-white mt-lg-5">
                <p class="text-center">© 2023 All rights reserved</p>
                <ul class="d-flex justify-content-center ps-0">
                    <li>
                        <a href="{{route('terms')}}">Terms - </a>
                    </li>
                    <li>
                        <a href="privacy.html">Privacy Policy - </a>
                    </li>
                    <li>
                        <a href="{{route('terms')}}">General Terms - </a>
                    </li>
                    <li>
                        <a href="">Manage Cookies - </a>
                    </li>
                    <li>
                        <a href="distibutors.html">Distributors List </a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>
