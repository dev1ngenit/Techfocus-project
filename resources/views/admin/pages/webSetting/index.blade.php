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
                                        <h2>SMTPS</h2>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-sm-12 text-lg-end text-sm-center">
                                    <!--begin::Export dropdown-->
                                    
                                    <button type="button" class="btn btn-sm btn-light-success rounded-0"
                                        data-kt-menu-placement="bottom-end" data-bs-toggle="modal"
                                        data-bs-target="#smtpsEditModal_{{ optional($smtp)->id }}">
                                        Add New
                                    </button>
                                    
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
                                    <th width="25%">Host</th>
                                    <th width="10%">Port</th>
                                    <th width="10%">User Name</th>
                                    <th width="10%">Status</th>
                                    <th class="text-center" width="10%">Action</th>
                                    <!--end::Table row-->
                            </thead>
                            <tbody class="fw-bold text-gray-600 text-center">
                                @if ($smtp)
                                    <tr class="odd">
                                        <td>{{ optional($smtp)->id }}</td>
                                        <td>{{ optional($smtp)->host }}</td>
                                        <td>{{ optional($smtp)->port }}</td>
                                        <td>{{ optional($smtp)->username }}</td>
                                        <td>
                                            <span
                                                class="badge badge-{{ optional($smtp)->status == 'active' ? 'success' : 'danger' }}">
                                                {{ ucfirst(optional($smtp)->status) }}
                                            </span>
                                        </td>
                                        <td class="d-flex justify-content-between align-items-center">
                                            <a href="#"
                                                class="btn btn-icon btn-bg-light btn-active-color-primary btn-sm me-1"
                                                data-bs-toggle="modal"
                                                data-bs-target="#smtpViewModal_{{ $smtp->id }}">
                                                <i class="fa-solid fa-expand"></i>
                                                <!--View-->
                                            </a>
                                            <a href="#"
                                                class="btn btn-icon btn-bg-light btn-active-color-primary btn-sm me-1"
                                                data-bs-toggle="modal"
                                                data-bs-target="#smtpsEditModal_{{ $smtp->id }}">
                                                <i class="fa-solid fa-pen"></i>
                                                <!--Edit-->
                                            </a>
                                        </td>
                                    </tr>
                                @endif
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    {{-- Edit Modal --}}
        <div class="modal fade" id="smtpsEditModal_{{ optional($smtp)->id }}" data-backdrop="static">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content rounded-0 border-0 shadow-sm">
                    <div class="modal-header p-2 rounded-0">
                        <h5 class="modal-title">Edit SMTPS</h5>
                        <!-- Close button in the header -->
                        <div class="btn btn-icon btn-sm btn-active-light-primary ms-2" data-bs-dismiss="modal"
                            aria-label="Close">
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
                    <form action="{{ route('admin.smtp.setting', optional($smtp)->id) }}" class="needs-validation" method="post"
                        novalidate>
                        @csrf
                        @method('PUT')
                        <div class="modal-body">
                            <div class="container px-0">
                                <div class="row modal_body_badge">
                                    <div class="col-lg-12 col-sm-12">
                                        <div class="card border rounded-0 mt-3">
                                            <p class="badge badge-info custom-badge">Info</span>
                                            <div class="card-body p-1 px-2">
                                                <div class="row modal_body_badge">
                                                    <div class="col-md-4 mb-1">
                                                        <label for="validationCustom01"
                                                            class="form-label required ">Host</label>
                                                        <input type="text"
                                                            class="form-control form-control-solid form-control-sm"
                                                            name="host" value="{{ optional($smtp)->host }}"
                                                            id="validationCustom01" placeholder="Enter Host" required>
                                                        <div class="valid-feedback"> Looks good! </div>
                                                        <div class="invalid-feedback"> Please Enter Host</div>
                                                    </div>
                                                    <div class="col-md-4 mb-1">
                                                        <label for="validationCustom01"
                                                            class="form-label required ">Port</label>
                                                        <input type="text"
                                                            class="form-control form-control-solid form-control-sm"
                                                            name="port" value="{{ optional($smtp)->port }}"
                                                            id="validationCustom01" placeholder="Enter Port" required>
                                                        <div class="valid-feedback"> Looks good! </div>
                                                        <div class="invalid-feedback"> Please Enter Port</div>
                                                    </div>
                                                    <div class="col-md-4 mb-1">
                                                        <label for="validationCustom01"
                                                            class="form-label required ">Encryption</label>
                                                        <input type="text"
                                                            class="form-control form-control-solid form-control-sm"
                                                            name="encryption" value="{{ optional($smtp)->encryption }}"
                                                            id="validationCustom01" placeholder="Enter Encryption" required>
                                                        <div class="valid-feedback"> Looks good! </div>
                                                        <div class="invalid-feedback"> Please Enter Encryption</div>
                                                    </div>
                                                    <div class="col-md-4 mb-1">
                                                        <label for="validationCustom01" class="form-label required ">User
                                                            Name</label>
                                                        <input type="text"
                                                            class="form-control form-control-solid form-control-sm"
                                                            name="username" value="{{ optional($smtp)->username }}"
                                                            id="validationCustom01" placeholder="Enter User Name" required>
                                                        <div class="valid-feedback"> Looks good! </div>
                                                        <div class="invalid-feedback"> Please Enter User Name</div>
                                                    </div>
                                                    <div class="col-md-4 mb-1">
                                                        <label for="validationCustom01"
                                                            class="form-label required ">Password</label>
                                                        <input type="text"
                                                            class="form-control form-control-solid form-control-sm"
                                                            name="password" value="{{ optional($smtp)->password }}"
                                                            id="validationCustom01" placeholder="Enter Password" required>
                                                        <div class="valid-feedback"> Looks good! </div>
                                                        <div class="invalid-feedback"> Please Enter Password</div>
                                                    </div>
                                                    <div class="col-md-4 mb-1">
                                                        <label for="validationCustom01" class="form-label required ">From
                                                            Address</label>
                                                        <input type="text"
                                                            class="form-control form-control-solid form-control-sm"
                                                            name="from_address" value="{{ optional($smtp)->from_address }}"
                                                            id="validationCustom01" placeholder="Enter From Address" required>
                                                        <div class="valid-feedback"> Looks good! </div>
                                                        <div class="invalid-feedback"> Please Enter From Address</div>
                                                    </div>
                                                    <div class="col-md-4 mb-1">
                                                        <label for="validationCustom01" class="form-label required ">From
                                                            Name</label>
                                                        <input type="text"
                                                            class="form-control form-control-solid form-control-sm"
                                                            name="from_name" value="{{ optional($smtp)->from_name }}"
                                                            id="validationCustom01" placeholder="Enter From Name" required>
                                                        <div class="valid-feedback"> Looks good! </div>
                                                        <div class="invalid-feedback"> Please Enter From Name</div>
                                                    </div>
                                                    <div class="col-md-4 mb-1">
                                                        <label for="validationCustom01" class="form-label">Sender
                                                            Email</label>
                                                        <input type="text"
                                                            class="form-control form-control-solid form-control-sm"
                                                            name="sender_email" value="{{ optional($smtp)->sender_email }}"
                                                            id="validationCustom01" placeholder="Enter Sender Email">
                                                    </div>
                                                    <div class="col-md-4 mb-1">
                                                        <label for="validationCustom01" class="form-label">Sender
                                                            Name</label>
                                                        <input type="text"
                                                            class="form-control form-control-solid form-control-sm"
                                                            name="sender_name" value="{{ optional($smtp)->sender_name }}"
                                                            id="validationCustom01" placeholder="Enter Sender Name">
                                                    </div>
                                                    <div class="col-md-4">
                                                        <label for="validationCustom04"
                                                            class="form-label required">Status</label>
                                                        <select class="form-select form-select-sm form-select-solid"
                                                            name="status" data-dropdown-parent="#smtpsEditModal_{{ optional($smtp)->id }}"
                                                            data-control="select2" data-hide-search="true"
                                                            data-placeholder="Select an status" data-allow-clear="true"
                                                            required>
                                                            <option></option>
                                                            <option @selected(optional($smtp)->status == 'active') value="active">Active</option>
                                                            <option @selected(optional($smtp)->status == 'inactive') value="inactive">Inactive
                                                            </option>
                                                        </select>
                                                        <div class="valid-feedback"> Looks good! </div>
                                                        <div class="invalid-feedback"> Please provide a Status. </div>
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
    {{-- View Modal --}}
    {{-- @if (!empty(optional($smtp)->id))  --}}
        <div class="modal fade" id="smtpViewModal_{{ optional($smtp)->id }}" data-backdrop="static">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content rounded-0 border-0 shadow-sm">
                    <div class="modal-header p-2 rounded-0">
                        <h5 class="modal-title">Complete Information </h5>
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
                        </div>
                    </div>
                    <div class="modal-body pt-0 px-3">
                        <div class="container px-0">
                            <div class="row modal_body_badge">
                                <div class="col-lg-12">
                                    <div class="card border rounded-0">
                                        <div class="card-body p-1 px-5">
                                            <div class="row modal_body_badge">
                                                <div class="col-lg-6">
                                                    <div class="row">
                                                        <div class="col-lg-4 col-sm-5">
                                                            <p class="fw-bold">Host :</p>
                                                        </div>
                                                        <div class="col-lg-8 col-sm-7">
                                                            <p>{{ optional($smtp)->host }}</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-lg-6">
                                                    <div class="row">
                                                        <div class="col-lg-6 col-sm-5">
                                                            <p class="fw-bold">Port :</p>
                                                        </div>
                                                        <div class="col-lg-6 col-sm-6">
                                                            <p>{{ optional($smtp)->port }}</p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-6">
                                                    <div class="row">
                                                        <div class="col-lg-6 col-sm-5">
                                                            <p class="fw-bold">Encryption :</p>
                                                        </div>
                                                        <div class="col-lg-6 col-sm-6">
                                                            <p>{{ optional($smtp)->encryption }}</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-lg-6">
                                                    <div class="row">
                                                        <div class="col-lg-6 col-sm-5">
                                                            <p class="fw-bold">Username :</p>
                                                        </div>
                                                        <div class="col-lg-6 col-sm-6">
                                                            <p>{{ optional($smtp)->username }}</p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-6">
                                                    <div class="row">
                                                        <div class="col-lg-6 col-sm-5">
                                                            <p class="fw-bold">Password :</p>
                                                        </div>
                                                        <div class="col-lg-6 col-sm-6">
                                                            <p>{{ optional($smtp)->password }}</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-lg-6">
                                                    <div class="row">
                                                        <div class="col-lg-6 col-sm-5">
                                                            <p class="fw-bold" title="Form Address">For Address :</p>
                                                        </div>
                                                        <div class="col-lg-6 col-sm-6">
                                                            <p>{{ optional($smtp)->from_address }}</p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-6">
                                                    <div class="row">
                                                        <div class="col-lg-6 col-sm-5">
                                                            <p class="fw-bold" title="Form Name">For Name :</p>
                                                        </div>
                                                        <div class="col-lg-6 col-sm-6">
                                                            <p>{{ optional($smtp)->from_name }}</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-lg-6">
                                                    <div class="row">
                                                        <div class="col-lg-6 col-sm-5">
                                                            <p class="fw-bold">Status :</p>
                                                        </div>
                                                        <div class="col-lg-6 col-sm-6">
                                                            <p>{{ optional($smtp)->status }}</p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-6">
                                                    <div class="row">
                                                        <div class="col-lg-6 col-sm-5">
                                                            <p class="fw-bold" title="Sender Name">Sen Name :</p>
                                                        </div>
                                                        <div class="col-lg-6 col-sm-6">
                                                            <p>{{ optional($smtp)->sender_email }}</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-lg-4 col-sm-5">
                                                    <p class="fw-bold" title="Sender Title">Sen Email :</p>
                                                </div>
                                                <div class="col-lg-8 col-sm-6">
                                                    <p>{{ optional($smtp)->sender_name }}</p>
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
    {{-- @endif --}}
@endsection

@push('scripts')
<script>
    $(document).ready(function() {
      $('.form-select').select2();
    });
  </script>
</script>
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
                    dateRow[3].setcolors('data-order', realDate);
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
                        const exportValue = e.target.getcolors('data-kt-export');
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
