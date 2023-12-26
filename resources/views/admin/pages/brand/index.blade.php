@extends('admin.master')
@section('content')
    <div class="container h-100">
        <div class="row">
            <div class="col-lg-12 card rounded-0 shadow-lg">
                <div class="card card-p-0 card-flush">
                    <div class="card-header align-items-center pt-2 pb-1 gap-2 gap-md-5">
                        <div class="container px-0">
                            <div class="row">
                                <div class="col-lg-4 col-sm-12 text-lg-start text-sm-center">
                                    <!--begin::Search-->
                                    <div class="d-flex align-items-center position-relative my-1">
                                        <span
                                            class="svg-icon svg-icon-2 svg-icon-gray-700 position-absolute top-50 translate-middle-y ms-4">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                viewBox="0 0 24 24" fill="none">
                                                <rect opacity="0.5" x="17.0365" y="15.1223" width="8.15546" height="2"
                                                    rx="1" transform="rotate(45 17.0365 15.1223)"
                                                    fill="currentColor">
                                                </rect>
                                                <path
                                                    d="M11 19C6.55556 19 3 15.4444 3 11C3 6.55556 6.55556 3 11 3C15.4444 3 19 6.55556 19 11C19 15.4444 15.4444 19 11 19ZM11 5C7.53333 5 5 7.53333 5 11C5 14.4667 7.53333 17 11 17C14.4667 17 17 14.4667 17 11C17 7.53333 14.4667 5 11 5Z"
                                                    fill="currentColor"></path>
                                            </svg>
                                        </span>
                                        <input type="text" data-kt-filter="search"
                                            class="form-control form-control-sm form-control-solid w-150px ps-14 rounded-0"
                                            placeholder="Search" style="border: 1px solid #eee;" />
                                    </div>
                                    <!--end::Search-->
                                    <!--begin::Export buttons-->
                                    <div id="kt_datatable_example_1_export" class="d-none"></div>
                                    <!--end::Export buttons-->
                                </div>
                                <div class="col-lg-4 col-sm-12 text-lg-center text-sm-center">
                                    <div class="card-title table_title">
                                        <h2>Brands</h2>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-sm-12 text-lg-end text-sm-center">
                                    <!--begin::Export dropdown-->
                                    <a href="{{ route('admin.brand-page.index') }}"
                                        class="btn btn-sm btn-light-primary rounded-0 me-3">
                                        BrandPage
                                    </a>
                                    <button type="button" class="btn btn-sm btn-light-success rounded-0"
                                        data-kt-menu-placement="bottom-end" data-bs-toggle="modal"
                                        data-bs-target="#brandAddModal">
                                        Add New
                                    </button>

                                    <!--end::Export dropdown-->
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
                                    <th width="10%">Logo</th>
                                    <th width="40%">Name</th>
                                    <th width="10%">Image</th>
                                    <th class="text-center" width="10%">Action</th>
                                </tr>
                                <!--end::Table row-->
                            </thead>
                            <tbody class="fw-bold text-gray-600 text-center">
                                @if ($brands)
                                    @foreach ($brands as $brand)
                                        <tr class="odd">
                                            <td>{{ $loop->iteration }}</td>
                                            <td>
                                                <img class="img-fluid" width="50px"
                                                    src="{{ !empty($brand->logo) && file_exists(public_path('storage/brand/logo/' . $brand->logo)) ? asset('storage/brand/logo/' . $brand->logo) : asset('backend/images/no-image-available.png') }}"
                                                    alt="{{ $brand->name }} Logo">
                                            </td>

                                            <td>{{ $brand->title }}</td>
                                            <td>
                                                <img class="img-fluid" width="50px"
                                                    src="{{ !empty($brand->image) && file_exists(public_path('storage/brand/image/' . $brand->image)) ? asset('storage/brand/image/' . $brand->image) : asset('backend/images/no-image-available.png') }}"
                                                    alt="{{ $brand->name }} image">
                                            </td>
                                            <td>
                                                <div class="d-flex justify-content-between align-items-center">
                                                    <a href="#"
                                                        class="btn btn-icon btn-bg-light btn-active-color-primary btn-sm me-1"
                                                        data-bs-toggle="modal"
                                                        data-bs-target="#brandViewModal_{{ $brand->id }}">
                                                        <i class="fa-solid fa-expand"></i>
                                                        <!--View-->
                                                    </a>
                                                    <a href="#"
                                                        class="btn btn-icon btn-bg-light btn-active-color-primary btn-sm me-1"
                                                        data-bs-toggle="modal"
                                                        data-bs-target="#brandtEditModal_{{ $brand->id }}">
                                                        <i class="fa-solid fa-pen"></i>
                                                        <!--Edit-->
                                                    </a>
                                                    <a href="{{ route('admin.brand.destroy', $brand->id) }}"
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

                        {{-- <p>{!! nl2br() !!}</p> --}}
                    </div>
                </div>
            </div>
        </div>
    </div>
    {{-- Add Modal --}}
    <div class="modal fade" id="brandAddModal" data-backdrop="static">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content rounded-0 border-0 shadow-sm">
                <div class="modal-header p-2 rounded-0">
                    <h5 class="modal-title">Add Brand</h5>
                    <!-- Close button in the header -->
                    <div class="btn btn-icon btn-sm btn-active-light-primary ms-2" data-bs-dismiss="modal"
                        aria-label="Close">
                        <!--begin::Svg Icon | path: icons/duotune/arrows/arr061.svg-->
                        <span class="svg-icon svg-icon-2x">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                fill="none">
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
                <form method="POST" action="{{ route('admin.brand.store') }}" class="needs-validation" novalidate
                    enctype="multipart/form-data">
                    @csrf
                    <div class="modal-body">
                        <div class="container px-0">
                            <div class="row">
                                <div class="col-lg-12 col-sm-12">
                                    <div class="row">
                                        {{-- <div class="col-md-6">
                                            <label for="validationCustom04" class="form-label required">Country
                                                Name</label>
                                            <select class="form-select form-select-solid" name="country_id"
                                                data-dropdown-parent="#brandAddModal" data-control="select2"
                                                data-placeholder="Select an option" data-allow-clear="true" required>
                                                <option></option>
                                                @foreach (getAllCountry() as $country)
                                                    <option value="{{ $country->id }}">{{ $country->name }}</option>
                                                @endforeach
                                            </select>
                                            <div class="valid-feedback"> Looks good! </div>
                                            <div class="invalid-feedback"> Please provide a valid zip. </div>
                                        </div> --}}
                                        <div class="col-md-6 mb-1">
                                            <label for="validationCustom01" class="form-label required ">Brand Name
                                            </label>
                                            <input type="text" class="form-control form-control-solid form-control-sm"
                                                name="title" id="validationCustom01" placeholder="Enter Name" required>
                                            <div class="valid-feedback"> Looks good! </div>
                                            <div class="invalid-feedback"> Please Enter Name </div>
                                        </div>
                                        <div class="col-md-6 mb-1">
                                            <label for="validationCustom01" class="form-label">Image
                                            </label>
                                            <input type="file" class="form-control form-control-solid form-control-sm"
                                                name="image" id="validationCustom01" required>
                                            <div class="valid-feedback"> Looks good! </div>
                                            <div class="invalid-feedback"> Please Enter Image(jpg,jpeg,png) </div>
                                        </div>
                                        <div class="col-md-6 mb-1">
                                            <label for="validationCustom01" class="form-label">Logo
                                            </label>
                                            <input type="file" class="form-control form-control-solid form-control-sm"
                                                name="logo" id="validationCustom01" required>
                                            <div class="valid-feedback"> Looks good! </div>
                                            <div class="invalid-feedback"> Please Enter logo(jpg,jpeg,png) </div>
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
        <div class="modal fade" id="brandtEditModal_{{ $brand->id }}" data-backdrop="static">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content rounded-0 border-0 shadow-sm">
                    <div class="modal-header p-2 rounded-0">
                        <h5 class="modal-title">Edit Brand</h5>
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
                    <form method="POST" action="{{ route('admin.brand.update', $brand->id) }}" class="needs-validation"
                        novalidate enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="modal-body">
                            <div class="container px-0">
                                <div class="row">
                                    <div class="col-lg-12 col-sm-12">
                                        <div class="row">
                                            {{-- <div class="col-md-6">
                                                <label for="validationCustom04" class="form-label required">Country
                                                    Name</label>
                                                <select class="form-select form-select-solid" name="country_id"
                                                    data-dropdown-parent="#brandtEditModal_{{ $brand->id }}" data-control="select2"
                                                    data-placeholder="Select an option" data-allow-clear="true" required>
                                                    <option></option>
                                                    @foreach (getAllCountry() as $country)
                                                        <option @selected($country->id == $brand->country_id) value="{{ $country->id }}">
                                                            {{ $country->name }}</option>
                                                    @endforeach
                                                </select>
                                                <div class="valid-feedback"> Looks good! </div>
                                                <div class="invalid-feedback"> Please provide a valid zip. </div>
                                            </div> --}}
                                            <div class="col-md-6 mb-1">
                                                <label for="validationCustom01" class="form-label required ">Brand Name
                                                </label>
                                                <input type="text"
                                                    class="form-control form-control-solid form-control-sm" name="title"
                                                    value="{{ $brand->title }}" id="validationCustom01"
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

        <div class="modal fade" id="brandViewModal_{{ $brand->id }}" data-backdrop="static">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content rounded-0 border-0 shadow-sm">
                    <div class="modal-header p-2 rounded-0">
                        <h5 class="modal-title mb-0 text-center">Brand View </h5>
                        <!-- Close button in the header -->
                        <div class="btn btn-icon btn-sm btn-active-light-primary ms-2" data-bs-dismiss="modal"
                            aria-label="Close">
                            <!--begin::Svg Icon | path: icons/duotune/arrows/arr061.svg-->
                            <span class="svg-icon svg-icon-2x">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                    viewBox="0 0 24 24" fill="none">
                                    <rect opacity="0.5" x="6" y="17.3137" width="16" height="2" rx="1"
                                        transform="rotate(-45 6 17.3137)" fill="currentColor"></rect>
                                    <rect x="7.41422" y="6" width="16" height="2" rx="1"
                                        transform="rotate(45 7.41422 6)" fill="currentColor"></rect>
                                </svg>
                            </span>
                        </div>
                    </div>
                    <div class="modal-body">
                        <div class="container px-0">
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="card border rounded-0">
                                        {{-- <p class="badge badge-info custom-badge">Brand</span> --}}
                                        <div class="card-body p-1 px-2">
                                            <div class="row">

                                                <div class="col-lg-12 mb-3">
                                                    <div class="row">
                                                        <div class="col-lg-7 col-sm-5">
                                                            <p class="fw-bold">Brand Name</p>
                                                        </div>
                                                        <div class="col-lg-5 col-sm-6">
                                                            <p>{{ $brand->title }}</p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-6 mb-3">
                                                    <div class="row">
                                                        <div class="col-lg-7 col-sm-5">
                                                            <p class="fw-bold">Image</p>
                                                        </div>
                                                        <div class="col-lg-5 col-sm-6">
                                                            <p>
                                                                <img class="img-fluid rounded-circle" width="35px"
                                                                    src="{{ !empty($brand->image) && file_exists(public_path('storage/brand/image/' . $brand->image)) ? asset('storage/brand/image/' . $brand->image) : asset('backend/images/no-image-available.png') }}"
                                                                    alt="{{ $brand->image }}">
                                                            </p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-6 mb-3">
                                                    <div class="row">
                                                        <div class="col-lg-7 col-sm-5">
                                                            <p class="fw-bold">Logo</p>
                                                        </div>
                                                        <div class="col-lg-5 col-sm-6">
                                                            <p>
                                                                <img class="img-fluid" width="50px"
                                                                    src="{{ !empty($brand->logo) && file_exists(public_path('storage/brand/logo/' . $brand->logo)) ? asset('storage/brand/logo/' . $brand->logo) : asset('backend/images/no-image-available.png') }}"
                                                                    alt="{{ $brand->name }} Logo">
                                                            </p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-12 mb-3">
                                                    <div class="row">
                                                        <div class="col-lg-3 col-sm-5">
                                                            <p class="fw-bold">Description</p>
                                                        </div>
                                                        <div class="col-lg-9 col-sm-6">
                                                            <p>
                                                                {{ $brand->description }}
                                                            </p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-12 mb-3">
                                                    <div class="row">
                                                        <div class="col-lg-3 col-sm-5">
                                                            <p class="fw-bold">Website Url</p>
                                                        </div>
                                                        <div class="col-lg-9 col-sm-6">
                                                            <p>
                                                                <a href="{{ $brand->website_url }}">{{ $brand->website_url }}
                                                                </a>
                                                            </p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endforeach
@endsection

@push('scripts')
    <script>
        "use strict";

        // Class definition
        var KTDatatablesButtons = function() {
            // Shared variables
            var table;
            var datatable;

            // Private functions
            var initDatatable = function() {
                // Set date data order
                const tableRows = table.querySelectorAll('tbody tr');

                tableRows.forEach(row => {
                    const dateRow = row.querySelectorAll('td');
                    const realDate = moment(dateRow[3].innerHTML, "DD MMM YYYY, LT")
                        .format(); // select date from 4th column in table
                    dateRow[3].setAttribute('data-order', realDate);
                });

                // Init datatable --- more info on datatables: https://datatables.net/manual/
                datatable = $(table).DataTable({
                    "info": false,
                    'order': [],
                    'pageLength': 10,
                });
            }

            // Hook export buttons
            var exportButtons = () => {
                const documentTitle = 'Customer Orders Report';
                var buttons = new $.fn.dataTable.Buttons(table, {
                    buttons: [{
                            extend: 'copyHtml5',
                            title: documentTitle
                        },
                        {
                            extend: 'excelHtml5',
                            title: documentTitle
                        },
                        {
                            extend: 'csvHtml5',
                            title: documentTitle
                        },
                        {
                            extend: 'pdfHtml5',
                            title: documentTitle
                        }
                    ]
                }).container().appendTo($('#kt_datatable_example_1_export'));

                // Hook dropdown menu click event to datatable export buttons
                const exportButtons = document.querySelectorAll(
                    '#kt_datatable_example_1_export_menu [data-kt-export]');
                exportButtons.forEach(exportButton => {
                    exportButton.addEventListener('click', e => {
                        e.preventDefault();

                        // Get clicked export value
                        const exportValue = e.target.getAttribute('data-kt-export');
                        const target = document.querySelector('.dt-buttons .buttons-' +
                            exportValue);

                        // Trigger click event on hidden datatable export buttons
                        target.click();
                    });
                });
            }

            // Search Datatable --- official docs reference: https://datatables.net/reference/api/search()
            var handleSearchDatatable = () => {
                const filterSearch = document.querySelector('[data-kt-filter="search"]');
                filterSearch.addEventListener('keyup', function(e) {
                    datatable.search(e.target.value).draw();
                });
            }

            // Public methods
            return {
                init: function() {
                    table = document.querySelector('#kt_datatable_example_1');

                    if (!table) {
                        return;
                    }

                    initDatatable();
                    exportButtons();
                    handleSearchDatatable();
                }
            };
        }();

        // On document ready
        KTUtil.onDOMContentLoaded(function() {
            KTDatatablesButtons.init();
        });
    </script>
@endpush
