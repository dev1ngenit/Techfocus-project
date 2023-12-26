@extends('admin.master')
@section('content')
<div class="container-fluid h-100">
    <div class="row">
        <div class="col-lg-12 card rounded-0 shadow-lg">
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
                                                rx="1" transform="rotate(45 17.0365 15.1223)" fill="currentColor">
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
                                <button data-kt-menu-placement="bottom-end" data-bs-toggle="modal"
                                    data-bs-target="#projectKpi"
                                    class="btn btn-sm btn-light-success rounded-0 p-3">
                                    Add New
                                </button>
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
                                <th width="25%">Name</th>
                                <th width="10%">Given Hour</th>
                                <th width="10%">Actual Hour</th>
                                <th width="10%">Status</th>
                                <th width="10%">Team Leader</th>
                                <th width="10%">Superviser</th>
                                <th width="10%">Kpi Ratio</th>
                                <th class="text-center" width="10%">Action</th>
                                <!--end::Table row-->
                        </thead>
                        <tbody class="fw-bold text-gray-600 text-center">
                            <tr class="odd">
                                <td>1</td>
                                <td>Your Name</td>
                                <td>5</td>
                                <td>5</td>
                                <td>
                                    <span class="badge badge-dark text-white">Done</span>
                                    <span class="badge badge-dark text-white">Partialy</span>
                                    <span class="badge badge-dark text-white">Not</span>
                                </td>
                                <td>
                                    12
                                </td>
                                <td>
                                    12
                                </td>
                                <td>
                                    12
                                </td>
                                <td>
                                    <div class="d-flex justify-content-between align-items-center">
                                        <a href="#"
                                            class="btn btn-icon btn-bg-light btn-active-color-primary btn-sm me-1">
                                            <i class="fa-solid fa-expand"></i>
                                            <!--View-->
                                        </a>
                                        <a href="#"
                                            class="btn btn-icon btn-bg-light btn-active-color-primary btn-sm me-1">
                                            <i class="fa-solid fa-pen"></i>
                                            <!--Edit-->
                                        </a>
                                        <a href=""
                                            class="btn btn-icon btn-bg-light btn-active-color-primary btn-sm me-1 delete"
                                            data-kt-docs-table-filter="delete_row">
                                            <i class="fa-solid fa-trash-can-arrow-up"></i>
                                            <!--Delete-->
                                        </a>
                                    </div>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
{{-- Add Modal --}}
<div class="modal fade" id="projectKpi" data-backdrop="static">
    <div class="modal-dialog modal-dialog-centered modal-lg">
        <div class="modal-content rounded-0 border-0 shadow-sm">
            <div class="modal-header p-2 rounded-0">
                <h5 class="modal-title">Add Project Kpi</h5>
                <!-- Close button in the header -->
                <div class="btn btn-icon btn-sm btn-active-light-primary ms-2" data-bs-dismiss="modal"
                    aria-label="Close">
                    <!--begin::Svg Icon | path: icons/duotune/arrows/arr061.svg-->
                    <span class="svg-icon svg-icon-2x">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                            <rect opacity="0.5" x="6" y="17.3137" width="16" height="2" rx="1"
                                transform="rotate(-45 6 17.3137)" fill="currentColor"></rect>
                            <rect x="7.41422" y="6" width="16" height="2" rx="1" transform="rotate(45 7.41422 6)"
                                fill="currentColor"></rect>
                        </svg>
                    </span>
                    <!--end::Svg Icon-->
                </div>
                <!-- End Close button in the header -->
            </div>
            <form action="{{ route('admin.project-kpi.store') }}" class="needs-validation" method="post"
                novalidate>
                @csrf
                <div class="modal-body">
                    <div class="container px-0">
                        <div class="row">
                            <div class="col-md-6">
                                <label for="validationCustom04" class="form-label">Project Name</label>
                                <select class="form-select form-select-solid form-select-sm" name="
                                    project_id" data-dropdown-parent="#projectKpi" data-control="select2"
                                    data-placeholder="Select an option" data-allow-clear="true">
                                    <option value="1">Option 1</option>
                                    <option value="2">Option 2</option>
                                </select>
                            </div>
                            <div class="col-md-6">
                                <label for="validationCustom04" class="form-label">Employee Name</label>
                                <select class="form-select form-select-solid form-select-sm" name="employee_id"
                                    data-dropdown-parent="#projectKpi" data-control="select2"
                                    data-placeholder="Select an Employee Name" data-allow-clear="true">
                                    <option></option>
                                    <option value="1">Option 1</option>
                                    <option value="2">Option 2</option>
                                </select>
                            </div>
                            <div class="col-md-6">
                                <label for="validationCustom04" class="form-label">Name</label>
                                <input type="text" class="form-control form-control-solid form-control-sm" name="name"
                                    id="validationCustom01" placeholder="Enter Your Name">
                            </div>
                            <div class="col-md-6">
                                <label for="validationCustom04" class="form-label">Given Hour</label>
                                <input type="number" step="0.01" class="form-control form-control-solid form-control-sm"
                                    name="given_hour" id="validationCustom01" placeholder="Enter Your Given Hour">
                            </div>
                            <div class="col-md-6">
                                <label for="validationCustom04" class="form-label">Actual Hour</label>
                                <input type="number" step="0.01" class="form-control form-control-solid form-control-sm"
                                    name="actual_hour" id="validationCustom01" placeholder="Enter Your Actual Hour">
                            </div>
                            <div class="col-md-6">
                                <label for="validationCustom04" class="form-label">Status</label>
                                <select class="form-select form-select-solid form-select-sm" name="status"
                                    data-dropdown-parent="#projectKpi" data-control="select2"
                                    data-placeholder="Select an option" data-allow-clear="true">
                                    <option value="done">Done</option>
                                    <option value="not_done">Not Done</option>
                                    <option value="partial_done">Partial Done</option>
                                </select>
                            </div>
                            <div class="col-md-4">
                                <label for="validationCustom04" class="form-label">Team Leader Rating</label>
                                <input type="number" step="0.01" class="form-control form-control-solid form-control-sm"
                                    name="team_leader_rating" id="validationCustom01"
                                    placeholder="Enter Your Team Leader Rating">
                            </div>
                            <div class="col-md-4">
                                <label for="validationCustom04" class="form-label">Supervisor Rating</label>
                                <input type="number" step="0.01" class="form-control form-control-solid form-control-sm "
                                    name="supervisor_rating" id="validationCustom01"
                                    placeholder="Enter Your Supervisor Rating">
                            </div>
                            <div class="col-md-4">
                                <label for="validationCustom04" class="form-label">Kpi Ratio</label>
                                <input type="number" step="0.01" class="form-control form-control-solid form-control-sm "
                                    name="kpi_ratio" id="validationCustom01" placeholder="Enter Your Kpi Ratio">
                            </div>
                            <div class="col-md-6 mt-2">
                                <label for="validationCustom04" class="form-label">Late Reason</label>
                                <textarea class="form-control form-control-solid form-control-sm" name="late_reason"
                                    placeholder="Enter Late Reason" id="" cols="30" rows="3"></textarea>
                            </div>
                            <div class="col-md-6 mt-2">
                                <label for="validationCustom04" class="form-label">Comments</label>
                                <textarea class="form-control form-control-solid form-control-sm" name="comments"
                                    placeholder="Enter Comments" id="" cols="30" rows="3"></textarea>
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