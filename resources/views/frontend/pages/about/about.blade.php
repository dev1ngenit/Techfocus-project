@extends('frontend.master')
@section('metadata')
@endsection
@section('content')
    <style>
        .nav-tabs .nav-link {
            margin-bottom: -3px;
            width: 100%;
            border-left: 3px solid transparent;
            background: none;
            border-top-left-radius: 0;
            border-top-right-radius: 0;
        }

        .nav-tabs .nav-links.active {
            background-color: var(--primary-color);
            width: 100%;
            color: var(--white);
            border-left: 3px solid var(--secondary-color);
            border-top: 0px;
            border-bottom: 0px;
        }

        .nav-links {
            color: black;
        }

        .container,
        .container-lg,
        .container-md,
        .container-sm,
        .container-xl,
        .container-xxl {
            max-width: 1450px;
        }
    </style>
    @dd($brands)
    <section class="ban_sec section_one">
        <div class="container-fluid p-0">
            <div class="ban_img">
                <img src="https://templates.thememodern.com/industris/images/subheader-about.jpg" alt="banner"
                    border="0">
                <div class="ban_text">
                    <strong>
                        About Us
                    </strong>
                    <ul class="d-flex align-items-center ps-0 mt-5">
                        <li class="text-white"><a href="#" class="">Home</a></li>
                        <li class="text-white"><span class="me-2 ms-2">/</span></li>
                        <li class="main-color"><a href="#">About Us</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <section class="section_two">
        <div class="container custom-spacer">
            <div class="row">
                <div class="col-lg-6">
                    <div>
                        <span class="main-color">{{ $aboutPage->section_two_badge }}</span>
                        <div class="mt-lg-2">
                            <h1 class="title fw-bold">{{ $aboutPage->section_two_title_1 }} <span
                                    class="main-color">{{ $aboutPage->section_two_title_span }} </span></h1>
                            <h3 class="py-lg-3">{{ $aboutPage->section_two_subtitle }} </h3>
                            <p class="">{{ $aboutPage->section_two_description }} </p>
                        </div>
                        {{-- <div class="my-lg-5">
                            <p class="mb-0 main-color">Contacting Industris —</p>
                            <p>addresses and information on how best to contact us.</p>
                        </div> --}}
                        <div class="mt-lg-5">
                            <a href="{{ $aboutPage->section_two_button_link }}"
                                class="btn common-btn-3 rounded-0 w-25">{{ $aboutPage->section_two_button_name }} </a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="d-flex justify-content-center">
                        <img class="img-fluid" width="470" height="541"
                            src="{{ !empty($aboutPage->section_two_main_image) && file_exists(public_path('app/public/about-us/' . $aboutPage->section_two_main_image)) ? asset('app/public/about-us/' . $aboutPage->section_two_main_image) : asset('backend/images/no-image-available.png') }}"
                            alt="">
                    </div>
                    <div class="showcase">
                        <img src="{{ !empty($aboutPage->section_two_secondary_image) && file_exists(public_path('app/public/about-us/' . $aboutPage->section_two_secondary_image)) ? asset('app/public/about-us/' . $aboutPage->section_two_secondary_image) : asset('backend/images/no-image-available.png') }}"
                            alt="Picture">
                        <div class="overlay">
                            <h2 class="mb-1">{{ $aboutPage->section_two_secondary_image_count }}</h2>
                            <p>
                                {{ $aboutPage->section_two_secondary_image_title }}
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="section_three">
        <div class="container">
            <ul class="nav nav-tabs row g-2" id="myTab" role="tablist">
                <li class="nav-item col-lg-3 p-3 ps-0" role="presentation">
                    <button class="nav-link nav-links shadow-sm p-4 active" id="home-tab" data-bs-toggle="tab"
                        data-bs-target="#home" type="button" role="tab" aria-controls="home" aria-selected="true">
                        <div class=" text-start">
                            <div>
                                <h3>{{ $aboutPage->section_three_tab_one_title }}</h3>
                                <p>{{ $aboutPage->section_three_tab_one_short_description }}</p>
                            </div>
                        </div>
                    </button>
                </li>
                <li class="nav-item col-lg-3 p-3" role="presentation">
                    <button class="nav-link nav-links shadow-sm p-4" id="profile-tab" data-bs-toggle="tab"
                        data-bs-target="#profile" type="button" role="tab" aria-controls="profile"
                        aria-selected="false">
                        <div class="text-start">
                            <div>
                                <h3>{{ $aboutPage->section_three_tab_two_title }}</h3>
                                <p>{{ $aboutPage->section_three_tab_two_short_description }}</p>
                            </div>
                        </div>
                    </button>
                </li>
                <li class="nav-item col-lg-3 p-3" role="presentation">
                    <button class="nav-link nav-links shadow-sm p-4" id="contact-tab" data-bs-toggle="tab"
                        data-bs-target="#contact" type="button" role="tab" aria-controls="contact"
                        aria-selected="false">
                        <div class="text-start">
                            <div>
                                <h3>{{ $aboutPage->section_three_tab_three_title }}</h3>
                                <p>{{ $aboutPage->section_three_tab_three_short_description }}</p>
                            </div>
                        </div>
                    </button>
                </li>
                <li class="nav-item col-lg-3 p-3 pe-0" role="presentation">
                    <button class="nav-link nav-links shadow-sm p-4" id="contact-tabs" data-bs-toggle="tab"
                        data-bs-target="#contacts" type="button" role="tab" aria-controls="contacts"
                        aria-selected="false">
                        <div class="text-start">
                            <div>
                                <h3>{{ $aboutPage->section_three_tab_four_title }}</h3>
                                <p>{{ $aboutPage->section_three_tab_four_short_description }}</p>
                            </div>
                        </div>
                    </button>
                </li>
            </ul>
            <div class="tab-content custom-spacer" id="myTabContent">
                <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                    <div class="row align-items-center bg-white p-5">
                        <div class="col-lg-7">
                            <h2>{{ $aboutPage->section_three_tab_one_title }}</h2>
                            <p>{{ $aboutPage->section_three_tab_one_detailed_description }}</p>
                            <!-- Optional Button -->
                            @if ($aboutPage->section_three_tab_one_button_name)
                                <div class="pt-4">
                                    <a href="{{ $aboutPage->section_three_tab_one_button_link }}"
                                        class="text-btn main-color">{{ $aboutPage->section_three_tab_one_button_name }} <i
                                            class="fa-solid fa-chevron-right"></i></a>
                                </div>
                            @endif
                        </div>
                        <!-- Optional Quote Section -->
                        @if ($aboutPage->section_three_tab_one_quote)
                            <div class="col-lg-5">
                                <div style="border-top: 1px solid black; border-bottom: 1px solid black">
                                    <div class="p-5">
                                        <h4>{{ $aboutPage->section_three_tab_one_quote }}</h4>
                                        <p><span
                                                class="fw-bold">{{ $aboutPage->section_three_tab_one_quote_author }}</span>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        @else
                            <!-- Optional List Section -->
                            @if ($aboutPage->section_three_tab_one_list_title)
                                <div class="col-lg-5">
                                    <div class="ms-5">
                                        <h4>{{ $aboutPage->section_three_tab_one_list_title }}</h4>
                                        <ul class="ps-2 ms-0">
                                            @if ($aboutPage->section_three_tab_one_list_1)
                                                <li class="pt-3">{{ $aboutPage->section_three_tab_one_list_1 }}</li>
                                            @endif
                                            @if ($aboutPage->section_three_tab_one_list_2)
                                                <li class="pt-3">{{ $aboutPage->section_three_tab_one_list_2 }}</li>
                                            @endif
                                            @if ($aboutPage->section_three_tab_one_list_3)
                                                <li class="pt-3">{{ $aboutPage->section_three_tab_one_list_3 }}</li>
                                            @endif
                                            @if ($aboutPage->section_three_tab_one_list_4)
                                                <li class="pt-3">{{ $aboutPage->section_three_tab_one_list_4 }}</li>
                                            @endif
                                        </ul>
                                    </div>
                                </div>
                            @endif
                        @endif
                    </div>
                </div>
                <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                    <div class="row align-items-center bg-white p-5">
                        <div class="col-lg-7">
                            <h2>{{ $aboutPage->section_three_tab_two_title }}</h2>
                            <p>{{ $aboutPage->section_three_tab_two_detailed_description }}</p>
                            <!-- Optional Button -->
                            @if ($aboutPage->section_three_tab_two_button_name)
                                <div class="pt-4">
                                    <a href="{{ $aboutPage->section_three_tab_two_button_link }}"
                                        class="text-btn main-color">{{ $aboutPage->section_three_tab_two_button_name }} <i
                                            class="fa-solid fa-chevron-right"></i></a>
                                </div>
                            @endif
                        </div>
                        <!-- Optional Quote Section -->
                        @if ($aboutPage->section_three_tab_two_quote)
                            <div class="col-lg-5">
                                <div style="border-top: 1px solid black; border-bottom: 1px solid black">
                                    <div class="p-5">
                                        <h4>{{ $aboutPage->section_three_tab_two_quote }}</h4>
                                        <p><span
                                                class="fw-bold">{{ $aboutPage->section_three_tab_two_quote_author }}</span>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        @else
                            <!-- Optional List Section -->
                            @if ($aboutPage->section_three_tab_two_list_title)
                                <div class="col-lg-5">
                                    <div class="ms-5">
                                        <h4>{{ $aboutPage->section_three_tab_two_list_title }}</h4>
                                        <ul class="ps-2 ms-0">
                                            @if ($aboutPage->section_three_tab_two_list_1)
                                                <li class="pt-3">{{ $aboutPage->section_three_tab_two_list_1 }}</li>
                                            @endif
                                            @if ($aboutPage->section_three_tab_two_list_2)
                                                <li class="pt-3">{{ $aboutPage->section_three_tab_two_list_2 }}</li>
                                            @endif
                                            @if ($aboutPage->section_three_tab_two_list_3)
                                                <li class="pt-3">{{ $aboutPage->section_three_tab_two_list_3 }}</li>
                                            @endif
                                            @if ($aboutPage->section_three_tab_two_list_4)
                                                <li class="pt-3">{{ $aboutPage->section_three_tab_two_list_4 }}</li>
                                            @endif
                                        </ul>
                                    </div>
                                </div>
                            @endif
                        @endif
                    </div>
                </div>
                <div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">
                    <div class="row align-items-center bg-white p-5">
                        <div class="col-lg-7">
                            <h2>{{ $aboutPage->section_three_tab_three_title }}</h2>
                            <p>{{ $aboutPage->section_three_tab_three_detailed_description }}</p>
                            <!-- Optional Button -->
                            @if ($aboutPage->section_three_tab_three_button_name)
                                <div class="pt-4">
                                    <a href="{{ $aboutPage->section_three_tab_three_button_link }}"
                                        class="text-btn main-color">{{ $aboutPage->section_three_tab_three_button_name }}
                                        <i class="fa-solid fa-chevron-right"></i></a>
                                </div>
                            @endif
                        </div>
                        <!-- Optional Quote Section -->
                        @if ($aboutPage->section_three_tab_three_quote)
                            <div class="col-lg-5">
                                <div style="border-top: 1px solid black; border-bottom: 1px solid black">
                                    <div class="p-5">
                                        <h4>{{ $aboutPage->section_three_tab_three_quote }}</h4>
                                        <p><span
                                                class="fw-bold">{{ $aboutPage->section_three_tab_three_quote_author }}</span>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        @else
                            <!-- Optional List Section -->
                            @if ($aboutPage->section_three_tab_three_list_title)
                                <div class="col-lg-5">
                                    <div class="ms-5">
                                        <h4>{{ $aboutPage->section_three_tab_three_list_title }}</h4>
                                        <ul class="ps-2 ms-0">
                                            @if ($aboutPage->section_three_tab_three_list_1)
                                                <li class="pt-3">{{ $aboutPage->section_three_tab_three_list_1 }}</li>
                                            @endif
                                            @if ($aboutPage->section_three_tab_three_list_2)
                                                <li class="pt-3">{{ $aboutPage->section_three_tab_three_list_2 }}</li>
                                            @endif
                                            @if ($aboutPage->section_three_tab_three_list_3)
                                                <li class="pt-3">{{ $aboutPage->section_three_tab_three_list_3 }}</li>
                                            @endif
                                            @if ($aboutPage->section_three_tab_three_list_4)
                                                <li class="pt-3">{{ $aboutPage->section_three_tab_three_list_4 }}</li>
                                            @endif
                                        </ul>
                                    </div>
                                </div>
                            @endif
                        @endif
                    </div>
                </div>
                <div class="tab-pane fade" id="contacts" role="tabpanel" aria-labelledby="contact-tabs">
                    <div class="row align-items-center bg-white p-5">
                        <div class="col-lg-7">
                            <h2>{{ $aboutPage->section_three_tab_four_title }}</h2>
                            <p>{{ $aboutPage->section_three_tab_four_detailed_description }}</p>
                            <!-- Optional Button -->
                            @if ($aboutPage->section_three_tab_four_button_name)
                                <div class="pt-4">
                                    <a href="{{ $aboutPage->section_three_tab_four_button_link }}"
                                        class="text-btn main-color">{{ $aboutPage->section_three_tab_four_button_name }}
                                        <i class="fa-solid fa-chevron-right"></i></a>
                                </div>
                            @endif
                        </div>
                        <!-- Optional Quote Section -->
                        @if ($aboutPage->section_three_tab_four_quote)
                            <div class="col-lg-5">
                                <div style="border-top: 1px solid black; border-bottom: 1px solid black">
                                    <div class="p-5">
                                        <h4>{{ $aboutPage->section_three_tab_four_quote }}</h4>
                                        <p><span
                                                class="fw-bold">{{ $aboutPage->section_three_tab_four_quote_author }}</span>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        @else
                            <!-- Optional List Section -->
                            @if ($aboutPage->section_three_tab_four_list_title)
                                <div class="col-lg-5">
                                    <div class="ms-5">
                                        <h4>{{ $aboutPage->section_three_tab_four_list_title }}</h4>
                                        <ul class="ps-2 ms-0">
                                            @if ($aboutPage->section_three_tab_four_list_1)
                                                <li class="pt-3">{{ $aboutPage->section_three_tab_four_list_1 }}</li>
                                            @endif
                                            @if ($aboutPage->section_three_tab_four_list_2)
                                                <li class="pt-3">{{ $aboutPage->section_three_tab_four_list_2 }}</li>
                                            @endif
                                            @if ($aboutPage->section_three_tab_four_list_3)
                                                <li class="pt-3">{{ $aboutPage->section_three_tab_four_list_3 }}</li>
                                            @endif
                                            @if ($aboutPage->section_three_tab_four_list_4)
                                                <li class="pt-3">{{ $aboutPage->section_three_tab_four_list_4 }}</li>
                                            @endif
                                        </ul>
                                    </div>
                                </div>
                            @endif
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="ban_sec-action section_four">
        <div class="container p-0">
            <div class="ban_img-action">
                <img src="{{ !empty($aboutPage->section_four_banner_middle_image) && file_exists(public_path('app/public/about-us/' . $aboutPage->section_four_banner_middle_image)) ? asset('app/public/about-us/' . $aboutPage->section_four_banner_middle_image) : asset('backend/images/no-image-available.png') }}"
                    alt="banner" border="0">
                <div class="ban_text-action">
                </div>
            </div>
        </div>
    </section>

    <section class="section_five">
        <div class="container custom-spacer">
            <div class="row align-items-center">
                <!-- Column 1 -->
                <div class="col-lg-6" style="border-right: 1px solid var(--secondary-color)">
                    <div class="me-4">
                        <h1 class="pb-5">{{ $aboutPage->section_five_col_one_title }}</h1>
                        <p class="pb-5">{{ $aboutPage->section_five_col_one_description }}</p>
                        <div>
                            @if ($aboutPage->section_five_ceo_sign)
                                <img class="img-fluid" src="{{ $aboutPage->section_five_ceo_sign }}"
                                    alt="CEO Signature">
                            @endif
                        </div>
                        <div class="d-flex">
                            <div class="p-2 pe-3" style="border-right: 1px solid black">
                                <h6 class="mb-0 fw-bold">{{ $aboutPage->section_five_ceo_name }}</h6>
                                <p class="mb-0">{{ $aboutPage->section_five_ceo_designation }}</p>
                            </div>
                            <div class="d-flex align-items-center">
                                @if ($aboutPage->section_five_ceo_facebook_account_link)
                                    <a href="{{ $aboutPage->section_five_ceo_facebook_account_link }}"><i
                                            class="fa-brands fa-square-facebook p-2"></i></a>
                                @endif
                                @if ($aboutPage->section_five_ceo_twitter_account_link)
                                    <a href="{{ $aboutPage->section_five_ceo_twitter_account_link }}"><i
                                            class="fa-brands fa-twitter p-2"></i></a>
                                @endif
                                @if ($aboutPage->section_five_ceo_whatsapp_account_link)
                                    <a href="{{ $aboutPage->section_five_ceo_whatsapp_account_link }}"><i
                                            class="fa-brands fa-whatsapp p-2"></i></a>
                                @endif
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Column 2 -->
                <div class="col-lg-6">
                    <div class="ms-4">
                        <h3>{{ $aboutPage->section_five_col_two_title }}</h3>
                        <p>{{ $aboutPage->section_five_col_two_content }}</p>
                        <ul class="ms-0 ps-0">
                            @if ($aboutPage->section_five_col_two_list_1)
                                <li class="pt-3"><a href=""><i
                                            class="fa-regular fa-circle-check pe-2 main-color"></i>{{ $aboutPage->section_five_col_two_list_1 }}</a>
                                </li>
                            @endif
                            @if ($aboutPage->section_five_col_two_list_2)
                                <li class="pt-3"><a href=""><i
                                            class="fa-regular fa-circle-check pe-2 main-color"></i>{{ $aboutPage->section_five_col_two_list_2 }}</a>
                                </li>
                            @endif
                            @if ($aboutPage->section_five_col_two_list_3)
                                <li class="pt-3"><a href=""><i
                                            class="fa-regular fa-circle-check pe-2 main-color"></i>{{ $aboutPage->section_five_col_two_list_3 }}</a>
                                </li>
                            @endif
                            @if ($aboutPage->section_five_col_two_list_4)
                                <li class="pt-3"><a href=""><i
                                            class="fa-regular fa-circle-check pe-2 main-color"></i>{{ $aboutPage->section_five_col_two_list_4 }}</a>
                                </li>
                            @endif
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="section_six">
        <div class="container px-4 custom-spacer mt-5">
            <div class="row gx-5">
                <!-- Card 1 -->
                <div class="col-lg-3 ps-0">
                    <div class="px-4 py-5 shadow-lg text-center" style="border-bottom: 1px solid var(--primary-color)">
                        @if ($aboutPage->section_six_card_one_icon)
                            <i class="{{ $aboutPage->section_six_card_one_icon }} pe-2 main-color"></i>
                        @endif
                        <h3>{{ $aboutPage->section_six_card_one_title }} {{ $aboutPage->section_six_card_one_count }}</h3>
                        <p>{{ $aboutPage->section_six_card_one_short_description }}</p>
                    </div>
                </div>
                <!-- Card 2 -->
                <div class="col-lg-3 ps-0">
                    <div class="px-4 py-5 shadow-lg text-center" style="border-bottom: 1px solid var(--primary-color)">
                        @if ($aboutPage->section_six_card_two_icon)
                            <i class="{{ $aboutPage->section_six_card_two_icon }} pe-2 main-color"></i>
                        @endif
                        <h3>{{ $aboutPage->section_six_card_two_title }} {{ $aboutPage->section_six_card_two_count }}</h3>
                        <p>{{ $aboutPage->section_six_card_two_short_description }}</p>
                    </div>
                </div>
                <!-- Card 3 -->
                <div class="col-lg-3 ps-0">
                    <div class="px-4 py-5 shadow-lg text-center" style="border-bottom: 1px solid var(--primary-color)">
                        @if ($aboutPage->section_six_card_three_icon)
                            <i class="{{ $aboutPage->section_six_card_three_icon }} pe-2 main-color"></i>
                        @endif
                        <h3>{{ $aboutPage->section_six_card_three_title }} {{ $aboutPage->section_six_card_three_count }}
                        </h3>
                        <p>{{ $aboutPage->section_six_card_three_short_description }}</p>
                    </div>
                </div>
                <!-- Card 4 -->
                <div class="col-lg-3 ps-0 pe-0">
                    <div class="px-4 py-5 shadow-lg text-center" style="border-bottom: 1px solid var(--primary-color)">
                        @if ($aboutPage->section_six_card_four_icon)
                            <i class="{{ $aboutPage->section_six_card_four_icon }} pe-2 main-color"></i>
                        @endif
                        <h3>{{ $aboutPage->section_six_card_four_title }} {{ $aboutPage->section_six_card_four_count }}
                        </h3>
                        <p>{{ $aboutPage->section_six_card_four_short_description }}</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="section_seven">
        <div class="container p-0 custom-spacer pt-5">
            <h2 class="text-center">Our Brands</h2>
            <div class="customer-logos slider">
                @foreach ($brands as $brand)
                    <div class="slide">
                        {{ !empty($brand->logo) && file_exists(public_path('app/public/about-us/' . $brand->logo)) ? asset('app/public/about-us/' . $brand->logo) : asset('backend/images/no-image-available.png') }}
                    </div>
                @endforeach
            </div>
        </div>
    </section>

@endsection

@push('scripts')
    <script>
        $(document).ready(function() {
            $('.customer-logos').slick({
                slidesToShow: 6,
                slidesToScroll: 1,
                autoplay: true,
                autoplaySpeed: 1500,
                arrows: false,
                dots: false,
                pauseOnHover: false,
                responsive: [{
                    breakpoint: 768,
                    settings: {
                        slidesToShow: 4
                    }
                }, {
                    breakpoint: 520,
                    settings: {
                        slidesToShow: 3
                    }
                }]
            });
        });
    </script>
@endpush
