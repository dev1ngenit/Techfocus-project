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
                        <h4 class="text-white p-0 m-0 fw-bold">Industry Create Edit</h4>
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
                                    <a class="nav-link p-5 rounded-0 tab-trigger" data-bs-toggle="tab" href="#row-one"
                                        aria-selected="false" role="tab">Row One</a>
                                </li>
                                <li class="nav-item w-md-290px my-1" role="presentation">
                                    <a class="nav-link p-5 rounded-0 tab-trigger" data-bs-toggle="tab"
                                        href="#solution_row_one" aria-selected="false" role="tab"
                                        tabindex="-1">Solution Row
                                        One</a>
                                </li>
                                <li class="nav-item w-md-290px my-1" role="presentation">
                                    <a class="nav-link p-5 rounded-0 tab-trigger" data-bs-toggle="tab" href="#row_three"
                                        aria-selected="false" role="tab" tabindex="-1">Row Three</a>
                                </li>
                                <li class="nav-item w-md-290px my-1" role="presentation">
                                    <a class="nav-link p-5 rounded-0 tab-trigger" data-bs-toggle="tab" href="#row_four"
                                        aria-selected="false" role="tab" tabindex="-1">Row Four</a>
                                </li>
                                <li class="nav-item w-md-290px my-1" role="presentation">
                                    <a class="nav-link p-5 rounded-0 tab-trigger" data-bs-toggle="tab" href="#row_five"
                                        aria-selected="false" role="tab" tabindex="-1">Row Five</a>
                                </li>
                                <li class="nav-item w-md-290px my-1" role="presentation">
                                    <a class="nav-link p-5 rounded-0 tab-trigger" data-bs-toggle="tab" href="#row_six"
                                        aria-selected="false" role="tab" tabindex="-1">Row Six</a>
                                </li>
                            </ul>
                        </div>
                        <div class="col-lg-10 px-4 p-2">
                            <form id="productForm" method="POST"
                                action="{{ route('admin.industry.update', $industry->id) }}" enctype="multipart/form-data">
                                @csrf
                                @method('PUT')
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
                                                    <div class="col-md-3">
                                                        <label for="validationCustom04" class="form-label">Parent
                                                            name</label>
                                                        <select class="form-select form-select-sm form-select-solid"
                                                            name="parent_id" data-control="select2"
                                                            data-placeholder="Select an option" data-allow-clear="true">
                                                            <option></option>
                                                            @foreach ($industryParents as $industryParent)
                                                                <option @selected($industry->id == $industryParent->parent_id)
                                                                    value="{{ $industryParent->id }}">
                                                                    {{ $industryParent->name }}</option>
                                                            @endforeach
                                                        </select>
                                                    </div>
                                                    <div class="col-lg-9">
                                                        <div class="fv-row mb-3">
                                                            <label class="form-label">Name</label>
                                                            <input name="name" value="{{ $industry->name }}"
                                                                class="form-control form-control-sm form-control-solid"
                                                                placeholder="Enter Name" type="text" />
                                                            <div class="invalid-feedback"> Please Enter Name.</div>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-4">
                                                        <div class="fv-row mb-3">
                                                            <label class="form-label"> Image</label>
                                                            <input name="image"
                                                                class="form-control form-control-sm form-control-solid"
                                                                placeholder="Enter Image" type="file" />
                                                            <div class="invalid-feedback"> Please Enter Image.</div>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-4">
                                                        <div class="fv-row mb-3">
                                                            <label class="form-label">Logo</label>
                                                            <input name="logo"
                                                                class="form-control form-control-sm form-control-solid"
                                                                placeholder="Enter Name" type="file" />
                                                            <div class="invalid-feedback"> Please Enter logo.
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-4">
                                                        <div class="fv-row mb-3">
                                                            <label class="form-label">Banner Image</label>
                                                            <input name="banner_image"
                                                                class="form-control form-control-sm form-control-solid"
                                                                placeholder="Enter Banner Image" type="file" />
                                                            <div class="invalid-feedback"> Please Enter Banner Image.</div>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-4">
                                                        <div class="fv-row mb-3">
                                                            <label class="form-label">Header</label>
                                                            <input name="header" value="{{ $industry->header }}"
                                                                class="form-control form-control-sm form-control-solid"
                                                                placeholder="Enter Banner Image" type="text" />
                                                            <div class="invalid-feedback"> Please Enter Header.</div>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-8">
                                                        <div class="fv-row mb-3">
                                                            <label class="form-label">Description</label>
                                                            <textarea rows="1" name="description" class="form-control form-control-sm form-control-solid"
                                                                placeholder="Enter Description">{{ $industry->description }}</textarea>
                                                            <div class="invalid-feedback"> Please Enter Description.</div>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-12">
                                                        <div class="fv-row mb-3">
                                                            <label class="form-label">Website URL</label>
                                                            <textarea rows="1" name="website_url" class="form-control form-control-sm form-control-solid"
                                                                placeholder="Enter Website URL">{{ $industry->website_url }}</textarea>
                                                            <div class="invalid-feedback"> Please Enter Website URL.</div>
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
                                                    <div class="col-md-6 mb-2">
                                                        <label for="validationCustom01" class="form-label">Badge
                                                        </label>
                                                        <input type="text"
                                                            class="form-control form-control-solid form-control-sm"
                                                            name="row_one_badge" value="{{ $industry->rowOne->badge }}"
                                                            id="validationCustom01" placeholder="Enter Badge">
                                                        <div class="invalid-feedback"> Please Enter Badge
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6 mb-2">
                                                        <label for="validationCustom01" class="form-label ">Title
                                                        </label>
                                                        <input type="text"
                                                            class="form-control form-control-solid form-control-sm"
                                                            name="row_one_title" value="{{ $industry->rowOne->title }}"
                                                            id="validationCustom01" placeholder="Enter Title">
                                                        <div class="invalid-feedback"> Please Enter Title
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6 mb-2">
                                                        <label for="validationCustom01" class="form-label ">Rows
                                                            Image One
                                                        </label>
                                                        <input type="file"
                                                            class="form-control form-control-solid form-control-sm"
                                                            name="rows_image_one" id="validationCustom01"
                                                            placeholder="Enter Rows Image One">
                                                        <div class="invalid-feedback"> Please Enter Rows
                                                            Image One
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6 mb-2">
                                                        <label for="validationCustom01" class="form-label">Row One Button
                                                            Name
                                                        </label>
                                                        <input type="text"
                                                            class="form-control form-control-solid form-control-sm"
                                                            name="row_one_btn_name"
                                                            value="{{ $industry->rowOne->btn_name }}"
                                                            id="validationCustom01"
                                                            placeholder="Enter Row One Button Name">
                                                    </div>
                                                    <div class="col-md-6 mb-2">
                                                        <label for="validationCustom01" class="form-label">Row One Link
                                                        </label>
                                                        <input type="url"
                                                            class="form-control form-control-solid form-control-sm"
                                                            name="row_one_link" value="{{ $industry->rowOne->link }}"
                                                            id="validationCustom01" placeholder="Enter Row One Link">
                                                    </div>
                                                    <div class="col-md-6 mb-2">
                                                        <label for="validationCustom01" class="form-label">Row One
                                                            Description
                                                        </label>
                                                        <input type="text"
                                                            class="form-control form-control-solid form-control-sm"
                                                            name="row_one_description"
                                                            value="{{ $industry->rowOne->description }}"
                                                            id="validationCustom01"
                                                            placeholder="Enter Row One Description">
                                                    </div>
                                                </div>
                                                <div class="row mt-4 justify-content-end">
                                                    <div class="d-flex align-items-center justify-content-between">
                                                        <a class="btn btn-lg btn-info rounded-0 tab-trigger-previous"
                                                            data-bs-target="#general-info" aria-selected="false"
                                                            role="tab" tabindex="-1">
                                                            Previous
                                                            <span class="svg-icon svg-icon-4 ms-1 me-0">
                                                                <i class="fa-solid fa-arrow-right"></i>
                                                            </span>
                                                        </a>
                                                        <a class="btn btn-lg btn-info rounded-0 tab-trigger-next"
                                                            data-bs-toggle="tab" data-bs-target="#solution_row_one"
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
                                    <div class="tab-pane fade" id="solution_row_one" role="tabpanel">
                                        <div class="w-100">
                                            <div class="pb-10 pb-lg-10">
                                                <h2
                                                    class="fw-bolder d-flex justify-content-center align-items-center text-dark">
                                                    Solutiuon Row One
                                                </h2>
                                            </div>
                                            <div class="fv-row">
                                                <div class="row">
                                                    <div class="col-md-4 mb-2 ">
                                                        <label for="validationCustom04" class="form-label">Solution
                                                            One Name</label>
                                                        <select class="form-select form-select-sm form-select-solid"
                                                            name="solution_one_id" data-control="select2"
                                                            data-placeholder="Select an option" data-allow-clear="true">
                                                            <option></option>
                                                            @foreach ($solutionDetails as $solutionDetail)
                                                                <option @selected($solutionDetail->id == $solutionDetail->solution_one_id)
                                                                    value="{{ $solutionDetail->id }}">
                                                                    {{ $solutionDetail->name }}</option>
                                                            @endforeach
                                                        </select>
                                                    </div>
                                                    <div class="col-md-4 mb-2">
                                                        <label for="validationCustom04" class="form-label">Solution
                                                            Two Name</label>
                                                        <select class="form-select form-select-sm form-select-solid"
                                                            name="solution_two_id" data-control="select2"
                                                            data-placeholder="Select an option" data-allow-clear="true">
                                                            <option></option>
                                                            @foreach ($solutionDetails as $solutionDetail)
                                                                <option @selected($solutionDetail->id == $solutionDetail->solution_two_id)
                                                                    value="{{ $solutionDetail->id }}">
                                                                    {{ $solutionDetail->name }}</option>
                                                            @endforeach
                                                        </select>
                                                    </div>
                                                    <div class="col-md-4 mb-2">
                                                        <label for="validationCustom04" class="form-label">Solution
                                                            Three Name</label>
                                                        <select class="form-select form-select-sm form-select-solid"
                                                            name="solution_three_id" data-control="select2"
                                                            data-placeholder="Select an option" data-allow-clear="true">
                                                            <option></option>
                                                            @foreach ($solutionDetails as $solutionDetail)
                                                                <option @selected($solutionDetail->id == $solutionDetail->solution_three_id)
                                                                    value="{{ $solutionDetail->id }}">
                                                                    {{ $solutionDetail->name }}</option>
                                                            @endforeach
                                                        </select>
                                                    </div>
                                                    <div class="col-md-6 mb-2">
                                                        <label for="validationCustom04" class="form-label">Solution
                                                            Four Name</label>
                                                        <select class="form-select form-select-sm form-select-solid"
                                                            name="solution_four_id" data-control="select2"
                                                            data-placeholder="Select an option" data-allow-clear="true">
                                                            <option></option>
                                                            @foreach ($solutionDetails as $solutionDetail)
                                                                <option @selected($solutionDetail->id == $solutionDetail->solution_four_id)
                                                                    value="{{ $solutionDetail->id }}">
                                                                    {{ $solutionDetail->name }}</option>
                                                            @endforeach
                                                        </select>
                                                    </div>
                                                    <div class="col-md-6 mb-2">
                                                        <label for="validationCustom04" class="form-label">Client
                                                            Story Name</label>
                                                        <select class="form-select form-select-sm form-select-solid"
                                                            name="client_story_id" data-control="select2"
                                                            data-placeholder="Select an option" data-allow-clear="true">
                                                            <option></option>
                                                            @foreach ($newsTrends as $newsTrend)
                                                                <option @selected($newsTrend->id == $newsTrend->client_story_id)
                                                                    value="{{ $newsTrend->id }}">
                                                                    {{ $newsTrend->name }}</option>
                                                            @endforeach
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="row mt-4 justify-content-end">
                                                    <div class="d-flex align-items-center justify-content-between">
                                                        <a class="btn btn-lg btn-info rounded-0 tab-trigger-previous"
                                                            data-bs-target="#row-one" aria-selected="false"
                                                            role="tab" tabindex="-1">
                                                            Previous
                                                            <span class="svg-icon svg-icon-4 ms-1 me-0">
                                                                <i class="fa-solid fa-arrow-right"></i>
                                                            </span>
                                                        </a>
                                                        <a class="btn btn-lg btn-info rounded-0 tab-trigger-next"
                                                            data-bs-toggle="tab" data-bs-target="#row_three"
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
                                    <div class="tab-pane fade" id="row_three" role="tabpanel">
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
                                                        <label for="validationCustom01" class="form-label">Row Three Badge
                                                        </label>
                                                        <input type="text"
                                                            class="form-control form-control-solid form-control-sm"
                                                            name="row_three_badge"
                                                            value="{{ $industry->rowThree->badge }}"
                                                            id="validationCustom01" placeholder="Enter Row Three Badge">
                                                        <div class="invalid-feedback"> Please Enter Row
                                                            Three Badge
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6 mb-2">
                                                        <label for="validationCustom01" class="form-label mb-0">Row Three
                                                            Title
                                                        </label>
                                                        <input type="text"
                                                            class="form-control form-control-solid form-control-sm"
                                                            name="row_three_title"
                                                            value="{{ $industry->rowThree->title }}"
                                                            id="validationCustom01" placeholder="Enter Row Three Title">
                                                        <div class="invalid-feedback"> Please Enter Row
                                                            Three Title
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6 mb-2">
                                                        <label for="validationCustom01" class="form-label mb-0">Rows Image
                                                            Three
                                                        </label>
                                                        <input type="file"
                                                            class="form-control form-control-solid form-control-sm"
                                                            name="rows_image_three" id="validationCustom01"
                                                            placeholder="Enter Rows Image Three">
                                                        <div class="invalid-feedback"> Please Enter Rows
                                                            Image Three
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6 mb-2">
                                                        <label for="validationCustom01" class="form-label mb-0">Row Three
                                                            Btn
                                                            Name
                                                        </label>
                                                        <input type="text"
                                                            class="form-control form-control-solid form-control-sm"
                                                            name="row_three_btn_name"
                                                            value="{{ $industry->rowThree->btn_name }}"
                                                            id="validationCustom01"
                                                            placeholder="Enter Row Three Btn Name">
                                                        <div class="invalid-feedback"> Please Enter Row
                                                            Three Btn Name
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6 mb-2">
                                                        <label for="validationCustom01" class="form-label mb-0">Row Three
                                                            Link
                                                        </label>
                                                        <input type="url"
                                                            class="form-control form-control-solid form-control-sm"
                                                            name="row_three_link" value="{{ $industry->rowThree->link }}"
                                                            id="validationCustom01" placeholder="Enter Row Three Link">
                                                        <div class="invalid-feedback"> Please Enter Row
                                                            Three Link
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6 mb-2">
                                                        <label for="validationCustom01" class="form-label mb-0">Row Three
                                                            Description
                                                        </label>
                                                        <textarea rows="1" name="row_three_description" class="form-control form-control-sm form-control-solid"
                                                            placeholder="Enter Row Three Description">{{ $industry->rowThree->description }}</textarea>
                                                        <div class="invalid-feedback"> Please Enter Row
                                                            Three Description
                                                        </div>
                                                    </div>

                                                </div>
                                                <div class="row mt-4 justify-content-end">
                                                    <div class="d-flex align-items-center justify-content-between">
                                                        <a class="btn btn-lg btn-info rounded-0 tab-trigger-previous"
                                                            data-bs-target="#solution_row_one" aria-selected="false"
                                                            role="tab" tabindex="-1">
                                                            Previous
                                                            <span class="svg-icon svg-icon-4 ms-1 me-0">
                                                                <i class="fa-solid fa-arrow-right"></i>
                                                            </span>
                                                        </a>
                                                        <a class="btn btn-lg btn-info rounded-0 tab-trigger-next"
                                                            data-bs-toggle="tab" data-bs-target="#row_four"
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
                                    <div class="tab-pane fade" id="row_four" role="tabpanel">
                                        <div class="w-100">
                                            <div class="pb-10 pb-lg-10">
                                                <h2
                                                    class="fw-bolder d-flex justify-content-center align-items-center text-dark">
                                                    Row Four
                                                </h2>
                                            </div>
                                            <div class="fv-row">
                                                <div class="row mb-4 border">
                                                    <div class="col-md-6 mb-2">
                                                        <label for="validationCustom01" class="form-label">Row
                                                            Four Title
                                                        </label>
                                                        <input type="text"
                                                            class="form-control form-control-solid form-control-sm"
                                                            name="row_four_title" value="{{ $industry->row_four_title }}"
                                                            id="validationCustom01" placeholder="Enter Row Four Title">
                                                    </div>
                                                    <div class="col-md-6 mb-2">
                                                        <label for="validationCustom01" class="form-label">Row
                                                            Four Header
                                                        </label>
                                                        <textarea rows="1" name="row_four_header" class="form-control form-control-sm form-control-solid"
                                                            placeholder="Enter Row Four Header">{{ $industry->row_four_header }}</textarea>
                                                    </div>
                                                </div>
                                                <div class="row mt-4 pt-4">
                                                    <div class="col-lg-6">
                                                        <div class="row border p-4">
                                                            <p class="badge badge-info custom-badge"
                                                                style="margin-top: -15px; width: 13%">Column One</span>
                                                            <div class="col-lg-12 col-sm-12">
                                                                <div class="row">
                                                                    <div class="col-md-6 mb-2">
                                                                        <label for="validationCustom01"
                                                                            class="form-label">Row Four Col
                                                                            One Title
                                                                        </label>
                                                                        <input type="text"
                                                                            class="form-control form-control-solid form-control-sm"
                                                                            name="row_four_col_one_title"
                                                                            value="{{ $industry->row_four_col_one_title }}"
                                                                            id="validationCustom01"
                                                                            placeholder="Enter Row Four Col One Title">
                                                                        <div class="invalid-feedback"> Please Enter Row
                                                                            Four
                                                                            Col One Title
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-6 mb-2">
                                                                        <label for="validationCustom01"
                                                                            class="form-label">Row Four Col
                                                                            One Header
                                                                        </label>
                                                                        <textarea rows="1" name="row_four_col_one_header" class="form-control form-control-sm form-control-solid"
                                                                            placeholder="Enter Row Four Col One Header">{{ $industry->row_four_col_one_header }}</textarea>
                                                                        <div class="invalid-feedback"> Please Enter Row
                                                                            Four
                                                                            Col One Header
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-6 mb-2">
                                                                        <label for="validationCustom01"
                                                                            class="form-label">Row Four Col
                                                                            One Button Name
                                                                        </label>
                                                                        <input type="text"
                                                                            class="form-control form-control-solid form-control-sm"
                                                                            name="row_four_col_one_button_name"
                                                                            value="{{ $industry->row_four_col_one_button_name }}"
                                                                            id="validationCustom01"
                                                                            placeholder="Enter Row Four Col One Button Name">
                                                                        <div class="invalid-feedback"> Please Enter Row
                                                                            Four
                                                                            Col One Button Name
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-6 mb-2">
                                                                        <label for="validationCustom01"
                                                                            class="form-label">Row Four Col
                                                                            One Button Link
                                                                        </label>
                                                                        <textarea rows="1" name="row_four_col_one_button_link" class="form-control form-control-sm form-control-solid"
                                                                            placeholder="Enter Row Four Col One Button Link">{{ $industry->row_four_col_one_button_link }}</textarea>
                                                                        <div class="invalid-feedback"> Please Enter Row
                                                                            Four
                                                                            Col One Button Link
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-6">
                                                        <div class="row border p-4">
                                                            <p class="badge badge-info custom-badge"
                                                                style="margin-top: -15px; width: 13%">Column Two</span>
                                                            <div class="col-lg-12 col-sm-12">
                                                                <div class="row">
                                                                    <div class="col-md-6 mb-2">
                                                                        <label for="validationCustom01"
                                                                            class="form-label">Row Four Col
                                                                            One Title
                                                                        </label>
                                                                        <input type="text"
                                                                            class="form-control form-control-solid form-control-sm"
                                                                            name="row_four_col_two_title"
                                                                            value="{{ $industry->row_four_col_two_title }}"
                                                                            id="validationCustom01"
                                                                            placeholder="Enter Row Four Col One Title">
                                                                        <div class="invalid-feedback"> Please Enter Row
                                                                            Four
                                                                            Col One Title
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-6 mb-2">
                                                                        <label for="validationCustom01"
                                                                            class="form-label">Row Four Col
                                                                            One Header
                                                                        </label>
                                                                        <textarea rows="1" name="row_four_col_two_header" class="form-control form-control-sm form-control-solid"
                                                                            placeholder="Enter Row Four Col One Header">{{ $industry->row_four_col_two_header }}</textarea>
                                                                        <div class="invalid-feedback"> Please Enter Row
                                                                            Four
                                                                            Col One Header
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-6 mb-2">
                                                                        <label for="validationCustom01"
                                                                            class="form-label">Row Four Col
                                                                            One Button Name
                                                                        </label>
                                                                        <input type="text"
                                                                            class="form-control form-control-solid form-control-sm"
                                                                            name="row_four_col_two_button_name"
                                                                            value="{{ $industry->row_four_col_two_button_name }}"
                                                                            id="validationCustom01"
                                                                            placeholder="Enter Row Four Col One Button Name">
                                                                        <div class="invalid-feedback"> Please Enter Row
                                                                            Four
                                                                            Col One Button Name
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-6 mb-2">
                                                                        <label for="validationCustom01"
                                                                            class="form-label">Row Four Col
                                                                            One Button Link
                                                                        </label>
                                                                        <textarea rows="1" name="row_four_col_two_button_link" class="form-control form-control-sm form-control-solid"
                                                                            placeholder="Enter Row Four Col One Button Link">{{ $industry->row_four_col_two_button_link }}</textarea>
                                                                        <div class="invalid-feedback"> Please Enter Row
                                                                            Four
                                                                            Col One Button Link
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row mt-4 justify-content-end">
                                                    <div class="d-flex align-items-center justify-content-between p-0">
                                                        <a class="btn btn-lg btn-info rounded-0 tab-trigger-previous"
                                                            data-bs-target="#row_three" aria-selected="false"
                                                            role="tab" tabindex="-1">
                                                            Previous
                                                            <span class="svg-icon svg-icon-4 ms-1 me-0">
                                                                <i class="fa-solid fa-arrow-right"></i>
                                                            </span>
                                                        </a>
                                                        <a class="btn btn-lg btn-info rounded-0 tab-trigger-next"
                                                            data-bs-toggle="tab" data-bs-target="#row_five"
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
                                    <div class="tab-pane fade" id="row_five" role="tabpanel">
                                        <div class="w-100">
                                            <div class="pb-10 pb-lg-10">
                                                <h2
                                                    class="fw-bolder d-flex justify-content-center align-items-center text-dark">
                                                    Row Five
                                                </h2>
                                            </div>
                                            <div class="fv-row">
                                                <div class="row">
                                                    <div class="col-md-12 mb-2">
                                                        <label for="validationCustom01" class="form-label">Row Five Badge
                                                        </label>
                                                        <input type="text"
                                                            class="form-control form-control-solid form-control-sm"
                                                            name="row_five_badge" value="{{ $industry->rowFive->badge }}"
                                                            id="validationCustom01" placeholder="Enter Row Five Badge">
                                                        <div class="invalid-feedback"> Please Enter Row Five
                                                            Badge
                                                        </div>
                                                    </div>
                                                    <div class="col-md-12 mb-2">
                                                        <label for="validationCustom01" class="form-label">Row Five Title
                                                        </label>
                                                        <input type="text"
                                                            class="form-control form-control-solid form-control-sm"
                                                            name="row_five_title" value="{{ $industry->rowFive->title }}"
                                                            id="validationCustom01" placeholder="Enter Row Five Title">
                                                        <div class="invalid-feedback"> Please Enter Row Five
                                                            Title
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6 mb-2">
                                                        <label for="validationCustom01" class="form-label">Row Five Image
                                                        </label>
                                                        <input type="file"
                                                            class="form-control form-control-solid form-control-sm"
                                                            name="rows_image_five" id="validationCustom01"
                                                            placeholder="Enter Row Image">
                                                        <div class="invalid-feedback"> Please Enter Row Five
                                                            Image </div>
                                                    </div>
                                                    <div class="col-md-6 mb-2">
                                                        <label for="validationCustom01" class="form-label">Row Five Button
                                                            Name
                                                        </label>
                                                        <input type="text"
                                                            class="form-control form-control-solid form-control-sm"
                                                            name="row_five_btn_name"
                                                            value="{{ $industry->rowFive->btn_name }}"
                                                            id="validationCustom01"
                                                            placeholder="Enter Row Five Button Name">
                                                    </div>
                                                    <div class="col-md-6 mb-2">
                                                        <label for="validationCustom01" class="form-label">Row Five Link
                                                        </label>
                                                        <input type="text"
                                                            class="form-control form-control-solid form-control-sm"
                                                            name="row_five_link" value="{{ $industry->rowFive->link }}"
                                                            id="validationCustom01" placeholder="Enter Row Five Link">
                                                    </div>
                                                    <div class="col-md-6 mb-2">
                                                        <label for="validationCustom01" class="form-label">Row Five
                                                            Description
                                                        </label>
                                                        <textarea rows="1" name="row_five_description" class="form-control form-control-sm form-control-solid"
                                                            placeholder="Enter Row Five Description">{{ $industry->rowFive->description }}</textarea>
                                                    </div>
                                                </div>
                                                <div class="row mt-4 justify-content-end">
                                                    <div class="d-flex align-items-center justify-content-between">
                                                        <a class="btn btn-lg btn-info rounded-0 tab-trigger-previous"
                                                            data-bs-target="#row_four" aria-selected="false"
                                                            role="tab" tabindex="-1">
                                                            Previous
                                                            <span class="svg-icon svg-icon-4 ms-1 me-0">
                                                                <i class="fa-solid fa-arrow-right"></i>
                                                            </span>
                                                        </a>
                                                        <a class="btn btn-lg btn-info rounded-0 tab-trigger-next"
                                                            data-bs-toggle="tab" data-bs-target="#row_six"
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
                                    <div class="tab-pane fade" id="row_six" role="tabpanel">
                                        <div class="w-100">
                                            <div class="pb-10 pb-lg-10">
                                                <h2
                                                    class="fw-bolder d-flex justify-content-center align-items-center text-dark">
                                                    Row Six
                                                </h2>
                                            </div>
                                            <div class="fv-row">
                                                <div class="row">
                                                    <div class="col-md-6 mb-2">
                                                        <label for="validationCustom01" class="form-label">Footer Title
                                                        </label>
                                                        <input type="text"
                                                            class="form-control form-control-solid form-control-sm"
                                                            name="footer_title" value="{{ $industry->footer_title }}"
                                                            id="validationCustom01" placeholder="Enter Footer Title">
                                                        <div class="invalid-feedback"> Please Enter Footer
                                                            Title
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6 mb-2">
                                                        <label for="validationCustom01" class="form-label">Footer
                                                            Header
                                                        </label>
                                                        <textarea rows="1" name="footer_header" class="form-control form-control-sm form-control-solid"
                                                            placeholder="Enter Row Four Col Two Button Link">{{ $industry->footer_header }}</textarea>
                                                        <div class="invalid-feedback"> Please Enter Footer
                                                            Header
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row mt-2 justify-content-end">
                                                <div class="d-flex align-items-center justify-content-end">
                                                    <button type="submit"
                                                        class="btn btn-lg btn-info rounded-0 tab-trigger-next">
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
