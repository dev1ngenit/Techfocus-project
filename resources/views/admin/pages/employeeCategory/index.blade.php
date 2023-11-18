@extends('admin.master')
@section('content')
    <div class="container h-100">
        <div class="row">
            <div class="col-lg-12 card rounded-0 shadow-lg">
                <div class="card card-p-0 card-flush">
                    <div class="card-header align-items-center py-5 gap-2 gap-md-5">
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
                                    <div class="card-title">
                                        <h2>Employee Category</h2>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-sm-12 text-lg-end text-sm-center">
                                    <!--begin::Export dropdown-->
                                    <button type="button" class="btn btn-sm btn-light-primary rounded-0"
                                        data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
                                        {{-- <span class="svg-icon svg-icon-1 position-absolute ms-4"></span> --}}
                                        Export Report
                                    </button>
                                    <button type="button" class="btn btn-sm btn-light-success rounded-0"
                                        data-kt-menu-placement="bottom-end" data-bs-toggle="modal"
                                        data-bs-target="#employeeCategoryAddModal">
                                        Add New
                                    </button>
                                    <!--begin::Menu-->
                                    <div id="kt_datatable_example_1_export_menu"
                                        class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-bold fs-7 w-200px py-4"
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
                                    </div>
                                    <!--end::Menu-->
                                    <!--end::Export dropdown-->
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <table
                            class="table table-striped table-hover align-middle rounded-0 table-row-bordered border fs-6 g-5"
                            id="kt_datatable_example_1">
                            <thead class="table_header_bg">
                                <!--begin::Table row-->
                                <tr class="text-center text-gray-900 fw-bolder fs-7 text-uppercase">
                                    <th width="5%">Sl</th>
                                    <th width="15%">Country Name</th>
                                    <th width="15%">Company Name</th>
                                    <th width="25%">Name</th>
                                    <th width="5%">Evaluation Period</th>
                                    <th width="5%">Monthly Earned Leave</th>
                                    <th width="5%">Monthly Casual Leave</th>
                                    <th width="5%">Monthly Medical Leave</th>
                                    <th width="5%">Yearly Earned Leave</th>
                                    <th width="5%">Yearly Casual Leave</th>
                                    <th width="5%">Yearly Medical Leave</th>
                                    <th class="text-center" width="5%">Action</th>
                                    <!--end::Table row-->
                            </thead>
                            <tbody class="fw-bold text-gray-600 text-center">
                                @if ($employeeCategories)
                                    @foreach ($employeeCategories as $employeeCategory)
                                        <tr class="odd">
                                            <td>{{ $loop->iteration }}</td>
                                            <td>{{ $employeeCategory->countryName() ?? 'no data' }}</td>
                                            <td>{{ $employeeCategory->companyName() ?? 'no data' }}</td>
                                            <td>{{ $employeeCategory->name }}</td>
                                            <td>{{ $employeeCategory->evaluation_period }}</td>
                                            <td>{{ $employeeCategory->monthly_earned_leave }}</td>
                                            <td>{{ $employeeCategory->monthly_casual_leave }}</td>
                                            <td>{{ $employeeCategory->monthly_medical_leave }}</td>
                                            <td>{{ $employeeCategory->yearly_earned_leave }}</td>
                                            <td>{{ $employeeCategory->yearly_casual_leave }}</td>
                                            <td>{{ $employeeCategory->yearly_medical_leave }}</td>
                                            <td class="d-flex justify-content-between align-items-center">
                                                <a href="#"
                                                    class="btn btn-icon btn-bg-light btn-active-color-primary btn-sm me-1"
                                                    data-bs-toggle="modal"
                                                    data-bs-target="#employeeCategoryViewModal_{{ $employeeCategory->id }}">
                                                    <i class="fa-solid fa-expand"></i>
                                                    <!--View-->
                                                </a>
                                                <a href="#"
                                                    class="btn btn-icon btn-bg-light btn-active-color-primary btn-sm me-1"
                                                    data-bs-toggle="modal"
                                                    data-bs-target="#employeeCategoryEditModal_{{ $employeeCategory->id }}">
                                                    <i class="fa-solid fa-pen"></i>
                                                    <!--Edit-->
                                                </a>
                                                <a href="{{ route('admin.employee-category.destroy', $employeeCategory->id) }}"
                                                    class="btn btn-icon btn-bg-light btn-active-color-primary btn-sm me-1 delete"
                                                    data-kt-docs-table-filter="delete_row">
                                                    <i class="fa-solid fa-trash-can-arrow-up"></i>
                                                    <!--Delete-->
                                                </a>
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
    <div class="modal fade" id="employeeCategoryAddModal" data-backdrop="static">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content rounded-0 border-0 shadow-sm">
                <div class="modal-header p-2 rounded-0">
                    <h5 class="modal-title">Add Employee Category</h5>
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
                <form action="{{ route('admin.employee-category.store') }}" class="needs-validation" method="post"
                    novalidate>
                    @csrf
                    <div class="modal-body">
                        <div class="container px-0">
                            <div class="row">
                                <div class="col-lg-12 col-sm-12">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <label for="validationCustom04" class="form-label required">Country
                                                Name</label>
                                            <select class="form-select form-select-solid" name="country_id"
                                                data-dropdown-parent="#employeeCategoryAddModal" data-control="select2"
                                                data-placeholder="Select an option" data-allow-clear="true" required>
                                                <option></option>
                                                @foreach (getAllCountry() as $country)
                                                    <option value="{{ $country->id }}">
                                                        {{ $country->name }}</option>
                                                @endforeach
                                            </select>
                                            <div class="valid-feedback"> Looks good! </div>
                                            <div class="invalid-feedback"> Please provide a valid zip. </div>
                                        </div>
                                        <div class="col-md-6">
                                            <label for="validationCustom04" class="form-label required">Company
                                                Name</label>
                                            <select class="form-select form-select-solid" name="company_id"
                                                data-dropdown-parent="#employeeCategoryAddModal" data-control="select2"
                                                data-placeholder="Select an option" data-allow-clear="true">
                                                <option></option>
                                                @foreach ($companies as $company)
                                                    <option value="{{ $company->id }}">
                                                        {{ $company->name }}</option>
                                                @endforeach
                                            </select>
                                            <div class="valid-feedback"> Looks good! </div>
                                            <div class="invalid-feedback"> Please provide a valid zip. </div>
                                        </div>
                                        <div class="col-md-4 mb-1">
                                            <label for="validationCustom01" class="form-label required ">Name
                                            </label>
                                            <input type="text" class="form-control form-control-solid form-control-sm"
                                                name="name" id="validationCustom01" placeholder="Enter Name" required>
                                            <div class="valid-feedback"> Looks good! </div>
                                            <div class="invalid-feedback"> Please Enter Name </div>
                                        </div>
                                        <div class="col-md-4 mb-1">
                                            <label for="validationCustom01" class="form-label required ">Evaluation Period
                                            </label>
                                            <input type="number" class="form-control form-control-solid form-control-sm"
                                                name="evaluation_period" step="0.01" id="validationCustom01"
                                                placeholder="Enter Evaluation Period" required>
                                            <div class="valid-feedback"> Looks good! </div>
                                            <div class="invalid-feedback"> Please Enter Evaluation Period</div>
                                        </div>
                                        <div class="card border rounded-0 mt-4">
                                            <p class="badge badge-info custom-badge w-60px">Monthly</span>
                                            <div class="card-body p-1 px-2">
                                                <div class="row modal_body_badge">
                                                    <div class="col-md-4 mb-1">
                                                        <label for="validationCustom01"
                                                            class="form-label required ">Earned
                                                            Leave
                                                        </label>
                                                        <input type="number"
                                                            class="form-control form-control-solid form-control-sm"
                                                            name="monthly_earned_leave" step="0.01"
                                                            id="validationCustom01"
                                                            placeholder="Enter Monthly Earned Leave" required>
                                                        <div class="valid-feedback"> Looks good! </div>
                                                        <div class="invalid-feedback"> Please Enter Monthly Earned Leave
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4 mb-1">
                                                        <label for="validationCustom01"
                                                            class="form-label required ">Casual
                                                            Leave
                                                        </label>
                                                        <input type="number"
                                                            class="form-control form-control-solid form-control-sm"
                                                            name="monthly_casual_leave" step="0.01"
                                                            id="validationCustom01"
                                                            placeholder="Enter Monthly Casual Leave" required>
                                                        <div class="valid-feedback"> Looks good! </div>
                                                        <div class="invalid-feedback"> Please Enter Monthly Casual Leave
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4 mb-1">
                                                        <label for="validationCustom01"
                                                            class="form-label required ">Medical
                                                            Leave
                                                        </label>
                                                        <input type="number"
                                                            class="form-control form-control-solid form-control-sm"
                                                            name="monthly_medical_leave" step="0.01"
                                                            id="validationCustom01" placeholder="Enter Country Name"
                                                            required>
                                                        <div class="valid-feedback"> Looks good! </div>
                                                        <div class="invalid-feedback"> Please Enter Monthly Medical Leave
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card border rounded-0 mt-4">
                                            <p class="badge badge-info custom-badge w-60px">Yearly</span>
                                            <div class="card-body p-1 px-2">
                                                <div class="row modal_body_badge">
                                                    <div class="col-md-4 mb-1">
                                                        <label for="validationCustom01"
                                                            class="form-label required ">Earned
                                                            Leave
                                                        </label>
                                                        <input type="number"
                                                            class="form-control form-control-solid form-control-sm"
                                                            name="yearly_earned_leave" step="0.01"
                                                            id="validationCustom01"
                                                            placeholder="Enter Yearly Earned Leave" required>
                                                        <div class="valid-feedback"> Looks good! </div>
                                                        <div class="invalid-feedback"> Please Enter Yearly Earned Leave
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4 mb-1">
                                                        <label for="validationCustom01"
                                                            class="form-label required ">Casual
                                                            Leave
                                                        </label>
                                                        <input type="number"
                                                            class="form-control form-control-solid form-control-sm"
                                                            name="yearly_casual_leave" step="0.01"
                                                            id="validationCustom01"
                                                            placeholder="Enter Yearly Casual Leave" required>
                                                        <div class="valid-feedback"> Looks good! </div>
                                                        <div class="invalid-feedback"> Please Enter Yearly Casual Leave
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4 mb-1">
                                                        <label for="validationCustom01" class="form-label required ">
                                                            Medical
                                                            Leave
                                                        </label>
                                                        <input type="number"
                                                            class="form-control form-control-solid form-control-sm"
                                                            name="yearly_medical_leave" step="0.01"
                                                            id="validationCustom01"
                                                            placeholder="Enter Yearly Medical Leave" required>
                                                        <div class="valid-feedback"> Looks good! </div>
                                                        <div class="invalid-feedback"> Please Enter Yearly Medical Leave
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
                    <div class="modal-footer p-2">
                        <!-- Button to close the modal in the footer -->
                        <button type="submit" class="btn btn-sm btn-light-primary rounded-0">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    {{-- Edit Modal --}}
    @foreach ($employeeCategories as $employeeCategory)
        <div class="modal fade" id="employeeCategoryEditModal_{{ $employeeCategory->id }}" data-backdrop="static">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content rounded-0 border-0 shadow-sm">
                    <div class="modal-header p-2 rounded-0">
                        <h5 class="modal-title">Edit Employee Category</h5>
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
                    <form action="{{ route('admin.employee-category.update', $employeeCategory->id) }}"
                        class="needs-validation" method="post" novalidate>
                        @csrf
                        <div class="modal-body">
                            <div class="container px-0">
                                <div class="row modal_body_badge">
                                    <div class="col-lg-12 col-sm-12">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label for="validationCustom04" class="form-label required">Country
                                                    Name</label>
                                                <select class="form-select form-select-solid" name="country_id"
                                                    data-dropdown-parent="#employeeCategoryEditModal_{{ $employeeCategory->id }}"
                                                    data-control="select2" data-placeholder="Select an option"
                                                    data-allow-clear="true" required>
                                                    <option></option>
                                                    @foreach (getAllCountry() as $country)
                                                        <option @selected($country->id == $employeeCategory->country_id) value="{{ $country->id }}">
                                                            {{ $country->name }}</option>
                                                    @endforeach
                                                </select>
                                                <div class="valid-feedback"> Looks good! </div>
                                                <div class="invalid-feedback"> Please provide a valid zip. </div>
                                            </div>
                                            <div class="col-md-6">
                                                <label for="validationCustom04" class="form-label required">Company
                                                    Name</label>
                                                <select class="form-select form-select-solid" name="company_id"
                                                    data-dropdown-parent="#employeeCategoryEditModal_{{ $employeeCategory->id }}"
                                                    data-control="select2" data-placeholder="Select an option"
                                                    data-allow-clear="true">
                                                    <option></option>
                                                    @foreach ($companies as $company)
                                                        <option @selected($company->id == $employeeCategory->company) value="{{ $company->id }}">
                                                            {{ $company->name }}</option>
                                                    @endforeach
                                                </select>
                                                <div class="valid-feedback"> Looks good! </div>
                                                <div class="invalid-feedback"> Please provide a valid zip. </div>
                                            </div>
                                            <div class="col-md-4 mb-1">
                                                <label for="validationCustom01" class="form-label required ">Name
                                                </label>
                                                <input type="text"
                                                    class="form-control form-control-solid form-control-sm" name="name"
                                                    value="{{ $employeeCategory->name }}" id="validationCustom01"
                                                    placeholder="Enter Name" required>
                                                <div class="valid-feedback"> Looks good! </div>
                                                <div class="invalid-feedback"> Please Enter Name </div>
                                            </div>
                                            <div class="col-md-4 mb-1">
                                                <label for="validationCustom01" class="form-label required ">Evaluation
                                                    Period
                                                </label>
                                                <input type="number"
                                                    class="form-control form-control-solid form-control-sm"
                                                    name="evaluation_period"
                                                    value="{{ $employeeCategory->evaluation_period }}" step="0.01"
                                                    id="validationCustom01" placeholder="Enter Evaluation Period"
                                                    required>
                                                <div class="valid-feedback"> Looks good! </div>
                                                <div class="invalid-feedback"> Please Enter Evaluation Period</div>
                                            </div>
                                            <div class="card border rounded-0 mt-4">
                                                <p class="badge badge-info custom-badge w-60px">Monthly</span>
                                                <div class="card-body p-1 px-2">
                                                    <div class="row modal_body_badge">
                                                        <div class="col-md-4 mb-1">
                                                            <label for="validationCustom01"
                                                                class="form-label required ">Earned
                                                                Leave
                                                            </label>
                                                            <input type="number"
                                                                class="form-control form-control-solid form-control-sm"
                                                                name="monthly_earned_leave"
                                                                value="{{ $employeeCategory->monthly_earned_leave }}"
                                                                step="0.01" id="validationCustom01"
                                                                placeholder="Enter Monthly Earned Leave" required>
                                                            <div class="valid-feedback"> Looks good! </div>
                                                            <div class="invalid-feedback"> Please Enter Monthly Earned
                                                                Leave
                                                            </div>
                                                        </div>
                                                        <div class="col-md-4 mb-1">
                                                            <label for="validationCustom01"
                                                                class="form-label required ">Casual
                                                                Leave
                                                            </label>
                                                            <input type="number"
                                                                class="form-control form-control-solid form-control-sm"
                                                                name="monthly_casual_leave"
                                                                value="{{ $employeeCategory->monthly_casual_leave }}"
                                                                step="0.01" id="validationCustom01"
                                                                placeholder="Enter Monthly Casual Leave" required>
                                                            <div class="valid-feedback"> Looks good! </div>
                                                            <div class="invalid-feedback"> Please Enter Monthly Casual
                                                                Leave
                                                            </div>
                                                        </div>
                                                        <div class="col-md-4 mb-1">
                                                            <label for="validationCustom01"
                                                                class="form-label required ">Medical
                                                                Leave
                                                            </label>
                                                            <input type="number"
                                                                class="form-control form-control-solid form-control-sm"
                                                                name="monthly_medical_leave"
                                                                value="{{ $employeeCategory->monthly_medical_leave }}"
                                                                step="0.01" id="validationCustom01"
                                                                placeholder="Enter Country Name" required>
                                                            <div class="valid-feedback"> Looks good! </div>
                                                            <div class="invalid-feedback"> Please Enter Monthly Medical
                                                                Leave
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="card border rounded-0 mt-4">
                                                <p class="badge badge-info custom-badge w-60px">Yearly</span>
                                                <div class="card-body p-1 px-2">
                                                    <div class="row modal_body_badge">
                                                        <div class="col-md-4 mb-1">
                                                            <label for="validationCustom01"
                                                                class="form-label required ">Earned
                                                                Leave
                                                            </label>
                                                            <input type="number"
                                                                class="form-control form-control-solid form-control-sm"
                                                                name="yearly_earned_leave"
                                                                value="{{ $employeeCategory->yearly_earned_leave }}"
                                                                step="0.01" id="validationCustom01"
                                                                placeholder="Enter Yearly Earned Leave" required>
                                                            <div class="valid-feedback"> Looks good! </div>
                                                            <div class="invalid-feedback"> Please Enter Yearly Earned Leave
                                                            </div>
                                                        </div>
                                                        <div class="col-md-4 mb-1">
                                                            <label for="validationCustom01"
                                                                class="form-label required ">Casual
                                                                Leave
                                                            </label>
                                                            <input type="number"
                                                                class="form-control form-control-solid form-control-sm"
                                                                name="yearly_casual_leave"
                                                                value="{{ $employeeCategory->yearly_casual_leave }}"
                                                                step="0.01" id="validationCustom01"
                                                                placeholder="Enter Yearly Casual Leave" required>
                                                            <div class="valid-feedback"> Looks good! </div>
                                                            <div class="invalid-feedback"> Please Enter Yearly Casual Leave
                                                            </div>
                                                        </div>
                                                        <div class="col-md-4 mb-1">
                                                            <label for="validationCustom01" class="form-label required ">
                                                                Medical
                                                                Leave
                                                            </label>
                                                            <input type="number"
                                                                class="form-control form-control-solid form-control-sm"
                                                                name="yearly_medical_leave"
                                                                value="{{ $employeeCategory->yearly_medical_leave }}"
                                                                step="0.01" id="validationCustom01"
                                                                placeholder="Enter Yearly Medical Leave" required>
                                                            <div class="valid-feedback"> Looks good! </div>
                                                            <div class="invalid-feedback"> Please Enter Yearly Medical
                                                                Leave
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
                        <div class="modal-footer p-2">
                            <!-- Button to close the modal in the footer -->
                            <button type="submit" class="btn btn-sm btn-light-primary rounded-0">Submit</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    @endforeach
    {{-- View Modal --}}
    @foreach ($employeeCategories as $employeeCategory)
        <div class="modal fade" id="employeeCategoryViewModal_{{ $employeeCategory->id }}" data-backdrop="static">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content rounded-0 border-0 shadow-sm">
                    <div class="modal-header p-2 rounded-0">
                        <h5 class="modal-title">View </h5>
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
                            <div class="row modal_body_badge">
                                <div class="col-lg-12">
                                    <div class="card border rounded-0">
                                        <p class="badge badge-info custom-badge mt-2">Info</span>
                                        <div class="card-body p-1 px-2">
                                            <div class="row">
                                                <div class="col-lg-3 col-sm-3">
                                                    <p>Country</p>
                                                </div>
                                                <div class="col-lg-1 col-sm-3">
                                                    <p>:</p>
                                                </div>
                                                <div class="col-lg-8 col-sm-8">
                                                    <p> {{ $employeeCategory->countryName() ?? 'no data' }}</p>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-lg-3 col-sm-3">
                                                    <p>Company</p>
                                                </div>
                                                <div class="col-lg-1 col-sm-3">
                                                    <p>:</p>
                                                </div>
                                                <div class="col-lg-8 col-sm-8">
                                                    <p> {{ $employeeCategory->companyName() ?? 'no data' }}</p>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-lg-6">
                                                    <div class="row">
                                                        <div class="col-lg-5 col-sm-5">
                                                            <p class="fw-bold">Eval Period</p>
                                                        </div>
                                                        <div class="col-lg-7 col-sm-6">
                                                            <p>{{ $employeeCategory->evaluation_period }}</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-6">
                                            <div class="card border rounded-0 mt-5">
                                                <p class="badge badge-info custom-badge w-70px">Monthly</span>
                                                <div class="card-body p-1 px-2">
                                                    <div class="row modal_body_badge">
                                                        <div class="col-lg-12">
                                                            <div class="row">
                                                                <div class="col-lg-7 col-sm-5">
                                                                    <p class="fw-bold" title="Monthly Earned Leave">Earned
                                                                        Leave</p>
                                                                </div>
                                                                <div class="col-lg-5 col-sm-6">
                                                                    <p>{{ $employeeCategory->monthly_earned_leave }}</p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-12">
                                                            <div class="row">
                                                                <div class="col-lg-7 col-sm-5">
                                                                    <p class="fw-bold" title="Monthly Medical Leave">
                                                                        Medical
                                                                        Leave</p>
                                                                </div>
                                                                <div class="col-lg-5 col-sm-6">
                                                                    <p>{{ $employeeCategory->monthly_casual_leave }}</p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-lg-12">
                                                            <div class="row">
                                                                <div class="col-lg-7 col-sm-5">
                                                                    <p class="fw-bold" title="Monthly Casual Leave">Casual
                                                                        Leave</p>
                                                                </div>
                                                                <div class="col-lg-5 col-sm-6">
                                                                    <p>{{ $employeeCategory->monthly_medical_leave }}</p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="card border rounded-0 mt-5">
                                                <p class="badge badge-info custom-badge w-70px">Yearly</span>
                                                <div class="card-body p-1 px-2">
                                                    <div class="row modal_body_badge">
                                                        <div class="col-lg-12">
                                                            <div class="row">
                                                                <div class="col-lg-7 col-sm-5">
                                                                    <p class="fw-bold" title="Yearly Earned Leave">Earned
                                                                        Leave</p>
                                                                </div>
                                                                <div class="col-lg-5 col-sm-6">
                                                                    <p>{{ $employeeCategory->yearly_earned_leave }}</p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-12">
                                                            <div class="row">
                                                                <div class="col-lg-7 col-sm-5">
                                                                    <p class="fw-bold" title="Yearly Medical Leave">
                                                                        Medical
                                                                        Leave</p>
                                                                </div>
                                                                <div class="col-lg-5 col-sm-6">
                                                                    <p>{{ $employeeCategory->yearly_casual_leave }}</p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-lg-12">
                                                            <div class="row">
                                                                <div class="col-lg-7 col-sm-5">
                                                                    <p class="fw-bold" title="Yearly Casual Leave">Casual
                                                                        Leave</p>
                                                                </div>
                                                                <div class="col-lg-5 col-sm-6">
                                                                    <p>{{ $employeeCategory->yearly_medical_leave }}</p>
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
