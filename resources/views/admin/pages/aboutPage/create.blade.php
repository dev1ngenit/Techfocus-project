@extends('admin.master')
@section('content')
<div class="post d-flex flex-column-fluid mb-3" id="kt_post">
    <div id="kt_content_container" class="container-fluid mb-3">
        <div class="card">
            <div class="main_bg card-header py-2 main_bg align-items-center">
                <div class="col-lg-5 col-sm-12">
                    <div>
                        <a class="btn btn-sm btn-primary btn-rounded rounded-circle btn-icon back-btn"
                            href="{{ URL::previous() }}">
                            <i class="fa-solid fa-arrow-left text-white"></i>
                        </a>
                    </div>
                </div>
                <div class="col-lg-7 col-sm-12 d-flex justify-content-end">
                    <h4 class="text-white p-0 m-0 fw-bold">Home Page Add</h4>
                </div>
            </div>
            <div class="card-body p-0 pt-1">
                <div class="row gx-0">
                    <div class="col-lg-2">
                        <ul class="nav nav-tabs nav-pills border-0 flex-row flex-md-column mb-3 mb-md-0 fs-6"
                            role="tablist">
                            <li class="nav-item w-md-290px my-1 mt-0" role="presentation">
                                <a class="nav-link p-5 rounded-0 active tab-trigger" data-bs-toggle="tab"
                                    href="#section-two" aria-selected="true" role="tab">Section Two</a>
                            </li>
                            <li class="nav-item w-md-290px my-1" role="presentation">
                                <a class="nav-link p-5 rounded-0 tab-trigger" data-bs-toggle="tab" href="#section-three"
                                    aria-selected="false" role="tab">Section Three</a>
                            </li>
                            <li class="nav-item w-md-290px my-1" role="presentation">
                                <a class="nav-link p-5 rounded-0 tab-trigger" data-bs-toggle="tab" href="#section-four"
                                    aria-selected="false" role="tab" tabindex="-1">Section Four</a>
                            </li>
                            <li class="nav-item w-md-290px my-1" role="presentation">
                                <a class="nav-link p-5 rounded-0 tab-trigger" data-bs-toggle="tab" href="#section-five"
                                    aria-selected="false" role="tab" tabindex="-1">Section Five</a>
                            </li>
                        </ul>
                    </div>
                    <div class="col-lg-10 px-4 p-2">
                        <form id="productForm" method="POST" action="{{ route('admin.homepage.store') }}"
                            enctype="multipart/form-data">
                            @csrf
                            <div class="tab-content" id="myTabContent">
                                <div class="tab-pane fade active show" id="section-two" role="tabpanel">
                                    <div class="w-100">
                                        <div class="pb-5 pb-lg-5">
                                            <h2
                                                class="fw-bolder d-flex justify-content-center align-items-center text-dark">
                                                Section One
                                            </h2>
                                            <p class="text-center p-0 m-0"><small
                                                    class="ms-4 text-danger fw-normal fs-sm-9">All The Red Star Mark
                                                    Field Is Required.</small></p>
                                        </div>
                                        <div class="fv-row">
                                            <div class="row">
                                                <div class="col-lg-3">
                                                    <div class="fv-row mb-3">
                                                        <label class="form-label">Section Two Badge</label>
                                                        <input type="text"
                                                            class="form-control form-control-solid form-control-sm @error('section_two_badge') is-invalid @enderror"
                                                            name="section_two_badge" id="validationCustom01"
                                                            placeholder="Enter Section Two Badge">
                                                        @error('section_two_badge')
                                                        <div class="invalid-feedback d-block">{{ $message }}</div>
                                                        @enderror
                                                    </div>
                                                </div>
                                                <div class="col-lg-3">
                                                    <div class="fv-row mb-3">
                                                        <label class="form-label">Section Two Title Span</label>
                                                        <input type="text"
                                                            class="form-control form-control-solid form-control-sm @error('section_two_title_span') is-invalid @enderror"
                                                            name="section_two_title_span" id="validationCustom01"
                                                            placeholder="Enter Section Two Title Span">
                                                        @error('section_two_title_span')
                                                        <div class="invalid-feedback d-block">{{ $message }}</div>
                                                        @enderror
                                                    </div>
                                                </div>
                                                <div class="col-lg-3">
                                                    <div class="fv-row mb-3">
                                                        <label class="form-label">Section Two Title</label>
                                                        <input type="text"
                                                            class="form-control form-control-solid form-control-sm @error('section_two_subtitle') is-invalid @enderror"
                                                            name="section_two_subtitle" id="validationCustom01"
                                                            placeholder="Enter Section Two Title">
                                                        @error('section_two_subtitle')
                                                        <div class="invalid-feedback d-block">{{ $message }}</div>
                                                        @enderror
                                                    </div>
                                                </div>
                                                <div class="col-lg-3">
                                                    <div class="fv-row mb-3">
                                                        <label class="form-label">Section Two Main Image</label>
                                                        <input type="file"
                                                            class="form-control form-control-solid form-control-sm @error('section_two_main_image') is-invalid @enderror"
                                                            name="section_two_main_image" id="validationCustom01"
                                                            placeholder="Enter Section Two Main Image">
                                                        @error('section_two_main_image')
                                                        <div class="invalid-feedback d-block">{{ $message }}</div>
                                                        @enderror
                                                    </div>
                                                </div>
                                                <div class="col-lg-3">
                                                    <div class="fv-row mb-3">
                                                        <label class="form-label">Section Two Secondary Image</label>
                                                        <input type="file"
                                                            class="form-control form-control-solid form-control-sm @error('section_two_secondary_image') is-invalid @enderror"
                                                            name="section_two_secondary_image" id="validationCustom01"
                                                            placeholder="Enter Section  Two Secondary Image">
                                                        @error('section_two_secondary_image')
                                                        <div class="invalid-feedback d-block">{{ $message }}</div>
                                                        @enderror
                                                    </div>
                                                </div>
                                                <div class="col-lg-3">
                                                    <div class="fv-row mb-3">
                                                        <label class="form-label">Section Two Secondary Image
                                                            Count</label>
                                                        <input type="text"
                                                            class="form-control form-control-solid form-control-sm @error('section_two_secondary_image_count') is-invalid @enderror"
                                                            name="section_two_secondary_image_count"
                                                            id="validationCustom01"
                                                            placeholder="Enter Section Two Secondary Image Count">
                                                        @error('section_two_secondary_image_count')
                                                        <div class="invalid-feedback d-block">{{ $message }}</div>
                                                        @enderror
                                                    </div>
                                                </div>
                                                <div class="col-lg-3">
                                                    <div class="fv-row mb-3">
                                                        <label class="form-label">Section Two Secondary Image
                                                            Title</label>
                                                        <input type="text"
                                                            class="form-control form-control-solid form-control-sm @error('section_two_secondary_image_title') is-invalid @enderror"
                                                            name="section_two_secondary_image_title"
                                                            id="validationCustom01"
                                                            placeholder="Enter Section Two Secondary Image Title">
                                                        @error('section_two_secondary_image_title')
                                                        <div class="invalid-feedback d-block">{{ $message }}</div>
                                                        @enderror
                                                    </div>
                                                </div>
                                                <div class="col-lg-3">
                                                    <div class="fv-row mb-3">
                                                        <label class="form-label">Section Two Button Name</label>
                                                        <input type="text"
                                                            class="form-control form-control-solid form-control-sm @error('section_two_button_name') is-invalid @enderror"
                                                            name="section_two_button_name" id="validationCustom01"
                                                            placeholder="Enter Section Two Button Name">
                                                        @error('section_two_button_name')
                                                        <div class="invalid-feedback d-block">{{ $message }}</div>
                                                        @enderror
                                                    </div>
                                                </div>
                                                <div class="col-lg-3">
                                                    <div class="fv-row mb-3">
                                                        <label class="form-label">Section Two Button Link</label>
                                                        <input type="url"
                                                            class="form-control form-control-solid form-control-sm @error('section_two_button_link') is-invalid @enderror"
                                                            name="section_two_button_link" id="validationCustom01"
                                                            placeholder="Enter Section Two Button Link">
                                                        @error('section_two_button_link')
                                                        <div class="invalid-feedback d-block">{{ $message }}</div>
                                                        @enderror
                                                    </div>
                                                </div>
                                                <div class="col-lg-9">
                                                    <div class="fv-row mb-3">
                                                        <label class="form-label">Section Two Description</label>
                                                        <textarea rows="1" name="section_two_description"
                                                            class="form-control form-control-sm form-control-solid @error('section_two_description') is-invalid @enderror"
                                                            placeholder="Enter Section Two Description"></textarea>
                                                        @error('section_two_description')
                                                        <div class="invalid-feedback d-block">{{ $message }}</div>
                                                        @enderror
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row mt-2 justify-content-end">
                                            <div class="d-flex align-items-center justify-content-end ">
                                                <a class="btn btn-lg btn-info rounded-0 tab-trigger-next"
                                                    data-bs-toggle="tab" data-bs-target="#section-three"
                                                    aria-selected="false" role="tab" tabindex="-1">
                                                    Continue
                                                    <span class="svg-icon svg-icon-4 ms-1 me-0">
                                                        <i class="fa-solid fa-arrow-right"></i>
                                                    </span>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="section-three" role="tabpanel">
                                    <div class="w-100">
                                        <div class="pb-10 pb-lg-10">
                                            <h2
                                                class="fw-bolder d-flex justify-content-center align-items-center text-dark">
                                                Section Three Tab
                                            </h2>
                                        </div>
                                        <div class="fv-row">
                                            <div class="row">
                                                <div class="col-lg-12 px-5">
                                                    <div class="row border p-4">
                                                        <p class="badge badge-info custom-badge"
                                                            style="margin-top: -15px; width: 13%">Tab One</span>
                                                        <div class="col-lg-12">
                                                            <div class="row">
                                                                <div class="col-lg-6">
                                                                    <div class="fv-row mb-3">
                                                                        <label class="form-label">Section Three Tab One
                                                                            Title</label>
                                                                        <input type="url"
                                                                            class="form-control form-control-solid form-control-sm @error('section_three_tab_one_title') is-invalid @enderror"
                                                                            name="section_three_tab_one_title"
                                                                            id="validationCustom01"
                                                                            placeholder="Enter Section Three Tab One Title">
                                                                        @error('section_three_tab_one_title')
                                                                        <div class="invalid-feedback d-block">{{
                                                                            $message }}</div>
                                                                        @enderror
                                                                    </div>
                                                                </div>
                                                                <div class="col-lg-6">
                                                                    <div class="fv-row mb-3">
                                                                        <label class="form-label">Section Three Tab One
                                                                            Short
                                                                            Description</label>
                                                                        <textarea rows="1"
                                                                            name="section_three_tab_one_short_description"
                                                                            class="form-control form-control-sm form-control-solid @error('section_three_tab_one_short_description') is-invalid @enderror"
                                                                            placeholder="Enter Section Three Tab One Short Description"></textarea>
                                                                        @error('section_three_tab_one_short_description')
                                                                        <div class="invalid-feedback d-block">{{
                                                                            $message }}</div>
                                                                        @enderror
                                                                    </div>
                                                                </div>
                                                                <div class="col-lg-3">
                                                                    <div class="fv-row mb-3">
                                                                        <label class="form-label">Section Three Tab One
                                                                            List Title</label>
                                                                        <input type="url"
                                                                            class="form-control form-control-solid form-control-sm @error('section_three_tab_one_list_title') is-invalid @enderror"
                                                                            name="section_three_tab_one_list_title"
                                                                            id="validationCustom01"
                                                                            placeholder="Enter Section Three Tab One List Title">
                                                                        @error('section_three_tab_one_list_title')
                                                                        <div class="invalid-feedback d-block">{{
                                                                            $message }}</div>
                                                                        @enderror
                                                                    </div>
                                                                </div>
                                                                <div class="col-lg-3">
                                                                    <div class="fv-row mb-3">
                                                                        <label class="form-label">Section Three Tab One
                                                                            List One</label>
                                                                        <input type="url"
                                                                            class="form-control form-control-solid form-control-sm @error('section_three_tab_one_title') is-invalid @enderror"
                                                                            name="section_three_tab_one_list_1"
                                                                            id="validationCustom01"
                                                                            placeholder="Enter Section Three Tab One List One">
                                                                        @error('section_three_tab_one_list_1')
                                                                        <div class="invalid-feedback d-block">{{$message
                                                                            }}</div>
                                                                        @enderror
                                                                    </div>
                                                                </div>
                                                                <div class="col-lg-3">
                                                                    <div class="fv-row mb-3">
                                                                        <label class="form-label">Section Three Tab One
                                                                            List Two</label>
                                                                        <input type="url"
                                                                            class="form-control form-control-solid form-control-sm @error('section_three_tab_one_title') is-invalid @enderror"
                                                                            name="section_three_tab_one_list_2"
                                                                            id="validationCustom01"
                                                                            placeholder="Enter Section Three Tab One List Two">
                                                                        @error('section_three_tab_one_list_2')
                                                                        <div class="invalid-feedback d-block">{{
                                                                            $message }}</div>
                                                                        @enderror
                                                                    </div>
                                                                </div>
                                                                <div class="col-lg-3">
                                                                    <div class="fv-row mb-3">
                                                                        <label class="form-label">Section Three Tab One
                                                                            List Three</label>
                                                                        <input type="url"
                                                                            class="form-control form-control-solid form-control-sm @error('section_three_tab_one_title') is-invalid @enderror"
                                                                            name="section_three_tab_one_list_3"
                                                                            id="validationCustom01"
                                                                            placeholder="Enter Section Three Tab One List Three">
                                                                        @error('section_three_tab_one_list_3')
                                                                        <div class="invalid-feedback d-block">{{
                                                                            $message }}</div>
                                                                        @enderror
                                                                    </div>
                                                                </div>
                                                                <div class="col-lg-3">
                                                                    <div class="fv-row mb-3">
                                                                        <label class="form-label">Section Three Tab One
                                                                            List Four</label>
                                                                        <input type="url"
                                                                            class="form-control form-control-solid form-control-sm @error('section_three_tab_one_title') is-invalid @enderror"
                                                                            name="section_three_tab_one_list_4"
                                                                            id="validationCustom01"
                                                                            placeholder="Enter Section Three Tab One List Four">
                                                                        @error('section_three_tab_one_list_4')
                                                                        <div class="invalid-feedback d-block">{{
                                                                            $message }}</div>
                                                                        @enderror
                                                                    </div>
                                                                </div>
                                                                <div class="col-lg-3">
                                                                    <div class="fv-row mb-3">
                                                                        <label class="form-label">Section Three Tab One
                                                                            Quote</label>
                                                                        <input type="url"
                                                                            class="form-control form-control-solid form-control-sm @error('section_three_tab_one_title') is-invalid @enderror"
                                                                            name="section_three_tab_one_quote"
                                                                            maxlength="250" id="validationCustom01"
                                                                            placeholder="Enter Section Three Tab One Quote">
                                                                        @error('section_three_tab_one_quote')
                                                                        <div class="invalid-feedback d-block">{{
                                                                            $message }}</div>
                                                                        @enderror
                                                                    </div>
                                                                </div>
                                                                <div class="col-lg-3">
                                                                    <div class="fv-row mb-3">
                                                                        <label class="form-label">Section Three Tab One
                                                                            Quote Author</label>
                                                                        <input type="url"
                                                                            class="form-control form-control-solid form-control-sm @error('section_three_tab_one_quote_author') is-invalid @enderror"
                                                                            name="section_three_tab_one_quote_author"
                                                                            id="validationCustom01"
                                                                            placeholder="Enter Section Three Tab One Quote Author">
                                                                        @error('section_three_tab_one_quote_author')
                                                                        <div class="invalid-feedback d-block">{{
                                                                            $message }}</div>
                                                                        @enderror
                                                                    </div>
                                                                </div>
                                                                <div class="col-lg-3">
                                                                    <div class="fv-row mb-3">
                                                                        <label class="form-label">Section Three Tab One
                                                                            Button Name</label>
                                                                        <input type="url"
                                                                            class="form-control form-control-solid form-control-sm @error('section_three_tab_one_button_name') is-invalid @enderror"
                                                                            name="section_three_tab_one_button_name"
                                                                            id="validationCustom01"
                                                                            placeholder="Enter Section Three Tab One Button Name">
                                                                        @error('section_three_tab_one_button_name')
                                                                        <div class="invalid-feedback d-block">{{
                                                                            $message }}</div>
                                                                        @enderror
                                                                    </div>
                                                                </div>
                                                                <div class="col-lg-6">
                                                                    <div class="fv-row mb-3">
                                                                        <label class="form-label">Section Three Tab One
                                                                            Button Link</label>
                                                                        <input type="url"
                                                                            class="form-control form-control-solid form-control-sm @error('section_three_tab_one_button_link') is-invalid @enderror"
                                                                            name="section_three_tab_one_button_link"
                                                                            id="validationCustom01"
                                                                            placeholder="Enter Section Three Tab One Button Link">
                                                                        @error('section_three_tab_one_button_link')
                                                                        <div class="invalid-feedback d-block">{{
                                                                            $message }}</div>
                                                                        @enderror
                                                                    </div>
                                                                </div>
                                                                <div class="col-lg-6">
                                                                    <div class="fv-row mb-3">
                                                                        <label class="form-label">Section Three Tab One
                                                                            Detailed Description</label>
                                                                        <textarea rows="1"
                                                                            name="section_three_tab_one_detailed_description"
                                                                            class="form-control form-control-sm form-control-solid @error('section_three_tab_one_detailed_description') is-invalid @enderror"
                                                                            placeholder="Enter Section Three Tab One Detailed Description"></textarea>
                                                                        @error('section_three_tab_one_detailed_description')
                                                                        <div class="invalid-feedback d-block">{{$message
                                                                            }}</div>
                                                                        @enderror
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-12 px-5">
                                                    <div class="row border p-4">
                                                        <p class="badge badge-info custom-badge"
                                                            style="margin-top: -15px; width: 13%">Tab Two</span>
                                                        <div class="col-lg-12">
                                                            <div class="row">
                                                                <div class="col-lg-6">
                                                                    <div class="fv-row mb-3">
                                                                        <label class="form-label">Section Three Tab two
                                                                            Title</label>
                                                                        <input type="url"
                                                                            class="form-control form-control-solid form-control-sm @error('section_three_tab_two_title') is-invalid @enderror"
                                                                            name="section_three_tab_two_title"
                                                                            id="validationCustom01"
                                                                            placeholder="Enter Section Three Tab two Title">
                                                                        @error('section_three_tab_two_title')
                                                                        <div class="invalid-feedback d-block">{{
                                                                            $message }}</div>
                                                                        @enderror
                                                                    </div>
                                                                </div>
                                                                <div class="col-lg-6">
                                                                    <div class="fv-row mb-3">
                                                                        <label class="form-label">Section Three Tab two
                                                                            Short
                                                                            Description</label>
                                                                        <textarea rows="1"
                                                                            name="section_three_tab_two_short_description"
                                                                            class="form-control form-control-sm form-control-solid @error('section_three_tab_two_short_description') is-invalid @enderror"
                                                                            placeholder="Enter Section Three Tab two Short Description"></textarea>
                                                                        @error('section_three_tab_two_short_description')
                                                                        <div class="invalid-feedback d-block">{{
                                                                            $message }}</div>
                                                                        @enderror
                                                                    </div>
                                                                </div>
                                                                <div class="col-lg-3">
                                                                    <div class="fv-row mb-3">
                                                                        <label class="form-label">Section Three Tab two
                                                                            List Title</label>
                                                                        <input type="url"
                                                                            class="form-control form-control-solid form-control-sm @error('section_three_tab_two_list_title') is-invalid @enderror"
                                                                            name="section_three_tab_two_list_title"
                                                                            id="validationCustom01"
                                                                            placeholder="Enter Section Three Tab two List Title">
                                                                        @error('section_three_tab_two_list_title')
                                                                        <div class="invalid-feedback d-block">{{
                                                                            $message }}</div>
                                                                        @enderror
                                                                    </div>
                                                                </div>
                                                                <div class="col-lg-3">
                                                                    <div class="fv-row mb-3">
                                                                        <label class="form-label">Section Three Tab two
                                                                            List two</label>
                                                                        <input type="url"
                                                                            class="form-control form-control-solid form-control-sm @error('section_three_tab_two_title') is-invalid @enderror"
                                                                            name="section_three_tab_two_list_1"
                                                                            id="validationCustom01"
                                                                            placeholder="Enter Section Three Tab two List two">
                                                                        @error('section_three_tab_two_list_1')
                                                                        <div class="invalid-feedback d-block">{{$message
                                                                            }}</div>
                                                                        @enderror
                                                                    </div>
                                                                </div>
                                                                <div class="col-lg-3">
                                                                    <div class="fv-row mb-3">
                                                                        <label class="form-label">Section Three Tab two
                                                                            List Two</label>
                                                                        <input type="url"
                                                                            class="form-control form-control-solid form-control-sm @error('section_three_tab_two_title') is-invalid @enderror"
                                                                            name="section_three_tab_two_list_2"
                                                                            id="validationCustom01"
                                                                            placeholder="Enter Section Three Tab two List Two">
                                                                        @error('section_three_tab_two_list_2')
                                                                        <div class="invalid-feedback d-block">{{
                                                                            $message }}</div>
                                                                        @enderror
                                                                    </div>
                                                                </div>
                                                                <div class="col-lg-3">
                                                                    <div class="fv-row mb-3">
                                                                        <label class="form-label">Section Three Tab two
                                                                            List Three</label>
                                                                        <input type="url"
                                                                            class="form-control form-control-solid form-control-sm @error('section_three_tab_two_title') is-invalid @enderror"
                                                                            name="section_three_tab_two_list_3"
                                                                            id="validationCustom01"
                                                                            placeholder="Enter Section Three Tab two List Three">
                                                                        @error('section_three_tab_two_list_3')
                                                                        <div class="invalid-feedback d-block">{{
                                                                            $message }}</div>
                                                                        @enderror
                                                                    </div>
                                                                </div>
                                                                <div class="col-lg-3">
                                                                    <div class="fv-row mb-3">
                                                                        <label class="form-label">Section Three Tab two
                                                                            List Four</label>
                                                                        <input type="url"
                                                                            class="form-control form-control-solid form-control-sm @error('section_three_tab_two_title') is-invalid @enderror"
                                                                            name="section_three_tab_two_list_4"
                                                                            id="validationCustom01"
                                                                            placeholder="Enter Section Three Tab two List Four">
                                                                        @error('section_three_tab_two_list_4')
                                                                        <div class="invalid-feedback d-block">{{
                                                                            $message }}</div>
                                                                        @enderror
                                                                    </div>
                                                                </div>
                                                                <div class="col-lg-3">
                                                                    <div class="fv-row mb-3">
                                                                        <label class="form-label">Section Three Tab two
                                                                            Quote</label>
                                                                        <input type="url"
                                                                            class="form-control form-control-solid form-control-sm @error('section_three_tab_two_title') is-invalid @enderror"
                                                                            name="section_three_tab_two_quote"
                                                                            maxlength="250" id="validationCustom01"
                                                                            placeholder="Enter Section Three Tab two Quote">
                                                                        @error('section_three_tab_two_quote')
                                                                        <div class="invalid-feedback d-block">{{
                                                                            $message }}</div>
                                                                        @enderror
                                                                    </div>
                                                                </div>
                                                                <div class="col-lg-3">
                                                                    <div class="fv-row mb-3">
                                                                        <label class="form-label">Section Three Tab two
                                                                            Quote Author</label>
                                                                        <input type="url"
                                                                            class="form-control form-control-solid form-control-sm @error('section_three_tab_two_quote_author') is-invalid @enderror"
                                                                            name="section_three_tab_two_quote_author"
                                                                            id="validationCustom01"
                                                                            placeholder="Enter Section Three Tab two Quote Author">
                                                                        @error('section_three_tab_two_quote_author')
                                                                        <div class="invalid-feedback d-block">{{
                                                                            $message }}</div>
                                                                        @enderror
                                                                    </div>
                                                                </div>
                                                                <div class="col-lg-3">
                                                                    <div class="fv-row mb-3">
                                                                        <label class="form-label">Section Three Tab two
                                                                            Button Name</label>
                                                                        <input type="url"
                                                                            class="form-control form-control-solid form-control-sm @error('section_three_tab_two_button_name') is-invalid @enderror"
                                                                            name="section_three_tab_two_button_name"
                                                                            id="validationCustom01"
                                                                            placeholder="Enter Section Three Tab two Button Name">
                                                                        @error('section_three_tab_two_button_name')
                                                                        <div class="invalid-feedback d-block">{{
                                                                            $message }}</div>
                                                                        @enderror
                                                                    </div>
                                                                </div>
                                                                <div class="col-lg-6">
                                                                    <div class="fv-row mb-3">
                                                                        <label class="form-label">Section Three Tab two
                                                                            Button Link</label>
                                                                        <input type="url"
                                                                            class="form-control form-control-solid form-control-sm @error('section_three_tab_two_button_link') is-invalid @enderror"
                                                                            name="section_three_tab_two_button_link"
                                                                            id="validationCustom01"
                                                                            placeholder="Enter Section Three Tab two Button Link">
                                                                        @error('section_three_tab_two_button_link')
                                                                        <div class="invalid-feedback d-block">{{
                                                                            $message }}</div>
                                                                        @enderror
                                                                    </div>
                                                                </div>
                                                                <div class="col-lg-6">
                                                                    <div class="fv-row mb-3">
                                                                        <label class="form-label">Section Three Tab two
                                                                            Detailed Description</label>
                                                                        <textarea rows="1"
                                                                            name="section_three_tab_two_detailed_description"
                                                                            class="form-control form-control-sm form-control-solid @error('section_three_tab_two_detailed_description') is-invalid @enderror"
                                                                            placeholder="Enter Section Three Tab two Detailed Description"></textarea>
                                                                        @error('section_three_tab_two_detailed_description')
                                                                        <div class="invalid-feedback d-block">{{$message
                                                                            }}</div>
                                                                        @enderror
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-12 px-5">
                                                    <div class="row border p-4">
                                                        <p class="badge badge-info custom-badge"
                                                            style="margin-top: -15px; width: 13%">Tab three</span>
                                                        <div class="col-lg-12">
                                                            <div class="row">
                                                                <div class="col-lg-6">
                                                                    <div class="fv-row mb-3">
                                                                        <label class="form-label">Section Three Tab
                                                                            three
                                                                            Title</label>
                                                                        <input type="url"
                                                                            class="form-control form-control-solid form-control-sm @error('section_three_tab_three_title') is-invalid @enderror"
                                                                            name="section_three_tab_three_title"
                                                                            id="validationCustom01"
                                                                            placeholder="Enter Section Three Tab three Title">
                                                                        @error('section_three_tab_three_title')
                                                                        <div class="invalid-feedback d-block">{{
                                                                            $message }}</div>
                                                                        @enderror
                                                                    </div>
                                                                </div>
                                                                <div class="col-lg-6">
                                                                    <div class="fv-row mb-3">
                                                                        <label class="form-label">Section Three Tab
                                                                            three
                                                                            Short
                                                                            Description</label>
                                                                        <textarea rows="1"
                                                                            name="section_three_tab_three_short_description"
                                                                            class="form-control form-control-sm form-control-solid @error('section_three_tab_three_short_description') is-invalid @enderror"
                                                                            placeholder="Enter Section Three Tab three Short Description"></textarea>
                                                                        @error('section_three_tab_three_short_description')
                                                                        <div class="invalid-feedback d-block">{{
                                                                            $message }}</div>
                                                                        @enderror
                                                                    </div>
                                                                </div>
                                                                <div class="col-lg-3">
                                                                    <div class="fv-row mb-3">
                                                                        <label class="form-label">Section Three Tab
                                                                            three
                                                                            List Title</label>
                                                                        <input type="url"
                                                                            class="form-control form-control-solid form-control-sm @error('section_three_tab_three_list_title') is-invalid @enderror"
                                                                            name="section_three_tab_three_list_title"
                                                                            id="validationCustom01"
                                                                            placeholder="Enter Section Three Tab three List Title">
                                                                        @error('section_three_tab_three_list_title')
                                                                        <div class="invalid-feedback d-block">{{
                                                                            $message }}</div>
                                                                        @enderror
                                                                    </div>
                                                                </div>
                                                                <div class="col-lg-3">
                                                                    <div class="fv-row mb-3">
                                                                        <label class="form-label">Section Three Tab
                                                                            three
                                                                            List three</label>
                                                                        <input type="url"
                                                                            class="form-control form-control-solid form-control-sm @error('section_three_tab_three_title') is-invalid @enderror"
                                                                            name="section_three_tab_three_list_1"
                                                                            id="validationCustom01"
                                                                            placeholder="Enter Section Three Tab three List three">
                                                                        @error('section_three_tab_three_list_1')
                                                                        <div class="invalid-feedback d-block">{{$message
                                                                            }}</div>
                                                                        @enderror
                                                                    </div>
                                                                </div>
                                                                <div class="col-lg-3">
                                                                    <div class="fv-row mb-3">
                                                                        <label class="form-label">Section Three Tab
                                                                            three
                                                                            List three</label>
                                                                        <input type="url"
                                                                            class="form-control form-control-solid form-control-sm @error('section_three_tab_three_title') is-invalid @enderror"
                                                                            name="section_three_tab_three_list_2"
                                                                            id="validationCustom01"
                                                                            placeholder="Enter Section Three Tab three List three">
                                                                        @error('section_three_tab_three_list_2')
                                                                        <div class="invalid-feedback d-block">{{
                                                                            $message }}</div>
                                                                        @enderror
                                                                    </div>
                                                                </div>
                                                                <div class="col-lg-3">
                                                                    <div class="fv-row mb-3">
                                                                        <label class="form-label">Section Three Tab
                                                                            three
                                                                            List Three</label>
                                                                        <input type="url"
                                                                            class="form-control form-control-solid form-control-sm @error('section_three_tab_three_title') is-invalid @enderror"
                                                                            name="section_three_tab_three_list_3"
                                                                            id="validationCustom01"
                                                                            placeholder="Enter Section Three Tab three List Three">
                                                                        @error('section_three_tab_three_list_3')
                                                                        <div class="invalid-feedback d-block">{{
                                                                            $message }}</div>
                                                                        @enderror
                                                                    </div>
                                                                </div>
                                                                <div class="col-lg-3">
                                                                    <div class="fv-row mb-3">
                                                                        <label class="form-label">Section Three Tab
                                                                            three
                                                                            List Four</label>
                                                                        <input type="url"
                                                                            class="form-control form-control-solid form-control-sm @error('section_three_tab_three_title') is-invalid @enderror"
                                                                            name="section_three_tab_three_list_4"
                                                                            id="validationCustom01"
                                                                            placeholder="Enter Section Three Tab three List Four">
                                                                        @error('section_three_tab_three_list_4')
                                                                        <div class="invalid-feedback d-block">{{
                                                                            $message }}</div>
                                                                        @enderror
                                                                    </div>
                                                                </div>
                                                                <div class="col-lg-3">
                                                                    <div class="fv-row mb-3">
                                                                        <label class="form-label">Section Three Tab
                                                                            three
                                                                            Quote</label>
                                                                        <input type="url"
                                                                            class="form-control form-control-solid form-control-sm @error('section_three_tab_three_title') is-invalid @enderror"
                                                                            name="section_three_tab_three_quote"
                                                                            maxlength="250" id="validationCustom01"
                                                                            placeholder="Enter Section Three Tab three Quote">
                                                                        @error('section_three_tab_three_quote')
                                                                        <div class="invalid-feedback d-block">{{
                                                                            $message }}</div>
                                                                        @enderror
                                                                    </div>
                                                                </div>
                                                                <div class="col-lg-3">
                                                                    <div class="fv-row mb-3">
                                                                        <label class="form-label">Section Three Tab
                                                                            three
                                                                            Quote Author</label>
                                                                        <input type="url"
                                                                            class="form-control form-control-solid form-control-sm @error('section_three_tab_three_quote_author') is-invalid @enderror"
                                                                            name="section_three_tab_three_quote_author"
                                                                            id="validationCustom01"
                                                                            placeholder="Enter Section Three Tab three Quote Author">
                                                                        @error('section_three_tab_three_quote_author')
                                                                        <div class="invalid-feedback d-block">{{
                                                                            $message }}</div>
                                                                        @enderror
                                                                    </div>
                                                                </div>
                                                                <div class="col-lg-3">
                                                                    <div class="fv-row mb-3">
                                                                        <label class="form-label">Section Three Tab
                                                                            three
                                                                            Button Name</label>
                                                                        <input type="url"
                                                                            class="form-control form-control-solid form-control-sm @error('section_three_tab_three_button_name') is-invalid @enderror"
                                                                            name="section_three_tab_three_button_name"
                                                                            id="validationCustom01"
                                                                            placeholder="Enter Section Three Tab three Button Name">
                                                                        @error('section_three_tab_three_button_name')
                                                                        <div class="invalid-feedback d-block">{{
                                                                            $message }}</div>
                                                                        @enderror
                                                                    </div>
                                                                </div>
                                                                <div class="col-lg-6">
                                                                    <div class="fv-row mb-3">
                                                                        <label class="form-label">Section Three Tab
                                                                            three
                                                                            Button Link</label>
                                                                        <input type="url"
                                                                            class="form-control form-control-solid form-control-sm @error('section_three_tab_three_button_link') is-invalid @enderror"
                                                                            name="section_three_tab_three_button_link"
                                                                            id="validationCustom01"
                                                                            placeholder="Enter Section Three Tab three Button Link">
                                                                        @error('section_three_tab_three_button_link')
                                                                        <div class="invalid-feedback d-block">{{
                                                                            $message }}</div>
                                                                        @enderror
                                                                    </div>
                                                                </div>
                                                                <div class="col-lg-6">
                                                                    <div class="fv-row mb-3">
                                                                        <label class="form-label">Section Three Tab
                                                                            three
                                                                            Detailed Description</label>
                                                                        <textarea rows="1"
                                                                            name="section_three_tab_three_detailed_description"
                                                                            class="form-control form-control-sm form-control-solid @error('section_three_tab_three_detailed_description') is-invalid @enderror"
                                                                            placeholder="Enter Section Three Tab three Detailed Description"></textarea>
                                                                        @error('section_three_tab_three_detailed_description')
                                                                        <div class="invalid-feedback d-block">{{$message
                                                                            }}</div>
                                                                        @enderror
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-12 px-5">
                                                    <div class="row border p-4">
                                                        <p class="badge badge-info custom-badge"
                                                            style="margin-top: -15px; width: 13%">Tab four</span>
                                                        <div class="col-lg-12">
                                                            <div class="row">
                                                                <div class="col-lg-6">
                                                                    <div class="fv-row mb-3">
                                                                        <label class="form-label">Section four Tab four
                                                                            Title</label>
                                                                        <input type="url"
                                                                            class="form-control form-control-solid form-control-sm @error('section_four_tab_four_title') is-invalid @enderror"
                                                                            name="section_four_tab_four_title"
                                                                            id="validationCustom01"
                                                                            placeholder="Enter Section four Tab four Title">
                                                                        @error('section_four_tab_four_title')
                                                                        <div class="invalid-feedback d-block">{{
                                                                            $message }}</div>
                                                                        @enderror
                                                                    </div>
                                                                </div>
                                                                <div class="col-lg-6">
                                                                    <div class="fv-row mb-3">
                                                                        <label class="form-label">Section four Tab four
                                                                            Short
                                                                            Description</label>
                                                                        <textarea rows="1"
                                                                            name="section_four_tab_four_short_description"
                                                                            class="form-control form-control-sm form-control-solid @error('section_four_tab_four_short_description') is-invalid @enderror"
                                                                            placeholder="Enter Section four Tab four Short Description"></textarea>
                                                                        @error('section_four_tab_four_short_description')
                                                                        <div class="invalid-feedback d-block">{{
                                                                            $message }}</div>
                                                                        @enderror
                                                                    </div>
                                                                </div>
                                                                <div class="col-lg-3">
                                                                    <div class="fv-row mb-3">
                                                                        <label class="form-label">Section four Tab four
                                                                            List Title</label>
                                                                        <input type="url"
                                                                            class="form-control form-control-solid form-control-sm @error('section_four_tab_four_list_title') is-invalid @enderror"
                                                                            name="section_four_tab_four_list_title"
                                                                            id="validationCustom01"
                                                                            placeholder="Enter Section four Tab four List Title">
                                                                        @error('section_four_tab_four_list_title')
                                                                        <div class="invalid-feedback d-block">{{
                                                                            $message }}</div>
                                                                        @enderror
                                                                    </div>
                                                                </div>
                                                                <div class="col-lg-3">
                                                                    <div class="fv-row mb-3">
                                                                        <label class="form-label">Section four Tab four
                                                                            List four</label>
                                                                        <input type="url"
                                                                            class="form-control form-control-solid form-control-sm @error('section_four_tab_four_title') is-invalid @enderror"
                                                                            name="section_four_tab_four_list_1"
                                                                            id="validationCustom01"
                                                                            placeholder="Enter Section four Tab four List four">
                                                                        @error('section_four_tab_four_list_1')
                                                                        <div class="invalid-feedback d-block">{{$message
                                                                            }}</div>
                                                                        @enderror
                                                                    </div>
                                                                </div>
                                                                <div class="col-lg-3">
                                                                    <div class="fv-row mb-3">
                                                                        <label class="form-label">Section four Tab four
                                                                            List four</label>
                                                                        <input type="url"
                                                                            class="form-control form-control-solid form-control-sm @error('section_four_tab_four_title') is-invalid @enderror"
                                                                            name="section_four_tab_four_list_2"
                                                                            id="validationCustom01"
                                                                            placeholder="Enter Section four Tab four List four">
                                                                        @error('section_four_tab_four_list_2')
                                                                        <div class="invalid-feedback d-block">{{
                                                                            $message }}</div>
                                                                        @enderror
                                                                    </div>
                                                                </div>
                                                                <div class="col-lg-3">
                                                                    <div class="fv-row mb-3">
                                                                        <label class="form-label">Section four Tab four
                                                                            List four</label>
                                                                        <input type="url"
                                                                            class="form-control form-control-solid form-control-sm @error('section_four_tab_four_title') is-invalid @enderror"
                                                                            name="section_four_tab_four_list_3"
                                                                            id="validationCustom01"
                                                                            placeholder="Enter Section four Tab four List four">
                                                                        @error('section_four_tab_four_list_3')
                                                                        <div class="invalid-feedback d-block">{{
                                                                            $message }}</div>
                                                                        @enderror
                                                                    </div>
                                                                </div>
                                                                <div class="col-lg-3">
                                                                    <div class="fv-row mb-3">
                                                                        <label class="form-label">Section four Tab four
                                                                            List Four</label>
                                                                        <input type="url"
                                                                            class="form-control form-control-solid form-control-sm @error('section_four_tab_four_title') is-invalid @enderror"
                                                                            name="section_four_tab_four_list_4"
                                                                            id="validationCustom01"
                                                                            placeholder="Enter Section four Tab four List Four">
                                                                        @error('section_four_tab_four_list_4')
                                                                        <div class="invalid-feedback d-block">{{
                                                                            $message }}</div>
                                                                        @enderror
                                                                    </div>
                                                                </div>
                                                                <div class="col-lg-3">
                                                                    <div class="fv-row mb-3">
                                                                        <label class="form-label">Section four Tab four
                                                                            Quote</label>
                                                                        <input type="url"
                                                                            class="form-control form-control-solid form-control-sm @error('section_four_tab_four_title') is-invalid @enderror"
                                                                            name="section_four_tab_four_quote"
                                                                            maxlength="250" id="validationCustom01"
                                                                            placeholder="Enter Section four Tab four Quote">
                                                                        @error('section_four_tab_four_quote')
                                                                        <div class="invalid-feedback d-block">{{
                                                                            $message }}</div>
                                                                        @enderror
                                                                    </div>
                                                                </div>
                                                                <div class="col-lg-3">
                                                                    <div class="fv-row mb-3">
                                                                        <label class="form-label">Section four Tab four
                                                                            Quote Author</label>
                                                                        <input type="url"
                                                                            class="form-control form-control-solid form-control-sm @error('section_four_tab_four_quote_author') is-invalid @enderror"
                                                                            name="section_four_tab_four_quote_author"
                                                                            id="validationCustom01"
                                                                            placeholder="Enter Section four Tab four Quote Author">
                                                                        @error('section_four_tab_four_quote_author')
                                                                        <div class="invalid-feedback d-block">{{
                                                                            $message }}</div>
                                                                        @enderror
                                                                    </div>
                                                                </div>
                                                                <div class="col-lg-3">
                                                                    <div class="fv-row mb-3">
                                                                        <label class="form-label">Section four Tab four
                                                                            Button Name</label>
                                                                        <input type="url"
                                                                            class="form-control form-control-solid form-control-sm @error('section_four_tab_four_button_name') is-invalid @enderror"
                                                                            name="section_four_tab_four_button_name"
                                                                            id="validationCustom01"
                                                                            placeholder="Enter Section four Tab four Button Name">
                                                                        @error('section_four_tab_four_button_name')
                                                                        <div class="invalid-feedback d-block">{{
                                                                            $message }}</div>
                                                                        @enderror
                                                                    </div>
                                                                </div>
                                                                <div class="col-lg-6">
                                                                    <div class="fv-row mb-3">
                                                                        <label class="form-label">Section four Tab four
                                                                            Button Link</label>
                                                                        <input type="url"
                                                                            class="form-control form-control-solid form-control-sm @error('section_four_tab_four_button_link') is-invalid @enderror"
                                                                            name="section_four_tab_four_button_link"
                                                                            id="validationCustom01"
                                                                            placeholder="Enter Section four Tab four Button Link">
                                                                        @error('section_four_tab_four_button_link')
                                                                        <div class="invalid-feedback d-block">{{
                                                                            $message }}</div>
                                                                        @enderror
                                                                    </div>
                                                                </div>
                                                                <div class="col-lg-6">
                                                                    <div class="fv-row mb-3">
                                                                        <label class="form-label">Section four Tab four
                                                                            Detailed Description</label>
                                                                        <textarea rows="1"
                                                                            name="section_four_tab_four_detailed_description"
                                                                            class="form-control form-control-sm form-control-solid @error('section_four_tab_four_detailed_description') is-invalid @enderror"
                                                                            placeholder="Enter Section four Tab four Detailed Description"></textarea>
                                                                        @error('section_four_tab_four_detailed_description')
                                                                        <div class="invalid-feedback d-block">{{$message
                                                                            }}</div>
                                                                        @enderror
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row mt-5 justify-content-end">
                                                    <div class="d-flex align-items-center justify-content-between">
                                                        <a class="btn btn-lg btn-info rounded-0 tab-trigger-previous"
                                                            data-bs-target="#section-two" aria-selected="false"
                                                            role="tab" tabindex="-1">
                                                            Previous
                                                            <span class="svg-icon svg-icon-4 ms-1 me-0">
                                                                <i class="fa-solid fa-arrow-right"></i>
                                                            </span>
                                                        </a>
                                                        <a class="btn btn-lg btn-info rounded-0 tab-trigger-next"
                                                            data-bs-toggle="tab" data-bs-target="#section-four"
                                                            aria-selected="false" role="tab" tabindex="-1">
                                                            Continue
                                                            <span class="svg-icon svg-icon-4 ms-1 me-0">
                                                                <i class="fa-solid fa-arrow-right"></i>
                                                            </span>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="section-four" role="tabpanel">
                                    <div class="w-100">
                                        <div class="pb-10 pb-lg-10">
                                            <h2
                                                class="fw-bolder d-flex justify-content-center align-items-center text-dark">
                                                Section Four
                                            </h2>
                                        </div>
                                        <div class="fv-row">
                                            <div class="row">
                                                <div class="col-lg-3">
                                                    <div class="fv-row mb-3">
                                                        <label class="form-label">Section Four Banner Middle
                                                            Image</label>
                                                        <input type="text"
                                                            class="form-control form-control-solid form-control-sm @error('section_four_banner_middle_image') is-invalid @enderror"
                                                            name="section_four_banner_middle_image"
                                                            id="validationCustom01"
                                                            placeholder="Enter Section Four Banner Middle Image">
                                                        @error('section_four_banner_middle_image')
                                                        <div class="invalid-feedback d-block">{{ $message }}</div>
                                                        @enderror
                                                    </div>
                                                </div>
                                                <div class="col-lg-3">
                                                    <div class="fv-row mb-3">
                                                        <label class="form-label">Section Four Col One Title</label>
                                                        <input type="text"
                                                            class="form-control form-control-solid form-control-sm @error('section_four_col_one_title') is-invalid @enderror"
                                                            name="section_four_col_one_title" id="validationCustom01"
                                                            placeholder="Enter Section Four Col One Title">
                                                        @error('section_four_col_one_title')
                                                        <div class="invalid-feedback d-block">{{ $message }}</div>
                                                        @enderror
                                                    </div>
                                                </div>
                                                <div class="col-lg-3">
                                                    <div class="fv-row mb-3">
                                                        <label class="form-label">Section Four Ceo Sign</label>
                                                        <input type="text"
                                                            class="form-control form-control-solid form-control-sm @error('section_four_ceo_sign') is-invalid @enderror"
                                                            name="section_four_ceo_sign" id="validationCustom01"
                                                            placeholder="Enter Section Four Ceo Sign">
                                                        @error('section_four_ceo_sign')
                                                        <div class="invalid-feedback d-block">{{ $message }}</div>
                                                        @enderror
                                                    </div>
                                                </div>
                                                <div class="col-lg-3">
                                                    <div class="fv-row mb-3">
                                                        <label class="form-label">Section Four Ceo Name</label>
                                                        <input type="text"
                                                            class="form-control form-control-solid form-control-sm @error('section_four_ceo_name') is-invalid @enderror"
                                                            name="section_four_ceo_name" id="validationCustom01"
                                                            placeholder="Enter Section Four Ceo Name">
                                                        @error('section_four_ceo_name')
                                                        <div class="invalid-feedback d-block">{{ $message }}</div>
                                                        @enderror
                                                    </div>
                                                </div>
                                                <div class="col-lg-3">
                                                    <div class="fv-row mb-3">
                                                        <label class="form-label">Section Four Ceo Designation</label>
                                                        <input type="text"
                                                            class="form-control form-control-solid form-control-sm @error('section_four_ceo_designation') is-invalid @enderror"
                                                            name="section_four_ceo_designation" id="validationCustom01"
                                                            placeholder="Enter Section Four Ceo Designation">
                                                        @error('section_four_ceo_designation')
                                                        <div class="invalid-feedback d-block">{{ $message }}</div>
                                                        @enderror
                                                    </div>
                                                </div>
                                                <div class="col-lg-3">
                                                    <div class="fv-row mb-3">
                                                        <label class="form-label">Section Four Ceo Facebook Account
                                                            Link</label>
                                                        <input type="text"
                                                            class="form-control form-control-solid form-control-sm @error('section_four_ceo_facebook_account_link') is-invalid @enderror"
                                                            name="section_four_ceo_facebook_account_link"
                                                            id="validationCustom01"
                                                            placeholder="Enter Section Four Ceo Facebook Account Link">
                                                        @error('section_four_ceo_facebook_account_link')
                                                        <div class="invalid-feedback d-block">{{ $message }}</div>
                                                        @enderror
                                                    </div>
                                                </div>
                                                <div class="col-lg-3">
                                                    <div class="fv-row mb-3">
                                                        <label class="form-label">Section Four Ceo Twitter Account
                                                            Link</label>
                                                        <input type="text"
                                                            class="form-control form-control-solid form-control-sm @error('section_four_ceo_twitter_account_link') is-invalid @enderror"
                                                            name="section_four_ceo_twitter_account_link"
                                                            id="validationCustom01"
                                                            placeholder="Enter Section Four Ceo Twitter Account Link">
                                                        @error('section_four_ceo_twitter_account_link')
                                                        <div class="invalid-feedback d-block">{{ $message }}</div>
                                                        @enderror
                                                    </div>
                                                </div>
                                                <div class="col-lg-3">
                                                    <div class="fv-row mb-3">
                                                        <label class="form-label">Section Four Ceo Whatsapp Account
                                                            Link</label>
                                                        <input type="text"
                                                            class="form-control form-control-solid form-control-sm @error('section_four_ceo_whatsapp_account_link') is-invalid @enderror"
                                                            name="section_four_ceo_whatsapp_account_link"
                                                            id="validationCustom01"
                                                            placeholder="Enter Section Four Ceo Whatsapp Account Link">
                                                        @error('section_four_ceo_whatsapp_account_link')
                                                        <div class="invalid-feedback d-block">{{ $message }}</div>
                                                        @enderror
                                                    </div>
                                                </div>
                                                <div class="col-lg-6">
                                                    <div class="fv-row mb-3">
                                                        <label class="form-label">Section Four Col One Description</label>
                                                        <textarea rows="1"
                                                            name="section_four_col_one_description"
                                                            class="form-control form-control-sm form-control-solid @error('section_four_col_one_description') is-invalid @enderror"
                                                            placeholder="Enter Section four Tab four Detailed Description"></textarea>
                                                        @error('section_four_col_one_description')
                                                        <div class="invalid-feedback d-block">{{$message
                                                            }}</div>
                                                        @enderror
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row border p-4">
                                                <p class="badge badge-info custom-badge"
                                                    style="margin-top: -15px; width: 13%">First Column</span>
                                                <div class="col-lg-12">

                                                </div>
                                            </div>
                                            <div class="row mt-5 justify-content-end">
                                                <div class="d-flex align-items-center justify-content-between">
                                                    <a class="btn btn-lg btn-info rounded-0 tab-trigger-previous"
                                                        data-bs-target="#section-three" aria-selected="false" role="tab"
                                                        tabindex="-1">
                                                        Previous
                                                        <span class="svg-icon svg-icon-4 ms-1 me-0">
                                                            <i class="fa-solid fa-arrow-right"></i>
                                                        </span>
                                                    </a>
                                                    <a class="btn btn-lg btn-info rounded-0 tab-trigger-next"
                                                        data-bs-toggle="tab" data-bs-target="#section-five"
                                                        aria-selected="false" role="tab" tabindex="-1">
                                                        Continue
                                                        <span class="svg-icon svg-icon-4 ms-1 me-0">
                                                            <i class="fa-solid fa-arrow-right"></i>
                                                        </span>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="section-five" role="tabpanel">
                                    <div class="w-100">
                                        <div class="pb-10 pb-lg-10">
                                            <h2
                                                class="fw-bolder d-flex justify-content-center align-items-center text-dark">
                                                Section Five
                                            </h2>
                                        </div>
                                        <div class="fv-row">
                                            asdasdasdasd
                                            <div class="row mt-2 justify-content-end">
                                                <div class="d-flex align-items-center justify-content-between">
                                                    <a class="btn btn-lg btn-info rounded-0 tab-trigger-previous"
                                                        data-bs-target="#section-four" aria-selected="false" role="tab"
                                                        tabindex="-1">
                                                        Previous
                                                        <span class="svg-icon svg-icon-4 ms-1 me-0">
                                                            <i class="fa-solid fa-arrow-right"></i>
                                                        </span>
                                                    </a>
                                                    <button class="btn btn-lg btn-info rounded-0" type="submit">
                                                        Submit
                                                        <span class="svg-icon svg-icon-4 ms-1 me-0">
                                                            <i class="fa-solid fa-arrow-right"></i>
                                                        </span>
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
@push('scripts')
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap-multiselect@0.9.16/dist/js/bootstrap-multiselect.min.js"></script>
<script>
    $(document).ready(function() {
            $('.nav-tabs a').click(function() {
                $(this).tab('show');
            });
        });
</script>

<script>
    $(document).ready(function() {
            // Function to validate and switch tabs
            function validateAndSwitchTab(targetTabId) {
                let isValid = true;


                // Get the index of the tab to be shown
                const activeTabHref = $('.tab-trigger.active').attr('href');
                $(activeTabHref).find('input, textarea, select').each(function() {
                    var $field = $(this);


                    // Check if it's a Select2 element
                    var isSelect2 = $field.hasClass('select2-hidden-accessible');


                    if ($field.prop('required') && $field.val() === '') {
                        isValid = false;


                        if (isSelect2) {
                            // Apply CSS based on the element type
                            $field.next('.select2-container').addClass('is-invalid');
                        } else {
                            $field.addClass('is-invalid');
                        }
                    }
                });


                if (!isValid) {
                    // Fields are not valid, prevent the tab switch
                    return false;
                } else {
                    // Fields are valid, switch to the next tab
                    switchTab(targetTabId);
                    return true;
                }
            }


            // Function to switch tabs
            function switchTab(targetTabId) {
                $('.nav-link[href="' + targetTabId + '"]').tab('show');
            }


            // Event handler for tab switch
            $('.tab-trigger').on('show.bs.tab', function(event) {
                return validateAndSwitchTab($(this).data('bs-target'));
            });


            // Event handler for input change
            $('.tab-content').on('input change', 'input, textarea, select', function() {
                var $field = $(this);
                var isSelect2 = $field.hasClass('select2-hidden-accessible');


                // Remove red border when user interacts with the field
                if (isSelect2) {
                    $field.next('.select2-container').removeClass('is-invalid');
                } else {
                    $field.removeClass('is-invalid');
                }
            });


            // Event handler for multi-select change
            $('.multiple-select').on('change', function() {
                // Remove validation error only from the changed multi-select field
                var $multiSelect = $(this);
                $multiSelect.removeClass('is-invalid');
            });


            // Event handler for the "Continue" button
            $('.tab-trigger-next').on('click', function(event) {
                // Assuming the data-bs-target attribute contains the tab ID to switch to
                const targetTabId = $(this).data('bs-target');


                // Validate and switch to the next tab
                validateAndSwitchTab(targetTabId);
            });


            // Event handler for the "Previous" button
            $('.tab-trigger-previous').on('click', function(event) {
                // Assuming the data-bs-target attribute contains the tab ID to switch to
                const targetTabId = $(this).data('bs-target');


                // Validate and switch to the previous tab
                validateAndSwitchTab(targetTabId);
            });
        });
</script>
@endpush