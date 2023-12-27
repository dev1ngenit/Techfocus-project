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
                    <h4 class="text-white p-0 m-0 fw-bold">Home Page Edit</h4>
                </div>
            </div>
            <div class="card-body p-0 pt-1">
                <div class="row gx-0">
                    <div class="col-lg-2">
                        <ul class="nav nav-tabs nav-pills border-0 flex-row flex-md-column mb-3 mb-md-0 fs-6"
                            role="tablist">
                            <li class="nav-item w-md-290px my-1 mt-0" role="presentation">
                                <a class="nav-link p-5 rounded-0 active tab-trigger" data-bs-toggle="tab"
                                    href="#section-one" aria-selected="true" role="tab">Section One</a>
                            </li>
                            <li class="nav-item w-md-290px my-1" role="presentation">
                                <a class="nav-link p-5 rounded-0 tab-trigger" data-bs-toggle="tab" href="#section-two"
                                    aria-selected="false" role="tab">Section Two</a>
                            </li>
                            <li class="nav-item w-md-290px my-1" role="presentation">
                                <a class="nav-link p-5 rounded-0 tab-trigger" data-bs-toggle="tab" href="#section-three"
                                    aria-selected="false" role="tab" tabindex="-1">Section Three</a>
                            </li>
                            <li class="nav-item w-md-290px my-1" role="presentation">
                                <a class="nav-link p-5 rounded-0 tab-trigger" data-bs-toggle="tab" href="#section-four"
                                    aria-selected="false" role="tab" tabindex="-1">Section Four</a>
                            </li>
                            <li class="nav-item w-md-290px my-1" role="presentation">
                                <a class="nav-link p-5 rounded-0 tab-trigger" data-bs-toggle="tab" href="#section-five"
                                    aria-selected="false" role="tab" tabindex="-1">Section Five</a>
                            </li>
                            <li class="nav-item w-md-290px my-1" role="presentation">
                                <a class="nav-link p-5 rounded-0 tab-trigger" data-bs-toggle="tab" href="#section-six"
                                    aria-selected="false" role="tab" tabindex="-1">Section Six</a>
                            </li>
                            <li class="nav-item w-md-290px my-1" role="presentation">
                                <a class="nav-link p-5 rounded-0 tab-trigger" data-bs-toggle="tab" href="#section-seven"
                                    aria-selected="false" role="tab" tabindex="-1">Section Seven</a>
                            </li>
                        </ul>
                    </div>
                    <div class="col-lg-10 px-4 p-2">
                        <form id="productForm" method="POST" action="{{ route('admin.solution-details.store') }}"
                            enctype="multipart/form-data">
                            @csrf
                            <div class="tab-content" id="myTabContent">
                                <div class="tab-pane fade active show" id="section-one" role="tabpanel">
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
                                                <div class="col-lg-4">
                                                    <div class="fv-row mb-3">
                                                        <label class="form-label">Country Name</label>
                                                        <select
                                                            class="form-select form-select-solid @error('country_id') is-invalid @enderror"
                                                            name="country_id" id="field2" multiple
                                                            multiselect-search="true" multiselect-select-all="true"
                                                            multiselect-max-items="4"
                                                            onchange="console.log(this.selectedOptions)">
                                                            <option value="">aasdasd</option>
                                                        </select>
                                                        @error('country_id')
                                                        <div class="invalid-feedback d-block">{{ $message }}</div>
                                                        @enderror
                                                    </div>
                                                </div>
                                                <div class="col-lg-4">
                                                    <div class="fv-row mb-3">
                                                        <label class="form-label">Section One Name</label>
                                                        <input type="text"
                                                            class="form-control form-control-solid form-control-sm @error('section_one_name') is-invalid @enderror"
                                                            name="section_one_name" id="validationCustom01"
                                                            placeholder="Enter Section One Name">
                                                        @error('section_one_name')
                                                        <div class="invalid-feedback d-block">{{ $message }}</div>
                                                        @enderror
                                                    </div>
                                                </div>
                                                <div class="col-lg-4">
                                                    <div class="fv-row mb-3">
                                                        <label class="form-label">Section One Badge</label>
                                                        <input type="text"
                                                            class="form-control form-control-solid form-control-sm @error('section_one_badge') is-invalid @enderror"
                                                            name="section_one_badge" id="validationCustom01"
                                                            placeholder="Enter Section One Badge">
                                                        @error('section_one_badge')
                                                        <div class="invalid-feedback d-block">{{ $message }}</div>
                                                        @enderror
                                                    </div>
                                                </div>
                                                <div class="col-lg-4">
                                                    <div class="fv-row mb-3">
                                                        <label class="form-label">Section One Image</label>
                                                        <input type="file"
                                                            class="form-control form-control-solid form-control-sm @error('') is-invalid @enderror"
                                                            name="section_one_image" id="validationCustom01"
                                                            placeholder="Enter Section One Image">
                                                        @error('section_one_image')
                                                        <div class="invalid-feedback d-block">{{ $message }}</div>
                                                        @enderror
                                                    </div>
                                                </div>
                                                <div class="col-lg-4">
                                                    <div class="fv-row mb-3">
                                                        <label class="form-label">Section One Title</label>
                                                        <input type="text"
                                                            class="form-control form-control-solid form-control-sm @error('section_one_title') is-invalid @enderror"
                                                            name="section_one_title" id="validationCustom01"
                                                            placeholder="Enter Section One Title">
                                                        @error('section_one_title')
                                                        <div class="invalid-feedback d-block">{{ $message }}</div>
                                                        @enderror
                                                    </div>
                                                </div>
                                                <div class="col-lg-4">
                                                    <div class="fv-row mb-3">
                                                        <label class="form-label">Section One Link</label>
                                                        <textarea rows="1" name=""
                                                            class="form-control form-control-sm form-control-solid @error('section_one_link') is-invalid @enderror"
                                                            placeholder="Enter Section One Link"></textarea>
                                                        @error('section_one_link')
                                                        <div class="invalid-feedback d-block">{{ $message }}</div>
                                                        @enderror
                                                    </div>
                                                </div>
                                                <div class="col-lg-12">
                                                    <div class="fv-row mb-3">
                                                        <label class="form-label">Section One Description</label>
                                                        <textarea name="section_one_description"
                                                            class="tox-target kt_docs_tinymce_plugins @error('section_one_description') is-invalid @enderror"></textarea>
                                                        @error('section_one_description')
                                                        <div class="invalid-feedback d-block">{{ $message }}</div>
                                                        @enderror
                                                    </div>
                                                </div>
                                                <div class="col-lg-4">
                                                    <div class="fv-row mb-3">
                                                        <label class="form-label">Section One Button</label>
                                                        <input type="text"
                                                            class="form-control form-control-solid form-control-sm @error('section_one_button') is-invalid @enderror"
                                                            name="section_one_button" id="validationCustom01"
                                                            placeholder="Enter Section One Button">
                                                        @error('section_one_button')
                                                        <div class="invalid-feedback d-block">{{ $message }}</div>
                                                        @enderror
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row mt-2 justify-content-end">
                                                <div class="d-flex align-items-center justify-content-end ">
                                                    <a class="btn btn-lg btn-info rounded-0 tab-trigger-next"
                                                        data-bs-toggle="tab" data-bs-target="#section-two"
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
                                <div class="tab-pane fade" id="section-two" role="tabpanel">
                                    <div class="w-100">
                                        <div class="pb-10 pb-lg-10">
                                            <h2
                                                class="fw-bolder d-flex justify-content-center align-items-center text-dark">
                                                Section Two
                                            </h2>
                                        </div>
                                        <div class="fv-row">
                                            <div class="row">
                                                <div class="col-lg-6">
                                                    <div class="fv-row mb-3">
                                                        <div class="fv-row mb-3">
                                                            <label class="form-label">Section Two Name</label>
                                                            <input type="text"
                                                                class="form-control form-control-solid form-control-sm @error('') is-invalid @enderror"
                                                                name="section_two_name" id="validationCustom01"
                                                                placeholder="Enter Row One Badge">
                                                            @error('section_two_name')
                                                            <div class="invalid-feedback d-block">{{ $message }}</div>
                                                            @enderror
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-4">
                                                    <div class="fv-row mb-3">
                                                        <label class="form-label">Section Two Name</label>
                                                        <select
                                                            class="form-select form-select-solid @error('') is-invalid @enderror"
                                                            name="section_two_products[]" id="field2" multiple
                                                            multiselect-search="true" multiselect-select-all="true"
                                                            multiselect-max-items="4"
                                                            onchange="console.log(this.selectedOptions)">
                                                            <option value="">aasdasd</option>
                                                        </select>
                                                        @error('section_two_products')
                                                        <div class="invalid-feedback d-block">{{ $message }}</div>
                                                        @enderror
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row mt-5 justify-content-end">
                                                <div class="d-flex align-items-center justify-content-between">
                                                    <a class="btn btn-lg btn-info rounded-0 tab-trigger-previous"
                                                        data-bs-target="#section-one" aria-selected="false" role="tab"
                                                        tabindex="-1">
                                                        Previous
                                                        <span class="svg-icon svg-icon-4 ms-1 me-0">
                                                            <i class="fa-solid fa-arrow-right"></i>
                                                        </span>
                                                    </a>
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
                                </div>
                                <div class="tab-pane fade" id="section-three" role="tabpanel">
                                    <div class="w-100">
                                        <div class="pb-10 pb-lg-10">
                                            <h2
                                                class="fw-bolder d-flex justify-content-center align-items-center text-dark">
                                                Section Three
                                            </h2>
                                        </div>
                                        <div class="fv-row">
                                            <div class="row">
                                                <div class="col-lg-4">
                                                    <div class="fv-row mb-3">
                                                        <label class="form-label">Section Three Name</label>
                                                        <input type="text"
                                                            class="form-control form-control-solid form-control-sm @error('') is-invalid @enderror"
                                                            name="section_three_name" id="validationCustom01"
                                                            placeholder="Enter Section Three Name">
                                                        @error('section_three_name')
                                                        <div class="invalid-feedback d-block">{{ $message }}</div>
                                                        @enderror
                                                    </div>
                                                </div>
                                                <div class="col-lg-4">
                                                    <div class="fv-row mb-3">
                                                        <label class="form-label">Section Three Badge</label>
                                                        <input type="text"
                                                            class="form-control form-control-solid form-control-sm @error('') is-invalid @enderror"
                                                            name="section_three_badge" id="validationCustom01"
                                                            placeholder="Enter Section Three Badge">
                                                        @error('section_three_badge')
                                                        <div class="invalid-feedback d-block">{{ $message }}</div>
                                                        @enderror
                                                    </div>
                                                </div>
                                                <div class="col-lg-4">
                                                    <div class="fv-row mb-3">
                                                        <label class="form-label">Section Three Title</label>
                                                        <input type="text"
                                                            class="form-control form-control-solid form-control-sm @error('') is-invalid @enderror"
                                                            name="section_three_title" id="validationCustom01"
                                                            placeholder="Enter Section Three Title">
                                                        @error('section_three_title')
                                                        <div class="invalid-feedback d-block">{{ $message }}</div>
                                                        @enderror
                                                    </div>
                                                </div>
                                                <div class="col-lg-4">
                                                    <div class="fv-row mb-3">
                                                        <label class="form-label">Section Three Button</label>
                                                        <input type="text"
                                                            class="form-control form-control-solid form-control-sm @error('') is-invalid @enderror"
                                                            name="section_three_button" id="validationCustom01"
                                                            placeholder="Enter Section Three Button">
                                                        @error('section_three_button')
                                                        <div class="invalid-feedback d-block">{{ $message }}</div>
                                                        @enderror
                                                    </div>
                                                </div>
                                                <div class="col-lg-4">
                                                    <div class="fv-row mb-3">
                                                        <label class="form-label">Section Three First Column
                                                            Logo</label>
                                                        <input type="file"
                                                            class="form-control form-control-solid form-control-sm @error('') is-invalid @enderror"
                                                            name="" id="validationCustom01"
                                                            placeholder="Enter Section Three First Column Logo">
                                                        @error('section_three_first_column_logo')
                                                        <div class="invalid-feedback d-block">{{ $message }}</div>
                                                        @enderror
                                                    </div>
                                                </div>
                                                <div class="col-lg-4">
                                                    <div class="fv-row mb-3">
                                                        <label class="form-label">Section Three First Column
                                                            Title</label>
                                                        <input type="text"
                                                            class="form-control form-control-solid form-control-sm @error('') is-invalid @enderror"
                                                            name="section_three_first_column_title"
                                                            id="validationCustom01"
                                                            placeholder="Enter Section Three First Column Title">
                                                        @error('section_three_first_column_title')
                                                        <div class="invalid-feedback d-block">{{ $message }}</div>
                                                        @enderror
                                                    </div>
                                                </div>
                                                <div class="col-lg-4">
                                                    <div class="fv-row mb-3">
                                                        <label class="form-label">Section Three Second Column
                                                            Logo</label>
                                                        <input type="file"
                                                            class="form-control form-control-solid form-control-sm @error('') is-invalid @enderror"
                                                            name="section_three_second_column_logo"
                                                            id="validationCustom01"
                                                            placeholder="Enter Section One Title">
                                                        @error('section_three_second_column_logo')
                                                        <div class="invalid-feedback d-block">{{ $message }}</div>
                                                        @enderror
                                                    </div>
                                                </div>
                                                <div class="col-lg-4">
                                                    <div class="fv-row mb-3">
                                                        <label class="form-label">Section Three Second Column
                                                            Title</label>
                                                        <input type="text"
                                                            class="form-control form-control-solid form-control-sm @error('') is-invalid @enderror"
                                                            name="section_three_second_column_title"
                                                            id="validationCustom01"
                                                            placeholder="Enter Section Three Second Column Title">
                                                        @error('section_three_second_column_title')
                                                        <div class="invalid-feedback d-block">{{ $message }}</div>
                                                        @enderror
                                                    </div>
                                                </div>
                                                <div class="col-lg-4">
                                                    <div class="fv-row mb-3">
                                                        <label class="form-label">Section Three Third Column
                                                            Logo</label>
                                                        <input type="file"
                                                            class="form-control form-control-solid form-control-sm @error('') is-invalid @enderror"
                                                            name="section_three_third_column_logo"
                                                            id="validationCustom01"
                                                            placeholder="Enter Section Three Third Column Logo">
                                                        @error('section_three_third_column_logo')
                                                        <div class="invalid-feedback d-block">{{ $message }}</div>
                                                        @enderror
                                                    </div>
                                                </div>
                                                <div class="col-lg-4">
                                                    <div class="fv-row mb-3">
                                                        <label class="form-label">Section Three Third Column
                                                            Title</label>
                                                        <input type="text"
                                                            class="form-control form-control-solid form-control-sm @error('') is-invalid @enderror"
                                                            name="section_three_third_column_title"
                                                            id="validationCustom01"
                                                            placeholder="Enter Section Three Third Column Title">
                                                        @error('section_three_third_column_title')
                                                        <div class="invalid-feedback d-block">{{ $message }}</div>
                                                        @enderror
                                                    </div>
                                                </div>
                                                <div class="col-lg-4">
                                                    <div class="fv-row mb-3">
                                                        <label class="form-label">Section Three Fourth Column
                                                            Logo</label>
                                                        <input type="file"
                                                            class="form-control form-control-solid form-control-sm @error('') is-invalid @enderror"
                                                            name="section_three_fourth_column_logo"
                                                            id="validationCustom01"
                                                            placeholder="Enter Section Three Fourth Column Logo">
                                                        @error('section_three_fourth_column_logo')
                                                        <div class="invalid-feedback d-block">{{ $message }}</div>
                                                        @enderror
                                                    </div>
                                                </div>
                                                <div class="col-lg-4">
                                                    <div class="fv-row mb-3">
                                                        <label class="form-label">Section Three Fourth Column
                                                            Title</label>
                                                        <input type="text"
                                                            class="form-control form-control-solid form-control-sm @error('') is-invalid @enderror"
                                                            name="section_three_fourth_column_title"
                                                            id="validationCustom01"
                                                            placeholder="Enter Section Three Fourth Column Title">
                                                        @error('section_three_fourth_column_title')
                                                        <div class="invalid-feedback d-block">{{ $message }}</div>
                                                        @enderror
                                                    </div>
                                                </div>
                                                <div class="col-lg-4">
                                                    <div class="fv-row mb-3">
                                                        <label class="form-label">Section Three Link</label>
                                                        <textarea name="" placeholder="Enter Section Three Link"
                                                            class="form-control form-control-sm form-control-solid @error('section_three_link') is-invalid @enderror"></textarea>
                                                        @error('section_three_link')
                                                        <div class="invalid-feedback d-block">{{ $message }}</div>
                                                        @enderror
                                                    </div>
                                                </div>
                                                <div class="col-lg-4">
                                                    <div class="fv-row mb-3">
                                                        <label class="form-label">Section Three Fist Column Link</label>
                                                        <textarea name="" row="1"
                                                            placeholder="Enter Section Three Fist Column Link"
                                                            class="form-control form-control-sm form-control-solid @error('section_three_first_column_link') is-invalid @enderror"></textarea>
                                                        @error('section_three_first_column_link')
                                                        <div class="invalid-feedback d-block">{{ $message }}</div>
                                                        @enderror
                                                    </div>
                                                </div>
                                                <div class="col-lg-4">
                                                    <div class="fv-row mb-3">
                                                        <label class="form-label">Section Three Second Column
                                                            Link</label>
                                                        <textarea name="" row="1"
                                                            placeholder="Enter Section Three Second Column Link"
                                                            class="form-control form-control-sm form-control-solid @error('section_three_second_column_link') is-invalid @enderror"></textarea>
                                                        @error('section_three_second_column_link')
                                                        <div class="invalid-feedback d-block">{{ $message }}</div>
                                                        @enderror
                                                    </div>
                                                </div>
                                                <div class="col-lg-4">
                                                    <div class="fv-row mb-3">
                                                        <label class="form-label">Section Three Third Column
                                                            Link</label>
                                                        <textarea name="" row="1"
                                                            placeholder="Enter Section Three Third Column Link"
                                                            class="form-control form-control-sm form-control-solid @error('section_three_third_column_link') is-invalid @enderror"></textarea>
                                                        @error('section_three_third_column_link')
                                                        <div class="invalid-feedback d-block">{{ $message }}</div>
                                                        @enderror
                                                    </div>
                                                </div>
                                                <div class="col-lg-4">
                                                    <div class="fv-row mb-3">
                                                        <label class="form-label">Section Three Fourth Column
                                                            Link</label>
                                                        <textarea name="" row="1"
                                                            placeholder="Enter Section Three Fourth Column Link"
                                                            class="form-control form-control-sm form-control-solid @error('section_three_fourth_column_link') is-invalid @enderror"></textarea>
                                                        @error('section_three_fourth_column_link')
                                                        <div class="invalid-feedback d-block">{{ $message }}</div>
                                                        @enderror
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row mt-5 justify-content-end">
                                                <div class="d-flex align-items-center justify-content-between">
                                                    <a class="btn btn-lg btn-info rounded-0 tab-trigger-previous"
                                                        data-bs-target="#section-two" aria-selected="false" role="tab"
                                                        tabindex="-1">
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
                                <div class="tab-pane fade" id="section-four" role="tabpanel">
                                    <div class="w-100">
                                        <div class="pb-10 pb-lg-10">
                                            <h2
                                                class="fw-bolder d-flex justify-content-center align-items-center text-dark">
                                                Row Five
                                            </h2>
                                        </div>
                                        <div class="fv-row">
                                            <div class="row">
                                                <div class="col-lg-6">
                                                    <div class="fv-row mb-3">
                                                        <label class="form-label">Section Four Name</label>
                                                        <input type="text"
                                                            class="form-control form-control-solid form-control-sm"
                                                            name="" id="validationCustom01"
                                                            placeholder="Enter Section Four Name">
                                                        <div class="invalid-feedback"> Please Enter Section Four Name
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-6">
                                                    <div class="fv-row mb-3">
                                                        <label class="form-label">Section Four Contents</label>
                                                        <select
                                                            class="form-select form-select-solid @error('') is-invalid @enderror"
                                                            name="section_four_contents[]" id="field2" multiple
                                                            multiselect-search="true" multiselect-select-all="true"
                                                            multiselect-max-items="4"
                                                            onchange="console.log(this.selectedOptions)">
                                                            <option value="">aasdasd</option>
                                                        </select>
                                                        @error('section_four_contents')
                                                        <div class="invalid-feedback d-block">{{ $message }}</div>
                                                        @enderror
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row mt-2 justify-content-end">
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
                                                Row Five
                                            </h2>
                                        </div>
                                        <div class="fv-row">
                                            <div class="row">
                                                <div class="col-lg-4">
                                                    <div class="fv-row mb-3">
                                                        <label class="form-label">Section Five Title</label>
                                                        <input type="text"
                                                            class="form-control form-control-solid form-control-sm @error('') is-invalid @enderror"
                                                            name="section_five_title" id="validationCustom01"
                                                            placeholder="Enter Section Five Title">
                                                        @error('section_five_title')
                                                        <div class="invalid-feedback d-block">{{ $message }}</div>
                                                        @enderror
                                                    </div>
                                                </div>
                                                <div class="col-lg-4">
                                                    <div class="fv-row mb-3">
                                                        <label class="form-label">Section Five Link One Title</label>
                                                        <input type="text"
                                                            class="form-control form-control-solid form-control-sm @error('') is-invalid @enderror"
                                                            name="section_five_link_one_title" id="validationCustom01"
                                                            placeholder="Enter Section Five Link One Title">
                                                        @error('section_five_link_one_title')
                                                        <div class="invalid-feedback d-block">{{ $message }}</div>
                                                        @enderror
                                                    </div>
                                                </div>
                                                <div class="col-lg-4">
                                                    <div class="fv-row mb-3">
                                                        <label class="form-label">Section Five Link One Icon</label>
                                                        <input type="text"
                                                            class="form-control form-control-solid form-control-sm @error('') is-invalid @enderror"
                                                            name="section_five_link_one_icon" id="validationCustom01"
                                                            placeholder="Enter Section Five Link One Icon">
                                                        @error('section_five_link_one_icon')
                                                        <div class="invalid-feedback d-block">{{ $message }}</div>
                                                        @enderror
                                                    </div>
                                                </div>
                                                <div class="col-lg-4">
                                                    <div class="fv-row mb-3">
                                                        <label class="form-label">Section Five Link One Link</label>
                                                        <input type="text"
                                                            class="form-control form-control-solid form-control-sm @error('') is-invalid @enderror"
                                                            name="section_five_link_one_link" id="validationCustom01"
                                                            placeholder="Enter Section Five Link One Link">
                                                        @error('section_five_link_one_link')
                                                        <div class="invalid-feedback d-block">{{ $message }}</div>
                                                        @enderror
                                                    </div>
                                                </div>
                                                <div class="col-lg-4">
                                                    <div class="fv-row mb-3">
                                                        <label class="form-label">Section Five Link Two Title</label>
                                                        <input type="text"
                                                            class="form-control form-control-solid form-control-sm @error('') is-invalid @enderror"
                                                            name="section_five_link_two_title" id="validationCustom01"
                                                            placeholder="Enter Section Five Link Two Title">
                                                        @error('section_five_link_two_title')
                                                        <div class="invalid-feedback d-block">{{ $message }}</div>
                                                        @enderror
                                                    </div>
                                                </div>
                                                <div class="col-lg-4">
                                                    <div class="fv-row mb-3">
                                                        <label class="form-label">Section Five Link Two Icon</label>
                                                        <input type="text"
                                                            class="form-control form-control-solid form-control-sm @error('section_five_link_two_icon') is-invalid @enderror"
                                                            name="section_five_link_two_icon" id="validationCustom01"
                                                            placeholder="Enter Section Five Link Two Icon">
                                                        @error('section_five_link_two_icon')
                                                        <div class="invalid-feedback d-block">{{ $message }}</div>
                                                        @enderror
                                                    </div>
                                                </div>
                                                <div class="col-lg-4">
                                                    <div class="fv-row mb-3">
                                                        <label class="form-label">Section Five Link Two Link</label>
                                                        <input type="text"
                                                            class="form-control form-control-solid form-control-sm @error('') is-invalid @enderror"
                                                            name="section_five_link_two_link" id="validationCustom01"
                                                            placeholder="Enter Section Five Link Two Link">
                                                        @error('section_five_link_two_link')
                                                        <div class="invalid-feedback d-block">{{ $message }}</div>
                                                        @enderror
                                                    </div>
                                                </div>
                                                <div class="col-lg-4">
                                                    <div class="fv-row mb-3">
                                                        <label class="form-label">Section Five Link Three Title</label>
                                                        <input type="text"
                                                            class="form-control form-control-solid form-control-sm @error('') is-invalid @enderror"
                                                            name="section_five_link_three_title" id="validationCustom01"
                                                            placeholder="Enter Section Five Link Three Title">
                                                        @error('section_five_link_three_title')
                                                        <div class="invalid-feedback d-block">{{ $message }}</div>
                                                        @enderror
                                                    </div>
                                                </div>
                                                <div class="col-lg-4">
                                                    <div class="fv-row mb-3">
                                                        <label class="form-label">Section Five Link Three Icon</label>
                                                        <input type="text"
                                                            class="form-control form-control-solid form-control-sm @error('') is-invalid @enderror"
                                                            name="section_five_link_three_icon" id="validationCustom01"
                                                            placeholder="Enter Section Five Link Three Icon">
                                                        @error('section_five_link_three_icon')
                                                        <div class="invalid-feedback d-block">{{ $message }}</div>
                                                        @enderror
                                                    </div>
                                                </div>
                                                <div class="col-lg-4">
                                                    <div class="fv-row mb-3">
                                                        <label class="form-label">Section Five Link Three Link</label>
                                                        <input type="text"
                                                            class="form-control form-control-solid form-control-sm @error('') is-invalid @enderror"
                                                            name="section_five_link_three_link" id="validationCustom01"
                                                            placeholder="Enter Section Five Link Three Link">
                                                        @error('section_five_link_three_link')
                                                        <div class="invalid-feedback d-block">{{ $message }}</div>
                                                        @enderror
                                                    </div>
                                                </div>
                                                <div class="col-lg-4">
                                                    <div class="fv-row mb-3">
                                                        <label class="form-label">Section Five Button Title</label>
                                                        <input type="text"
                                                            class="form-control form-control-solid form-control-sm @error('') is-invalid @enderror"
                                                            name="section_five_button_title" id="validationCustom01"
                                                            placeholder="Enter Section Five Button Title">
                                                        @error('section_five_button_title')
                                                        <div class="invalid-feedback d-block">{{ $message }}</div>
                                                        @enderror
                                                    </div>
                                                </div>
                                                <div class="col-lg-4">
                                                    <div class="fv-row mb-3">
                                                        <label class="form-label">Section Five Button Sub Title</label>
                                                        <input type="text"
                                                            class="form-control form-control-solid form-control-sm @error('') is-invalid @enderror"
                                                            name="section_five_button_sub_title" id="validationCustom01"
                                                            placeholder="Enter Section Five Button Sub Title">
                                                        @error('section_five_button_sub_title')
                                                        <div class="invalid-feedback d-block">{{ $message }}</div>
                                                        @enderror
                                                    </div>
                                                </div>
                                                <div class="col-lg-4">
                                                    <div class="fv-row mb-3">
                                                        <label class="form-label">Section Five Button Link</label>
                                                        <input type="text"
                                                            class="form-control form-control-solid form-control-sm @error('') is-invalid @enderror"
                                                            name="section_five_button_link" id="validationCustom01"
                                                            placeholder="Enter Row One Badge">
                                                        @error('section_five_button_link')
                                                        <div class="invalid-feedback d-block">{{ $message }}</div>
                                                        @enderror
                                                    </div>
                                                </div>
                                            </div>
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
                                                    <a class="btn btn-lg btn-info rounded-0 tab-trigger-next"
                                                        data-bs-toggle="tab" data-bs-target="#section-six"
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
                                <div class="tab-pane fade" id="section-six" role="tabpanel">
                                    <div class="w-100">
                                        <div class="pb-10 pb-lg-10">
                                            <h2
                                                class="fw-bolder d-flex justify-content-center align-items-center text-dark">
                                                Row Six
                                            </h2>
                                        </div>
                                        <div class="fv-row">
                                            <div class="row border p-4">
                                                <p class="badge badge-info custom-badge"
                                                    style="margin-top: -15px; width: 13%">First Column</span>
                                                <div class="col-lg-12">
                                                    <div class="row">
                                                        <div class="col-lg-4">
                                                            <div class="fv-row mb-3">
                                                                <label class="form-label">Section Six Name</label>
                                                                <input type="text"
                                                                    class="form-control form-control-solid form-control-sm @error('') is-invalid @enderror"
                                                                    name="section_six_name" id="validationCustom01"
                                                                    placeholder="Enter Section Six Name">
                                                                @error('section_six_name')
                                                                <div class="invalid-feedback d-block">{{ $message }}
                                                                </div>
                                                                @enderror
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-4">
                                                            <div class="fv-row mb-3">
                                                                <label class="form-label">Section Six First Colum
                                                                    Image</label>
                                                                <input type="file"
                                                                    class="form-control form-control-solid form-control-sm @error('') is-invalid @enderror"
                                                                    name="section_six_first_column_image"
                                                                    id="validationCustom01"
                                                                    placeholder="Enter Section Six First Colum Image">
                                                                @error('section_six_first_column_image')
                                                                <div class="invalid-feedback d-block">{{ $message }}
                                                                </div>
                                                                @enderror
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-4">
                                                            <div class="fv-row mb-3">
                                                                <label class="form-label">Section Six First Column
                                                                    Title</label>
                                                                <input type="text"
                                                                    class="form-control form-control-solid form-control-sm @error('') is-invalid @enderror"
                                                                    name="section_six_first_column_title"
                                                                    id="validationCustom01"
                                                                    placeholder="Enter Section Six First Column Title">
                                                                @error('section_six_first_column_title')
                                                                <div class="invalid-feedback d-block">{{ $message }}
                                                                </div>
                                                                @enderror
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-4">
                                                            <div class="fv-row mb-3">
                                                                <label class="form-label">Section Six First Colum Button
                                                                    Name</label>
                                                                <input type="text"
                                                                    class="form-control form-control-solid form-control-sm @error('') is-invalid @enderror"
                                                                    name="section_six_first_column_button_name"
                                                                    id="validationCustom01"
                                                                    placeholder="Enter Section Six First Colum Button Name">
                                                                @error('section_six_first_column_button_name')
                                                                <div class="invalid-feedback d-block">{{ $message }}
                                                                </div>
                                                                @enderror
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-4">
                                                            <div class="fv-row mb-3">
                                                                <label class="form-label">Section Six First
                                                                    Column</label>
                                                                <textarea name=""
                                                                    placeholder="Enter Section Six First Column"
                                                                    class="form-control form-control-sm form-control-solid @error('section_six_first_column_description') is-invalid @enderror"></textarea>
                                                                @error('section_six_first_column_description')
                                                                <div class="invalid-feedback d-block">{{ $message }}
                                                                </div>
                                                                @enderror
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-4">
                                                            <div class="fv-row mb-3">
                                                                <label class="form-label">Section Six Fist Column Button
                                                                    Link</label>
                                                                <textarea name=""
                                                                    placeholder="Enter Section Six Fist Column Button Link"
                                                                    class="form-control form-control-sm form-control-solid @error('section_six_first_column_button_link') is-invalid @enderror"></textarea>
                                                                @error('section_six_first_column_button_link')
                                                                <div class="invalid-feedback d-block">{{ $message }}
                                                                </div>
                                                                @enderror
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row border p-4">
                                                <p class="badge badge-info custom-badge"
                                                    style="margin-top: -15px; width: 13%">Second Column</span>
                                                <div class="col-lg-12">
                                                    <div class="row">
                                                        <div class="col-lg-4">
                                                            <div class="fv-row mb-3">
                                                                <label class="form-label">Section Six Second Colum
                                                                    Image</label>
                                                                <input type="file"
                                                                    class="form-control form-control-solid form-control-sm @error('') is-invalid @enderror"
                                                                    name="section_six_second_column_image"
                                                                    id="validationCustom01"
                                                                    placeholder="Enter Section Six Second Colum Image">
                                                                @error('section_six_second_column_image')
                                                                <div class="invalid-feedback d-block">{{ $message }}
                                                                </div>
                                                                @enderror
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-4">
                                                            <div class="fv-row mb-3">
                                                                <label class="form-label">Section Six Second Column
                                                                    Title</label>
                                                                <input type="text"
                                                                    class="form-control form-control-solid form-control-sm @error('') is-invalid @enderror"
                                                                    name="section_six_second_column_title"
                                                                    id="validationCustom01"
                                                                    placeholder="Enter Section Six Second Column Title">
                                                                @error('section_six_second_column_title')
                                                                <div class="invalid-feedback d-block">{{ $message }}
                                                                </div>
                                                                @enderror
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-4">
                                                            <div class="fv-row mb-3">
                                                                <label class="form-label">Section Six Second Colum
                                                                    Button
                                                                    Name</label>
                                                                <input type="text"
                                                                    class="form-control form-control-solid form-control-sm @error('') is-invalid @enderror"
                                                                    name="section_six_second_column_button_name"
                                                                    id="validationCustom01"
                                                                    placeholder="Enter Section Six Second Colum Button Name">
                                                                @error('section_six_second_column_button_name')
                                                                <div class="invalid-feedback d-block">{{ $message }}
                                                                </div>
                                                                @enderror
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-4">
                                                            <div class="fv-row mb-3">
                                                                <label class="form-label">Section Six Second
                                                                    Column</label>
                                                                <textarea name=""
                                                                    placeholder="Enter Section Six Second Column"
                                                                    class="form-control form-control-sm form-control-solid @error('section_six_second_column_description') is-invalid @enderror"></textarea>
                                                                @error('section_six_second_column_description')
                                                                <div class="invalid-feedback d-block">{{ $message }}
                                                                </div>
                                                                @enderror
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-4">
                                                            <div class="fv-row mb-3">
                                                                <label class="form-label">Section Six Second Column
                                                                    Button Link</label>
                                                                <textarea name=""
                                                                    placeholder="Enter Section Six Fist Column Button Link"
                                                                    class="form-control form-control-sm form-control-solid @error('section_six_second_column_button_link') is-invalid @enderror"></textarea>
                                                                @error('section_six_second_column_button_link')
                                                                <div class="invalid-feedback d-block">{{ $message }}
                                                                </div>
                                                                @enderror
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row border p-4">
                                                <p class="badge badge-info custom-badge"
                                                    style="margin-top: -15px; width: 13%">Third Column</span>
                                                <div class="col-lg-12">
                                                    <div class="row">
                                                        <div class="col-lg-4">
                                                            <div class="fv-row mb-3">
                                                                <label class="form-label">Section Six Third Colum
                                                                    Image</label>
                                                                <input type="file"
                                                                    class="form-control form-control-solid form-control-sm @error('') is-invalid @enderror"
                                                                    name="section_six_third_column_image"
                                                                    id="validationCustom01"
                                                                    placeholder="Enter Section Six Third Colum Image">
                                                                @error('section_six_third_column_image')
                                                                <div class="invalid-feedback d-block">{{ $message }}
                                                                </div>
                                                                @enderror
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-4">
                                                            <div class="fv-row mb-3">
                                                                <label class="form-label">Section Six Third Column
                                                                    Title</label>
                                                                <input type="text"
                                                                    class="form-control form-control-solid form-control-sm @error('') is-invalid @enderror"
                                                                    name="section_six_third_column_title"
                                                                    id="validationCustom01"
                                                                    placeholder="Enter Section Six Third Column Title">
                                                                @error('section_six_third_column_title')
                                                                <div class="invalid-feedback d-block">{{ $message }}
                                                                </div>
                                                                @enderror
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-4">
                                                            <div class="fv-row mb-3">
                                                                <label class="form-label">Section Six Third Colum Button
                                                                    Name</label>
                                                                <input type="text"
                                                                    class="form-control form-control-solid form-control-sm @error('') is-invalid @enderror"
                                                                    name="section_six_third_column_button_name"
                                                                    id="validationCustom01"
                                                                    placeholder="Enter Section Six Third Colum Button Name">
                                                                @error('section_six_third_column_button_name')
                                                                <div class="invalid-feedback d-block">{{ $message }}
                                                                </div>
                                                                @enderror
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-4">
                                                            <div class="fv-row mb-3">
                                                                <label class="form-label">Section Six Third
                                                                    Column</label>
                                                                <textarea name=""
                                                                    placeholder="Enter Section Six Third Column"
                                                                    class="form-control form-control-sm form-control-solid @error('section_six_third_column_description') is-invalid @enderror"></textarea>
                                                                @error('section_six_third_column_description')
                                                                <div class="invalid-feedback d-block">{{ $message }}
                                                                </div>
                                                                @enderror
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-4">
                                                            <div class="fv-row mb-3">
                                                                <label class="form-label">Section Six Third Column
                                                                    Button Link</label>
                                                                <textarea name=""
                                                                    placeholder="Enter Section Six Fist Column Button Link"
                                                                    class="form-control form-control-sm form-control-solid @error('section_six_third_column_button_link') is-invalid @enderror"></textarea>
                                                                @error('section_six_third_column_button_link')
                                                                <div class="invalid-feedback d-block">{{ $message }}
                                                                </div>
                                                                @enderror
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row mt-2 justify-content-end">
                                                <div class="d-flex align-items-center justify-content-between">
                                                    <a class="btn btn-lg btn-info rounded-0 tab-trigger-previous"
                                                        data-bs-target="#section-five" aria-selected="false" role="tab"
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
                                <div class="tab-pane fade" id="section-seven" role="tabpanel">
                                    <div class="w-100">
                                        <div class="pb-10 pb-lg-10">
                                            <h2
                                                class="fw-bolder d-flex justify-content-center align-items-center text-dark">
                                                Section Seven
                                            </h2>
                                        </div>
                                        <div class="fv-row">
                                            <div class="row">
                                                <div class="col-md-4">
                                                    <div class="fv-row mb-3">
                                                        <label class="form-label">Section Seven Name</label>
                                                        <input type="text"
                                                            class="form-control form-control-solid form-control-sm @error('section_seven_name') is-invalid @enderror"
                                                            name="section_seven_name" id="validationCustom01"
                                                            placeholder="Enter Section Seven Name">
                                                        @error('section_seven_name')
                                                        <div class="invalid-feedback d-block">{{ $message }}</div>
                                                        @enderror
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <div class="fv-row mb-3">
                                                        <label class="form-label">Section Seven Badge</label>
                                                        <input type="text"
                                                            class="form-control form-control-solid form-control-sm @error('') is-invalid @enderror"
                                                            name="section_seven_badge" id="validationCustom01"
                                                            placeholder="Enter Section Seven Badge">
                                                        @error('section_seven_badge')
                                                        <div class="invalid-feedback d-block">{{ $message }}</div>
                                                        @enderror
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <div class="fv-row mb-3">
                                                        <label class="form-label">Section Seven Title</label>
                                                        <input type="text"
                                                            class="form-control form-control-solid form-control-sm @error('section_seven_title') is-invalid @enderror"
                                                            name="section_seven_title" id="validationCustom01"
                                                            placeholder="Enter Section Seven Title">
                                                        @error('section_seven_title')
                                                        <div class="invalid-feedback d-block">{{ $message }}</div>
                                                        @enderror
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <div class="fv-row mb-3">
                                                        <label class="form-label">Section Seven Button</label>
                                                        <input type="text"
                                                            class="form-control form-control-solid form-control-sm @error('section_seven_button') is-invalid @enderror"
                                                            name="section_seven_button" id="validationCustom01"
                                                            placeholder="Enter Section Seven Button">
                                                        @error('section_seven_button')
                                                        <div class="invalid-feedback d-block">{{ $message }}</div>
                                                        @enderror
                                                    </div>
                                                </div>
                                                <div class="col-lg-4">
                                                    <div class="fv-row mb-3">
                                                        <label class="form-label">Section Seven Link</label>
                                                        <textarea name="section_seven_link"
                                                            placeholder="Enter Section Seven Link"
                                                            class="form-control form-control-sm form-control-solid @error('section_seven_link') is-invalid @enderror"></textarea>
                                                        @error('section_seven_link')
                                                        <div class="invalid-feedback d-block">{{ $message }}</div>
                                                        @enderror
                                                    </div>
                                                </div>
                                                <div class="col-lg-12">
                                                    <div class="row border p-4">
                                                        <p class="badge badge-info custom-badge"
                                                            style="margin-top: -15px; width: 13%">First Grid</span>
                                                        <div class="row">
                                                            <div class="col-md-4">
                                                                <div class="fv-row mb-3">
                                                                    <label class="form-label">Section Seven First
                                                                        Grid
                                                                        Icon</label>
                                                                    <input type="file"
                                                                        class="form-control form-control-solid form-control-sm @error('section_seven_first_grid_icon') is-invalid @enderror"
                                                                        name="section_seven_first_grid_icon"
                                                                        id="validationCustom01"
                                                                        placeholder="Enter Section Seven First Grid Icon">
                                                                    @error('section_seven_first_grid_icon')
                                                                    <div class="invalid-feedback d-block">{{
                                                                        $message }}
                                                                    </div>
                                                                    @enderror
                                                                </div>
                                                            </div>
                                                            <div class="col-md-4">
                                                                <div class="fv-row mb-3">
                                                                    <label class="form-label">Section Seven First
                                                                        Grid
                                                                        Title</label>
                                                                    <input type="text"
                                                                        class="form-control form-control-solid form-control-sm @error('') is-invalid @enderror"
                                                                        name="section_seven_first_grid_title"
                                                                        id="validationCustom01"
                                                                        placeholder="Enter Section Seven First Grid Title">
                                                                    @error('section_seven_first_grid_title')
                                                                    <div class="invalid-feedback d-block">{{
                                                                        $message }}
                                                                    </div>
                                                                    @enderror
                                                                </div>
                                                            </div>
                                                            <div class="col-md-4">
                                                                <div class="fv-row mb-3">
                                                                    <label class="form-label">Section Seven First
                                                                        Grid
                                                                        Button</label>
                                                                    <input type="text"
                                                                        class="form-control form-control-solid form-control-sm @error('') is-invalid @enderror"
                                                                        name="section_seven_first_grid_button_name"
                                                                        id="validationCustom01"
                                                                        placeholder="Enter Section Seven First Grid Button">
                                                                    @error('section_seven_first_grid_button_name')
                                                                    <div class="invalid-feedback d-block">{{
                                                                        $message }}
                                                                    </div>
                                                                    @enderror
                                                                </div>
                                                            </div>
                                                            <div class="col-lg-4">
                                                                <div class="fv-row mb-3">
                                                                    <label class="form-label"> Section Seven Fist Grid
                                                                        Button Link</label>
                                                                    <textarea name=""
                                                                        placeholder="Enter Section Seven Link"
                                                                        class="form-control form-control-sm form-control-solid @error('section_seven_first_grid_button_link') is-invalid @enderror"></textarea>
                                                                    @error('section_seven_first_grid_button_link')
                                                                    <div class="invalid-feedback d-block">{{
                                                                        $message }}
                                                                    </div>
                                                                    @enderror
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="row border p-4">
                                                        <p class="badge badge-info custom-badge"
                                                            style="margin-top: -15px; width: 13%">Second Grid</span>
                                                        <div class="row">
                                                            <div class="col-md-4">
                                                                <div class="fv-row mb-3">
                                                                    <label class="form-label">Section Seven Second Grid
                                                                        Icon</label>
                                                                    <input type="file"
                                                                        class="form-control form-control-solid form-control-sm @error('') is-invalid @enderror"
                                                                        name="section_seven_second_grid_icon"
                                                                        id="validationCustom01"
                                                                        placeholder="Enter Section Seven Second Grid Icon">
                                                                    @error('section_seven_second_grid_icon')
                                                                    <div class="invalid-feedback d-block">{{
                                                                        $message }}
                                                                    </div>
                                                                    @enderror
                                                                </div>
                                                            </div>
                                                            <div class="col-md-4">
                                                                <div class="fv-row mb-3">
                                                                    <label class="form-label">Section Seven Second
                                                                        Grid
                                                                        Title</label>
                                                                    <input type="text"
                                                                        class="form-control form-control-solid form-control-sm @error('') is-invalid @enderror"
                                                                        name="section_seven_second_grid_title"
                                                                        id="validationCustom01"
                                                                        placeholder="Enter Section Seven Second Grid Title">
                                                                    @error('section_seven_second_grid_title')
                                                                    <div class="invalid-feedback d-block">{{
                                                                        $message }}
                                                                    </div>
                                                                    @enderror
                                                                </div>
                                                            </div>
                                                            <div class="col-md-4">
                                                                <div class="fv-row mb-3">
                                                                    <label class="form-label">Section Seven Second
                                                                        Grid
                                                                        Button</label>
                                                                    <input type="text"
                                                                        class="form-control form-control-solid form-control-sm @error('') is-invalid @enderror"
                                                                        name="section_seven_second_grid_button_name"
                                                                        id="validationCustom01"
                                                                        placeholder="Enter Section Seven Second Grid Button">
                                                                    @error('section_seven_second_grid_button_name')
                                                                    <div class="invalid-feedback d-block">{{
                                                                        $message }}
                                                                    </div>
                                                                    @enderror
                                                                </div>
                                                            </div>
                                                            <div class="col-lg-4">
                                                                <div class="fv-row mb-3">
                                                                    <label class="form-label"> Section Seven Second Grid
                                                                        Button Link</label>
                                                                    <textarea name=""
                                                                        placeholder="Enter Section Seven Link"
                                                                        class="form-control form-control-sm form-control-solid @error('section_seven_second_grid_button_link') is-invalid @enderror"></textarea>
                                                                    @error('section_seven_second_grid_button_link')
                                                                    <div class="invalid-feedback d-block">{{
                                                                        $message }}
                                                                    </div>
                                                                    @enderror
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="row border p-4">
                                                        <p class="badge badge-info custom-badge"
                                                            style="margin-top: -15px; width: 13%">Third Grid</span>
                                                        <div class="row">
                                                            <div class="col-md-4">
                                                                <div class="fv-row mb-3">
                                                                    <label class="form-label">Section Seven Third Grid
                                                                        Icon</label>
                                                                    <input type="file"
                                                                        class="form-control form-control-solid form-control-sm @error('') is-invalid @enderror"
                                                                        name="section_seven_third_grid_icon"
                                                                        id="validationCustom01"
                                                                        placeholder="Enter Section Seven Third Grid Icon">
                                                                    @error('section_seven_third_grid_icon')
                                                                    <div class="invalid-feedback d-block">{{
                                                                        $message }}
                                                                    </div>
                                                                    @enderror
                                                                </div>
                                                            </div>
                                                            <div class="col-md-4">
                                                                <div class="fv-row mb-3">
                                                                    <label class="form-label">Section Seven Third
                                                                        Grid
                                                                        Title</label>
                                                                    <input type="text"
                                                                        class="form-control form-control-solid form-control-sm @error('') is-invalid @enderror"
                                                                        name="section_seven_third_grid_title"
                                                                        id="validationCustom01"
                                                                        placeholder="Enter Section Seven Third Grid Title">
                                                                    @error('section_seven_third_grid_title')
                                                                    <div class="invalid-feedback d-block">{{
                                                                        $message }}
                                                                    </div>
                                                                    @enderror
                                                                </div>
                                                            </div>
                                                            <div class="col-md-4">
                                                                <div class="fv-row mb-3">
                                                                    <label class="form-label">Section Seven Third
                                                                        Grid
                                                                        Button</label>
                                                                    <input type="text"
                                                                        class="form-control form-control-solid form-control-sm @error('') is-invalid @enderror"
                                                                        name="section_seven_third_grid_button_name"
                                                                        id="validationCustom01"
                                                                        placeholder="Enter Section Seven Third Grid Button">
                                                                    @error('section_seven_third_grid_button_name')
                                                                    <div class="invalid-feedback d-block">{{
                                                                        $message }}
                                                                    </div>
                                                                    @enderror
                                                                </div>
                                                            </div>
                                                            <div class="col-lg-4">
                                                                <div class="fv-row mb-3">
                                                                    <label class="form-label"> Section Seven Third Grid
                                                                        Button Link</label>
                                                                    <textarea name=""
                                                                        placeholder="Enter Section Seven Third Grid Button Link"
                                                                        class="form-control form-control-sm form-control-solid @error('section_seven_third_grid_button_link') is-invalid @enderror"></textarea>
                                                                    @error('section_seven_third_grid_button_link')
                                                                    <div class="invalid-feedback d-block">{{
                                                                        $message }}
                                                                    </div>
                                                                    @enderror
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="row border p-4">
                                                        <p class="badge badge-info custom-badge"
                                                            style="margin-top: -15px; width: 13%">Fourth Grid</span>
                                                        <div class="row">
                                                            <div class="col-md-4">
                                                                <div class="fv-row mb-3">
                                                                    <label class="form-label">Section Seven Fourth Grid
                                                                        Icon</label>
                                                                    <input type="file"
                                                                        class="form-control form-control-solid form-control-sm @error('') is-invalid @enderror"
                                                                        name="section_seven_fourth_grid_icon"
                                                                        id="validationCustom01"
                                                                        placeholder="Enter Section Seven Fourth Grid Icon">
                                                                    @error('section_seven_fourth_grid_icon')
                                                                    <div class="invalid-feedback d-block">{{
                                                                        $message }}
                                                                    </div>
                                                                    @enderror
                                                                </div>
                                                            </div>
                                                            <div class="col-md-4">
                                                                <div class="fv-row mb-3">
                                                                    <label class="form-label">Section Seven Fourth
                                                                        Grid
                                                                        Title</label>
                                                                    <input type="text"
                                                                        class="form-control form-control-solid form-control-sm @error('') is-invalid @enderror"
                                                                        name="section_seven_fourth_grid_title"
                                                                        id="validationCustom01"
                                                                        placeholder="Enter Section Seven Fourth Grid Title">
                                                                    @error('section_seven_fourth_grid_title')
                                                                    <div class="invalid-feedback d-block">{{
                                                                        $message }}
                                                                    </div>
                                                                    @enderror
                                                                </div>
                                                            </div>
                                                            <div class="col-md-4">
                                                                <div class="fv-row mb-3">
                                                                    <label class="form-label">Section Seven Fourth
                                                                        Grid
                                                                        Button</label>
                                                                    <input type="text"
                                                                        class="form-control form-control-solid form-control-sm @error('') is-invalid @enderror"
                                                                        name="section_seven_fourth_grid_button_name"
                                                                        id="validationCustom01"
                                                                        placeholder="Enter Section Seven Fourth Grid Button">
                                                                    @error('section_seven_fourth_grid_button_name')
                                                                    <div class="invalid-feedback d-block">{{
                                                                        $message }}
                                                                    </div>
                                                                    @enderror
                                                                </div>
                                                            </div>
                                                            <div class="col-lg-4">
                                                                <div class="fv-row mb-3">
                                                                    <label class="form-label"> Section Seven Fourth Grid
                                                                        Button Link</label>
                                                                    <textarea name=""
                                                                        placeholder="Enter Section Seven Fourth Grid Button Link"
                                                                        class="form-control form-control-sm form-control-solid @error('section_seven_fourth_grid_button_link') is-invalid @enderror"></textarea>
                                                                    @error('section_seven_fourth_grid_button_link')
                                                                    <div class="invalid-feedback d-block">{{
                                                                        $message }}
                                                                    </div>
                                                                    @enderror
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>


                                                </div>
                                                <div class="col-lg-12">
                                                    <div class="fv-row mb-3">
                                                        <label class="form-label">Section Seven Description</label>
                                                        <textarea name="" placeholder="Enter Section Seven Description"
                                                            class="tox-target kt_docs_tinymce_plugins @error('section_seven_description') is-invalid @enderror"></textarea>
                                                        @error('section_seven_description')
                                                        <div class="invalid-feedback d-block">{{ $message }}</div>
                                                        @enderror
                                                    </div>
                                                </div>
                                                <div class="row mt-2 justify-content-end">
                                                    <div class="d-flex align-items-center justify-content-between">
                                                        <a class="btn btn-lg btn-info rounded-0 tab-trigger-previous"
                                                            data-bs-target="#section-six" aria-selected="false"
                                                            role="tab" tabindex="-1">
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