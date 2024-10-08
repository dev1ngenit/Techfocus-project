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
                                    <div class="card-title table_title">
                                        <h2 class="text-center">Events Table</h2>
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
                                        data-bs-target="#eventsAddModal">
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
                                    <th class="" width="5%">Sl</th>
                                    <th class="" width="55%">Title</th>
                                    <th class="" width="10%">Start Date</th>
                                    <th class="" width="10%">Start Time</th>
                                    <th class="" width="10%">Status</th>
                                    <th class="text-center" width="10%">Action</th>
                                    <!--end::Table row-->
                            </thead>
                            <tbody class="fw-bold text-gray-600 text-center">
                                @if ($events)
                                    @foreach ($events as $event)
                                        <tr class="odd">
                                            <td>
                                                {{ $loop->iteration }}
                                            </td>
                                            <td>
                                                {{ $event->title }}
                                            </td>
                                            <td>
                                                {{ $event->start_date }}
                                            </td>
                                            <td>
                                                {{ $event->start_time }}
                                            </td>
                                            <td>
                                                <span
                                                    class="badge {{ $event->status == 'active' ? 'bg-success' : 'bg-danger' }}">{{ $event->status }}</span>
                                            </td>
                                            <td class="d-flex justify-content-between align-items-center">
                                                <a href="#"
                                                    class="btn btn-icon btn-bg-light btn-active-color-primary btn-sm me-1"
                                                    data-bs-toggle="modal"
                                                    data-bs-target="#eventsViewModal_{{ $event->id }}">
                                                    <i class="fa-solid fa-expand"></i>
                                                </a>
                                                <a href="#"
                                                    class="btn btn-icon btn-bg-light btn-active-color-primary btn-sm me-1"
                                                    data-bs-toggle="modal"
                                                    data-bs-target="#eventsEditModal_{{ $event->id }}">
                                                    <i class="fa-solid fa-pen"></i>
                                                </a>
                                                <a href="{{ route('admin.event.destroy', $event->id) }}"
                                                    class="btn btn-icon btn-bg-light btn-active-color-primary btn-sm me-1 delete"
                                                    data-kt-docs-table-filter="delete_row">
                                                    <i class="fa-solid fa-trash-can-arrow-up"></i>
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
    <div class="modal fade" id="eventsAddModal" data-backdrop="static">
        <div class="modal-dialog modal-dialog-centered modal-lg">
            <div class="modal-content rounded-0 border-0 shadow-sm">
                <div class="modal-header p-2 rounded-0">
                    <h5 class="modal-title ps-5">Add Events</h5>
                    <!-- Close button in the header -->
                    <div class="btn btn-icon btn-sm btn-active-light-primary ms-2" data-bs-dismiss="modal"
                        aria-label="Close">
                        <i class="fa-solid fa-circle-xmark"></i>
                    </div>
                    <!-- End Close button in the header -->
                </div>
                <form action="{{ route('admin.event.store') }}" class="needs-validation" method="post" novalidate>
                    @csrf
                    <div class="modal-body">
                        <div class="container px-0">
                            <div class="row">
                                <div class="col-lg-12 col-sm-12">
                                    <div class="row">
                                        <div class="col-md-4 mb-2">
                                            <label for="validationCustom04" class="form-label  mb-0">Dynamic
                                                Category Name</label>
                                            <select class="form-select-sm form-select form-select-solid"
                                                name="dynamic_category_id" data-dropdown-parent="#eventsAddModal"
                                                data-control="select2" data-placeholder="Select an option"
                                                data-allow-clear="true">
                                                <option></option>
                                                @foreach ($dynamicCategories as $dynamicCategory)
                                                    <option value="{{ $dynamicCategory->id }}">
                                                        {{ $dynamicCategory->name }}
                                                    </option>
                                                @endforeach
                                            </select>
                                            <div class="valid-feedback"> Looks good! </div>
                                            <div class="invalid-feedback"> Please Select Dynamic Category. </div>
                                        </div>
                                        <div class="col-md-4 mb-2">
                                            <label for="validationCustom04" class="form-label required mb-0">Employee
                                                Name</label>
                                            <select class="form-select-sm form-select form-select-solid"
                                                name="employee_id" data-dropdown-parent="#eventsAddModal"
                                                data-control="select2" data-placeholder="Select an option"
                                                data-allow-clear="true" required>
                                                <option></option>
                                                @foreach ($admins as $admin)
                                                    <option value="{{ $admin->id }}">{{ $admin->name }}</option>
                                                @endforeach
                                            </select>
                                            <div class="valid-feedback"> Looks good! </div>
                                            <div class="invalid-feedback"> Please Select Employee Name. </div>
                                        </div>
                                        <div class="col-md-4 mb-2">
                                            <label for="validationCustom04" class="form-label required mb-0">Depertment
                                                Name</label>
                                            <select class="form-select-sm form-select form-select-solid"
                                                name="department_id" data-dropdown-parent="#eventsAddModal"
                                                data-control="select2" data-placeholder="Select an option"
                                                data-allow-clear="true" required>
                                                <option></option>
                                                @foreach ($employeedepartments as $employeedepartment)
                                                    <option value="{{ $employeedepartment->id }}">
                                                        {{ $employeedepartment->name }}</option>
                                                @endforeach
                                            </select>
                                            <div class="valid-feedback"> Looks good! </div>
                                            <div class="invalid-feedback"> Please Select Depertment Name. </div>
                                        </div>

                                        <div class="col-md-4 mb-2">
                                            <label for="validationCustom01" class="form-label required mb-0">Title
                                            </label>
                                            <input type="text" class="form-control form-control-solid form-control-sm"
                                                name="title" id="validationCustom01" placeholder="e.g: Title" required>
                                            <div class="invalid-feedback"> Please Enter Title </div>
                                        </div>
                                        <div class="col-md-4 mb-2">
                                            <label for="validationCustom01" class="form-label required mb-0">Start Date
                                            </label>
                                            <input type="date" class="form-control form-control-solid form-control-sm"
                                                name="start_date" id="validationCustom01" placeholder="Enter Start Date"
                                                required>
                                            <div class="invalid-feedback"> Please Enter Start Date </div>
                                        </div>
                                        <div class="col-md-4 mb-2">
                                            <label for="validationCustom01" class="form-label required mb-0">End Date
                                            </label>
                                            <input type="date" class="form-control form-control-solid form-control-sm"
                                                name="end_date" id="validationCustom01" placeholder="e.g: 12:56"
                                                required>
                                            <div class="invalid-feedback"> Please Enter End Date </div>
                                        </div>
                                        <div class="col-md-4 mb-2">
                                            <label for="validationCustom01" class="form-label required mb-0">Start Time
                                            </label>
                                            <input type="time" class="form-control form-control-solid form-control-sm"
                                                name="start_time" id="validationCustom01" placeholder="Enter Start Time"
                                                required>
                                            <div class="invalid-feedback"> Please Enter Start Time </div>
                                        </div>
                                        <div class="col-md-4 mb-2">
                                            <label for="validationCustom01" class="form-label required mb-0">End Time
                                            </label>
                                            <input type="time" class="form-control form-control-solid form-control-sm"
                                                name="end_time" id="validationCustom01" placeholder="Enter End Time"
                                                required>
                                            <div class="invalid-feedback"> Please Enter End Time </div>
                                        </div>
                                        <div class="col-md-4 mb-2">
                                            <label for="validationCustom04"
                                                class="form-label required mb-0">Status</label>
                                            <select class="form-select-sm form-select form-select-solid" name="status"
                                                data-dropdown-parent="#eventsAddModal" data-control="select2"
                                                data-placeholder="Select an option" data-hide-search="true"
                                                data-allow-clear="true" required>
                                                <option></option>
                                                <option value="active">Active</option>
                                                <option value="inactive">Inactive</option>
                                            </select>
                                            <div class="invalid-feedback"> Please Select Status. </div>
                                        </div>
                                        <div class="col-md-12 mb-2">
                                            <label for="validationCustom010"
                                                class="form-label required mb-0">Description</label>
                                            <textarea rows="1" name="description" class="form-control form-control-sm form-control-solid"
                                                placeholder="Enter Description" required></textarea>
                                            <div class="invalid-feedback"> Please Enter description</div>
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
    @foreach ($events as $event)
        <div class="modal fade" id="eventsEditModal_{{ $event->id }}" data-backdrop="static">
            <div class="modal-dialog modal-dialog-centered modal-lg">
                <div class="modal-content rounded-0 border-0 shadow-sm">
                    <div class="modal-header p-2 rounded-0">
                        <h5 class="modal-title ps-5">Edit Events</h5>
                        <!-- Close button in the header -->
                        <div class="btn btn-icon btn-sm btn-active-light-primary ms-2" data-bs-dismiss="modal"
                            aria-label="Close">
                            <i class="fa-solid fa-circle-xmark"></i>
                        </div>
                        <!-- End Close button in the header -->
                    </div>
                    <form action="{{ route('admin.event.update', $event->id) }}" class="needs-validation" method="post"
                        novalidate>
                        @csrf
                        @method('PUT')
                        <div class="modal-body">
                            <div class="container px-0">
                                <div class="row">
                                    <div class="col-lg-12 col-sm-12">
                                        <div class="row">
                                            <div class="col-md-4 mb-2">
                                                <label for="validationCustom04" class="form-label  mb-0">Dynamic
                                                    Category Name</label>
                                                <select class="form-select-sm form-select form-select-solid"
                                                    name="dynamic_category_id"
                                                    data-dropdown-parent="#eventsEditModal_{{ $event->id }}"
                                                    data-control="select2" data-placeholder="Select an option"
                                                    data-allow-clear="true">
                                                    <option></option>
                                                    @foreach ($dynamicCategories as $dynamicCategory)
                                                        <option @selected($dynamicCategory->id == $event->dynamic_category_id)
                                                            value="{{ $dynamicCategory->id }}">
                                                            {{ $dynamicCategory->name }}</option>
                                                    @endforeach
                                                </select>
                                                <div class="valid-feedback"> Looks good! </div>
                                                <div class="invalid-feedback"> Please Select Dynamic Category. </div>
                                            </div>
                                            <div class="col-md-4 mb-2">
                                                <label for="validationCustom04" class="form-label required mb-0">Employee
                                                    Name</label>
                                                <select class="form-select-sm form-select form-select-solid"
                                                    name="employee_id"
                                                    data-dropdown-parent="#eventsEditModal_{{ $event->id }}"
                                                    data-control="select2" data-placeholder="Select an option"
                                                    data-allow-clear="true" required>
                                                    <option></option>
                                                    @foreach ($admins as $admin)
                                                        <option @selected($admin->id == $event->employee_id) value="{{ $admin->id }}">
                                                            {{ $admin->name }}</option>
                                                    @endforeach
                                                </select>
                                                <div class="valid-feedback"> Looks good! </div>
                                                <div class="invalid-feedback"> Please Select Employee Name. </div>
                                            </div>
                                            <div class="col-md-4 mb-2">
                                                <label for="validationCustom04"
                                                    class="form-label required mb-0">Depertment
                                                    Name</label>
                                                <select class="form-select-sm form-select form-select-solid"
                                                    name="department_id"
                                                    data-dropdown-parent="#eventsEditModal_{{ $event->id }}"
                                                    data-control="select2" data-placeholder="Select an option"
                                                    data-allow-clear="true" required>
                                                    <option></option>
                                                    @foreach ($employeedepartments as $employeedepartment)
                                                        <option @selected($employeedepartment->id == $event->department_id)
                                                            value="{{ $employeedepartment->id }}">
                                                            {{ $employeedepartment->name }}</option>
                                                    @endforeach
                                                </select>
                                                <div class="valid-feedback"> Looks good! </div>
                                                <div class="invalid-feedback"> Please Select Depertment Name. </div>
                                            </div>

                                            <div class="col-md-4 mb-2">
                                                <label for="validationCustom01" class="form-label required mb-0">Title
                                                </label>
                                                <input type="text"
                                                    class="form-control form-control-solid form-control-sm" name="title"
                                                    value="{{ $event->title }}" id="validationCustom01"
                                                    placeholder="e.g: Title" required>
                                                <div class="invalid-feedback"> Please Enter Title </div>
                                            </div>
                                            <div class="col-md-4 mb-2">
                                                <label for="validationCustom01" class="form-label required mb-0">Start
                                                    Date
                                                </label>
                                                <input type="date"
                                                    class="form-control form-control-solid form-control-sm"
                                                    name="start_date" value="{{ $event->start_date }}"
                                                    id="validationCustom01" placeholder="Enter Start Date" required>
                                                <div class="invalid-feedback"> Please Enter Start Date </div>
                                            </div>
                                            <div class="col-md-4 mb-2">
                                                <label for="validationCustom01" class="form-label required mb-0">End Date
                                                </label>
                                                <input type="date"
                                                    class="form-control form-control-solid form-control-sm"
                                                    name="end_date" value="{{ $event->end_date }}"
                                                    id="validationCustom01" placeholder="e.g: 12:56" required>
                                                <div class="invalid-feedback"> Please Enter End Date </div>
                                            </div>
                                            <div class="col-md-4 mb-2">
                                                <label for="validationCustom01" class="form-label required mb-0">Start
                                                    Time
                                                </label>
                                                <input type="time"
                                                    class="form-control form-control-solid form-control-sm"
                                                    name="start_time" value="{{ $event->start_time }}"
                                                    id="validationCustom01" placeholder="Enter Start Time" required>
                                                <div class="invalid-feedback"> Please Enter Start Time </div>
                                            </div>
                                            <div class="col-md-4 mb-2">
                                                <label for="validationCustom01" class="form-label required mb-0">End Time
                                                </label>
                                                <input type="time"
                                                    class="form-control form-control-solid form-control-sm"
                                                    name="end_time" value="{{ $event->end_time }}"
                                                    id="validationCustom01" placeholder="Enter End Time" required>
                                                <div class="invalid-feedback"> Please Enter End Time </div>
                                            </div>
                                            <div class="col-md-4 mb-2">
                                                <label for="validationCustom04"
                                                    class="form-label required mb-0">Status</label>
                                                <select class="form-select-sm form-select form-select-solid"
                                                    name="status"
                                                    data-dropdown-parent="#eventsEditModal_{{ $event->id }}"
                                                    data-control="select2" data-placeholder="Select an option"
                                                    data-hide-search="true" data-allow-clear="true" required>
                                                    <option></option>
                                                    <option @selected($event->status == 'active') value="active">Active</option>
                                                    <option @selected($event->status == 'inactive') value="inactive">Inactive</option>
                                                </select>
                                                <div class="invalid-feedback"> Please Select Status. </div>
                                            </div>
                                            <div class="col-md-12 mb-2">
                                                <label for="validationCustom010"
                                                    class="form-label required mb-0">Description</label>
                                                <textarea rows="1" name="description" class="form-control form-control-sm form-control-solid"
                                                    placeholder="Enter Description" required>{{ $event->description }}</textarea>
                                                <div class="invalid-feedback"> Please Enter description</div>
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
    @foreach ($events as $event)
        <div class="modal fade" id="eventsViewModal_{{ $event->id }}" data-backdrop="static">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content rounded-0 border-0 shadow-sm">
                    <div class="modal-header p-2 rounded-0">
                        <h5 class="modal-title ps-5">View Events</h5>
                        <!-- Close button in the header -->
                        <div class="btn btn-icon btn-sm btn-active-light-primary ms-2" data-bs-dismiss="modal"
                            aria-label="Close">
                            <i class="fa-solid fa-circle-xmark"></i>
                        </div>
                    </div>
                    <div class="modal-body">
                        <div class="container px-0">
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="card border rounded-0">
                                        <p class="badge badge-info custom-badge">Info</span>
                                        <div class="card-body p-1 px-2">
                                            <div class="row">
                                                <div class="col-lg-12">
                                                    <div class="row">
                                                        <div class="col-lg-3 col-sm-5">
                                                            <p class="fw-bold" title="Country Name">Title :</p>
                                                        </div>
                                                        <div class="col-lg-9 col-sm-6">
                                                            <p>{{ $event->title }}
                                                            </p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-6">
                                                    <div class="row">
                                                        <div class="col-lg-6 col-sm-5">
                                                            <p class="fw-bold">Start Date :</p>
                                                        </div>
                                                        <div class="col-lg-5 col-sm-6">
                                                            <p>{{ $event->start_date }}
                                                            </p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-6">
                                                    <div class="row">
                                                        <div class="col-lg-6 col-sm-5">
                                                            <p class="fw-bold">Start Time :</p>
                                                        </div>
                                                        <div class="col-lg-6 col-sm-6">
                                                            <p>
                                                                {{ $event->start_time }}
                                                            </p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-6">
                                                    <div class="row">
                                                        <div class="col-lg-6 col-sm-5">
                                                            <p class="fw-bold">Status :</p>
                                                        </div>
                                                        <div class="col-lg-6 col-sm-6">
                                                            <p>
                                                                <span
                                                                    class="badge {{ $event->status == 'active' ? 'bg-success' : 'bg-danger' }}">{{ $event->status }}</span>
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
