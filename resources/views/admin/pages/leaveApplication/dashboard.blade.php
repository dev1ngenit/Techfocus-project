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
