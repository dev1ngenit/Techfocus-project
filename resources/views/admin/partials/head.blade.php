<base href="">
<title>TechFocus | Back Office</title>
<meta charset="utf-8" />
<meta name="description" content="" />
<meta name="keywords" content="" />
<meta name="viewport" content="width=device-width, initial-scale=1" />
<meta name="csrf-token" content="{{ csrf_token() }}" />
<meta property="og:locale" content="en_US" />
<meta property="og:type" content="article" />
<meta property="og:title"
    content="TechFocus" />
<meta property="og:url" content="" />
<meta property="og:site_name" content="TechFocus" />
{{-- @dd($site) --}}
{{-- <link rel="canonical" href="https://preview.keenthemes.com/metronic8" /> --}}
<link rel="shortcut icon" href="{{ !empty($site->site_icon) && file_exists(public_path('storage/webSetting/siteIcon/'. $site->site_icon)) ? asset('storage/webSetting/siteIcon/'. $site->site_icon) : asset('backend/images/no-image-available.png') }}" />
<!--begin::Fonts-->
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" />
<!--end::Fonts-->
<!--begin::Page Vendor Stylesheets(used by this page)-->
<link href="{{ asset('backend/assets/plugins/custom/fullcalendar/fullcalendar.bundle.css') }}" rel="stylesheet"
    type="text/css" />
<link href="{{ asset('backend/assets/plugins/custom/datatables/datatables.bundle.css') }}" rel="stylesheet"
    type="text/css" />
<!--end::Page Vendor Stylesheets-->
<!--begin::Global Stylesheets Bundle(used by all pages)-->
<link href="{{ asset('backend/assets/plugins/global/plugins.bundle.css') }}" rel="stylesheet" type="text/css" />
<link href="{{ asset('backend/assets/css/style.bundle.css') }}" rel="stylesheet" type="text/css" />
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">
<!--end::Global Stylesheets Bundle-->
{{-- <link rel="stylesheet" type="text/css" 
     href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css"> --}}

<!--start::Custom-Shahed-->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-multiselect/1.1.2/css/bootstrap-multiselect.css"/>
<link href="https://cdnjs.cloudflare.com/ajax/libs/x-editable/1.5.0/jquery-editable/css/jquery-editable.css" rel="stylesheet"/>
<link href="{{ asset('backend/assets/css/custom/toastr.css') }}" rel="stylesheet" type="text/css" />
{{-- <link href="{{ asset('backend/assets/css/custom/font-awesome6.css') }}" rel="stylesheet" type="text/css" /> --}}
<!--end::Custom-Shahed-->



<!--New Design WithOut Template Css-->
<link rel="stylesheet" href="{{ asset('backend/assets/css/custom_global.css') }}">
@stack('styles')
