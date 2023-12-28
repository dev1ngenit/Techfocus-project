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
    <section class="ban_sec">
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

    <section>
        <div class="container custom-spacer">
            <div class="row">
                <div class="col-lg-6">
                    <div>
                        <span class="main-color">OUR STORY</span>
                        {{-- About Us Content Ready --}}
                        <div class="mt-lg-2">
                            <h1 class="title fw-bold">Industris <span class="main-color">1994-2019</span></h1>
                            <h3 class="py-lg-3">Making Electric Power Safer, More Reliable, and More Economical</h3>
                            <p class="">We’re Industris, a broad energy company with a proud history. We are 20,000
                                committed colleagues developing oil, gas, wind and solar energy in more than 30
                                countries worldwide. We’re the largest operator in Norway, one of the world’s largest
                                offshore operators, and a growing force in renewables. Driven by our Nordic urge to
                                explore beyond the horizon and dedication to safety, equality and sustainability, we’re
                                developing the energy of the future.</p>
                        </div>
                        <div class="my-lg-5">
                            <p class="mb-0 main-color">Contacting Industris —</p>
                            <p>addresses and information on how best to contact us.</p>
                        </div>
                        <div class="mt-lg-5">
                            <a href="guide.html" class="btn common-btn-3 rounded-0 w-25">Contact Us</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="d-flex justify-content-center">
                        <img class="img-fluid" width="470" height="541"
                            src="https://templates.thememodern.com/industris/images/about-img.jpg" alt="">
                    </div>
                    <div class="showcase">
                        <img src="https://images.unsplash.com/photo-1505410603994-c3ac6269711f?ixlib=rb-1.2.1&auto=format&fit=crop&w=750&q=80"
                            alt="Picture">
                        <div class="overlay">
                            <h2 class="mb-1">24+</h2>
                            <p>
                                Years of Experience
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section>
        <div class="container">
            <ul class="nav nav-tabs row g-2" id="myTab" role="tablist">
                <li class="nav-item col-lg-3 p-3 ps-0" role="presentation">
                    <button class="nav-link nav-links shadow-sm p-4 active" id="home-tab" data-bs-toggle="tab"
                        data-bs-target="#home" type="button" role="tab" aria-controls="home" aria-selected="true">
                        <div class=" text-start">
                            <div>
                                <h3>Our Mission</h3>
                                <p>We work to make electric power safer, more reliable, and more economical.</p>
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
                                <h3>Our Story</h3>
                                <p>Our Story of ownership ensures that our customers always come first.</p>
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
                                <h3>Our Culture</h3>
                                <p>Innovation is at our core, from our very first relay to today’s solutions.</p>
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
                                <h3>Our Leaders</h3>
                                <p>Our leaders are driven by long-standing values and principles</p>
                            </div>
                        </div>
                    </button>
                </li>
            </ul>
            <div class="tab-content custom-spacer" id="myTabContent">
                <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                    <div class="row align-items-center bg-white p-5">
                        <div class="col-lg-7">
                            <div>
                                <h2>Our Mission</h2>
                                <p>Every day, we work to make electric power safer, more reliable, and more economical.
                                    This is something our employee owners take to heart because access to safe,
                                    reliable, and economical electric power improves people’s lives. Our products and
                                    solutions are critical at every stage of the electric power system, preventing
                                    blackouts and improving power system safety and reliability. We are committed to
                                    designing and manufacturing reliable, high-quality products because our customers
                                    rely on them to keep critical systems fully operational, and we stand behind them
                                    100 percent.</p>
                                <div class="pt-4">
                                    <a href="" class="text-btn main-color">Show me how <i
                                            class="fa-solid fa-chevron-right"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-5">
                            <div style="border-top: 1px solid black; border-bottom: 1px solid black">
                                <div class="p-5">
                                    <h4>
                                        “We work daily to succeed at our mission by focusing on innovation, quality, and
                                        customer service. All of us at SEL are proud to serve our industry. Together we
                                        power the future.”
                                    </h4>
                                    <p><span class="fw-bold">Dr. Edmund O. Schweitzer, III</span>
                                        SEL Founder, President, and Chief Technology Officer</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                    <div class="row align-items-center bg-white p-5">
                        <div class="col-lg-7">
                            <div>
                                <h2>Our Story</h2>
                                <p>Innovation is at the heart of SEL. Inspired by his research as a doctoral candidate,
                                    SEL Founder Dr. Edmund O. Schweitzer, III, invented the first microprocessor-based
                                    digital protective relay in 1982: the SEL-21.
                                    This product revolutionized the electric power industry by providing reliable
                                    transmission line protection with fault locating at a much lower cost than
                                    traditional electromechanical relays. Two years later—operating with seven employees
                                    from Dr. Schweitzer’s basement—SEL made its first sale to Otter Tail Power Company
                                    in Fergus Falls, Minnesota. SEL continues to exceed power systems industry
                                    benchmarks through innovative products, integrated solutions, and a world-class
                                    warranty and customer service.</p>
                                <div class="pt-4">
                                    <a href="" class="text-btn main-color">More about SEL history <i
                                            class="fa-solid fa-chevron-right"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-5">
                            <div class="ms-5">
                                <h4>Schweitzer Engineering Laboratories</h4>
                                <ul class="ps-2 ms-0">
                                    <li class="pt-3"><span class="fw-bold">Founder:</span> Dr. Edmund O. Schweitzer, III
                                    </li>
                                    <li class="pt-3"><span class="fw-bold">Founder:</span> Dr. Edmund O. Schweitzer, III
                                    </li>
                                    <li class="pt-3"><span class="fw-bold">Founder:</span> Dr. Edmund O. Schweitzer, III
                                    </li>
                                    <li class="pt-3"><span class="fw-bold">Founder:</span> Dr. Edmund O. Schweitzer, III
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">
                    <div class="row align-items-center bg-white p-5">
                        <div class="col-lg-7">
                            <div>
                                <h2>A Culture of Ownership</h2>
                                <p>SEL is a 100 percent employee-owned company. Shared ownership is a key strategy for
                                    sustained growth, stability, and customer focus. Our employees are our shareholders,
                                    so there’s no short-term pressure to achieve quarterly results at the expense of
                                    what’s best for our customers or company in the long run.

                                    At SEL, we take pride in doing what is right for our employees, customers, and
                                    communities all over the world.

                                    We know our customers do not have to buy another one of our products. Therefore, it
                                    is our job to keep them coming back by providing the highest quality products and
                                    solutions, providing outstanding service, and never stopping at “good enough.” Part
                                    of this driving force comes from the values that define our company and the
                                    principles we live by every day.</p>
                                <div class="pt-4">
                                    <a href="" class="text-btn main-color">Learn more about employee ownership at
                                        SEL <i class="fa-solid fa-chevron-right"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-5">
                            <div style="border-top: 1px solid black; border-bottom: 1px solid black">
                                <div class="p-5">
                                    <h4>
                                        “We work daily to succeed at our mission by focusing on innovation, quality, and
                                        customer service. All of us at SEL are proud to serve our industry. Together we
                                        power the future.”
                                    </h4>
                                    <p><span class="fw-bold">Dr. Edmund O. Schweitzer, III</span>
                                        SEL Founder, President, and Chief Technology Officer</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade" id="contacts" role="tabpanel" aria-labelledby="contact-tabs">
                    <div class="row align-items-center bg-white p-5">
                        <div class="col-lg-7">
                            <div>
                                <h2>Our Leaders</h2>
                                <p>Our leaders share a collective responsibility for quality, innovation, service, and
                                    doing right by our customers, employees, communities, and environment. The SEL
                                    executive leadership team is driven by the same values and principles of operation
                                    that Dr. Schweitzer instilled in the company when he founded it.</p>
                                <div class="pt-4">
                                    <a href="" class="text-btn main-color">Learn more about employee ownership at
                                        SEL <i class="fa-solid fa-chevron-right"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-5">
                            <div class="ms-5">
                                <h4>Schweitzer Engineering Laboratories</h4>
                                <ul class="ps-2 ms-0">
                                    <li class="pt-3"><span class="fw-bold">Founder:</span> Dr. Edmund O. Schweitzer, III
                                    </li>
                                    <li class="pt-3"><span class="fw-bold">Founder:</span> Dr. Edmund O. Schweitzer, III
                                    </li>
                                    <li class="pt-3"><span class="fw-bold">Founder:</span> Dr. Edmund O. Schweitzer, III
                                    </li>
                                    <li class="pt-3"><span class="fw-bold">Founder:</span> Dr. Edmund O. Schweitzer, III
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="ban_sec-action">
        <div class="container p-0">
            <div class="ban_img-action">
                <img src="https://s3.amazonaws.com/thumbnails.venngage.com/template/942a9fe0-01ee-441a-97c0-b9c89b85e0a8.png"
                    alt="banner" border="0">
                <div class="ban_text-action">
                </div>
            </div>
        </div>
    </section>

    <section>
        <div class="container custom-spacer">
            <div class="row align-items-center">
                <div class="col-lg-6" style="border-right: 1px solid var(--secondary-color)">
                    <div class="me-4">
                        <h1 class="pb-5">Our values</h1>
                        <p class="pb-5">We are the leading operator on the Norwegian continental shelf and have
                            substantial
                            international
                            activities. We are engaged in exploration, development and production of oil and gas, as
                            well as
                            wind and solar power. We sell crude oil and are a major supplier of natural gas, with
                            activities
                            in processing, refining, and trading. Our activities are managed through eight business
                            areas,
                            staffs and support divisions, and we have operations in North and South America, Africa,
                            Asia,
                            Europe and Oceania, and Norway.</p>
                        <div>
                            <img class="img-fluid" src="https://templates.thememodern.com/industris/images/sign.png"
                                alt="">
                        </div>
                        <div class="d-flex">
                            <div class="p-2 pe-3" style="border-right: 1px solid black">
                                <h6 class="mb-0 fw-bold">Arya Star</h6>
                                <p class="mb-0">CEO, Founder</p>
                            </div>
                            <div class="d-flex align-items-center">
                                <a href=""><i class="fa-brands fa-square-facebook p-2"></i></a>
                                <a href=""><i class="fa-brands fa-twitter p-2"></i></a>
                                <a href=""><i class="fa-brands fa-whatsapp p-2"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="ms-4">
                        <h3>Why we’re different</h3>
                        <p>As fellow entrepreneurs, we understand the need for space which gives your business room As
                            fellow entrepreneurs, we understand the need for space which gives your business room</p>
                        <ul class="ms-0 ps-0">
                            <li class="pt-3"><a href=""><i
                                        class="fa-regular fa-circle-check pe-2 main-color"></i>Flexible
                                    solutions</a></li>
                            <li class="pt-3"><a href=""><i
                                        class="fa-regular fa-circle-check pe-2 main-color"></i>Flexible
                                    solutions</a></li>
                            <li class="pt-3"><a href=""><i
                                        class="fa-regular fa-circle-check pe-2 main-color"></i>Flexible
                                    solutions</a></li>
                            <li class="pt-3"><a href=""><i
                                        class="fa-regular fa-circle-check pe-2 main-color"></i>Flexible
                                    solutions</a></li>
                            <li class="pt-3"><a href=""><i
                                        class="fa-regular fa-circle-check pe-2 main-color"></i>Flexible
                                    solutions</a></li>
                            <li class="pt-3"><a href=""><i
                                        class="fa-regular fa-circle-check pe-2 main-color"></i>Flexible
                                    solutions</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section>
        <div class="container px-4 custom-spacer mt-5">
            <div class="row gx-5">
                <div class="col-lg-3 ps-0">
                    <div class="px-4 py-5 shadow-lg text-center" style="border-bottom: 1px solid var(--primary-color)">
                        <h3>
                            <i class="fa-solid fa-award pe-2 main-color"></i> Our Awards 12+
                        </h3>
                        <p>Over 25 years with 12 different awards, we are extremely proud of that</p>
                    </div>
                </div>
                <div class="col-lg-3 ps-0">
                    <div class="px-4 py-5 shadow-lg text-center" style="border-bottom: 1px solid var(--primary-color)">
                        <h3>
                            <i class="fa-solid fa-briefcase pe-2 main-color"></i> Awards 12+
                        </h3>
                        <p>More than 100 large and small projects are completed. It is an attempt to work </p>
                    </div>
                </div>
                <div class="col-lg-3 ps-0">
                    <div class="px-4 py-5 shadow-lg text-center" style="border-bottom: 1px solid var(--primary-color)">
                        <h3>
                            <i class="fa-solid fa-user-group pe-2 main-color"></i> Our Awards 12+
                        </h3>
                        <p>The team of more than 1000 engineers and leading experts are working</p>
                    </div>
                </div>
                <div class="col-lg-3 ps-0 pe-0">
                    <div class="px-4 py-5 shadow-lg text-center" style="border-bottom: 1px solid var(--primary-color)">
                        <h3>
                            <i class="fa-solid fa-user-group pe-2 main-color"></i> Our Awards 12+
                        </h3>
                        <p>The team of more than 1000 engineers and leading experts are working</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    
    <section>
        <div class="container p-0 custom-spacer pt-5">
            <h2 class="text-center">Our Partners</h2>
            <div class="customer-logos slider">
                <div class="slide"><img
                        src="https://image.freepik.com/free-vector/luxury-letter-e-logo-design_1017-8903.jpg"></div>
                <div class="slide"><img src="https://image.freepik.com/free-vector/3d-box-logo_1103-876.jpg"></div>
                <div class="slide"><img src="https://image.freepik.com/free-vector/blue-tech-logo_1103-822.jpg"></div>
                <div class="slide"><img
                        src="https://image.freepik.com/free-vector/colors-curl-logo-template_23-2147536125.jpg"></div>
                <div class="slide"><img
                        src="https://image.freepik.com/free-vector/abstract-cross-logo_23-2147536124.jpg">
                </div>
                <div class="slide"><img
                        src="https://image.freepik.com/free-vector/football-logo-background_1195-244.jpg">
                </div>
                <div class="slide"><img
                        src="https://image.freepik.com/free-vector/background-of-spots-halftone_1035-3847.jpg"></div>
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
