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
                                        <label class="form-label required">Select Category</label>
                                        <select class="form-select form-select-solid form-select-sm" name="category"
                                            id="banner_id" data-control="select2" data-hide-search="false"
                                            data-placeholder="Select an Product Type" data-allow-clear="true">
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
                                <div class="col-lg-6 brand-select-box hidden">
                                    <div class="fv-row mb-3">
                                        <label class="form-label required">Brand Name</label>
                                        <select class="form-select form-select-solid form-select-sm" name="brand_id"
                                            id="brand_id" data-control="select2" data-hide-search="false"
                                            data-placeholder="Select an Product Type" data-allow-clear="true">
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
                                <div class="col-lg-6 category-select-box hidden">
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
                                <div class="col-lg-6 solution-select-box hidden">
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
                                <div class="col-lg-6 product-select-box hidden">
                                    <div class="fv-row mb-3">
                                        <label class="form-label required">Product Name</label>
                                        <select class="form-select form-select-solid form-select-sm" name="product_id"
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
                                <div class="col-lg-6 industry-select-box hidden">
                                    <div class="fv-row mb-3">
                                        <label class="form-label required">Industry Name</label>
                                        <select class="form-select form-select-solid form-select-sm" name="industry_id"
                                            id="industry_id" data-control="select2" data-hide-search="false"
                                            data-placeholder="Select an Product Type" data-allow-clear="true">
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
                                <div class="col-lg-6 content-select-box hidden">
                                    <div class="fv-row mb-3">
                                        <label class="form-label required">Content Name</label>
                                        <select class="form-select form-select-solid form-select-sm" name="content_id"
                                            id="content_id" data-control="select2" data-hide-search="false"
                                            data-placeholder="Select an Product Type" data-allow-clear="true">
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
                                <div class="col-lg-6 page-select-box hidden">
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

                            <div class="border p-4 m-1 mt-5">
                                <p class="badge badge-info custom-bage-all">Banner
                                    One</span>
                                <div class="row">
                                    <div class="col-lg-4">
                                        <div class="fv-row mb-3">
                                            <label class="form-label">Banner One Name</label>
                                            <input name="banner_one_name"
                                                class="form-control form-control-sm form-control-solid"
                                                placeholder="Enter Banner One Name" type="text" />
                                            <div class="invalid-feedback"> Please Enter Banner One Name</div>
                                        </div>
                                    </div>
                                    <div class="col-lg-4">
                                        <div class="fv-row mb-3">
                                            <label class="form-label">Banner One Image</label>
                                            <input name="banner_one_image"
                                                class="form-control form-control-sm form-control-solid"
                                                placeholder="Enter Banner One Name" type="file" />
                                            <div class="invalid-feedback"> Please Enter Banner One Image</div>
                                        </div>
                                    </div>
                                    <div class="col-lg-4">
                                        <div class="fv-row mb-3">
                                            <label class="form-label">Banner One Link</label>
                                            <input name="banner_one_link"
                                                class="form-control form-control-sm form-control-solid"
                                                placeholder="Enter Banner One Name" type="url" />
                                            <div class="invalid-feedback"> Please Enter Banner One Link</div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="border p-4 m-1 mt-5">
                                <p class="badge badge-info custom-bage-all">Banner
                                    Two</span>
                                <div class="row">
                                    <div class="col-lg-4">
                                        <div class="fv-row mb-3">
                                            <label class="form-label">Banner Two Name</label>
                                            <input name="banner_two_name"
                                                class="form-control form-control-sm form-control-solid"
                                                placeholder="Enter Banner Two Name" type="text" />
                                            <div class="invalid-feedback"> Please Enter Banner Two Name</div>
                                        </div>
                                    </div>
                                    <div class="col-lg-4">
                                        <div class="fv-row mb-3">
                                            <label class="form-label">Banner Two Image</label>
                                            <input name="banner_two_image"
                                                class="form-control form-control-sm form-control-solid"
                                                placeholder="Enter Banner Two Name" type="file" />
                                            <div class="invalid-feedback"> Please Enter Banner Two Image</div>
                                        </div>
                                    </div>
                                    <div class="col-lg-4">
                                        <div class="fv-row mb-3">
                                            <label class="form-label">Banner Two Link</label>
                                            <input name="banner_two_link"
                                                class="form-control form-control-sm form-control-solid"
                                                placeholder="Enter Banner Two Name" type="url" />
                                            <div class="invalid-feedback"> Please Enter Banner Two Link</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="border p-4 m-1 mt-5">
                                <p class="badge badge-info custom-bage-all">Banner
                                    Three</span>
                                <div class="row">
                                    <div class="col-lg-4">
                                        <div class="fv-row mb-3">
                                            <label class="form-label">Banner Three Name</label>
                                            <input name="banner_three_name"
                                                class="form-control form-control-sm form-control-solid"
                                                placeholder="Enter Banner Three Name" type="text" />
                                            <div class="invalid-feedback"> Please Enter Banner Three Name</div>
                                        </div>
                                    </div>
                                    <div class="col-lg-4">
                                        <div class="fv-row mb-3">
                                            <label class="form-label">Banner Three Image</label>
                                            <input name="banner_three_image"
                                                class="form-control form-control-sm form-control-solid"
                                                placeholder="Enter Banner Three Name" type="file" />
                                            <div class="invalid-feedback"> Please Enter Banner Three Image</div>
                                        </div>
                                    </div>
                                    <div class="col-lg-4">
                                        <div class="fv-row mb-3">
                                            <label class="form-label">Banner Three Link</label>
                                            <input name="banner_three_link"
                                                class="form-control form-control-sm form-control-solid"
                                                placeholder="Enter Banner Three Name" type="url" />
                                            <div class="invalid-feedback"> Please Enter Banner Three Link</div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="border p-4 m-1 mt-5">
                                <p class="badge badge-info custom-bage-all">Meta Box</span>
                                <div class="row">
                                    <div class="col-lg-4">
                                        <div class="fv-row mb-3">
                                            <label class="form-label">Meta Description</label>
                                            <textarea type="text" name="meta_description" class="form-control form-control-sm form-control-solid"
                                                placeholder="Enter Meta Description" id="" cols="30" rows="1"></textarea>
                                            <div class="invalid-feedback"> Please Enter Meta Description</div>
                                        </div>
                                    </div>
                                    <div class="col-lg-4">
                                        <div class="fv-row mb-3">
                                            <label class="form-label">Meta Title</label>
                                            <input name="meta_title"
                                                class="form-control form-control-sm form-control-solid"
                                                placeholder="Enter Meta Image" type="file" />
                                            <div class="invalid-feedback"> Please Enter Meta Image</div>
                                        </div>
                                    </div>
                                    <div class="col-lg-4">
                                        <div class="fv-row mb-3">
                                            <label class="form-label">Meta Image</label>
                                            <input name="meta_image"
                                                class="form-control form-control-sm form-control-solid"
                                                placeholder="Enter Meta Image" type="file" />
                                            <div class="invalid-feedback"> Please Enter Meta Image</div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="fv-row mb-3">
                                            <label class="form-label required">Select Meta Tags</label>
                                            <input class="form-control form-select-sm form-control-solid" name="meta_tags"
                                                id="tags1" value="{{ old('meta_tags') }}" />
                                            <div class="invalid-feedback"> Please Enter Meta Tags.</div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="fv-row mb-3">
                                            <label class="form-label required">Select Status</label>
                                            <select class="form-select form-select-solid" name="status"
                                                data-dropdown-parent="#brandAddModal" data-control="select2"
                                                data-placeholder="Select an option" data-allow-clear="true" required>
                                                <option></option>
                                                <option value="active">Active</option>
                                                <option value="inactive">Inactive</option>
                                            </select>
                                            <div class="invalid-feedback"> Please Select Status.</div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-lg-12 mt-5">
                                    <div class="d-flex justify-content-end">
                                        <button type="submit"
                                            class="btn btn-sm btn-light-primary rounded-0">Submit</button>
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
        // The DOM elements you wish to replace with Tagify
        var input1 = document.querySelector("#tags1");
        var input1 = document.querySelector("#tags2");
        var input1 = document.querySelector("#tags3");

        // Initialize Tagify components on the above inputs
        new Tagify(input1);
    </script>
    <script>
        function showSelectBox() {
            // Hide all select boxes and input boxes
            $(".brand-select-box, .product-select-box, .industry-select-box, .solution-select-box, .content-select-box, .page-select-box, .page-title")
                .addClass("hidden");

            // Get the selected option
            var selectedOption = $("#category").val();

            // Define a mapping between selected options and corresponding elements
            var optionMapping = {
                "brand": ".brand-select-box",
                "product": ".product-select-box",
                "industry": ".industry-select-box",
                "solution": ".solution-select-box",
                "content": ".solution-select-box", // Assuming this is intentional, you may adjust as needed
                "page": ".page-select-box, .page-title",
            };

            // Show the relevant select box or input boxes based on the selected option
            if (optionMapping[selectedOption]) {
                $(optionMapping[selectedOption]).removeClass("hidden");
            }
        }
    </script>
@endpush
