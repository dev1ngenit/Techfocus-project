@extends('admin.master')
@section('content')
    <div class="container-fluid h-100">
        <div class="row">
            <div class="col-lg-12 card rounded-0 shadow-lg">
                <div class="card card-p-0 card-flush">
                    <div class="card-header align-items-center pt-2 pb-1 gap-2 gap-md-5">
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

                                </div>
                                <div class="col-lg-4 col-sm-12 text-lg-center text-sm-center">
                                    <div class="card-title table_title">
                                        <h2 class="mb-0">Employees</h2>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-sm-12 text-lg-end text-sm-center">
                                    <button type="button" class="btn btn-sm btn-light-success rounded-0"
                                        data-kt-menu-placement="bottom-end" data-bs-toggle="modal"
                                        data-bs-target="#adminAddModal">
                                        Add New
                                    </button>
                                    <!--end::Export dropdown-->
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <table class="table table-striped table-hover align-middle rounded-0 table-row-bordered border fs-6"
                            id="kt_datatable_example">
                            <thead class="table_header_bg">
                                <!--begin::Table row-->
                                <tr class="text-center text-gray-900 fw-bolder fs-9 text-uppercase">
                                    <th class="ps-0" width="10%">Image</th>
                                    <th class="ps-0" width="30%">Name</th>
                                    <th class="ps-0" width="10%">Designation</th>
                                    <th class="ps-0" width="20%">Department</th>
                                    <th class="ps-0" width="15%">Roles</th>
                                    <th class="ps-0" width="5%">
                                        <span class="text-center" title="Employment Form">Form</span>
                                    </th>
                                    <th class="ps-0" width="10%">Action</th>
                                </tr>
                                <!--end::Table row-->
                            </thead>
                            <tbody class="fw-bold text-gray-600 text-center">
                                @if ($admins)
                                    @foreach ($admins as $admin)
                                        <tr class="odd">
                                            <td>
                                                <img class="img-fluid" width="50px"
                                                    src="{{ !empty($admin->logo) && file_exists(public_path('storage/brand/logo/requestImg/' . $admin->logo)) ? asset('storage/brand/logo/requestImg/' . $admin->logo) : asset('backend/images/no-image-available.png') }}"
                                                    alt="{{ $admin->name }}">
                                            </td>

                                            <td>{{ $admin->name }}</td>
                                            <td>{{ $admin->designation }}</td>
                                            <td>
                                                @if (is_array(json_decode($admin->department)))
                                                    @foreach (json_decode($admin->department) as $department)
                                                        <span class="badge bg-success">{{ ucfirst($department) }}</span>
                                                    @endforeach
                                                @else
                                                    <span class="badge bg-success">{{ ucfirst($admin->department) }}</span>
                                                @endif
                                            </td>
                                            <td>{{ $admin->name }}</td>
                                            <td>
                                                <div class="d-flex justify-content-center align-items-center">
                                                    <a href="{{ route('admin.employee.create') }}"
                                                        class="btn btn-icon btn-bg-light btn-active-color-primary btn-sm me-1">
                                                        <i class="fa-solid fa-plus text-primary"></i>
                                                    </a>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="d-flex justify-content-between align-items-center">
                                                    {{-- <a href="#"
                                                        class="btn btn-icon btn-bg-light btn-active-color-primary btn-sm me-1"
                                                        data-bs-toggle="modal"
                                                        data-bs-target="#adminViewModal_{{ $admin->id }}">
                                                        <i class="fa-solid fa-expand"></i>
                                                    </a> --}}
                                                    <a href="#"
                                                        class="btn btn-icon btn-bg-light btn-active-color-primary btn-sm me-1"
                                                        data-bs-toggle="modal"
                                                        data-bs-target="#adminEditModal-{{ $admin->id }}">
                                                        <i class="fa-solid fa-pen"></i>
                                                        <!--Edit-->
                                                    </a>
                                                    <a href="{{ route('admin.employee.destroy', $admin->id) }}"
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
    {{-- Add Modal --}}
    <div class="modal fade" id="adminAddModal" data-backdrop="static">
        <div class="modal-dialog modal-xl">
            <div class="modal-content rounded-0 border-0 shadow-sm">
                <div class="modal-header p-2 px-4 rounded-0">
                    <h5 class="modal-title">Add Employee Account</h5>
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
                <form method="POST" action="{{ route('admin.employee.store') }}" class="needs-validation" novalidate
                    enctype="multipart/form-data">
                    @csrf
                    <div class="modal-body">
                        <div class="container-fluid">
                            <div class="row">
                                <div class="col-lg-4">
                                    <div class="mb-4">
                                        <label class="form-label" for="basicpill-firstname-input">Full Name</label>
                                        <input type="text" maxlength="80" class="form-control form-control-sm"
                                            placeholder="Enter Employees Name" name="name"
                                            value="{{ old('name') }}" />
                                    </div>
                                </div>
                                <div class="col-lg-3">
                                    <div class="mb-4">
                                        <label class="form-label" for="basicpill-email-input">Designation</label>
                                        <input maxlength="50" type="text" class="form-control form-control-sm"
                                            placeholder="Enter Employees Designation" name="designation"
                                            value="{{ old('designation') }}" />
                                    </div>
                                </div>
                                <div class="col-lg-5">
                                    <div class="mb-4">
                                        <label class="form-label" for="basicpill-email-input">Email</label>
                                        <input type="email" class="form-control form-control-sm"
                                            placeholder="Enter Email ID" name="email" value="{{ old('email') }}" />
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-lg-4">
                                    <div class="mb-4">
                                        <label class="form-label" for="basicpill-phoneno-input">Phone</label>
                                        <input maxlength="15" type="text"
                                            class="form-control form-control-sm allow_decimal"
                                            placeholder="Enter Phone Number" name="phone"
                                            value="{{ old('phone') }}" />
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="mb-4">
                                        <label class="form-label" for="basicpill-email-input">Job Category</label>
                                        <select name="employee_category_id" class="form-select form-select-sm form-select-solid"
                                            data-control="select2" data-placeholder="Select an option"
                                            data-allow-clear="true">
                                            <option></option>
                                            @foreach ($employeeCategories as $employeeCategory)
                                                <option value="{{ $employeeCategory->id }}">
                                                    {{ $employeeCategory->name }}
                                                </option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="mb-1">
                                        <label class="form-label" for="basicpill-phoneno-input">Employee Code (Biometric ID)</label>
                                        <input type="text" class="form-control form-control-sm allow_decimal"
                                            placeholder="Employee Code (Biometric ID)" name="employee_id" maxlength="15"
                                            value="{{ old('employee_id') }}" />
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-lg-4">
                                    <div class="mb-4">
                                        <label class="form-label" for="basicpill-firstname-input">City</label>
                                        <input type="text" maxlength="50" class="form-control form-control-sm"
                                            placeholder="Enter City" name="city" value="{{ old('city') }}" />
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="mb-4">
                                        <label class="form-label" for="basicpill-firstname-input">Department</label>
                                        <select name="department[]" class="form-control-sm multiselect btn btn-sm"
                                            id="select6" multiple="multiple" data-include-select-all-option="true"
                                            data-placeholder="Chose Sector" data-enable-filtering="true"
                                            data-enable-case-insensitive-filtering="true" required>

                                            <option value="admin">Admin</option>
                                            <option value="business">Business</option>
                                            <option value="accounts">Accounts</option>
                                            <option value="site">Site & Contents</option>
                                            <option value="logistics">Logistics</option>
                                            <option value="support">Support</option>
                                        </select>

                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="mb-4">
                                        <label class="form-label required" for="basicpill-firstname-input">Role</label>
                                        <select name="role" class="form-select form-select-sm form-select-solid"
                                        data-control="select2" data-placeholder="Select a Role" data-allow-clear="true" required>
                                            <option value="admin">Admin</option>
                                            <option value="manager">Manager</option>
                                            <option value="others">Others</option>
                                            <option value="developer">Support Developer</option>
                                        </select>
                                    </div>
                                </div>


                            </div>
                            <div class="row">
                                <div class="col-lg-4">
                                    <div class="mb-4">
                                        <label class="form-label required" for="basicpill-firstname-input">Supervisor</label>
                                        <select name="supervisor_id" class="form-select form-select-sm form-select-solid"
                                            data-control="select2" data-placeholder="Select an option"
                                            data-allow-clear="true" required>
                                            <option></option>
                                            @foreach ($admins as $supervisor)
                                                <option value="{{ $supervisor->id }}">
                                                    {{ $supervisor->name }}
                                                </option>
                                            @endforeach
                                        </select>
                                        <div class="invalid-feedback"> Please Enter Supervisor.</div>
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="mb-4">
                                        <label class="form-label" for="basicpill-firstname-input">Profile
                                            Picture</label>
                                        <input id="image1" type="file" class="form-control form-control-sm"
                                            id="basicpill-firstname-input" name="photo" />
                                        {{-- <img id="showImage" src="{{ url('upload/no_image.jpg') }}" alt="Admin" style="width:40px; height: 40px;"/> --}}
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="mb-4">
                                        <label class="form-label" for="basicpill-firstname-input">Sign</label>
                                        <div class="row"></div>
                                        <input id="image" type="file" class="form-control form-control-sm"
                                            id="basicpill-firstname-input" name="sign" />
                                        {{-- <img id="showImage" src="{{ url('upload/no_image.jpg') }}" alt="Admin" style="width:40px; height: 40px;"/> --}}
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="mb-4">
                                        <label class="form-label" for="basicpill-firstname-input">Password</label>
                                        <input type="password" class="form-control form-control-sm" id="password"
                                            name="password">
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="mb-4">
                                        <label class="form-label" for="basicpill-firstname-input">Confirm
                                            Password</label>
                                        <input type="password" class="form-control form-control-sm" id="confirm_password"
                                            name="confirm_password">
                                        <div id="message"></div>
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
    @foreach ($admins as $admin)
        <div class="modal fade" id="adminEditModal-{{ $admin->id }}" data-backdrop="static">
            <div class="modal-dialog modal-xl">
                <div class="modal-content rounded-0 border-0 shadow-sm">
                    <div class="modal-header p-2 px-4 rounded-0">
                        <h5 class="modal-title">Edit Employee</h5>
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
                    <form method="POST" action="{{ route('admin.employee.update', $admin->id) }}"
                        class="needs-validation" novalidate enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="modal-body">
                            <div class="container px-0">
                                <div class="row">
                                    <div class="col-lg-4">
                                        <div class="mb-1">
                                            <label class="form-label" for="basicpill-firstname-input">Full
                                                Name</label>
                                            <input type="text" maxlength="80" class="form-control form-control-sm"
                                                placeholder="Enter Employees Name" name="name"
                                                value="{{ $admin->name }}" />
                                        </div>
                                    </div>
                                    <div class="col-lg-3">
                                        <div class="mb-1">
                                            <label class="form-label" for="basicpill-email-input">Designation</label>
                                            <input maxlength="50" type="text" class="form-control form-control-sm"
                                                placeholder="Enter Employees Designation" name="designation"
                                                value="{{ $admin->designation }}" />
                                        </div>
                                    </div>
                                    <div class="col-lg-5">
                                        <div class="mb-1">
                                            <label class="form-label" for="basicpill-email-input">Email</label>
                                            <input type="email" class="form-control form-control-sm"
                                                placeholder="Enter Email ID" name="email"
                                                value="{{ $admin->email }}" />
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-lg-4">
                                        <div class="mb-1">
                                            <label class="form-label" for="basicpill-phoneno-input">Phone</label>
                                            <input maxlength="15" type="text"
                                                class="form-control form-control-sm allow_decimal"
                                                placeholder="Enter Phone Number" name="phone"
                                                value="{{ $admin->phone }}" />
                                        </div>
                                    </div>
                                    <div class="col-lg-4">
                                        <div class="mb-4">
                                            <label class="form-label" for="basicpill-email-input">Job Category</label>
                                            <select name="employee_category_id" class="form-select form-select-sm form-select-solid"
                                                data-control="select2" data-placeholder="Select an option"
                                                data-allow-clear="true">
                                                @foreach ($employeeCategories as $employeeCategory)
                                                    <option value="{{ $employeeCategory->id }}" @selected($admin->employee_category_id == $employeeCategory->id)>
                                                        {{ $employeeCategory->name }}
                                                    </option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-lg-4">
                                        <div class="mb-1">
                                            <label class="form-label" for="basicpill-phoneno-input">Employee Code (Biometric ID)</label>
                                            <input type="text" class="form-control form-control-sm allow_decimal"
                                                placeholder="Employee Code (Biometric ID)" name="employee_id" maxlength="15"
                                                value="{{ $admin->employee_id }}" />
                                        </div>
                                    </div>
                                    
                                </div>

                                <div class="row">
                                    <div class="col-lg-4">
                                        <div class="mb-1">
                                            <label class="form-label" for="basicpill-firstname-input">City</label>
                                            <input type="text" maxlength="50" class="form-control form-control-sm"
                                                placeholder="Enter City" name="city" value="{{ $admin->city }}" />
                                        </div>
                                    </div>
                                    <div class="col-lg-4">
                                        <div class="mb-1">
                                            <label class="form-label" for="basicpill-firstname-input">Department</label>

                                            <select name="department[]" class="form-control-sm multiselect btn btn-sm"
                                                id="select6" multiple="multiple" data-include-select-all-option="true"
                                                data-placeholder="Chose Sector" data-enable-filtering="true"
                                                data-enable-case-insensitive-filtering="true" required>
                                                @php
                                                    $adminDepartment = isset($admin->department) ? json_decode($admin->department, true) : [];
                                                    $adminRole = isset($admin->role) ? json_decode($admin->role, true) : [];
                                                @endphp
                                                <option value="admin" @selected(is_array($adminDepartment) && in_array('admin', $adminDepartment))>Admin</option>
                                                <option value="business" @selected(is_array($adminDepartment) && in_array('business', $adminDepartment))>Business</option>
                                                <option value="accounts" @selected(is_array($adminDepartment) && in_array('accounts', $adminDepartment))>Accounts</option>
                                                <option value="site" @selected(is_array($adminDepartment) && in_array('site', $adminDepartment))>Site & Contents
                                                </option>
                                                <option value="logistics" @selected(is_array($adminDepartment) && in_array('logistics', $adminDepartment))>Logistics
                                                </option>
                                                <option value="support" @selected(is_array($adminDepartment) && in_array('support', $adminDepartment))>Support
                                                </option>
                                            </select>

                                        </div>
                                    </div>
                                    <div class="col-lg-4">
                                        <div class="mb-1">
                                            <label class="form-label required" for="basicpill-firstname-input">Role</label>
                                            <select name="role" class="form-select form-select-sm form-select-solid"
                                            data-control="select2" data-placeholder="Select a Role" data-allow-clear="true" required>
                                                <option value="admin" @selected(is_array($adminRole) && in_array('admin', $adminRole))>Admin</option>
                                                <option value="manager" @selected(is_array($adminRole) && in_array('manager', $adminRole))>Manager</option>
                                                <option value="others" @selected(is_array($adminRole) && in_array('others', $adminRole))>Others</option>
                                                <option value="developer" @selected(is_array($adminRole) && in_array('developer', $adminRole))>Support Developer
                                                </option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-4">
                                        <div class="mb-4">
                                            <label class="form-label required" for="basicpill-firstname-input">Supervisor</label>
                                            <select name="supervisor_id" class="form-select form-select-sm form-select-solid"
                                                data-control="select2" data-placeholder="Select a Supervisor" data-allow-clear="true" required>
                                                <option></option>
                                                @foreach ($admins as $supervisor)
                                                    <option value="{{ $supervisor->id }}" @selected($admin->supervisor_id == $supervisor->id)>
                                                        {{ $supervisor->name }}
                                                    </option>
                                                @endforeach
                                            </select>
                                            <div class="invalid-feedback"> Please Enter Supervisor.</div>
                                        </div>
                                    </div>
                                    <div class="col-lg-4">
                                        <div class="mb-1">
                                            <label class="form-label" for="basicpill-firstname-input">Profile
                                                Picture</label>
                                            <div class="row"></div>
                                            <input id="image" type="file" class="form-control form-control-sm"
                                                id="basicpill-firstname-input" name="photo" />
                                            {{-- <img id="showImage" src="{{ url('upload/no_image.jpg') }}" alt="Admin" style="width:40px; height: 40px;"/> --}}
                                        </div>
                                    </div>
                                    <div class="col-lg-4">
                                        <div class="mb-4">
                                            <label class="form-label" for="basicpill-firstname-input">Sign</label>
                                            <div class="row"></div>
                                            <input id="image" type="file" class="form-control form-control-sm"
                                                id="basicpill-firstname-input" name="sign" />
                                            {{-- <img id="showImage" src="{{ url('upload/no_image.jpg') }}" alt="Admin" style="width:40px; height: 40px;"/> --}}
                                        </div>
                                    </div>
                                    <div class="col-lg-4">
                                        <div class="mb-1">
                                            <label class="form-label" for="basicpill-firstname-input">Password</label>
                                            <input type="password" class="form-control form-control-sm" id="password"
                                                name="password">
                                        </div>
                                    </div>
                                    <div class="col-lg-4">
                                        <div class="mb-1">
                                            <label class="form-label" for="basicpill-firstname-input">Confirm
                                                Password</label>
                                            <input type="password" class="form-control form-control-sm"
                                                id="confirm_password" name="confirm_password">
                                            <div id="message"></div>
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

        <div class="modal fade" id="adminViewModal_{{ $admin->id }}" data-backdrop="static">
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
                                                            <p>{{ $admin->name }}</p>
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
                                                                    src="{{ !empty($admin->image) && file_exists(public_path('storage/brand/image/requestImg/' . $admin->image)) ? asset('storage/brand/image/requestImg/' . $admin->image) : asset('backend/images/no-image-available.png') }}"
                                                                    alt="{{ $admin->image }}">
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
                                                                <img class="img-fluid rounded-circle" width="35px"
                                                                    src="{{ !empty($admin->logo) && file_exists(public_path('storage/brand/logo/requestImg/' . $admin->logo)) ? asset('storage/brand/image/requestImg/' . $admin->logo) : asset('backend/images/no-image-available.png') }}"
                                                                    alt="{{ $admin->logo }}">
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
                                                                {{ $admin->description }}
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
                                                                <a href="{{ $admin->website_url }}">{{ $admin->website_url }}
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
@endpush
