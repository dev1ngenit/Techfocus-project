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
                                    <h2 class="text-center">Dynamic Site</h2>
                                </div>
                            </div>
                            <div class="col-lg-4 col-sm-12 text-lg-end text-sm-center">
                                <a href="{{ route('admin.dynamic-site.create') }}" type="button"
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
                                <th width="5%">Sl</th>
                                <th width="25%">Name</th>
                                <th width="40%">Custom URL</th>
                                <th width="10%">Logo</th>
                                <th class="text-center" width="10%">Action</th>
                        </thead>
                        <tbody class="fw-bold text-gray-600 text-center">
                            <tr class="odd">
                                <td>1</td>
                                <td>Testing Name</td>
                                <td>http://127.0.0.1:8000/administrator/dynamic-site</td>
                                <td>
                                    {{-- <img class="img-fluid" width="50px"
                                        src="{{ !empty($brand->logo) && file_exists(public_path('storage/brand/logo/' . $brand->logo)) ? asset('storage/brand/logo/' . $brand->logo) : asset('backend/images/no-image-available.png') }}"
                                        alt="{{ $brand->name }} Logo"> --}}
                                    <img class="img-fluid rounded-circle" width="50" height="50" 
                                        src="https://upload.wikimedia.org/wikipedia/commons/thumb/a/ac/No_image_available.svg/2048px-No_image_available.svg.png"
                                        alt=" Logo">
                                </td>
                                <td>
                                    <div class="d-flex justify-content-between align-items-center">
                                        <a href="{{ route('admin.dynamic-site.create') }}"
                                            class="btn btn-icon btn-bg-light btn-active-color-primary btn-sm me-1">
                                            <i class="fa-solid fa-pen"></i>
                                        </a>
                                        <a href="{{ route('admin.dynamic-site.create') }}"
                                            class="btn btn-icon btn-bg-light btn-active-color-primary btn-sm me-1 delete"
                                            data-kt-docs-table-filter="delete_row">
                                            <i class="fa-solid fa-trash-can-arrow-up"></i>
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