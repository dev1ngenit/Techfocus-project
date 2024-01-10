@extends('admin.master')

@section('content')
    <div class="content d-flex flex-column flex-column-fluid mt-13" id="kt_content">
        <div class="toolbar" id="kt_toolbar">
            <div id="kt_toolbar_container" class="container-fluid d-flex flex-stack">
                <div data-kt-swapper="true" data-kt-swapper-mode="prepend"
                    data-kt-swapper-parent="{default: '#kt_content_container', 'lg': '#kt_toolbar_container'}"
                    class="page-title d-flex align-items-center flex-wrap me-3 mb-5 mb-lg-0">
                    <h1 class="d-flex text-dark fw-bolder fs-3 align-items-center my-1">
                        Dashboard
                    </h1>
                </div>
                <div class="d-flex align-items-center gap-2 gap-lg-3">

                </div>
                <div class="d-flex align-items-center gap-2 gap-lg-3">

                    <a href="../../demo1/dist/.html" class="btn btn-sm btn-primary" data-bs-toggle="modal"
                        data-bs-target="#kt_modal_create_app">Create</a>
                </div>
            </div>
        </div>
        <div class="post d-flex flex-column-fluid" id="kt_post">
            <div id="kt_content_container" class="container-fluid">
                <div class="row g-5 g-xl-10">
                    <div class="col-xl-4 mb-xl-10">

                        <div class="card card-flush h-xl-100">
                            <div class="card-header rounded bgi-no-repeat bgi-size-cover bgi-position-y-top bgi-position-x-center align-items-start h-250px"
                                style="background-image:url('{{ asset('backend/assets/media/svg/shapes/top-green.png') }}')"
                                data-bs-theme="light">
                                <h3 class="card-title align-items-start flex-column text-white pt-15">
                                    <span class="fw-bold fs-2x mb-3">Hello, {{ Auth::guard('admin')->user()->name }}</span>

                                    <div class="fs-4 text-white">
                                        <span class="opacity-75">You have</span>

                                        <span class="position-relative d-inline-block">
                                            <a href="/metronic8/demo1/../demo1/pages/user-profile/projects.html"
                                                class="link-white opacity-75-hover fw-bold d-block mb-1">4 tasks</a>

                                            <span
                                                class="position-absolute opacity-50 bottom-0 start-0 border-2 border-body border-bottom w-100"></span>
                                        </span>

                                        <span class="opacity-75">to complete</span>
                                    </div>
                                </h3>

                                <div class="card-toolbar pt-5">
                                    <button
                                        class="btn btn-sm btn-icon btn-active-color-primary btn-color-white bg-white bg-opacity-25 bg-hover-opacity-100 bg-hover-white bg-active-opacity-25 w-20px h-20px"
                                        data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end"
                                        data-kt-menu-overflow="true">
                                        <i class="fa-solid fa-ellipsis fs-4"></i>
                                    </button>


                                    <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-800 menu-state-bg-light-primary fw-semibold w-200px"
                                        data-kt-menu="true">
                                        <div class="menu-item px-3">
                                            <div class="menu-content fs-6 text-gray-900 fw-bold px-3 py-4">Quick Actions
                                            </div>
                                        </div>
                                        <div class="separator mb-3 opacity-75"></div>

                                        <div class="menu-item px-3">
                                            <a href="#" class="menu-link px-3">
                                                Leave Application
                                            </a>
                                        </div>

                                        {{-- <div class="menu-item px-3">
                                            <a href="#" class="menu-link px-3">
                                                New Customer
                                            </a>
                                        </div> --}}

                                        {{-- <div class="menu-item px-3" data-kt-menu-trigger="hover"
                                            data-kt-menu-placement="right-start">
                                            <a href="#" class="menu-link px-3">
                                                <span class="menu-title">New Group</span>
                                                <span class="menu-arrow"></span>
                                            </a>

                                            <div class="menu-sub menu-sub-dropdown w-175px py-4">
                                                <div class="menu-item px-3">
                                                    <a href="#" class="menu-link px-3">
                                                        Admin Group
                                                    </a>
                                                </div>

                                                <div class="menu-item px-3">
                                                    <a href="#" class="menu-link px-3">
                                                        Staff Group
                                                    </a>
                                                </div>

                                                <div class="menu-item px-3">
                                                    <a href="#" class="menu-link px-3">
                                                        Member Group
                                                    </a>
                                                </div>
                                            </div>
                                        </div> --}}



                                        {{-- <div class="separator mt-3 opacity-75"></div>

                                        <div class="menu-item px-3">
                                            <div class="menu-content px-3 py-3">
                                                <a class="btn btn-primary  btn-sm px-4" href="#">
                                                    Generate Reports
                                                </a>
                                            </div>
                                        </div> --}}
                                    </div>

                                </div>
                            </div>

                            <div class="card-body mt-n20">
                                <div class="mt-n20 position-relative">
                                    <div class="row g-3 g-lg-6">
                                        <div class="col-6">
                                            <div class="bg-gray-100 bg-opacity-70 rounded-2 px-6 py-5">
                                                <div class="symbol symbol-30px me-5 mb-3">
                                                    <span class="symbol-label">
                                                        <i class="fa-solid fa-clock fs-1 text-primary"></i>
                                                    </span>
                                                </div>

                                                <div class="m-0">
                                                    <span class="text-gray-700 fw-bolder d-block fs-4 lh-1 ls-n1 mb-1">
                                                        <div id="live-clock">
                                                            <span id="live-clock-hours">0</span> hours
                                                            <span id="live-clock-minutes">0</span> minutes
                                                            <span id="live-clock-seconds">0</span> seconds
                                                        </div>
                                                    </span>

                                                    <span class="text-gray-500 fw-semibold fs-6">Your Office Time
                                                        (Today)</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-6">
                                            <div class="bg-gray-100 bg-opacity-70 rounded-2 px-6 py-5">
                                                <div class="m-0 mb-3">
                                                    <span
                                                        class="text-gray-700 fw-bolder d-block fs-2qx lh-1 ls-n1 mb-1">{{ !empty($attendanceToday['check_in']) ? $attendanceToday['check_in'] : 'Absent' }}</span>

                                                    <span class="text-gray-500 fw-semibold fs-6">Today's Entry </span>
                                                </div>
                                                <div class="m-0">
                                                    <span
                                                        class="text-gray-700 fw-bolder d-block fs-2qx lh-1 ls-n1 mb-1">{{ !empty($attendanceToday['check_out']) ? $attendanceToday['check_out'] : 'Absent' }}</span>

                                                    <span class="text-gray-500 fw-semibold fs-6">Today's Check-Out</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-6">
                                            <div class="bg-gray-100 bg-opacity-70 rounded-2 px-6 py-5">
                                                <div class="symbol symbol-30px me-5 mb-3">
                                                    <span class="symbol-label">
                                                        <img class="h-30px" src="{{asset('backend/images/Late Time.png')}}" alt="">
                                                    </span>
                                                </div>

                                                <div class="m-0">
                                                    <a href="#"
                                                        class="card-title fw-bolder text-danger text-hover-primary fs-7"
                                                        data-bs-toggle="modal" data-bs-target="#lateCount">
                                                        <span
                                                            class="text-gray-700 fw-bolder d-block fs-2qx lh-1 ls-n1 mb-1">
                                                            {{ !empty(count($lateCounts)) ? count($lateCounts) : 0 }}
                                                        </span>
                                                        <span class="text-gray-500 fw-semibold fs-7">Late Count(This Month)</span>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-6">
                                            <div class="bg-gray-100 bg-opacity-70 rounded-2 px-6 py-5">
                                                <div class="symbol symbol-30px me-5 mb-2">
                                                    <div>
                                                        <a href="#"
                                                            class="card-title fw-bolder main_color text-hover-primary fs-8"
                                                            data-bs-toggle="modal" data-bs-target="#thisMonth">
                                                            <span class="text-start">This Month</span> <span
                                                                class="ms-3"><i class="fas fa-arrow-right"></i></span>
                                                        </a>
                                                    </div>
                                                    <a href="#"
                                                        class="card-title fw-bolder main_color text-hover-primary fs-8"
                                                        data-bs-toggle="modal" data-bs-target="#lastMonth">
                                                        <span class="">Last Month</span> <span class="ms-3"><i
                                                                class="fas fa-arrow-right"></i></span>
                                                    </a>
                                                    @include('admin.partials.attendance_modals')
                                                </div>
                                                <div class="m-0">
                                                    <span
                                                        class="text-gray-700 fw-bolder d-block fs-2qx lh-1 ls-n1 mb-1"></span>

                                                    <span class="text-gray-500 fw-semibold fs-6">Attendance List</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row g-3 g-lg-6 pt-10">
                                        <div class="card-header pt-5 pb-5 align-items-center border-bottom">
                                            <div>
                                                <h4 class="card-title d-flex align-items-start flex-column">
                                                    <span class="card-label fw-bold text-gray-800">Leave Application Status</span>
                                                </h4>
                                            </div>
                                            <div>
                                                <a class="btn btn-sm btn-icon btn-active-color-primary btn-color-white bg-white bg-opacity-25 bg-hover-opacity-100 bg-hover-white bg-active-opacity-25 w-20px h-20px"
                                                    data-kt-menu-placement="bottom-end" data-bs-toggle="modal"
                                                    data-bs-target="#createAgenda">
                                                    <i class="fa-solid fa-circle-plus fs-2 text-success"></i>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-xl-8 mb-5 mb-xl-10">
                        <div class="row g-5 g-xl-10">
                            <div class="col-xl-6 mb-xl-10">
                                <div class="card card-flash">
                                    <div class="card-header pt-5 pb-5 align-items-center border-bottom">
                                        <div>
                                            <h4 class="card-title d-flex align-items-start flex-column">
                                                <span class="card-label fw-bold text-gray-800">Today’s Agendas</span>
                                            </h4>
                                        </div>
                                        <div>
                                            <a class="btn btn-sm btn-icon btn-active-color-primary btn-color-white bg-white bg-opacity-25 bg-hover-opacity-100 bg-hover-white bg-active-opacity-25 w-20px h-20px"
                                                data-kt-menu-placement="bottom-end" data-bs-toggle="modal"
                                                data-bs-target="#createAgenda">
                                                <i class="fa-solid fa-circle-plus fs-2 text-success"></i>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="card-body pt-5 h-lg-250px overflow-y-scroll">
                                        @if (count($agendas) > 0) 
                                            @foreach ($agendas as $agenda) 
                                                <div class="d-flex align-items-center mb-8">
                                                    <span class="bullet bullet-vertical h-40px bg-dark"></span>
                                                    <div class="form-check form-check-custom form-check-solid mx-5">
                                                        <input class="form-check-input bg-emerald-500" type="checkbox"
                                                            value="">
                                                    </div>
                                                    <div class="flex-grow-1">
                                                        <a href="#"
                                                            class="text-gray-800 text-hover-primary fw-bold fs-6">{{ $agenda->task_name }}</a>
                                                        {{-- <span class="text-muted fw-semibold d-block">Due in 2 Days</span> --}}
                                                    </div>
                                                    <a href="#">
                                                        <span class="badge badge-success fs-8 fw-bold rounded-0">Convert <br> to
                                                            Task</span>
                                                    </a>
                                                </div>
                                            @endforeach
                                        @endif
                                    </div>
                                </div>
                                <div class="card card-flash">
                                    <div class="card-header pt-5 pb-5 align-items-center border-bottom">
                                        <div>
                                            <h4 class="card-title d-flex align-items-start flex-column">
                                                <span class="card-label fw-bold text-gray-800">Today’s Tasks</span>
                                            </h4>
                                        </div>
                                        <div>
                                            <a class="btn btn-sm btn-icon btn-active-color-primary btn-color-white bg-white bg-opacity-25 bg-hover-opacity-100 bg-hover-white bg-active-opacity-25 w-20px h-20px"
                                                data-kt-menu-placement="bottom-end" data-bs-toggle="modal"
                                                data-bs-target="#createAgenda">
                                                <i class="fa-solid fa-circle-plus fs-2 text-success"></i>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="card-body pt-5 h-lg-325px overflow-y-scroll">
                                        @if (count($agendas) > 0) 
                                            @foreach ($agendas as $agenda) 
                                                <div class="d-flex align-items-center mb-8">
                                                    <span class="bullet bullet-vertical h-40px bg-dark"></span>
                                                    <div class="form-check form-check-custom form-check-solid mx-5">
                                                        <input class="form-check-input bg-emerald-500" type="checkbox"
                                                            value="">
                                                    </div>
                                                    <div class="flex-grow-1">
                                                        <a href="#"
                                                            class="text-gray-800 text-hover-primary fw-bold fs-6">{{ $agenda->task_name }}</a>
                                                        {{-- <span class="text-muted fw-semibold d-block">Due in 2 Days</span> --}}
                                                    </div>
                                                    <a href="#">
                                                        <span class="badge badge-success fs-8 fw-bold rounded-0">Convert <br> to
                                                            Task</span>
                                                    </a>
                                                </div>
                                            @endforeach
                                        @endif
                                    </div>
                                </div>
                            </div>

                            <div class="col-xl-6 mb-5 mb-xl-10">
                                <div id="kt_sliders_widget_2_slider"
                                    class="card card-flush carousel carousel-custom carousel-stretch slide h-xl-100"
                                    data-bs-ride="carousel" data-bs-interval="5500">
                                    <div class="card-header pt-5">
                                        <h4 class="card-title d-flex align-items-start flex-column">
                                            <span class="card-label fw-bold text-gray-800">Today’s Events</span>
                                            <span class="text-gray-500 mt-1 fw-bold fs-7">24 events on all
                                                activities</span>
                                        </h4>

                                        <div class="card-toolbar">
                                            <ol
                                                class="p-0 m-0 carousel-indicators carousel-indicators-bullet carousel-indicators-active-success">
                                                <li data-bs-target="#kt_sliders_widget_2_slider" data-bs-slide-to="0"
                                                    class="ms-1 active" aria-current="true"></li>
                                                <li data-bs-target="#kt_sliders_widget_2_slider" data-bs-slide-to="1"
                                                    class="ms-1"></li>
                                                <li data-bs-target="#kt_sliders_widget_2_slider" data-bs-slide-to="2"
                                                    class="ms-1"></li>

                                            </ol>
                                        </div>
                                    </div>

                                    <div class="card-body py-6">
                                        <div class="carousel-inner">
                                            <div class="carousel-item show active">
                                                <div class="d-flex align-items-center mb-9">
                                                    <div class="symbol symbol-70px symbol-circle me-5">
                                                        <span class="symbol-label bg-light-success">
                                                            <i class="ki-duotone ki-abstract-24 fs-3x text-success"><span
                                                                    class="path1"></span><span class="path2"></span></i>
                                                        </span>
                                                    </div>

                                                    <div class="m-0">
                                                        <h4 class="fw-bold text-gray-800 mb-3">Ruby on Rails</h4>

                                                        <div class="d-flex d-grid gap-5">
                                                            <div class="d-flex flex-column flex-shrink-0 me-4">
                                                                <span
                                                                    class="d-flex align-items-center fs-7 fw-bold text-gray-500 mb-2">
                                                                    <i
                                                                        class="ki-duotone ki-right-square fs-6 text-gray-600 me-2"><span
                                                                            class="path1"></span><span
                                                                            class="path2"></span></i> 5 Topics
                                                                </span>

                                                                <span
                                                                    class="d-flex align-items-center text-gray-500 fw-bold fs-7">
                                                                    <i
                                                                        class="ki-duotone ki-right-square fs-6 text-gray-600 me-2"><span
                                                                            class="path1"></span><span
                                                                            class="path2"></span></i> 1 Speakers
                                                                </span>
                                                            </div>

                                                            <div class="d-flex flex-column flex-shrink-0">
                                                                <span
                                                                    class="d-flex align-items-center fs-7 fw-bold text-gray-500 mb-2">
                                                                    <i
                                                                        class="ki-duotone ki-right-square fs-6 text-gray-600 me-2"><span
                                                                            class="path1"></span><span
                                                                            class="path2"></span></i> 60 Min
                                                                </span>

                                                                <span
                                                                    class="d-flex align-items-center text-gray-500 fw-bold fs-7">
                                                                    <i
                                                                        class="ki-duotone ki-right-square fs-6 text-gray-600 me-2"><span
                                                                            class="path1"></span><span
                                                                            class="path2"></span></i> 137 students
                                                                </span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="m-0">
                                                    <a href="#" class="btn btn-sm btn-light me-2 mb-2">Details</a>

                                                    <a href="#" class="btn btn-sm btn-success mb-2"
                                                        data-bs-toggle="modal"
                                                        data-bs-target="#kt_modal_create_campaign">Join Event</a>
                                                </div>
                                            </div>
                                            <div class="carousel-item">
                                                <div class="d-flex align-items-center mb-9">
                                                    <div class="symbol symbol-70px symbol-circle me-5">
                                                        <span class="symbol-label bg-light-danger">
                                                            <i class="ki-duotone ki-abstract-25 fs-3x text-danger"><span
                                                                    class="path1"></span><span class="path2"></span></i>
                                                        </span>
                                                    </div>

                                                    <div class="m-0">
                                                        <h4 class="fw-bold text-gray-800 mb-3">Ruby on Rails</h4>

                                                        <div class="d-flex d-grid gap-5">
                                                            <div class="d-flex flex-column flex-shrink-0 me-4">
                                                                <span
                                                                    class="d-flex align-items-center fs-7 fw-bold text-gray-500 mb-2">
                                                                    <i
                                                                        class="ki-duotone ki-right-square fs-6 text-gray-600 me-2"><span
                                                                            class="path1"></span><span
                                                                            class="path2"></span></i> 12 Topics
                                                                </span>

                                                                <span
                                                                    class="d-flex align-items-center text-gray-500 fw-bold fs-7">
                                                                    <i
                                                                        class="ki-duotone ki-right-square fs-6 text-gray-600 me-2"><span
                                                                            class="path1"></span><span
                                                                            class="path2"></span></i> 1 Speakers
                                                                </span>
                                                            </div>

                                                            <div class="d-flex flex-column flex-shrink-0">
                                                                <span
                                                                    class="d-flex align-items-center fs-7 fw-bold text-gray-500 mb-2">
                                                                    <i
                                                                        class="ki-duotone ki-right-square fs-6 text-gray-600 me-2"><span
                                                                            class="path1"></span><span
                                                                            class="path2"></span></i> 50 Min
                                                                </span>

                                                                <span
                                                                    class="d-flex align-items-center text-gray-500 fw-bold fs-7">
                                                                    <i
                                                                        class="ki-duotone ki-right-square fs-6 text-gray-600 me-2"><span
                                                                            class="path1"></span><span
                                                                            class="path2"></span></i> 72 students
                                                                </span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="m-0">
                                                    <a href="#" class="btn btn-sm btn-light me-2 mb-2">Details</a>

                                                    <a href="#" class="btn btn-sm btn-success mb-2"
                                                        data-bs-toggle="modal"
                                                        data-bs-target="#kt_modal_create_campaign">Join Event</a>
                                                </div>
                                            </div>
                                            <div class="carousel-item">
                                                <div class="d-flex align-items-center mb-9">
                                                    <div class="symbol symbol-70px symbol-circle me-5">
                                                        <span class="symbol-label bg-light-primary">
                                                            <i class="ki-duotone ki-abstract-36 fs-3x text-primary"><span
                                                                    class="path1"></span><span class="path2"></span></i>
                                                        </span>
                                                    </div>

                                                    <div class="m-0">
                                                        <h4 class="fw-bold text-gray-800 mb-3">Ruby on Rails</h4>

                                                        <div class="d-flex d-grid gap-5">
                                                            <div class="d-flex flex-column flex-shrink-0 me-4">
                                                                <span
                                                                    class="d-flex align-items-center fs-7 fw-bold text-gray-500 mb-2">
                                                                    <i
                                                                        class="ki-duotone ki-right-square fs-6 text-gray-600 me-2"><span
                                                                            class="path1"></span><span
                                                                            class="path2"></span></i> 3 Topics
                                                                </span>

                                                                <span
                                                                    class="d-flex align-items-center text-gray-500 fw-bold fs-7">
                                                                    <i
                                                                        class="ki-duotone ki-right-square fs-6 text-gray-600 me-2"><span
                                                                            class="path1"></span><span
                                                                            class="path2"></span></i> 1 Speakers
                                                                </span>
                                                            </div>

                                                            <div class="d-flex flex-column flex-shrink-0">
                                                                <span
                                                                    class="d-flex align-items-center fs-7 fw-bold text-gray-500 mb-2">
                                                                    <i
                                                                        class="ki-duotone ki-right-square fs-6 text-gray-600 me-2"><span
                                                                            class="path1"></span><span
                                                                            class="path2"></span></i> 50 Min
                                                                </span>

                                                                <span
                                                                    class="d-flex align-items-center text-gray-500 fw-bold fs-7">
                                                                    <i
                                                                        class="ki-duotone ki-right-square fs-6 text-gray-600 me-2"><span
                                                                            class="path1"></span><span
                                                                            class="path2"></span></i> 72 students
                                                                </span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="m-0">
                                                    <a href="#" class="btn btn-sm btn-light me-2 mb-2">Details</a>

                                                    <a href="#" class="btn btn-sm btn-success mb-2"
                                                        data-bs-toggle="modal"
                                                        data-bs-target="#kt_modal_create_campaign">Join Event</a>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>



                    </div>
                </div>
                <div class="row gy-5 g-xl-8">
                    <div class="col-xl-5">
                        <div class="card bgi-no-repeat mb-xl-8"
                            style="background-position: right top; background-size: 30% auto; background-image: url({{ asset('backend/assets/media/svg/shapes/abstract-4.svg') }}">
                            <div class="card-body">
                                <div class="row">

                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3">
                        <div class="card bgi-no-repeat mb-xl-8"
                            style="background-position: right top; background-size: 30% auto; background-image: url({{ asset('backend/assets/media/svg/shapes/abstract-4.svg') }}">
                            <div class="card-body px-3">
                                <div class="d-flex align-items-center justify-content-center">

                                </div>
                                <a href="#" class="card-title fw-bolder text-black text-hover-primary fs-6">
                                    <span class="text-start w-xl-225px"></span> <span class="text-end ms-3"></span>
                                </a>
                                <div class="my-2">
                                    <a href="#" class="card-title fw-bolder text-black text-hover-primary fs-7">
                                        <span class="text-start w-xl-225px"></span> <span class="text-end ms-3"></span>
                                    </a>
                                </div>
                                <a href="#" class="card-title fw-bolder text-danger text-hover-primary fs-7"
                                    data-bs-toggle="modal" data-bs-target="#lateCount">
                                    <span class="text-start w-xl-225px">Late Count (This Month) :</span> <span
                                        class="text-end ms-3"></span>
                                </a>
                                <div class="mt-2 d-flex justify-content-between align-items-center">

                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4">
                        <div class="card card-xl-stretch-50 mb-5 mb-xl-8">
                            <div class="card-body d-flex flex-column p-0">
                                <div class="flex-grow-1 card-p pb-0">
                                    <div class="d-flex flex-stack flex-wrap">
                                        <div class="me-2">
                                            <a href="#" class="text-dark text-hover-primary fw-bolder fs-3">Generate
                                                Reports</a>
                                            <div class="text-muted fs-7 fw-bold">Finance and accounting reports</div>
                                        </div>
                                        <div class="fw-bolder fs-3 text-primary">$24,500</div>
                                    </div>
                                </div>
                                <div class="mixed-widget-7-chart card-rounded-bottom" data-kt-chart-color="primary"
                                    style="height: 150px"></div>
                            </div>
                        </div>
                        <div class="card card-xl-stretch-50 mb-5 mb-xl-8">
                            <div class="card-body p-0 d-flex justify-content-between flex-column overflow-hidden">
                                <div class="d-flex flex-stack flex-wrap flex-grow-1 px-9 pt-9 pb-3">
                                    <div class="me-2">
                                        <span class="fw-bolder text-gray-800 d-block fs-3">Sales</span>
                                        <span class="text-gray-400 fw-bold">Oct 8 - Oct 26 22</span>
                                    </div>
                                    <div class="fw-bolder fs-3 text-primary">$15,300</div>
                                </div>
                                <div class="mixed-widget-10-chart" data-kt-color="primary" style="height: 175px"></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4">
                        <div class="card card-xl-stretch mb-xl-8">
                            <div class="card-header border-0">
                                <h3 class="card-title fw-bolder text-dark">Notifications</h3>
                                <div class="card-toolbar">
                                    <button type="button"
                                        class="btn btn-sm btn-icon btn-color-primary btn-active-light-primary"
                                        data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
                                        <span class="svg-icon svg-icon-2">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24px" height="24px"
                                                viewBox="0 0 24 24">
                                                <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                    <rect x="5" y="5" width="5" height="5" rx="1"
                                                        fill="currentColor" />
                                                    <rect x="14" y="5" width="5" height="5" rx="1"
                                                        fill="currentColor" opacity="0.3" />
                                                    <rect x="5" y="14" width="5" height="5" rx="1"
                                                        fill="currentColor" opacity="0.3" />
                                                    <rect x="14" y="14" width="5" height="5" rx="1"
                                                        fill="currentColor" opacity="0.3" />
                                                </g>
                                            </svg>
                                        </span>
                                    </button>
                                    <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-800 menu-state-bg-light-primary fw-bold w-200px py-3"
                                        data-kt-menu="true">
                                        <div class="menu-item px-3">
                                            <div class="menu-content text-muted pb-2 px-3 fs-7 text-uppercase">Payments
                                            </div>
                                        </div>
                                        <div class="menu-item px-3">
                                            <a href="#" class="menu-link px-3">Create Invoice</a>
                                        </div>
                                        <div class="menu-item px-3">
                                            <a href="#" class="menu-link flex-stack px-3">Create Payment
                                                <i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip"
                                                    title="Specify a target name for future usage and reference"></i></a>
                                        </div>
                                        <div class="menu-item px-3">
                                            <a href="#" class="menu-link px-3">Generate Bill</a>
                                        </div>
                                        <div class="menu-item px-3" data-kt-menu-trigger="hover"
                                            data-kt-menu-placement="right-end">
                                            <a href="#" class="menu-link px-3">
                                                <span class="menu-title">Subscription</span>
                                                <span class="menu-arrow"></span>
                                            </a>
                                            <div class="menu-sub menu-sub-dropdown w-175px py-4">
                                                <div class="menu-item px-3">
                                                    <a href="#" class="menu-link px-3">Plans</a>
                                                </div>
                                                <div class="menu-item px-3">
                                                    <a href="#" class="menu-link px-3">Billing</a>
                                                </div>
                                                <div class="menu-item px-3">
                                                    <a href="#" class="menu-link px-3">Statements</a>
                                                </div>
                                                <div class="separator my-2"></div>
                                                <div class="menu-item px-3">
                                                    <div class="menu-content px-3">
                                                        <label
                                                            class="form-check form-switch form-check-custom form-check-solid">
                                                            <input class="form-check-input w-30px h-20px" type="checkbox"
                                                                value="1" checked="checked" name="notifications" />
                                                            <span class="form-check-label text-muted fs-6">Recuring</span>
                                                        </label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="menu-item px-3 my-1">
                                            <a href="#" class="menu-link px-3">Settings</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card-body pt-0">
                                <div class="d-flex align-items-center bg-light-warning rounded p-5 mb-7">
                                    <span class="svg-icon svg-icon-warning me-5">
                                        <span class="svg-icon svg-icon-1">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                viewBox="0 0 24 24" fill="none">
                                                <path opacity="0.3"
                                                    d="M21.25 18.525L13.05 21.825C12.35 22.125 11.65 22.125 10.95 21.825L2.75 18.525C1.75 18.125 1.75 16.725 2.75 16.325L4.04999 15.825L10.25 18.325C10.85 18.525 11.45 18.625 12.05 18.625C12.65 18.625 13.25 18.525 13.85 18.325L20.05 15.825L21.35 16.325C22.35 16.725 22.35 18.125 21.25 18.525ZM13.05 16.425L21.25 13.125C22.25 12.725 22.25 11.325 21.25 10.925L13.05 7.62502C12.35 7.32502 11.65 7.32502 10.95 7.62502L2.75 10.925C1.75 11.325 1.75 12.725 2.75 13.125L10.95 16.425C11.65 16.725 12.45 16.725 13.05 16.425Z"
                                                    fill="currentColor" />
                                                <path
                                                    d="M11.05 11.025L2.84998 7.725C1.84998 7.325 1.84998 5.925 2.84998 5.525L11.05 2.225C11.75 1.925 12.45 1.925 13.15 2.225L21.35 5.525C22.35 5.925 22.35 7.325 21.35 7.725L13.05 11.025C12.45 11.325 11.65 11.325 11.05 11.025Z"
                                                    fill="currentColor" />
                                            </svg>
                                        </span>
                                    </span>
                                    <div class="flex-grow-1 me-2">
                                        <a href="#" class="fw-bolder text-gray-800 text-hover-primary fs-6">Group
                                            lunch celebration</a>
                                        <span class="text-muted fw-bold d-block">Due in 2 Days</span>
                                    </div>
                                    <span class="fw-bolder text-warning py-1">+28%</span>
                                </div>
                                <div class="d-flex align-items-center bg-light-success rounded p-5 mb-7">
                                    <span class="svg-icon svg-icon-success me-5">
                                        <span class="svg-icon svg-icon-1">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                viewBox="0 0 24 24" fill="none">
                                                <path opacity="0.3"
                                                    d="M21.25 18.525L13.05 21.825C12.35 22.125 11.65 22.125 10.95 21.825L2.75 18.525C1.75 18.125 1.75 16.725 2.75 16.325L4.04999 15.825L10.25 18.325C10.85 18.525 11.45 18.625 12.05 18.625C12.65 18.625 13.25 18.525 13.85 18.325L20.05 15.825L21.35 16.325C22.35 16.725 22.35 18.125 21.25 18.525ZM13.05 16.425L21.25 13.125C22.25 12.725 22.25 11.325 21.25 10.925L13.05 7.62502C12.35 7.32502 11.65 7.32502 10.95 7.62502L2.75 10.925C1.75 11.325 1.75 12.725 2.75 13.125L10.95 16.425C11.65 16.725 12.45 16.725 13.05 16.425Z"
                                                    fill="currentColor" />
                                                <path
                                                    d="M11.05 11.025L2.84998 7.725C1.84998 7.325 1.84998 5.925 2.84998 5.525L11.05 2.225C11.75 1.925 12.45 1.925 13.15 2.225L21.35 5.525C22.35 5.925 22.35 7.325 21.35 7.725L13.05 11.025C12.45 11.325 11.65 11.325 11.05 11.025Z"
                                                    fill="currentColor" />
                                            </svg>
                                        </span>
                                    </span>
                                    <div class="flex-grow-1 me-2">
                                        <a href="#"
                                            class="fw-bolder text-gray-800 text-hover-primary fs-6">Navigation
                                            optimization</a>
                                        <span class="text-muted fw-bold d-block">Due in 2 Days</span>
                                    </div>
                                    <span class="fw-bolder text-success py-1">+50%</span>
                                </div>
                                <div class="d-flex align-items-center bg-light-danger rounded p-5 mb-7">
                                    <span class="svg-icon svg-icon-danger me-5">
                                        <span class="svg-icon svg-icon-1">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                viewBox="0 0 24 24" fill="none">
                                                <path opacity="0.3"
                                                    d="M21.25 18.525L13.05 21.825C12.35 22.125 11.65 22.125 10.95 21.825L2.75 18.525C1.75 18.125 1.75 16.725 2.75 16.325L4.04999 15.825L10.25 18.325C10.85 18.525 11.45 18.625 12.05 18.625C12.65 18.625 13.25 18.525 13.85 18.325L20.05 15.825L21.35 16.325C22.35 16.725 22.35 18.125 21.25 18.525ZM13.05 16.425L21.25 13.125C22.25 12.725 22.25 11.325 21.25 10.925L13.05 7.62502C12.35 7.32502 11.65 7.32502 10.95 7.62502L2.75 10.925C1.75 11.325 1.75 12.725 2.75 13.125L10.95 16.425C11.65 16.725 12.45 16.725 13.05 16.425Z"
                                                    fill="currentColor" />
                                                <path
                                                    d="M11.05 11.025L2.84998 7.725C1.84998 7.325 1.84998 5.925 2.84998 5.525L11.05 2.225C11.75 1.925 12.45 1.925 13.15 2.225L21.35 5.525C22.35 5.925 22.35 7.325 21.35 7.725L13.05 11.025C12.45 11.325 11.65 11.325 11.05 11.025Z"
                                                    fill="currentColor" />
                                            </svg>
                                        </span>
                                    </span>
                                    <div class="flex-grow-1 me-2">
                                        <a href="#" class="fw-bolder text-gray-800 text-hover-primary fs-6">Rebrand
                                            strategy
                                            planning</a>
                                        <span class="text-muted fw-bold d-block">Due in 5 Days</span>
                                    </div>
                                    <span class="fw-bolder text-danger py-1">-27%</span>
                                </div>
                                <div class="d-flex align-items-center bg-light-info rounded p-5">
                                    <span class="svg-icon svg-icon-info me-5">
                                        <span class="svg-icon svg-icon-1">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                viewBox="0 0 24 24" fill="none">
                                                <path opacity="0.3"
                                                    d="M21.25 18.525L13.05 21.825C12.35 22.125 11.65 22.125 10.95 21.825L2.75 18.525C1.75 18.125 1.75 16.725 2.75 16.325L4.04999 15.825L10.25 18.325C10.85 18.525 11.45 18.625 12.05 18.625C12.65 18.625 13.25 18.525 13.85 18.325L20.05 15.825L21.35 16.325C22.35 16.725 22.35 18.125 21.25 18.525ZM13.05 16.425L21.25 13.125C22.25 12.725 22.25 11.325 21.25 10.925L13.05 7.62502C12.35 7.32502 11.65 7.32502 10.95 7.62502L2.75 10.925C1.75 11.325 1.75 12.725 2.75 13.125L10.95 16.425C11.65 16.725 12.45 16.725 13.05 16.425Z"
                                                    fill="currentColor" />
                                                <path
                                                    d="M11.05 11.025L2.84998 7.725C1.84998 7.325 1.84998 5.925 2.84998 5.525L11.05 2.225C11.75 1.925 12.45 1.925 13.15 2.225L21.35 5.525C22.35 5.925 22.35 7.325 21.35 7.725L13.05 11.025C12.45 11.325 11.65 11.325 11.05 11.025Z"
                                                    fill="currentColor" />
                                            </svg>
                                        </span>
                                    </span>
                                    <div class="flex-grow-1 me-2">
                                        <a href="#" class="fw-bolder text-gray-800 text-hover-primary fs-6">Product
                                            goals
                                            strategy</a>
                                        <span class="text-muted fw-bold d-block">Due in 7 Days</span>
                                    </div>
                                    <span class="fw-bolder text-info py-1">+8%</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>


                <div class="row g-5 g-xl-8">
                    <div class="col-xl-4">
                        <div class="card card-xxl-stretch mb-xl-8">
                            <div class="card-header border-0 py-5">
                                <h3 class="card-title align-items-start flex-column">
                                    <span class="card-label fw-bolder fs-3 mb-1">Trends</span>
                                    <span class="text-muted fw-bold fs-7">Latest trends</span>
                                </h3>
                                <div class="card-toolbar">
                                    <button type="button"
                                        class="btn btn-sm btn-icon btn-color-primary btn-active-light-primary"
                                        data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
                                        <span class="svg-icon svg-icon-2">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24px" height="24px"
                                                viewBox="0 0 24 24">
                                                <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                    <rect x="5" y="5" width="5" height="5" rx="1"
                                                        fill="currentColor" />
                                                    <rect x="14" y="5" width="5" height="5" rx="1"
                                                        fill="currentColor" opacity="0.3" />
                                                    <rect x="5" y="14" width="5" height="5" rx="1"
                                                        fill="currentColor" opacity="0.3" />
                                                    <rect x="14" y="14" width="5" height="5" rx="1"
                                                        fill="currentColor" opacity="0.3" />
                                                </g>
                                            </svg>
                                        </span>
                                    </button>
                                    <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-800 menu-state-bg-light-primary fw-bold w-200px py-3"
                                        data-kt-menu="true">
                                        <div class="menu-item px-3">
                                            <div class="menu-content text-muted pb-2 px-3 fs-7 text-uppercase">Payments
                                            </div>
                                        </div>
                                        <div class="menu-item px-3">
                                            <a href="#" class="menu-link px-3">Create Invoice</a>
                                        </div>
                                        <div class="menu-item px-3">
                                            <a href="#" class="menu-link flex-stack px-3">Create Payment
                                                <i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip"
                                                    title="Specify a target name for future usage and reference"></i></a>
                                        </div>
                                        <div class="menu-item px-3">
                                            <a href="#" class="menu-link px-3">Generate Bill</a>
                                        </div>
                                        <div class="menu-item px-3" data-kt-menu-trigger="hover"
                                            data-kt-menu-placement="right-end">
                                            <a href="#" class="menu-link px-3">
                                                <span class="menu-title">Subscription</span>
                                                <span class="menu-arrow"></span>
                                            </a>
                                            <div class="menu-sub menu-sub-dropdown w-175px py-4">
                                                <div class="menu-item px-3">
                                                    <a href="#" class="menu-link px-3">Plans</a>
                                                </div>
                                                <div class="menu-item px-3">
                                                    <a href="#" class="menu-link px-3">Billing</a>
                                                </div>
                                                <div class="menu-item px-3">
                                                    <a href="#" class="menu-link px-3">Statements</a>
                                                </div>
                                                <div class="separator my-2"></div>
                                                <div class="menu-item px-3">
                                                    <div class="menu-content px-3">
                                                        <label
                                                            class="form-check form-switch form-check-custom form-check-solid">
                                                            <input class="form-check-input w-30px h-20px" type="checkbox"
                                                                value="1" checked="checked" name="notifications" />
                                                            <span class="form-check-label text-muted fs-6">Recuring</span>
                                                        </label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="menu-item px-3 my-1">
                                            <a href="#" class="menu-link px-3">Settings</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card-body d-flex flex-column">
                                <div class="mixed-widget-5-chart card-rounded-top" data-kt-chart-color="success"
                                    style="height: 150px"></div>
                                <div class="mt-5">
                                    <div class="d-flex flex-stack mb-5">
                                        <div class="d-flex align-items-center me-2">
                                            <div class="symbol symbol-50px me-3">
                                                <div class="symbol-label bg-light">
                                                    <img src="{{ asset('backend') }}/assets/media/svg/brand-logos/plurk.svg"
                                                        class="h-50" alt="" />
                                                </div>
                                            </div>
                                            <div>
                                                <a href="#"
                                                    class="fs-6 text-gray-800 text-hover-primary fw-bolder">Top
                                                    Authors</a>
                                                <div class="fs-7 text-muted fw-bold mt-1">Ricky Hunt, Sandra Trepp</div>
                                            </div>
                                        </div>
                                        <div class="badge badge-light fw-bold py-4 px-3">+82$</div>
                                    </div>
                                    <div class="d-flex flex-stack mb-5">
                                        <div class="d-flex align-items-center me-2">
                                            <div class="symbol symbol-50px me-3">
                                                <div class="symbol-label bg-light">
                                                    <img src="{{ asset('backend') }}/assets/media/svg/brand-logos/figma-1.svg"
                                                        class="h-50" alt="" />
                                                </div>
                                            </div>
                                            <div>
                                                <a href="#"
                                                    class="fs-6 text-gray-800 text-hover-primary fw-bolder">Top Sales</a>
                                                <div class="fs-7 text-muted fw-bold mt-1">PitStop Emails</div>
                                            </div>
                                        </div>
                                        <div class="badge badge-light fw-bold py-4 px-3">+82$</div>
                                    </div>
                                    <div class="d-flex flex-stack">
                                        <div class="d-flex align-items-center me-2">
                                            <div class="symbol symbol-50px me-3">
                                                <div class="symbol-label bg-light">
                                                    <img src="{{ asset('backend') }}/assets/media/svg/brand-logos/vimeo.svg"
                                                        class="h-50" alt="" />
                                                </div>
                                            </div>
                                            <div class="py-1">
                                                <a href="#"
                                                    class="fs-6 text-gray-800 text-hover-primary fw-bolder">Top
                                                    Engagement</a>
                                                <div class="fs-7 text-muted fw-bold mt-1">KT.com</div>
                                            </div>
                                        </div>
                                        <div class="badge badge-light fw-bold py-4 px-3">+82$</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-8">
                        <div class="card card-xxl-stretch mb-5 mb-xl-8">
                            <div class="card-header border-0 pt-5">
                                <h3 class="card-title align-items-start flex-column">
                                    <span class="card-label fw-bolder fs-3 mb-1">Latest Products</span>
                                    <span class="text-muted mt-1 fw-bold fs-7">More than 400 new products</span>
                                </h3>
                                <div class="card-toolbar">
                                    <ul class="nav">
                                        <li class="nav-item">
                                            <a class="nav-link btn btn-sm btn-color-muted btn-active btn-active-secondary fw-bolder px-4 me-1 active"
                                                data-bs-toggle="tab" href="#kt_table_widget_5_tab_1">Month</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link btn btn-sm btn-color-muted btn-active btn-active-secondary fw-bolder px-4 me-1"
                                                data-bs-toggle="tab" href="#kt_table_widget_5_tab_2">Week</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link btn btn-sm btn-color-muted btn-active btn-active-secondary fw-bolder px-4"
                                                data-bs-toggle="tab" href="#kt_table_widget_5_tab_3">Day</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="card-body py-3">
                                <div class="tab-content">
                                    <div class="tab-pane fade show active" id="kt_table_widget_5_tab_1">
                                        <div class="table-responsive">
                                            <table
                                                class="table table-row-dashed table-row-gray-200 align-middle gs-0 gy-4">
                                                <thead>
                                                    <tr class="border-0">
                                                        <th class="p-0 w-50px"></th>
                                                        <th class="p-0 min-w-150px"></th>
                                                        <th class="p-0 min-w-140px"></th>
                                                        <th class="p-0 min-w-110px"></th>
                                                        <th class="p-0 min-w-50px"></th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td>
                                                            <div class="symbol symbol-45px me-2">
                                                                <span class="symbol-label">
                                                                    <img src="{{ asset('backend') }}/assets/media/svg/brand-logos/plurk.svg"
                                                                        class="h-50 align-self-center" alt="" />
                                                                </span>
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <a href="#"
                                                                class="text-dark fw-bolder text-hover-primary mb-1 fs-6">Brad
                                                                Simmons</a>
                                                            <span class="text-muted fw-bold d-block">Movie Creator</span>
                                                        </td>
                                                        <td class="text-end text-muted fw-bold">React, HTML</td>
                                                        <td class="text-end">
                                                            <span class="badge badge-light-success">Approved</span>
                                                        </td>
                                                        <td class="text-end">
                                                            <a href="#"
                                                                class="btn btn-sm btn-icon btn-bg-light btn-active-color-primary">
                                                                <span class="svg-icon svg-icon-2">
                                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                                        height="24" viewBox="0 0 24 24"
                                                                        fill="none">
                                                                        <rect opacity="0.5" x="18" y="13" width="13"
                                                                            height="2" rx="1"
                                                                            transform="rotate(-180 18 13)"
                                                                            fill="currentColor" />
                                                                        <path
                                                                            d="M15.4343 12.5657L11.25 16.75C10.8358 17.1642 10.8358 17.8358 11.25 18.25C11.6642 18.6642 12.3358 18.6642 12.75 18.25L18.2929 12.7071C18.6834 12.3166 18.6834 11.6834 18.2929 11.2929L12.75 5.75C12.3358 5.33579 11.6642 5.33579 11.25 5.75C10.8358 6.16421 10.8358 6.83579 11.25 7.25L15.4343 11.4343C15.7467 11.7467 15.7467 12.2533 15.4343 12.5657Z"
                                                                            fill="currentColor" />
                                                                    </svg>
                                                                </span>
                                                            </a>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <div class="symbol symbol-45px me-2">
                                                                <span class="symbol-label">
                                                                    <img src="{{ asset('backend') }}/assets/media/svg/brand-logos/telegram.svg"
                                                                        class="h-50 align-self-center" alt="" />
                                                                </span>
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <a href="#"
                                                                class="text-dark fw-bolder text-hover-primary mb-1 fs-6">Popular
                                                                Authors</a>
                                                            <span class="text-muted fw-bold d-block">Most
                                                                Successful</span>
                                                        </td>
                                                        <td class="text-end text-muted fw-bold">Python, MySQL</td>
                                                        <td class="text-end">
                                                            <span class="badge badge-light-warning">In Progress</span>
                                                        </td>
                                                        <td class="text-end">
                                                            <a href="#"
                                                                class="btn btn-sm btn-icon btn-bg-light btn-active-color-primary">
                                                                <span class="svg-icon svg-icon-2">
                                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                                        height="24" viewBox="0 0 24 24"
                                                                        fill="none">
                                                                        <rect opacity="0.5" x="18" y="13" width="13"
                                                                            height="2" rx="1"
                                                                            transform="rotate(-180 18 13)"
                                                                            fill="currentColor" />
                                                                        <path
                                                                            d="M15.4343 12.5657L11.25 16.75C10.8358 17.1642 10.8358 17.8358 11.25 18.25C11.6642 18.6642 12.3358 18.6642 12.75 18.25L18.2929 12.7071C18.6834 12.3166 18.6834 11.6834 18.2929 11.2929L12.75 5.75C12.3358 5.33579 11.6642 5.33579 11.25 5.75C10.8358 6.16421 10.8358 6.83579 11.25 7.25L15.4343 11.4343C15.7467 11.7467 15.7467 12.2533 15.4343 12.5657Z"
                                                                            fill="currentColor" />
                                                                    </svg>
                                                                </span>
                                                            </a>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <div class="symbol symbol-45px me-2">
                                                                <span class="symbol-label">
                                                                    <img src="{{ asset('backend') }}/assets/media/svg/brand-logos/vimeo.svg"
                                                                        class="h-50 align-self-center" alt="" />
                                                                </span>
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <a href="#"
                                                                class="text-dark fw-bolder text-hover-primary mb-1 fs-6">New
                                                                Users</a>
                                                            <span class="text-muted fw-bold d-block">Awesome Users</span>
                                                        </td>
                                                        <td class="text-end text-muted fw-bold">Laravel,Metronic</td>
                                                        <td class="text-end">
                                                            <span class="badge badge-light-primary">Success</span>
                                                        </td>
                                                        <td class="text-end">
                                                            <a href="#"
                                                                class="btn btn-sm btn-icon btn-bg-light btn-active-color-primary">
                                                                <span class="svg-icon svg-icon-2">
                                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                                        height="24" viewBox="0 0 24 24"
                                                                        fill="none">
                                                                        <rect opacity="0.5" x="18" y="13" width="13"
                                                                            height="2" rx="1"
                                                                            transform="rotate(-180 18 13)"
                                                                            fill="currentColor" />
                                                                        <path
                                                                            d="M15.4343 12.5657L11.25 16.75C10.8358 17.1642 10.8358 17.8358 11.25 18.25C11.6642 18.6642 12.3358 18.6642 12.75 18.25L18.2929 12.7071C18.6834 12.3166 18.6834 11.6834 18.2929 11.2929L12.75 5.75C12.3358 5.33579 11.6642 5.33579 11.25 5.75C10.8358 6.16421 10.8358 6.83579 11.25 7.25L15.4343 11.4343C15.7467 11.7467 15.7467 12.2533 15.4343 12.5657Z"
                                                                            fill="currentColor" />
                                                                    </svg>
                                                                </span>
                                                            </a>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <div class="symbol symbol-45px me-2">
                                                                <span class="symbol-label">
                                                                    <img src="{{ asset('backend') }}/assets/media/svg/brand-logos/bebo.svg"
                                                                        class="h-50 align-self-center" alt="" />
                                                                </span>
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <a href="#"
                                                                class="text-dark fw-bolder text-hover-primary mb-1 fs-6">Active
                                                                Customers</a>
                                                            <span class="text-muted fw-bold d-block">Movie Creator</span>
                                                        </td>
                                                        <td class="text-end text-muted fw-bold">AngularJS, C#</td>
                                                        <td class="text-end">
                                                            <span class="badge badge-light-danger">Rejected</span>
                                                        </td>
                                                        <td class="text-end">
                                                            <a href="#"
                                                                class="btn btn-sm btn-icon btn-bg-light btn-active-color-primary">
                                                                <span class="svg-icon svg-icon-2">
                                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                                        height="24" viewBox="0 0 24 24"
                                                                        fill="none">
                                                                        <rect opacity="0.5" x="18" y="13" width="13"
                                                                            height="2" rx="1"
                                                                            transform="rotate(-180 18 13)"
                                                                            fill="currentColor" />
                                                                        <path
                                                                            d="M15.4343 12.5657L11.25 16.75C10.8358 17.1642 10.8358 17.8358 11.25 18.25C11.6642 18.6642 12.3358 18.6642 12.75 18.25L18.2929 12.7071C18.6834 12.3166 18.6834 11.6834 18.2929 11.2929L12.75 5.75C12.3358 5.33579 11.6642 5.33579 11.25 5.75C10.8358 6.16421 10.8358 6.83579 11.25 7.25L15.4343 11.4343C15.7467 11.7467 15.7467 12.2533 15.4343 12.5657Z"
                                                                            fill="currentColor" />
                                                                    </svg>
                                                                </span>
                                                            </a>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <div class="symbol symbol-45px me-2">
                                                                <span class="symbol-label">
                                                                    <img src="{{ asset('backend') }}/assets/media/svg/brand-logos/kickstarter.svg"
                                                                        class="h-50 align-self-center" alt="" />
                                                                </span>
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <a href="#"
                                                                class="text-dark fw-bolder text-hover-primary mb-1 fs-6">Bestseller
                                                                Theme</a>
                                                            <span class="text-muted fw-bold d-block">Best Customers</span>
                                                        </td>
                                                        <td class="text-end text-muted fw-bold">ReactJS, Ruby</td>
                                                        <td class="text-end">
                                                            <span class="badge badge-light-warning">In Progress</span>
                                                        </td>
                                                        <td class="text-end">
                                                            <a href="#"
                                                                class="btn btn-sm btn-icon btn-bg-light btn-active-color-primary">
                                                                <span class="svg-icon svg-icon-2">
                                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                                        height="24" viewBox="0 0 24 24"
                                                                        fill="none">
                                                                        <rect opacity="0.5" x="18" y="13" width="13"
                                                                            height="2" rx="1"
                                                                            transform="rotate(-180 18 13)"
                                                                            fill="currentColor" />
                                                                        <path
                                                                            d="M15.4343 12.5657L11.25 16.75C10.8358 17.1642 10.8358 17.8358 11.25 18.25C11.6642 18.6642 12.3358 18.6642 12.75 18.25L18.2929 12.7071C18.6834 12.3166 18.6834 11.6834 18.2929 11.2929L12.75 5.75C12.3358 5.33579 11.6642 5.33579 11.25 5.75C10.8358 6.16421 10.8358 6.83579 11.25 7.25L15.4343 11.4343C15.7467 11.7467 15.7467 12.2533 15.4343 12.5657Z"
                                                                            fill="currentColor" />
                                                                    </svg>
                                                                </span>
                                                            </a>
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="kt_table_widget_5_tab_2">
                                        <div class="table-responsive">
                                            <table
                                                class="table table-row-dashed table-row-gray-200 align-middle gs-0 gy-4">
                                                <thead>
                                                    <tr class="border-0">
                                                        <th class="p-0 w-50px"></th>
                                                        <th class="p-0 min-w-150px"></th>
                                                        <th class="p-0 min-w-140px"></th>
                                                        <th class="p-0 min-w-110px"></th>
                                                        <th class="p-0 min-w-50px"></th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td>
                                                            <div class="symbol symbol-45px me-2">
                                                                <span class="symbol-label">
                                                                    <img src="{{ asset('backend') }}/assets/media/svg/brand-logos/plurk.svg"
                                                                        class="h-50 align-self-center" alt="" />
                                                                </span>
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <a href="#"
                                                                class="text-dark fw-bolder text-hover-primary mb-1 fs-6">Brad
                                                                Simmons</a>
                                                            <span class="text-muted fw-bold d-block">Movie Creator</span>
                                                        </td>
                                                        <td class="text-end text-muted fw-bold">React, HTML</td>
                                                        <td class="text-end">
                                                            <span class="badge badge-light-success">Approved</span>
                                                        </td>
                                                        <td class="text-end">
                                                            <a href="#"
                                                                class="btn btn-sm btn-icon btn-bg-light btn-active-color-primary">
                                                                <span class="svg-icon svg-icon-2">
                                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                                        height="24" viewBox="0 0 24 24"
                                                                        fill="none">
                                                                        <rect opacity="0.5" x="18" y="13" width="13"
                                                                            height="2" rx="1"
                                                                            transform="rotate(-180 18 13)"
                                                                            fill="currentColor" />
                                                                        <path
                                                                            d="M15.4343 12.5657L11.25 16.75C10.8358 17.1642 10.8358 17.8358 11.25 18.25C11.6642 18.6642 12.3358 18.6642 12.75 18.25L18.2929 12.7071C18.6834 12.3166 18.6834 11.6834 18.2929 11.2929L12.75 5.75C12.3358 5.33579 11.6642 5.33579 11.25 5.75C10.8358 6.16421 10.8358 6.83579 11.25 7.25L15.4343 11.4343C15.7467 11.7467 15.7467 12.2533 15.4343 12.5657Z"
                                                                            fill="currentColor" />
                                                                    </svg>
                                                                </span>
                                                            </a>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <div class="symbol symbol-45px me-2">
                                                                <span class="symbol-label">
                                                                    <img src="{{ asset('backend') }}/assets/media/svg/brand-logos/telegram.svg"
                                                                        class="h-50 align-self-center" alt="" />
                                                                </span>
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <a href="#"
                                                                class="text-dark fw-bolder text-hover-primary mb-1 fs-6">Popular
                                                                Authors</a>
                                                            <span class="text-muted fw-bold d-block">Most
                                                                Successful</span>
                                                        </td>
                                                        <td class="text-end text-muted fw-bold">Python, MySQL</td>
                                                        <td class="text-end">
                                                            <span class="badge badge-light-warning">In Progress</span>
                                                        </td>
                                                        <td class="text-end">
                                                            <a href="#"
                                                                class="btn btn-sm btn-icon btn-bg-light btn-active-color-primary">
                                                                <span class="svg-icon svg-icon-2">
                                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                                        height="24" viewBox="0 0 24 24"
                                                                        fill="none">
                                                                        <rect opacity="0.5" x="18" y="13" width="13"
                                                                            height="2" rx="1"
                                                                            transform="rotate(-180 18 13)"
                                                                            fill="currentColor" />
                                                                        <path
                                                                            d="M15.4343 12.5657L11.25 16.75C10.8358 17.1642 10.8358 17.8358 11.25 18.25C11.6642 18.6642 12.3358 18.6642 12.75 18.25L18.2929 12.7071C18.6834 12.3166 18.6834 11.6834 18.2929 11.2929L12.75 5.75C12.3358 5.33579 11.6642 5.33579 11.25 5.75C10.8358 6.16421 10.8358 6.83579 11.25 7.25L15.4343 11.4343C15.7467 11.7467 15.7467 12.2533 15.4343 12.5657Z"
                                                                            fill="currentColor" />
                                                                    </svg>
                                                                </span>
                                                            </a>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <div class="symbol symbol-45px me-2">
                                                                <span class="symbol-label">
                                                                    <img src="{{ asset('backend') }}/assets/media/svg/brand-logos/bebo.svg"
                                                                        class="h-50 align-self-center" alt="" />
                                                                </span>
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <a href="#"
                                                                class="text-dark fw-bolder text-hover-primary mb-1 fs-6">Active
                                                                Customers</a>
                                                            <span class="text-muted fw-bold d-block">Movie Creator</span>
                                                        </td>
                                                        <td class="text-end text-muted fw-bold">AngularJS, C#</td>
                                                        <td class="text-end">
                                                            <span class="badge badge-light-danger">Rejected</span>
                                                        </td>
                                                        <td class="text-end">
                                                            <a href="#"
                                                                class="btn btn-sm btn-icon btn-bg-light btn-active-color-primary">
                                                                <span class="svg-icon svg-icon-2">
                                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                                        height="24" viewBox="0 0 24 24"
                                                                        fill="none">
                                                                        <rect opacity="0.5" x="18" y="13" width="13"
                                                                            height="2" rx="1"
                                                                            transform="rotate(-180 18 13)"
                                                                            fill="currentColor" />
                                                                        <path
                                                                            d="M15.4343 12.5657L11.25 16.75C10.8358 17.1642 10.8358 17.8358 11.25 18.25C11.6642 18.6642 12.3358 18.6642 12.75 18.25L18.2929 12.7071C18.6834 12.3166 18.6834 11.6834 18.2929 11.2929L12.75 5.75C12.3358 5.33579 11.6642 5.33579 11.25 5.75C10.8358 6.16421 10.8358 6.83579 11.25 7.25L15.4343 11.4343C15.7467 11.7467 15.7467 12.2533 15.4343 12.5657Z"
                                                                            fill="currentColor" />
                                                                    </svg>
                                                                </span>
                                                            </a>
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="kt_table_widget_5_tab_3">
                                        <div class="table-responsive">
                                            <table
                                                class="table table-row-dashed table-row-gray-200 align-middle gs-0 gy-4">
                                                <thead>
                                                    <tr class="border-0">
                                                        <th class="p-0 w-50px"></th>
                                                        <th class="p-0 min-w-150px"></th>
                                                        <th class="p-0 min-w-140px"></th>
                                                        <th class="p-0 min-w-110px"></th>
                                                        <th class="p-0 min-w-50px"></th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td>
                                                            <div class="symbol symbol-45px me-2">
                                                                <span class="symbol-label">
                                                                    <img src="{{ asset('backend') }}/assets/media/svg/brand-logos/kickstarter.svg"
                                                                        class="h-50 align-self-center" alt="" />
                                                                </span>
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <a href="#"
                                                                class="text-dark fw-bolder text-hover-primary mb-1 fs-6">Bestseller
                                                                Theme</a>
                                                            <span class="text-muted fw-bold d-block">Best Customers</span>
                                                        </td>
                                                        <td class="text-end text-muted fw-bold">ReactJS, Ruby</td>
                                                        <td class="text-end">
                                                            <span class="badge badge-light-warning">In Progress</span>
                                                        </td>
                                                        <td class="text-end">
                                                            <a href="#"
                                                                class="btn btn-sm btn-icon btn-bg-light btn-active-color-primary">
                                                                <span class="svg-icon svg-icon-2">
                                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                                        height="24" viewBox="0 0 24 24"
                                                                        fill="none">
                                                                        <rect opacity="0.5" x="18" y="13" width="13"
                                                                            height="2" rx="1"
                                                                            transform="rotate(-180 18 13)"
                                                                            fill="currentColor" />
                                                                        <path
                                                                            d="M15.4343 12.5657L11.25 16.75C10.8358 17.1642 10.8358 17.8358 11.25 18.25C11.6642 18.6642 12.3358 18.6642 12.75 18.25L18.2929 12.7071C18.6834 12.3166 18.6834 11.6834 18.2929 11.2929L12.75 5.75C12.3358 5.33579 11.6642 5.33579 11.25 5.75C10.8358 6.16421 10.8358 6.83579 11.25 7.25L15.4343 11.4343C15.7467 11.7467 15.7467 12.2533 15.4343 12.5657Z"
                                                                            fill="currentColor" />
                                                                    </svg>
                                                                </span>
                                                            </a>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <div class="symbol symbol-45px me-2">
                                                                <span class="symbol-label">
                                                                    <img src="{{ asset('backend') }}/assets/media/svg/brand-logos/bebo.svg"
                                                                        class="h-50 align-self-center" alt="" />
                                                                </span>
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <a href="#"
                                                                class="text-dark fw-bolder text-hover-primary mb-1 fs-6">Active
                                                                Customers</a>
                                                            <span class="text-muted fw-bold d-block">Movie Creator</span>
                                                        </td>
                                                        <td class="text-end text-muted fw-bold">AngularJS, C#</td>
                                                        <td class="text-end">
                                                            <span class="badge badge-light-danger">Rejected</span>
                                                        </td>
                                                        <td class="text-end">
                                                            <a href="#"
                                                                class="btn btn-sm btn-icon btn-bg-light btn-active-color-primary">
                                                                <span class="svg-icon svg-icon-2">
                                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                                        height="24" viewBox="0 0 24 24"
                                                                        fill="none">
                                                                        <rect opacity="0.5" x="18" y="13" width="13"
                                                                            height="2" rx="1"
                                                                            transform="rotate(-180 18 13)"
                                                                            fill="currentColor" />
                                                                        <path
                                                                            d="M15.4343 12.5657L11.25 16.75C10.8358 17.1642 10.8358 17.8358 11.25 18.25C11.6642 18.6642 12.3358 18.6642 12.75 18.25L18.2929 12.7071C18.6834 12.3166 18.6834 11.6834 18.2929 11.2929L12.75 5.75C12.3358 5.33579 11.6642 5.33579 11.25 5.75C10.8358 6.16421 10.8358 6.83579 11.25 7.25L15.4343 11.4343C15.7467 11.7467 15.7467 12.2533 15.4343 12.5657Z"
                                                                            fill="currentColor" />
                                                                    </svg>
                                                                </span>
                                                            </a>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <div class="symbol symbol-45px me-2">
                                                                <span class="symbol-label">
                                                                    <img src="{{ asset('backend') }}/assets/media/svg/brand-logos/vimeo.svg"
                                                                        class="h-50 align-self-center" alt="" />
                                                                </span>
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <a href="#"
                                                                class="text-dark fw-bolder text-hover-primary mb-1 fs-6">New
                                                                Users</a>
                                                            <span class="text-muted fw-bold d-block">Awesome Users</span>
                                                        </td>
                                                        <td class="text-end text-muted fw-bold">Laravel,Metronic</td>
                                                        <td class="text-end">
                                                            <span class="badge badge-light-primary">Success</span>
                                                        </td>
                                                        <td class="text-end">
                                                            <a href="#"
                                                                class="btn btn-sm btn-icon btn-bg-light btn-active-color-primary">
                                                                <span class="svg-icon svg-icon-2">
                                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                                        height="24" viewBox="0 0 24 24"
                                                                        fill="none">
                                                                        <rect opacity="0.5" x="18" y="13" width="13"
                                                                            height="2" rx="1"
                                                                            transform="rotate(-180 18 13)"
                                                                            fill="currentColor" />
                                                                        <path
                                                                            d="M15.4343 12.5657L11.25 16.75C10.8358 17.1642 10.8358 17.8358 11.25 18.25C11.6642 18.6642 12.3358 18.6642 12.75 18.25L18.2929 12.7071C18.6834 12.3166 18.6834 11.6834 18.2929 11.2929L12.75 5.75C12.3358 5.33579 11.6642 5.33579 11.25 5.75C10.8358 6.16421 10.8358 6.83579 11.25 7.25L15.4343 11.4343C15.7467 11.7467 15.7467 12.2533 15.4343 12.5657Z"
                                                                            fill="currentColor" />
                                                                    </svg>
                                                                </span>
                                                            </a>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <div class="symbol symbol-45px me-2">
                                                                <span class="symbol-label">
                                                                    <img src="{{ asset('backend') }}/assets/media/svg/brand-logos/telegram.svg"
                                                                        class="h-50 align-self-center" alt="" />
                                                                </span>
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <a href="#"
                                                                class="text-dark fw-bolder text-hover-primary mb-1 fs-6">Popular
                                                                Authors</a>
                                                            <span class="text-muted fw-bold d-block">Most
                                                                Successful</span>
                                                        </td>
                                                        <td class="text-end text-muted fw-bold">Python, MySQL</td>
                                                        <td class="text-end">
                                                            <span class="badge badge-light-warning">In Progress</span>
                                                        </td>
                                                        <td class="text-end">
                                                            <a href="#"
                                                                class="btn btn-sm btn-icon btn-bg-light btn-active-color-primary">
                                                                <span class="svg-icon svg-icon-2">
                                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                                        height="24" viewBox="0 0 24 24"
                                                                        fill="none">
                                                                        <rect opacity="0.5" x="18" y="13" width="13"
                                                                            height="2" rx="1"
                                                                            transform="rotate(-180 18 13)"
                                                                            fill="currentColor" />
                                                                        <path
                                                                            d="M15.4343 12.5657L11.25 16.75C10.8358 17.1642 10.8358 17.8358 11.25 18.25C11.6642 18.6642 12.3358 18.6642 12.75 18.25L18.2929 12.7071C18.6834 12.3166 18.6834 11.6834 18.2929 11.2929L12.75 5.75C12.3358 5.33579 11.6642 5.33579 11.25 5.75C10.8358 6.16421 10.8358 6.83579 11.25 7.25L15.4343 11.4343C15.7467 11.7467 15.7467 12.2533 15.4343 12.5657Z"
                                                                            fill="currentColor" />
                                                                    </svg>
                                                                </span>
                                                            </a>
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="modal fade" id="kt_modal_add_event" tabindex="-1" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered mw-650px">
                        <div class="modal-content">
                            <form class="form" action="#" id="kt_modal_add_event_form">
                                <div class="modal-header">
                                    <h2 class="fw-bolder" data-kt-calendar="title">Add Event</h2>
                                    <div class="btn btn-icon btn-sm btn-active-icon-primary"
                                        id="kt_modal_add_event_close">
                                        <span class="svg-icon svg-icon-1">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                viewBox="0 0 24 24" fill="none">
                                                <rect opacity="0.5" x="6" y="17.3137" width="16" height="2"
                                                    rx="1" transform="rotate(-45 6 17.3137)"
                                                    fill="currentColor" />
                                                <rect x="7.41422" y="6" width="16" height="2" rx="1"
                                                    transform="rotate(45 7.41422 6)" fill="currentColor" />
                                            </svg>
                                        </span>
                                    </div>
                                </div>
                                <div class="modal-body py-10 px-lg-17">
                                    <div class="fv-row mb-9">
                                        <label class="fs-6 fw-bold required mb-2">Event Name</label>
                                        <input type="text" class="form-control form-control-solid" placeholder=""
                                            name="calendar_event_name" />
                                    </div>
                                    <div class="fv-row mb-9">
                                        <label class="fs-6 fw-bold mb-2">Event Description</label>
                                        <input type="text" class="form-control form-control-solid" placeholder=""
                                            name="calendar_event_description" />
                                    </div>
                                    <div class="fv-row mb-9">
                                        <label class="fs-6 fw-bold mb-2">Event Location</label>
                                        <input type="text" class="form-control form-control-solid" placeholder=""
                                            name="calendar_event_location" />
                                    </div>
                                    <div class="fv-row mb-9">
                                        <label class="form-check form-check-custom form-check-solid">
                                            <input class="form-check-input" type="checkbox" value=""
                                                id="kt_calendar_datepicker_allday" />
                                            <span class="form-check-label fw-bold"
                                                for="kt_calendar_datepicker_allday">All
                                                Day</span>
                                        </label>
                                    </div>
                                    <div class="row row-cols-lg-2 g-10">
                                        <div class="col">
                                            <div class="fv-row mb-9">
                                                <label class="fs-6 fw-bold mb-2 required">Event Start Date</label>
                                                <input class="form-control form-control-solid"
                                                    name="calendar_event_start_date" placeholder="Pick a start date"
                                                    id="kt_calendar_datepicker_start_date" />
                                            </div>
                                        </div>
                                        <div class="col" data-kt-calendar="datepicker">
                                            <div class="fv-row mb-9">
                                                <label class="fs-6 fw-bold mb-2">Event Start Time</label>
                                                <input class="form-control form-control-solid"
                                                    name="calendar_event_start_time" placeholder="Pick a start time"
                                                    id="kt_calendar_datepicker_start_time" />
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row row-cols-lg-2 g-10">
                                        <div class="col">
                                            <div class="fv-row mb-9">
                                                <label class="fs-6 fw-bold mb-2 required">Event End Date</label>
                                                <input class="form-control form-control-solid"
                                                    name="calendar_event_end_date" placeholder="Pick a end date"
                                                    id="kt_calendar_datepicker_end_date" />
                                            </div>
                                        </div>
                                        <div class="col" data-kt-calendar="datepicker">
                                            <div class="fv-row mb-9">
                                                <label class="fs-6 fw-bold mb-2">Event End Time</label>
                                                <input class="form-control form-control-solid"
                                                    name="calendar_event_end_time" placeholder="Pick a end time"
                                                    id="kt_calendar_datepicker_end_time" />
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="modal-footer flex-center">
                                    <button type="reset" id="kt_modal_add_event_cancel"
                                        class="btn btn-light me-3">Cancel</button>
                                    <button type="button" id="kt_modal_add_event_submit" class="btn btn-primary">
                                        <span class="indicator-label">Submit</span>
                                        <span class="indicator-progress">Please wait...
                                            <span
                                                class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
                                    </button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="modal fade" id="kt_modal_view_event" tabindex="-1" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered mw-650px">
                        <div class="modal-content">
                            <div class="modal-header border-0 justify-content-end">
                                <div class="btn btn-icon btn-sm btn-color-gray-400 btn-active-icon-primary me-2"
                                    data-bs-toggle="tooltip" data-bs-dismiss="click" title="Edit Event"
                                    id="kt_modal_view_event_edit">
                                    <span class="svg-icon svg-icon-2">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                            viewBox="0 0 24 24" fill="none">
                                            <path opacity="0.3"
                                                d="M21.4 8.35303L19.241 10.511L13.485 4.755L15.643 2.59595C16.0248 2.21423 16.5426 1.99988 17.0825 1.99988C17.6224 1.99988 18.1402 2.21423 18.522 2.59595L21.4 5.474C21.7817 5.85581 21.9962 6.37355 21.9962 6.91345C21.9962 7.45335 21.7817 7.97122 21.4 8.35303ZM3.68699 21.932L9.88699 19.865L4.13099 14.109L2.06399 20.309C1.98815 20.5354 1.97703 20.7787 2.03189 21.0111C2.08674 21.2436 2.2054 21.4561 2.37449 21.6248C2.54359 21.7934 2.75641 21.9115 2.989 21.9658C3.22158 22.0201 3.4647 22.0084 3.69099 21.932H3.68699Z"
                                                fill="currentColor" />
                                            <path
                                                d="M5.574 21.3L3.692 21.928C3.46591 22.0032 3.22334 22.0141 2.99144 21.9594C2.75954 21.9046 2.54744 21.7864 2.3789 21.6179C2.21036 21.4495 2.09202 21.2375 2.03711 21.0056C1.9822 20.7737 1.99289 20.5312 2.06799 20.3051L2.696 18.422L5.574 21.3ZM4.13499 14.105L9.891 19.861L19.245 10.507L13.489 4.75098L4.13499 14.105Z"
                                                fill="currentColor" />
                                        </svg>
                                    </span>
                                </div>
                                <div class="btn btn-icon btn-sm btn-color-gray-400 btn-active-icon-danger me-2"
                                    data-bs-toggle="tooltip" data-bs-dismiss="click" title="Delete Event"
                                    id="kt_modal_view_event_delete">
                                    <span class="svg-icon svg-icon-2">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                            viewBox="0 0 24 24" fill="none">
                                            <path
                                                d="M5 9C5 8.44772 5.44772 8 6 8H18C18.5523 8 19 8.44772 19 9V18C19 19.6569 17.6569 21 16 21H8C6.34315 21 5 19.6569 5 18V9Z"
                                                fill="currentColor" />
                                            <path opacity="0.5"
                                                d="M5 5C5 4.44772 5.44772 4 6 4H18C18.5523 4 19 4.44772 19 5V5C19 5.55228 18.5523 6 18 6H6C5.44772 6 5 5.55228 5 5V5Z"
                                                fill="currentColor" />
                                            <path opacity="0.5"
                                                d="M9 4C9 3.44772 9.44772 3 10 3H14C14.5523 3 15 3.44772 15 4V4H9V4Z"
                                                fill="currentColor" />
                                        </svg>
                                    </span>
                                </div>
                                <div class="btn btn-icon btn-sm btn-color-gray-500 btn-active-icon-primary"
                                    data-bs-toggle="tooltip" title="Hide Event" data-bs-dismiss="modal">
                                    <span class="svg-icon svg-icon-1">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                            viewBox="0 0 24 24" fill="none">
                                            <rect opacity="0.5" x="6" y="17.3137" width="16" height="2"
                                                rx="1" transform="rotate(-45 6 17.3137)"
                                                fill="currentColor" />
                                            <rect x="7.41422" y="6" width="16" height="2" rx="1"
                                                transform="rotate(45 7.41422 6)" fill="currentColor" />
                                        </svg>
                                    </span>
                                </div>
                            </div>
                            <div class="modal-body pt-0 pb-20 px-lg-17">
                                <div class="d-flex">
                                    <span class="svg-icon svg-icon-1 svg-icon-muted me-5">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                            viewBox="0 0 24 24" fill="none">
                                            <path opacity="0.3"
                                                d="M21 22H3C2.4 22 2 21.6 2 21V5C2 4.4 2.4 4 3 4H21C21.6 4 22 4.4 22 5V21C22 21.6 21.6 22 21 22Z"
                                                fill="currentColor" />
                                            <path
                                                d="M6 6C5.4 6 5 5.6 5 5V3C5 2.4 5.4 2 6 2C6.6 2 7 2.4 7 3V5C7 5.6 6.6 6 6 6ZM11 5V3C11 2.4 10.6 2 10 2C9.4 2 9 2.4 9 3V5C9 5.6 9.4 6 10 6C10.6 6 11 5.6 11 5ZM15 5V3C15 2.4 14.6 2 14 2C13.4 2 13 2.4 13 3V5C13 5.6 13.4 6 14 6C14.6 6 15 5.6 15 5ZM19 5V3C19 2.4 18.6 2 18 2C17.4 2 17 2.4 17 3V5C17 5.6 17.4 6 18 6C18.6 6 19 5.6 19 5Z"
                                                fill="currentColor" />
                                            <path
                                                d="M8.8 13.1C9.2 13.1 9.5 13 9.7 12.8C9.9 12.6 10.1 12.3 10.1 11.9C10.1 11.6 10 11.3 9.8 11.1C9.6 10.9 9.3 10.8 9 10.8C8.8 10.8 8.59999 10.8 8.39999 10.9C8.19999 11 8.1 11.1 8 11.2C7.9 11.3 7.8 11.4 7.7 11.6C7.6 11.8 7.5 11.9 7.5 12.1C7.5 12.2 7.4 12.2 7.3 12.3C7.2 12.4 7.09999 12.4 6.89999 12.4C6.69999 12.4 6.6 12.3 6.5 12.2C6.4 12.1 6.3 11.9 6.3 11.7C6.3 11.5 6.4 11.3 6.5 11.1C6.6 10.9 6.8 10.7 7 10.5C7.2 10.3 7.49999 10.1 7.89999 10C8.29999 9.90003 8.60001 9.80003 9.10001 9.80003C9.50001 9.80003 9.80001 9.90003 10.1 10C10.4 10.1 10.7 10.3 10.9 10.4C11.1 10.5 11.3 10.8 11.4 11.1C11.5 11.4 11.6 11.6 11.6 11.9C11.6 12.3 11.5 12.6 11.3 12.9C11.1 13.2 10.9 13.5 10.6 13.7C10.9 13.9 11.2 14.1 11.4 14.3C11.6 14.5 11.8 14.7 11.9 15C12 15.3 12.1 15.5 12.1 15.8C12.1 16.2 12 16.5 11.9 16.8C11.8 17.1 11.5 17.4 11.3 17.7C11.1 18 10.7 18.2 10.3 18.3C9.9 18.4 9.5 18.5 9 18.5C8.5 18.5 8.1 18.4 7.7 18.2C7.3 18 7 17.8 6.8 17.6C6.6 17.4 6.4 17.1 6.3 16.8C6.2 16.5 6.10001 16.3 6.10001 16.1C6.10001 15.9 6.2 15.7 6.3 15.6C6.4 15.5 6.6 15.4 6.8 15.4C6.9 15.4 7.00001 15.4 7.10001 15.5C7.20001 15.6 7.3 15.6 7.3 15.7C7.5 16.2 7.7 16.6 8 16.9C8.3 17.2 8.6 17.3 9 17.3C9.2 17.3 9.5 17.2 9.7 17.1C9.9 17 10.1 16.8 10.3 16.6C10.5 16.4 10.5 16.1 10.5 15.8C10.5 15.3 10.4 15 10.1 14.7C9.80001 14.4 9.50001 14.3 9.10001 14.3C9.00001 14.3 8.9 14.3 8.7 14.3C8.5 14.3 8.39999 14.3 8.39999 14.3C8.19999 14.3 7.99999 14.2 7.89999 14.1C7.79999 14 7.7 13.8 7.7 13.7C7.7 13.5 7.79999 13.4 7.89999 13.2C7.99999 13 8.2 13 8.5 13H8.8V13.1ZM15.3 17.5V12.2C14.3 13 13.6 13.3 13.3 13.3C13.1 13.3 13 13.2 12.9 13.1C12.8 13 12.7 12.8 12.7 12.6C12.7 12.4 12.8 12.3 12.9 12.2C13 12.1 13.2 12 13.6 11.8C14.1 11.6 14.5 11.3 14.7 11.1C14.9 10.9 15.2 10.6 15.5 10.3C15.8 10 15.9 9.80003 15.9 9.70003C15.9 9.60003 16.1 9.60004 16.3 9.60004C16.5 9.60004 16.7 9.70003 16.8 9.80003C16.9 9.90003 17 10.2 17 10.5V17.2C17 18 16.7 18.4 16.2 18.4C16 18.4 15.8 18.3 15.6 18.2C15.4 18.1 15.3 17.8 15.3 17.5Z"
                                                fill="currentColor" />
                                        </svg>
                                    </span>
                                    <div class="mb-9">
                                        <div class="d-flex align-items-center mb-2">
                                            <span class="fs-3 fw-bolder me-3" data-kt-calendar="event_name"></span>
                                            <span class="badge badge-light-success" data-kt-calendar="all_day"></span>
                                        </div>
                                        <div class="fs-6" data-kt-calendar="event_description"></div>
                                    </div>
                                </div>
                                <div class="d-flex align-items-center mb-2">
                                    <span class="svg-icon svg-icon-1 svg-icon-success me-5">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24px" height="24px"
                                            viewBox="0 0 24 24" version="1.1">
                                            <circle fill="currentColor" cx="12" cy="12" r="8" />
                                        </svg>
                                    </span>
                                    <div class="fs-6">
                                        <span class="fw-bolder">Starts</span>
                                        <span data-kt-calendar="event_start_date"></span>
                                    </div>
                                </div>
                                <div class="d-flex align-items-center mb-9">
                                    <span class="svg-icon svg-icon-1 svg-icon-danger me-5">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24px" height="24px"
                                            viewBox="0 0 24 24" version="1.1">
                                            <circle fill="currentColor" cx="12" cy="12" r="8" />
                                        </svg>
                                    </span>
                                    <div class="fs-6">
                                        <span class="fw-bolder">Ends</span>
                                        <span data-kt-calendar="event_end_date"></span>
                                    </div>
                                </div>
                                <div class="d-flex align-items-center">
                                    <span class="svg-icon svg-icon-1 svg-icon-muted me-5">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                            viewBox="0 0 24 24" fill="none">
                                            <path opacity="0.3"
                                                d="M18.0624 15.3453L13.1624 20.7453C12.5624 21.4453 11.5624 21.4453 10.9624 20.7453L6.06242 15.3453C4.56242 13.6453 3.76242 11.4453 4.06242 8.94534C4.56242 5.34534 7.46242 2.44534 11.0624 2.04534C15.8624 1.54534 19.9624 5.24534 19.9624 9.94534C20.0624 12.0453 19.2624 13.9453 18.0624 15.3453Z"
                                                fill="currentColor" />
                                            <path
                                                d="M12.0624 13.0453C13.7193 13.0453 15.0624 11.7022 15.0624 10.0453C15.0624 8.38849 13.7193 7.04535 12.0624 7.04535C10.4056 7.04535 9.06241 8.38849 9.06241 10.0453C9.06241 11.7022 10.4056 13.0453 12.0624 13.0453Z"
                                                fill="currentColor" />
                                        </svg>
                                    </span>
                                    <div class="fs-6" data-kt-calendar="event_location"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@once
    @push('scripts')
        <script>
            // Assuming $attendanceToday['check_in'] is a string in the format "HH:mm:ss"
            let checkInTimeString = "{{ isset($attendanceToday['check_in']) ? $attendanceToday['check_in'] : '' }}";
            if (checkInTimeString !== '') {
                let [hours, minutes, seconds] = checkInTimeString.split(':');

                let checkInTime = new Date();
                checkInTime.setHours(parseInt(hours, 10));
                checkInTime.setMinutes(parseInt(minutes, 10));
                checkInTime.setSeconds(parseInt(seconds, 10));

                function updateLiveClock() {
                    let currentTime = new Date();
                    let timeDifference = currentTime - checkInTime;

                    let hours = Math.floor(timeDifference / (1000 * 60 * 60));
                    let minutes = Math.floor((timeDifference % (1000 * 60 * 60)) / (1000 * 60));
                    let seconds = Math.floor((timeDifference % (1000 * 60)) / 1000);

                    // alert(hours);
                    document.getElementById('live-clock-hours').innerText = hours;
                    document.getElementById('live-clock-minutes').innerText = minutes;
                    document.getElementById('live-clock-seconds').innerText = seconds;
                }

                setInterval(updateLiveClock, 1000);
            } else {
                // Display "Absent Today" message when check_in is null
                document.getElementById('live-clock').innerText = 'Absent Today';
            }
        </script>
    @endpush
@endonce
