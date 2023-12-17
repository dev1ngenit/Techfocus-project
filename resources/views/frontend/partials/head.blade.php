<meta charset="utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1" />
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
<style>
    .container,
    .container-lg,
    .container-md,
    .container-sm,
    .container-xl,
    .container-xxl {
        max-width: 1650px !important;
    }
</style>
@stack('styles')
