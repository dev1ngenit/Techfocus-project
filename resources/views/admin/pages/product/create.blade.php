@extends('admin.master')
@section('content')
    <div class="post d-flex flex-column-fluid mb-3" id="kt_post">
        <div id="kt_content_container" class="container-xxl mb-3">
            <div class="card">
                <div class="main_bg card-header py-2 main_bg align-items-center">
                    <div class="col-lg-5 col-sm-12">
                        <div>
                            <a class="btn btn-sm btn-primary btn-rounded rounded-circle btn-icon back-btn"
                                href="{{ URL::previous() }}">
                                <i class="fa-solid fa-arrow-left main_color"></i>
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-7 col-sm-12 d-flex justify-content-center">
                        <h4 class="text-white p-0 m-0 fw-bold">Product Sourcing Add</h4>
                    </div>
                </div>
                <div class="card-body p-1">
                    <div class="row gx-0">
                        <div class="col-lg-2">
                            <ul class="nav nav-tabs nav-pills border-0 flex-row flex-md-column me-5 mb-3 mb-md-0 fs-6"
                                role="tablist">
                                <li class="nav-item w-md-200px me-0" role="presentation">
                                    <a class="nav-link rounded-0 active tab-trigger" data-bs-toggle="tab"
                                        href="#kt_vtab_pane_1" aria-selected="true" role="tab">Required Fields</a>
                                </li>
                                <li class="nav-item w-md-200px me-0" role="presentation">
                                    <a class="nav-link rounded-0 tab-trigger" data-bs-toggle="tab" href="#kt_vtab_pane_2"
                                        aria-selected="false" role="tab">General Informations</a>
                                </li>
                                <li class="nav-item w-md-200px me-0" role="presentation">
                                    <a class="nav-link rounded-0 tab-trigger" data-bs-toggle="tab" href="#kt_vtab_pane_3"
                                        aria-selected="false" role="tab" tabindex="-1">Descripton</a>
                                </li>
                                <li class="nav-item w-md-200px" role="presentation">
                                    <a class="nav-link rounded-0 tab-trigger" data-bs-toggle="tab" href="#kt_vtab_pane_4"
                                        aria-selected="false" role="tab" tabindex="-1">Source Details</a>
                                </li>
                            </ul>
                        </div>
                        <div class="col-lg-10 px-4 p-2">
                            <form id="productForm" method="post" action="{{ route('admin.product.store') }}"
                                enctype="multipart/form-data">
                                @csrf
                                <div class="tab-content" id="myTabContent">
                                    <div class="tab-pane fade active show" id="kt_vtab_pane_1" role="tabpanel">
                                        <div class="w-100">
                                            <div class="pb-10 pb-lg-10">
                                                <h2
                                                    class="fw-bolder d-flex justify-content-center align-items-center text-dark">
                                                    Required Informations
                                                    <small class="ms-4 text-danger fw-normal fs-sm-9">All The Red Star Mark
                                                        Field Is Required.</small>
                                                </h2>
                                            </div>
                                            <div class="fv-row">
                                                <div class="row">
                                                    <div class="col-lg-8 mb-3">
                                                        <div class="fv-row mb-3">
                                                            <label class="form-label required">Product Name</label>
                                                            <input name="name"
                                                                class="form-control form-control-sm form-control-solid"
                                                                placeholder="Enter Product Name" type="text" />
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-2 mb-3">
                                                        <div class="fv-row mb-3">
                                                            <label class="form-label required">SKU Code</label>
                                                            <input name="sku_code"
                                                                class="form-control form-control-sm form-control-solid"
                                                                placeholder="Eg: NG-2647374" type="text" />
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-2 mb-3">
                                                        <div class="fv-row mb-3">
                                                            <label class="form-label required">MF Code</label>
                                                            <input name="mf_code"
                                                                class="form-control form-control-sm form-control-solid"
                                                                placeholder="Eg: MF-2647374" type="text" />
                                                        </div>
                                                    </div>

                                                    <div class="col-lg-2 mb-3">
                                                        <div class="fv-row mb-3">
                                                            <label class="form-label required">Notification Days</label>
                                                            <input name="notification_days"
                                                                class="form-control form-control-sm form-control-solid"
                                                                placeholder="Eg:15 days,30 days" type="text" />
                                                        </div>
                                                    </div>

                                                    <div class="col-lg-2 mb-3">
                                                        <div class="fv-row mb-3">
                                                            <label class="form-label required">Product Type</label>
                                                            <select class="form-select form-select-solid form-select-sm"
                                                                name="product_type" data-control="select2"
                                                                data-hide-search="true"
                                                                data-placeholder="Select an Product Type"
                                                                data-allow-clear="true">
                                                                <option></option>
                                                                <option value="software">Software</option>
                                                                <option value="hardware">Hardware</option>
                                                                <option value="book">Book</option>
                                                                <option value="training">Training</option>
                                                            </select>
                                                        </div>
                                                    </div>

                                                    <div class="col-lg-2 mb-3">
                                                        <div class="fv-row mb-3">
                                                            <label class="form-label required">Stock Status</label>
                                                            <select
                                                                class="form-select form-select-solid form-select-sm stock_select"
                                                                name="stock" data-control="select2"
                                                                data-placeholder="Select Stock Status"
                                                                data-allow-clear="true">
                                                                <option></option>
                                                                <option class="form-select" value="available">
                                                                    Available
                                                                </option>
                                                                <option class="form-select" value="limited">
                                                                    Limited</option>
                                                                <option class="form-select" value="unlimited">
                                                                    UnLimited</option>
                                                                <option class="form-select" value="stock_out">
                                                                    Out of Stock</option>
                                                            </select>
                                                        </div>
                                                    </div>

                                                    <div class="col-lg-2 mb-3">
                                                        <div class="fv-row mb-3">
                                                            <label class="form-label required">Current Stock</label>
                                                            <input name="qty" pattern="\d+" step="1"
                                                                class="form-control form-control-sm form-control-solid"
                                                                placeholder="Enter Current Stock" type="number" />
                                                        </div>
                                                    </div>

                                                    <div class="col-lg-2 mb-3">
                                                        <div class="fv-row mb-3">
                                                            <label class="form-label required">Price Status</label>
                                                            <select class="form-select form-select-solid form-select-sm"
                                                                data-control="select2"
                                                                data-placeholder="Select Price Status" name="price_status"
                                                                data-hide-search="true" data-allow-clear="true">
                                                                <option></option>
                                                                <option value="rfq">RFQ</option>
                                                                <option value="price">Price</option>
                                                                {{-- <option value="starting_price">Offer Price</option> --}}
                                                            </select>
                                                        </div>
                                                    </div>

                                                    <div class="col-lg-3 mb-3">
                                                        <div class="fv-row mb-3">
                                                            <label class="form-label ">Product Code</label>
                                                            <input name="product_code"
                                                                class="form-control form-control-sm form-control-solid"
                                                                placeholder="Enter Product Code" type="text" />
                                                        </div>
                                                    </div>

                                                    <div class="col-lg-3 mb-3">
                                                        <div class="fv-row mb-3">
                                                            <label class="form-label required">Industry Name</label>
                                                            <select class="form-select form-select-solid form-select-sm"
                                                                name="industry_id" data-control="select2"
                                                                data-placeholder="Select an Industry Name"
                                                                data-allow-clear="true">
                                                                <option></option>
                                                                <option value="1">Option 1</option>
                                                                <option value="2">Option 2</option>
                                                            </select>
                                                        </div>
                                                    </div>

                                                    <div class="col-lg-3 mb-3">
                                                        <div class="fv-row mb-3">
                                                            <label class="form-label required">Solution Name</label>
                                                            <select class="form-select form-select-solid form-select-sm"
                                                                name="solution_id" data-control="select2"
                                                                data-placeholder="Select an Solution Name"
                                                                data-allow-clear="true">
                                                                <option></option>
                                                                <option value="1">Option 1</option>
                                                                <option value="2">Option 2</option>
                                                            </select>
                                                        </div>
                                                    </div>

                                                    <div class="col-lg-6 mb-3">
                                                        <div class="fv-row mb-3">
                                                            <label class="form-label required">Brand Name</label>
                                                            <select class="form-select form-select-solid form-select-sm"
                                                                name="brand_id" data-control="select2"
                                                                data-placeholder="Select an Brand Name"
                                                                data-allow-clear="true">
                                                                <option></option>
                                                                <option value="software">Software</option>
                                                                <option value="hardware">Hardware</option>
                                                                <option value="book">Book</option>
                                                                <option value="training">Training</option>
                                                            </select>
                                                        </div>
                                                    </div>

                                                    <div class="col-lg-6 mb-3">
                                                        <div class="fv-row mb-3">
                                                            <label class="form-label required">Category Name</label>
                                                            <select class="form-select form-select-solid form-select-sm"
                                                                name="category_id" data-control="select2"
                                                                data-hide-search="false"
                                                                data-placeholder="Select an Category Name"
                                                                data-allow-clear="true">
                                                                <option></option>
                                                                <option value="software">Software</option>
                                                                <option value="hardware">Hardware</option>
                                                                <option value="book">Book</option>
                                                                <option value="training">Training</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row mt-2 justify-content-end">
                                                    <div>
                                                        <a class="btn btn-lg btn-primary me-3 rounded-0 tab-trigger"
                                                            data-bs-toggle="tab" data-bs-target="#kt_vtab_pane_1"
                                                            aria-selected="true" role="tab" tabindex="-1">
                                                            <span class="indicator-label">Previous
                                                                <span class="svg-icon svg-icon-3 ms-2 me-0">
                                                                    <i class="fa-solid fa-arrow-left"></i>
                                                                </span>
                                                            </span>
                                                            
                                                        </a>
                                                        <a class="btn btn-lg btn-info rounded-0 tab-trigger"
                                                            data-bs-toggle="tab" data-bs-target="#kt_vtab_pane_2"
                                                            aria-selected="false" role="tab" tabindex="-1">
                                                            Continue
                                                            <span class="svg-icon svg-icon-4 ms-1 me-0">
                                                                <i class="fa-solid fa-arrow-right"></i>
                                                            </span>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="tab-pane fade" id="kt_vtab_pane_2" role="tabpanel">
                                        <div class="w-100">
                                            <div class="pb-10 pb-lg-10">
                                                <h2
                                                    class="fw-bolder d-flex justify-content-center align-items-center text-dark">
                                                    General Informations
                                                </h2>
                                            </div>
                                            <div class="fv-row">
                                                <div class="row">

                                                    <div class="col-lg-3">
                                                        <div class="fv-row mb-3">
                                                            <label class="form-label ">Tags</label>
                                                            <select class="form-select form-select-solid form-select-sm"
                                                                data-control="select2"
                                                                data-placeholder="Select an Product Tags" name="tags"
                                                                data-allow-clear="true" multiple="multiple">
                                                                <option></option>
                                                                <option value="1">Option 1</option>
                                                                <option value="2">Option 2</option>
                                                            </select>
                                                        </div>
                                                    </div>


                                                    <div class="col-lg-3">
                                                        <div class="fv-row mb-3">
                                                            <label class="form-label">Refurbished</label>
                                                            <select class="form-select form-select-solid form-select-sm"
                                                                name="refurbished" data-control="select2"
                                                                data-hide-search="true"
                                                                data-placeholder="Select an Refurbished"
                                                                data-allow-clear="true">
                                                                <option></option>
                                                                <option value="0">0</option>
                                                                <option value="1">1</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-3">
                                                        <div class="fv-row mb-3">
                                                            <label class="form-label required">Product Type</label>
                                                            <select class="form-select form-select-solid form-select-sm"
                                                                name="product_type" data-control="select2"
                                                                data-hide-search="true"
                                                                data-placeholder="Select an Product Type"
                                                                data-allow-clear="true">
                                                                <option></option>
                                                                <option value="software">Software</option>
                                                                <option value="hardware">Hardware</option>
                                                                <option value="book">Book</option>
                                                                <option value="training">Training</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-3">
                                                        <div class="fv-row mb-3">
                                                            <label class="form-label ">Slug</label>
                                                            <input name="slug"
                                                                class="form-control form-control-sm form-control-solid"
                                                                placeholder="Enter Slug" type="text" />
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-3">
                                                        <div class="fv-row mb-3">
                                                            <label class="form-label ">Refundable</label>
                                                            <select class="form-select form-select-solid form-select-sm"
                                                                name="refunadable" data-control="select2"
                                                                data-hide-search="true"
                                                                data-placeholder="Select an Refundable"
                                                                data-allow-clear="true">
                                                                <option></option>
                                                                <option value="software">Software</option>
                                                                <option value="hardware">Hardware</option>
                                                                <option value="book">Book</option>
                                                                <option value="training">Training</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-3">
                                                        <div class="fv-row mb-3">
                                                            <label class="form-label ">Status</label>
                                                            <select class="form-select form-select-solid form-select-sm"
                                                                name="status" data-control="select2"
                                                                data-hide-search="true"
                                                                data-placeholder="Select an Status"
                                                                data-allow-clear="true">
                                                                <option></option>
                                                                <option value="software">Software</option>
                                                                <option value="hardware">Hardware</option>
                                                                <option value="book">Book</option>
                                                                <option value="training">Training</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-3">
                                                        <div class="fv-row mb-3">
                                                            <label class="form-label ">Country Name</label>
                                                            <select class="form-select form-select-solid form-select-sm"
                                                                name="country_id" data-control="select2"
                                                                data-placeholder="Select an Country Name"
                                                                data-allow-clear="true">
                                                                <option></option>
                                                                <option value="software">Software</option>
                                                                <option value="hardware">Hardware</option>
                                                                <option value="book">Book</option>
                                                                <option value="training">Training</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-3">
                                                        <div class="fv-row mb-3">
                                                            <label class="form-label">Parent Name</label>
                                                            <select class="form-select form-select-solid form-select-sm"
                                                                name="parent__id" data-control="select2"
                                                                data-placeholder="Select an Parent Name"
                                                                data-allow-clear="true">
                                                                <option></option>
                                                                <option value="software">Software</option>
                                                                <option value="hardware">Hardware</option>
                                                                <option value="book">Book</option>
                                                                <option value="training">Training</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-6">
                                                        <div class="fv-row mb-3">
                                                            <label class="form-label required">Brand Name</label>
                                                            <select class="form-select form-select-solid form-select-sm"
                                                                name="brand_id" data-control="select2"
                                                                data-placeholder="Select an Brand Name"
                                                                data-allow-clear="true">
                                                                <option></option>
                                                                <option value="software">Software</option>
                                                                <option value="hardware">Hardware</option>
                                                                <option value="book">Book</option>
                                                                <option value="training">Training</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-6">
                                                        <div class="fv-row mb-3">
                                                            <label class="form-label required">Category Name</label>
                                                            <select class="form-select form-select-solid form-select-sm"
                                                                name="category_id" data-control="select2"
                                                                data-hide-search="false"
                                                                data-placeholder="Select an Category Name"
                                                                data-allow-clear="true">
                                                                <option></option>
                                                                <option value="software">Software</option>
                                                                <option value="hardware">Hardware</option>
                                                                <option value="book">Book</option>
                                                                <option value="training">Training</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="tab-pane fade" id="kt_vtab_pane_3" role="tabpanel">
                                        Sint sit mollit irure quis est nostrud cillum consequat Lorem esse do quis dolor
                                        esse fugiat sunt do.
                                    </div>

                                    <div class="tab-pane fade" id="kt_vtab_pane_4" role="tabpanel">
                                        Et et consectetur ipsum labore excepteur est proident excepteur ad velit occaecat
                                        qui minim occaecat veniam.
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@push('scripts')
    <script>
        // Stepper lement
        var element = document.querySelector("#kt_stepper_example_clickable");

        // Initialize Stepper
        var stepper = new KTStepper(element);

        // Handle navigation click
        stepper.on("kt.stepper.click", function(stepper) {
            stepper.goTo(stepper.getClickedStepIndex()); // go to clicked step
        });

        // Handle next step
        stepper.on("kt.stepper.next", function(stepper) {
            stepper.goNext(); // go next step
        });

        // Handle previous step
        stepper.on("kt.stepper.previous", function(stepper) {
            stepper.goPrevious(); // go previous step
        });
    </script>





    <script>
        //---------Sidebar list Show Hide----------

        $(document).ready(function() {

            $('#dealId').click(function() {
                $("#dealExpand").toggle(this.checked);
            });

            $('#rfqId').click(function() {

                $("#rfqExpand").toggle('slow');

            });


        });
    </script>
    <script>
        $('.tab-trigger').on('show.bs.tab', function(event) {
            let allowTabSwitch = true;
            if (!allowTabSwitch) {
                allowTabSwitch = true; // Reset the variable for the next attempt
                return false;
            }
            let isValid = true;

            // Get the index of the tab to be shown
            // const tabIndex = $(event.target).parent().index() ;
            // const activeTabIndex = $('.nav-link.active').parent().index();
            // Check the fields in the corresponding tab
            // $('#kt_vtab_pane_' + activeTabIndex).find('input, textarea, select').each(function() {
                var activeTabHref = $('.tab-trigger.active').attr('href');
            $(activeTabHref).find('input, textarea, select').each(function() {
                var $field = $(this);

                // Check if it's a Select2 element
                var isSelect2 = $field.hasClass('select2-hidden-accessible');

                if ($field.val() === '') {
                    // alert($field);

                    isValid = false;

                    // Apply CSS based on the element type
                    if (isSelect2) {
                        $field.next('.select2-container').css("border", "1px solid red");
                        $field.next('.select2-container').addClass('is-invalid');
                    } else {
                        $field.css("border", "1px solid red");
                        $field.addClass('is-invalid');
                    }
                }
            });

            // If the fields are not valid, prevent the tab switch
            if (!isValid) {
                allowTabSwitch = false;
                return false;
            }
        });

        $('.tab-content').on('input change', 'input, textarea, select', function() {
            var $field = $(this);
            var isSelect2 = $field.hasClass('select2-hidden-accessible');

            // Remove red border when user interacts with the field
            if (isSelect2) {
                $field.next('.select2-container').css("border", "");
                $field.next('.select2-container').removeClass('is-invalid');

            } else {
                $field.css("border", "");
                $field.removeClass('is-invalid');
            }
        });

        // Event handler for the "Continue" button
        $('.tab-trigger-next').on('click', function(event) {
            // Assuming the data-bs-target attribute contains the tab ID to switch to
            const targetTabId = $(this).data('bs-target');

            // Your logic for validation can go here

            // If validation passes, switch to the next tab
            if (validationPassed) {
                switchTab(targetTabId);
            }
        });

        // Event handler for the "Previous" button
        $('.tab-trigger-previous').on('click', function(event) {
            // Assuming the data-bs-target attribute contains the tab ID to switch to
            const targetTabId = $(this).data('bs-target');

            // Your logic for validation can go here

            // If validation passes, switch to the previous tab
            if (validationPassed) {
                switchTab(targetTabId);
            }
        });
    </script>

    <script>
        $('.stock_select').on('change', function() {

            var stock_value = $(this).find(":selected").val();

            if (stock_value == 'available') {
                $(".qty_display").removeClass("d-none");
                $(".qty_required").prop('required', true);
            } else if (stock_value == 'limited') {
                $(".qty_display").removeClass("d-none");
                $(".qty_required").prop('required', true);
            } else {
                $(".qty_display").addClass("d-none");
                $(".qty_required").prop('required', false);
            }

        });

        $('.price_select').on('change', function() {

            var price_value = $(this).find(":selected").val();
            if (price_value == 'rfq') {
                // alert(price_value);
                $(".rfq_price").removeClass("d-none");
                $(".offer_price").addClass("d-none");
                $(".price").addClass("d-none");
            } else if (price_value == 'offer_price') {
                $(".offer_price").removeClass("d-none");
                $(".rfq_price").addClass("d-none");
                $(".price").addClass("d-none");
            } else {
                $(".price").removeClass("d-none");
                $(".offer_price").addClass("d-none");
                $(".rfq_price").addClass("d-none");
            }

        });
    </script>
@endpush
