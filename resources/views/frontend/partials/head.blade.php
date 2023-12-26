<meta charset="utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1" />
<link rel="shortcut icon"
    href="{{ !empty($site->site_icon) && file_exists(public_path('storage/webSetting/siteIcon/' . $site->site_icon)) ? asset('storage/webSetting/siteIcon/' . $site->site_icon) : asset('backend/images/no-image-available.png') }}" />
<title>Tech Focus</title>
@yield('metadata')
<!-- *********************************CSS Start*********************************** -->
<link
    href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,400;0,600;1,400&family=Ubuntu:wght@400;500&display=swap"
    rel="stylesheet" />
<!-- Aos Scroll Animation Start-->
<link rel="stylesheet" href="{{ asset('frontend/assets/css/bootstrap.min.css') }}" />
<link rel="stylesheet" href="{{ asset('frontend/assets/css/swiper-bundle.min.css') }}" />
<link rel="stylesheet" href="{{ asset('frontend/assets/css/aos.css') }}" />
<!-- *********************************CSS End*********************************** -->
@include('frontend.partials.root_css')
<link rel="stylesheet" href="{{ asset('frontend/assets/css/style.css') }}" />
<link rel="stylesheet" href="{{ asset('frontend/assets/css/global.css') }}" />
<link rel="stylesheet" href="{{ asset('frontend/assets/css/responsive.css') }}" />
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/xzoom@1.0.14/src/xzoom.css" />
<link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/fancyapps/fancybox@3.5.7/dist/jquery.fancybox.min.css" />
<link rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/ion-rangeslider/2.3.1/css/ion.rangeSlider.min.css" />
@stack('styles')
