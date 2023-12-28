<!-- Top Bar Start -->
<section class="fixed-top main_header">
    <div class="container-fluid d-sm-none d-md-block" style="background-color: var(--secondary-deep-color)">
        <div class="row text-white top-bar" style="background-color: var(--secondary-color)">
            <div class="empty-area" style="background-color: var(--secondary-deep-color);
          clip-path: polygon(0 0, 96% 0%, 100% 120%, 0% 100%);">
            </div>
            <div class="fill-area" style="background-color: var(--secondary-color)">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="d-flex justify-content-end align-items-center p-1">
                                <div class="dropdown">
                                    <button class="dropdown-toggle me-4" type="button" id="dropdownMenuButton1"
                                        data-bs-toggle="dropdown" aria-expanded="false" data-aos="fade-left">
                                        English
                                    </button>
                                    <ul class="dropdown-menu extra-dropdown" aria-labelledby="dropdownMenuButton1">
                                        <li>
                                            <a class="dropdown-item top-dropdown" href="#">English</a>
                                        </li>
                                        <li>
                                            <a class="dropdown-item top-dropdown" href="#">France</a>
                                        </li>
                                        <li>
                                            <a class="dropdown-item top-dropdown" href="#">Spanish</a>
                                        </li>
                                        <li>
                                            <a class="dropdown-item top-dropdown" href="#">German</a>
                                        </li>
                                        <li>
                                            <a class="dropdown-item top-dropdown" href="#">Russian</a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="popover__wrapper me-5">
                                    <a href="#">
                                        <h2 class="popover__title mb-1" data-aos="fade-left">
                                            <span>
                                                <i class="fa-solid fa-star-of-life"></i>
                                                <span class="p-0 m-0" style="color: var(--main-color)">My</span>
                                                Techfocus
                                            </span>
                                        </h2>
                                    </a>
                                    <div class="popover__content text-start">
                                        @auth
                                        <form method="POST" action="{{ route('logout') }}">
                                            @csrf
                                            <button type="submit" class="btn signin mb-2 rounded-0">Log Out</button>
                                        </form>
                                        @else
                                        <a href="{{ route('login') }}" class="btn signin mb-2 rounded-0">Log In</a>
                                        <div class="text-muted">
                                            First time here?
                                            <a href="{{ route('register') }}" class="main-color">Sign Up</a>
                                        </div>
                                        @endauth
                                        <hr class="text-muted" />
                                        <ul class="account p-0 text-muted text-start">
                                            <li>
                                                <i class="fa fa-user m-2"></i>
                                                <a href="{{ route('client.profile') }}" class="">My Profile</a>
                                            </li>
                                            <li>
                                                <i class="fa fa-envelope m-2"></i>
                                                <a href="{{ route('client.subscription') }}" class="">My
                                                    Subscriptions</a>
                                            </li>
                                            <li>
                                                <i class="fa fa-star m-2"></i>
                                                <a href="{{ route('client.favourites') }}" class="">My Favorites</a>
                                            </li>
                                            <li>
                                                <i class="fa fa-list m-2"></i>
                                                <a href="{{ route('client.requests') }}" class="">My Requests</a>
                                            </li>
                                        </ul>
                                        <hr class="text-muted" />
                                        <ul class="account p-0 text-muted text-start" style="font-size: 7px">
                                            <li>
                                                Sign in to your manufacturer account
                                                <a target="_blank" class="main-color">Manufacturer account</a>
                                            </li>
                                            <li>
                                                Sign in to your distributor account
                                                <a target="_blank" class="main-color">Distributor account</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="dropdown">
                                    <button class="dropdown-toggle me-3" type="button" id="dropdownMenuButton1"
                                        data-bs-toggle="dropdown" aria-expanded="false" data-aos="fade-left">
                                        EUR - €
                                    </button>
                                    <ul class="dropdown-menu extra-dropdown" aria-labelledby="dropdownMenuButton1">
                                        <li>
                                            <a class="dropdown-item top-dropdown" href="#">English</a>
                                        </li>
                                        <li>
                                            <a class="dropdown-item top-dropdown" href="#">France</a>
                                        </li>
                                        <li>
                                            <a class="dropdown-item top-dropdown" href="#">Spanish</a>
                                        </li>
                                        <li>
                                            <a class="dropdown-item top-dropdown" href="#">German</a>
                                        </li>
                                        <li>
                                            <a class="dropdown-item top-dropdown" href="#">Russian</a>
                                        </li>
                                    </ul>
                                </div>
                                <!-- <div class="m-1" data-aos="fade-left">
                                      <a href="exhibit.html" class="rounded-pill p-1 exhibition-btn">Exhibition With Us</a>
                                    </div> -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Top Bar End -->
    <nav class="navbar navbar-expand-lg navbar-dark main-menu px-3">
        <div class="container-fluid">
            <!-- Logo Start -->
            <a class="navbar-brand mb-0" href="{{ route('homepage') }}" data-aos="fade-right">
                <img src="{{ !empty($site->system_logo_white) && file_exists(public_path('storage/webSetting/systemLogoWhite/' . $site->system_logo_white)) ? asset('storage/webSetting/systemLogoWhite/' . $site->system_logo_white) : asset('backend/images/no-image-available.png') }}"
                    height="60px" alt="" />
            </a>
            <!-- Logo End -->
            <!-- Mobile Menu -->
            <div class="d-lg-none d-sm-block">
                <input type="checkbox" id="menyAvPaa" />
                <label id="burger" for="menyAvPaa">
                    <div></div>
                    <div></div>
                    <div></div>
                </label>
                <nav id="meny">
                    <div class="" style="z-index: 9999; padding-top: 1rem; padding-left: 28rem">
                        <!--Mobile Head -->
                        <p class="text-danger">
                            <a class="navbar-brand" href="{{ route('homepage') }}">
                                <img src="{{ !empty($site->system_logo_white) && file_exists(public_path('storage/webSetting/systemLogoWhite/' . $site->system_logo_white)) ? asset('storage/webSetting/systemLogoWhite/' . $site->system_logo_white) : asset('backend/images/no-image-available.png') }}"
                                    width="200px" height="60px" alt="" />
                            </a>
                        </p>
                        <!-- Mobile Menu -->
                        <ul class="navbar-nav ms-auto">
                            <li class="nav-item dropdown" data-aos="fade-right" data-aos-duration="500">
                                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    Product
                                </a>
                                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                    <div class="container">
                                        <div class="row">
                                            <div class="col-md-4">
                                                <span class="text-uppercase text-white">Category 1</span>
                                                <ul class="nav flex-column">
                                                    <li class="nav-item">
                                                        <a class="nav-link active" href="#">Active</a>
                                                    </li>
                                                    <li class="nav-item">
                                                        <a class="nav-link" href="#">Link item</a>
                                                    </li>
                                                    <li class="nav-item">
                                                        <a class="nav-link" href="#">Link item</a>
                                                    </li>
                                                </ul>
                                            </div>
                                            <!-- /.col-md-4  -->
                                            <div class="col-md-4">
                                                <ul class="nav flex-column">
                                                    <li class="nav-item">
                                                        <a class="nav-link active" href="#">Active</a>
                                                    </li>
                                                    <li class="nav-item">
                                                        <a class="nav-link" href="#">Link item</a>
                                                    </li>
                                                    <li class="nav-item">
                                                        <a class="nav-link" href="#">Link item</a>
                                                    </li>
                                                </ul>
                                            </div>
                                            <!-- /.col-md-4  -->
                                            <div class="col-md-4">
                                                <a target="_blank" href="#resources/a-beginners-guide-to-hubspot-cms/">
                                                    <img src="https://i0.wp.com/bootstrapcreative.com/wp-bc/wp-content/uploads/2022/07/beginners-guide-to-hubspot-cms-cover.png?w=200&ssl=1"
                                                        alt="Web Design Guides" class="img-fluid" />
                                                </a>
                                                <p class="text-white">Get Free Guides</p>
                                            </div>
                                            <!-- /.col-md-4  -->
                                        </div>
                                    </div>
                                    <!--  /.container  -->
                                </div>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('catalog.all') }}">Catalog</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('rfq') }}">RFQ</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('contact') }}">Contact Us</a>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="news-trends.html" id="navbarDropdown"
                                    role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    News & Trends
                                </a>
                                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                    <div class="container">
                                        <div class="row">
                                            <div class="col-md-4">
                                                <span class="text-uppercase text-white">Category 2</span>
                                                <ul class="nav flex-column">
                                                    <li class="nav-item">
                                                        <a class="nav-link active" href="#">Active</a>
                                                    </li>
                                                    <li class="nav-item">
                                                        <a class="nav-link" href="#">Link item</a>
                                                    </li>
                                                    <li class="nav-item">
                                                        <a class="nav-link" href="#">Link item</a>
                                                    </li>
                                                </ul>
                                            </div>
                                            <!-- /.col-md-4  -->
                                            <div class="col-md-4">
                                                <ul class="nav flex-column">
                                                    <li class="nav-item">
                                                        <a class="nav-link active" href="#">Active</a>
                                                    </li>
                                                    <li class="nav-item">
                                                        <a class="nav-link" href="#">Link item</a>
                                                    </li>
                                                    <li class="nav-item">
                                                        <a class="nav-link" href="#">Link item</a>
                                                    </li>
                                                </ul>
                                            </div>
                                            <!-- /.col-md-4  -->
                                            <div class="col-md-4">
                                                <a target="_blank" href="#shop/jake-portfolio-hubspot-theme/">
                                                    <img src="https://i0.wp.com/bootstrapcreative.com/wp-bc/wp-content/uploads/2022/01/jake-portfolio-cover.jpg?w=200&ssl=1"
                                                        alt="Portfolio Website Templates" class="img-fluid" />
                                                </a>
                                                <p class="text-white">
                                                    Create a Portfolio Website Fast
                                                </p>
                                            </div>
                                            <!-- /.col-md-4  -->
                                        </div>
                                    </div>
                                    <!--  /.container  -->
                                </div>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">E-Magazine</a>
                            </li>
                        </ul>
                    </div>
                </nav>
            </div>
            <!-- Mobile Menu End-->
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" data-aos="fade-right">
                            Product
                        </a>
                        <div class="dropdown-menu menu-dropdown" aria-labelledby="navbarDropdown">
                            <div class="container">
                                asdasdasdasd
                            </div>
                        </div>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-aos="fade-right" href="{{ route('catalog.all') }}">Catalog</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="news-trends.html" id="navbarDropdown" role="button"
                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" data-aos="fade-right">
                            News & Trends
                        </a>
                        <div class="dropdown-menu menu-dropdown" aria-labelledby="navbarDropdown">
                            <div class="container">
                                asdasdasd
                            </div>
                            <!--  /.container  -->
                        </div>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-aos="fade-right" href="{{ route('rfq') }}">RFQ</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('contact') }}">Contact Us</a>
                    </li>
                </ul>
                <!-- Search Box Start -->
                <div class="ms-auto">
                    <div class="search-2">
                        <input type="text" class="searchTerm" placeholder="What are you looking for?" />
                        <button type="submit" class="searchButton-2">
                            <i class="fa fa-search"></i>
                        </button>
                    </div>
                </div>
                <!-- Search Box End -->
            </div>
        </div>
    </nav>
</section>