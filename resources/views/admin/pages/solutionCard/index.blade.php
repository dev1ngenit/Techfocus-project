@extends('admin.master')
@section('content')
    <div class="container h-100">
        <div class="row">
            <div class="col-lg-12 card rounded-0 shadow-sm">
                <div class="card card-p-0 card-flush">

                    <div class="card-header align-items-center py-0 gap-2 gap-md-5">
                        <div class="row w-100 align-items-center">
                            <div class="col-lg-3 col-sm-12">
                                <div class="card-title">
                                    <!--begin::Search-->
                                    <div class="d-flex align-items-center position-relative my-1">
                                        <span class="svg-icon fs-1 position-absolute ms-4"><i
                                                class="fa-solid fa-magnifying-glass"></i></span>
                                        <input type="text" data-kt-filter="search"
                                            class="form-control form-control-solid w-250px ps-14" placeholder="Search" />
                                    </div>
                                    <!--end::Search-->
                                    <!--begin::Export buttons-->
                                    <div id="kt_datatable_example_1_export" class="d-none"></div>
                                    <!--end::Export buttons-->
                                </div>
                            </div>
                            <div class="col-lg-5 col-sm-12">
                                <div class="card-title table_title">
                                    <h2 class="text-center document_title">All Solution Cards</h2>
                                </div>
                            </div>
                            <div class="col-lg-4 col-sm-12">
                                <div class="card-toolbar flex-row-fluid justify-content-end gap-5">
                                    {{-- Add Button --}}
                                    <button type="button" class="btn btn-sm btn-light-success rounded-0"
                                        data-kt-menu-placement="bottom-end" data-bs-toggle="modal"
                                        data-bs-target="#solutionCardAddModal">
                                        Add New
                                    </button>
                                    {{-- Add Button --}}
                                    <!--begin::Export dropdown-->
                                    {{-- <button type="button" class="btn btn-light-primary" data-kt-menu-trigger="click"
                                        data-kt-menu-placement="bottom-end">
                                        <i class="ki-duotone ki-exit-down fs-2"><span class="path1"></span><span
                                                class="path2"></span></i>
                                        Export Table
                                    </button>
                                    <!--begin::Menu-->
                                    <div id="kt_datatable_example_export_menu"
                                        class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-200px py-4"
                                        data-kt-menu="true">
                                        <!--begin::Menu item-->
                                        <div class="menu-item px-3">
                                            <a href="#" class="menu-link px-3" data-kt-export="copy">
                                                Copy to clipboard
                                            </a>
                                        </div>
                                        <!--end::Menu item-->
                                        <!--begin::Menu item-->
                                        <div class="menu-item px-3">
                                            <a href="#" class="menu-link px-3" data-kt-export="excel">
                                                Export as Excel
                                            </a>
                                        </div>
                                        <!--end::Menu item-->
                                        <!--begin::Menu item-->
                                        <div class="menu-item px-3">
                                            <a href="#" class="menu-link px-3" data-kt-export="csv">
                                                Export as CSV
                                            </a>
                                        </div>
                                        <!--end::Menu item-->
                                        <!--begin::Menu item-->
                                        <div class="menu-item px-3">
                                            <a href="#" class="menu-link px-3" data-kt-export="pdf">
                                                Export as PDF
                                            </a>
                                        </div>
                                        <!--end::Menu item-->
                                    </div> --}}
                                    <!--end::Menu-->
                                    <div id="kt_datatable_example_buttons" class="d-none"></div>
                                    <!--end::Hide default export buttons-->
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="card-body">
                        <table
                            class="table table-striped table-hover align-middle rounded-0 table-row-bordered border fs-6 g-5"
                            id="kt_datatable_example">
                            <thead class="table_header_bg">
                                <!--begin::Table row-->
                                <tr class="text-center text-gray-900 fw-bolder fs-7 text-uppercase">
                                    <th width="5%">Sl</th>
                                    <th width="10%">Image</th>
                                    <th width="40%">Title</th>
                                    <th width="10%">Action</th>
                                    <!--end::Table row-->
                            </thead>
                            <tbody class="fw-bold text-gray-600 text-center">
                                @if (count($cards) > 0)
                                    @foreach ($cards as $key => $card)
                                        <tr>
                                            <td>
                                                {{ ++$key }}
                                            </td>
                                            <td>
                                                @if (!empty($card->image))
                                                    <img class="img-fluid" width="50px"
                                                        src="{{ Storage::exists("public/row/requestImg/{$card->image}") ? asset("storage/row/requestImg/{$card->image}") : asset('backend/images/no-image-available.png') }}"
                                                        alt="">
                                                @endif
                                            <td>{{ $card->title }}
                                            </td>
                                            <td>
                                                <div class="d-flex justify-content-between align-items-center">
                                                    {{-- <a href="#"
                                                            class="btn btn-icon btn-bg-light btn-active-color-primary btn-sm me-1"
                                                            data-bs-toggle="modal" data-bs-target="#categoryViewModal">
                                                            <i class="fa-solid fa-expand"></i>
                                                            <!--View-->
                                                        </a> --}}
                                                    <a href="#"
                                                        class="btn btn-icon btn-bg-light btn-active-color-primary btn-sm me-1"
                                                        data-bs-toggle="modal"
                                                        data-bs-target="#solutionCardEditModal_{{ $brand->id }}">
                                                        <i class="fa-solid fa-pen"></i>
                                                        <!--Edit-->
                                                    </a>
                                                    <a href="{{ route('admin.solution-card.destroy', $brand->id) }}"
                                                        class="btn btn-icon btn-bg-light btn-active-color-primary btn-sm me-1 delete"
                                                        data-kt-docs-table-filter="delete_row">
                                                        <i class="fa-solid fa-trash-can-arrow-up"></i>
                                                        <!--Delete-->
                                                    </a>
                                                </div>

                                            </td>
                                        </tr>
                                    @endforeach
                                @endif
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

    {{-- Modals Start --}}
    <div class="modal fade" id="solutionCardAddModal" data-backdrop="static">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content rounded-0 border-0 shadow-sm">
                <div class="modal-header p-2 rounded-0">
                    <h5 class="modal-title">Add Solution Card</h5>
                    <!-- Close button in the header -->
                    <div class="btn btn-icon btn-sm btn-active-light-primary ms-2" data-bs-dismiss="modal"
                        aria-label="Close">
                        <span class="svg-icon svg-icon-2x">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                fill="none">
                                <rect opacity="0.5" x="6" y="17.3137" width="16" height="2" rx="1"
                                    transform="rotate(-45 6 17.3137)" fill="currentColor"></rect>
                                <rect x="7.41422" y="6" width="16" height="2" rx="1"
                                    transform="rotate(45 7.41422 6)" fill="currentColor"></rect>
                            </svg>
                        </span>
                    </div>
                    <!-- End Close button in the header -->
                </div>
                <form method="POST" action="{{ route('admin.solution-card.store') }}" class="needs-validation" novalidate
                    enctype="multipart/form-data">
                    @csrf
                    <div class="modal-body">
                        <div class="container px-0">
                            <div class="row">
                                <div class="col-lg-12 col-sm-12">
                                    <div class="row">
                                        <div class="col-md-6 mb-1">
                                            <label for="validationCustom01" class="form-label required ">Solution Card Title</label>
                                            <input type="text" class="form-control form-control-solid form-control-sm"
                                                name="title" id="validationCustom01" placeholder="Enter Solution Card Title" required>
                                            <div class="valid-feedback"> Looks good! </div>
                                            <div class="invalid-feedback"> Please Enter Solution Card Title </div>
                                        </div>
                                        <div class="col-md-6 mb-1">
                                            <label for="validationCustom01" class="form-label">Image</label>
                                            <input type="file" class="form-control form-control-solid form-control-sm"
                                                name="image" id="validationCustom01" required>
                                            <div class="valid-feedback"> Looks good! </div>
                                            <div class="invalid-feedback"> Please Enter Image(jpg,jpeg,png) </div>
                                        </div>
                                        <div class="col-md-6 mb-1">
                                            <label for="validationCustom01" class="form-label">Icon</label>
                                            <input type="file" class="form-control form-control-solid form-control-sm"
                                                name="logo" id="validationCustom01" required>
                                            <div class="valid-feedback"> Looks good! </div>
                                            <div class="invalid-feedback"> Please Enter Icon(jpg,jpeg,png) </div>
                                        </div>
                                        <div class="col-md-6 mb-1">
                                            <label for="validationCustom01" class="form-label">Website URL
                                            </label>
                                            <input type="url" class="form-control form-control-solid form-control-sm"
                                                name="website_url" id="validationCustom01"
                                                placeholder="Enter Web Site Url">
                                        </div>
                                        <div class="col-md-6">
                                            <label for="validationCustom010" class="form-label">Description</label>
                                            <textarea rows="1" name="description" class="form-control form-control-sm form-control-solid"></textarea>
                                        </div>
                                        <div class="col-md-6">
                                            <label for="validationCustom04" class="form-label required">Category</label>
                                            <select class="form-select form-select-solid" name="category"
                                                data-dropdown-parent="#brandAddModal" data-control="select2"
                                                data-placeholder="Select an option" data-allow-clear="true" required>
                                                <option></option>
                                                <option value="Top">Top</option>
                                                <option value="Featured">Featured</option>
                                                <option value="Others">Others</option>
                                            </select>
                                            <div class="valid-feedback"> Looks good! </div>
                                            <div class="invalid-feedback"> Please provide a valid zip. </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer p-2">
                        <!-- Button to close the modal in the footer -->
                        <button type="submit" class="btn btn-sm btn-light-primary rounded-0">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    {{-- Edit Modal --}}
    @foreach ($brands as $brand)
        <div class="modal fade" id="solutionCardEditModal_{{ $brand->id }}" data-backdrop="static">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content rounded-0 border-0 shadow-sm">
                    <div class="modal-header p-2 rounded-0">
                        <h5 class="modal-title">Edit Solution Card</h5>
                        <!-- Close button in the header -->
                        <div class="btn btn-icon btn-sm btn-active-light-primary ms-2" data-bs-dismiss="modal"
                            aria-label="Close">
                            <span class="svg-icon svg-icon-2x">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                    viewBox="0 0 24 24" fill="none">
                                    <rect opacity="0.5" x="6" y="17.3137" width="16" height="2" rx="1"
                                        transform="rotate(-45 6 17.3137)" fill="currentColor"></rect>
                                    <rect x="7.41422" y="6" width="16" height="2" rx="1"
                                        transform="rotate(45 7.41422 6)" fill="currentColor"></rect>
                                </svg>
                            </span>
                            <!--end::Svg Icon-->
                        </div>
                        <!-- End Close button in the header -->
                    </div>
                    <form method="POST" action="{{ route('admin.solution-card.update', $brand->id) }}"
                        class="needs-validation" novalidate enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="modal-body">
                            <div class="container px-0">
                                <div class="row">
                                    <div class="col-lg-12 col-sm-12">
                                        <div class="row">
                                            <div class="col-md-6 mb-1">
                                                <label for="validationCustom01" class="form-label required ">Solution Card
                                                    Name
                                                </label>
                                                <input type="text"
                                                    class="form-control form-control-solid form-control-sm" name="name"
                                                    value="{{ $brand->name }}" id="validationCustom01"
                                                    placeholder="Enter Name" required>
                                                <div class="valid-feedback"> Looks good! </div>
                                                <div class="invalid-feedback"> Please Enter Name </div>
                                            </div>
                                            <div class="col-md-6 mb-1">
                                                <label for="validationCustom01" class="form-label  ">Image
                                                </label>
                                                <input type="file"
                                                    class="form-control form-control-solid form-control-sm" name="image"
                                                    id="validationCustom01">
                                                <div class="valid-feedback"> Looks good! </div>
                                                <div class="invalid-feedback"> Please Enter Image(jpg,jpeg,png) </div>
                                            </div>
                                            <div class="col-md-6 mb-1">
                                                <label for="validationCustom01" class="form-label  ">Logo
                                                </label>
                                                <input type="file"
                                                    class="form-control form-control-solid form-control-sm" name="logo"
                                                    id="validationCustom01">
                                                <div class="valid-feedback"> Looks good! </div>
                                                <div class="invalid-feedback"> Please Enter logo(jpg,jpeg,png) </div>
                                            </div>
                                            <div class="col-md-6 mb-1">
                                                <label for="validationCustom01" class="form-label">Website URL
                                                </label>
                                                <input type="url"
                                                    class="form-control form-control-solid form-control-sm"
                                                    name="website_url" value="{{ $brand->website_url }}"
                                                    id="validationCustom01" placeholder="Enter Web Site Url">
                                                <div class="valid-feedback"> Looks good! </div>
                                                <div class="invalid-feedback"> Please Enter Url </div>
                                            </div>
                                            <div class="col-md-6">
                                                <label for="validationCustom010" class="form-label">Description</label>
                                                <textarea rows="1" name="description" class="form-control form-control-sm form-control-solid">{{ $brand->description }}</textarea>
                                                <div class="valid-feedback"> Looks good! </div>
                                                <div class="invalid-feedback"> Please Enter description</div>
                                            </div>
                                            <div class="col-md-6">
                                                <label for="validationCustom04"
                                                    class="form-label required">Category</label>
                                                <select class="form-select form-select-solid" name="category"
                                                    data-dropdown-parent="#brandtEditModal_{{ $brand->id }}"
                                                    data-control="select2" data-placeholder="Select an option"
                                                    data-allow-clear="true" required>
                                                    <option></option>
                                                    <option value="Top"
                                                        {{ $brand->category == 'Top' ? 'selected' : '' }}>
                                                        Top
                                                    </option>
                                                    <option value="Featured"
                                                        {{ $brand->category == 'Featured' ? 'selected' : '' }}>
                                                        Featured</option>
                                                    <option value="Others"
                                                        {{ $brand->category == 'Others' ? 'selected' : '' }}>
                                                        Others</option>
                                                </select>
                                                <div class="valid-feedback"> Looks good! </div>
                                                <div class="invalid-feedback"> Please provide a valid Option. </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="modal-footer p-2">
                            <!-- Button to close the modal in the footer -->
                            <button type="submit" class="btn btn-sm btn-light-primary rounded-0">Submit</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    @endforeach
    {{-- Modals End --}}


@endsection
