@extends('admin.master')
@section('content')
    <div class="container-fluid h-100">
        <div class="row">
            <div class="col-lg-12 card rounded-0 shadow-lg">
                <div class="card card-p-0 card-flush">
                    <div class="card-header align-items-center pt-2 pb-1 gap-2 gap-md-5">
                        <div class="container-fluid">
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
                                        <h2>Leave Applications</h2>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-sm-12 text-lg-end text-sm-center">
                                    <!--begin::Export dropdown-->
                                    <a href="#"
                                        class="btn btn-sm btn-light-primary rounded-0 me-3">
                                        Leave Application
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
                            class="table table-striped table-hover align-middle rounded-0 table-row-bordered border fs-6 g-5 border"
                            id="kt_datatable_example">
                            <thead class="table_header_bg">
                                <tr class="text-center text-gray-900 fw-bolder fs-7 text-uppercase">
                                    <th width="5%" class="text-center">Sl:</th>
                                    <th width="30%">Applicant name</th>
                                    <th width="15%">Type Of Leave</th>
                                    <th width="15%">Designation</th>
                                    <th width="20%">Status</th>
                                    <th width="15%" class="text-center">Action</th>
                                </tr>
                            </thead>
                            <tbody class="fw-bold text-gray-600 text-center">
                                @if ($leaveApplications)
                                    @foreach ($leaveApplications as $leaveApplication)
                                        <tr>
                                            <td class="text-center">{{ $loop->iteration }}</td>
                                            <td>{{ $leaveApplication->name }}</td>
                                            <td>{{ $leaveApplication->type_of_leave }}</td>
                                            <td>{{ $leaveApplication->designation }}</td>
                                            <td>
                                                <span
                                                    class="badge bg-{{ optional($leaveApplication)->application_status == 'approved' ? 'success' : (optional($leaveApplication)->application_status == 'rejected' ? 'danger' : 'warning') }}">
                                                    {{ optional($leaveApplication)->application_status == 'approved' ? 'Approved' : (optional($leaveApplication)->application_status == 'rejected' ? 'Rejected' : 'Pending') }}
                                                </span>
                                            </td>
                                            <td class="text-center">
                                                <a href="javascript:void(0);" class="text-primary" data-bs-toggle="modal"
                                                    data-bs-target="#makeleaveEdit-{{ $leaveApplication }}">
                                                    <i class="fa-solid fa-pen-to-square me-2 p-1 rounded-circle text-white"
                                                        style="color: #247297 !important;"></i>
                                                </a>
                                                <a href="javascript:void(0);" href="" class="text-danger delete">
                                                    <i class="fa-solid fa-trash p-1 rounded-circle text-white"
                                                        style="color: #247297 !important;"></i>
                                                </a>
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
    @foreach ($leaveApplications as $leaveApplication)
        <div class="modal fade" id="makeleaveEdit-{{ $leaveApplication }}" data-bs-backdrop="static" data-bs-keyboard="true" tabindex="-1"
            aria-labelledby="checkapprovedLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered modal-lg">
                <div class="modal-content rounded-0">
                    <div class="modal-header rounded-0 text-white bg-secondary">
                        <h5 class="modal-title text-uppercase" id="checkapprovedLabel">Leave Application (Today's)</h5>
                        <h2 class="accordion-header d-flex align-items-center" id="flush-headingOne">
                            <button class="ms-2 button-37 collapsed" type="button" data-bs-target="#flush-collapseOne"
                                aria-expanded="false" aria-controls="flush-collapseOne">
                                <a href="javascript:void(0);" class="text-primary">
                                    <i class="fa-solid fa-eyes p-1 rounded-circle" style=" color: #174a62;"></i>
                                </a>
                            </button>
                        </h2>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body rounded-0">
                        <div class="container">
                            <div class="accordion accordion-flush" id="accordionFlushExample_{{ $leaveApplication->id }}">
                                <div class="accordion-item">
                                    <div id="flush-collapseOne" class="accordion-collapse collapse"
                                        aria-labelledby="flush-headingOne"
                                        data-bs-parent="#accordionFlushExample_{{ $leaveApplication->id }}">
                                        <div class="accordion-body p-0 m-0">
                                            <div class="row my-2">
                                                <div class="col-lg-12">
                                                    <form class="" action="#">
                                                        <div class="card-body">
                                                            <div class="row">
                                                                <div class="col-lg-3">
                                                                    <div class="mb-1">
                                                                        <label class="form-label mb-0">Applicant Name: <span
                                                                                class="text-danger">*</span></label>
                                                                        <input type="text" name="name"
                                                                            value="{{ $leaveApplication->name }}"
                                                                            class="form-control form-control-sm"
                                                                            placeholder="Enter Applicant Name"
                                                                            @disabled(true)>
                                                                    </div>
                                                                </div>

                                                                <div class="col-lg-3">
                                                                    <div class="mb-1">
                                                                        <label class="form-label mb-0">Type Of Leave: <span
                                                                                class="text-danger">*</span></label>
                                                                        <input type="text" name="type_of_leave"
                                                                            value="{{ $leaveApplication->type_of_leave }}"
                                                                            class="form-control form-control-sm"
                                                                            placeholder="Enter Type Of Leave"
                                                                            @disabled(true)>
                                                                    </div>
                                                                </div>
                                                                <div class="col-lg-3">
                                                                    <div class="mb-1">
                                                                        <label class="form-label mb-0">Designation: <span
                                                                                class="text-danger">*</span></label>
                                                                        <input type="text" name="designation"
                                                                            value="{{ $leaveApplication->designation }}"
                                                                            class="form-control form-control-sm"
                                                                            placeholder="Enter Your Designation"
                                                                            @disabled(true)>
                                                                    </div>
                                                                </div>
                                                                <div class="col-lg-3">
                                                                    <div class="mb-1">
                                                                        <label class="form-label mb-0">Company:</label>
                                                                        <input type="text" name="company"
                                                                            value="{{ $leaveApplication->company }}"
                                                                            @disabled(true)
                                                                            class="form-control form-control-sm"
                                                                            placeholder="NGEN IT">
                                                                    </div>
                                                                </div>
                                                                <div class="col-lg-3">
                                                                    <div class="mb-1">
                                                                        <label class="form-label mb-0">Leave Start Date:
                                                                            <span class="text-danger">*</span></label>
                                                                        <input type="date" name="leave_start_date"
                                                                            value="{{ $leaveApplication->leave_start_date }}"
                                                                            class="form-control form-control-sm"
                                                                            placeholder="Leave Start Date"
                                                                            @disabled(true)>
                                                                    </div>
                                                                </div>
                                                                <div class="col-lg-3">
                                                                    <div class="mb-1">
                                                                        <label class="form-label mb-0">Leave End Date:
                                                                            <span class="text-danger">*</span></label>
                                                                        <input type="date" name="leave_end_date"
                                                                            value="{{ $leaveApplication->leave_end_date }}"
                                                                            class="form-control form-control-sm"
                                                                            placeholder="Leave End Date"
                                                                            @disabled(true)>
                                                                    </div>
                                                                </div>
                                                                <div class="col-lg-3">
                                                                    <div class="mb-1">
                                                                        <label class="form-label mb-0">Total Days: <span
                                                                                class="text-danger">*</span></label>
                                                                        <input type="text" name="total_days"
                                                                            value="{{ $leaveApplication->total_days }}"
                                                                            class="form-control form-control-sm"
                                                                            placeholder="Enter Total Dayes"
                                                                            @disabled(true)>
                                                                    </div>
                                                                </div>
                                                                <div class="col-lg-3">
                                                                    <div class="mb-1">
                                                                        <label class="form-label mb-0">Job Status <span
                                                                                class="text-danger">*</span></label>
                                                                        <input type="text" name="job_status"
                                                                            value="{{ $leaveApplication->job_status }}"
                                                                            class="form-control form-control-sm"
                                                                            placeholder="Enter Job Status"
                                                                            @disabled(true)>
                                                                    </div>
                                                                </div>
                                                                <div class="col-lg-3">
                                                                    <div class="mb-1">
                                                                        <label class="form-label mb-0">Reporting On <span
                                                                                class="text-danger">*</span></label>
                                                                        <input type="date" name="reporting_on"
                                                                            value="{{ $leaveApplication->reporting_on }}"
                                                                            class="form-control form-control-sm"
                                                                            placeholder="Leave End Date"
                                                                            @disabled(true)>
                                                                    </div>
                                                                </div>
                                                                <div class="col-lg-6">
                                                                    <div class="mb-1">
                                                                        <label class="form-label mb-0">Leave Explanation
                                                                            <span class="text-danger">*</span></label>
                                                                        <textarea name="leave_explanation" class="form-control form-control-sm" id="" cols="30"
                                                                            rows="1"placeholder="Enter Leave Explanation" @disabled(true)>{{ $leaveApplication->leave_explanation }}</textarea>
                                                                    </div>
                                                                </div>
                                                                <div class="col-lg-3">
                                                                    <div class="mb-1">
                                                                        <label class="form-label mb-0">Substitute During
                                                                            Leave
                                                                            <span class="text-danger">*</span></label>
                                                                        <input type="text"
                                                                            name="substitute_during_leave"
                                                                            value="{{ $leaveApplication->substitute_during_leave }}"
                                                                            class="form-control form-control-sm"
                                                                            placeholder="Enter Substitute During Leave"
                                                                            @disabled(true)>
                                                                    </div>
                                                                </div>
                                                                <div class="col-lg-3">
                                                                    <div class="mb-1">
                                                                        <label class="form-label mb-0">Leave
                                                                            Address</label>
                                                                        <input type="text" name="leave_address"
                                                                            value="{{ $leaveApplication->leave_address }}"
                                                                            class="form-control form-control-sm"
                                                                            @disabled(true)
                                                                            placeholder="Leave End Date">
                                                                    </div>
                                                                </div>
                                                                <div class="col-lg-3">
                                                                    <div class="mb-1">
                                                                        <label class="form-label mb-0">Is Betwwen
                                                                            Holiday</label>
                                                                        <div class="d-flex align-items-center">
                                                                            <div class="form-check">
                                                                                <input class="form-check-input"
                                                                                    type="radio"
                                                                                    name="is_between_holidays"
                                                                                    value="yes" id="yes"
                                                                                    @checked($leaveApplication->is_between_holidays == 'yes') disabled>
                                                                                <label class="form-check-label"
                                                                                    for="yes">
                                                                                    Yes
                                                                                </label>
                                                                            </div>
                                                                            <div class="form-check ms-3">
                                                                                <input class="form-check-input"
                                                                                    type="radio"
                                                                                    name="is_between_holidays"
                                                                                    value="no" id="no"
                                                                                    @checked($leaveApplication->is_between_holidays == 'no') disabled>
                                                                                <label class="form-check-label"
                                                                                    for="no">
                                                                                    No
                                                                                </label>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="col-lg-3">
                                                                    <div class="mb-1">
                                                                        <label class="form-label mb-0">Leave Contact
                                                                            Number</label>
                                                                        <input type="text" name="leave_contact_no"
                                                                            value="{{ $leaveApplication->leave_contact_no }}"
                                                                            @disabled(true)
                                                                            class="form-control form-control-sm"
                                                                            placeholder="Enter Enter Leave Contact Number">
                                                                    </div>
                                                                </div>
                                                                <div class="col-lg-3">
                                                                    <div class="mb-1">
                                                                        <label class="form-label mb-0">Include Open
                                                                            Saturday</label>
                                                                        <input type="text"
                                                                            name="included_open_saturday"
                                                                            value="{{ $leaveApplication->included_open_saturday }}"
                                                                            @disabled(true)
                                                                            class="form-control form-control-sm"
                                                                            placeholder="Enter Include Open Saturday">
                                                                    </div>
                                                                </div>
                                                                <div class="col-lg-4">
                                                                    <div class="mb-1">
                                                                        <label class="form-label mb-0">Substitute Signature
                                                                            <span class="text-danger">*</span></label>
                                                                        <input type="file" name="substitute_signature"
                                                                            value="{{ $leaveApplication->substitute_signature }}"
                                                                            class="form-control form-control-sm"
                                                                            @disabled(true)>
                                                                    </div>
                                                                </div>
                                                                <div class="col-lg-4">
                                                                    <div class="mb-1">
                                                                        <label class="form-label mb-0">Applicant Signature
                                                                            <span class="text-danger">*</span></label>
                                                                        <input type="file" name="applicant_signature"
                                                                            value="{{ $leaveApplication->applicant_signature }}"
                                                                            class="form-control form-control-sm"
                                                                            @disabled(true)>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="card-footer d-flex justify-content-end mt-3">
                                                            {{-- <button type="reset" value="Reset" class="submit_close_btn "
                                                                data-bs-dismiss="modal">Reset Form</button>
                                                            <button type="submit" class="submit_btn from-prevent-multiple-submits"
                                                                style="padding: 4px 9px;">Submit</button> --}}
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="p-0">
                                <div class="row gx-0 mb-3">
                                    <div class="col-lg-12">
                                        <table class="table table-bordered">
                                            <thead
                                                style="background-color: #2472974f !important; color: #174a62 !important;">
                                                <tr>
                                                    <th scope="col">Leave Position</th>
                                                    <th scope="col">Leave Due As On</th>
                                                    <th scope="col">Leave Availed</th>
                                                    <th scope="col">Balance Due</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>
                                                        <input type="text" name="leave_position"
                                                            class="form-control form-control-sm" value="Earned Leave">
                                                    </td>
                                                    <td>
                                                        <input type="text" name="leave_due_as_on"
                                                            class="form-control form-control-sm">
                                                    </td>
                                                    <td><input type="text" name="leave_availed"
                                                            class="form-control form-control-sm"></td>
                                                    <td><input type="text" name="balance_due"
                                                            class="form-control form-control-sm"></td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <input type="text" name="leave_position"
                                                            class="form-control form-control-sm" value="Casual Leave">
                                                    </td>
                                                    <td>
                                                        <input type="text" name="leave_due_as_on"
                                                            class="form-control form-control-sm">
                                                    </td>
                                                    <td><input type="text" name="leave_availed"
                                                            class="form-control form-control-sm"></td>
                                                    <td><input type="text" name="balance_due"
                                                            class="form-control form-control-sm"></td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <input type="text" name="leave_position"
                                                            class="form-control form-control-sm" value="Medical Leave">
                                                    </td>
                                                    <td>
                                                        <input type="text" name="leave_availed"
                                                            class="form-control form-control-sm">
                                                    </td>
                                                    <td><input type="text" name="leave_due_as_on"
                                                            class="form-control form-control-sm"></td>
                                                    <td><input type="text" name="balance_due"
                                                            class="form-control form-control-sm"></td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                                <div class="row gx-0">
                                    <div class="col-lg-6">
                                        <p class="m-0 border p-1"
                                            style="background-color: #2472974f !important; color:
                                            #174a62;">
                                            Checked By: (HR &
                                            Admin)</p>
                                        <p class="m-0
                                            border p-1"
                                            style="background-color: #2472974f !important; color:
                                            #174a62;">
                                            Recommended By: (CEO
                                            & Head)</p>
                                        <p class="m-0
                                            border p-1"
                                            style="background-color: #2472974f !important; color:
                                            #174a62;">
                                            Recived By: (OD)</p>
                                        <p class="m-0
                                            border p-1"
                                            style="background-color: #2472974f !important; color:
                                            #174a62;">
                                            Approved By: (MD)</p>
                                    </div>
                                    <div class="col-lg-6">
                                        <p class="m-0 p-0">
                                            <input class="form-control form-control-sm" type="file" name="checked_by"
                                                value="Approved">
                                        </p>
                                        <p class="m-0 p-0">
                                            <input class="form-control form-control-sm" type="file"
                                                name="recommended_by" value="Approved">
                                        </p>
                                        <p class="m-0 p-0">
                                            <input class="form-control form-control-sm" type="file" name="reviewed_by"
                                                value="Approved">
                                        </p>
                                        <p class="m-0 p-0">
                                            <input class="form-control form-control-sm" type="file" name="approved_by"
                                                value="Approved">
                                        </p>
                                    </div>
                                </div>
                                <div class="row align-items-center">
                                    <div class="col-lg-6">
                                        <p class="m-0 p-0">Application Status</p>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="btn-group border mt-3 d-flex justify-content-end" role="group"
                                            aria-label="Basic radio toggle button group">
                                            <input type="radio" class="btn-check" name="application_status"
                                                id="btnradio1" autocomplete="off" checked>
                                            <label class="btn btn-outline-success" for="btnradio1">Approved</label>

                                            <input type="radio" class="btn-check" name="application_status"
                                                id="btnradio2" autocomplete="off">
                                            <label class="btn btn-outline-danger" for="btnradio2">Reject</label>
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
@endpush
