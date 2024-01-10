@extends('admin.master')
@section('content')
    <div class="container-fluid h-100">
        <div class="row">
            <div class="col-lg-12 card rounded-0 shadow-sm">
                <div class="card card-flush">
                    <div class="card-header align-items-center gap-2 gap-md-5">
                        <div class="container-fluid">
                            <div class="row align-items-center py-5">
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
                                        <h2>Leave Status</h2>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-sm-12 text-lg-end text-sm-center">
                                    <!--begin::Export dropdown-->
                                    {{-- <a href="#" class="btn btn-sm btn-light-primary rounded-0 me-3">
                                        Leave Application
                                    </a> --}}
                                    <button type="button" class="btn btn-sm btn-success rounded-0"
                                        data-kt-menu-placement="bottom-end" data-bs-toggle="modal"
                                        data-bs-target="#makeLeaveModal">
                                        Leave Application
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-lg-3">
                                <div class="card info-cards p-1 rounded-0 main_color mb-0">
                                    <h6 class="text-center mb-0 p-0">Employee Status</h6>
                                </div>
                                <div class="info-details card px-3 py-3 rounded-0">
                                    <p class="p-0 m-0 text-muted d-flex justify-content-between">
                                        <span>Job Status</span>
                                        <span class="text-danger">{{ $user->getCategoryName() ?? 'Not set' }} </span>
                                    </p>
                                    <p class="p-0 m-0 text-muted d-flex justify-content-between">
                                        <span>Next Evulation Date</span>
                                        <span class="text-danger">{{ Auth::user()->evaluation_date ?? '0' }} Days</span>
                                    </p>
                                    <p class="p-0 m-0 text-muted d-flex justify-content-between">
                                        <span>Designation</span>
                                        <span class="text-danger" title="September 12">
                                            {{ Auth::user()->designation ?? 'Not set' }}</span>
                                    </p>
                                    <p class="p-0 m-0 text-muted d-flex justify-content-between">
                                        <span>Joinning</span>
                                        <span class="text-danger" title="September 12">
                                            {{ Auth::user()->sign_date ?? '00-00-0000' }}</span>
                                    </p>
                                </div>
                            </div>
                            <div class="col-lg-9">
                                <div class="row gx-0">
                                    <div class="col-lg-2"></div>
                                    <div class="col-lg-2">
                                        <div class="card info-cards p-1 rounded-0 main_color mb-0">
                                            <h6 class="mb-0 p-0">Leave Description</h6>
                                        </div>
                                        <div class="info-details card px-3 py-3 rounded-0">
                                            <p class="p-0 m-0 text-muted d-flex justify-content-between">
                                                <span>Yearly Leave :</span>
                                            </p>
                                            <p class="p-0 m-0 text-muted d-flex justify-content-between">
                                                <span>Leave Availed :</span>
                                            </p>
                                            <p class="p-0 m-0 text-muted d-flex justify-content-between">
                                                <span>Leave Due :</span>
                                            </p>
                                            <p class="p-0 m-0 text-muted d-flex justify-content-between">
                                                <span>Total :</span>
                                            </p>
                                        </div>
                                    </div>
                                    <div class="col-lg-2">
                                        <div class="card info-cards p-1 rounded-0 main_color mb-0">
                                            <h6 class="text-center mb-0 p-0 text-muted">Casual Leave</h6>
                                        </div>
                                        <div class="info-details card px-3 py-3 rounded-0 text-center">
                                            <p class="p-0 m-0 text-muted border mb-1">
                                                <span
                                                    class="text-danger">{{ $employeeCategory->yearly_casual_leave ?? '0' }}</span>
                                            </p>
                                            <p class="p-0 m-0 text-muted border mb-1">
                                                <span class="text-danger">0</span>
                                            </p>
                                            <p class="p-0 m-0 text-muted border mb-1">
                                                <span class="text-danger" title="September 12">0</span>
                                            </p>
                                        </div>
                                    </div>
                                    <div class="col-lg-2">
                                        <div class="card info-cards p-1 rounded-0 main_color mb-0">
                                            <h6 class="text-center mb-0 p-0 text-muted">Earned Leave</h6>
                                        </div>
                                        <div class="info-details card px-3 py-3 rounded-0 text-center">
                                            <p class="p-0 m-0 text-muted border mb-1">
                                                <span
                                                    class="text-danger">{{ $employeeCategory->yearly_earned_leave ?? '0' }}</span>
                                            </p>
                                            <p class="p-0 m-0 text-muted border mb-1">
                                                <span class="text-danger">0</span>
                                            </p>
                                            <p class="p-0 m-0 text-muted border mb-1">
                                                <span class="text-danger" title="September 12">0</span>
                                            </p>
                                        </div>
                                    </div>
                                    <div class="col-lg-2">
                                        <div class="card info-cards p-1 rounded-0 main_color mb-0">
                                            <h6 class="text-center mb-0 p-0 text-muted">Medical Leave</h6>
                                        </div>
                                        <div class="info-details card px-3 py-3 rounded-0 text-center">
                                            <p class="p-0 m-0 text-muted border mb-1">
                                                <span
                                                    class="text-danger">{{ $employeeCategory->yearly_medical_leave ?? '0' }}</span>
                                            </p>
                                            <p class="p-0 m-0 text-muted border mb-1">
                                                <span class="text-danger">0</span>
                                            </p>
                                            <p class="p-0 m-0 text-muted border mb-1">
                                                <span class="text-danger" title="September 12">0</span>
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
    
    {{-- Add Modal --}}
    <div class="modal fade" id="makeLeaveModal" data-backdrop="static">
        <div class="modal-dialog modal-dialog-centered modal-lg">
            <div class="modal-content rounded-0 border-0 shadow-sm">
                <div class="modal-header p-2 rounded-0">
                    <h5 class="modal-title">Make Leave Request</h5>
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
                <form method="POST" action="{{ route('admin.leave-application.store') }}" class="needs-validation"
                    novalidate enctype="multipart/form-data">
                    @csrf
                    <div class="modal-body">
                        <div class="container px-0">
                            <div class="row">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-lg-3">
                                            <div class="mb-5">
                                                <label class="form-label">Applicant Name: <span
                                                        class="text-danger">*</span></label>
                                                <input type="text" name="name" class="form-control form-control-sm"
                                                    placeholder="Enter Applicant Name" required>
                                            </div>
                                        </div>

                                        <div class="col-lg-3">
                                            <div class="mb-5">
                                                <label class="form-label">Type Of Leave: <span
                                                        class="text-danger">*</span></label>
                                                <input type="text" name="type_of_leave"
                                                    class="form-control form-control-sm" placeholder="Enter Type Of Leave"
                                                    required>
                                            </div>
                                        </div>
                                        <div class="col-lg-3">
                                            <div class="mb-5">
                                                <label class="form-label">Designation: <span
                                                        class="text-danger">*</span></label>
                                                <input type="text" name="designation"
                                                    class="form-control form-control-sm"
                                                    placeholder="Enter Your Designation" required>
                                            </div>
                                        </div>
                                        <div class="col-lg-3">
                                            <div class="mb-5">
                                                <label class="form-label">Company:</label>
                                                <input type="text" name="company" class="form-control form-control-sm"
                                                    placeholder="NGEN IT">
                                            </div>
                                        </div>
                                        <div class="col-lg-3">
                                            <div class="mb-5">
                                                <label class="form-label">Leave Start Date: <span
                                                        class="text-danger">*</span></label>
                                                <input type="datetime-local" name="leave_start_date"
                                                    class="form-control form-control-sm" placeholder="Leave Start Date"
                                                    required>
                                            </div>
                                        </div>
                                        <div class="col-lg-3">
                                            <div class="mb-5">
                                                <label class="form-label">Leave End Date: <span
                                                        class="text-danger">*</span></label>
                                                <input type="datetime-local" name="leave_end_date"
                                                    class="form-control form-control-sm" placeholder="Leave End Date"
                                                    required>
                                            </div>
                                        </div>
                                        <div class="col-lg-3">
                                            <div class="mb-5">
                                                <label class="form-label">Total Days: <span
                                                        class="text-danger">*</span></label>
                                                <input type="number" name="total_days"
                                                    class="form-control form-control-sm" placeholder="Enter Total Dayes"
                                                    required>
                                            </div>
                                        </div>
                                        <div class="col-lg-3">
                                            <div class="mb-5">
                                                <label class="form-label">Job Status <span
                                                        class="text-danger">*</span></label>
                                                <input type="text" name="job_status"
                                                    class="form-control form-control-sm" placeholder="Enter Job Status"
                                                    required>
                                            </div>
                                        </div>
                                        <div class="col-lg-3">
                                            <div class="mb-5">
                                                <label class="form-label">Reporting On <span
                                                        class="text-danger">*</span></label>
                                                <input type="date" name="reporting_on"
                                                    class="form-control form-control-sm" placeholder="Leave End Date"
                                                    required>
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="mb-5">
                                                <label class="form-label">Leave Explanation <span
                                                        class="text-danger">*</span></label>
                                                <textarea name="leave_explanation" class="form-control form-control-sm" id="" cols="30"
                                                    rows="1"placeholder="Enter Leave Explanation" required></textarea>
                                            </div>
                                        </div>
                                        <div class="col-lg-3">
                                            <div class="mb-5">
                                                <label class="form-label required"
                                                    for="basicpill-firstname-input required">Substitute During Leave</label>
                                                <select name="substitute_during_leave" class="form-select form-select-sm form-select-solid"
                                                    data-control="select2" data-placeholder="Select an option"
                                                    data-allow-clear="true" required>
                                                    <option></option>
                                                    @foreach ($all_employees as $substitute)
                                                        <option value="{{ $substitute->id }}">
                                                            {{ $substitute->name }}
                                                        </option>
                                                    @endforeach
                                                </select>
                                                <div class="invalid-feedback"> Please Enter Substitute.</div>
                                            </div>
                                        </div>
                                        <div class="col-lg-3">
                                            <div class="mb-5">
                                                <label class="form-label">Leave Address</label>
                                                <textarea name="leave_address" class="form-control form-control-sm" id="" cols="30" rows="1"
                                                    placeholder="Leave End Date" required></textarea>
                                            </div>
                                        </div>
                                        <div class="col-lg-3">
                                            <div class="mb-5">
                                                <label class="form-label">Is Between Holiday</label>
                                                <div class="d-flex align-items-center">
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="radio"
                                                            name="is_between_holidays" id="flexRadioDefault1">
                                                        <label class="form-check-label" for="flexRadioDefault1">
                                                            Yes
                                                        </label>
                                                    </div>
                                                    <div class="form-check ms-3">
                                                        <input class="form-check-input" type="radio"
                                                            name="is_between_holidays" id="flexRadioDefault2" checked>
                                                        <label class="form-check-label" for="flexRadioDefault2">
                                                            No
                                                        </label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-3">
                                            <div class="mb-5">
                                                <label class="form-label">Leave Contact Number</label>
                                                <input type="text" name="leave_contact_no"
                                                    class="form-control form-control-sm"
                                                    placeholder="Enter Enter Leave Contact Number">
                                            </div>
                                        </div>
                                        <div class="col-lg-3">
                                            <div class="mb-5">
                                                <label class="form-label">Include Open Saturday</label>
                                                <input type="text" name="included_open_saturday"
                                                    class="form-control form-control-sm"
                                                    placeholder="Enter Include Open Saturday">
                                            </div>
                                        </div>
                                        <div class="col-lg-4">
                                            <div class="mb-5">
                                                <label class="form-label">Substitute Signature <span
                                                        class="text-danger">*</span></label>
                                                <input type="file" name="substitute_signature"
                                                    class="form-control form-control-sm" required>
                                            </div>
                                        </div>
                                        <div class="col-lg-4">
                                            <div class="mb-5">
                                                <label class="form-label">Applicant Signature <span
                                                        class="text-danger">*</span></label>
                                                <input type="file" name="applicant_signature"
                                                    class="form-control form-control-sm" required>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer p-2">
                        <!-- Button to close the modal in the footer -->
                        <button type="submit" class="btn btn-sm btn-primary rounded-0">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    {{-- Edit Modal --}}
    <div class="modal fade" id="checkapproved" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
        aria-labelledby="checkapprovedLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-lg">
            <div class="modal-content rounded-0">
                <div class="modal-header rounded-0 text-white" style="background-color: #ae0a46 !important;">
                    <h5 class="modal-title text-uppercase" id="checkapprovedLabel">For Official Use</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body rounded-0">
                    <div class="container">
                        {{-- <div class="d-flex justify-content-between">
                                <h6 class="p-1 m-0 text-center">Current Leave</h6>
                                <h6 class="p-1 m-0 text-center">
                                    <span class="text-success">Start : 5 Sep</span>
                                    <span class="text-danger">End : 8 Sep</span>
                                </h6>
                            </div> --}}
                        <div class="row gx-0 mb-3">
                            <div class="col-lg-12">
                                <table class="table table-bordered">
                                    <thead style="background-color: #ae0a468f !important; color: white !important;">
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
                                                <input type="number" name="leave_due_as_on"
                                                    class="form-control form-control-sm">
                                            </td>
                                            <td><input type="number" name="leave_availed"
                                                    class="form-control form-control-sm"></td>
                                            <td><input type="number" name="balance_due"
                                                    class="form-control form-control-sm"></td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <input type="text" name="leave_position"
                                                    class="form-control form-control-sm" value="Casual Leave">
                                            </td>
                                            <td>
                                                <input type="number" name="leave_due_as_on"
                                                    class="form-control form-control-sm">
                                            </td>
                                            <td><input type="text" name="leave_availed"
                                                    class="form-control form-control-sm"></td>
                                            <td><input type="number" name="balance_due"
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
                                            <td><input type="number" name="leave_due_as_on"
                                                    class="form-control form-control-sm"></td>
                                            <td><input type="number" name="balance_due"
                                                    class="form-control form-control-sm"></td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <div class="row gx-0">
                            <div class="col-lg-6">
                                <p class="m-0 border p-1"
                                    style="background-color: #ae0a468f !important; color:
                                        white;">
                                    Checked By: (HR &
                                    Admin)</p>
                                <p class="m-0
                                        border p-1"
                                    style="background-color: #ae0a468f !important; color:
                                        white;">
                                    Recommended By: (CEO
                                    & Head)</p>
                                <p class="m-0
                                        border p-1"
                                    style="background-color: #ae0a468f !important; color:
                                        white;">
                                    Recived By: (OD)</p>
                                <p class="m-0
                                        border p-1"
                                    style="background-color: #ae0a468f !important; color:
                                        white;">
                                    Approved By: (MD)</p>
                            </div>
                            <div class="col-lg-6">
                                <p class="m-0 p-0">
                                    <input class="form-control form-control-sm" type="file" name="checked_by"
                                        value="Approved">
                                </p>
                                <p class="m-0 p-0">
                                    <input class="form-control form-control-sm" type="file" name="recommended_by"
                                        value="Approved">
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
                                    <input type="radio" class="btn-check" name="application_status" id="btnradio1"
                                        autocomplete="off" checked>
                                    <label class="btn btn-outline-success" for="btnradio1">Approved</label>

                                    <input type="radio" class="btn-check" name="application_status" id="btnradio2"
                                        autocomplete="off">
                                    <label class="btn btn-outline-danger" for="btnradio2">Reject</label>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer rounded-0 p-0">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
@endsection

@push('scripts')
@endpush
