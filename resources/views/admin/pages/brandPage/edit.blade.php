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
                        <h4 class="text-white p-0 m-0 fw-bold">Brand Page Add</h4>
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
                            <form id="productForm" method="POST"
                                action="{{ route('admin.brand-page.update', $brandPage->id) }}"
                                enctype="multipart/form-data">
                                @csrf
                                @method('PUT')
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
                                                            <label class="form-label ">Select Brand</label>
                                                            <select class="form-select form-select-solid form-select-sm"
                                                                name="brand_id" data-control="select2"
                                                                data-hide-search="false" data-placeholder="Select a Brand"
                                                                data-allow-clear="true">
                                                                <option></option>
                                                                @foreach ($brands as $brand)
                                                                    <option @selected($brand->id == $brandPage->brand_id)
                                                                        value="{{ $brand->id }}">
                                                                        {{ $brand->name }}</option>
                                                                @endforeach
                                                            </select>
                                                            @error('brand_id')
                                                                <div class="invalid-feedback d-block">{{ $message }}</div>
                                                            @enderror
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-6">
                                                        <div class="fv-row mb-3">
                                                            <label class="form-label ">Brand Logo</label>
                                                            <input name="brand_logo"
                                                                class="form-control form-control-sm form-control-solid"
                                                                placeholder="Enter Brand Logo" type="file" />
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-6">
                                                        <div class="fv-row mb-3">
                                                            <label class="form-label ">Banner Image</label>
                                                            <input name="banner_image"
                                                                class="form-control form-control-sm form-control-solid"
                                                                placeholder="Enter Banner Image" type="file" />
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-6">
                                                        <div class="fv-row mb-3">
                                                            <label class="form-label ">Banner Header</label>
                                                            <textarea rows="1" name="header" class="form-control form-control-sm form-control-solid"
                                                                placeholder="Enter Banner Header">{{ $brandPage->header }}</textarea>
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
                                                            <label class="form-label ">Row One Title</label>
                                                            <input name="row_one_title"
                                                                value="{{ $brandPage->row_one_title }}"
                                                                class="form-control form-control-sm form-control-solid"
                                                                placeholder="Enter Row One Title" type="text" />
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-6">
                                                        <div class="fv-row mb-3">
                                                            <label class="form-label ">Row One Header</label>
                                                            <textarea rows="1" name="row_one_header" class="form-control form-control-sm form-control-solid"
                                                                placeholder="Enter Row One Header">{{ $brandPage->row_one_header }}</textarea>
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
                                                                            name="row_four_badge"
                                                                            value="{{ $brandPage->rowFour->badge }}"
                                                                            id="validationCustom01"
                                                                            placeholder="Enter Badge">
                                                                    </div>
                                                                    <div class="col-md-12 mb-2">
                                                                        <label for="validationCustom01"
                                                                            class="form-label required mb-0">Title
                                                                        </label>
                                                                        <input type="text"
                                                                            class="form-control form-control-solid form-control-sm"
                                                                            name="row_four_title"
                                                                            value="{{ $brandPage->rowFour->title }}"
                                                                            id="validationCustom01"
                                                                            placeholder="Enter Title">
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
                                                                            name="rows_image_four" id="validationCustom01"
                                                                            placeholder="Enter Row Image">
                                                                    </div>
                                                                    <div class="col-md-6 mb-2">
                                                                        <label for="validationCustom01"
                                                                            class="form-label mb-0">Button Name
                                                                        </label>
                                                                        <input type="text"
                                                                            class="form-control form-control-solid form-control-sm"
                                                                            name="row_four_btn_name"
                                                                            value="{{ $brandPage->rowFour->btn_name }}"
                                                                            id="validationCustom01"
                                                                            placeholder="Enter Button Name">
                                                                    </div>
                                                                    <div class="col-md-12 mb-2">
                                                                        <label for="validationCustom01"
                                                                            class="form-label mb-0">Link
                                                                        </label>
                                                                        <input type="text"
                                                                            class="form-control form-control-solid form-control-sm"
                                                                            name="row_four_link"
                                                                            value="{{ $brandPage->rowFour->link }}"
                                                                            id="validationCustom01"
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
                                                                        <textarea name="row_four_description" class="tox-target kt_docs_tinymce_plugins">
                                                                          {{ $brandPage->rowFour->description }}</textarea>
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
                                                                            name="row_five_badge"
                                                                            value="{{ $brandPage->rowFive->badge }}"
                                                                            id="validationCustom01"
                                                                            placeholder="Enter Badge">
                                                                    </div>
                                                                    <div class="col-md-12 mb-2">
                                                                        <label for="validationCustom01"
                                                                            class="form-label required mb-0">Title
                                                                        </label>
                                                                        <input type="text"
                                                                            class="form-control form-control-solid form-control-sm"
                                                                            name="row_five_title"
                                                                            value="{{ $brandPage->rowFive->title }}"
                                                                            id="validationCustom01"
                                                                            placeholder="Enter Title">
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
                                                                            name="rows_image_five" id="validationCustom01"
                                                                            placeholder="Enter Row Image">
                                                                    </div>
                                                                    <div class="col-md-6 mb-2">
                                                                        <label for="validationCustom01"
                                                                            class="form-label mb-0">Button Name
                                                                        </label>
                                                                        <input type="text"
                                                                            class="form-control form-control-solid form-control-sm"
                                                                            name="row_five_btn_name"
                                                                            value="{{ $brandPage->rowFive->btn_name }}"
                                                                            id="validationCustom01"
                                                                            placeholder="Enter Button Name">
                                                                    </div>
                                                                    <div class="col-md-12 mb-2">
                                                                        <label for="validationCustom01"
                                                                            class="form-label mb-0">Link
                                                                        </label>
                                                                        <input type="text"
                                                                            class="form-control form-control-solid form-control-sm"
                                                                            name="row_five_link"
                                                                            value="{{ $brandPage->rowFive->link }}"
                                                                            id="validationCustom01"
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
                                                                        <textarea name="row_five_description" class="tox-target kt_docs_tinymce_plugins">
                                                                           {{ $brandPage->rowFive->description }}
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
                                                                            class="form-label required mb-0">Badge
                                                                        </label>
                                                                        <input type="text"
                                                                            class="form-control form-control-solid form-control-sm"
                                                                            name="solutionCardOneId_badge"
                                                                            value="{{ $brandPage->solutionCardOne->badge }}"
                                                                            id="validationCustom01"
                                                                            placeholder="Enter a badge">
                                                                    </div>
                                                                    <div class="col-md-6 mb-2">
                                                                        <label for="validationCustom01"
                                                                            class="form-label required mb-0">Title
                                                                        </label>
                                                                        <input type="text"
                                                                            class="form-control form-control-solid form-control-sm"
                                                                            name="solutionCardOneId_title"
                                                                            value="{{ $brandPage->solutionCardOne->title }}"
                                                                            id="validationCustom01"
                                                                            placeholder="Enter Title">
                                                                    </div>
                                                                    <div class="col-md-6 mb-2">
                                                                        <label for="validationCustom01"
                                                                            class="form-label required mb-0">Image
                                                                        </label>
                                                                        <input type="file"
                                                                            class="form-control form-control-solid form-control-sm"
                                                                            name="solution_card_image_one"
                                                                            id="validationCustom01"
                                                                            placeholder="Enter Image">
                                                                        <div class="invalid-feedback"> Please Enter Image
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-6 mb-2">
                                                                        <label for="validationCustom01"
                                                                            class="form-label required mb-0">Button Name
                                                                        </label>
                                                                        <input type="text"
                                                                            class="form-control form-control-solid form-control-sm"
                                                                            name="solutionCardOneId_button_name"
                                                                            value="{{ $brandPage->solutionCardOne->button_name }}"
                                                                            id="validationCustom01"
                                                                            placeholder="Enter Button Name">
                                                                        <div class="invalid-feedback"> Please Enter Button
                                                                            Name </div>
                                                                    </div>
                                                                    <div class="col-md-6 mb-2">
                                                                        <label for="validationCustom01"
                                                                            class="form-label required mb-0">Link
                                                                        </label>
                                                                        <textarea rows="1" name="solutionCardOneId_link" class="form-control form-control-sm form-control-solid"
                                                                            placeholder="Enter Link">{{ $brandPage->solutionCardOne->link }}</textarea>
                                                                    </div>
                                                                    <div class="col-md-12 mb-2">
                                                                        <label for="validationCustom01"
                                                                            class="form-label required mb-0">Short
                                                                            Des</label>
                                                                        <textarea name="solutionCardOneId_short_des" class="tox-target kt_docs_tinymce_plugins">
                                                                           {{ $brandPage->solutionCardOne->short_des }}
                                                                         </textarea>
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
                                                                            class="form-label required mb-0">Badge
                                                                        </label>
                                                                        <input type="text"
                                                                            class="form-control form-control-solid form-control-sm"
                                                                            name="solutionCardTwoId_badge"
                                                                            value="{{ $brandPage->solutionCardTwo->badge }}"
                                                                            id="validationCustom01"
                                                                            placeholder="Enter a badge">
                                                                    </div>
                                                                    <div class="col-md-6 mb-2">
                                                                        <label for="validationCustom01"
                                                                            class="form-label required mb-0">Title
                                                                        </label>
                                                                        <input type="text"
                                                                            class="form-control form-control-solid form-control-sm"
                                                                            name="solutionCardTwoId_title"
                                                                            value="{{ $brandPage->solutionCardTwo->title }}"
                                                                            id="validationCustom01"
                                                                            placeholder="Enter Title">
                                                                    </div>
                                                                    <div class="col-md-6 mb-2">
                                                                        <label for="validationCustom01"
                                                                            class="form-label required mb-0">Image
                                                                        </label>
                                                                        <input type="file"
                                                                            class="form-control form-control-solid form-control-sm"
                                                                            name="solution_card_image_two"
                                                                            id="validationCustom01"
                                                                            placeholder="Enter Image">
                                                                    </div>
                                                                    <div class="col-md-6 mb-2">
                                                                        <label for="validationCustom01"
                                                                            class="form-label required mb-0">Button Name
                                                                        </label>
                                                                        <input type="text"
                                                                            class="form-control form-control-solid form-control-sm"
                                                                            name="solutionCardTwoId_short_des"
                                                                            value="{{ $brandPage->solutionCardTwo->short_des }}"
                                                                            id="validationCustom01"
                                                                            placeholder="Enter Button Name">
                                                                        <div class="invalid-feedback"> Please Enter Button
                                                                            Name </div>
                                                                    </div>
                                                                    <div class="col-md-6 mb-2">
                                                                        <label for="validationCustom01"
                                                                            class="form-label required mb-0">Link
                                                                        </label>
                                                                        <textarea rows="1" name="solutionCardTwoId_link" class="form-control form-control-sm form-control-solid"
                                                                            placeholder="Enter Link">{{ $brandPage->solutionCardTwo->link }}</textarea>
                                                                    </div>
                                                                    <div class="col-md-12 mb-2">
                                                                        <label for="validationCustom01"
                                                                            class="form-label required mb-0">Short
                                                                            Des</label>
                                                                        <textarea name="solutionCardTwoId_button_name" class="tox-target kt_docs_tinymce_plugins">
                                                               {{ $brandPage->solutionCardTwo->button_name }}
                                                                </textarea>
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
                                                                            class="form-label required mb-0">Badge
                                                                        </label>
                                                                        <input type="text"
                                                                            class="form-control form-control-solid form-control-sm"
                                                                            name="solutionCardTwoId_badge"
                                                                            value="{{ $brandPage->solutionCardThree->badge }}"
                                                                            id="validationCustom01"
                                                                            placeholder="Enter a badge">
                                                                    </div>
                                                                    <div class="col-md-6 mb-2">
                                                                        <label for="validationCustom01"
                                                                            class="form-label required mb-0">Title
                                                                        </label>
                                                                        <input type="text"
                                                                            class="form-control form-control-solid form-control-sm"
                                                                            name="solutionCardTwoId_title"
                                                                            value="{{ $brandPage->solutionCardThree->title }}"
                                                                            id="validationCustom01"
                                                                            placeholder="Enter Title">
                                                                    </div>
                                                                    <div class="col-md-6 mb-2">
                                                                        <label for="validationCustom01"
                                                                            class="form-label required mb-0">Image
                                                                        </label>
                                                                        <input type="file"
                                                                            class="form-control form-control-solid form-control-sm"
                                                                            name="solution_card_image_three"
                                                                            id="validationCustom01"
                                                                            placeholder="Enter Image">
                                                                    </div>
                                                                    <div class="col-md-6 mb-2">
                                                                        <label for="validationCustom01"
                                                                            class="form-label required mb-0">Button Name
                                                                        </label>
                                                                        <input type="text"
                                                                            class="form-control form-control-solid form-control-sm"
                                                                            name="solutionCardTwoId_short_des"
                                                                            value="{{ $brandPage->solutionCardThree->short_des }}"
                                                                            id="validationCustom01"
                                                                            placeholder="Enter Button Name">
                                                                    </div>
                                                                    <div class="col-md-6 mb-2">
                                                                        <label for="validationCustom01"
                                                                            class="form-label required mb-0">Link
                                                                        </label>
                                                                        <textarea rows="1" name="solutionCardTwoId_link" class="form-control form-control-sm form-control-solid"
                                                                            placeholder="Enter Link">{{ $brandPage->solutionCardThree->link }}</textarea>
                                                                    </div>
                                                                    <div class="col-md-12 mb-2">
                                                                        <label for="validationCustom01"
                                                                            class="form-label required mb-0">Short
                                                                            Des</label>
                                                                        <textarea name="solutionCardTwoId_button_name" class="tox-target kt_docs_tinymce_plugins">
                                                                           {{ $brandPage->solutionCardThree->button_name }}
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
                                                            name="row_six_image" value="{{ $brandPage->row_six_image }}"
                                                            id="validationCustom01"
                                                            placeholder="Enter Row Four Background Img">
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
                                                                            name="rowSevenId_badge"
                                                                            value="{{ $brandPage->rowSeven->badge }}"
                                                                            id="validationCustom01"
                                                                            placeholder="Enter Badge">
                                                                    </div>
                                                                    <div class="col-md-12 mb-2">
                                                                        <label for="validationCustom01"
                                                                            class="form-label required mb-0">Title
                                                                        </label>
                                                                        <input type="text"
                                                                            class="form-control form-control-solid form-control-sm"
                                                                            name="rowSevenId_title"
                                                                            value="{{ $brandPage->rowSeven->title }}"
                                                                            id="validationCustom01"
                                                                            placeholder="Enter Title">
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
                                                                            id="validationCustom01"
                                                                            placeholder="Enter Row Image">
                                                                    </div>
                                                                    <div class="col-md-6 mb-2">
                                                                        <label for="validationCustom01"
                                                                            class="form-label mb-0">Button Name
                                                                        </label>
                                                                        <input type="text"
                                                                            class="form-control form-control-solid form-control-sm"
                                                                            name="rowSevenId_btn_name"
                                                                            value="{{ $brandPage->rowSeven->btn_name }}"
                                                                            id="validationCustom01"
                                                                            placeholder="Enter Button Name">
                                                                    </div>
                                                                    <div class="col-md-12 mb-2">
                                                                        <label for="validationCustom01"
                                                                            class="form-label mb-0">Link
                                                                        </label>
                                                                        <input type="text"
                                                                            class="form-control form-control-solid form-control-sm"
                                                                            name="rowSevenId_link"
                                                                            value="{{ $brandPage->rowSeven->link }}"
                                                                            id="validationCustom01"
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
                                                                        <textarea name="rowSevenId_description" class="tox-target kt_docs_tinymce_plugins">
                                                                           {{ $brandPage->rowSeven->description }}
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
                                                                            name="rowEightId_badge"
                                                                            value="{{ $brandPage->rowSeven->badge }}"
                                                                            id="validationCustom01"
                                                                            placeholder="Enter Badge">
                                                                    </div>
                                                                    <div class="col-md-12 mb-2">
                                                                        <label for="validationCustom01"
                                                                            class="form-label required mb-0">Title
                                                                        </label>
                                                                        <input type="text"
                                                                            class="form-control form-control-solid form-control-sm"
                                                                            name="rowEightId_title"
                                                                            value="{{ $brandPage->rowSeven->title }}"
                                                                            id="validationCustom01"
                                                                            placeholder="Enter Title">
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
                                                                            name="rows_image_eight"
                                                                            id="validationCustom01"
                                                                            placeholder="Enter Row Image">
                                                                    </div>
                                                                    <div class="col-md-6 mb-2">
                                                                        <label for="validationCustom01"
                                                                            class="form-label mb-0">Button Name
                                                                        </label>
                                                                        <input type="text"
                                                                            class="form-control form-control-solid form-control-sm"
                                                                            name="rowEightId_btn_name"
                                                                            value="{{ $brandPage->rowSeven->btn_name }}"
                                                                            id="validationCustom01"
                                                                            placeholder="Enter Button Name">
                                                                    </div>
                                                                    <div class="col-md-12 mb-2">
                                                                        <label for="validationCustom01"
                                                                            class="form-label mb-0">Link
                                                                        </label>
                                                                        <input type="text"
                                                                            class="form-control form-control-solid form-control-sm"
                                                                            name="rowEightId_link"
                                                                            value="{{ $brandPage->rowSeven->link }}"
                                                                            id="validationCustom01"
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
                                                                        <textarea name="rowEightId_description" class="tox-target kt_docs_tinymce_plugins">
                                                                           {{ $brandPage->rowSeven->description }}
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
@endpush
