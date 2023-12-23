@extends('admin.master')
@section('content')
<style>
    .hidden {
        display: none;
    }
</style>
<div class="container h-100">
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
                        <h4 class="text-white p-0 m-0 fw-bold">Catalogue Add Form</h4>
                    </div>
                </div>
                <div class="card-body">
                    <form action="{{ route('admin.catalog.store') }}" method="POST" enctype="multipart/form-data"
                        class="needs-validation" novalidate>
                        @csrf
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="fv-row mb-3">
                                    <label class="form-label required">Select Banner</label>
                                    <select class="form-select form-select-solid form-select-sm" name="brand_id"
                                        id="banner_id" data-control="select2" data-hide-search="false"
                                        data-placeholder="Select an Product Type" data-allow-clear="true"
                                        onchange="showSelectBox()">
                                        <option value="brand">Brand</option>
                                        <option value="solution">Solution</option>
                                        <option value="industry">Industry</option>
                                        <option value="category">Category</option>
                                        <option value="product">Product</option>
                                        <option value="content">Content</option>
                                        <option value="page">Page</option>
                                    </select>
                                    <div class="invalid-feedback"> Please Select Brand.</div>
                                </div>
                            </div>
                            <div class="col-lg-6 hidden">
                                <div class="fv-row mb-3">
                                    <label class="form-label required">Brand Name</label>
                                    <select class="form-select form-select-solid form-select-sm" name="category"
                                        id="brand_id" data-control="select2" data-hide-search="false"
                                        data-placeholder="Select an Product Type" data-allow-clear="true"
                                        onchange="showSelectBox()">
                                        <option value="brand">Brand</option>
                                        <option value="product">Product</option>
                                        <option value="industry">Industry</option>
                                        <option value="solution">Solution</option>
                                        <option value="category">Category</option>
                                        <option value="page">Page</option>
                                        <option value="content">Content</option>
                                    </select>
                                    <div class="invalid-feedback"> Please Brand Name.</div>
                                </div>
                            </div>
                            <div class="col-lg-6 hidden">
                                <div class="fv-row mb-3">
                                    <label class="form-label required">Category Name</label>
                                    <select class="form-select form-select-solid form-select-sm" name="category_id"
                                        id="category_id" data-control="select2" data-hide-search="false"
                                        data-placeholder="Select an Product Type" data-allow-clear="true"
                                        onchange="showSelectBox()">
                                        <option value="brand">Brand</option>
                                        <option value="product">Product</option>
                                        <option value="industry">Industry</option>
                                        <option value="solution">Solution</option>
                                        <option value="category">Category</option>
                                        <option value="page">Page</option>
                                        <option value="content">Content</option>
                                    </select>
                                    <div class="invalid-feedback"> Please Category Name.</div>
                                </div>
                            </div>
                            <div class="col-lg-6 hidden">
                                <div class="fv-row mb-3">
                                    <label class="form-label required">Solution Name</label>
                                    <select class="form-select form-select-solid form-select-sm" name="solution_id"
                                        id="solution_id" data-control="select2" data-hide-search="false"
                                        data-placeholder="Select an Product Type" data-allow-clear="true"
                                        onchange="showSelectBox()">
                                        <option value="brand">Brand</option>
                                        <option value="product">Product</option>
                                        <option value="industry">Industry</option>
                                        <option value="solution">Solution</option>
                                        <option value="category">Category</option>
                                        <option value="page">Page</option>
                                        <option value="content">Content</option>
                                    </select>
                                    <div class="invalid-feedback"> Please Solution Name.</div>
                                </div>
                            </div>
                            <div class="col-lg-6 hidden">
                                <div class="fv-row mb-3">
                                    <label class="form-label required">Product Name</label>
                                    <select class="form-select form-select-solid form-select-sm" name="product"
                                        id="product" data-control="select2" data-hide-search="false"
                                        data-placeholder="Select an Product Type" data-allow-clear="true"
                                        onchange="showSelectBox()">
                                        <option value="brand">Brand</option>
                                        <option value="product">Product</option>
                                        <option value="industry">Industry</option>
                                        <option value="solution">Solution</option>
                                        <option value="category">Category</option>
                                        <option value="page">Page</option>
                                        <option value="content">Content</option>
                                    </select>
                                    <div class="invalid-feedback"> Please Product Name.</div>
                                </div>
                            </div>
                            <div class="col-lg-6 hidden">
                                <div class="fv-row mb-3">
                                    <label class="form-label required">Industry Name</label>
                                    <select class="form-select form-select-solid form-select-sm" name="industry_id"
                                        id="industry_id" data-control="select2" data-hide-search="false"
                                        data-placeholder="Select an Product Type" data-allow-clear="true"
                                        onchange="showSelectBox()">
                                        <option value="brand">Brand</option>
                                        <option value="product">Product</option>
                                        <option value="industry">Industry</option>
                                        <option value="solution">Solution</option>
                                        <option value="category">Category</option>
                                        <option value="page">Page</option>
                                        <option value="content">Content</option>
                                    </select>
                                    <div class="invalid-feedback"> Please Industry Name.</div>
                                </div>
                            </div>
                            <div class="col-lg-6 hidden">
                                <div class="fv-row mb-3">
                                    <label class="form-label required">Content Name</label>
                                    <select class="form-select form-select-solid form-select-sm" name="content_id"
                                        id="content_id" data-control="select2" data-hide-search="false"
                                        data-placeholder="Select an Product Type" data-allow-clear="true"
                                        onchange="showSelectBox()">
                                        <option value="brand">Brand</option>
                                        <option value="product">Product</option>
                                        <option value="industry">Industry</option>
                                        <option value="solution">Solution</option>
                                        <option value="category">Category</option>
                                        <option value="page">Page</option>
                                        <option value="content">Content</option>
                                    </select>
                                    <div class="invalid-feedback"> Please Content Name.</div>
                                </div>
                            </div>
                            <div class="col-lg-6 hidden" id="page-input">
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="fv-row mb-3">
                                            <label class="form-label">Page Name</label>
                                            <input name="page_name"
                                                class="form-control form-control-sm form-control-solid"
                                                placeholder="Enter Page Name" type="text" />
                                            <div class="invalid-feedback"> Please Enter Page Name</div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="fv-row mb-3">
                                            <label class="form-label">Page Title</label>
                                            <input name="page_title"
                                                class="form-control form-control-sm form-control-solid"
                                                placeholder="Enter Page Title" type="text" />
                                            <div class="invalid-feedback"> Please Enter Page Name</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-lg-6">
                                <div class="fv-row mb-3">
                                    <label class="form-label">Page Title</label>
                                    <input name="page_title"
                                        class="form-control form-control-sm form-control-solid"
                                        placeholder="Enter Page Title" type="text" />
                                    <div class="invalid-feedback"> Please Enter Page Name</div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-12 mt-5">
                                <div class="d-flex justify-content-end">
                                    <button type="submit" class="btn btn-sm btn-light-primary rounded-0">Submit</button>
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
    // Function to show/hide sections based on the selected option
    function showSelectBox() {
        var selectedOption = $('#banner_id').val();

        // Hide all sections
        $('.hidden').hide();

        // Show the selected section
        $('#' + selectedOption + '-section').show();
    }

    // Initial setup to hide all sections except "Select Banner"
    $(document).ready(function () {
        $('.hidden').hide();
        $('#brand-section').show(); // Show the default section

        // Initialize select2, flatpickr, and Tagify
        $('[data-kt-repeater="select2"]').select2();
        $('[data-kt-repeater="datepicker"]').flatpickr();
        new Tagify(document.querySelector('[data-kt-repeater="tagify"]'));
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