@extends('admin.master')
@section('content')
    <style>
        .hidden {
            display: none;
        }

        .invalid-feedback {
            display: block;
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
                        <form action="{{ route('admin.banner.store') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="fv-row mb-3">
                                        <label class="form-label ">Select Category</label>
                                        <select
                                            class="form-select form-select-solid form-select-sm @error('category') is-invalid @enderror"
                                            name="category" id="bannerCategory" data-control="select2"
                                            data-hide-search="false" data-placeholder="Select Category"
                                            data-allow-clear="true">
                                            <option></option>
                                            <option value="brand">Brand</option>
                                            <option value="solution">Solution</option>
                                            <option value="industry">Industry</option>
                                            <option value="category">Category</option>
                                            <option value="product">Product</option>
                                            <option value="content">Content</option>
                                            <option value="page">Page</option>
                                        </select>
                                        @error('category')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-lg-6 brand-select-box d-none">
                                    <div class="fv-row mb-3">
                                        <label class="form-label ">Brand Name</label>
                                        <select
                                            class="form-select form-select-solid form-select-sm @error('brand_id') is-invalid @enderror"
                                            name="brand_id" id="brand_id" data-control="select2" data-hide-search="false"
                                            data-placeholder="Select an Product Type" data-allow-clear="true">
                                            @foreach ($brands as $brand)
                                                <option value="{{ $brand->id }}">{{ $brand->name }}</option>
                                            @endforeach
                                        </select>
                                        @error('brand_id')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-lg-6 category-select-box d-none">
                                    <div class="fv-row mb-3">
                                        <label class="form-label ">Category Name</label>
                                        <select
                                            class="form-select form-select-solid form-select-sm @error('category_id') is-invalid @enderror"
                                            name="category_id" id="category_id" data-control="select2"
                                            data-hide-search="false" data-placeholder="Select an Product Type"
                                            data-allow-clear="true">
                                            @foreach ($categories as $category)
                                                <option value="{{ $category->id }}">{{ $category->name }}</option>
                                            @endforeach
                                        </select>
                                        @error('category_id')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-lg-6 solution-select-box d-none">
                                    <div class="fv-row mb-3">
                                        <label class="form-label ">Solution Name</label>
                                        <select
                                            class="form-select form-select-solid form-select-sm @error('solution_id') is-invalid @enderror"
                                            name="solution_id" id="solution_id" data-control="select2"
                                            data-hide-search="false" data-placeholder="Select an Product Type"
                                            data-allow-clear="true">
                                            @foreach ($solutions as $solution)
                                                <option value="{{ $solution->id }}">{{ $solution->name }}</option>
                                            @endforeach
                                        </select>
                                        @error('solution_id')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-lg-6 product-select-box d-none">
                                    <div class="fv-row mb-3">
                                        <label class="form-label ">Product Name</label>
                                        <select
                                            class="form-select form-select-solid form-select-sm @error('product_id') is-invalid @enderror"
                                            name="product_id" id="product" data-control="select2" data-hide-search="false"
                                            data-placeholder="Select an Product Type" data-allow-clear="true">
                                            @foreach ($products as $product)
                                                <option value="{{ $product->id }}">{{ $product->name }}</option>
                                            @endforeach
                                        </select>
                                        @error('product_id')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-lg-6 industry-select-box d-none">
                                    <div class="fv-row mb-3">
                                        <label class="form-label ">Industry Name</label>
                                        <select
                                            class="form-select form-select-solid form-select-sm @error('product_id') is-invalid @enderror"
                                            name="industry_id" id="industry_id" data-control="select2"
                                            data-hide-search="false" data-placeholder="Select an Product Type"
                                            data-allow-clear="true">
                                            @foreach ($industries as $industry)
                                                <option value="{{ $industry->id }}">{{ $industry->name }}</option>
                                            @endforeach
                                        </select>
                                        @error('banner_one_name')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-lg-6 content-select-box d-none">
                                    <div class="fv-row mb-3">
                                        <label class="form-label ">Content Name</label>
                                        <select
                                            class="form-select form-select-solid form-select-sm @error('content_id') is-invalid @enderror"
                                            name="content_id" id="content_id" data-control="select2"
                                            data-hide-search="false" data-placeholder="Select an Product Type"
                                            data-allow-clear="true">
                                            @foreach ($contents as $content)
                                                <option value="{{ $content->id }}">{{ $content->title }}</option>
                                            @endforeach
                                        </select>
                                        @error('content_id')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-lg-6 page-select-box d-none">
                                    <div class="row">
                                        <div class="col-lg-6">
                                            <div class="fv-row mb-3">
                                                <label class="form-label">Page Name</label>
                                                <input name="page_name"
                                                    class="form-control form-control-sm form-control-solid @error('page_name') is-invalid @enderror"
                                                    placeholder="Enter Page Name" type="text" />
                                                @error('page_name')
                                                    <div class="invalid-feedback">{{ $message }}</div>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="fv-row mb-3">
                                                <label class="form-label">Page Title</label>
                                                <input name="page_title"
                                                    class="form-control form-control-sm form-control-solid @error('page_title') is-invalid @enderror"
                                                    placeholder="Enter Page Title" type="text" />
                                                @error('page_title')
                                                    <div class="invalid-feedback">{{ $message }}</div>
                                                @enderror
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
                                                class="form-control form-control-sm form-control-solid @error('banner_one_name') is-invalid @enderror"
                                                placeholder="Enter Banner One Name" type="text" />
                                            @error('banner_one_name')
                                                <div class="invalid-feedback">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-lg-4">
                                        <div class="fv-row mb-3">
                                            <label class="form-label">Banner One Image</label>
                                            <input name="banner_one_image"
                                                class="form-control form-control-sm form-control-solid @error('banner_one_image') is-invalid @enderror"
                                                placeholder="Enter Banner One Image" type="file" />
                                            @error('banner_one_image')
                                                <div class="invalid-feedback">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-lg-4">
                                        <div class="fv-row mb-3">
                                            <label class="form-label">Banner One Link</label>
                                            <input name="banner_one_link"
                                                class="form-control form-control-sm form-control-solid @error('banner_one_link') is-invalid @enderror"
                                                placeholder="Enter Banner One Name" type="url" />
                                            @error('banner_one_link')
                                                <div class="invalid-feedback">{{ $message }}</div>
                                            @enderror
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
                                                class="form-control form-control-sm form-control-solid @error('banner_two_name') is-invalid @enderror"
                                                placeholder="Enter Banner Two Name" type="text" />
                                            @error('banner_two_name')
                                                <div class="invalid-feedback">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-lg-4">
                                        <div class="fv-row mb-3">
                                            <label class="form-label">Banner Two Image</label>
                                            <input name="banner_two_image"
                                                class="form-control form-control-sm form-control-solid @error('banner_two_image') is-invalid @enderror"
                                                placeholder="Enter Banner Two Name" type="file" />
                                            @error('banner_two_image')
                                                <div class="invalid-feedback">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-lg-4">
                                        <div class="fv-row mb-3">
                                            <label class="form-label">Banner Two Link</label>
                                            <input name="banner_two_link"
                                                class="form-control form-control-sm form-control-solid @error('banner_two_link') is-invalid @enderror"
                                                placeholder="Enter Banner Two Name" type="url" />
                                            @error('banner_two_link')
                                                <div class="invalid-feedback">{{ $message }}</div>
                                            @enderror
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
                                                class="form-control form-control-sm form-control-solid @error('banner_three_name') is-invalid @enderror"
                                                placeholder="Enter Banner Three Name" type="text" />
                                            @error('banner_three_name')
                                                <div class="invalid-feedback">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-lg-4">
                                        <div class="fv-row mb-3">
                                            <label class="form-label">Banner Three Image</label>
                                            <input name="banner_three_image"
                                                class="form-control form-control-sm form-control-solid @error('banner_three_image') is-invalid @enderror"
                                                placeholder="Enter Banner Three Name" type="file" />
                                            @error('banner_three_image')
                                                <div class="invalid-feedback">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-lg-4">
                                        <div class="fv-row mb-3">
                                            <label class="form-label">Banner Three Link</label>
                                            <input name="banner_three_link"
                                                class="form-control form-control-sm form-control-solid @error('banner_three_link') is-invalid @enderror"
                                                placeholder="Enter Banner Three Name" type="url" />
                                            @error('banner_three_link')
                                                <div class="invalid-feedback">{{ $message }}</div>
                                            @enderror
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
                                            <textarea type="text" name="meta_description"
                                                class="form-control form-control-sm form-control-solid @error('meta_description') is-invalid @enderror"
                                                placeholder="Enter Meta Description" id="" cols="30" rows="1" maxlength="160"></textarea>
                                            @error('meta_description')
                                                <div class="invalid-feedback">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-lg-4">
                                        <div class="fv-row mb-3">
                                            <label class="form-label">Meta Title</label>
                                            <input name="meta_title"
                                                class="form-control form-control-sm form-control-solid @error('meta_title') is-invalid @enderror"
                                                placeholder="Enter Meta Image" type="text" maxlength="60" />
                                            @error('meta_title')
                                                <div class="invalid-feedback">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-lg-4">
                                        <div class="fv-row mb-3">
                                            <label class="form-label">Meta Image</label>
                                            <input name="meta_image"
                                                class="form-control form-control-sm form-control-solid @error('meta_image') is-invalid @enderror"
                                                placeholder="Enter Meta Image" type="file" />
                                            @error('meta_image')
                                                <div class="invalid-feedback">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="fv-row mb-3">
                                            <label class="form-label ">Select Meta Tags</label>
                                            <input
                                                class="form-control form-select-sm form-control-solid @error('meta_tags') is-invalid @enderror"
                                                name="meta_tags" id="tags1" value="{{ old('meta_tags') }}" />
                                            @error('meta_tags')
                                                <div class="invalid-feedback">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="fv-row mb-3">
                                            <label class="form-label ">Select Status</label>
                                            <select
                                                class="form-select form-select-solid @error('status') is-invalid @enderror"
                                                name="status" data-control="select2" data-placeholder="Select Status"
                                                data-allow-clear="true">
                                                <option></option>
                                                <option value="active">Active</option>
                                                <option value="inactive">Inactive</option>
                                            </select>
                                        </div>
                                        @error('status')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
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
        var tags1 = document.querySelector("#tags1");
        var tags2 = document.querySelector("#tags2");
        var tags3 = document.querySelector("#tags3");

        new Tagify(tags1);
        new Tagify(tags2);
        new Tagify(tags3);
    </script>
    <script>
        $(document).ready(function() {
            $("#bannerCategory").change(function() {
                // Hide all select boxes and input boxes
                $(".brand-select-box, .product-select-box, .industry-select-box, .solution-select-box, .content-select-box, .page-select-box, .page-title")
                    .addClass("d-none");

                // Get the selected option
                var selectedOption = $("#bannerCategory").val();

                // Define a mapping between selected options and corresponding elements
                var optionMapping = {
                    "brand": ".brand-select-box",
                    "category": ".category-select-box",
                    "solution": ".solution-select-box",
                    "product": ".product-select-box",
                    "industry": ".industry-select-box",
                    "content": ".content-select-box", // Adjusted this to ".content-select-box"
                    "page": ".page-select-box", // Corrected the syntax here
                };

                // Show the relevant select box or input boxes based on the selected option
                if (optionMapping[selectedOption]) {
                    $(optionMapping[selectedOption]).removeClass("d-none");
                }
                // alert(optionMapping[selectedOption]);

            })
        });
    </script>
@endpush
