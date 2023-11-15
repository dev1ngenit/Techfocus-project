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
                                        <h2 class="">Attribute</h2>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-sm-12 text-lg-end text-sm-center">
                                    <!--begin::Export dropdown-->

                                    <button type="button" class="btn btn-sm btn-light-success rounded-0"
                                        data-kt-menu-placement="bottom-end" data-bs-toggle="modal"
                                        data-bs-target="#AttributeAddModal">
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
                                    <th width="25%">Name</th>
                                    <th width="60%">Value</th>
                                    <th width="10%">Action</th>
                                    <!--end::Table row-->
                            </thead>
                            <tbody class="fw-bold text-gray-600 text-center">
                                @foreach ($attributes as $key => $attribute)
                                    <tr>
                                        <td>
                                            {{ ++$key }}
                                        </td>
                                        <td>
                                            {{ $attribute->name }}
                                        </td>
                                        <td>
                                            @if (count($attribute->values) > 0)
                                                @foreach ($attribute->values as $value)
                                                    <span class="badge bg-dark">{{ $value->value }}</span>
                                                @endforeach
                                            @endif
                                        </td>
                                        <td class="d-flex justify-content-between align-items-center">
                                            <a href="#"
                                                class="btn btn-icon btn-bg-light btn-active-color-primary btn-sm me-1"
                                                data-bs-toggle="modal"
                                                data-bs-target="#AttributeViewModal-{{ $attribute->id }}">
                                                <!--begin::Svg Icon | path: icons/duotune/art/art005.svg-->
                                                <i class="fa-solid fa-expand"></i>
                                                <!--View-->
                                            </a>
                                            <a href="#"
                                                class="btn btn-icon btn-bg-light btn-active-color-primary btn-sm me-1"
                                                data-bs-toggle="modal"
                                                data-bs-target="#AttributeEditModal-{{ $attribute->id }}">
                                                <!--begin::Svg Icon | path: icons/duotune/art/art005.svg-->
                                                <i class="fa-solid fa-pen"></i>
                                                <!--Edit-->
                                            </a>
                                            <a href="#"
                                                class="btn btn-icon btn-bg-light btn-active-color-primary btn-sm me-1"
                                                data-bs-toggle="modal"
                                                data-bs-target="#AttributeValueModal-{{ $attribute->id }}">
                                                <!--begin::Svg Icon | path: icons/duotune/art/art005.svg-->
                                                <i class="fa-solid fa-circle-plus"></i>
                                                <!--Edit-->
                                            </a>
                                            <a href="#"
                                                class="btn btn-icon btn-bg-light btn-active-color-primary btn-sm me-1 delete"
                                                data-kt-docs-table-filter="delete_row">
                                                <!--begin::Svg Icon | path: icons/duotune/art/art005.svg-->
                                                <i class="fa-solid fa-trash-can-arrow-up"></i>
                                                <!--Delete-->
                                            </a>
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
    {{-- Add Modal --}}
    <div class="modal fade" id="AttributeAddModal" data-backdrop="static">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content rounded-0 border-0 shadow-sm">
                <div class="modal-header p-2 rounded-0">
                    <h5 class="modal-title">Add Attribute</h5>
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
                <form action="{{ route('admin.attribute.store') }}" class="needs-validation" method="post" novalidate>
                    @csrf
                    <div class="modal-body">
                        <div class="container px-0">
                            <div class="row">
                                <div class="col-lg-12 col-sm-12">
                                    <div class="row">
                                        <div class="col-md-8 mb-1">
                                            <label for="validationCustom01" class="form-label required ">Name
                                            </label>
                                            <input type="text" class="form-control form-control-solid form-control-sm"
                                                name="name" id="validationCustom01" placeholder="Enter Name" required>
                                            <div class="valid-feedback"> Looks good! </div>
                                            <div class="invalid-feedback"> Please Enter Name </div>
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
    @if ($attributes)
        @foreach ($attributes as $attribute)
            {{-- Edit Modal --}}
            <div class="modal fade" id="AttributeEditModal-{{ optional($attribute)->id }}" data-backdrop="static">
                <div class="modal-dialog modal-dialog-centered">
                    <div class="modal-content rounded-0 border-0 shadow-sm">
                        <div class="modal-header p-2 rounded-0">
                            <h5 class="modal-title">Edit Attribute</h5>
                            <!-- Close button in the header -->
                            <div class="btn btn-icon btn-sm btn-active-light-primary ms-2" data-bs-dismiss="modal"
                                aria-label="Close">
                                <span class="svg-icon svg-icon-2x">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                        viewBox="0 0 24 24" fill="none">
                                        <rect opacity="0.5" x="6" y="17.3137" width="16" height="2"
                                            rx="1" transform="rotate(-45 6 17.3137)" fill="currentColor"></rect>
                                        <rect x="7.41422" y="6" width="16" height="2" rx="1"
                                            transform="rotate(45 7.41422 6)" fill="currentColor"></rect>
                                    </svg>
                                </span>
                                <!--end::Svg Icon-->
                            </div>
                            <!-- End Close button in the header -->
                        </div>
                        <form action="{{ route('admin.attribute.update', optional($attribute)->id) }}"
                            class="needs-validation" method="post" novalidate>
                            @csrf
                            @method('PUT')
                            <div class="modal-body">
                                <div class="container px-0">
                                    <div class="row modal_body_badge">
                                        <div class="col-lg-12 col-sm-12">
                                            <div class="row">
                                                <div class="col-md-6 mb-1">
                                                    <label for="validationCustom01" class="form-label required ">Name
                                                    </label>
                                                    <input type="text"
                                                        class="form-control form-control-solid form-control-sm"
                                                        name="name" id="validationCustom01" placeholder="Enter Name"
                                                        value="{{ optional($attribute)->name }}" required>
                                                    <div class="valid-feedback"> Looks good! </div>
                                                    <div class="invalid-feedback"> Please Enter Name </div>
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
            {{-- Add Value Modal --}}
            <div class="modal fade" id="AttributeValueModal-{{ optional($attribute)->id }}" data-backdrop="static">
                <div class="modal-dialog modal-dialog-centered">
                    <div class="modal-content rounded-0 border-0 shadow-sm">
                        <div class="modal-header p-2 rounded-0">
                            <h5 class="modal-title">Add Attribute Value</h5>
                            <!-- Close button in the header -->
                            <div class="btn btn-icon btn-sm btn-active-light-primary ms-2" data-bs-dismiss="modal"
                                aria-label="Close">
                                <span class="svg-icon svg-icon-2x">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                        viewBox="0 0 24 24" fill="none">
                                        <rect opacity="0.5" x="6" y="17.3137" width="16" height="2"
                                            rx="1" transform="rotate(-45 6 17.3137)" fill="currentColor"></rect>
                                        <rect x="7.41422" y="6" width="16" height="2" rx="1"
                                            transform="rotate(45 7.41422 6)" fill="currentColor"></rect>
                                    </svg>
                                </span>
                                <!--end::Svg Icon-->
                            </div>
                            <!-- End Close button in the header -->
                        </div>
                        <form id="attributeValueForm-{{ optional($attribute)->id }}"
                            action="{{ route('admin.attribute-value.store') }}" class="needs-validation" method="post"
                            novalidate>
                            @csrf
                            <div class="modal-body">
                                <div class="container px-0">
                                    <!-- Use a container to hold the input rows -->
                                    <div class="card modal_body_badge"
                                        id="inputContainer-{{ optional($attribute)->id }}">
                                        <!-- Initial input row -->
                                        <input type="hidden" name="attribute_id"
                                            value="{{ optional($attribute)->id }}">
                                        <div class="input-row row mb-1" data-name="{{ optional($attribute)->name }}">
                                            <div class="col-md-5">
                                                <label for="validationCustom01" class="form-label">Attribute Name</label>
                                                <input type="text"
                                                    class="form-control form-control-solid form-control-sm" name="name[]"
                                                    placeholder="Enter Name" value="{{ optional($attribute)->name }}"
                                                    readonly>
                                            </div>
                                            <div class="col-md-5">
                                                <label for="validationCustom01" class="form-label required">Values</label>
                                                <input type="text"
                                                    class="form-control form-control-solid form-control-sm" name="value[]"
                                                    placeholder="Enter Values" required>
                                                <div class="valid-feedback">Looks good!</div>
                                                <div class="invalid-feedback">Please Enter Values</div>
                                                <p class="invalid-feedback-{{ optional($attribute)->id }} d-none text-danger">This
                                                    value has already taken</p>
                                            </div>
                                            <div class="col-md-2">
                                                <div class="input-group-append">
                                                    <!-- Button to add new input row -->
                                                    <button class="btn btn-outline-secondary add-input" type="button">
                                                        <i class="fa-solid fa-circle-plus text-success"></i>
                                                    </button>
                                                    <!-- Button to remove input row -->
                                                    <button class="btn btn-outline-secondary remove-input me-4"
                                                        type="button" style="display: none;">
                                                        <i class="fa-solid fa-circle-minus text-danger"></i>
                                                    </button>
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
            <div class="modal fade" id="AttributeViewModal-{{ optional($attribute)->id }}" data-backdrop="static">
                <div class="modal-dialog modal-dialog-centered">
                    <div class="modal-content rounded-0 border-0 shadow-sm">
                        <div class="modal-header p-2 rounded-0">
                            <h5 class="modal-title">View </h5>
                            <!-- Close button in the header -->
                            <div class="btn btn-icon btn-sm btn-active-light-primary ms-2" data-bs-dismiss="modal"
                                aria-label="Close">
                                <!--begin::Svg Icon | path: icons/duotune/arrows/arr061.svg-->
                                <span class="svg-icon svg-icon-2x">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                        viewBox="0 0 24 24" fill="none">
                                        <rect opacity="0.5" x="6" y="17.3137" width="16" height="2"
                                            rx="1" transform="rotate(-45 6 17.3137)" fill="currentColor"></rect>
                                        <rect x="7.41422" y="6" width="16" height="2" rx="1"
                                            transform="rotate(45 7.41422 6)" fill="currentColor"></rect>
                                    </svg>
                                </span>
                            </div>
                        </div>
                        <div class="modal-body">
                            <div class="container px-0">
                                <div class="row modal_body_badge">
                                    <div class="col-lg-12">
                                        <div class="card border rounded-0 mt-3">
                                            <p class="badge badge-info custom-badge">Info</span>
                                            <div class="card-body p-1 px-2">
                                                <div class="row modal_body_badge">
                                                    <div class="col-lg-6">
                                                        <div class="row">
                                                            <div class="col-lg-5 col-sm-5">
                                                                <p class="fw-bold">Name :</p>
                                                            </div>
                                                            <div class="col-lg-7 col-sm-6">
                                                                <p>Bangladesh</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-lg-6">
                                                        <div class="row">
                                                            <div class="col-lg-7 col-sm-5">
                                                                <p class="fw-bold">Value :</p>
                                                            </div>
                                                            <div class="col-lg-5 col-sm-6">
                                                                <p>5 Day</p>
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
    @endif
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

    <!-- Add this script after including jQuery -->
    {{-- <script>
        // jQuery script for adding and removing input rows
        $(document).ready(function() {
            // Add new input row
            $(".add-input").click(function() {
                var clone = $("#inputContainer .input-row:first").clone(true);
                clone.find('input[name="value[]"]').val(''); // Clear the input value in the cloned row
                clone.find('.add-input').hide(); // Remove add button from the cloned row
                clone.find('.remove-input').show(); // Show remove button for the cloned row
                $("#inputContainer").append(clone);
            });
            // Remove input row
            $("#inputContainer").on("click", ".remove-input", function() {
                if ($("#inputContainer .input-row").length > 1) {
                    $(this).closest('.input-row').remove();
                } else {
                    alert("At least one input row is required.");
                }
            });
        });
    </script> --}}

    {{-- <script>
        $(document).ready(function() {
            // Array to store entered values
            // var enteredValues = {};

            // // Function to check if a value is unique for a specific attribute
            // function isUnique(value, attributeId) {
            //     return enteredValues[attributeId].indexOf(value) === -1;
            // }

            @foreach ($attributes as $attribute)
                var form = $('#attributeValueForm-{{ optional($attribute)->id }}');
                var attributeId{{ optional($attribute)->id }} = {{ optional($attribute)->id }};



                // Add click event listener to the add-input button
                form.find('.add-input').on('click', function() {
                    // Reset the enteredValues array for the new row
                    enteredValues[attributeId{{ optional($attribute)->id }}] = [];

                    // Clone the input row
                    var clone = form.find('.input-row:first').clone(true);

                    // Clear the input value in the cloned row
                    clone.find('input[name="value[]"]').val('');

                    clone.find('.add-input').hide(); // Remove add button from the cloned row
                    clone.find('.remove-input').show(); // Show remove button for the cloned row

                    // Append the cloned row to the container
                    form.find("#inputContainer-{{ optional($attribute)->id }}").append(clone);
                });

                // Add click event listener to the remove-input button
                form.on('click', '.remove-input', function() {
                    // Remove the corresponding value from the enteredValues array
                    var removedValue = $(this).closest('.input-row').find('input[name="value[]"]').val();
                    enteredValues[attributeId{{ optional($attribute)->id }}] = enteredValues[
                        attributeId{{ optional($attribute)->id }}].filter(function(value) {
                        return value !== removedValue;
                    });

                    // Remove the row
                    $(this).closest('.input-row').remove();
                });

                // Validation for unique values
                $("#inputContainer-{{ optional($attribute)->id }}").on("input", 'input[name="value[]"]',
            function() {
                    var currentValue = $(this).val();
                    var isDuplicate = false;

                    // Check if the value already exists in previous rows
                    $("#inputContainer-{{ optional($attribute)->id }} input[name='value[]']").not(this)
                        .each(function() {
                            if ($(this).val() === currentValue) {
                                isDuplicate = true;
                                return false; // exit the loop if a duplicate is found
                            }
                        });

                    if (isDuplicate) {
                        $(this).addClass('is-invalid');
                        $(this).removeClass('is-valid');
                    } else {
                        $(this).addClass('is-valid');
                        $(this).removeClass('is-invalid');
                    }
                });

                // Form submission
                $("#attributeValueForm-{{ optional($attribute)->id }}").submit(function(e) {
                    // Check for duplicates before submitting the form
                    var duplicateExists = false;

                    $("#inputContainer-{{ optional($attribute)->id }} input[name='value[]']").each(
                        function() {
                            var currentValue = $(this).val();
                            var isDuplicate = $(
                                "#inputContainer-{{ optional($attribute)->id }} input[name='value[]']"
                                ).not(this).filter(function() {
                                return $(this).val() === currentValue;
                            }).length > 0;

                            if (isDuplicate) {
                                duplicateExists = true;
                                return false; // exit the loop if a duplicate is found
                            }
                        });

                    if (duplicateExists) {
                        alert("Duplicate values found. Please correct before submitting.");
                        e.preventDefault(); // prevent form submission
                    }
                });
            @endforeach


            // // Add submit event listener to the form
            // form.on('submit', function() {
            //     var isValid = true;

            //     // Validate uniqueness for each value before submission
            //     form.find('input[name="value[]"]').each(function() {
            //         var enteredValue = $(this).val();
            //         var attributeId = $(this).closest('.input-row').data('attribute-id');

            //         if (!isUnique(enteredValue, attributeId)) {
            //             isValid = false;
            //             $(this).closest('.input-row').find('.invalid-feedback').text(
            //                 'Value must be unique').show();
            //         }
            //     });

            //     // Return false to prevent form submission if validation fails
            //     return isValid;
            // });
        });
    </script> --}}
    <script>
        $(document).ready(function() {
            @foreach ($attributes as $attribute)
                var form{{ optional($attribute)->id }} = $('#attributeValueForm-{{ optional($attribute)->id }}');

                form{{ optional($attribute)->id }}.on('click', '.add-input', function() {
                    var container = form{{ optional($attribute)->id }}.find(
                        "#inputContainer-{{ optional($attribute)->id }}");

                    // Clone the input row
                    var clone = container.find('.input-row:first').clone(true);

                    // Clear the input value in the cloned row
                    clone.find('input[name="value[]"]').val('');

                    clone.find('.add-input').hide(); // Remove add button from the cloned row
                    clone.find('.remove-input').show(); // Show remove button for the cloned row

                    // Append the cloned row to the container
                    container.append(clone);
                });

                form{{ optional($attribute)->id }}.on('click', '.remove-input', function() {
                    // Remove the corresponding value from the enteredValues array
                    var removedValue = $(this).closest('.input-row').find('input[name="value[]"]').val();
                    enteredValues[{{ optional($attribute)->id }}] = enteredValues[
                            {{ optional($attribute)->id }}]
                        .filter(function(value) {
                            return value !== removedValue;
                        });

                    // Remove the row
                    $(this).closest('.input-row').remove();
                });

                // Validation for unique values
                form{{ optional($attribute)->id }}.on("input", 'input[name="value[]"]', function() {
                    var currentValue = $(this).val();
                    var isDuplicate = false;

                    // Check if the value already exists in previous rows
                    form{{ optional($attribute)->id }}.find('input[name="value[]"]').not(this).each(
                        function() {
                            if ($(this).val() === currentValue) {
                                isDuplicate = true;
                                return false; // exit the loop if a duplicate is found
                            }
                        });

                    var inputRow = $(this).closest('.input-row'); // Find the closest .input-row
                    var feedback = inputRow.find('.invalid-feedback-{{ optional($attribute)->id }}');


                    if (isDuplicate) {
                        feedback.removeClass('d-none');
                        feedback.removeClass('is-valid');
                    } else {
                        feedback.addClass('d-none');
                        feedback.addClass('is-valid');
                    }
                });

                // Form submission
                form{{ optional($attribute)->id }}.submit(function(e) {
                    // Check for duplicates before submitting the form
                    var duplicateExists = false;

                    form{{ optional($attribute)->id }}.find('input[name="value[]"]').each(function() {
                        var currentValue = $(this).val();
                        var isDuplicate = form{{ optional($attribute)->id }}.find(
                                'input[name="value[]"]').not(this)
                            .filter(function() {
                                return $(this).val() === currentValue;
                            }).length > 0;

                        if (isDuplicate) {
                            duplicateExists = true;
                            return false; // exit the loop if a duplicate is found
                        }
                    });

                    if (duplicateExists) {
                        alert("Duplicate values found. Please correct before submitting.");
                        e.preventDefault(); // prevent form submission
                    }
                });
            @endforeach
        });
    </script>
@endpush
