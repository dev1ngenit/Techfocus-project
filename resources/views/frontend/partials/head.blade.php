<meta charset="utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1" />
<link rel="shortcut icon" href="{{ !empty($site->site_icon) && file_exists(public_path('storage/webSetting/siteIcon/'. $site->site_icon)) ? asset('storage/webSetting/siteIcon/'. $site->site_icon) : asset('backend/images/no-image-available.png') }}" />
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
<link rel="stylesheet" href="{{ asset('frontend/assets/css/style.css') }}" />
<link rel="stylesheet" href="{{ asset('frontend/assets/css/global.css') }}" />
<link rel="stylesheet" href="{{ asset('frontend/assets/css/responsive.css') }}" />
@stack('styles')
