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
                    <h4 class="text-white p-0 m-0 fw-bold">Dynamic Sites Add</h4>
                </div>
            </div>
            <div class="card-body p-0 pt-1">
                <div class="row gx-0">
                    <div class="col-lg-2">
                        <ul class="nav nav-tabs nav-pills border-0 flex-row flex-md-column mb-3 mb-md-0 fs-6"
                            role="tablist">
                            <li class="nav-item w-md-290px my-1 mt-0" role="presentation">
                                <a class="nav-link p-5 rounded-0 active tab-trigger" data-bs-toggle="tab"
                                    href="#general-info" aria-selected="true" role="tab">General Info</a>
                            </li>
                            <li class="nav-item w-md-290px my-1" role="presentation">
                                <a class="nav-link p-5 rounded-0 tab-trigger" data-bs-toggle="tab" href="#contents-tabs"
                                    aria-selected="false" role="tab">Contents</a>
                            </li>
                            <li class="nav-item w-md-290px my-1" role="presentation">
                                <a class="nav-link p-5 rounded-0 tab-trigger" data-bs-toggle="tab" href="#others"
                                    aria-selected="false" role="tab" tabindex="-1">Others</a>
                            </li>
                            <li class="nav-item w-md-290px my-1" role="presentation">
                                <a class="nav-link p-5 rounded-0 tab-trigger" data-bs-toggle="tab" href="#designs"
                                    aria-selected="false" role="tab" tabindex="-1">Design</a>
                            </li>
                        </ul>
                    </div>
                    <div class="col-lg-10 px-4 p-2">
                        <form id="productForm" method="POST" action="{{ route('admin.homepage.store') }}"
                            enctype="multipart/form-data">
                            @csrf
                            <div class="tab-content" id="myTabContent">
                                <div class="tab-pane fade active show" id="general-info" role="tabpanel">
                                    <div class="w-100">
                                        <div class="pb-5 pb-lg-5">
                                            <h2
                                                class="fw-bolder d-flex justify-content-center align-items-center text-dark">
                                                General Information
                                            </h2>
                                            <p class="text-center p-0 m-0"><small
                                                    class="ms-4 text-danger fw-normal fs-sm-9">All The Red Star Mark
                                                    Field Is Required.</small></p>
                                        </div>
                                        <div class="fv-row">
                                            <div class="row">
                                                <div class="col-md-3">
                                                    <label for="validationCustom04" class="form-label">Country
                                                        Name</label>
                                                    <select
                                                        class="form-select form-select-sm form-select-solid @error('country_id') is-invalid @enderror"
                                                        name="country_id" data-control="select2"
                                                        data-placeholder="Select an option" data-allow-clear="true">
                                                        <option></option>
                                                        <option value="Top">Top</option>
                                                        <option value="Featured">Featured</option>
                                                        <option value="Others">Others</option>
                                                    </select>
                                                    @error('country_id')
                                                    <div class="invalid-feedback d-block">
                                                        {{ $message }}
                                                    </div>
                                                    @enderror
                                                </div>
                                                <div class="col-md-3">
                                                    <label for="validationCustom04" class="form-label">Company
                                                        Name</label>
                                                    <select
                                                        class="form-select form-select-sm form-select-solid @error('company_id') is-invalid @enderror"
                                                        name="company_id" data-control="select2"
                                                        data-placeholder="Select an option" data-allow-clear="true">
                                                        <option></option>
                                                        <option value="Top">Top</option>
                                                        <option value="Featured">Featured</option>
                                                        <option value="Others">Others</option>
                                                    </select>
                                                    @error('company_id')
                                                    <div class="invalid-feedback d-block">
                                                        {{ $message }}
                                                    </div>
                                                    @enderror
                                                </div>
                                                <div class="col-md-3">
                                                    <label for="validationCustom04" class="form-label">Industry
                                                        Name</label>
                                                    <select
                                                        class="form-select form-select-sm form-select-solid @error('industry_id') is-invalid @enderror"
                                                        name="industry_id" data-control="select2"
                                                        data-placeholder="Select an option" data-allow-clear="true">
                                                        <option></option>
                                                        <option value="Top">Top</option>
                                                        <option value="Featured">Featured</option>
                                                        <option value="Others">Others</option>
                                                    </select>
                                                    @error('industry_id')
                                                    <div class="invalid-feedback d-block">
                                                        {{ $message }}
                                                    </div>
                                                    @enderror
                                                </div>
                                                <div class="col-lg-3">
                                                    <div class="fv-row mb-3">
                                                        <label class="form-label">Name</label>
                                                        <input type="text"
                                                            class="form-control form-control-solid form-control-sm @error('name') is-invalid @enderror"
                                                            name="name" id="validationCustom01"
                                                            placeholder="Enter Name">
                                                        @error('name')
                                                        <div class="invalid-feedback d-block">
                                                            {{ $message }}
                                                        </div>
                                                        @enderror
                                                    </div>
                                                </div>
                                                <div class="col-lg-3">
                                                    <div class="fv-row mb-3">
                                                        <label class="form-label">Page Name</label>
                                                        <input type="text"
                                                            class="form-control form-control-solid form-control-sm @error('page_name') is-invalid @enderror"
                                                            name="page_name" id="validationCustom01"
                                                            placeholder="Enter Page Name">
                                                        @error('page_name')
                                                        <div class="invalid-feedback d-block">
                                                            {{ $message }}
                                                        </div>
                                                        @enderror
                                                    </div>
                                                </div>
                                                <div class="col-lg-3">
                                                    <div class="fv-row mb-3">
                                                        <label class="form-label">Custom Url</label>
                                                        <input type="url"
                                                            class="form-control form-control-solid form-control-sm @error('custom_url') is-invalid @enderror"
                                                            name="custom_url" id="validationCustom01"
                                                            placeholder="Enter Custom Url">
                                                        @error('custom_url')
                                                        <div class="invalid-feedback d-block">
                                                            {{ $message }}
                                                        </div>
                                                        @enderror
                                                    </div>
                                                </div>
                                                <div class="col-lg-3">
                                                    <div class="fv-row mb-3">
                                                        <label class="form-label">Favicon Icon</label>
                                                        <input type="file"
                                                            class="form-control form-control-solid form-control-sm @error('favicon_icon') is-invalid @enderror"
                                                            name="favicon_icon" id="validationCustom01"
                                                            placeholder="Enter Favicon Icon">
                                                        @error('favicon_icon')
                                                        <div class="invalid-feedback d-block">
                                                            {{ $message }}
                                                        </div>
                                                        @enderror
                                                    </div>
                                                </div>
                                                <div class="col-lg-3">
                                                    <div class="fv-row mb-3">
                                                        <label class="form-label">Logo</label>
                                                        <input type="file"
                                                            class="form-control form-control-solid form-control-sm @error('logo') is-invalid @enderror"
                                                            name="logo" id="validationCustom01"
                                                            placeholder="Enter Logo">
                                                        @error('logo')
                                                        <div class="invalid-feedback d-block">
                                                            {{ $message }}
                                                        </div>
                                                        @enderror
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row mt-2 justify-content-end p-0">
                                                <div class="d-flex align-items-center justify-content-end ">
                                                    <a class="btn btn-lg btn-info rounded-0 tab-trigger-next"
                                                        data-bs-toggle="tab" data-bs-target="#contents-tabs"
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
                                <div class="tab-pane fade" id="contents-tabs" role="tabpanel">
                                    <div class="w-100">
                                        <div class="pb-10 pb-lg-10">
                                            <h2
                                                class="fw-bolder d-flex justify-content-center align-items-center text-dark">
                                                Contents Tabs
                                            </h2>
                                        </div>
                                        <div class="fv-row">
                                            <div class="row">
                                                <div class="col-lg-6">
                                                    <div class="fv-row mb-3">
                                                        <label class="form-label">Category Name</label>
                                                        <select
                                                            class="form-select form-select-solid @error('category_id') is-invalid @enderror"
                                                            name="category_id" id="field2" multiple
                                                            multiselect-search="true" multiselect-select-all="true"
                                                            multiselect-max-items="3"
                                                            onchange="console.log(this.selectedOptions)">
                                                            <option>Abarth</option>
                                                            <option>Alfa Romeo</option>
                                                            <option>Aston Martin</option>
                                                            <option>Audi</option>
                                                            <option>Bentley</option>
                                                            <option>BMW</option>
                                                            <option>Bugatti</option>
                                                            <option>Cadillac</option>
                                                        </select>
                                                        @error('category_id')
                                                        <div class="invalid-feedback d-block">
                                                            {{ $message }}
                                                        </div>
                                                        @enderror
                                                    </div>
                                                </div>
                                                <div class="col-lg-6">
                                                    <div class="fv-row mb-3">
                                                        <label class="form-label">Brands</label>
                                                        <select
                                                            class="form-select form-select-solid @error('brands') is-invalid @enderror"
                                                            name="brands" id="field2" multiple multiselect-search="true"
                                                            multiselect-select-all="true" multiselect-max-items="3"
                                                            onchange="console.log(this.selectedOptions)">
                                                            <option>Abarth</option>
                                                            <option>Alfa Romeo</option>
                                                            <option>Aston Martin</option>
                                                            <option>Audi</option>
                                                            <option>Bentley</option>
                                                            <option>BMW</option>
                                                            <option>Bugatti</option>
                                                            <option>Cadillac</option>
                                                        </select>
                                                        @error('brands')
                                                        <div class="invalid-feedback d-block">
                                                            {{ $message }}
                                                        </div>
                                                        @enderror
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row mt-5 justify-content-end p-0">
                                                <div class="d-flex align-items-center justify-content-between">
                                                    <a class="btn btn-lg btn-info rounded-0 tab-trigger-previous"
                                                        data-bs-target="#general-info" aria-selected="false" role="tab"
                                                        tabindex="-1">
                                                        Previous
                                                        <span class="svg-icon svg-icon-4 ms-1 me-0">
                                                            <i class="fa-solid fa-arrow-right"></i>
                                                        </span>
                                                    </a>
                                                    <a class="btn btn-lg btn-info rounded-0 tab-trigger-next"
                                                        data-bs-toggle="tab" data-bs-target="#others"
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
                                <div class="tab-pane fade" id="others" role="tabpanel">
                                    <div class="w-100">
                                        <div class="pb-10 pb-lg-10">
                                            <h2
                                                class="fw-bolder d-flex justify-content-center align-items-center text-dark">
                                                Others
                                            </h2>
                                        </div>
                                        <div class="fv-row">
                                            {{-- Content Gose Here --}}
                                            <div class="row mt-5 justify-content-end p-0">
                                                <div class="d-flex align-items-center justify-content-between">
                                                    <a class="btn btn-lg btn-info rounded-0 tab-trigger-previous"
                                                        data-bs-target="#contents-tabs" aria-selected="false" role="tab"
                                                        tabindex="-1">
                                                        Previous
                                                        <span class="svg-icon svg-icon-4 ms-1 me-0">
                                                            <i class="fa-solid fa-arrow-right"></i>
                                                        </span>
                                                    </a>
                                                    <a class="btn btn-lg btn-info rounded-0 tab-trigger-next"
                                                        data-bs-toggle="tab" data-bs-target="#designs"
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
                                <div class="tab-pane fade" id="designs" role="tabpanel">
                                    <div class="w-100">
                                        <div class="pb-10 pb-lg-10">
                                            <h2
                                                class="fw-bolder d-flex justify-content-center align-items-center text-dark">
                                                Design
                                            </h2>
                                        </div>
                                        <div class="fv-row">
                                            <div class="row">
                                                <div class="col-lg-3">
                                                    <label class="form-label">Primary Color</label>
                                                    <div class="row gx-0">
                                                        <div class="col-sm-2">
                                                            <div class="fv-row mb-3">
                                                                <input type="color"
                                                                    class="p-0 form-control form-control-solid form-control-sm @error('primary_color') is-invalid @enderror"
                                                                    name="primary_color" id="validationCustom01"
                                                                    placeholder="Enter Primary Color">
                                                                @error('primary_color')
                                                                <div class="invalid-feedback d-block">
                                                                    {{ $message }}
                                                                </div>
                                                                @enderror
                                                            </div>
                                                        </div>
                                                        <div class="col-sm-10">
                                                            <div class="fv-row mb-3">
                                                                <input type="text"
                                                                    class="form-control form-control-solid form-control-sm"
                                                                    name="show_primary_color" id="validationCustom01"
                                                                    placeholder="Enter Primary Color" disabled>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-3">
                                                    <label class="form-label">Secondary Color</label>
                                                    <div class="row gx-0">
                                                        <div class="col-lg-2">
                                                            <div class="fv-row mb-3">
                                                                <input type="color"
                                                                    class="p-0 form-control form-control-solid form-control-sm @error('secondary_color') is-invalid @enderror"
                                                                    name="secondary_color" id="validationCustom01"
                                                                    placeholder="Enter Secondary Color">
                                                                @error('secondary_color')
                                                                <div class="invalid-feedback d-block">
                                                                    {{ $message }}
                                                                </div>
                                                                @enderror
                                                            </div>
                                                        </div>
                                                        <div class="col-sm-10">
                                                            <div class="fv-row mb-3">
                                                                <input type="text"
                                                                    class="form-control form-control-solid form-control-sm"
                                                                    name="show_secondary_color" id="validationCustom01"
                                                                    placeholder="Enter Primary Color" disabled>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-3">
                                                    <label class="form-label">Secondary Bg Color</label>
                                                    <div class="row gx-0">
                                                        <div class="col-lg-2">
                                                            <div class="fv-row mb-3">
                                                                <input type="color"
                                                                    class="p-0 form-control form-control-solid form-control-sm @error('secondary_bg_color') is-invalid @enderror"
                                                                    name="secondary_bg_color" id="validationCustom01"
                                                                    placeholder="Enter Secondary Bg Color">
                                                                @error('secondary_bg_color')
                                                                <div class="invalid-feedback d-block">
                                                                    {{ $message }}
                                                                </div>
                                                                @enderror
                                                            </div>
                                                        </div>
                                                        <div class="col-sm-10">
                                                            <div class="fv-row mb-3">
                                                                <input type="text"
                                                                    class="form-control form-control-solid form-control-sm"
                                                                    name="show_secondary_bg_color"
                                                                    id="validationCustom01"
                                                                    placeholder="Enter Primary Color" disabled>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-3">
                                                    <label class="form-label">Secondary Deep Color</label>
                                                    <div class="row gx-0">
                                                        <div class="col-lg-2">
                                                            <div class="fv-row mb-3">
                                                                <input type="color"
                                                                    class="p-0 form-control form-control-solid form-control-sm @error('secondary_deep_color') is-invalid @enderror"
                                                                    name="secondary_deep_color" id="validationCustom01"
                                                                    placeholder="Enter Secondary Deep Color">
                                                                @error('secondary_deep_color')
                                                                <div class="invalid-feedback d-block">
                                                                    {{ $message }}
                                                                </div>
                                                                @enderror
                                                            </div>
                                                        </div>
                                                        <div class="col-sm-10">
                                                            <div class="fv-row mb-3">
                                                                <input type="text"
                                                                    class="form-control form-control-solid form-control-sm"
                                                                    name="show_secondary_deep_color"
                                                                    id="validationCustom01"
                                                                    placeholder="Enter Primary Color" disabled>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-3">
                                                    <label class="form-label">Btn Color</label>
                                                    <div class="row gx-0">
                                                        <div class="col-lg-2">
                                                            <div class="fv-row mb-3">
                                                                <input type="color"
                                                                    class="p-0 form-control form-control-solid form-control-sm @error('btn_color') is-invalid @enderror"
                                                                    name="btn_color" id="validationCustom01"
                                                                    placeholder="Enter Btn Color">
                                                                @error('btn_color')
                                                                <div class="invalid-feedback d-block">
                                                                    {{ $message }}
                                                                </div>
                                                                @enderror
                                                            </div>
                                                        </div>
                                                        <div class="col-sm-10">
                                                            <div class="fv-row mb-3">
                                                                <input type="text"
                                                                    class="form-control form-control-solid form-control-sm"
                                                                    name="show_btn_color" id="validationCustom01"
                                                                    placeholder="Enter Primary Color" disabled>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-3">
                                                    <label class="form-label">Main Bg Color</label>
                                                    <div class="row gx-0">
                                                        <div class="col-lg-2">
                                                            <div class="fv-row mb-3">
                                                                <input type="color"
                                                                    class="p-0 form-control form-control-solid form-control-sm @error('main_bg_color') is-invalid @enderror"
                                                                    name="main_bg_color" id="validationCustom01"
                                                                    placeholder="Enter Main Bg Color">
                                                                @error('main_bg_color')
                                                                <div class="invalid-feedback d-block">
                                                                    {{ $message }}
                                                                </div>
                                                                @enderror
                                                            </div>
                                                        </div>
                                                        <div class="col-sm-10">
                                                            <div class="fv-row mb-3">
                                                                <input type="text"
                                                                    class="form-control form-control-solid form-control-sm"
                                                                    name="show_main_bg_color" id="validationCustom01"
                                                                    placeholder="Enter Primary Color" disabled>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-3">
                                                    <label class="form-label">Paragraph Color</label>
                                                    <div class="row gx-0">
                                                        <div class="col-lg-2">
                                                            <div class="fv-row mb-3">
                                                                <input type="color"
                                                                    class="p-0 form-control form-control-solid form-control-sm @error('paragraph_color') is-invalid @enderror"
                                                                    name="paragraph_color" id="validationCustom01"
                                                                    placeholder="Enter Paragraph Color">
                                                                @error('paragraph_color')
                                                                <div class="invalid-feedback d-block">
                                                                    {{ $message }}
                                                                </div>
                                                                @enderror
                                                            </div>
                                                        </div>
                                                        <div class="col-sm-10">
                                                            <div class="fv-row mb-3">
                                                                <input type="text"
                                                                    class="form-control form-control-solid form-control-sm"
                                                                    name="show_paragraph_color" id="validationCustom01"
                                                                    placeholder="Enter Primary Color" disabled>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>


                                                <div class="col-lg-3">
                                                    <label class="form-label">Secondary Paragraph Color</label>
                                                    <div class="row gx-0">
                                                        <div class="col-lg-2">
                                                            <div class="fv-row mb-3">
                                                                <input type="color"
                                                                    class="p-0 form-control form-control-solid form-control-sm @error('secondary_paragraph_color') is-invalid @enderror"
                                                                    name="secondary_paragraph_color"
                                                                    id="validationCustom01 disabled"
                                                                    placeholder="Enter Secondary Paragraph Color">
                                                                @error('secondary_paragraph_color')
                                                                <div class="invalid-feedback d-block">
                                                                    {{ $message }}
                                                                </div>
                                                                @enderror
                                                            </div>
                                                        </div>
                                                        <div class="col-sm-10">
                                                            <div class="fv-row mb-3">
                                                                <input type="text"
                                                                    class="form-control form-control-solid form-control-sm"
                                                                    name="show_secondary_paragraph_color"
                                                                    id="validationCustom01"
                                                                    placeholder="Enter Primary Color" disabled>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-3">
                                                    <label class="form-label">Heading_color</label>
                                                    <div class="row gx-0">
                                                        <div class="col-lg-2">
                                                            <div class="fv-row mb-3">
                                                                <input type="color"
                                                                    class="p-0 form-control form-control-solid form-control-sm @error('heading_color') is-invalid @enderror"
                                                                    name="heading_color" id="validationCustom01"
                                                                    placeholder="Enter Heading_color">
                                                                @error('heading_color')
                                                                <div class="invalid-feedback d-block">
                                                                    {{ $message }}
                                                                </div>
                                                                @enderror
                                                            </div>
                                                        </div>
                                                        <div class="col-sm-10">
                                                            <div class="fv-row mb-3">
                                                                <input type="text"
                                                                    class="form-control form-control-solid form-control-sm"
                                                                    name="show_heading_color" id="validationCustom01"
                                                                    placeholder="Enter Primary Color" disabled>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-3">
                                                    <label class="form-label">White</label>
                                                    <div class="row gx-0">
                                                        <div class="col-lg-2">
                                                            <div class="fv-row mb-3">
                                                                <input type="color"
                                                                    class="p-0 form-control form-control-solid form-control-sm @error('white') is-invalid @enderror"
                                                                    name="white" id="validationCustom01"
                                                                    placeholder="Enter White">
                                                                @error('white')
                                                                <div class="invalid-feedback d-block">
                                                                    {{ $message }}
                                                                </div>
                                                                @enderror
                                                            </div>
                                                        </div>
                                                        <div class="col-sm-10">
                                                            <div class="fv-row mb-3">
                                                                <input type="text"
                                                                    class="form-control form-control-solid form-control-sm"
                                                                    name="show_white" id="validationCustom01"
                                                                    placeholder="Enter Primary Color" disabled>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-3">
                                                    <label class="form-label">Black</label>
                                                    <div class="row gx-0">
                                                        <div class="col-lg-2">
                                                            <div class="fv-row mb-3">
                                                                <input type="color"
                                                                    class="p-0 form-control form-control-solid form-control-sm @error('black') is-invalid @enderror"
                                                                    name="black" id="validationCustom01"
                                                                    placeholder="Enter Black">
                                                                @error('black')
                                                                <div class="invalid-feedback d-block">
                                                                    {{ $message }}
                                                                </div>
                                                                @enderror
                                                            </div>
                                                        </div>
                                                        <div class="col-sm-10">
                                                            <div class="fv-row mb-3">
                                                                <input type="text"
                                                                    class="form-control form-control-solid form-control-sm"
                                                                    name="show_black" id="validationCustom01"
                                                                    placeholder="Enter Primary Color" disabled>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-3">
                                                    <label class="form-label">Secoandary Border Color</label>
                                                    <div class="row gx-0">
                                                        <div class="col-lg-2">
                                                            <div class="fv-row mb-3">
                                                                <input type="color"
                                                                    class="p-0 form-control form-control-solid form-control-sm @error('secoandaryborder_color') is-invalid @enderror"
                                                                    name="secoandaryborder_color"
                                                                    id="validationCustom01"
                                                                    placeholder="Enter Secoandary Border Color">
                                                                @error('secoandaryborder_color')
                                                                <div class="invalid-feedback d-block">
                                                                    {{ $message }}
                                                                </div>
                                                                @enderror
                                                            </div>
                                                        </div>
                                                        <div class="col-sm-10">
                                                            <div class="fv-row mb-3">
                                                                <input type="text"
                                                                    class="form-control form-control-solid form-control-sm"
                                                                    name="show_secoandaryborder_color"
                                                                    id="validationCustom01"
                                                                    placeholder="Enter Primary Color" disabled>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-3">
                                                    <label class="form-label">Border Color</label>
                                                    <div class="row gx-0">
                                                        <div class="col-lg-2">
                                                            <div class="fv-row mb-3">
                                                                <input type="color"
                                                                    class="p-0 form-control form-control-solid form-control-sm @error('border_color') is-invalid @enderror"
                                                                    name="border_color" id="validationCustom01"
                                                                    placeholder="Enter Border Color">
                                                                @error('border_color')
                                                                <div class="invalid-feedback d-block">
                                                                    {{ $message }}
                                                                </div>
                                                                @enderror
                                                            </div>
                                                        </div>
                                                        <div class="col-sm-10">
                                                            <div class="fv-row mb-3">
                                                                <input type="text"
                                                                    class="form-control form-control-solid form-control-sm"
                                                                    name="show_border_color" id="validationCustom01"
                                                                    placeholder="Enter Primary Color" disabled>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-3">
                                                    <label class="form-label">Divider Color</label>
                                                    <div class="row gx-0">
                                                        <div class="col-lg-2">
                                                            <div class="fv-row mb-3">
                                                                <input type="color"
                                                                    class="p-0 form-control form-control-solid form-control-sm @error('divider_color') is-invalid @enderror"
                                                                    name="divider_color" id="validationCustom01"
                                                                    placeholder="Enter Divider Color">
                                                                @error('divider_color')
                                                                <div class="invalid-feedback d-block">
                                                                    {{ $message }}
                                                                </div>
                                                                @enderror
                                                            </div>
                                                        </div>
                                                        <div class="col-sm-10">
                                                            <div class="fv-row mb-3">
                                                                <input type="text"
                                                                    class="form-control form-control-solid form-control-sm"
                                                                    name="show_divider_color" id="validationCustom01"
                                                                    placeholder="Enter Primary Color" disabled>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-3">
                                                    <label class="form-label">Toggle Color</label>
                                                    <div class="row gx-0">
                                                        <div class="col-lg-2">
                                                            <div class="fv-row mb-3">
                                                                <input type="color"
                                                                    class="p-0 form-control form-control-solid form-control-sm @error('toggle_color') is-invalid @enderror"
                                                                    name="toggle_color" id="validationCustom01"
                                                                    placeholder="Enter Toggle Color">
                                                                @error('toggle_color')
                                                                <div class="invalid-feedback d-block">
                                                                    {{ $message }}
                                                                </div>
                                                                @enderror
                                                            </div>
                                                        </div>
                                                        <div class="col-sm-10">
                                                            <div class="fv-row mb-3">
                                                                <input type="text"
                                                                    class="form-control form-control-solid form-control-sm"
                                                                    name="show_toggle_color" id="validationCustom01"
                                                                    placeholder="Enter Primary Color" disabled>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-3">
                                                    <label class="form-label">Text Color</label>
                                                    <div class="row gx-0">
                                                        <div class="col-lg-2">
                                                            <div class="fv-row mb-3">
                                                                <input type="color"
                                                                    class="p-0 form-control form-control-solid form-control-sm @error('text_color') is-invalid @enderror"
                                                                    name="text_color" id="validationCustom01"
                                                                    placeholder="Enter tTxt_ Clor">
                                                                @error('text_color')
                                                                <div class="invalid-feedback d-block">
                                                                    {{ $message }}
                                                                </div>
                                                                @enderror
                                                            </div>
                                                        </div>
                                                        <div class="col-sm-10">
                                                            <div class="fv-row mb-3">
                                                                <input type="text"
                                                                    class="form-control form-control-solid form-control-sm"
                                                                    name="show_text_color" id="validationCustom01"
                                                                    placeholder="Enter Primary Color" disabled>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-3">
                                                    <label class="form-label">Paragraph Color</label>
                                                    <div class="row gx-0">
                                                        <div class="col-lg-2">
                                                            <div class="fv-row mb-3">
                                                                <input type="color"
                                                                    class="p-0 form-control form-control-solid form-control-sm @error('para_color') is-invalid @enderror"
                                                                    name="para_color" id="validationCustom01"
                                                                    placeholder="Enter Paragraph Color">
                                                                @error('para_color')
                                                                <div class="invalid-feedback d-block">
                                                                    {{ $message }}
                                                                </div>
                                                                @enderror
                                                            </div>
                                                        </div>
                                                        <div class="col-sm-10">
                                                            <div class="fv-row mb-3">
                                                                <input type="text"
                                                                    class="form-control form-control-solid form-control-sm"
                                                                    name="show_para_color" id="validationCustom01"
                                                                    placeholder="Enter Primary Color">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-3">
                                                    <div class="fv-row mb-3">
                                                        <label class="form-label">Custom Shadow</label>
                                                        <input type="file"
                                                            class="form-control form-control-solid form-control-sm @error('custom_shadow') is-invalid @enderror"
                                                            name="custom_shadow" id="validationCustom01"
                                                            placeholder="Enter Custom Shadow">
                                                        @error('custom_shadow')
                                                        <div class="invalid-feedback d-block">
                                                            {{ $message }}
                                                        </div>
                                                        @enderror
                                                    </div>
                                                </div>
                                                <div class="col-lg-3">
                                                    <div class="fv-row mb-3">
                                                        <label class="form-label">Primary Font</label>
                                                        <input type="file"
                                                            class="form-control form-control-solid form-control-sm @error('primary_font') is-invalid @enderror"
                                                            name="primary_font" id="validationCustom01"
                                                            placeholder="Enter Primary Font">
                                                        @error('primary_font')
                                                        <div class="invalid-feedback d-block">
                                                            {{ $message }}
                                                        </div>
                                                        @enderror
                                                    </div>
                                                </div>
                                                <div class="col-lg-3">
                                                    <div class="fv-row mb-3">
                                                        <label class="form-label">Number Font</label>
                                                        <input type="file"
                                                            class="form-control form-control-solid form-control-sm @error('number_font') is-invalid @enderror"
                                                            name="number_font" id="validationCustom01"
                                                            placeholder="Enter Number Font">
                                                        @error('number_font')
                                                        <div class="invalid-feedback d-block">
                                                            {{ $message }}
                                                        </div>
                                                        @enderror
                                                    </div>
                                                </div>
                                                <div class="col-lg-3">
                                                    <div class="fv-row mb-3">
                                                        <label class="form-label">Section Title Font Size</label>
                                                        <input type="file"
                                                            class="form-control form-control-solid form-control-sm @error('section_title_font_size') is-invalid @enderror"
                                                            name="section_title_font_size" id="validationCustom01"
                                                            placeholder="Enter Section Title Font Size">
                                                        @error('section_title_font_size')
                                                        <div class="invalid-feedback d-block">
                                                            {{ $message }}
                                                        </div>
                                                        @enderror
                                                    </div>
                                                </div>
                                                <div class="col-lg-3">
                                                    <div class="fv-row mb-3">
                                                        <label class="form-label">Header Font Size</label>
                                                        <input type="file"
                                                            class="form-control form-control-solid form-control-sm @error('header_font_size') is-invalid @enderror"
                                                            name="header_font_size" id="validationCustom01"
                                                            placeholder="Enter Header Font Size">
                                                        @error('header_font_size')
                                                        <div class="invalid-feedback d-block">
                                                            {{ $message }}
                                                        </div>
                                                        @enderror
                                                    </div>
                                                </div>
                                                <div class="col-lg-3">
                                                    <div class="fv-row mb-3">
                                                        <label class="form-label">Content Title Font Size</label>
                                                        <input type="file"
                                                            class="form-control form-control-solid form-control-sm @error('content_title_font_size') is-invalid @enderror"
                                                            name="content_title_font_size" id="validationCustom01"
                                                            placeholder="Enter Content Title Font Size">
                                                        @error('content_title_font_size')
                                                        <div class="invalid-feedback d-block">
                                                            {{ $message }}
                                                        </div>
                                                        @enderror
                                                    </div>
                                                </div>
                                                <div class="col-lg-3">
                                                    <div class="fv-row mb-3">
                                                        <label class="form-label">Paragraph Font Size</label>
                                                        <input type="file"
                                                            class="form-control form-control-solid form-control-sm @error('paragraph_font_size') is-invalid @enderror"
                                                            name="paragraph_font_size" id="validationCustom01"
                                                            placeholder="Enter Paragraph Font Size">
                                                        @error('paragraph_font_size')
                                                        <div class="invalid-feedback d-block">
                                                            {{ $message }}
                                                        </div>
                                                        @enderror
                                                    </div>
                                                </div>
                                                <div class="col-lg-3">
                                                    <div class="fv-row mb-3">
                                                        <label class="form-label">Badge Font Size</label>
                                                        <input type="file"
                                                            class="form-control form-control-solid form-control-sm @error('badge_font_size') is-invalid @enderror"
                                                            name="badge_font_size" id="validationCustom01"
                                                            placeholder="Enter Badge Font Size">
                                                        @error('badge_font_size')
                                                        <div class="invalid-feedback d-block">
                                                            {{ $message }}
                                                        </div>
                                                        @enderror
                                                    </div>
                                                </div>
                                                <div class="col-lg-4">
                                                    <div class="fv-row mb-3">
                                                        <label class="form-label">Primary Font Url</label>
                                                        <textarea rows="1" name="primary_font_url"
                                                            class="form-control form-control-sm form-control-solid @error('primary_font_url') is-invalid @enderror"
                                                            placeholder="Enter Section One Link"></textarea>
                                                        @error('primary_font_url')
                                                        <div class="invalid-feedback d-block">{{ $message }}</div>
                                                        @enderror
                                                    </div>
                                                </div>
                                                <div class="col-lg-4">
                                                    <div class="fv-row mb-3">
                                                        <label class="form-label">Number Font Url</label>
                                                        <textarea rows="1" name="number_font_url"
                                                            class="form-control form-control-sm form-control-solid @error('number_font_url') is-invalid @enderror"
                                                            placeholder="Enter Section One Link"></textarea>
                                                        @error('number_font_url')
                                                        <div class="invalid-feedback d-block">{{ $message }}</div>
                                                        @enderror
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row mt-2 justify-content-end p-0">
                                                <div class="d-flex align-items-center justify-content-between">
                                                    <a class="btn btn-lg btn-info rounded-0 tab-trigger-previous"
                                                        data-bs-target="#others" aria-selected="false" role="tab"
                                                        tabindex="-1">
                                                        Previous
                                                        <span class="svg-icon svg-icon-4 ms-1 me-0">
                                                            <i class="fa-solid fa-arrow-right"></i>
                                                        </span>
                                                    </a>
                                                    <a class="btn btn-lg btn-info rounded-0 tab-trigger-next"
                                                        data-bs-toggle="tab" data-bs-target="#section-five"
                                                        aria-selected="false" role="tab" tabindex="-1">
                                                        Submit
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
{{-- Preview Selected Color Code --}}
<script>
    // Function to update the disabled text input with the hex code
    function updateColor(name) {
        var colorInput = document.getElementsByName(name)[0];
        var showColorInput = document.getElementsByName("show_" + name)[0];
        
        // Update the value of the disabled input with the hex code
        showColorInput.value = colorInput.value;
    }

    // Attach the updateColor function to the change event of each color input
    var colorInputs = document.querySelectorAll('input[type="color"]');
    colorInputs.forEach(function(input) {
        input.addEventListener('input', function() {
            var name = input.getAttribute('name');
            updateColor(name);
        });
    });
</script>
@endpush