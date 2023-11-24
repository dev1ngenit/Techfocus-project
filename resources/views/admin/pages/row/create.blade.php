@extends('admin.master')
@section('content')
    <div class="container h-100">
        <div class="row">
            <div class="col-lg-12">
                <div class="card my-5 rounded-0">
                    <div class="card-header p-2 rounded-0 main_bg align-items-center">
                        <div class="me-2">
                            <a class="btn btn-sm btn-primary btn-rounded rounded-circle btn-icon back-btn"
                                href="{{ route('admin.row.index') }}">
                                <i class="fa-solid fa-arrow-left text-white"></i>
                            </a>
                        </div>
                        <h2 class="card-title text-center text-white">Row Create</h2>
                        <div class="card-toolbar">
                            <ul class="nav nav-tabs nav-line-tabs nav-stretch fs-8 border-0">
                                <li class="nav-item">
                                    <a class="nav-link active text-white" data-bs-toggle="tab" href="#row-with-image">Row With Image</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link text-white" data-bs-toggle="tab" href="#row-with-list">Row With List</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="tab-content" id="myTabContent">
                            <div class="tab-pane fade show active" id="row-with-image" role="tabpanel">
                                <form action="{{ route('admin.row.store') }}" class="needs-validation" method="POST" novalidate enctype="multipart/form-data">
                                    @csrf
                                    <div class="container px-0">
                                        <div class="row">
                                            <div class="col-lg-6">
                                                <div class="row border p-4">
                                                    <p class="badge badge-info custom-badge" style="margin-top: -15px">
                                                        Row</span>
                                                    <div class="col-lg-12 col-sm-12">
                                                        <div class="row">
                                                            <div class="col-md-12 mb-2">
                                                                <label for="validationCustom01"
                                                                    class="form-label mb-0">Badge
                                                                </label>
                                                                <input type="text"
                                                                    class="form-control form-control-solid form-control-sm"
                                                                    name="badge" value="{{ old('badge') }}" id="validationCustom01"
                                                                    placeholder="Enter Badge">
                                                                <div class="invalid-feedback"> Please Enter Badge </div>
                                                            </div>
                                                            <div class="col-md-12 mb-2">
                                                                <label for="validationCustom01"
                                                                    class="form-label required mb-0">Title
                                                                </label>
                                                                <input type="text"
                                                                    class="form-control form-control-solid form-control-sm"
                                                                    name="title" value="{{ old('title') }}" id="validationCustom01"
                                                                    placeholder="Enter Title" required>
                                                                <div class="invalid-feedback"> Please Enter Title </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-6">
                                                <div class="row border p-4">
                                                    <p class="badge badge-info custom-badge w-125px"
                                                        style="margin-top: -15px;">Row Image Area</span>
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
                                                                <div class="invalid-feedback"> Please Enter Row Image </div>
                                                            </div>
                                                            <div class="col-md-6 mb-2">
                                                                <label for="validationCustom01"
                                                                    class="form-label mb-0">Button Name
                                                                </label>
                                                                <input type="text"
                                                                    class="form-control form-control-solid form-control-sm"
                                                                    name="btn_name" value="{{ old('btn_name') }}" id="validationCustom01"
                                                                    placeholder="Enter Button Name">
                                                            </div>
                                                            <div class="col-md-12 mb-2">
                                                                <label for="validationCustom01" class="form-label mb-0">Link
                                                                </label>
                                                                <input type="url"
                                                                    class="form-control form-control-solid form-control-sm"
                                                                    name="link" value="{{ old('link') }}" id="validationCustom01"
                                                                    placeholder="Enter Row Link">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-12">
                                                <div class="row border p-4 mt-8">
                                                    <p class="badge badge-info custom-badge w-125px"
                                                        style="margin-top: -15px;">Row Description</span>
                                                    <div class="col-lg-12 col-sm-12">
                                                        <div class="row">
                                                            <div class="col-md-12 mb-1">
                                                                <label for="validationCustom01"
                                                                    class="form-label required ">Description
                                                                </label>
                                                                <textarea name="description" class="tox-target kt_docs_tinymce_plugins" rows="3">
                                                                    {{ old('description') }}
                                                                </textarea>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-12">
                                                <div class="d-flex justify-content-end">
                                                    <button type="submit" id="common_submit"
                                                        class="btn btn-lg common-btn-3 fw-bolder me-4 w-175px mb-5">
                                                        <span class="indicator-label">Submit</span>
                                                        <span class="indicator-progress">Please wait...
                                                            <span
                                                                class="spinner-border spinner-border-sm align-middle ms-2"></span>
                                                        </span>
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>

                            <div class="tab-pane fade" id="row-with-list" role="tabpanel">
                                <form action="{{ route('admin.row.store') }}" class="needs-validation" method="POST" novalidate enctype="multipart/form-data">
                                    @csrf
                                    <div class="container px-0">
                                        <div class="row">
                                            <div class="col-lg-12">
                                                <div class="row border p-4">
                                                    <p class="badge badge-info custom-badge" style="margin-top: -15px">
                                                        Row</span>
                                                    <div class="col-lg-12 col-sm-12">
                                                        <div class="row">
                                                            <div class="col-md-6 mb-1">
                                                                <label for="validationCustom01" class="form-label ">Badge
                                                                </label>
                                                                <input type="text"
                                                                    class="form-control form-control-solid form-control-sm"
                                                                    name="badge" value="{{ old('badge') }}" id="validationCustom01"
                                                                    placeholder="Enter Badge">
                                                                <div class="invalid-feedback"> Please Enter Badge </div>
                                                            </div>
                                                            <div class="col-md-6 mb-1">
                                                                <label for="validationCustom01"
                                                                    class="form-label required ">Title
                                                                </label>
                                                                <input type="text"
                                                                    class="form-control form-control-solid form-control-sm"
                                                                    name="title" value="{{ old('title') }}" id="validationCustom01"
                                                                    placeholder="Enter Title" required>
                                                                <div class="invalid-feedback"> Please Enter Title </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-12">
                                                <div class="row border p-4 mt-8">
                                                    <p class="badge badge-info custom-badge w-75px"
                                                        style="margin-top: -15px;">Row List</span>
                                                    <div class="col-lg-12 col-sm-12">
                                                        <div class="row">
                                                            <div class="col-md-4 mb-1">
                                                                <label for="validationCustom01"
                                                                    class="form-label required ">List Title
                                                                </label>
                                                                <input type="text"
                                                                    class="form-control form-control-solid form-control-sm"
                                                                    name="list_title" id="validationCustom01"
                                                                    placeholder="Enter Row Link" required value="{{ old('list_title') }}">
                                                                <div class="invalid-feedback"> Please Enter Button Name
                                                                </div>
                                                            </div>
                                                            <div class="col-md-2 mb-1">
                                                                <label for="validationCustom01"
                                                                    class="form-label required ">List One
                                                                </label>
                                                                <input type="text"
                                                                    class="form-control form-control-solid form-control-sm"
                                                                    name="list_one" id="validationCustom01"
                                                                    placeholder="Enter Row Link" required value="{{ old('list_one') }}">
                                                                <div class="invalid-feedback"> Please Enter Button Name
                                                                </div>
                                                            </div>
                                                            <div class="col-md-2 mb-1">
                                                                <label for="validationCustom01"
                                                                    class="form-label required ">List Two
                                                                </label>
                                                                <input type="text"
                                                                    class="form-control form-control-solid form-control-sm"
                                                                    name="list_two" id="validationCustom01"
                                                                    placeholder="Enter Row Link" required value="{{ old('list_two') }}">
                                                                <div class="invalid-feedback"> Please Enter Button Name
                                                                </div>
                                                            </div>
                                                            <div class="col-md-2 mb-1">
                                                                <label for="validationCustom01"
                                                                    class="form-label required ">List Three
                                                                </label>
                                                                <input type="text"
                                                                    class="form-control form-control-solid form-control-sm"
                                                                    name="list_three" id="validationCustom01"
                                                                    placeholder="Enter Row Link" required value="{{ old('list_three') }}">
                                                                <div class="invalid-feedback"> Please Enter Button Name
                                                                </div>
                                                            </div>
                                                            <div class="col-md-2 mb-1">
                                                                <label for="validationCustom01"
                                                                    class="form-label required ">List Four
                                                                </label>
                                                                <input type="text"
                                                                    class="form-control form-control-solid form-control-sm"
                                                                    name="list_four" id="validationCustom01"
                                                                    placeholder="Enter Row Link" required value="{{ old('list_four') }}">
                                                                <div class="invalid-feedback"> Please Enter Button Name
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-12">
                                                <div class="row border p-4 mt-8">
                                                    <p class="badge badge-info custom-badge w-125px"
                                                        style="margin-top: -15px;">Row Description</span>
                                                    <div class="col-lg-12 col-sm-12">
                                                        <div class="row">
                                                            <div class="col-md-12 mb-1">
                                                                <label for="validationCustom01"
                                                                    class="form-label required ">Description
                                                                </label>
                                                                <textarea name="description" class="tox-target kt_docs_tinymce_plugins">
                                                                    {{ old('description') }}
                                                                </textarea>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-12">
                                                <div class="d-flex justify-content-end">
                                                    <button type="submit" id="common_submit"
                                                        class="btn btn-lg common-btn-3 fw-bolder me-4 w-175px mb-5">
                                                        <span class="indicator-label">Submit</span>
                                                        <span class="indicator-progress">Please wait...
                                                            <span
                                                                class="spinner-border spinner-border-sm align-middle ms-2"></span>
                                                        </span>
                                                    </button>
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
    </div>
@endsection
