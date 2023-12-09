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
                        <h4 class="text-white p-0 m-0 fw-bold">Solution Details Add</h4>
                    </div>
                </div>
                <div class="card-body p-0 pt-1">
                    <div class="row gx-0">
                        <div class="col-lg-2">
                            <ul class="nav nav-tabs nav-pills border-0 flex-row flex-md-column mb-3 mb-md-0 fs-6"
                                role="tablist">
                                <li class="nav-item w-md-290px my-1 mt-0" role="presentation">
                                    <a class="nav-link p-5 rounded-0 active tab-trigger" data-bs-toggle="tab"
                                        href="#kt_vtab_pane_1" aria-selected="true" role="tab">General Info</a>
                                </li>
                                <li class="nav-item w-md-290px my-1" role="presentation">
                                    <a class="nav-link p-5 rounded-0 tab-trigger" data-bs-toggle="tab"
                                        href="#kt_vtab_pane_2" aria-selected="false" role="tab">Row One</a>
                                </li>
                                <li class="nav-item w-md-290px my-1" role="presentation">
                                    <a class="nav-link p-5 rounded-0 tab-trigger" data-bs-toggle="tab"
                                        href="#kt_vtab_pane_3" aria-selected="false" role="tab" tabindex="-1">Row
                                        Two</a>
                                </li>
                                <li class="nav-item w-md-290px my-1" role="presentation">
                                    <a class="nav-link p-5 rounded-0 tab-trigger" data-bs-toggle="tab"
                                        href="#kt_vtab_pane_4" aria-selected="false" role="tab" tabindex="-1">Row
                                        Three</a>
                                </li>
                                <li class="nav-item w-md-290px my-1" role="presentation">
                                    <a class="nav-link p-5 rounded-0 tab-trigger" data-bs-toggle="tab"
                                        href="#kt_vtab_pane_5" aria-selected="false" role="tab" tabindex="-1">Card
                                        Row</a>
                                </li>
                                <li class="nav-item w-md-290px my-1" role="presentation">
                                    <a class="nav-link p-5 rounded-0 tab-trigger" data-bs-toggle="tab"
                                        href="#kt_vtab_pane_6" aria-selected="false" role="tab" tabindex="-1">Row
                                        Four</a>
                                </li>
                                <li class="nav-item w-md-290px my-1" role="presentation">
                                    <a class="nav-link p-5 rounded-0 tab-trigger" data-bs-toggle="tab"
                                        href="#kt_vtab_pane_7" aria-selected="false" role="tab" tabindex="-1">Row
                                        Five</a>
                                </li>
                                <li class="nav-item w-md-290px my-1" role="presentation">
                                    <a class="nav-link p-5 rounded-0 tab-trigger" data-bs-toggle="tab"
                                        href="#kt_vtab_pane_8" aria-selected="false" role="tab" tabindex="-1">Row
                                        Six</a>
                                </li>
                                <li class="nav-item w-md-290px my-1 mb-0 me-2" role="presentation">
                                    <a class="nav-link p-5 rounded-0 tab-trigger" data-bs-toggle="tab"
                                        href="#kt_vtab_pane_9" aria-selected="false" role="tab" tabindex="-1">Map Row
                                        Six</a>
                                </li>
                            </ul>
                        </div>
                        <div class="col-lg-10 px-4 p-2">
                            <form id="productForm" method="post" action="" enctype="multipart/form-data">
                                @csrf
                                <div class="tab-content" id="myTabContent">
                                    <div class="tab-pane fade active show" id="kt_vtab_pane_1" role="tabpanel">
                                        <div class="w-100">
                                            <div class="pb-5 pb-lg-5">
                                                <h2
                                                    class="fw-bolder d-flex justify-content-center align-items-center text-dark">
                                                    General Info
                                                </h2>
                                                <p class="text-center p-0 m-0"><small
                                                        class="ms-4 text-danger fw-normal fs-sm-9">All The Red Star Mark
                                                        Field Is Required.</small></p>
                                            </div>
                                            <div class="fv-row">
                                                <div class="row">
                                                    <div class="col-lg-6 mb-3">
                                                        <div class="fv-row mb-3">
                                                            <label class="form-label required">Select Brand</label>
                                                            <select class="form-select form-select-solid form-select-sm"
                                                                name="field2" id="field2" multiple
                                                                multiselect-search="true" multiselect-select-all="true"
                                                                multiselect-max-items="3"
                                                                 data-placeholder="Select A Option"
                                                                onchange="console.log(this.selectedOptions)">
                                                                <option>Abarth</option>
                                                                <option>Alfa Romeo</option>
                                                                <option>Aston Martin</option>
                                                                <option>Audi</option>
                                                                <option>Bentley</option>
                                                                <option>BMW</option>
                                                                <option>Bugatti</option>
                                                                <option>Cadillac</option>
                                                                <option>Chevrolet</option>
                                                                <option>Chrysler</option>
                                                                <option>Citroën</option>
                                                                <option>Dacia</option>
                                                                <option>Daewoo</option>
                                                                <option>Daihatsu</option>
                                                                <option>Dodge</option>
                                                                <option>Donkervoort</option>
                                                                <option>DS</option>
                                                            </select>
                                                            {{-- <input class="form-control form-control-solid" id="kt_tagify_2"/> --}}
                                                            <div class="invalid-feedback"> Please Enter Product Name.</div>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-6 mb-3">
                                                        <div class="fv-row mb-3">
                                                            <label class="form-label required">Select Brand</label>
                                                            <select class="form-select form-select-solid form-select-sm"
                                                                name="brand_id" id="field2"  data-control="select2" multiple
                                                                multiselect-search="true" multiselect-select-all="true"
                                                                multiselect-max-items="3">
                                                                <option></option>
                                                                <option value="software">Software</option>
                                                                <option value="hardware">Hardware</option>
                                                                <option value="book">Book</option>
                                                                <option value="training">Training</option>
                                                            </select>
                                                            {{-- <input class="form-control form-control-solid" id="kt_tagify_2"/> --}}
                                                            <div class="invalid-feedback"> Please Enter Product Name.</div>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-6 mb-3">
                                                        <div class="fv-row mb-3">
                                                            <label class="form-label required">Select Brand</label>
                                                            <select class="form-select form-select-solid form-select-sm"
                                                                name="brand_id" data-control="select2"
                                                                data-hide-search="false"
                                                                data-placeholder="Select an Product Type"
                                                                data-allow-clear="true" required>
                                                                <option></option>
                                                                <option value="software">Software</option>
                                                                <option value="hardware">Hardware</option>
                                                                <option value="book">Book</option>
                                                                <option value="training">Training</option>
                                                            </select>
                                                            {{-- <input class="form-control form-control-solid" id="kt_tagify_2"/> --}}
                                                            <div class="invalid-feedback"> Please Enter Product Name.</div>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-6">
                                                        <div class="fv-row mb-3">
                                                            <label class="form-label required">Brand Logo</label>
                                                            <input name="brand_logo"
                                                                class="form-control form-control-sm form-control-solid"
                                                                placeholder="Enter Brand Logo" type="file" required />
                                                            <div class="invalid-feedback"> Please Enter Brand Logo.</div>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-6">
                                                        <div class="fv-row mb-3">
                                                            <label class="form-label required">Banner Image</label>
                                                            <input name="banner_image"
                                                                class="form-control form-control-sm form-control-solid"
                                                                placeholder="Enter Banner Image" type="file"
                                                                required />
                                                            <div class="invalid-feedback"> Please Enter Banner Image.</div>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-6">
                                                        <div class="fv-row mb-3">
                                                            <label class="form-label required">Banner Header</label>
                                                            <textarea rows="1" name="source_contact" class="form-control form-control-sm form-control-solid"
                                                                placeholder="Enter Banner Header" required></textarea>
                                                            <div class="invalid-feedback"> Please Enter Banner Header.
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row mt-2 justify-content-end">
                                                    <div class="d-flex align-items-center justify-content-end">
                                                        <a class="btn btn-lg btn-info rounded-0 tab-trigger-next"
                                                            data-bs-toggle="tab" data-bs-target="#kt_vtab_pane_2"
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
                                    <div class="tab-pane fade" id="kt_vtab_pane_2" role="tabpanel">
                                        <div class="w-100">
                                            <div class="pb-10 pb-lg-10">
                                                <h2
                                                    class="fw-bolder d-flex justify-content-center align-items-center text-dark">
                                                    Row One
                                                </h2>
                                            </div>
                                            <div class="fv-row">
                                                <div class="row">
                                                    <div class="col-lg-6">
                                                        <div class="fv-row mb-3">
                                                            <label class="form-label required">Row One Title</label>
                                                            <input name="row_six_title"
                                                                class="form-control form-control-sm form-control-solid"
                                                                placeholder="Enter Row One Title" type="text"
                                                                required />
                                                            <div class="invalid-feedback"> Please Enter Row One Title.
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-6">
                                                        <div class="fv-row mb-3">
                                                            <label class="form-label required">Row One Header</label>
                                                            <textarea rows="1" name="row_six_header" class="form-control form-control-sm form-control-solid"
                                                                placeholder="Enter Row One Header" required></textarea>
                                                            <div class="invalid-feedback"> Please Enter Row One Header.
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row mt-2 justify-content-end">
                                                    <div class="d-flex align-items-center justify-content-between">
                                                        <a class="btn btn-lg btn-info rounded-0 tab-trigger-previous"
                                                            data-bs-target="#kt_vtab_pane_1" aria-selected="false"
                                                            role="tab" tabindex="-1">
                                                            Previous
                                                            <span class="svg-icon svg-icon-4 ms-1 me-0">
                                                                <i class="fa-solid fa-arrow-right"></i>
                                                            </span>
                                                        </a>
                                                        <a class="btn btn-lg btn-info rounded-0 tab-trigger-next"
                                                            data-bs-toggle="tab" data-bs-target="#kt_vtab_pane_3"
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
                                    <div class="tab-pane fade" id="kt_vtab_pane_3" role="tabpanel">
                                        <div class="w-100">
                                            <div class="pb-10 pb-lg-10">
                                                <h2
                                                    class="fw-bolder d-flex justify-content-center align-items-center text-dark">
                                                    Row Two
                                                </h2>
                                            </div>
                                            <div class="fv-row">
                                                <div class="row">
                                                    <div class="col-lg-6">
                                                        <div class="row border p-4">
                                                            <p class="badge badge-info custom-badge"
                                                                style="margin-top: -15px">Row</span>
                                                            <div class="col-lg-12 col-sm-12">
                                                                <div class="row">
                                                                    <div class="col-md-12 mb-2">
                                                                        <label for="validationCustom01"
                                                                            class="form-label mb-0">Badge
                                                                        </label>
                                                                        <input type="text"
                                                                            class="form-control form-control-solid form-control-sm"
                                                                            name="badge" id="validationCustom01"
                                                                            placeholder="Enter Badge">
                                                                        <div class="invalid-feedback"> Please Enter Badge
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-12 mb-2">
                                                                        <label for="validationCustom01"
                                                                            class="form-label required mb-0">Title
                                                                        </label>
                                                                        <input type="text"
                                                                            class="form-control form-control-solid form-control-sm"
                                                                            name="title" id="validationCustom01"
                                                                            placeholder="Enter Title" required>
                                                                        <div class="invalid-feedback"> Please Enter Title
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-6">
                                                        <div class="row border p-4">
                                                            <p class="badge badge-info custom-badge"
                                                                style="margin-top: -15px; width: 18%">Row Image Area</span>
                                                            <div class="col-lg-12 col-sm-12">
                                                                <div class="row">
                                                                    <div class="col-md-6 mb-2">
                                                                        <label for="validationCustom01"
                                                                            class="form-label required mb-0">Row Image
                                                                        </label>
                                                                        <input type="file"
                                                                            class="form-control form-control-solid form-control-sm"
                                                                            name="image" id="validationCustom01"
                                                                            placeholder="Enter Row Image" required>
                                                                        <div class="invalid-feedback"> Please Enter Row
                                                                            Image </div>
                                                                    </div>
                                                                    <div class="col-md-6 mb-2">
                                                                        <label for="validationCustom01"
                                                                            class="form-label mb-0">Button Name
                                                                        </label>
                                                                        <input type="text"
                                                                            class="form-control form-control-solid form-control-sm"
                                                                            name="btn_name" id="validationCustom01"
                                                                            placeholder="Enter Button Name">
                                                                    </div>
                                                                    <div class="col-md-12 mb-2">
                                                                        <label for="validationCustom01"
                                                                            class="form-label mb-0">Link
                                                                        </label>
                                                                        <input type="text"
                                                                            class="form-control form-control-solid form-control-sm"
                                                                            name="link" id="validationCustom01"
                                                                            placeholder="Enter Row Link">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-12">
                                                        <div class="row border p-4 mt-8">
                                                            <p class="badge badge-info custom-badge"
                                                                style="margin-top: -15px; width: 10%">Row
                                                                Description</span>
                                                            <div class="col-lg-12 col-sm-12">
                                                                <div class="row">
                                                                    <div class="col-md-12 mb-1">
                                                                        <label for="validationCustom01"
                                                                            class="form-label required ">Description
                                                                        </label>
                                                                        <textarea name="description" class="tox-target kt_docs_tinymce_plugins">
                                                                            <h1>Enter Your Text Here</h1>
                                                                        </textarea>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row mt-2 justify-content-end">
                                                    <div class="d-flex align-items-center justify-content-between">
                                                        <a class="btn btn-lg btn-info rounded-0 tab-trigger-previous"
                                                            data-bs-target="#kt_vtab_pane_2" aria-selected="false"
                                                            role="tab" tabindex="-1">
                                                            Previous
                                                            <span class="svg-icon svg-icon-4 ms-1 me-0">
                                                                <i class="fa-solid fa-arrow-right"></i>
                                                            </span>
                                                        </a>
                                                        <a class="btn btn-lg btn-info rounded-0 tab-trigger-next"
                                                            data-bs-toggle="tab" data-bs-target="#kt_vtab_pane_4"
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
                                    <div class="tab-pane fade" id="kt_vtab_pane_4" role="tabpanel">
                                        <div class="w-100">
                                            <div class="pb-10 pb-lg-10">
                                                <h2
                                                    class="fw-bolder d-flex justify-content-center align-items-center text-dark">
                                                    Row Three
                                                </h2>
                                            </div>
                                            <div class="fv-row">
                                                <div class="row">
                                                    <div class="col-lg-6">
                                                        <div class="row border p-4">
                                                            <p class="badge badge-info custom-badge"
                                                                style="margin-top: -15px">Row</span>
                                                            <div class="col-lg-12 col-sm-12">
                                                                <div class="row">
                                                                    <div class="col-md-12 mb-2">
                                                                        <label for="validationCustom01"
                                                                            class="form-label mb-0">Badge
                                                                        </label>
                                                                        <input type="text"
                                                                            class="form-control form-control-solid form-control-sm"
                                                                            name="badge" id="validationCustom01"
                                                                            placeholder="Enter Badge">
                                                                        <div class="invalid-feedback"> Please Enter Badge
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-12 mb-2">
                                                                        <label for="validationCustom01"
                                                                            class="form-label required mb-0">Title
                                                                        </label>
                                                                        <input type="text"
                                                                            class="form-control form-control-solid form-control-sm"
                                                                            name="title" id="validationCustom01"
                                                                            placeholder="Enter Title" required>
                                                                        <div class="invalid-feedback"> Please Enter Title
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-6">
                                                        <div class="row border p-4">
                                                            <p class="badge badge-info custom-badge"
                                                                style="margin-top: -15px; width: 18%">Row Image Area</span>
                                                            <div class="col-lg-12 col-sm-12">
                                                                <div class="row">
                                                                    <div class="col-md-6 mb-2">
                                                                        <label for="validationCustom01"
                                                                            class="form-label required mb-0">Row Image
                                                                        </label>
                                                                        <input type="file"
                                                                            class="form-control form-control-solid form-control-sm"
                                                                            name="image" id="validationCustom01"
                                                                            placeholder="Enter Row Image" required>
                                                                        <div class="invalid-feedback"> Please Enter Row
                                                                            Image </div>
                                                                    </div>
                                                                    <div class="col-md-6 mb-2">
                                                                        <label for="validationCustom01"
                                                                            class="form-label mb-0">Button Name
                                                                        </label>
                                                                        <input type="text"
                                                                            class="form-control form-control-solid form-control-sm"
                                                                            name="btn_name" id="validationCustom01"
                                                                            placeholder="Enter Button Name">
                                                                    </div>
                                                                    <div class="col-md-12 mb-2">
                                                                        <label for="validationCustom01"
                                                                            class="form-label mb-0">Link
                                                                        </label>
                                                                        <input type="text"
                                                                            class="form-control form-control-solid form-control-sm"
                                                                            name="link" id="validationCustom01"
                                                                            placeholder="Enter Row Link">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-12">
                                                        <div class="row border p-4 mt-8">
                                                            <p class="badge badge-info custom-badge"
                                                                style="margin-top: -15px; width: 10%">Row
                                                                Description</span>
                                                            <div class="col-lg-12 col-sm-12">
                                                                <div class="row">
                                                                    <div class="col-md-12 mb-1">
                                                                        <label for="validationCustom01"
                                                                            class="form-label required ">Description
                                                                        </label>
                                                                        <textarea name="description" class="tox-target kt_docs_tinymce_plugins">
                                                                            <h1>Enter Your Text Here</h1>
                                                                            
                                                                        </textarea>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row mt-2 justify-content-end">
                                                    <div class="d-flex align-items-center justify-content-between">
                                                        <a class="btn btn-lg btn-info rounded-0 tab-trigger-previous"
                                                            data-bs-target="#kt_vtab_pane_3" aria-selected="false"
                                                            role="tab" tabindex="-1">
                                                            Previous
                                                            <span class="svg-icon svg-icon-4 ms-1 me-0">
                                                                <i class="fa-solid fa-arrow-right"></i>
                                                            </span>
                                                        </a>
                                                        <a class="btn btn-lg btn-info rounded-0 tab-trigger-next"
                                                            data-bs-toggle="tab" data-bs-target="#kt_vtab_pane_5"
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
                                    <div class="tab-pane fade" id="kt_vtab_pane_5" role="tabpanel">
                                        <div class="w-100">
                                            <div class="pb-10 pb-lg-10">
                                                <h2
                                                    class="fw-bolder d-flex justify-content-center align-items-center text-dark">
                                                    Card Row
                                                </h2>
                                            </div>
                                            <div class="fv-row">
                                                <div class="row">
                                                    <div class="col-lg-6">
                                                        <div class="row border p-4">
                                                            <p class="badge badge-info custom-badge"
                                                                style="margin-top: -15px; width: 11%">Card One</span>
                                                            <div class="col-lg-12 col-sm-12">
                                                                <div class="row">
                                                                    <div class="col-md-6 mb-2">
                                                                        <label for="validationCustom01"
                                                                            class="form-label required mb-0">Title
                                                                        </label>
                                                                        <input type="text"
                                                                            class="form-control form-control-solid form-control-sm"
                                                                            name="title" id="validationCustom01"
                                                                            placeholder="Enter Title" required>
                                                                        <div class="invalid-feedback"> Please Enter Title
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-6 mb-2">
                                                                        <label for="validationCustom01"
                                                                            class="form-label required mb-0">Image
                                                                        </label>
                                                                        <input type="file"
                                                                            class="form-control form-control-solid form-control-sm"
                                                                            name="image" id="validationCustom01"
                                                                            placeholder="Enter Image" required>
                                                                        <div class="invalid-feedback"> Please Enter Image
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-6 mb-2">
                                                                        <label for="validationCustom01"
                                                                            class="form-label required mb-0">Button Name
                                                                        </label>
                                                                        <input type="text"
                                                                            class="form-control form-control-solid form-control-sm"
                                                                            name="button_name" id="validationCustom01"
                                                                            placeholder="Enter Button Name" required>
                                                                        <div class="invalid-feedback"> Please Enter Button
                                                                            Name </div>
                                                                    </div>
                                                                    <div class="col-md-6 mb-2">
                                                                        <label for="validationCustom01"
                                                                            class="form-label required mb-0">Link
                                                                        </label>
                                                                        <textarea rows="1" name="link" class="form-control form-control-sm form-control-solid"
                                                                            placeholder="Enter Link" required></textarea>
                                                                        <div class="invalid-feedback"> Please Enter Link
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-12 mb-2">
                                                                        <label for="validationCustom01"
                                                                            class="form-label required mb-0">Short
                                                                            Des</label>
                                                                        <textarea name="acceshort_desssories" class="tox-target kt_docs_tinymce_plugins">
                                                                            <h1>Enter Your Text Here</h1>
                                                                         </textarea>
                                                                        <div class="invalid-feedback"> Please Enter Short
                                                                            Des </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-6">
                                                        <div class="row border p-4">
                                                            <p class="badge badge-info custom-badge"
                                                                style="margin-top: -15px; width: 11%">Card Two</span>
                                                            <div class="col-lg-12 col-sm-12">
                                                                <div class="row">
                                                                    <div class="col-md-6 mb-2">
                                                                        <label for="validationCustom01"
                                                                            class="form-label required mb-0">Title
                                                                        </label>
                                                                        <input type="text"
                                                                            class="form-control form-control-solid form-control-sm"
                                                                            name="title" id="validationCustom01"
                                                                            placeholder="Enter Title" required>
                                                                        <div class="invalid-feedback"> Please Enter Title
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-6 mb-2">
                                                                        <label for="validationCustom01"
                                                                            class="form-label required mb-0">Image
                                                                        </label>
                                                                        <input type="file"
                                                                            class="form-control form-control-solid form-control-sm"
                                                                            name="image" id="validationCustom01"
                                                                            placeholder="Enter Image" required>
                                                                        <div class="invalid-feedback"> Please Enter Image
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-6 mb-2">
                                                                        <label for="validationCustom01"
                                                                            class="form-label required mb-0">Button Name
                                                                        </label>
                                                                        <input type="text"
                                                                            class="form-control form-control-solid form-control-sm"
                                                                            name="button_name" id="validationCustom01"
                                                                            placeholder="Enter Button Name" required>
                                                                        <div class="invalid-feedback"> Please Enter Button
                                                                            Name </div>
                                                                    </div>
                                                                    <div class="col-md-6 mb-2">
                                                                        <label for="validationCustom01"
                                                                            class="form-label required mb-0">Link
                                                                        </label>
                                                                        <textarea rows="1" name="link" class="form-control form-control-sm form-control-solid"
                                                                            placeholder="Enter Link" required></textarea>
                                                                        <div class="invalid-feedback"> Please Enter Link
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-12 mb-2">
                                                                        <label for="validationCustom01"
                                                                            class="form-label required mb-0">Short
                                                                            Des</label>
                                                                        <textarea name="acceshort_desssories" class="tox-target kt_docs_tinymce_plugins">
                                                                <h1>Enter Your Text Here</h1>
                                                                </textarea>
                                                                        <div class="invalid-feedback"> Please Enter Short
                                                                            Des </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-6">
                                                        <div class="row border p-4 mt-8">
                                                            <p class="badge badge-info custom-badge"
                                                                style="margin-top: -15px; width: 12%">Card Three</span>
                                                            <div class="col-lg-12 col-sm-12">
                                                                <div class="row">
                                                                    <div class="col-md-6 mb-2">
                                                                        <label for="validationCustom01"
                                                                            class="form-label required mb-0">Title
                                                                        </label>
                                                                        <input type="text"
                                                                            class="form-control form-control-solid form-control-sm"
                                                                            name="title" id="validationCustom01"
                                                                            placeholder="Enter Title" required>
                                                                        <div class="invalid-feedback"> Please Enter Title
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-6 mb-2">
                                                                        <label for="validationCustom01"
                                                                            class="form-label required mb-0">Image
                                                                        </label>
                                                                        <input type="file"
                                                                            class="form-control form-control-solid form-control-sm"
                                                                            name="image" id="validationCustom01"
                                                                            placeholder="Enter Image" required>
                                                                        <div class="invalid-feedback"> Please Enter Image
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-6 mb-2">
                                                                        <label for="validationCustom01"
                                                                            class="form-label required mb-0">Button Name
                                                                        </label>
                                                                        <input type="text"
                                                                            class="form-control form-control-solid form-control-sm"
                                                                            name="button_name" id="validationCustom01"
                                                                            placeholder="Enter Button Name" required>
                                                                        <div class="invalid-feedback"> Please Enter Button
                                                                            Name </div>
                                                                    </div>
                                                                    <div class="col-md-6 mb-2">
                                                                        <label for="validationCustom01"
                                                                            class="form-label required mb-0">Link
                                                                        </label>
                                                                        <textarea rows="1" name="link" class="form-control form-control-sm form-control-solid"
                                                                            placeholder="Enter Link" required></textarea>
                                                                        <div class="invalid-feedback"> Please Enter Link
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-12 mb-2">
                                                                        <label for="validationCustom01"
                                                                            class="form-label required mb-0">Short
                                                                            Des</label>
                                                                        <textarea name="acceshort_desssories" class="tox-target kt_docs_tinymce_plugins">
                                                                            <h1>Enter Your Text Here</h1>
                                                                        </textarea>
                                                                        <div class="invalid-feedback"> Please Enter Short
                                                                            Des </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>


                                                <div class="row mt-2 justify-content-end">
                                                    <div class="d-flex align-items-center justify-content-between">
                                                        <a class="btn btn-lg btn-info rounded-0 tab-trigger-previous"
                                                            data-bs-target="#kt_vtab_pane_4" aria-selected="false"
                                                            role="tab" tabindex="-1">
                                                            Previous
                                                            <span class="svg-icon svg-icon-4 ms-1 me-0">
                                                                <i class="fa-solid fa-arrow-right"></i>
                                                            </span>
                                                        </a>
                                                        <a class="btn btn-lg btn-info rounded-0 tab-trigger-next"
                                                            data-bs-toggle="tab" data-bs-target="#kt_vtab_pane_6"
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
                                    <div class="tab-pane fade" id="kt_vtab_pane_6" role="tabpanel">
                                        <div class="w-100">
                                            <div class="pb-10 pb-lg-10">
                                                <h2
                                                    class="fw-bolder d-flex justify-content-center align-items-center text-dark">
                                                    Row Four
                                                </h2>
                                            </div>
                                            <div class="fv-row">
                                                <div class="row">
                                                    <div class="col-md-12 mb-2">
                                                        <label for="validationCustom01"
                                                            class="form-label required mb-0">Row Four Background Img
                                                        </label>
                                                        <input type="file"
                                                            class="form-control form-control-solid form-control-sm"
                                                            name="row_six_image" id="validationCustom01"
                                                            placeholder="Enter Row Four Background Img" required>
                                                        <div class="invalid-feedback"> Please Enter Row Four Background Img
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row mt-2 justify-content-end">
                                                    <div class="d-flex align-items-center justify-content-between">
                                                        <a class="btn btn-lg btn-info rounded-0 tab-trigger-previous"
                                                            data-bs-target="#kt_vtab_pane_5" aria-selected="false"
                                                            role="tab" tabindex="-1">
                                                            Previous
                                                            <span class="svg-icon svg-icon-4 ms-1 me-0">
                                                                <i class="fa-solid fa-arrow-right"></i>
                                                            </span>
                                                        </a>
                                                        <a class="btn btn-lg btn-info rounded-0 tab-trigger-next"
                                                            data-bs-toggle="tab" data-bs-target="#kt_vtab_pane_7"
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
                                    <div class="tab-pane fade" id="kt_vtab_pane_7" role="tabpanel">
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
                                                        <div class="row border p-4">
                                                            <p class="badge badge-info custom-badge"
                                                                style="margin-top: -15px">Row</span>
                                                            <div class="col-lg-12 col-sm-12">
                                                                <div class="row">
                                                                    <div class="col-md-12 mb-2">
                                                                        <label for="validationCustom01"
                                                                            class="form-label mb-0">Badge
                                                                        </label>
                                                                        <input type="text"
                                                                            class="form-control form-control-solid form-control-sm"
                                                                            name="badge" id="validationCustom01"
                                                                            placeholder="Enter Badge">
                                                                        <div class="invalid-feedback"> Please Enter Badge
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-12 mb-2">
                                                                        <label for="validationCustom01"
                                                                            class="form-label required mb-0">Title
                                                                        </label>
                                                                        <input type="text"
                                                                            class="form-control form-control-solid form-control-sm"
                                                                            name="title" id="validationCustom01"
                                                                            placeholder="Enter Title" required>
                                                                        <div class="invalid-feedback"> Please Enter Title
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-6">
                                                        <div class="row border p-4">
                                                            <p class="badge badge-info custom-badge"
                                                                style="margin-top: -15px; width: 18%">Row Image Area</span>
                                                            <div class="col-lg-12 col-sm-12">
                                                                <div class="row">
                                                                    <div class="col-md-6 mb-2">
                                                                        <label for="validationCustom01"
                                                                            class="form-label required mb-0">Row Image
                                                                        </label>
                                                                        <input type="file"
                                                                            class="form-control form-control-solid form-control-sm"
                                                                            name="image" id="validationCustom01"
                                                                            placeholder="Enter Row Image" required>
                                                                        <div class="invalid-feedback"> Please Enter Row
                                                                            Image </div>
                                                                    </div>
                                                                    <div class="col-md-6 mb-2">
                                                                        <label for="validationCustom01"
                                                                            class="form-label mb-0">Button Name
                                                                        </label>
                                                                        <input type="text"
                                                                            class="form-control form-control-solid form-control-sm"
                                                                            name="btn_name" id="validationCustom01"
                                                                            placeholder="Enter Button Name">
                                                                    </div>
                                                                    <div class="col-md-12 mb-2">
                                                                        <label for="validationCustom01"
                                                                            class="form-label mb-0">Link
                                                                        </label>
                                                                        <input type="text"
                                                                            class="form-control form-control-solid form-control-sm"
                                                                            name="link" id="validationCustom01"
                                                                            placeholder="Enter Row Link">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-12">
                                                        <div class="row border p-4 mt-8">
                                                            <p class="badge badge-info custom-badge"
                                                                style="margin-top: -15px; width: 10%">Row
                                                                Description</span>
                                                            <div class="col-lg-12 col-sm-12">
                                                                <div class="row">
                                                                    <div class="col-md-12 mb-1">
                                                                        <label for="validationCustom01"
                                                                            class="form-label required ">Description
                                                                        </label>
                                                                        <textarea name="description" class="tox-target kt_docs_tinymce_plugins">
                                                                            <h1>Enter Your Text Here</h1>
                                                                            
                                                                        </textarea>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row mt-2 justify-content-end">
                                                    <div class="d-flex align-items-center justify-content-between">
                                                        <a class="btn btn-lg btn-info rounded-0 tab-trigger-previous"
                                                            data-bs-target="#kt_vtab_pane_6" aria-selected="false"
                                                            role="tab" tabindex="-1">
                                                            Previous
                                                            <span class="svg-icon svg-icon-4 ms-1 me-0">
                                                                <i class="fa-solid fa-arrow-right"></i>
                                                            </span>
                                                        </a>
                                                        <a class="btn btn-lg btn-info rounded-0 tab-trigger-next"
                                                            data-bs-toggle="tab" data-bs-target="#kt_vtab_pane_8"
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
                                    <div class="tab-pane fade" id="kt_vtab_pane_8" role="tabpanel">
                                        <div class="w-100">
                                            <div class="pb-10 pb-lg-10">
                                                <h2
                                                    class="fw-bolder d-flex justify-content-center align-items-center text-dark">
                                                    Row Six
                                                </h2>
                                            </div>
                                            <div class="fv-row">
                                                <div class="row">
                                                    <div class="col-lg-6">
                                                        <div class="row border p-4">
                                                            <p class="badge badge-info custom-badge"
                                                                style="margin-top: -15px">Row</span>
                                                            <div class="col-lg-12 col-sm-12">
                                                                <div class="row">
                                                                    <div class="col-md-12 mb-2">
                                                                        <label for="validationCustom01"
                                                                            class="form-label mb-0">Badge
                                                                        </label>
                                                                        <input type="text"
                                                                            class="form-control form-control-solid form-control-sm"
                                                                            name="badge" id="validationCustom01"
                                                                            placeholder="Enter Badge">
                                                                        <div class="invalid-feedback"> Please Enter Badge
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-12 mb-2">
                                                                        <label for="validationCustom01"
                                                                            class="form-label required mb-0">Title
                                                                        </label>
                                                                        <input type="text"
                                                                            class="form-control form-control-solid form-control-sm"
                                                                            name="title" id="validationCustom01"
                                                                            placeholder="Enter Title" required>
                                                                        <div class="invalid-feedback"> Please Enter Title
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-6">
                                                        <div class="row border p-4">
                                                            <p class="badge badge-info custom-badge"
                                                                style="margin-top: -15px; width: 18%">Row Image Area</span>
                                                            <div class="col-lg-12 col-sm-12">
                                                                <div class="row">
                                                                    <div class="col-md-6 mb-2">
                                                                        <label for="validationCustom01"
                                                                            class="form-label required mb-0">Row Image
                                                                        </label>
                                                                        <input type="file"
                                                                            class="form-control form-control-solid form-control-sm"
                                                                            name="image" id="validationCustom01"
                                                                            placeholder="Enter Row Image" required>
                                                                        <div class="invalid-feedback"> Please Enter Row
                                                                            Image </div>
                                                                    </div>
                                                                    <div class="col-md-6 mb-2">
                                                                        <label for="validationCustom01"
                                                                            class="form-label mb-0">Button Name
                                                                        </label>
                                                                        <input type="text"
                                                                            class="form-control form-control-solid form-control-sm"
                                                                            name="btn_name" id="validationCustom01"
                                                                            placeholder="Enter Button Name">
                                                                    </div>
                                                                    <div class="col-md-12 mb-2">
                                                                        <label for="validationCustom01"
                                                                            class="form-label mb-0">Link
                                                                        </label>
                                                                        <input type="text"
                                                                            class="form-control form-control-solid form-control-sm"
                                                                            name="link" id="validationCustom01"
                                                                            placeholder="Enter Row Link">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-12">
                                                        <div class="row border p-4 mt-8">
                                                            <p class="badge badge-info custom-badge"
                                                                style="margin-top: -15px; width: 10%">Row
                                                                Description</span>
                                                            <div class="col-lg-12 col-sm-12">
                                                                <div class="row">
                                                                    <div class="col-md-12 mb-1">
                                                                        <label for="validationCustom01"
                                                                            class="form-label required ">Description
                                                                        </label>
                                                                        <textarea name="description" class="tox-target kt_docs_tinymce_plugins">
                                                                            <h1>Enter Your Text Here</h1>
                                                                            
                                                                        </textarea>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row mt-2 justify-content-end">
                                                    <div class="d-flex align-items-center justify-content-between">
                                                        <a class="btn btn-lg btn-info rounded-0 tab-trigger-previous"
                                                            data-bs-target="#kt_vtab_pane_7" aria-selected="false"
                                                            role="tab" tabindex="-1">
                                                            Previous
                                                            <span class="svg-icon svg-icon-4 ms-1 me-0">
                                                                <i class="fa-solid fa-arrow-right"></i>
                                                            </span>
                                                        </a>
                                                        <a class="btn btn-lg btn-info rounded-0 tab-trigger-next"
                                                            data-bs-toggle="tab" data-bs-target="#kt_vtab_pane_9"
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
                                    <div class="tab-pane fade" id="kt_vtab_pane_9" role="tabpanel">
                                        <div class="w-100">
                                            <div class="pb-10 pb-lg-10">
                                                <h2
                                                    class="fw-bolder d-flex justify-content-center align-items-center text-dark">
                                                    Map Row Six
                                                </h2>
                                            </div>
                                            <div class="fv-row">
                                                asdasdasdas
                                                <div class="row mt-2 justify-content-end">
                                                    <div class="d-flex align-items-center justify-content-between">
                                                        <a class="btn btn-lg btn-info rounded-0 tab-trigger-previous"
                                                            data-bs-target="#kt_vtab_pane_8" aria-selected="false"
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
        // Stepper lement
        var element = document.querySelector("#kt_stepper_example_clickable");


        // Initialize Stepper
        var stepper = new KTStepper(element);


        // Handle navigation click
        stepper.on("kt.stepper.click", function(stepper) {
            stepper.goTo(stepper.getClickedStepIndex()); // go to clicked step
        });


        // Handle next step
        stepper.on("kt.stepper.next", function(stepper) {
            stepper.goNext(); // go next step
        });


        // Handle previous step
        stepper.on("kt.stepper.previous", function(stepper) {
            stepper.goPrevious(); // go previous step
        });
    </script>
    <script>
        //---------Sidebar list Show Hide----------
        $(document).ready(function() {


            $('#dealId').click(function() {
                $("#dealExpand").toggle(this.checked);
            });


            $('#rfqId').click(function() {


                $("#rfqExpand").toggle('slow');


            });

        });
    </script>
    <script>
        $('.stock_select').on('change', function() {


            var stock_value = $(this).find(":selected").val();


            if (stock_value == 'available') {
                $(".qty_display").removeClass("d-none");
                $(".qty_required").prop('required', true);
            } else if (stock_value == 'limited') {
                $(".qty_display").removeClass("d-none");
                $(".qty_required").prop('required', true);
            } else {
                $(".qty_display").addClass("d-none");
                $(".qty_required").prop('required', false);
            }


        });


        $('.price_select').on('change', function() {


            var price_value = $(this).find(":selected").val();
            if (price_value == 'rfq') {
                // alert(price_value);
                $(".rfq_price").removeClass("d-none");
                $(".offer_price").addClass("d-none");
                $(".price").addClass("d-none");
            } else if (price_value == 'offer_price') {
                $(".offer_price").removeClass("d-none");
                $(".rfq_price").addClass("d-none");
                $(".price").addClass("d-none");
            } else {
                $(".price").removeClass("d-none");
                $(".offer_price").addClass("d-none");
                $(".rfq_price").addClass("d-none");
            }


        });
    </script>
    <script>
        var myDropzone = new Dropzone("#kt_dropzonejs_example_1", {
            url: "https://keenthemes.com/scripts/void.php", // Set the url for your upload script location
            paramName: "file", // The name that will be used to transfer the file
            maxFiles: 10,
            maxFilesize: 10, // MB
            addRemoveLinks: true,
            accept: function(file, done) {
                if (file.name == "wow.jpg") {
                    done("Naha, you don't.");
                } else {
                    done();
                }
            }
        });
    </script>
    <script>
        // The DOM elements you wish to replace with Tagify
        var input1 = document.querySelector("#kt_tagify_1");
        var input2 = document.querySelector("#kt_tagify_2");

        // Initialize Tagify components on the above inputs
        new Tagify(input1);
        new Tagify(input2);
    </script>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Get the checkbox and colors input container
            var checkbox = document.getElementById('dealCheckbox');
            var dealsInputContainer = document.getElementById('dealsInputContainer');

            // Add change event listener to the checkbox
            checkbox.addEventListener('change', function() {
                // Toggle the visibility of the colors input field based on checkbox state
                dealsInputContainer.style.display = checkbox.checked ? 'block' : 'none';
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
    <script>
        (function($) {
            "use strict";

            $(document).ready(function() {
                $('#multiple-checkboxes').multiselect({
                    includeSelectAllOption: true,
                    enableFiltering: true, // Add this line to enable search/filtering
                });
            });

        })(jQuery);
    </script>
    <script>
        var style = document.createElement('style');
        style.setAttribute("id", "multiselect_dropdown_styles");
        style.innerHTML = `
            .multiselect-dropdown{
            display: inline-block;
            padding: 6px;
            border-radius: 4px;
            border: solid 0px #ced4da;
            background-color: #f5f8fa;
            position: relative;
            background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 16 16'%3e%3cpath fill='none' stroke='%23343a40' stroke-linecap='round' stroke-linejoin='round' stroke-width='2' d='M2 5l6 6 6-6'/%3e%3c/svg%3e");
            background-repeat: no-repeat;
            background-position: right .75rem center;
            background-size: 16px 12px;
            }
            .multiselect-dropdown span.optext, .multiselect-dropdown span.placeholder{
            margin-right:0.5em; 
            margin-bottom:2px;
            padding:1px 0; 
            border-radius: 4px; 
            display:inline-block;
            }
            .multiselect-dropdown span.optext .optdel {
            float: right;
            margin: 0 -6px 1px 5px;
            font-size: 0.7em;
            margin-top: 2px;
            cursor: pointer;
            color: #666;
            }
            .multiselect-dropdown span.optext .optdel:hover { color: #c66;}
            .multiselect-dropdown span.placeholder{
            color:#ced4da;
            visibility: hidden;
            }
            .multiselect-dropdown-list-wrapper{
            border: 0;
            box-shadow: 0 0 50px 0 rgba(82,63,105,.15);
            border-radius: 0.475rem;
            padding: 0.5rem 0.5rem;
            background-color: #fff;
            }
            .multiselect-dropdown-list-wrapper .multiselect-dropdown-search{
            margin-bottom:5px;
            background-color: #fff;
            padding: 0.55rem 0.75rem;
            color: #5e6278;
            font-size: .925rem;
            border: 1px solid #e4e6ef;
            border-radius: 0.325rem;
            outline: 0!important;
            }
            .multiselect-dropdown-list{
            padding:2px;
            height: 15rem;
            overflow-y:auto;
            overflow-x: hidden;
            }
            .multiselect-dropdown-list::-webkit-scrollbar {
            width: 6px;
            }
            .multiselect-dropdown-list::-webkit-scrollbar-thumb {
            background-color: #bec4ca;
            border-radius:3px;
            }

            .multiselect-dropdown-list div{
            padding: 5px;
            }
            .multiselect-dropdown-list input{
            height: 1.15em;
            width: 1.15em;
            margin-right: 0.35em;  
            }
            .multiselect-dropdown-list div.checked{
            }
            .multiselect-dropdown-list div:hover{
            background-color: #ced4da;
            }
            .multiselect-dropdown span.maxselected {width:100%;}
            `;
        document.head.appendChild(style);

        function MultiselectDropdown(options) {
            var config = {
                search: true,
                // height: '15rem',
                placeholder: 'select',
                txtSelected: 'selected',
                txtAll: 'All',
                txtRemove: 'Remove',
                txtSearch: 'search',
                ...options
            };

            function newEl(tag, attrs) {
                var e = document.createElement(tag);
                if (attrs !== undefined) Object.keys(attrs).forEach(k => {
                    if (k === 'class') {
                        Array.isArray(attrs[k]) ? attrs[k].forEach(o => o !== '' ? e.classList.add(o) : 0) : (attrs[
                            k] !== '' ? e.classList.add(attrs[k]) : 0)
                    } else if (k === 'style') {
                        Object.keys(attrs[k]).forEach(ks => {
                            e.style[ks] = attrs[k][ks];
                        });
                    } else if (k === 'text') {
                        attrs[k] === '' ? e.innerHTML = '&nbsp;' : e.innerText = attrs[k]
                    } else e[k] = attrs[k];
                });
                return e;
            }


            document.querySelectorAll("select[multiple]").forEach((el, k) => {

                var div = newEl('div', {
                    class: 'multiselect-dropdown',
                    style: {
                        width: config.style?.width ?? el.clientWidth + 'px',
                        padding: config.style?.padding ?? ''
                    }
                });
                el.style.display = 'none';
                el.parentNode.insertBefore(div, el.nextSibling);
                var listWrap = newEl('div', {
                    class: 'multiselect-dropdown-list-wrapper'
                });
                var list = newEl('div', {
                    class: 'multiselect-dropdown-list',
                    style: {
                        height: config.height
                    }
                });
                var search = newEl('input', {
                    class: ['multiselect-dropdown-search'].concat([config.searchInput?.class ??
                        'form-control'
                    ]),
                    style: {
                        width: '100%',
                        display: el.attributes['multiselect-search']?.value === 'true' ? 'block' : 'none'
                    },
                    placeholder: config.txtSearch
                });
                listWrap.appendChild(search);
                div.appendChild(listWrap);
                listWrap.appendChild(list);

                el.loadOptions = () => {
                    list.innerHTML = '';

                    if (el.attributes['multiselect-select-all']?.value == 'true') {
                        var op = newEl('div', {
                            class: 'multiselect-dropdown-all-selector'
                        })
                        var ic = newEl('input', {
                            type: 'checkbox'
                        });
                        op.appendChild(ic);
                        op.appendChild(newEl('label', {
                            text: config.txtAll
                        }));

                        op.addEventListener('click', () => {
                            op.classList.toggle('checked');
                            op.querySelector("input").checked = !op.querySelector("input").checked;

                            var ch = op.querySelector("input").checked;
                            list.querySelectorAll(
                                    ":scope > div:not(.multiselect-dropdown-all-selector)")
                                .forEach(i => {
                                    if (i.style.display !== 'none') {
                                        i.querySelector("input").checked = ch;
                                        i.optEl.selected = ch
                                    }
                                });

                            el.dispatchEvent(new Event('change'));
                        });
                        ic.addEventListener('click', (ev) => {
                            ic.checked = !ic.checked;
                        });
                        el.addEventListener('change', (ev) => {
                            let itms = Array.from(list.querySelectorAll(
                                ":scope > div:not(.multiselect-dropdown-all-selector)")).filter(e =>
                                e.style.display !== 'none')
                            let existsNotSelected = itms.find(i => !i.querySelector("input").checked);
                            if (ic.checked && existsNotSelected) ic.checked = false;
                            else if (ic.checked == false && existsNotSelected === undefined) ic
                                .checked = true;
                        });

                        list.appendChild(op);
                    }

                    Array.from(el.options).map(o => {
                        var op = newEl('div', {
                            class: o.selected ? 'checked' : '',
                            optEl: o
                        })
                        var ic = newEl('input', {
                            type: 'checkbox',
                            checked: o.selected
                        });
                        op.appendChild(ic);
                        op.appendChild(newEl('label', {
                            text: o.text
                        }));

                        op.addEventListener('click', () => {
                            op.classList.toggle('checked');
                            op.querySelector("input").checked = !op.querySelector("input")
                                .checked;
                            op.optEl.selected = !!!op.optEl.selected;
                            el.dispatchEvent(new Event('change'));
                        });
                        ic.addEventListener('click', (ev) => {
                            ic.checked = !ic.checked;
                        });
                        o.listitemEl = op;
                        list.appendChild(op);
                    });
                    div.listEl = listWrap;

                    div.refresh = () => {
                        div.querySelectorAll('span.optext, span.placeholder').forEach(t => div.removeChild(
                            t));
                        var sels = Array.from(el.selectedOptions);
                        if (sels.length > (el.attributes['multiselect-max-items']?.value ?? 5)) {
                            div.appendChild(newEl('span', {
                                class: ['optext', 'maxselected'],
                                text: sels.length + ' ' + config.txtSelected
                            }));
                        } else {
                            sels.map(x => {
                                var c = newEl('span', {
                                    class: 'optext',
                                    text: x.text,
                                    srcOption: x
                                });
                                if ((el.attributes['multiselect-hide-x']?.value !== 'true'))
                                    c.appendChild(newEl('span', {
                                        class: 'optdel',
                                        text: '🗙',
                                        title: config.txtRemove,
                                        onclick: (ev) => {
                                            c.srcOption.listitemEl.dispatchEvent(
                                                new Event('click'));
                                            div.refresh();
                                            ev.stopPropagation();
                                        }
                                    }));

                                div.appendChild(c);
                            });
                        }
                        if (0 == el.selectedOptions.length) div.appendChild(newEl('span', {
                            class: 'placeholder',
                            text: el.attributes['placeholder']?.value ?? config.placeholder
                        }));
                    };
                    div.refresh();
                }
                el.loadOptions();

                search.addEventListener('input', () => {
                    list.querySelectorAll(":scope div:not(.multiselect-dropdown-all-selector)").forEach(
                        d => {
                            var txt = d.querySelector("label").innerText.toUpperCase();
                            d.style.display = txt.includes(search.value.toUpperCase()) ? 'block' :
                                'none';
                        });
                });

                div.addEventListener('click', () => {
                    div.listEl.style.display = 'block';
                    search.focus();
                    search.select();
                });

                document.addEventListener('click', function(event) {
                    if (!div.contains(event.target)) {
                        listWrap.style.display = 'none';
                        div.refresh();
                    }
                });
            });
        }

        window.addEventListener('load', () => {
            MultiselectDropdown(window.MultiselectDropdownOptions);
        });
    </script>
@endpush
