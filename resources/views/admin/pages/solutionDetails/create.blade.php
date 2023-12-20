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
                                    href="#general-info" aria-selected="true" role="tab">General Information</a>
                            </li>
                            <li class="nav-item w-md-290px my-1" role="presentation">
                                <a class="nav-link p-5 rounded-0 tab-trigger" data-bs-toggle="tab" href="#row-one"
                                    aria-selected="false" role="tab">Row One</a>
                            </li>
                            <li class="nav-item w-md-290px my-1" role="presentation">
                                <a class="nav-link p-5 rounded-0 tab-trigger" data-bs-toggle="tab" href="#row-two"
                                    aria-selected="false" role="tab" tabindex="-1">Row Two</a>
                            </li>
                            <li class="nav-item w-md-290px my-1" role="presentation">
                                <a class="nav-link p-5 rounded-0 tab-trigger" data-bs-toggle="tab" href="#row-three"
                                    aria-selected="false" role="tab" tabindex="-1">Row Three</a>
                            </li>
                            <li class="nav-item w-md-290px my-1" role="presentation">
                                <a class="nav-link p-5 rounded-0 tab-trigger" data-bs-toggle="tab" href="#row-four"
                                    aria-selected="false" role="tab" tabindex="-1">Row Four</a>
                            </li>
                            <li class="nav-item w-md-290px my-1" role="presentation">
                                <a class="nav-link p-5 rounded-0 tab-trigger" data-bs-toggle="tab" href="#row-five"
                                    aria-selected="false" role="tab" tabindex="-1">Row Five</a>
                            </li>
                        </ul>
                    </div>
                    <div class="col-lg-10 px-4 p-2">
                        <form id="productForm" method="post" action="" enctype="multipart/form-data">
                            @csrf
                            <div class="tab-content" id="myTabContent">
                                <div class="tab-pane fade active show" id="general-info" role="tabpanel">
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
                                                <div class="col-lg-6">
                                                    <div class="fv-row mb-3">
                                                        <label class="form-label">Industry Name</label>
                                                        <select class="form-select form-select-solid" name="industry_id"
                                                            id="field2" multiple multiselect-search="true"
                                                            multiselect-select-all="true" multiselect-max-items="3"
                                                            onchange="console.log(this.selectedOptions)">
                                                            <option value="0">Abarth</option>
                                                            <option value="0">Alfa Romeo</option>
                                                            <option value="0">Aston Martin</option>
                                                        </select>
                                                        <div class="invalid-feedback"> Please Enter Product Name.</div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-6">
                                                    <div class="fv-row mb-3">
                                                        <label class="form-label">Brand Name</label>
                                                        <select class="form-select form-select-solid" name="brand_id"
                                                            id="field2" multiple multiselect-search="true"
                                                            multiselect-select-all="true" multiselect-max-items="3"
                                                            onchange="console.log(this.selectedOptions)">
                                                            <option value="0">Abarth</option>
                                                            <option value="0">Alfa Romeo</option>
                                                            <option value="0">Aston Martin</option>
                                                        </select>
                                                        <div class="invalid-feedback"> Please Enter Product Name.</div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-4">
                                                    <div class="fv-row mb-3">
                                                        <label class="form-label">Banner Image</label>
                                                        <input type="file"
                                                            class="form-control form-control-solid form-control-sm"
                                                            name="banner_image" id="validationCustom01"
                                                            placeholder="Enter Banner Image">
                                                        <div class="invalid-feedback"> Please Enter Banner Image</div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-4">
                                                    <div class="fv-row mb-3">
                                                        <label class="form-label">Thumbnail Image</label>
                                                        <input type="file"
                                                            class="form-control form-control-solid form-control-sm"
                                                            name="thumbnail_image" id="validationCustom01"
                                                            placeholder="Enter Thumbnail Image">
                                                        <div class="invalid-feedback"> Please Enter Thumbnail Image
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-4">
                                                    <div class="fv-row mb-3">
                                                        <label class="form-label">Name</label>
                                                        <input type="text"
                                                            class="form-control form-control-solid form-control-sm"
                                                            name="thumbnail_image" id="validationCustom01"
                                                            placeholder="Enter Name">
                                                        <div class="invalid-feedback"> Please Enter Name
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-12">
                                                    <div class="fv-row mb-3">
                                                        <label class="form-label">Header</label>
                                                        <textarea rows="1" name="header"
                                                            class="form-control form-control-sm form-control-solid"
                                                            placeholder="Enter Header"></textarea>
                                                        <div class="invalid-feedback"> Please Enter Header</div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row mt-2 justify-content-end">
                                                <div class="d-flex align-items-center justify-content-end">
                                                    <a class="btn btn-lg btn-info rounded-0 tab-trigger-next"
                                                        data-bs-toggle="tab" data-bs-target="#row-one"
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
                                <div class="tab-pane fade" id="row-one" role="tabpanel">
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
                                                        <div class="fv-row mb-3">
                                                            <label class="form-label">Header</label>
                                                            <textarea rows="1" name="header"
                                                                class="form-control form-control-sm form-control-solid"
                                                                placeholder="Enter Header"></textarea>
                                                            <div class="invalid-feedback"> Please Enter Header</div>
                                                        </div>
                                                        <div class="invalid-feedback"> Please Enter Row One Title</div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-6">
                                                    <div class="fv-row mb-3">
                                                        <label class="form-label">Row One Badge</label>
                                                        <input type="text"
                                                            class="form-control form-control-solid form-control-sm"
                                                            name="row_one_badge" id="validationCustom01"
                                                            placeholder="Enter Row One Badge">
                                                        <div class="invalid-feedback"> Please Enter Row One Badge
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-4">
                                                    <div class="fv-row mb-3">
                                                        <label class="form-label">Row One Title</label>
                                                        <input type="text"
                                                            class="form-control form-control-solid form-control-sm"
                                                            name="row_one_title" id="validationCustom01"
                                                            placeholder="Enter Row One Title">
                                                        <div class="invalid-feedback"> Please Enter Row One Title</div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-4">
                                                    <div class="fv-row mb-3">
                                                        <label class="form-label">Row One List Title</label>
                                                        <input type="text"
                                                            class="form-control form-control-solid form-control-sm"
                                                            name="row_one_list_title" id="validationCustom01"
                                                            placeholder="Enter Row One List Title">
                                                        <div class="invalid-feedback"> Please Enter Row One List Title
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-4">
                                                    <div class="fv-row mb-3">
                                                        <label class="form-label">Row One List One</label>
                                                        <input type="text"
                                                            class="form-control form-control-solid form-control-sm"
                                                            name="row_one_list_one" id="validationCustom01"
                                                            placeholder="Enter Row One List Title">
                                                        <div class="invalid-feedback"> Please Enter Row One List Title
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-4">
                                                    <div class="fv-row mb-3">
                                                        <label class="form-label">Row One List Two</label>
                                                        <input type="text"
                                                            class="form-control form-control-solid form-control-sm"
                                                            name="row_one_list_two" id="validationCustom01"
                                                            placeholder="Enter Row One List Title">
                                                        <div class="invalid-feedback"> Please Enter Row One List Title
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-4">
                                                    <div class="fv-row mb-3">
                                                        <label class="form-label">Row One List Three</label>
                                                        <input type="text"
                                                            class="form-control form-control-solid form-control-sm"
                                                            name="row_one_list_three" id="validationCustom01"
                                                            placeholder="Enter Row One List Three">
                                                        <div class="invalid-feedback"> Please Enter Row One List Three
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-4">
                                                    <div class="fv-row mb-3">
                                                        <label class="form-label">Row One List Four</label>
                                                        <input type="text"
                                                            class="form-control form-control-solid form-control-sm"
                                                            name="row_one_list_four" id="validationCustom01"
                                                            placeholder="Enter Row One List Four">
                                                        <div class="invalid-feedback"> Please Enter Row One List Four
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row mt-5 justify-content-end">
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
                                                        data-bs-toggle="tab" data-bs-target="#row-two"
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
                                <div class="tab-pane fade" id="row-two" role="tabpanel">
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
                                                    <div class="fv-row mb-3">
                                                        <label class="form-label">Row Two Title</label>
                                                        <input type="text"
                                                            class="form-control form-control-solid form-control-sm"
                                                            name="row_two_title" id="validationCustom01"
                                                            placeholder="Enter Row Two Title">
                                                        <div class="invalid-feedback"> Please Enter Row Two Title
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-6">
                                                    <div class="fv-row mb-3">
                                                        <label class="form-label">Row Two Header</label>
                                                        <input type="text"
                                                            class="form-control form-control-solid form-control-sm"
                                                            name="row_two_header" id="validationCustom01"
                                                            placeholder="Enter Row Two Header">
                                                        <div class="invalid-feedback"> Please Enter Row Two Header
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row mt-4 pt-4">
                                                <div class="col-lg-6">
                                                    <div class="row border p-4 m-1">
                                                        <p class="badge badge-info custom-badge"
                                                            style="margin-top: -15px; width: 13%">Column One</span>
                                                        <div class="col-lg-12 col-sm-12">
                                                            <div class="row">
                                                                <div class="col-md-6 mb-2">
                                                                    <label for="validationCustom01"
                                                                        class="form-label">Solution Card One
                                                                        Badge</label>
                                                                    <input type="text"
                                                                        class="form-control form-control-solid form-control-sm"
                                                                        name="solutionCardOneId_badge"
                                                                        id="validationCustom01"
                                                                        placeholder="Enter Solution Card One Badge">
                                                                    <div class="invalid-feedback"> Please Enter Solution
                                                                        Card One Badge
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-6 mb-2">
                                                                    <label for="validationCustom01"
                                                                        class="form-label">Solution Card Image
                                                                        One</label>
                                                                    <input type="file"
                                                                        class="form-control form-control-solid form-control-sm"
                                                                        name="solution_card_image_one"
                                                                        id="validationCustom01"
                                                                        placeholder="Enter Solution Card Image One">
                                                                    <div class="invalid-feedback"> Please Enter Solution
                                                                        Card Image One
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-6 mb-2">
                                                                    <label for="validationCustom01"
                                                                        class="form-label">Solution Card One Title
                                                                    </label>
                                                                    <input type="text"
                                                                        class="form-control form-control-solid form-control-sm"
                                                                        name="solutionCardOneId_title"
                                                                        id="validationCustom01"
                                                                        placeholder="Enter Solution Card One Title">
                                                                    <div class="invalid-feedback"> Please Enter Solution
                                                                        Card One Title
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-6 mb-2">
                                                                    <label for="validationCustom01"
                                                                        class="form-label">Solution Card One Short
                                                                        Description
                                                                    </label>
                                                                    <input type="text"
                                                                        class="form-control form-control-solid form-control-sm"
                                                                        name="solutionCardOneId_short_des"
                                                                        id="validationCustom01"
                                                                        placeholder="Enter Solution Card One Short Description">
                                                                    <div class="invalid-feedback"> Please Enter Solution
                                                                        Card One Short Description
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-6 mb-2">
                                                                    <label for="validationCustom01"
                                                                        class="form-label">Solution Card One Link
                                                                    </label>
                                                                    <input type="url"
                                                                        class="form-control form-control-solid form-control-sm"
                                                                        name="solutionCardOneId_link"
                                                                        id="validationCustom01"
                                                                        placeholder="Enter Solution Card One Link">
                                                                    <div class="invalid-feedback"> Please Enter Solution
                                                                        Card One Link
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-6 mb-2">
                                                                    <label for="validationCustom01"
                                                                        class="form-label">Solution Card One Button Name
                                                                    </label>
                                                                    <input type="text"
                                                                        class="form-control form-control-solid form-control-sm"
                                                                        name="solutionCardOneId_button_name"
                                                                        id="validationCustom01"
                                                                        placeholder="Enter Solution Card One Button Name">
                                                                    <div class="invalid-feedback"> Please Enter Solution
                                                                        Card One Button Name
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-6">
                                                    <div class="row border p-4 m-1">
                                                        <p class="badge badge-info custom-badge"
                                                            style="margin-top: -15px; width: 13%">Column Two</span>
                                                        <div class="col-lg-12 col-sm-12">
                                                            <div class="row">
                                                                <div class="col-md-6 mb-2">
                                                                    <label for="validationCustom01"
                                                                        class="form-label">Solution Card Two
                                                                        Badge</label>
                                                                    <input type="text"
                                                                        class="form-control form-control-solid form-control-sm"
                                                                        name="solutionCardTwoId_badge"
                                                                        id="validationCustom01"
                                                                        placeholder="Enter Solution Card Two Badge">
                                                                    <div class="invalid-feedback"> Please Enter Solution
                                                                        Card Two Badge
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-6 mb-2">
                                                                    <label for="validationCustom01"
                                                                        class="form-label">Solution Card Image
                                                                        Two</label>
                                                                    <input type="file"
                                                                        class="form-control form-control-solid form-control-sm"
                                                                        name="solution_card_image_Two"
                                                                        id="validationCustom01"
                                                                        placeholder="Enter Solution Card Image Two">
                                                                    <div class="invalid-feedback"> Please Enter Solution
                                                                        Card Image Two
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-6 mb-2">
                                                                    <label for="validationCustom01"
                                                                        class="form-label">Solution Card Two Title
                                                                    </label>
                                                                    <input type="text"
                                                                        class="form-control form-control-solid form-control-sm"
                                                                        name="solutionCardTwoId_title"
                                                                        id="validationCustom01"
                                                                        placeholder="Enter Solution Card Two Title">
                                                                    <div class="invalid-feedback"> Please Enter Solution
                                                                        Card Two Title
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-6 mb-2">
                                                                    <label for="validationCustom01"
                                                                        class="form-label">Solution Card Two Short
                                                                        Description
                                                                    </label>
                                                                    <input type="text"
                                                                        class="form-control form-control-solid form-control-sm"
                                                                        name="solutionCardTwoId_short_des"
                                                                        id="validationCustom01"
                                                                        placeholder="Enter Solution Card Two Short Description">
                                                                    <div class="invalid-feedback"> Please Enter Solution
                                                                        Card Two Short Description
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-6 mb-2">
                                                                    <label for="validationCustom01"
                                                                        class="form-label">Solution Card Two Link
                                                                    </label>
                                                                    <input type="url"
                                                                        class="form-control form-control-solid form-control-sm"
                                                                        name="solutionCardTwoId_link"
                                                                        id="validationCustom01"
                                                                        placeholder="Enter Solution Card Two Link">
                                                                    <div class="invalid-feedback"> Please Enter Solution
                                                                        Card Two Link
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-6 mb-2">
                                                                    <label for="validationCustom01"
                                                                        class="form-label">Solution Card Two Button Name
                                                                    </label>
                                                                    <input type="text"
                                                                        class="form-control form-control-solid form-control-sm"
                                                                        name="solutionCardTwoId_button_name"
                                                                        id="validationCustom01"
                                                                        placeholder="Enter Solution Card Two Button Name">
                                                                    <div class="invalid-feedback"> Please Enter Solution
                                                                        Card Two Button Name
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row mt-4 pt-4">
                                                <div class="col-lg-6">
                                                    <div class="row border p-4 m-1">
                                                        <p class="badge badge-info custom-badge"
                                                            style="margin-top: -15px; width: 15%">Column Three</span>
                                                        <div class="col-lg-12 col-sm-12">
                                                            <div class="row">
                                                                <div class="col-md-6 mb-2">
                                                                    <label for="validationCustom01"
                                                                        class="form-label">Solution Card Three
                                                                        Badge</label>
                                                                    <input type="text"
                                                                        class="form-control form-control-solid form-control-sm"
                                                                        name="solutionCardThreeId_badge"
                                                                        id="validationCustom01"
                                                                        placeholder="Enter Solution Card Three Badge">
                                                                    <div class="invalid-feedback"> Please Enter Solution
                                                                        Card Three Badge
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-6 mb-2">
                                                                    <label for="validationCustom01"
                                                                        class="form-label">Solution Card Image
                                                                        Three</label>
                                                                    <input type="file"
                                                                        class="form-control form-control-solid form-control-sm"
                                                                        name="solution_card_image_three"
                                                                        id="validationCustom01"
                                                                        placeholder="Enter Solution Card Image Three">
                                                                    <div class="invalid-feedback"> Please Enter Solution
                                                                        Card Image Three
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-6 mb-2">
                                                                    <label for="validationCustom01"
                                                                        class="form-label">Solution Card Three Title
                                                                    </label>
                                                                    <input type="text"
                                                                        class="form-control form-control-solid form-control-sm"
                                                                        name="solutionCardThreeId_title"
                                                                        id="validationCustom01"
                                                                        placeholder="Enter Solution Card Three Title">
                                                                    <div class="invalid-feedback"> Please Enter Solution
                                                                        Card Three Title
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-6 mb-2">
                                                                    <label for="validationCustom01"
                                                                        class="form-label">Solution Card Three Short
                                                                        Description
                                                                    </label>
                                                                    <input type="text"
                                                                        class="form-control form-control-solid form-control-sm"
                                                                        name="solutionCardThreeId_short_des"
                                                                        id="validationCustom01"
                                                                        placeholder="Enter Solution Card Three Short Description">
                                                                    <div class="invalid-feedback"> Please Enter Solution
                                                                        Card Three Short Description
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-6 mb-2">
                                                                    <label for="validationCustom01"
                                                                        class="form-label">Solution Card Three Link
                                                                    </label>
                                                                    <input type="url"
                                                                        class="form-control form-control-solid form-control-sm"
                                                                        name="solutionCardThreeId_link"
                                                                        id="validationCustom01"
                                                                        placeholder="Enter Solution Card Three Link">
                                                                    <div class="invalid-feedback"> Please Enter Solution
                                                                        Card Three Link
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-6 mb-2">
                                                                    <label for="validationCustom01"
                                                                        class="form-label">Solution Card Three Button
                                                                        Name
                                                                    </label>
                                                                    <input type="text"
                                                                        class="form-control form-control-solid form-control-sm"
                                                                        name="solutionCardThreeId_button_name"
                                                                        id="validationCustom01"
                                                                        placeholder="Enter Solution Card Three Button Name">
                                                                    <div class="invalid-feedback"> Please Enter Solution
                                                                        Card Three Button Name
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-6">
                                                    <div class="row border p-4 m-1">
                                                        <p class="badge badge-info custom-badge"
                                                            style="margin-top: -15px; width: 13%">Column Four</span>
                                                        <div class="col-lg-12 col-sm-12">
                                                            <div class="row">
                                                                <div class="col-md-6 mb-2">
                                                                    <label for="validationCustom01"
                                                                        class="form-label">Solution Card Four
                                                                        Badge</label>
                                                                    <input type="text"
                                                                        class="form-control form-control-solid form-control-sm"
                                                                        name="solutionCardFourId_badge"
                                                                        id="validationCustom01"
                                                                        placeholder="Enter Solution Card Four Badge">
                                                                    <div class="invalid-feedback"> Please Enter Solution
                                                                        Card Four Badge
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-6 mb-2">
                                                                    <label for="validationCustom01"
                                                                        class="form-label">Solution Card Image
                                                                        Four</label>
                                                                    <input type="file"
                                                                        class="form-control form-control-solid form-control-sm"
                                                                        name="solution_card_image_four"
                                                                        id="validationCustom01"
                                                                        placeholder="Enter Solution Card Image Four">
                                                                    <div class="invalid-feedback"> Please Enter Solution
                                                                        Card Image Four
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-6 mb-2">
                                                                    <label for="validationCustom01"
                                                                        class="form-label">Solution Card Four Title
                                                                    </label>
                                                                    <input type="text"
                                                                        class="form-control form-control-solid form-control-sm"
                                                                        name="solutionCardFourId_title"
                                                                        id="validationCustom01"
                                                                        placeholder="Enter Solution Card Four Title">
                                                                    <div class="invalid-feedback"> Please Enter Solution
                                                                        Card Four Title
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-6 mb-2">
                                                                    <label for="validationCustom01"
                                                                        class="form-label">Solution Card Four Short
                                                                        Description
                                                                    </label>
                                                                    <input type="text"
                                                                        class="form-control form-control-solid form-control-sm"
                                                                        name="solutionCardFourId_short_des"
                                                                        id="validationCustom01"
                                                                        placeholder="Enter Solution Card Four Short Description">
                                                                    <div class="invalid-feedback"> Please Enter Solution
                                                                        Card Four Short Description
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-6 mb-2">
                                                                    <label for="validationCustom01"
                                                                        class="form-label">Solution Card Four Link
                                                                    </label>
                                                                    <input type="url"
                                                                        class="form-control form-control-solid form-control-sm"
                                                                        name="solutionCardFourId_link"
                                                                        id="validationCustom01"
                                                                        placeholder="Enter Solution Card Four Link">
                                                                    <div class="invalid-feedback"> Please Enter Solution
                                                                        Card Four Link
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-6 mb-2">
                                                                    <label for="validationCustom01"
                                                                        class="form-label">Solution Card Four Button
                                                                        Name
                                                                    </label>
                                                                    <input type="text"
                                                                        class="form-control form-control-solid form-control-sm"
                                                                        name="solutionCardFourId_button_name"
                                                                        id="validationCustom01"
                                                                        placeholder="Enter Solution Card Four Button Name">
                                                                    <div class="invalid-feedback"> Please Enter Solution
                                                                        Card Four Button Name
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-12">
                                                    <div class="row border p-4 m-1 mt-4">
                                                        <p class="badge badge-info custom-badge"
                                                            style="margin-top: -15px; width: 13%">Column Five</span>
                                                        <div class="col-lg-12 col-sm-12">
                                                            <div class="row">
                                                                <div class="col-md-6 mb-2">
                                                                    <label for="validationCustom01"
                                                                        class="form-label">Solution Card Five
                                                                        Badge</label>
                                                                    <input type="text"
                                                                        class="form-control form-control-solid form-control-sm"
                                                                        name="solutionCardFiveId_badge"
                                                                        id="validationCustom01"
                                                                        placeholder="Enter Solution Card Five Badge">
                                                                    <div class="invalid-feedback"> Please Enter Solution
                                                                        Card Five Badge
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-6 mb-2">
                                                                    <label for="validationCustom01"
                                                                        class="form-label">Solution Card Image
                                                                        Five</label>
                                                                    <input type="file"
                                                                        class="form-control form-control-solid form-control-sm"
                                                                        name="solution_card_image_Five"
                                                                        id="validationCustom01"
                                                                        placeholder="Enter Solution Card Image Five">
                                                                    <div class="invalid-feedback"> Please Enter Solution
                                                                        Card Image Five
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-6 mb-2">
                                                                    <label for="validationCustom01"
                                                                        class="form-label">Solution Card Five Title
                                                                    </label>
                                                                    <input type="text"
                                                                        class="form-control form-control-solid form-control-sm"
                                                                        name="solutionCardFiveId_title"
                                                                        id="validationCustom01"
                                                                        placeholder="Enter Solution Card Five Title">
                                                                    <div class="invalid-feedback"> Please Enter Solution
                                                                        Card Five Title
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-6 mb-2">
                                                                    <label for="validationCustom01"
                                                                        class="form-label">Solution Card Five Short
                                                                        Description
                                                                    </label>
                                                                    <input type="text"
                                                                        class="form-control form-control-solid form-control-sm"
                                                                        name="solutionCardFiveId_short_des"
                                                                        id="validationCustom01"
                                                                        placeholder="Enter Solution Card Five Short Description">
                                                                    <div class="invalid-feedback"> Please Enter Solution
                                                                        Card Five Short Description
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-6 mb-2">
                                                                    <label for="validationCustom01"
                                                                        class="form-label">Solution Card Five Link
                                                                    </label>
                                                                    <input type="url"
                                                                        class="form-control form-control-solid form-control-sm"
                                                                        name="solutionCardFiveId_link"
                                                                        id="validationCustom01"
                                                                        placeholder="Enter Solution Card Five Link">
                                                                    <div class="invalid-feedback"> Please Enter Solution
                                                                        Card Five Link
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-6 mb-2">
                                                                    <label for="validationCustom01"
                                                                        class="form-label">Solution Card Five Button
                                                                        Name
                                                                    </label>
                                                                    <input type="text"
                                                                        class="form-control form-control-solid form-control-sm"
                                                                        name="solutionCardFiveId_button_name"
                                                                        id="validationCustom01"
                                                                        placeholder="Enter Solution Card Five Button Name">
                                                                    <div class="invalid-feedback"> Please Enter Solution
                                                                        Card Five Button Name
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row mt-2 justify-content-end">
                                                <div class="d-flex align-items-center justify-content-between">
                                                    <a class="btn btn-lg btn-info rounded-0 tab-trigger-previous"
                                                        data-bs-target="#row-one" aria-selected="false" role="tab"
                                                        tabindex="-1">
                                                        Previous
                                                        <span class="svg-icon svg-icon-4 ms-1 me-0">
                                                            <i class="fa-solid fa-arrow-right"></i>
                                                        </span>
                                                    </a>
                                                    <a class="btn btn-lg btn-info rounded-0 tab-trigger-next"
                                                        data-bs-toggle="tab" data-bs-target="#row-three"
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
                                <div class="tab-pane fade" id="row-three" role="tabpanel">
                                    <div class="w-100">
                                        <div class="pb-10 pb-lg-10">
                                            <h2
                                                class="fw-bolder d-flex justify-content-center align-items-center text-dark">
                                                Row Three
                                            </h2>
                                        </div>
                                        <div class="fv-row">
                                            <div class="row">
                                                <div class="col-md-6 mb-2">
                                                    <label for="validationCustom01" class="form-label">Row Three
                                                        Title</label>
                                                    <input type="text"
                                                        class="form-control form-control-solid form-control-sm"
                                                        name="row_three_title" id="validationCustom01"
                                                        placeholder="Enter Row Three Title">
                                                    <div class="invalid-feedback"> Please Enter Row Three Title
                                                    </div>
                                                </div>
                                                <div class="col-md-6 mb-2">
                                                    <label for="validationCustom01" class="form-label">Row Three
                                                        Header</label>
                                                    <input type="text"
                                                        class="form-control form-control-solid form-control-sm"
                                                        name="row_three_header" id="validationCustom01"
                                                        placeholder="Enter Row Three Header">
                                                    <div class="invalid-feedback"> Please Enter Row Three Header </div>
                                                </div>
                                            </div>
                                            <div class="row mt-2 justify-content-end">
                                                <div class="d-flex align-items-center justify-content-between">
                                                    <a class="btn btn-lg btn-info rounded-0 tab-trigger-previous"
                                                        data-bs-target="#row-two" aria-selected="false" role="tab"
                                                        tabindex="-1">
                                                        Previous
                                                        <span class="svg-icon svg-icon-4 ms-1 me-0">
                                                            <i class="fa-solid fa-arrow-right"></i>
                                                        </span>
                                                    </a>
                                                    <a class="btn btn-lg btn-info rounded-0 tab-trigger-next"
                                                        data-bs-toggle="tab" data-bs-target="#row-four"
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
                                <div class="tab-pane fade" id="row-four" role="tabpanel">
                                    <div class="w-100">
                                        <div class="pb-10 pb-lg-10">
                                            <h2
                                                class="fw-bolder d-flex justify-content-center align-items-center text-dark">
                                                Row Four
                                            </h2>
                                        </div>
                                        <div class="fv-row">
                                            <div class="row">
                                                <div class="col-lg-4">
                                                    <div class="fv-row mb-3">
                                                        <label class="form-label">Rows Image Four</label>
                                                        <input type="file"
                                                            class="form-control form-control-solid form-control-sm"
                                                            name="banner_image" id="validationCustom01"
                                                            placeholder="Enter Rows Image Four">
                                                        <div class="invalid-feedback"> Please Enter Rows Image Four
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-4">
                                                    <div class="fv-row mb-3">
                                                        <label class="form-label">Row Four Badge</label>
                                                        <input type="text"
                                                            class="form-control form-control-solid form-control-sm"
                                                            name="row_four_badge" id="validationCustom01"
                                                            placeholder="Enter Row Four Badge">
                                                        <div class="invalid-feedback"> Please Enter Row Four Badge
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-4">
                                                    <div class="fv-row mb-3">
                                                        <label class="form-label">Row Four Title</label>
                                                        <input type="text"
                                                            class="form-control form-control-solid form-control-sm"
                                                            name="row_four_title" id="validationCustom01"
                                                            placeholder="Enter Row Four Title">
                                                        <div class="invalid-feedback"> Please Enter Row Four Title
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-4">
                                                    <div class="fv-row mb-3">
                                                        <label class="form-label">Row Four Btn Name</label>
                                                        <input type="text"
                                                            class="form-control form-control-solid form-control-sm"
                                                            name="row_four_btn_name" id="validationCustom01"
                                                            placeholder="Enter Row Four Btn Name">
                                                        <div class="invalid-feedback"> Please Enter Row Four Btn Name
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-4">
                                                    <div class="fv-row mb-3">
                                                        <label class="form-label">Row Four Link</label>
                                                        <input type="text"
                                                            class="form-control form-control-solid form-control-sm"
                                                            name="row_four_link" id="validationCustom01"
                                                            placeholder="Enter Row Four Link">
                                                        <div class="invalid-feedback"> Please Enter Row Four Link
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-4">
                                                    <div class="fv-row mb-3">
                                                        <label class="form-label">Row Four Description</label>
                                                        <textarea rows="1" name="row_four_description"
                                                            class="form-control form-control-sm form-control-solid"
                                                            placeholder="Enter Row Four Description"></textarea>
                                                        <div class="invalid-feedback"> Please Enter Row Four Description
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row mt-2 justify-content-end">
                                                <div class="d-flex align-items-center justify-content-between">
                                                    <a class="btn btn-lg btn-info rounded-0 tab-trigger-previous"
                                                        data-bs-target="#row-three" aria-selected="false" role="tab"
                                                        tabindex="-1">
                                                        Previous
                                                        <span class="svg-icon svg-icon-4 ms-1 me-0">
                                                            <i class="fa-solid fa-arrow-right"></i>
                                                        </span>
                                                    </a>
                                                    <a class="btn btn-lg btn-info rounded-0 tab-trigger-next"
                                                        data-bs-toggle="tab" data-bs-target="#row-five"
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
                                <div class="tab-pane fade" id="row-five" role="tabpanel">
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
                                                        <label class="form-label">Row Five Title</label>
                                                        <input type="text"
                                                            class="form-control form-control-solid form-control-sm"
                                                            name="row_five_title" id="validationCustom01"
                                                            placeholder="Enter Row Five Title">
                                                        <div class="invalid-feedback"> Please Enter Row Five Title
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-6">
                                                    <div class="fv-row mb-3">
                                                        <label class="form-label">Row Five Header</label>
                                                        <input type="text"
                                                            class="form-control form-control-solid form-control-sm"
                                                            name="row_five_header" id="validationCustom01"
                                                            placeholder="Enter Row Five Header">
                                                        <div class="invalid-feedback"> Please Enter Row Five Header
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row mt-4 pt-4">
                                                <div class="col-lg-6">
                                                    <div class="row border p-4 m-1">
                                                        <p class="badge badge-info custom-badge"
                                                            style="margin-top: -15px; width: 13%">Column One</span>
                                                        <div class="col-lg-12 col-sm-12">
                                                            <div class="row">
                                                                <div class="col-md-6 mb-2">
                                                                    <label for="validationCustom01"
                                                                        class="form-label">Solution Card Six
                                                                        Badge</label>
                                                                    <input type="text"
                                                                        class="form-control form-control-solid form-control-sm"
                                                                        name="solutionCardSixId_badge"
                                                                        id="validationCustom01"
                                                                        placeholder="Enter Solution Card Six Badge">
                                                                    <div class="invalid-feedback"> Please Enter Solution
                                                                        Card Six Badge
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-6 mb-2">
                                                                    <label for="validationCustom01"
                                                                        class="form-label">Solution Card Six Title
                                                                    </label>
                                                                    <input type="text"
                                                                        class="form-control form-control-solid form-control-sm"
                                                                        name="solutionCardSixId_title"
                                                                        id="validationCustom01"
                                                                        placeholder="Enter Solution Card Six Title">
                                                                    <div class="invalid-feedback"> Please Enter Solution
                                                                        Card Six Title
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-6 mb-2">
                                                                    <label for="validationCustom01"
                                                                        class="form-label">Solution Card Image
                                                                        Six</label>
                                                                    <input type="file"
                                                                        class="form-control form-control-solid form-control-sm"
                                                                        name="solution_card_image_Six"
                                                                        id="validationCustom01"
                                                                        placeholder="Enter Solution Card Image Six">
                                                                    <div class="invalid-feedback"> Please Enter Solution
                                                                        Card Image Six
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-6 mb-2">
                                                                    <label for="validationCustom01"
                                                                        class="form-label">Solution Card Six Short
                                                                        Description
                                                                    </label>
                                                                    <input type="text"
                                                                        class="form-control form-control-solid form-control-sm"
                                                                        name="solutionCardSixId_short_des"
                                                                        id="validationCustom01"
                                                                        placeholder="Enter Solution Card Six Short Description">
                                                                    <div class="invalid-feedback"> Please Enter Solution
                                                                        Card Six Short Description
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-6 mb-2">
                                                                    <label for="validationCustom01"
                                                                        class="form-label">Solution Card Six Link
                                                                    </label>
                                                                    <input type="url"
                                                                        class="form-control form-control-solid form-control-sm"
                                                                        name="solutionCardSixId_link"
                                                                        id="validationCustom01"
                                                                        placeholder="Enter Solution Card Six Link">
                                                                    <div class="invalid-feedback"> Please Enter Solution
                                                                        Card Six Link
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-6 mb-2">
                                                                    <label for="validationCustom01"
                                                                        class="form-label">Solution Card Six Button Name
                                                                    </label>
                                                                    <input type="text"
                                                                        class="form-control form-control-solid form-control-sm"
                                                                        name="solutionCardSixId_button_name"
                                                                        id="validationCustom01"
                                                                        placeholder="Enter Solution Card Six Button Name">
                                                                    <div class="invalid-feedback"> Please Enter Solution
                                                                        Card Six Button Name
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-6">
                                                    <div class="row border p-4 m-1">
                                                        <p class="badge badge-info custom-badge"
                                                            style="margin-top: -15px; width: 13%">Column Two</span>
                                                        <div class="col-lg-12 col-sm-12">
                                                            <div class="row">
                                                                <div class="col-md-6 mb-2">
                                                                    <label for="validationCustom01"
                                                                        class="form-label">Solution Card Seven
                                                                        Badge</label>
                                                                    <input type="text"
                                                                        class="form-control form-control-solid form-control-sm"
                                                                        name="solutionCardSevenId_badge"
                                                                        id="validationCustom01"
                                                                        placeholder="Enter Solution Card Seven Badge">
                                                                    <div class="invalid-feedback"> Please Enter Solution
                                                                        Card Seven Badge
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-6 mb-2">
                                                                    <label for="validationCustom01"
                                                                        class="form-label">Solution Card Seven Title
                                                                    </label>
                                                                    <input type="text"
                                                                        class="form-control form-control-solid form-control-sm"
                                                                        name="solutionCardSevenId_title"
                                                                        id="validationCustom01"
                                                                        placeholder="Enter Solution Card Seven Title">
                                                                    <div class="invalid-feedback"> Please Enter Solution
                                                                        Card Seven Title
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-6 mb-2">
                                                                    <label for="validationCustom01"
                                                                        class="form-label">Solution Card Image
                                                                        Seven</label>
                                                                    <input type="file"
                                                                        class="form-control form-control-solid form-control-sm"
                                                                        name="solution_card_image_Seven"
                                                                        id="validationCustom01"
                                                                        placeholder="Enter Solution Card Image Seven">
                                                                    <div class="invalid-feedback"> Please Enter Solution
                                                                        Card Image Seven
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-6 mb-2">
                                                                    <label for="validationCustom01"
                                                                        class="form-label">Solution Card Seven Short
                                                                        Description
                                                                    </label>
                                                                    <input type="text"
                                                                        class="form-control form-control-solid form-control-sm"
                                                                        name="solutionCardSevenId_short_des"
                                                                        id="validationCustom01"
                                                                        placeholder="Enter Solution Card Seven Short Description">
                                                                    <div class="invalid-feedback"> Please Enter Solution
                                                                        Card Seven Short Description
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-6 mb-2">
                                                                    <label for="validationCustom01"
                                                                        class="form-label">Solution Card Seven Link
                                                                    </label>
                                                                    <input type="url"
                                                                        class="form-control form-control-solid form-control-sm"
                                                                        name="solutionCardSevenId_link"
                                                                        id="validationCustom01"
                                                                        placeholder="Enter Solution Card Seven Link">
                                                                    <div class="invalid-feedback"> Please Enter Solution
                                                                        Card Seven Link
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-6 mb-2">
                                                                    <label for="validationCustom01"
                                                                        class="form-label">Solution Card Seven Button Name
                                                                    </label>
                                                                    <input type="text"
                                                                        class="form-control form-control-solid form-control-sm"
                                                                        name="solutionCardSevenId_button_name"
                                                                        id="validationCustom01"
                                                                        placeholder="Enter Solution Card Seven Button Name">
                                                                    <div class="invalid-feedback"> Please Enter Solution
                                                                        Card Seven Button Name
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-12">
                                                    <div class="row border p-4 m-1 mt-4 pt-4">
                                                        <p class="badge badge-info custom-badge"
                                                            style="margin-top: -15px; width: 13%">Column Three</span>
                                                        <div class="col-lg-12 col-sm-12">
                                                            <div class="row">
                                                                <div class="col-md-6 mb-2">
                                                                    <label for="validationCustom01"
                                                                        class="form-label">Solution Card Eight
                                                                        Badge</label>
                                                                    <input type="text"
                                                                        class="form-control form-control-solid form-control-sm"
                                                                        name="solutionCardEightId_badge"
                                                                        id="validationCustom01"
                                                                        placeholder="Enter Solution Card Eight Badge">
                                                                    <div class="invalid-feedback"> Please Enter Solution
                                                                        Card Eight Badge
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-6 mb-2">
                                                                    <label for="validationCustom01"
                                                                        class="form-label">Solution Card Eight Title
                                                                    </label>
                                                                    <input type="text"
                                                                        class="form-control form-control-solid form-control-sm"
                                                                        name="solutionCardEightId_title"
                                                                        id="validationCustom01"
                                                                        placeholder="Enter Solution Card Eight Title">
                                                                    <div class="invalid-feedback"> Please Enter Solution
                                                                        Card Eight Title
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-6 mb-2">
                                                                    <label for="validationCustom01"
                                                                        class="form-label">Solution Card Image
                                                                        Eight</label>
                                                                    <input type="file"
                                                                        class="form-control form-control-solid form-control-sm"
                                                                        name="solution_card_image_Eight"
                                                                        id="validationCustom01"
                                                                        placeholder="Enter Solution Card Image Eight">
                                                                    <div class="invalid-feedback"> Please Enter Solution
                                                                        Card Image Eight
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-6 mb-2">
                                                                    <label for="validationCustom01"
                                                                        class="form-label">Solution Card Eight Short
                                                                        Description
                                                                    </label>
                                                                    <input type="text"
                                                                        class="form-control form-control-solid form-control-sm"
                                                                        name="solutionCardEightId_short_des"
                                                                        id="validationCustom01"
                                                                        placeholder="Enter Solution Card Eight Short Description">
                                                                    <div class="invalid-feedback"> Please Enter Solution
                                                                        Card Eight Short Description
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-6 mb-2">
                                                                    <label for="validationCustom01"
                                                                        class="form-label">Solution Card Eight Link
                                                                    </label>
                                                                    <input type="url"
                                                                        class="form-control form-control-solid form-control-sm"
                                                                        name="solutionCardEightId_link"
                                                                        id="validationCustom01"
                                                                        placeholder="Enter Solution Card Eight Link">
                                                                    <div class="invalid-feedback"> Please Enter Solution
                                                                        Card Eight Link
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-6 mb-2">
                                                                    <label for="validationCustom01"
                                                                        class="form-label">Solution Card Eight Button Name
                                                                    </label>
                                                                    <input type="text"
                                                                        class="form-control form-control-solid form-control-sm"
                                                                        name="solutionCardEightId_button_name"
                                                                        id="validationCustom01"
                                                                        placeholder="Enter Solution Card Eight Button Name">
                                                                    <div class="invalid-feedback"> Please Enter Solution
                                                                        Card Eight Button Name
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row mt-2 justify-content-end">
                                                <div class="d-flex align-items-center justify-content-between">
                                                    <a class="btn btn-lg btn-info rounded-0 tab-trigger-previous"
                                                        data-bs-target="#row-four" aria-selected="false" role="tab"
                                                        tabindex="-1">
                                                        Previous
                                                        <span class="svg-icon svg-icon-4 ms-1 me-0">
                                                            <i class="fa-solid fa-arrow-right"></i>
                                                        </span>
                                                    </a>
                                                    <a class="btn btn-lg btn-info rounded-0 tab-trigger-next"
                                                        type="submit">
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
@endpush