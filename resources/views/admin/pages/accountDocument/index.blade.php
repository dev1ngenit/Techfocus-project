@extends('admin.master')
@section('content')
    <div class="container-fluid h-100">
        <div class="row">
            <div class="col-lg-12 card rounded-0 shadow-sm">
                <div class="card card-p-0 card-flush">
                    <div class="card-header align-items-center py-5 gap-2 gap-md-5">
                        <div class="container-fluid px-0">
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
                                        <h2 class="text-center">Account Documents</h2>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-sm-12 text-lg-end text-sm-center">
                                    <!--begin::Export dropdown-->

                                    <button type="button" class="btn btn-sm btn-light-success rounded-0"
                                        data-kt-menu-placement="bottom-end" data-bs-toggle="modal"
                                        data-bs-target="#accountsDocumentAddModal">
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
                                    <th width="20%">Fiscal Year</th>
                                    <th width="50%">Name</th>
                                    <th width="15%">Status</th>
                                    <th class="text-center" width="10%">Action</th>
                                </tr>
                                <!--end::Table row-->
                            </thead>
                            <tbody class="fw-bold text-gray-600 text-center">
                                @if ($accountsDocuments)
                                    @foreach ($accountsDocuments as $accountsDocument)
                                        <tr class="odd">
                                            <td> {{ $loop->iteration }} </td>
                                            <td>{{ $accountsDocument->fiscal_year }} </td>
                                            <td> {{ $accountsDocument->name }} </td>
                                            <td>  
                                                @if (count($accountsDocument->attachments) > 0)
                                                    <span class="badge bg-success text-white">Uploaded</span>
                                                @else 
                                                <span class="badge bg-danger text-white">Not Uploaded</span>
                                                @endif
                                            </td>
                                            <td>
                                                <div class="d-flex justify-content-between align-items-center">
                                                    <a href="#"
                                                        class="btn btn-icon btn-bg-light btn-active-color-primary btn-sm me-1"
                                                        data-bs-toggle="modal"
                                                        data-bs-target="#accountsDocumentEditModal_{{ $accountsDocument->id }}">
                                                        <i class="fa-solid fa-pen"></i>
                                                    </a>
                                                    <a href="{{ route('admin.accounts-document.destroy', $accountsDocument->id) }}"
                                                        class="btn btn-icon btn-bg-light btn-active-color-primary btn-sm me-1 delete"
                                                        data-kt-docs-table-filter="delete_row">
                                                        <i class="fa-solid fa-trash-can-arrow-up"></i>
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
    {{-- Add Modal --}}
    <div class="modal fade" id="accountsDocumentAddModal" data-backdrop="static">
        <div class="modal-dialog modal-dialog-centered modal-lg">
            <div class="modal-content rounded-0 border-0 shadow-sm">
                <div class="modal-header p-2 rounded-0">
                    <h5 class="modal-title ps-5">Add Account Document</h5>
                    <!-- Close button in the header -->
                    <div class="btn btn-icon btn-sm btn-active-light-primary ms-2" data-bs-dismiss="modal"
                        aria-label="Close">
                        <i class="fa-solid fa-circle-xmark"></i>
                    </div>
                    <!-- End Close button in the header -->
                </div>
                <form action="{{ route('admin.accounts-document.store') }}" class="needs-validation" method="post"
                    novalidate enctype="multipart/form-data">
                    @csrf
                    <div class="modal-body">
                        <div class="container-fluid px-0">
                            <div class="row">
                                <div class="col-lg-12 col-sm-12">
                                    <div class="row">
                                        <div class="col-md-4 mb-2">
                                            <label for="validationCustom04" class="form-label required mb-0">Country
                                                Name</label>
                                            <select class="form-select form-select-solid form-select-sm" name="country_id"
                                                data-dropdown-parent="#accountsDocumentAddModal" data-control="select2"
                                                data-placeholder="Select an option" data-allow-clear="true" required>
                                                <option></option>
                                                @foreach (getAllCountry() as $getAllCountry)
                                                    <option value="{{ $getAllCountry->id }}">{{ $getAllCountry->name }}
                                                    </option>
                                                @endforeach
                                            </select>
                                            <div class="invalid-feedback"> Please Select Country Name. </div>
                                        </div>
                                        <div class="col-md-4 mb-2">
                                            <label for="validationCustom04" class="form-label  mb-0">Company
                                                Name</label>
                                            <select class="form-select form-select-solid form-select-sm" name="company_id"
                                                data-dropdown-parent="#accountsDocumentAddModal" data-control="select2"
                                                data-placeholder="Select an option" data-allow-clear="true">
                                                <option></option>
                                                @foreach ($companies as $company)
                                                    <option value="{{ $company->id }}">{{ $company->name }}
                                                    </option>
                                                @endforeach
                                            </select>
                                            <div class="invalid-feedback"> Please Select Company Name. </div>
                                        </div>
                                        <div class="col-md-4 mb-2">
                                            <label for="validationCustom01" class="form-label required mb-0">Fiscal Year
                                            </label>
                                            <input type="text" class="form-control form-control-solid form-control-sm"
                                                name="fiscal_year" id="validationCustom01" placeholder="e.g: Fiscal Year"
                                                required>
                                            <div class="invalid-feedback"> Please Enter Fiscal Year </div>
                                        </div>
                                        <div class="col-md-6 mb-2">
                                            <label for="validationCustom01" class="form-label required mb-0">Name
                                            </label>
                                            <input type="text" class="form-control form-control-solid form-control-sm"
                                                name="name" id="validationCustom01" placeholder="e.g: Name" required>
                                            <div class="invalid-feedback"> Please Enter Name </div>
                                        </div>
                                        <div class="col-md-6 mb-2">
                                            <label for="validationCustom01" class="form-label  mb-0">Attachments
                                            </label>
                                            <input type="file" class="form-control form-control-solid form-control-sm"
                                                name="attachment[]" multiple id="validationCustom01">
                                            <div class="invalid-feedback"> Please Chose a file </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer p-2">
                        <button type="submit" class="btn btn-sm btn-light-primary rounded-0">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    {{-- Edit Modal --}}
    @foreach ($accountsDocuments as $accountsDocument)
        <div class="modal fade" id="accountsDocumentEditModal_{{ $accountsDocument->id }}" data-backdrop="static">
            <div class="modal-dialog modal-dialog-centered modal-lg">
                <div class="modal-content rounded-0 border-0 shadow-sm">
                    <div class="modal-header p-2 rounded-0">
                        <h5 class="modal-title ps-5">Edit Account Document</h5>
                        <!-- Close button in the header -->
                        <div class="btn btn-icon btn-sm btn-active-light-primary ms-2" data-bs-dismiss="modal"
                            aria-label="Close">
                            <i class="fa-solid fa-circle-xmark"></i>
                        </div>
                        <!-- End Close button in the header -->
                    </div>
                    <form action="{{ route('admin.accounts-document.update', $accountsDocument->id) }}"
                        class="needs-validation" method="post" novalidate>
                        @csrf
                        @method('PUT')
                        <div class="modal-body">
                            <div class="container-fluid px-0">
                                <div class="row">
                                    <div class="col-lg-12 col-sm-12">
                                        <div class="row">
                                            <div class="col-md-4 mb-2">
                                                <label for="validationCustom04" class="form-label required mb-0">Country
                                                    Name</label>
                                                <select class="form-select form-select-solid form-select-sm"
                                                    name="country_id"
                                                    data-dropdown-parent="#accountsDocumentEditModal_{{ $accountsDocument->id }}"
                                                    data-control="select2" data-placeholder="Select an option"
                                                    data-allow-clear="true" required>
                                                    <option></option>
                                                    @foreach (getAllCountry() as $getAllCountry)
                                                        <option @selected($accountsDocument->country_id == $getAllCountry->id)
                                                            value="{{ $getAllCountry->id }}">{{ $getAllCountry->name }}
                                                        </option>
                                                    @endforeach
                                                </select>
                                                <div class="invalid-feedback"> Please Select Country Name. </div>
                                            </div>
                                            <div class="col-md-4 mb-2">
                                                <label for="validationCustom04" class="form-label mb-0">Company
                                                    Name</label>
                                                <select class="form-select form-select-solid form-select-sm"
                                                    name="company_id"
                                                    data-dropdown-parent="#accountsDocumentEditModal_{{ $accountsDocument->id }}"
                                                    data-control="select2" data-placeholder="Select an option"
                                                    data-allow-clear="true">
                                                    <option></option>
                                                    @foreach ($companies as $company)
                                                        <option @selected($accountsDocument->company_id == $company->id) value="{{ $company->id }}">
                                                            {{ $company->name }}
                                                        </option>
                                                    @endforeach
                                                </select>
                                                <div class="invalid-feedback"> Please Select Company Name. </div>
                                            </div>
                                            <div class="col-md-4 mb-2">
                                                <label for="validationCustom01" class="form-label required mb-0">Fiscal
                                                    Year
                                                </label>
                                                <input type="text"
                                                    class="form-control form-control-solid form-control-sm"
                                                    name="fiscal_year" value="{{ $accountsDocument->fiscal_year }}"
                                                    id="validationCustom01" placeholder="e.g: Fiscal Year" required>
                                                <div class="invalid-feedback"> Please Enter Fiscal Year </div>
                                            </div>
                                            <div class="col-md-6 mb-2">
                                                <label for="validationCustom01" class="form-label required mb-0">Name
                                                </label>
                                                <input type="text"
                                                    class="form-control form-control-solid form-control-sm" name="name"
                                                    value="{{ $accountsDocument->name }}" id="validationCustom01"
                                                    placeholder="e.g: Name" required>
                                                <div class="invalid-feedback"> Please Enter Name </div>
                                            </div>
                                            <div class="col-md-6 mb-2">
                                                <label for="validationCustom01" class="form-label  mb-0">Attachments
                                                </label>
                                                <input type="file"
                                                    class="form-control form-control-solid form-control-sm"
                                                    name="attachment[]" multiple id="validationCustom01">
                                                <div class="invalid-feedback"> Please Chose a file </div>
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

@endsection
