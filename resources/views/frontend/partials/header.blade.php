<style>
    .menu-dropdown {
        position: relative;
        padding: 20px;
        border-radius: 8px;
        overflow: hidden;
    }

    .menu-dropdown::before {
        content: "";
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background: url('https://png.pngtree.com/background/20220729/original/pngtree-light-gray-geometry-abstract-subtle-background-vector-picture-image_1867383.jpg');
        background-size: cover;
        background-position: center;
        z-index: -1;
        opacity: 0.8;
        /* Adjust the opacity as needed */
    }

    .header-side-banner {
        max-width: 100%;
        height: auto;
        border-radius: 8px;
    }

    .column-transition {
        transition: all 0.3s ease;
    }

    .column-header a:hover,
    .column-header.active a {
        color: var(--primary-color);
    }

    .dropdown-submenu {
        position: relative;
    }

    .dropdown-submenu .dropdown-menu {
        top: 0;
        left: 100%;
        margin-top: -1px;
    }
</style>
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
                            <div class="d-flex justify-content-end align-items-center px-1">
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
                                        <h2 class="popover__title mb-1 fw-bold" data-aos="fade-left">
                                            <span>
                                                <i class="fa-solid fa-star-of-life"></i>
                                                <span class="p-0 m-0" style="color: var(--primary-color)">My</span>
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
                {{-- <img
                    src="{{ !empty($site->system_logo_white) && file_exists(public_path('storage/webSetting/systemLogoWhite/' . $site->system_logo_white)) ? asset('storage/webSetting/systemLogoWhite/' . $site->system_logo_white) : asset('backend/images/no-image-available.png') }}"
                    height="60px" alt="" /> --}}
                <img src="http://techfocusltd.com/storage/webSetting/systemLogoWhite/Logo_R1llPg4c.png" height="60px"
                    alt="" />
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
                                <a class="nav-link custom-nav dropdown-toggle" href="#" id="navbarDropdown"
                                    role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    Product
                                </a>
                                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                    <div class="container">
                                        <div class="row">
                                            <div class="col-md-4">
                                                <span class="text-uppercase text-white">Category 1</span>
                                                <ul class="nav flex-column">
                                                    <li class="nav-item">
                                                        <a class="nav-link custom-nav active" href="#">Active</a>
                                                    </li>
                                                    <li class="nav-item">
                                                        <a class="nav-link custom-nav" href="#">Link item</a>
                                                    </li>
                                                    <li class="nav-item">
                                                        <a class="nav-link custom-nav" href="#">Link item</a>
                                                    </li>
                                                </ul>
                                            </div>
                                            <!-- /.col-md-4  -->
                                            <div class="col-md-4">
                                                <ul class="nav flex-column">
                                                    <li class="nav-item">
                                                        <a class="nav-link custom-nav active" href="#">Active</a>
                                                    </li>
                                                    <li class="nav-item">
                                                        <a class="nav-link custom-nav" href="#">Link item</a>
                                                    </li>
                                                    <li class="nav-item">
                                                        <a class="nav-link custom-nav" href="#">Link item</a>
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
                                <a class="nav-link custom-nav" href="{{ route('catalog.all') }}">Catalog</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link custom-nav" href="{{ route('rfq') }}">RFQ</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link custom-nav" href="{{ route('contact') }}">Contact Us</a>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link custom-nav dropdown-toggle" href="news-trends.html"
                                    id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true"
                                    aria-expanded="false">
                                    News & Trends
                                </a>
                                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                    <div class="container">
                                        <div class="row">
                                            <div class="col-md-4">
                                                <span class="text-uppercase text-white">Category 2</span>
                                                <ul class="nav flex-column">
                                                    <li class="nav-item">
                                                        <a class="nav-link custom-nav active" href="#">Active</a>
                                                    </li>
                                                    <li class="nav-item">
                                                        <a class="nav-link custom-nav" href="#">Link item</a>
                                                    </li>
                                                    <li class="nav-item">
                                                        <a class="nav-link custom-nav" href="#">Link item</a>
                                                    </li>
                                                </ul>
                                            </div>
                                            <!-- /.col-md-4  -->
                                            <div class="col-md-4">
                                                <ul class="nav flex-column">
                                                    <li class="nav-item">
                                                        <a class="nav-link custom-nav active" href="#">Active</a>
                                                    </li>
                                                    <li class="nav-item">
                                                        <a class="nav-link custom-nav" href="#">Link item</a>
                                                    </li>
                                                    <li class="nav-item">
                                                        <a class="nav-link custom-nav" href="#">Link item</a>
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
                                <a class="nav-link custom-nav" href="#">E-Magazine</a>
                            </li>
                        </ul>
                    </div>
                </nav>
            </div>
            <!-- Mobile Menu End-->
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item dropdown">
                        <a class="nav-link custom-nav dropdown-toggle" href="#" id="navbarDropdown" role="button"
                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" data-aos="fade-right">
                            Product
                        </a>
                        <div class="dropdown-menu menu-dropdown" aria-labelledby="navbarDropdown">
                            <div class="container">
                                <div class="row my-5 gx-3">
                                    <div class="col-lg-3">
                                        <div>
                                            <img class="img-fluid header-side-banner"
                                                src="https://www.kuka.com/-/media/kuka-corporate/images/ir/mitteilungen.jpg?rev=1b1c6d88287d493c9d06716764767b38&w=767&hash=D675CCDCE6BAF6450C5DB2F986F22751"
                                                alt="">
                                            <h5 class="pt-3">Products</h5>
                                            <p>Get an overview on the entire KUKA portfolio from industrial robots to
                                                complete production lines.</p>
                                            <div>
                                                <a href="" class="main-color">
                                                    Learn More <i class="fa-solid fa-chevron-right ps-1 font-one"></i>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-9">
                                        <div class="row gx-2">
                                            <div class="col-lg-4 first-column column-transition">
                                                <div class="column-header">
                                                    <div class="pt-0">
                                                        <a href="#" class="">Industries</a>
                                                    </div>
                                                    <div class="pt-4">
                                                        <a href="#" class="expand-column-first"
                                                            onclick="toggleColumn('second-column')">Case Studies
                                                            <i class="fa-solid fa-chevron-right font-one ps-2"></i></a>
                                                    </div>
                                                    <div class="pt-4">
                                                        <a href="#" class="">Automative Industry</a>
                                                    </div>
                                                    <div class="pt-4">
                                                        <a href="#" class="expand-column-first"
                                                            onclick="toggleColumn('second-column')">Automated
                                                            House
                                                            Building<i
                                                                class="fa-solid fa-chevron-right font-one ps-2"></i></a>
                                                    </div>
                                                    <div class="pt-4">
                                                        <a href="#" class="expand-column-first"
                                                            onclick="toggleColumn('second-column')">Electronic
                                                            Industries<i
                                                                class="fa-solid fa-chevron-right font-one ps-2"></i></a>
                                                    </div>
                                                    <div class="pt-4">
                                                        <a href="#" class="expand-column-first"
                                                            onclick="toggleColumn('second-column')">Ecommerce &
                                                            Logistic
                                                            Service<i
                                                                class="fa-solid fa-chevron-right font-one ps-2"></i></a>
                                                    </div>
                                                    <div class="pt-4">
                                                        <a href="#" class="expand-column-first"
                                                            onclick="toggleColumn('second-column')">Helth Care<i
                                                                class="fa-solid fa-chevron-right font-one ps-2"></i></a>
                                                    </div>
                                                    <div class="pt-4">
                                                        <a href="#" class="expand-column-first"
                                                            onclick="toggleColumn('second-column')">Consumer
                                                            Goods
                                                            Industries<i
                                                                class="fa-solid fa-chevron-right font-one ps-2"></i></a>
                                                    </div>
                                                    <div class="pt-4">
                                                        <a href="#" class="">Metal Industires<i
                                                                class="fa-solid fa-chevron-right font-one ps-2"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-4 second-column column-transition"
                                                style="display: none;">
                                                <div class="column-header"
                                                    style="border-left: 1px solid var(--border-color)">
                                                    <div class="ps-3">
                                                        <div class="pt-0">
                                                            <a href="#" class="">Helthcare</a>
                                                        </div>
                                                        <div class="pt-4">
                                                            <a href="#" class="expand-column-second"
                                                                onclick="toggleColumn('third-column')">Robots In
                                                                The
                                                                Medical Industry<i
                                                                    class="fa-solid fa-chevron-right font-one ps-2"></i></a>
                                                        </div>
                                                        <div class="pt-4">
                                                            <a href="#" class="">3D Virdtual Showroom</a>
                                                        </div>
                                                        <div class="pt-4">
                                                            <a href="#" class="">Team And Service</a>
                                                        </div>
                                                        <div class="pt-4">
                                                            <a href="#" class="">3D Virdtual Showroom</a>
                                                        </div>
                                                        <div class="pt-4">
                                                            <a href="#" class="expand-column-second"
                                                                onclick="toggleColumn('third-column')">Current
                                                                Topics<i
                                                                    class="fa-solid fa-chevron-right font-one ps-2"></i></a>
                                                        </div>
                                                        <div class="pt-4">
                                                            <a href="#" class="">Swisslog Helthcare</a>
                                                        </div>
                                                        <div class="pt-4">
                                                            <a href="#" class="expand-column-second"
                                                                onclick="toggleColumn('third-column')">Downloads<i
                                                                    class="fa-solid fa-chevron-right font-one ps-2"></i></a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-4 third-column column-transition" style="display: none;">
                                                <div class="column-header"
                                                    style="border-left: 1px solid var(--border-color)">
                                                    <div class="ps-3">
                                                        <div class="pt-4">
                                                            <a href="#" class="">3D Virdtual Showroom</a>
                                                        </div>
                                                        <div class="pt-4">
                                                            <a href="#" class="">Team And Service</a>
                                                        </div>
                                                        <div class="pt-4">
                                                            <a href="#" class="">4D Virdtual Showroom</a>
                                                        </div>
                                                        <div class="pt-4">
                                                            <a href="#" class="">5D Virdtual Showroom</a>
                                                        </div>
                                                        <div class="pt-4">
                                                            <a href="#" class="">6D Virdtual Showroom</a>
                                                        </div>
                                                        <div class="pt-4">
                                                            <a href="#" class="">7D Virdtual Showroom</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link custom-nav" data-aos="fade-right"
                            href="{{ route('catalog.all') }}">Catalog</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link custom-nav dropdown-toggle" href="news-trends.html" id="navbarDropdown"
                            role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"
                            data-aos="fade-right">
                            News & Trends
                        </a>
                        <div class="dropdown-menu menu-dropdown" aria-labelledby="navbarDropdown">
                            <div class="container">
                                <div class="row my-5 gx-3">
                                    <div class="col-lg-3">
                                        <div>
                                            <img class="img-fluid header-side-banner"
                                                src="https://www.kuka.com/-/media/kuka-corporate/images/ir/mitteilungen.jpg?rev=1b1c6d88287d493c9d06716764767b38&w=767&hash=D675CCDCE6BAF6450C5DB2F986F22751"
                                                alt="">
                                            <h5 class="pt-3">Products</h5>
                                            <p>Get an overview on the entire KUKA portfolio from industrial robots to
                                                complete production lines.</p>
                                            <div>
                                                <a href="" class="main-color">
                                                    Learn More <i class="fa-solid fa-chevron-right ps-1 font-one"></i>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-9">
                                        <div class="row gx-2">
                                            <div class="col-lg-4 first-column column-transition">
                                                <div class="column-header">
                                                    <div class="pt-0">
                                                        <a href="#" class="">Industries</a>
                                                    </div>
                                                    <div class="pt-4">
                                                        <a href="#" class="expand-column-first"
                                                            onclick="toggleColumn('second-column')">Case Studies
                                                            <i class="fa-solid fa-chevron-right font-one ps-2"></i></a>
                                                    </div>
                                                    <div class="pt-4">
                                                        <a href="#" class="">Automative Industry</a>
                                                    </div>
                                                    <div class="pt-4">
                                                        <a href="#" class="expand-column-first"
                                                            onclick="toggleColumn('second-column')">Automated
                                                            House
                                                            Building<i
                                                                class="fa-solid fa-chevron-right font-one ps-2"></i></a>
                                                    </div>
                                                    <div class="pt-4">
                                                        <a href="#" class="expand-column-first"
                                                            onclick="toggleColumn('second-column')">Electronic
                                                            Industries<i
                                                                class="fa-solid fa-chevron-right font-one ps-2"></i></a>
                                                    </div>
                                                    <div class="pt-4">
                                                        <a href="#" class="expand-column-first"
                                                            onclick="toggleColumn('second-column')">Ecommerce &
                                                            Logistic
                                                            Service<i
                                                                class="fa-solid fa-chevron-right font-one ps-2"></i></a>
                                                    </div>
                                                    <div class="pt-4">
                                                        <a href="#" class="expand-column-first"
                                                            onclick="toggleColumn('second-column')">Helth Care<i
                                                                class="fa-solid fa-chevron-right font-one ps-2"></i></a>
                                                    </div>
                                                    <div class="pt-4">
                                                        <a href="#" class="expand-column-first"
                                                            onclick="toggleColumn('second-column')">Consumer
                                                            Goods
                                                            Industries<i
                                                                class="fa-solid fa-chevron-right font-one ps-2"></i></a>
                                                    </div>
                                                    <div class="pt-4">
                                                        <a href="#" class="">Metal Industires<i
                                                                class="fa-solid fa-chevron-right font-one ps-2"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-4 second-column column-transition"
                                                style="display: none;">
                                                <div class="column-header"
                                                    style="border-left: 1px solid var(--border-color)">
                                                    <div class="ps-3">
                                                        <div class="pt-0">
                                                            <a href="#" class="">Helthcare</a>
                                                        </div>
                                                        <div class="pt-4">
                                                            <a href="#" class="expand-column-second"
                                                                onclick="toggleColumn('third-column')">Robots In
                                                                The
                                                                Medical Industry<i
                                                                    class="fa-solid fa-chevron-right font-one ps-2"></i></a>
                                                        </div>
                                                        <div class="pt-4">
                                                            <a href="#" class="">3D Virdtual Showroom</a>
                                                        </div>
                                                        <div class="pt-4">
                                                            <a href="#" class="">Team And Service</a>
                                                        </div>
                                                        <div class="pt-4">
                                                            <a href="#" class="">3D Virdtual Showroom</a>
                                                        </div>
                                                        <div class="pt-4">
                                                            <a href="#" class="expand-column-second"
                                                                onclick="toggleColumn('third-column')">Current
                                                                Topics<i
                                                                    class="fa-solid fa-chevron-right font-one ps-2"></i></a>
                                                        </div>
                                                        <div class="pt-4">
                                                            <a href="#" class="">Swisslog Helthcare</a>
                                                        </div>
                                                        <div class="pt-4">
                                                            <a href="#" class="expand-column-second"
                                                                onclick="toggleColumn('third-column')">Downloads<i
                                                                    class="fa-solid fa-chevron-right font-one ps-2"></i></a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-4 third-column column-transition" style="display: none;">
                                                <div class="column-header"
                                                    style="border-left: 1px solid var(--border-color)">
                                                    <div class="ps-3">
                                                        <div class="pt-4">
                                                            <a href="#" class="">3D Virdtual Showroom</a>
                                                        </div>
                                                        <div class="pt-4">
                                                            <a href="#" class="">Team And Service</a>
                                                        </div>
                                                        <div class="pt-4">
                                                            <a href="#" class="">4D Virdtual Showroom</a>
                                                        </div>
                                                        <div class="pt-4">
                                                            <a href="#" class="">5D Virdtual Showroom</a>
                                                        </div>
                                                        <div class="pt-4">
                                                            <a href="#" class="">6D Virdtual Showroom</a>
                                                        </div>
                                                        <div class="pt-4">
                                                            <a href="#" class="">7D Virdtual Showroom</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link custom-nav" data-aos="fade-right" href="{{ route('rfq') }}">RFQ</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link custom-nav" href="{{ route('contact') }}">Contact Us</a>
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
<script>
    function toggleColumn(columnClassName, linkElement) {
        var column = document.querySelector('.' + columnClassName);
        var columnHeader = column.querySelector('.column-header');

        // Toggle the 'column-transition' class to enable transitions
        column.classList.toggle('column-transition');

        if (column.style.display === 'none' || column.style.display === '') {
            column.style.display = 'block';
            columnHeader.classList.add('active');
        } else {
            column.style.display = 'none';
            columnHeader.classList.remove('active');
        }

        // Remove 'active' class from all other links
        document.querySelectorAll('.column-header a').forEach(function (el) {
            if (el !== linkElement) {
                el.parentElement.classList.remove('active');
            }
        });
    }
</script>