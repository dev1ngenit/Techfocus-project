<div class="modal fade" id="makeLeaveModal" data-backdrop="static">
    <div class="modal-dialog modal-dialog-centered modal-lg">
        <div class="modal-content rounded-0 border-0 shadow-sm">
            <div class="modal-header p-2 rounded-0">
                <h5 class="modal-title">Make Leave Request</h5>
                <!-- Close button in the header -->
                <div class="btn btn-icon btn-sm btn-active-light-primary ms-2" data-bs-dismiss="modal" aria-label="Close">
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
                                            <input type="number" name="total_days" class="form-control form-control-sm"
                                                placeholder="Enter Total Dayes" required>
                                        </div>
                                    </div>
                                    <div class="col-lg-3">
                                        <div class="mb-5">
                                            <label class="form-label">Job Status <span
                                                    class="text-danger">*</span></label>
                                            <input type="text" name="job_status" class="form-control form-control-sm"
                                                placeholder="Enter Job Status" required>
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
                                                for="basicpill-firstname-input required">Substitute During
                                                Leave</label>
                                            <select name="substitute_during_leave"
                                                class="form-select form-select-sm form-select-solid"
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
