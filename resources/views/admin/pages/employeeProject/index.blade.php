@extends('admin.master')
@section('content')
    <div class="container-fluid h-100">
        <div class="row">
            <div class="col-lg-12 card rounded-0 shadow-lg">
                <div class="card card-p-0 card-flush">
                    <div class="card-header align-items-center py-5 gap-2 gap-md-5">
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
                                    <div class="card-title justify-content-center">
                                        <h2 class="text-center">Employee Project</h2>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-sm-12 text-lg-end text-sm-center">
                                    <a href="{{ route('admin.employee-project.create') }}" type="button"
                                        class="btn btn-sm btn-light-success rounded-0 p-3">
                                        Add New
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <table
                            class="table table-striped table-hover align-middle rounded-0 table-row-bordered border fs-6 g-5"
                            id="kt_datatable_example">
                            <thead class="table_header_bg">
                                <tr class="text-center text-gray-900 fw-bolder fs-7 text-uppercase">
                                    <th width="6%">Sl</th>
                                    <th width="30%">Name</th>
                                    <th width="12%">Start Date</th>
                                    <th width="12%">End Date</th>
                                    <th width="30%">Supervisor</th>
                                    <th class="text-center" width="10%">Action</th>
                            </thead>
                            <tbody class="fw-bold text-gray-600 text-center">
                                @foreach ($employeeProjects as $employeeProject)
                                    <tr class="odd">
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $employeeProject->name }}</td>
                                        <td>{{ $employeeProject->start_date }}</td>
                                        <td>{{ $employeeProject->end_date }}</td>
                                        <td>{{ $employeeProject->supervisor }}</td>
                                        <td>
                                            <div class="d-flex justify-content-between align-items-center">
                                                <a href="{{ route('admin.employee-project.edit', $employeeProject->id) }}"
                                                    class="btn btn-icon btn-bg-light btn-active-color-primary btn-sm me-1">
                                                    <i class="fa-solid fa-pen"></i>
                                                </a>
                                                <a href="{{ route('admin.employee-project.update', $employeeProject->id) }}"
                                                    class="btn btn-icon btn-bg-light btn-active-color-primary btn-sm me-1 delete"
                                                    data-kt-docs-table-filter="delete_row">
                                                    <i class="fa-solid fa-trash-can-arrow-up"></i>
                                                </a>
                                            </div>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@push('scripts')
    
@endpush
