@extends('admin.master')
@section('content')
    <style>
        .hidden {
            display: none;
        }
    </style>
    <div class="container-fluid h-100">
        <div class="row">
            <div class="col-lg-12">
                <div class="card my-5 rounded-0">
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
                            <h4 class="text-white p-0 m-0 fw-bold">Employee Monthly Target Set</h4>
                        </div>
                    </div>
                    <div class="card-body">
                        <form action="{{ route('admin.employee-task.store') }}" method="POST" enctype="multipart/form-data"
                            class="needs-validation" novalidate>
                            @csrf
                            <div class="row">
                                <div class="col-lg-4 offset-lg-4">
                                    <label class="form-label required">Select Employee</label>
                                    <select class="form-select form-select-solid form-select-sm" name="employee_id"
                                        data-control="select2" data-placeholder="Select an Employee" data-allow-clear="true"
                                        required>
                                        <option></option>
                                        @foreach ($employees as $employee)
                                            <option value="{{ $employee->id }}">{{ $employee->name }}
                                            </option>
                                        @endforeach
                                    </select>
                                    <div class="invalid-feedback"> Please Select Employee.</div>
                                </div>
                            </div>
                            <div class="row py-5">
                                <div class="border p-4 m-1 mt-5 mb-4">
                                    <p class="badge badge-info custom-bage-all w-125px rounded-0">General Information</p>
                                    <div class="row">
                                        <div class="col-lg-4 mb-3">
                                            <label class="form-label">Title</label>
                                            <input name="title"
                                                class="form-control form-control-sm form-control-solid @error('title') is-invalid @enderror"
                                                placeholder="EG: 'Employee Name's January Report" type="text" />
                                            @error('title')
                                                <div class="invalid-feedback">{{ $message }}</div>
                                            @enderror
                                        </div>
                                        <div class="col-lg-3 mb-3">
                                            <label class="form-label required">Fiscal Year</label>
                                            <select class="form-select form-select-solid form-select-sm" name="year"
                                                data-control="select2" data-placeholder="Select a Year"
                                                data-allow-clear="true" required>
                                                <option></option>
                                                @php
                                                    $currentYear = date('Y');
                                                    $startYear = $currentYear - 10;
                                                    $endYear = $currentYear + 10;
                                                    $months = ['January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December'];
                                                @endphp
                                                @for ($year = $startYear; $year <= $endYear; $year++)
                                                    <option value="{{ $year }}" @selected($year == $currentYear)>
                                                        {{ $year }}</option>
                                                @endfor
                                            </select>
                                            <div class="invalid-feedback"> Please Enter Year.</div>
                                        </div>

                                        <div class="col-lg-3 mb-3">
                                            <label class="form-label required">Month</label>
                                            <select class="form-select form-select-solid form-select-sm" name="month"
                                                data-control="select2" data-placeholder="Select a Month"
                                                data-allow-clear="true" required>
                                                <option></option>
                                                @foreach ($months as $index => $month)
                                                    @php
                                                        $currentMonth = date('n');
                                                        $nextMonth = (($currentMonth + $index) % 12) + 1;
                                                    @endphp
                                                    <option value="{{ $nextMonth }}"
                                                        {{ $nextMonth == $currentMonth ? 'selected' : '' }}>
                                                        {{ $month }}</option>
                                                @endforeach
                                            </select>
                                            <div class="invalid-feedback"> Please Enter Month.</div>
                                        </div>

                                        <div class="col-lg-2 mb-3">
                                            <label class="form-label required">Quarter</label>
                                            <select class="form-select form-select-solid form-select-sm" name="quarter"
                                                data-control="select2" data-placeholder="Select a quarter"
                                                data-allow-clear="true" required>
                                                <option></option>
                                                <option value="q1">Quarter One</option>
                                                <option value="q2">Quarter Two</option>
                                                <option value="q3">Quarter Three</option>
                                                <option value="q4">Quarter Four</option>
                                            </select>
                                            <div class="invalid-feedback"> Please Enter Quarter.</div>
                                        </div>
                                        <div class="col-lg-3 mb-3">
                                            <label class="form-label required">Supervisor</label>
                                            <select class="form-select form-select-solid form-select-sm"
                                                name="supervisors[]" id="field2" multiple multiselect-search="true"
                                                multiselect-select-all="true" multiselect-max-items="2">
                                                @foreach ($employees as $employee)
                                                    <option value="{{ $employee->id }}">{{ $employee->name }}
                                                    </option>
                                                @endforeach
                                            </select>
                                            <div class="invalid-feedback"> Please Enter Supervisor Name.
                                            </div>
                                        </div>
                                        <div class="col-lg-3 mb-3">
                                            <label class="form-label required">Notifications To</label>
                                            <select class="form-select form-select-solid form-select-sm" name="notify_id[]"
                                                id="field2" multiple multiselect-search="true"
                                                multiselect-select-all="true" multiselect-max-items="2">
                                                @foreach ($employees as $employee)
                                                    <option value="{{ $employee->id }}">{{ $employee->name }}
                                                    </option>
                                                @endforeach
                                            </select>
                                            <div class="invalid-feedback"> Please Enter Notifiable Employee's Name.
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row mt-lg-4 mt-3 pt-3">
                                <div class="border p-4 m-1 mt-5 mb-4">
                                    <p class="badge badge-info custom-bage-all w-100px rounded-0">Tasks</p>
                                    <div class="col-lg-12">
                                        <div id="kt_docs_repeater_advanced">
                                            <div class="form-group">
                                                <div data-repeater-list="kt_docs_repeater_advanced">
                                                    <div class="d-flex align-items-center justify-content-end">
                                                        <div>
                                                            <a href="javascript:void(0;)" data-repeater-create
                                                                class="btn btn-sm btn-success rounded-0">
                                                                <i class="la la-plus"></i>Add more
                                                            </a>
                                                        </div>
                                                    </div>
                                                    <div data-repeater-item class="p-3 mb-3">
                                                        <div class="form-group row mb-5 align-items-center">
                                                            <div class="col-md-12">
                                                                {{-- <div class="row">
                                                                    <div class="col-md-3 mb-3">
                                                                        <label class="form-label">Page Image</label>
                                                                        <input name="page_image" type="file"
                                                                            class="form-control form-control-sm form-control-solid"
                                                                            data-kt-repeater="repeat"
                                                                            placeholder="Page Image" />
                                                                    </div>
                                                                    <div class="col-md-3 mb-3">
                                                                        <label class="form-label">Page Link</label>
                                                                        <input name="page_link" type="url"
                                                                            class="form-control form-control-sm form-control-solid"
                                                                            data-kt-repeater="repeat"
                                                                            placeholder="Enter Page Link" />
                                                                    </div>
                                                                    <div class="col-md-3 mb-3">
                                                                        <label class="form-label">Button Name</label>
                                                                        <input name="button_name" type="text"
                                                                            class="form-control form-control-sm form-control-solid"
                                                                            data-kt-repeater="repeat"
                                                                            placeholder="Button Name" />
                                                                    </div>
                                                                    <div class="col-md-3 mb-3">
                                                                        <label class="form-label">Button Link</label>
                                                                        <input name="button_link" type="url"
                                                                            class="form-control form-control-sm form-control-solid"
                                                                            data-kt-repeater="repeat"
                                                                            placeholder="Enter Button Link" />
                                                                    </div>
                                                                    <div class="col-md-12 mb-3">
                                                                        <label
                                                                            class="form-label required">Description</label>
                                                                        <textarea rows="1" name="description" class="form-control form-control-sm form-control-solid"
                                                                            data-kt-repeater="repeat" placeholder="Enter Description"></textarea>
                                                                    </div>
                                                                </div> --}}
                                                                <div class="table-responsive">
                                                                    <table class="border">
                                                                        <tbody class="no-border">
                                                                            <tr>
                                                                                <td width="30%">
                                                                                    <label
                                                                                        class="form-label required">Task</label>
                                                                                    <input name="task_name" type="text"
                                                                                        maxlength="230"
                                                                                        class="form-control form-control-sm form-control-solid"
                                                                                        data-kt-repeater="repeat"
                                                                                        placeholder="Task" required />
                                                                                </td>
                                                                                <td>
                                                                                    <label
                                                                                        class="form-label required">Start
                                                                                        Date</label>
                                                                                    <input name="start_date"
                                                                                        type="date"
                                                                                        class="form-control form-control-sm form-control-solid"
                                                                                        data-kt-repeater="repeat"
                                                                                        placeholder="Start Date"
                                                                                        required />
                                                                                </td>
                                                                                <td>
                                                                                    <label class="form-label required">End
                                                                                        Date</label>
                                                                                    <input name="end_date" type="date"
                                                                                        class="form-control form-control-sm form-control-solid"
                                                                                        data-kt-repeater="repeat"
                                                                                        placeholder="Start Date"
                                                                                        required />
                                                                                </td>
                                                                                <td>
                                                                                    <label class="form-label">Start
                                                                                        Time</label>
                                                                                    <input name="start_time"
                                                                                        type="time"
                                                                                        class="form-control form-control-sm form-control-solid"
                                                                                        data-kt-repeater="repeat"
                                                                                        placeholder="Start Time" />
                                                                                </td>
                                                                                <td>
                                                                                    <label class="form-label">End
                                                                                        Time</label>
                                                                                    <input name="end_time" type="time"
                                                                                        class="form-control form-control-sm form-control-solid"
                                                                                        data-kt-repeater="repeat"
                                                                                        placeholder="End Time" />
                                                                                </td>
                                                                                <td>
                                                                                    <label class="form-label">Buffer
                                                                                        Time</label>
                                                                                    <input name="buffer_time"
                                                                                        type="time"
                                                                                        class="form-control form-control-sm form-control-solid"
                                                                                        data-kt-repeater="repeat"
                                                                                        placeholder="Buffer Time" />
                                                                                </td>
                                                                                <td>
                                                                                    <label
                                                                                        class="form-label">Location</label>
                                                                                    <input name="location" type="text"
                                                                                        maxlength="230"
                                                                                        class="form-control form-control-sm form-control-solid"
                                                                                        data-kt-repeater="repeat"
                                                                                        placeholder="Location" />
                                                                                </td>
                                                                                <td rowspan="2" width="3%">
                                                                                    <a href="javascript:;"
                                                                                        data-repeater-delete
                                                                                        class="btn btn-sm btn-light-danger mt-8">
                                                                                        <i
                                                                                            class="fa-solid fa-trash-alt fs-2"></i>
                                                                                    </a>
                                                                                </td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td width="25%">
                                                                                    <label class="form-label required">Task
                                                                                        Description</label>
                                                                                    <textarea rows="1" name="task_description" class="form-control form-control-sm form-control-solid"
                                                                                        data-kt-repeater="repeat" placeholder="Enter Description"></textarea>
                                                                                </td>
                                                                                <td>
                                                                                    <label
                                                                                        class="form-label required">Supervisor</label>
                                                                                    <select
                                                                                        class="form-select form-select-solid form-select-sm"
                                                                                        name="supervisors[]"
                                                                                        id="field2" multiple
                                                                                        multiselect-search="true"
                                                                                        multiselect-select-all="true"
                                                                                        multiselect-max-items="2">
                                                                                        @if (count($all_employees) > 0)
                                                                                            @foreach ($all_employees as $supervisor)
                                                                                                <option
                                                                                                    value="{{ $supervisor->id }}">
                                                                                                    {{ $supervisor->name }}
                                                                                                </option>
                                                                                            @endforeach
                                                                                        @endif
                                                                                    </select>
                                                                                    <div class="invalid-feedback"> Please
                                                                                        Enter Supervisor Name.
                                                                                    </div>
                                                                                </td>
                                                                                <td>
                                                                                    <label
                                                                                        class="form-label required">Notify
                                                                                        To</label>
                                                                                    <select
                                                                                        class="form-select form-select-solid form-select-sm"
                                                                                        name="notify_id[]" id="field2"
                                                                                        multiple multiselect-search="true"
                                                                                        multiselect-select-all="true"
                                                                                        multiselect-max-items="2">
                                                                                        @if (count($all_employees) > 0)
                                                                                            @foreach ($all_employees as $notify_to)
                                                                                                <option
                                                                                                    value="{{ $notify_to->id }}">
                                                                                                    {{ $notify_to->name }}
                                                                                                </option>
                                                                                            @endforeach
                                                                                        @endif
                                                                                    </select>
                                                                                    <div class="invalid-feedback"> Please
                                                                                        Enter Notifiable Employees.
                                                                                    </div>
                                                                                </td>
                                                                                <td>
                                                                                    <label class="form-label required">Add
                                                                                        Standby</label>
                                                                                    <select
                                                                                        class="form-select form-select-solid form-select-sm"
                                                                                        name="assignees[]" id="field2"
                                                                                        multiple multiselect-search="true"
                                                                                        multiselect-select-all="true"
                                                                                        multiselect-max-items="2">
                                                                                        @if (count($all_employees) > 0)
                                                                                            @foreach ($all_employees as $assignee)
                                                                                                <option
                                                                                                    value="{{ $assignee->id }}">
                                                                                                    {{ $assignee->name }}
                                                                                                </option>
                                                                                            @endforeach
                                                                                        @endif
                                                                                    </select>
                                                                                    <div class="invalid-feedback"> Please
                                                                                        Enter Standby Employees.
                                                                                    </div>
                                                                                </td>
                                                                                <td>
                                                                                    <label class="form-label">Task
                                                                                        Target</label>
                                                                                    <input name="task_target"
                                                                                        type="text" maxlength="230"
                                                                                        class="form-control form-control-sm form-control-solid"
                                                                                        data-kt-repeater="repeat"
                                                                                        placeholder="Task Target" />
                                                                                </td>
                                                                                <td>
                                                                                    <label class="form-label">Task
                                                                                        Rating</label>
                                                                                    <input name="task_rating"
                                                                                        type="text" maxlength="230"
                                                                                        class="form-control form-control-sm form-control-solid"
                                                                                        data-kt-repeater="repeat"
                                                                                        placeholder="Task Rating" />
                                                                                </td>
                                                                                <td>
                                                                                    <label class="form-label">Task
                                                                                        Weight</label>
                                                                                    <input name="task_weight"
                                                                                        type="text" maxlength="230"
                                                                                        class="form-control form-control-sm form-control-solid"
                                                                                        data-kt-repeater="repeat"
                                                                                        placeholder="Task Weight" />
                                                                                </td>
                                                                            </tr>
                                                                        </tbody>
                                                                    </table>
                                                                </div>
                                                            </div>
                                                            {{-- <div class="col-md-1">
                                                                <div
                                                                    class="d-flex justify-content-between align-items-center">
                                                                    <a href="javascript:;" data-repeater-delete
                                                                        class="btn btn-sm btn-light-danger mt-8">
                                                                        <i class="fa-solid fa-trash-alt fs-2"></i>
                                                                    </a>
                                                                </div>
                                                            </div> --}}

                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-12 mt-5">
                                    <div class="d-flex justify-content-end">
                                        <button type="submit" class="btn btn-sm btn-primary rounded-0">Submit</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@push('scripts')
    <script>
        function showSelectBox() {
            // Hide all select boxes and input boxes
            $(".brand-select-box, .product-select-box, .industry-select-box, .solution-select-box, .company-select-box, .button-select-box, .link-select-box")
                .addClass("hidden");

            // Get the selected option
            var selectedOption = $("#category").val();

            // Show the relevant select box or input boxes based on the selected option
            if (selectedOption === "brand") {
                $(".brand-select-box").removeClass("hidden");
            } else if (selectedOption === "product") {
                $(".product-select-box").removeClass("hidden");
            } else if (selectedOption === "industry") {
                $(".industry-select-box").removeClass("hidden");
            } else if (selectedOption === "solution") {
                $(".solution-select-box").removeClass("hidden");
            } else if (selectedOption === "company") {
                $(".company-select-box, .button-select-box, .link-select-box").removeClass("hidden");
            }
        }

        // Additional logic for handling the specific case when "Company" is selected
        $("#category").change(function() {
            var selectedOption = $("#category").val();

            if (selectedOption === "company") {
                $(".company-select-box, .button-select-box, .link-select-box").removeClass("hidden");
            } else {
                $(".button-select-box, .link-select-box").addClass("hidden");
            }
        });
    </script>
    <script>
        $('#kt_docs_repeater_advanced').repeater({
            initEmpty: false,

            defaultValues: {
                'text-input': 'foo'
            },

            show: function() {
                $(this).slideDown();

                // Re-init select2
                $(this).find('[data-kt-repeater="select2"]').select2();

                // Re-init flatpickr
                $(this).find('[data-kt-repeater="datepicker"]').flatpickr();

                // Re-init tagify
                new Tagify(this.querySelector('[data-kt-repeater="tagify"]'));
            },

            hide: function(deleteElement) {
                $(this).slideUp(deleteElement);
            },

            ready: function() {
                // Init select2
                $('[data-kt-repeater="select2"]').select2();

                // Init flatpickr
                $('[data-kt-repeater="datepicker"]').flatpickr();

                // Init Tagify
                new Tagify(document.querySelector('[data-kt-repeater="tagify"]'));
            }
        });
    </script>
@endpush
