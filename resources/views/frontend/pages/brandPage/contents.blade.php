@extends('frontend.master')
@section('metadata')
@endsection
@section('content')
    @include('frontend.pages.brandPage.partials.page_header')


    <!-- content start -->
    <div class="container">
        <div class="row align-items-center">
            <div class="container px-4">
                <div class="row gx-5">
                    <div class="col-lg-12">
                        <div class="devider-wrap">
                            <h4 class="devider-content mb-4">
                                <span class="devider-text">PRODUCT TRENDS</span>
                            </h4>
                        </div>
                    </div>
                </div>
                <!-- News & Trends Content -->
                <div class="row">
                    <div class="col">
                        <div class="card border-0 card-news-trends">
                            <a href="{{ route('content.details','new-onair-laser-series') }}">
                                <div class="content">
                                    <div class="front">
                                        <img class="im-fluid" width="100%"
                                            src="https://img.directindustry.com/images_di/projects/images-om/156230-18911074.jpg"
                                            alt="...." />
                                        <div class="d-flex align-items-center justify-content-between p-2">
                                            <h2 class="text-center font-four mb-0">New Onair Laser Series</h2>
                                            <!-- Brand Logo -->
                                            <a href="#">
                                                <img class="lazyLoaded logo right"
                                                    src="https://img.directindustry.com/images_di/logo-pp/L62761.gif"
                                                    title="Adicomp Srl" />
                                            </a>
                                        </div>
                                    </div>
                                    <div class="back from-bottom text-start">
                                        <span class="font-three pt-3 text-muted">
                                            Posted on 9/13/2023</span>
                                        <br />
                                        <p class="pt-3 pb-2 m-0 font-three">
                                            HIGH PRESSURE SCREW COMPRESSORS PACKAGE: Single stage up
                                            to 20 Bar
                                        </p>
                                        <p class="subtitles"></p>
                                        <p class="font-three pt-2 pb-3 text-justify">
                                            The LASER series compression units are designed for
                                            intensive use, and are known for their high efficiency.
                                            Compact and quiet, they have been specifically designed
                                            for laser cutting industrial environments, which
                                            therefore require air flow rates at high operating
                                            pressures. Use of the LASER series Onair systems
                                            therefore allows to cut by air, thus avoiding the use of
                                            nit...
                                        </p>
                                        <p class="pt-3 pb-2 m-0 text-center" style="border-top: 1px solid #eee">
                                            <a href="">
                                                <span class="news-link">
                                                    <i class="fa fa-plus-circle me-2"></i>More
                                                    information
                                                </span>
                                            </a>
                                        </p>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="card border-0 card-news-trends">
                            <div class="content">
                                <div class="front">
                                    <img class="im-fluid" width="100%"
                                        src="https://img.directindustry.com/images_di/projects/images-om/155807-18876465.jpg"
                                        alt="...." />
                                    <div class="d-flex align-items-center justify-content-between p-2">
                                        <h2 class="text-center font-four mb-0">New Onair Laser Series</h2>
                                        <!-- Brand Logo -->
                                        <a href="#">
                                            <img class="lazyLoaded logo right"
                                                src="https://img.directindustry.com/images_di/logo-pp/L62761.gif"
                                                title="Adicomp Srl" />
                                        </a>
                                    </div>
                                </div>
                                <div class="back from-bottom text-start">
                                    <span class="font-three pt-3 text-muted">
                                        Posted on 9/13/2023</span>
                                    <br />
                                    <p class="pt-3 pb-2 m-0 font-three">
                                        Single stage up
                                        to 20 Bar
                                    </p>
                                    <p class="subtitles"></p>
                                    <p class="font-three pt-2 pb-3 text-justify">
                                        The LASER series compression units are designed for
                                        intensive use, and are known for their high efficiency.
                                        Compact and quiet, they have been specifically designed
                                        for laser cutting industrial environments, which
                                        therefore require air flow rates at high operating
                                        pressures. Use of the LASER series Onair systems
                                        therefore allows to cut by air, thus avoiding the use of
                                        nit...
                                    </p>
                                    <p class="pt-3 pb-2 m-0 text-center" style="border-top: 1px solid #eee">
                                        <a href="">
                                            <span class="news-link">
                                                <i class="fa fa-plus-circle me-2"></i>More
                                                information
                                            </span>
                                        </a>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="card border-0 card-news-trends">
                            <div class="content">
                                <div class="front">
                                    <img class="im-fluid" width="100%"
                                        src="https://img.directindustry.com/images_di/projects/images-om/156230-18911074.jpg"
                                        alt="...." />
                                    <div class="d-flex align-items-center justify-content-between p-2">
                                        <h2 class="text-center font-four mb-0">New Onair Laser Series</h2>
                                        <!-- Brand Logo -->
                                        <a href="#">
                                            <img class="lazyLoaded logo right"
                                                src="https://img.directindustry.com/images_di/logo-pp/L62761.gif"
                                                title="Adicomp Srl" />
                                        </a>
                                    </div>
                                </div>
                                <div class="back from-bottom text-start">
                                    <span class="font-three pt-3 text-muted">
                                        Posted on 9/13/2023</span>
                                    <br />
                                    <p class="pt-3 pb-2 m-0 font-three">
                                        Single stage up
                                        to 20 Bar
                                    </p>
                                    <p class="subtitles"></p>
                                    <p class="font-three pt-2 pb-3 text-justify">
                                        The LASER series compression units are designed for
                                        intensive use, and are known for their high efficiency.
                                        Compact and quiet, they have been specifically designed
                                        for laser cutting industrial environments, which
                                        therefore require air flow rates at high operating
                                        pressures. Use of the LASER series Onair systems
                                        therefore allows to cut by air, thus avoiding the use of
                                        nit...
                                    </p>
                                    <p class="pt-3 pb-2 m-0 text-center" style="border-top: 1px solid #eee">
                                        <a href="">
                                            <span class="news-link">
                                                <i class="fa fa-plus-circle me-2"></i>More
                                                information
                                            </span>
                                        </a>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="card border-0 card-news-trends">
                            <div class="content">
                                <div class="front">
                                    <img class="im-fluid" width="100%"
                                        src="https://img.directindustry.com/images_di/projects/images-om/155792-18874820.jpg"
                                        alt="...." />
                                    <div class="d-flex align-items-center justify-content-between p-2">
                                        <h2 class="text-center font-four mb-0">New Onair Laser Series</h2>
                                        <!-- Brand Logo -->
                                        <a href="#">
                                            <img class="lazyLoaded logo right"
                                                src="https://img.directindustry.com/images_di/logo-pp/L62761.gif"
                                                title="Adicomp Srl" />
                                        </a>
                                    </div>
                                </div>
                                <div class="back from-bottom text-start">
                                    <span class="font-three pt-3 text-muted">
                                        Posted on 9/13/2023</span>
                                    <br />
                                    <p class="pt-3 pb-2 m-0 font-three">
                                        Single stage up
                                        to 20 Bar
                                    </p>
                                    <p class="subtitles"></p>
                                    <p class="font-three pt-2 pb-3 text-justify">
                                        The LASER series compression units are designed for
                                        intensive use, and are known for their high efficiency.
                                        Compact and quiet, they have been specifically designed
                                        for laser cutting industrial environments, which
                                        therefore require air flow rates at high operating
                                        pressures. Use of the LASER series Onair systems
                                        therefore allows to cut by air, thus avoiding the use of
                                        nit...
                                    </p>
                                    <p class="pt-3 pb-2 m-0 text-center" style="border-top: 1px solid #eee">
                                        <a href="">
                                            <span class="news-link">
                                                <i class="fa fa-plus-circle me-2"></i>More
                                                information
                                            </span>
                                        </a>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- News & Trends Content -->
                <div class="row mt-4">
                    <div class="col-lg-3">
                        <div class="card border-0 card-news-trends">
                            <div class="content">
                                <div class="front">
                                    <img class="im-fluid" width="100%"
                                        src="https://img.directindustry.com/images_di/projects/images-om/156230-18911074.jpg"
                                        alt="...." />
                                    <div class="d-flex align-items-center justify-content-between p-2">
                                        <h2 class="text-center font-four mb-0">New Onair Laser Series</h2>
                                        <!-- Brand Logo -->
                                        <a href="#">
                                            <img class="lazyLoaded logo right"
                                                src="https://img.directindustry.com/images_di/logo-pp/L62761.gif"
                                                title="Adicomp Srl" />
                                        </a>
                                    </div>
                                </div>
                                <div class="back from-bottom text-start">
                                    <span class="font-three pt-3 text-muted">
                                        Posted on 9/13/2023</span>
                                    <br />
                                    <p class="pt-3 pb-2 m-0 font-three">
                                        Single stage up
                                        to 20 Bar
                                    </p>
                                    <p class="subtitles"></p>
                                    <p class="font-three pt-2 pb-3 text-justify">
                                        The LASER series compression units are designed for
                                        intensive use, and are known for their high efficiency.
                                        Compact and quiet, they have been specifically designed
                                        for laser cutting industrial environments, which
                                        therefore require air flow rates at high operating
                                        pressures. Use of the LASER series Onair systems
                                        therefore allows to cut by air, thus avoiding the use of
                                        nit...
                                    </p>
                                    <p class="pt-3 pb-2 m-0 text-center" style="border-top: 1px solid #eee">
                                        <a href="">
                                            <span class="news-link">
                                                <i class="fa fa-plus-circle me-2"></i>More
                                                information
                                            </span>
                                        </a>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="card border-0 card-news-trends">
                            <div class="content">
                                <div class="front">
                                    <img class="im-fluid" width="100%"
                                        src="https://img.directindustry.com/images_di/projects/images-om/155807-18876465.jpg"
                                        alt="...." />
                                    <div class="d-flex align-items-center justify-content-between p-2">
                                        <h2 class="text-center font-four mb-0">New Onair Laser Series</h2>
                                        <!-- Brand Logo -->
                                        <a href="#">
                                            <img class="lazyLoaded logo right"
                                                src="https://img.directindustry.com/images_di/logo-pp/L62761.gif"
                                                title="Adicomp Srl" />
                                        </a>
                                    </div>
                                </div>
                                <div class="back from-bottom text-start">
                                    <span class="font-three pt-3 text-muted">
                                        Posted on 9/13/2023</span>
                                    <br />
                                    <p class="pt-3 pb-2 m-0 font-three">
                                        Single stage up
                                        to 20 Bar
                                    </p>
                                    <p class="subtitles"></p>
                                    <p class="font-three pt-2 pb-3 text-justify">
                                        The LASER series compression units are designed for
                                        intensive use, and are known for their high efficiency.
                                        Compact and quiet, they have been specifically designed
                                        for laser cutting industrial environments, which
                                        therefore require air flow rates at high operating
                                        pressures. Use of the LASER series Onair systems
                                        therefore allows to cut by air, thus avoiding the use of
                                        nit...
                                    </p>
                                    <p class="pt-3 pb-2 m-0 text-center" style="border-top: 1px solid #eee">
                                        <a href="">
                                            <span class="news-link">
                                                <i class="fa fa-plus-circle me-2"></i>More
                                                information
                                            </span>
                                        </a>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="card border-0 card-news-trends">
                            <div class="content">
                                <div class="front">
                                    <img class="im-fluid" width="100%"
                                        src="https://img.directindustry.com/images_di/projects/images-om/156230-18911074.jpg"
                                        alt="...." />
                                    <div class="d-flex align-items-center justify-content-between p-2">
                                        <h2 class="text-center font-four mb-0">New Onair Laser Series</h2>
                                        <!-- Brand Logo -->
                                        <a href="#">
                                            <img class="lazyLoaded logo right"
                                                src="https://img.directindustry.com/images_di/logo-pp/L62761.gif"
                                                title="Adicomp Srl" />
                                        </a>
                                    </div>
                                </div>
                                <div class="back from-bottom text-start">
                                    <span class="font-three pt-3 text-muted">
                                        Posted on 9/13/2023</span>
                                    <br />
                                    <p class="pt-3 pb-2 m-0 font-three">
                                        Single stage up
                                        to 20 Bar
                                    </p>
                                    <p class="subtitles"></p>
                                    <p class="font-three pt-2 pb-3 text-justify">
                                        The LASER series compression units are designed for
                                        intensive use, and are known for their high efficiency.
                                        Compact and quiet, they have been specifically designed
                                        for laser cutting industrial environments, which
                                        therefore require air flow rates at high operating
                                        pressures. Use of the LASER series Onair systems
                                        therefore allows to cut by air, thus avoiding the use of
                                        nit...
                                    </p>
                                    <p class="pt-3 pb-2 m-0 text-center" style="border-top: 1px solid #eee">
                                        <a href="">
                                            <span class="news-link">
                                                <i class="fa fa-plus-circle me-2"></i>More
                                                information
                                            </span>
                                        </a>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="card border-0 card-news-trends">
                            <div class="content">
                                <div class="front">
                                    <img class="im-fluid" width="100%"
                                        src="https://img.directindustry.com/images_di/projects/images-om/155792-18874820.jpg"
                                        alt="...." />
                                    <div class="d-flex align-items-center justify-content-between p-2">
                                        <h2 class="text-center font-four mb-0">New Onair Laser Series</h2>
                                        <!-- Brand Logo -->
                                        <a href="#">
                                            <img class="lazyLoaded logo right"
                                                src="https://img.directindustry.com/images_di/logo-pp/L62761.gif"
                                                title="Adicomp Srl" />
                                        </a>
                                    </div>
                                </div>
                                <div class="back from-bottom text-start">
                                    <span class="font-three pt-3 text-muted">
                                        Posted on 9/13/2023</span>
                                    <br />
                                    <p class="pt-3 pb-2 m-0 font-three">
                                        Single stage up
                                        to 20 Bar
                                    </p>
                                    <p class="subtitles"></p>
                                    <p class="font-three pt-2 pb-3 text-justify">
                                        The LASER series compression units are designed for
                                        intensive use, and are known for their high efficiency.
                                        Compact and quiet, they have been specifically designed
                                        for laser cutting industrial environments, which
                                        therefore require air flow rates at high operating
                                        pressures. Use of the LASER series Onair systems
                                        therefore allows to cut by air, thus avoiding the use of
                                        nit...
                                    </p>
                                    <p class="pt-3 pb-2 m-0 text-center" style="border-top: 1px solid #eee">
                                        <a href="">
                                            <span class="news-link">
                                                <i class="fa fa-plus-circle me-2"></i>More
                                                information
                                            </span>
                                        </a>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container my-5 pt-5">
        <div class="row">
            <div class="col-lg-12">
                <div class="d-flex justify-content-center">
                    <div class="pagination">
                        <a href="#">Previous</a>
                        <span>-</span>
                        <a href="#">1</a>
                        <span>-</span>
                        <a href="#">2</a>
                        <span>-</span>
                        <a href="#">3</a>
                        <span>-</span>
                        <a href="#">4</a>
                        <span>-</span>
                        <a href="#">5</a>
                        <span>-</span>
                        <a href="#">6</a>
                        <span>-</span>
                        <a href="#">7</a>
                        <span>-</span>
                        <a href="#">8</a>
                        <span>-</span>
                        <a href="#">9</a>
                        <span>-</span>
                        <a href="#">10</a>
                        <span>-</span>
                        <a href="#">Next</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row gx-5">
            <div class="col-lg-12">
                <div class="devider-wrap">
                    <h4 class="devider-content mb-4">
                        <span class="devider-text">LOCALIZATION MAP</span>
                    </h4>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <div class="map-container">
                    <img src="http://res.cloudinary.com/slzr/image/upload/v1500321012/world-map-1500_vvekl5.png" />
                    <div class="point venezuela tippy" title="Venezuela"></div>
                    <div class="point brasil tippy" title="Brasil"></div>
                    <div class="point argentina tippy" title="Argentina"></div>
                    <div class="point colombia tippy" title="Colombia"></div>
                    <div class="point panama tippy" title="Panamá"></div>
                    <div class="point mexico tippy" title="Mexico"></div>
                    <div class="point usa tippy" title="Estados Unidos"></div>
                    <div class="point arabia tippy" title="Arabia Saudi"></div>
                    <div class="point turquia tippy" title="Turquía"></div>
                    <div class="point rusia tippy" title="Rusia"></div>
                    <div class="point china tippy" title="China"></div>
                    <div class="point japon tippy" title="Japon"></div>
                    <div class="point australia tippy" title="Australia"></div>
                </div>
            </div>
        </div>
    </div>
@endsection
