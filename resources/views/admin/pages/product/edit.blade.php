@extends('admin.master')
@section('content')
    <div class="post d-flex flex-column-fluid mb-3" id="kt_post">
        <div id="kt_content_container" class="container-fluid mb-3">
            <div class="card">
                <div class="main_bg card-header py-2 main_bg align-items-center">
                    <div class="col-lg-5 col-sm-12">
                        <div>
                            <a class="btn btn-sm btn-primary btn-rounded rounded-circle btn-icon back-btn"
                                href="{{ URL::previous() }}">
                                <i class="fa-solid fa-arrow-left text-white"></i>
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-7 col-sm-12 d-flex justify-content-start">
                        <h4 class="text-white p-0 m-0 fw-bold">Product Sourcing Add</h4>
                    </div>
                </div>
                <div class="card-body p-1">
                    <div class="row gx-0">
                        <div class="col-lg-2">
                            <ul class="nav nav-tabs nav-pills border-0 flex-row flex-md-column mb-3 mb-md-0 fs-6"
                                role="tablist">
                                <li class="nav-item w-md-290px me-0 my-1" role="presentation">
                                    <a class="nav-link p-5 rounded-0 active tab-trigger" data-bs-toggle="tab"
                                        href="#kt_vtab_pane_1" aria-selected="true" role="tab">Required Fields</a>
                                </li>
                                <li class="nav-item w-md-290px me-0 my-1" role="presentation">
                                    <a class="nav-link p-5 rounded-0 tab-trigger" data-bs-toggle="tab"
                                        href="#kt_vtab_pane_2" aria-selected="false" role="tab">General Informations</a>
                                </li>
                                <li class="nav-item w-md-290px me-0 my-1" role="presentation">
                                    <a class="nav-link p-5 rounded-0 tab-trigger" data-bs-toggle="tab"
                                        href="#kt_vtab_pane_3" aria-selected="false" role="tab"
                                        tabindex="-1">Descripton</a>
                                </li>
                                <li class="nav-item w-md-290px me-0 my-1" role="presentation">
                                    <a class="nav-link p-5 rounded-0 tab-trigger" data-bs-toggle="tab"
                                        href="#kt_vtab_pane_4" aria-selected="false" role="tab" tabindex="-1">Source
                                        Details</a>
                                </li>
                            </ul>
                        </div>
                        <div class="col-lg-10 px-4 p-2">
                            <form id="productForm" method="post" action="{{ route('admin.product.update', $product->id) }}"
                                enctype="multipart/form-data">
                                @csrf
                                @method('PUT')
                                <div class="tab-content" id="myTabContent">
                                    <div class="tab-pane fade active show" id="kt_vtab_pane_1" role="tabpanel">
                                        <div class="w-100">
                                            <div class="pb-5 pb-lg-5">
                                                <h2
                                                    class="fw-bolder d-flex justify-content-center align-items-center text-dark">
                                                    Required Informations
                                                </h2>
                                                <p class="text-center p-0 m-0"><small
                                                        class="ms-4 text-danger fw-normal fs-sm-9">All The Red Star Mark
                                                        Field Is Required.</small></p>
                                            </div>
                                            <div class="fv-row">
                                                <div class="row">
                                                    <div class="col-lg-8 mb-3">
                                                        <div class="fv-row mb-3">
                                                            <label class="form-label required">Product Name</label>
                                                            <input name="name"
                                                                class="form-control form-control-sm form-control-solid"
                                                                placeholder="Enter Product Name" type="text"
                                                                value="{{ $product->name }}" required />
                                                            <div class="invalid-feedback"> Please Enter Product Name.</div>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-2 mb-3">
                                                        <div class="fv-row mb-3">
                                                            <label class="form-label required">SKU Code</label>
                                                            <input name="sku_code"
                                                                class="form-control form-control-sm form-control-solid"
                                                                placeholder="Eg: NG-2647374" type="text"
                                                                value="{{ $product->sku_code }}" required />
                                                            <div class="invalid-feedback"> Please Enter SKU Code.</div>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-2 mb-3">
                                                        <div class="fv-row mb-3">
                                                            <label class="form-label required">MF Code</label>
                                                            <input name="mf_code"
                                                                class="form-control form-control-sm form-control-solid"
                                                                placeholder="Eg: MF-2647374" type="text"
                                                                value="{{ $product->mf_code }}" required />
                                                            <div class="invalid-feedback"> Please Enter MF Code.</div>
                                                        </div>
                                                    </div>


                                                    <div class="col-lg-4 mb-3">
                                                        <div class="fv-row mb-3">
                                                            <label class="form-label required">Notification Days</label>
                                                            <input name="notification_days"
                                                                class="form-control form-control-sm form-control-solid"
                                                                placeholder="Eg:15 days,30 days" type="text"
                                                                value="{{ $product->notification_days }}" required />
                                                            <div class="invalid-feedback"> Please Enter Notification Days.
                                                            </div>
                                                        </div>
                                                    </div>


                                                    <div class="col-lg-2 mb-3">
                                                        <div class="fv-row mb-3">
                                                            <label class="form-label required">Product Type</label>
                                                            <select class="form-select form-select-solid form-select-sm"
                                                                name="product_type" data-control="select2"
                                                                data-hide-search="true"
                                                                data-placeholder="Select an Product Type"
                                                                data-allow-clear="true" required>
                                                                <option></option>
                                                                <option value="software" @selected($product->product_type == 'software')>
                                                                    Software</option>
                                                                <option value="hardware" @selected($product->product_type == 'hardware')>
                                                                    Hardware</option>
                                                                <option value="book" @selected($product->product_type == 'book')>Book
                                                                </option>
                                                                <option value="training" @selected($product->product_type == 'training')>
                                                                    Training</option>
                                                            </select>
                                                            <div class="invalid-feedback"> Please Enter Product Type.</div>
                                                        </div>
                                                    </div>


                                                    <div class="col-lg-2 mb-3">
                                                        <div class="fv-row mb-3">
                                                            <label class="form-label required">Stock Status</label>
                                                            <select
                                                                class="form-select form-select-solid form-select-sm stock_select"
                                                                name="stock" data-control="select2"
                                                                data-placeholder="Select Stock Status"
                                                                data-allow-clear="true" required>
                                                                <option></option>
                                                                <option class="form-select" value="available"
                                                                    @selected($product->stock == 'available')>
                                                                    Available
                                                                </option>
                                                                <option class="form-select" value="limited"
                                                                    @selected($product->stock == 'limited')>
                                                                    Limited</option>
                                                                <option class="form-select" value="unlimited"
                                                                    @selected($product->stock == 'unlimited')>
                                                                    UnLimited</option>
                                                                <option class="form-select" value="stock_out"
                                                                    @selected($product->stock == 'stock_out')>
                                                                    Out of Stock</option>
                                                            </select>
                                                            <div class="invalid-feedback"> Please Enter Stock Status.</div>
                                                        </div>
                                                    </div>


                                                    <div class="col-lg-2 mb-3 qty_display d-none">
                                                        <div class="fv-row mb-3">
                                                            <label class="form-label required">Current Stock</label>
                                                            <input type="number" name="qty" pattern="\d+"
                                                                step="1" value="{{ $product->qty }}"
                                                                class="form-control form-control-sm form-control-solid qty_required"
                                                                placeholder="Enter Current Stock" />
                                                            <div class="invalid-feedback"> Please Enter Current Stock.
                                                            </div>
                                                        </div>
                                                    </div>


                                                    <div class="col-lg-2 mb-3">
                                                        <div class="fv-row mb-3">
                                                            <label class="form-label required">Price Status</label>
                                                            <select class="form-select form-select-solid form-select-sm"
                                                                data-control="select2"
                                                                data-placeholder="Select Price Status" name="price_status"
                                                                data-hide-search="true" data-allow-clear="true" required>
                                                                <option></option>
                                                                <option value="rfq" @selected($product->price_status == 'rfq')>RFQ
                                                                </option>
                                                                <option value="price" @selected($product->price_status == 'price')>Price
                                                                </option>
                                                                {{-- <option value="starting_price">Offer Price</option> --}}
                                                            </select>
                                                            <div class="invalid-feedback"> Please Enter Price Status.</div>
                                                        </div>
                                                    </div>

                                                    <div class="col-lg-3 mb-3">
                                                        <div class="fv-row mb-3">
                                                            <label class="form-label required">Brand Name</label>
                                                            <select class="form-select form-select-solid form-select-sm"
                                                                name="brand_id" data-control="select2"
                                                                data-placeholder="Select an Brand Name"
                                                                data-allow-clear="true" required>
                                                                <option></option>
                                                                @foreach ($brands as $brand)
                                                                    <option value="{{ $brand->id }}"
                                                                        @selected($brand->id == $product->brand_id)>{{ $brand->title }}
                                                                    </option>
                                                                @endforeach
                                                            </select>
                                                            <div class="invalid-feedback"> Please Enter Brand Name.</div>
                                                        </div>
                                                    </div>
                                                    @php
                                                        $categoryIds = isset($product->category_id)
                                                            ? json_decode($product->category_id, true)
                                                            : [];
                                                    @endphp
                                                    <div class="col-lg-3 mb-3">
                                                        <div class="fv-row mb-3">
                                                            <label class="form-label">Category Name</label>
                                                            <select class="form-select form-select-solid form-select-sm"
                                                                name="category_id[]" id="field2" multiple
                                                                multiselect-search="true" multiselect-select-all="true">
                                                                @if (count($categories) > 0)
                                                                    @foreach ($categories->whereNull('parent_id') as $category)
                                                                        @include(
                                                                            'admin.pages.product.partials.edit_category',
                                                                            [
                                                                                'category' => $category,
                                                                                'level' => 0,
                                                                                'selectedCategories' => $categoryIds,
                                                                            ]
                                                                        )
                                                                    @endforeach
                                                                @endif
                                                            </select>
                                                            <div class="invalid-feedback"> Please Enter Category Name.
                                                            </div>
                                                        </div>
                                                    </div>


                                                    <div class="col-lg-3 mb-3">
                                                        <div class="fv-row mb-3">
                                                            <label class="form-label ">Industry Name</label>
                                                            <select class="form-select form-select-solid form-select-sm"
                                                                name="industry_id[]" id="field2" multiple
                                                                multiselect-search="true" multiselect-select-all="true"
                                                                multiselect-max-items="2">
                                                                @foreach ($industrys as $industrie)
                                                                    <option value="{{ $industrie->id }}"
                                                                        @selected(in_array($industrie->id, $selectedIndustries))>
                                                                        {{ $industrie->name }}
                                                                    </option>
                                                                @endforeach
                                                            </select>
                                                            <div class="invalid-feedback"> Please Enter Industry Name.
                                                            </div>
                                                        </div>
                                                    </div>


                                                    <div class="col-lg-3 mb-3">
                                                        <div class="fv-row mb-3">
                                                            <label class="form-label">Solution Name</label>
                                                            <select class="form-select form-select-solid form-select-sm"
                                                                name="solution_id[]" id="field2" multiple
                                                                multiselect-search="true" multiselect-select-all="true"
                                                                multiselect-max-items="2">
                                                                @foreach ($solutions as $solutionDetail)
                                                                    <option value="{{ $solutionDetail->id }}"
                                                                        @selected(in_array($solutionDetail->id, $selectedSolutions))>
                                                                        {{ $solutionDetail->name }}
                                                                    </option>
                                                                @endforeach
                                                            </select>
                                                            <div class="invalid-feedback"> Please Enter Solution Name.
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-lg-2">
                                                        <label class="form-label">Thumbnail Image</label>
                                                        <div class="image-input image-input-empty"
                                                            data-kt-image-input="true"
                                                            style="background-image: url({{ $product->thumbnail }}); width: auto; background-size: contain;
                                                            background-position: center;
                                                            border: 1px solid #009ae5;">
                                                            <div class="image-input-wrapper w-100px h-70px"
                                                                style="background-size: contain; background-position: center">
                                                            </div>

                                                            <label
                                                                class="btn btn-icon btn-circle btn-color-muted btn-active-color-primary w-25px h-25px bg-body shadow"
                                                                data-kt-image-input-action="change"
                                                                data-bs-toggle="tooltip" data-bs-dismiss="click"
                                                                title="Change avatar">
                                                                <i class="bi bi-pencil-fill fs-7"></i>

                                                                <input type="file" name="thumbnail"
                                                                    accept=".png, .jpg, .jpeg" />
                                                                <input type="hidden" name="avatar_remove" />
                                                            </label>

                                                            <span
                                                                class="btn btn-icon btn-circle btn-color-muted btn-active-color-primary w-25px h-25px bg-body shadow"
                                                                data-kt-image-input-action="cancel"
                                                                data-bs-toggle="tooltip" data-bs-dismiss="click"
                                                                title="Cancel avatar">
                                                                <i class="bi bi-x fs-2"></i>
                                                            </span>

                                                            <span
                                                                class="btn btn-icon btn-circle btn-color-muted btn-active-color-primary w-25px h-25px bg-body shadow"
                                                                data-kt-image-input-action="remove"
                                                                data-bs-toggle="tooltip" data-bs-dismiss="click"
                                                                title="Remove avatar">
                                                                <i class="bi bi-x fs-2"></i>
                                                            </span>
                                                        </div>
                                                        <div class="invalid-feedback"> Please Enter Thumbnail Image. </div>
                                                    </div>
                                                    <div class="col-lg-10">
                                                        <label class="form-label">Multi Image</label>
                                                        <div class="dropzone-field">
                                                            <label for="files" class="custom-file-upload">
                                                                <div class="d-flex align-items-center">
                                                                    <p class="mb-0"><i
                                                                            class="bi bi-file-earmark-arrow-up text-primary fs-3x"></i>
                                                                    </p>
                                                                    <h5 class="mb-0">Drop files here or click to upload.
                                                                        <br>
                                                                        <span class="text-muted"
                                                                            style="font-size: 10px">Upload 10 File</span>
                                                                    </h5>
                                                                </div>
                                                            </label>
                                                            <input type="file" id="files" name="multi_img[]"
                                                                multiple class="form-control" style="display: none;" />
                                                        </div>

                                                        <!-- Display existing images -->
                                                        <div class="existing-images">
                                                            @foreach ($product->multiImages as $image)
                                                                <div class="img-thumb-wrapper card shadow">
                                                                    <img class="img-thumb" src="{{ $image->photo }}"
                                                                        title="{{ $image->photo }}" />
                                                                    <br />
                                                                    <span class="remove">Remove</span>
                                                                </div>
                                                            @endforeach
                                                        </div>
                                                    </div>

                                                </div>
                                                <div class="row mt-2 justify-content-end">
                                                    <div class="d-flex align-items-center justify-content-end">
                                                        <a class="btn btn-lg btn-info rounded-0 tab-trigger-next"
                                                            data-bs-toggle="tab" data-bs-target="#kt_vtab_pane_2"
                                                            aria-selected="false" role="tab" tabindex="-1">
                                                            Next
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
                                                    <div class="col-lg-9">
                                                        <label class="form-label">Tags</label>
                                                        <input type="text" name="tags"
                                                            value="{{ !empty($product->tags) ? $product->tags : old('tags') }}"
                                                            class="form-control form-control-sm visually-hidden"
                                                            data-role="tagsinput" placeholder="Product Tags">
                                                    </div>
                                                    <div class="col-lg-3 mb-3">
                                                        <div class="fv-row mb-3">
                                                            <label class="form-label required">Product Colors</label>
                                                            <select class="form-select form-select-solid form-select-sm"
                                                                name="color_id[]" id="field2" multiple
                                                                multiselect-search="true" multiselect-select-all="true"
                                                                multiselect-max-items="2">
                                                                @if (count($colors) > 0)
                                                                    @foreach ($colors as $color)
                                                                        <option value="{{ $color->id }}">
                                                                            {{ $color->name }}</option>
                                                                    @endforeach
                                                                @endif
                                                            </select>
                                                            <div class="invalid-feedback"> Please Enter Product Colors.
                                                            </div>
                                                        </div>

                                                    </div>
                                                    <div class="col-lg-6 mb-3">
                                                        <div class="fv-row mb-3">
                                                            <label class="form-label required">Parent Products</label>
                                                            <select class="form-select form-select-solid form-select-sm"
                                                                name="parent_id[]" id="field2" multiple
                                                                multiselect-search="true" multiselect-select-all="true"
                                                                multiselect-max-items="2">
                                                                @if (!empty($product->parent_id))
                                                                    @php
                                                                        $parentIds = isset($product->parent_id)
                                                                            ? json_decode($product->parent_id, true)
                                                                            : [];
                                                                        $parents = App\Models\Admin\Product::pluck(
                                                                            'name',
                                                                            'id',
                                                                        )->toArray();
                                                                    @endphp
                                                                    @foreach ($parents as $id => $name)
                                                                        <option value="{{ $id }}"
                                                                            {{ is_array($parentIds) && in_array($id, $parentIds) ? 'selected' : '' }}>
                                                                            {{ $name }}
                                                                        </option>
                                                                    @endforeach
                                                                @endif
                                                            </select>
                                                            <div class="invalid-feedback"> Please Enter Parent Product.
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-6 mb-3">
                                                        <div class="fv-row mb-3">
                                                            <label class="form-label required">Child Products</label>
                                                            <select class="form-select form-select-solid form-select-sm"
                                                                name="child_id[]" id="field2" multiple
                                                                multiselect-search="true" multiselect-select-all="true"
                                                                multiselect-max-items="2">
                                                                @if (!empty($product->child_id))
                                                                    @php
                                                                        $childIds = isset($product->child_id)
                                                                            ? json_decode($product->child_id, true)
                                                                            : [];
                                                                        $childs = App\Models\Admin\Product::pluck(
                                                                            'name',
                                                                            'id',
                                                                        )->toArray();
                                                                    @endphp
                                                                    @foreach ($childs as $id => $name)
                                                                        <option value="{{ $id }}"
                                                                            {{ is_array($childIds) && in_array($id, $childIds) ? 'selected' : '' }}>
                                                                            {{ $name }}
                                                                        </option>
                                                                    @endforeach
                                                                @endif
                                                            </select>
                                                            <div class="invalid-feedback"> Please Enter Child Products.
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-3 mb-3">
                                                        <div class="fv-row mb-3">
                                                            <label class="form-label required">Currency</label>
                                                            <select class="form-select form-select-solid form-select-sm"
                                                                name="currency_id" data-control="select2"
                                                                data-placeholder="Select a Currency"
                                                                data-allow-clear="true">
                                                                <option></option>
                                                                @foreach ($currencys as $currency)
                                                                    <option value="{{ $currency->id }}">
                                                                        {{ $currency->name }}
                                                                    </option>
                                                                @endforeach
                                                            </select>
                                                            <div class="invalid-feedback"> Please Enter Currency</div>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-2 mb-3">
                                                        <label class="form-label"></label>
                                                        <div class="form-check form-check-custom form-check-solid mb-5">
                                                            <input class="form-check-input me-3" name="refurbished"
                                                                type="checkbox" value="1"
                                                                @checked($product->refurbished == '1')
                                                                id="kt_docs_formvalidation_checkbox_option_1" />
                                                            <label class="form-check-label"
                                                                for="kt_docs_formvalidation_checkbox_option_1">
                                                                <div class="fw-bolder text-gray-800">Is Refurbished</div>
                                                            </label>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-2 mb-3">
                                                        <label class="form-label"></label>
                                                        <div class="form-check form-check-custom form-check-solid mb-5">
                                                            <input class="form-check-input me-3" name="is_deal"
                                                                type="checkbox" value="1" id="dealCheckbox">
                                                            <label class="form-check-label">
                                                                <div class="fw-bolder text-gray-800">Is Deal</div>
                                                            </label>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-4 mb-3" id="dealsInputContainer"
                                                        style="display: none;">
                                                        <label class="form-label">Deal Price</label>
                                                        <input type="text"
                                                            class="form-control form-select-sm form-control-solid"
                                                            name="deal" placeholder="Enter Deal" />
                                                    </div>
                                                </div>
                                                <div class="row mt-2 justify-content-end">
                                                    <div class="d-flex align-items-center justify-content-between">
                                                        <a class="btn btn-lg btn-info rounded-0 tab-trigger-previous"
                                                            data-bs-target="#kt_vtab_pane_1" aria-selected="false"
                                                            role="tab" tabindex="-1">
                                                            Previous
                                                            <span class="svg-icon svg-icon-4 ms-1 me-0">
                                                                <i class="fa-solid fa-arrow-right"></i>
                                                            </span>
                                                        </a>
                                                        <a class="btn btn-lg btn-info rounded-0 tab-trigger-next"
                                                            data-bs-toggle="tab" data-bs-target="#kt_vtab_pane_3"
                                                            aria-selected="false" role="tab" tabindex="-1">
                                                            Next
                                                            <span class="svg-icon svg-icon-4 ms-1 me-0">
                                                                <i class="fa-solid fa-arrow-right"></i>
                                                            </span>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="kt_vtab_pane_3" role="tabpanel">
                                        <div class="w-100">
                                            <div class="pb-10 pb-lg-10">
                                                <h2
                                                    class="fw-bolder d-flex justify-content-center align-items-center text-dark">
                                                    General Informations
                                                </h2>
                                            </div>
                                            <div class="fv-row">
                                                <div class="row">
                                                    <div class="col-lg-6 mb-2">
                                                        <label class="form-label mb-0">Short Desc</label>
                                                        <textarea name="short_desc" class="tox-target ckeditor" placeholder="Write Short Desc">
                                                            {{ $product->short_desc }}
                                                        </textarea>
                                                    </div>
                                                    <div class="col-lg-6 mb-2">
                                                        <label class="form-label mb-0">Overview</label>
                                                        <textarea name="overview" class="tox-target overview" placeholder="Write Overview">
                                                            {{ $product->overview }}
                                                        </textarea>
                                                    </div>
                                                    <div class="col-lg-6 mb-2">
                                                        <label class="form-label mb-0">Specification</label>
                                                        <textarea name="specification" class="tox-target specification" placeholder="Write Specification">
                                                            {{ $product->specification }}
                                                        </textarea>
                                                    </div>
                                                    <div class="col-lg-6 mb-2">
                                                        <label class="form-label mb-0">Accessories</label>
                                                        <textarea name="accessories" class="tox-target accessories" placeholder="Write Accessories">
                                                            {{ $product->accessories }}
                                                        </textarea>
                                                    </div>
                                                </div>
                                                <div class="row mt-2 justify-content-end">
                                                    <div class="d-flex align-items-center justify-content-between">
                                                        <a class="btn btn-lg btn-info rounded-0 tab-trigger-previous"
                                                            data-bs-target="#kt_vtab_pane_2" aria-selected="false"
                                                            role="tab" tabindex="-1">
                                                            Previous
                                                            <span class="svg-icon svg-icon-4 ms-1 me-0">
                                                                <i class="fa-solid fa-arrow-right"></i>
                                                            </span>
                                                        </a>
                                                        <a class="btn btn-lg btn-info rounded-0 tab-trigger-next"
                                                            data-bs-toggle="tab" data-bs-target="#kt_vtab_pane_4"
                                                            aria-selected="false" role="tab" tabindex="-1">
                                                            Next
                                                            <span class="svg-icon svg-icon-4 ms-1 me-0">
                                                                <i class="fa-solid fa-arrow-right"></i>
                                                            </span>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="kt_vtab_pane_4" role="tabpanel">
                                        <div class="w-100">
                                            <div class="pb-10 pb-lg-10">
                                                <h2
                                                    class="fw-bolder d-flex justify-content-center align-items-center text-dark">
                                                    General Informations
                                                </h2>
                                            </div>
                                            <div class="fv-row">
                                                <div class="row">
                                                    <div class="col-lg-12">
                                                        <div class="table-responsive">
                                                            <table
                                                                class="table table-hover table-rounded table-striped border gy-7 gs-7">
                                                                <thead>
                                                                    <tr
                                                                        class="fw-bold fs-6 text-gray-800 border-bottom-2 border-gray-200">
                                                                        <th>Source Name</th>
                                                                        <th>Source Link</th>
                                                                        <th>Price</th>
                                                                        <th>Estimate Time</th>
                                                                        <th>Principal Time</th>
                                                                        <th>Shipping Time</th>
                                                                        <th>Location</th>
                                                                        <th>Country</th>
                                                                    </tr>
                                                                </thead>
                                                                <tbody>
                                                                    <tr>
                                                                        <td>
                                                                            <div>
                                                                                <input name="source_one_name"
                                                                                    value="{{ $product->source_one_name }}"
                                                                                    class="form-control form-control-sm"
                                                                                    placeholder="Enter source one Name"
                                                                                    type="text" />
                                                                            </div>
                                                                        </td>
                                                                        <td>
                                                                            <div>
                                                                                <input name="source_one_link"
                                                                                    value="{{ $product->source_one_link }}"
                                                                                    class="form-control form-control-sm"
                                                                                    placeholder="Enter source one link"
                                                                                    type="text" />
                                                                            </div>
                                                                        </td>
                                                                        <td>
                                                                            <div>
                                                                                <input name="source_one_price"
                                                                                    value="{{ $product->source_one_price }}"
                                                                                    class="form-control form-control-sm"
                                                                                    placeholder="Enter source one price"
                                                                                    type="text" />
                                                                            </div>
                                                                        </td>
                                                                        <td>
                                                                            <div>
                                                                                <input name="source_one_estimate_time"
                                                                                    value="{{ $product->source_one_estimate_time }}"
                                                                                    class="form-control form-control-sm"
                                                                                    placeholder="Enter source one estimate_time"
                                                                                    type="text" />
                                                                            </div>
                                                                        </td>
                                                                        <td>
                                                                            <div>
                                                                                <input name="source_one_principal_time"
                                                                                    value="{{ $product->source_one_principal_time }}"
                                                                                    class="form-control form-control-sm"
                                                                                    placeholder="Enter source one principal_time"
                                                                                    type="text" />
                                                                            </div>
                                                                        </td>
                                                                        <td>
                                                                            <div>
                                                                                <input name="source_one_shipping_time"
                                                                                    value="{{ $product->source_one_shipping_time }}"
                                                                                    class="form-control form-control-sm"
                                                                                    placeholder="Enter source one shipping_time"
                                                                                    type="text" />
                                                                            </div>
                                                                        </td>
                                                                        <td>
                                                                            <div>
                                                                                <input name="source_one_location"
                                                                                    value="{{ $product->source_one_location }}"
                                                                                    class="form-control form-control-sm"
                                                                                    placeholder="Enter source one location"
                                                                                    type="text" />
                                                                            </div>
                                                                        </td>
                                                                        <td>
                                                                            <div>
                                                                                <input name="source_one_country"
                                                                                    value="{{ $product->source_one_country }}"
                                                                                    class="form-control form-control-sm"
                                                                                    placeholder="Enter source one country"
                                                                                    type="text" />
                                                                            </div>
                                                                        </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>
                                                                            <div>
                                                                                <input name="source_two_name"
                                                                                    value="{{ $product->source_two_name }}"
                                                                                    class="form-control form-control-sm"
                                                                                    placeholder="Enter source two name"
                                                                                    type="text" />
                                                                            </div>
                                                                        </td>
                                                                        <td>
                                                                            <div>
                                                                                <input name="source_two_link"
                                                                                    value="{{ $product->source_two_link }}"
                                                                                    class="form-control form-control-sm"
                                                                                    placeholder="Enter source two link"
                                                                                    type="text" />
                                                                            </div>
                                                                        </td>
                                                                        <td>
                                                                            <div>
                                                                                <input name="source_two_price"
                                                                                    value="{{ $product->source_two_price }}"
                                                                                    class="form-control form-control-sm"
                                                                                    placeholder="Enter source two price"
                                                                                    type="text" />
                                                                            </div>
                                                                        </td>
                                                                        <td>
                                                                            <div>
                                                                                <input name="source_two_estimate_time"
                                                                                    value="{{ $product->source_two_estimate_time }}"
                                                                                    class="form-control form-control-sm"
                                                                                    placeholder="Enter source two estimate_time"
                                                                                    type="text" />
                                                                            </div>
                                                                        </td>
                                                                        <td>
                                                                            <div>
                                                                                <input name="source_two_principal_time"
                                                                                    value="{{ $product->source_two_principal_time }}"
                                                                                    class="form-control form-control-sm"
                                                                                    placeholder="Enter source two principal_time"
                                                                                    type="text" />
                                                                            </div>
                                                                        </td>
                                                                        <td>
                                                                            <div>
                                                                                <input name="source_two_shipping_time"
                                                                                    value="{{ $product->source_two_shipping_time }}"
                                                                                    class="form-control form-control-sm"
                                                                                    placeholder="Enter source two shipping_time"
                                                                                    type="text" />
                                                                            </div>
                                                                        </td>
                                                                        <td>
                                                                            <div>
                                                                                <input name="source_two_location"
                                                                                    value="{{ $product->source_two_location }}"
                                                                                    class="form-control form-control-sm"
                                                                                    placeholder="Enter source two location"
                                                                                    type="text" />
                                                                            </div>
                                                                        </td>
                                                                        <td>
                                                                            <div>
                                                                                <input name="source_two_country"
                                                                                    value="{{ $product->source_two_country }}"
                                                                                    class="form-control form-control-sm"
                                                                                    placeholder="Enter source two country"
                                                                                    type="text" />
                                                                            </div>
                                                                        </td>
                                                                    </tr>
                                                                </tbody>
                                                            </table>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-4">
                                                        <div class="table-responsive">
                                                            <table
                                                                class="table table-hover table-rounded table-striped border gy-7 gs-7">
                                                                <thead>
                                                                    <tr
                                                                        class="fw-bold fs-8 text-gray-800 border-bottom-2 border-gray-200">
                                                                        <th>Competetor Name</th>
                                                                        <th>Competetor Link</th>
                                                                        <th>Competetor Price</th>
                                                                    </tr>
                                                                </thead>
                                                                <tbody>
                                                                    <tr>
                                                                        <td>
                                                                            <div>
                                                                                <input name="competitor_one_name"
                                                                                    value="{{ $product->competitor_one_name }}"
                                                                                    class="form-control form-control-sm"
                                                                                    placeholder="Competetor One Name"
                                                                                    type="text" />
                                                                            </div>
                                                                        </td>
                                                                        <td>
                                                                            <div>
                                                                                <input name="competitor_one_link"
                                                                                    value="{{ $product->competitor_one_link }}"
                                                                                    class="form-control form-control-sm"
                                                                                    placeholder="Competetor One Link"
                                                                                    type="text" />
                                                                            </div>
                                                                        </td>
                                                                        <td>
                                                                            <div>
                                                                                <input name="competitor_one_price"
                                                                                    value="{{ $product->competitor_one_price }}"
                                                                                    class="form-control form-control-sm"
                                                                                    placeholder="Competetor One Price"
                                                                                    type="text" />
                                                                            </div>
                                                                        </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>
                                                                            <div>
                                                                                <input name="competitor_two_name"
                                                                                    value="{{ $product->competitor_two_name }}"
                                                                                    class="form-control form-control-sm"
                                                                                    placeholder="Competetor two Name"
                                                                                    type="text" />
                                                                            </div>
                                                                        </td>
                                                                        <td>
                                                                            <div>
                                                                                <input name="competitor_two_link"
                                                                                    value="{{ $product->competitor_two_link }}"
                                                                                    class="form-control form-control-sm"
                                                                                    placeholder="Competetor two Link"
                                                                                    type="text" />
                                                                            </div>
                                                                        </td>
                                                                        <td>
                                                                            <div>
                                                                                <input name="competitor_two_price"
                                                                                    value="{{ $product->competitor_two_price }}"
                                                                                    class="form-control form-control-sm"
                                                                                    placeholder="Competetor two Price"
                                                                                    type="text" />
                                                                            </div>
                                                                        </td>
                                                                    </tr>
                                                                </tbody>
                                                            </table>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-3">
                                                        <label class="form-label mb-0">Source Contact</label>
                                                        <textarea rows="8" name="source_contact" value="{{ $product->source_contact }}"
                                                            class="form-control form-control-sm form-control-solid" placeholder="Enter Source Contact"></textarea>
                                                    </div>
                                                    <div class="col-lg-5">
                                                        <div class="table-responsive">
                                                            <table
                                                                class="table table-hover table-rounded table-striped border gy-7 gs-7">
                                                                <thead>
                                                                    <tr
                                                                        class="fw-bold fs-6 text-gray-800 border-bottom-2 border-gray-200">
                                                                        <th>Details</th>
                                                                        <th>Status</th>
                                                                    </tr>
                                                                </thead>
                                                                <tbody>
                                                                    <tr>
                                                                        <td>
                                                                            <div>
                                                                                Is this solid source? ( Y/N )
                                                                            </div>
                                                                        </td>
                                                                        <td>
                                                                            <div class="d-flex align-items-center fv-row">
                                                                                <div
                                                                                    class="form-check form-check-custom form-check-solid mb-5 me-2">
                                                                                    <input class="form-check-input me-2"
                                                                                        type="radio" name="solid_source"
                                                                                        value="yes"
                                                                                        @checked($product->solid_source == 'yes')
                                                                                        id="kt_docs_formvalidation_radio_option_1" />

                                                                                    <label class="form-check-label"
                                                                                        for="kt_docs_formvalidation_radio_option_1">
                                                                                        <div
                                                                                            class="fw-bolder text-gray-800">
                                                                                            Yes</div>
                                                                                    </label>
                                                                                </div>

                                                                                <div
                                                                                    class="form-check form-check-custom form-check-solid mb-5 me-2">
                                                                                    <input class="form-check-input me-2"
                                                                                        type="radio" name="solid_source"
                                                                                        value="no"
                                                                                        @checked($product->solid_source == 'no')
                                                                                        id="kt_docs_formvalidation_radio_option_2" />

                                                                                    <label class="form-check-label"
                                                                                        for="kt_docs_formvalidation_radio_option_2">
                                                                                        <div
                                                                                            class="fw-bolder text-gray-800">
                                                                                            No</div>
                                                                                    </label>
                                                                                </div>
                                                                            </div>
                                                                        </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>
                                                                            <div>
                                                                                Is this direct Principal ? ( Y/N )
                                                                            </div>
                                                                        </td>
                                                                        <td>
                                                                            <div class="d-flex align-items-center fv-row">
                                                                                <div
                                                                                    class="form-check form-check-custom form-check-solid mb-5 me-2">
                                                                                    <input class="form-check-input me-2"
                                                                                        name="direct_principal"
                                                                                        value="yes"
                                                                                        @checked($product->direct_principal == 'yes')
                                                                                        type="radio"
                                                                                        id="kt_docs_formvalidation_radio_option_1" />

                                                                                    <label class="form-check-label"
                                                                                        for="kt_docs_formvalidation_radio_option_1">
                                                                                        <div
                                                                                            class="fw-bolder text-gray-800">
                                                                                            Yes</div>
                                                                                    </label>
                                                                                </div>

                                                                                <div
                                                                                    class="form-check form-check-custom form-check-solid mb-5 me-2">
                                                                                    <input class="form-check-input me-2"
                                                                                        name="direct_principal"
                                                                                        value="no"
                                                                                        @checked($product->direct_principal == 'no')
                                                                                        type="radio"
                                                                                        id="kt_docs_formvalidation_radio_option_2" />

                                                                                    <label class="form-check-label"
                                                                                        for="kt_docs_formvalidation_radio_option_2">
                                                                                        <div
                                                                                            class="fw-bolder text-gray-800">
                                                                                            No</div>
                                                                                    </label>
                                                                                </div>
                                                                            </div>
                                                                        </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>
                                                                            <div>
                                                                                Does it have Agreement ? ( Y/N )
                                                                            </div>
                                                                        </td>
                                                                        <td>
                                                                            <div class="d-flex align-items-center fv-row">
                                                                                <div
                                                                                    class="form-check form-check-custom form-check-solid mb-5 me-2">
                                                                                    <input class="form-check-input me-2"
                                                                                        name="agreement" value="yes"
                                                                                        @checked($product->agreement == 'yes')
                                                                                        type="radio"
                                                                                        id="kt_docs_formvalidation_radio_option_1" />

                                                                                    <label class="form-check-label"
                                                                                        for="kt_docs_formvalidation_radio_option_1">
                                                                                        <div
                                                                                            class="fw-bolder text-gray-800">
                                                                                            Yes</div>
                                                                                    </label>
                                                                                </div>

                                                                                <div
                                                                                    class="form-check form-check-custom form-check-solid mb-5 me-2">
                                                                                    <input class="form-check-input me-2"
                                                                                        name="agreement" value="no"
                                                                                        @checked($product->agreement == 'no')
                                                                                        type="radio"
                                                                                        id="kt_docs_formvalidation_radio_option_2" />

                                                                                    <label class="form-check-label"
                                                                                        for="kt_docs_formvalidation_radio_option_2">
                                                                                        <div
                                                                                            class="fw-bolder text-gray-800">
                                                                                            No</div>
                                                                                    </label>
                                                                                </div>
                                                                            </div>
                                                                        </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td width="66%">Source Type :</td>
                                                                        <td width="34%" colspan="2">
                                                                            <select name="source_type"
                                                                                data-placeholder="Select Source Type.."
                                                                                class="form-control select">
                                                                                <option></option>
                                                                                <option class="form-control"
                                                                                    value="principal"
                                                                                    {{ $product->source_type == 'principal' ? 'selected' : '' }}>
                                                                                    Principal</option>
                                                                                <option class="form-control"
                                                                                    value="distributor"
                                                                                    {{ $product->source_type == 'distributor' ? 'selected' : '' }}>
                                                                                    Distributor</option>
                                                                                <option class="form-control"
                                                                                    value="supplier"
                                                                                    {{ $product->source_type == 'supplier' ? 'selected' : '' }}>
                                                                                    Supplier</option>
                                                                                <option class="form-control"
                                                                                    value="retailer"
                                                                                    {{ $product->source_type == 'retailer' ? 'selected' : '' }}>
                                                                                    Retailer</option>
                                                                            </select>
                                                                        </td>
                                                                    </tr>
                                                                </tbody>
                                                            </table>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row mt-2 justify-content-end">
                                                    <div class="d-flex align-items-center justify-content-between">
                                                        <a class="btn btn-lg btn-info rounded-0 tab-trigger-previous"
                                                            data-bs-target="#kt_vtab_pane_3" aria-selected="false"
                                                            role="tab" tabindex="-1">
                                                            Previous
                                                            <span class="svg-icon svg-icon-4 ms-1 me-0">
                                                                <i class="fa-solid fa-arrow-right"></i>
                                                            </span>
                                                        </a>
                                                        <button class="btn btn-lg btn-info rounded-0" type="submit">
                                                            Submit
                                                            <span class="svg-icon svg-icon-4 ms-1 me-0">
                                                                <i class="fa-solid fa-arrow-right"></i>
                                                            </span>
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
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
        $(document).ready(function() {
            $('.nav-tabs a').click(function() {
                $(this).tab('show');
            });
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

            var stock_value = $('.stock_select').find(":selected").val();
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

            var price_value = $('.price_select').find(":selected").val();
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

        document.addEventListener('DOMContentLoaded', function() {
            // Get the checkbox and colors input container
            var checkbox = document.getElementById('dealCheckbox');
            var dealsInputContainer = document.getElementById('dealsInputContainer');

            // Add change event listener to the checkbox
            checkbox.addEventListener('change', function() {
                // Toggle the visibility of the colors input field based on checkbox state
                dealsInputContainer.style.display = checkbox.checked ? 'block' : 'none';
            });
        });
    </script>
    <script>
        $(document).ready(function() {
            // Function to validate and switch tabs
            function validateAndSwitchTab(targetTabId) {
                let isValid = true;
                // Get the index of the tab to be shown
                const activeTabHref = $('.tab-trigger.active').attr('href');
                $(activeTabHref).find('input, textarea, select').each(function() {
                    var $field = $(this);
                    // Check if it's a Select2 element
                    var isSelect2 = $field.hasClass('select2-hidden-accessible');
                    // if ($field.prop('required') && $field.val() === '') {
                    //     isValid = false;
                    //     if (isSelect2) {
                    //         // Apply CSS based on the element type
                    //         $field.next('.select2-container').addClass('is-invalid');
                    //     } else {
                    //         $field.addClass('is-invalid');
                    //     }
                    // }
                });
                if (!isValid) {
                    // Fields are not valid, prevent the tab switch
                    return false;
                } else {
                    // Fields are valid, switch to the next tab
                    switchTab(targetTabId);
                    return true;
                }
            }
            // Function to switch tabs
            function switchTab(targetTabId) {
                $('.nav-link[href="' + targetTabId + '"]').tab('show');
            }
            // Event handler for tab switch
            $('.tab-trigger').on('show.bs.tab', function(event) {
                return validateAndSwitchTab($(this).data('bs-target'));
            });
            // Event handler for input change
            $('.tab-content').on('input change', 'input, textarea, select', function() {
                var $field = $(this);
                var isSelect2 = $field.hasClass('select2-hidden-accessible');
                // Remove red border when user interacts with the field
                if (isSelect2) {
                    $field.next('.select2-container').removeClass('is-invalid');
                } else {
                    $field.removeClass('is-invalid');
                }
            });
            // Event handler for multi-select change
            $('.multiple-select').on('change', function() {
                // Remove validation error only from the changed multi-select field
                var $multiSelect = $(this);
                $multiSelect.removeClass('is-invalid');
            });
            // Event handler for the "Continue" button
            $('.tab-trigger-next').on('click', function(event) {
                // Assuming the data-bs-target attribute contains the tab ID to switch to
                const targetTabId = $(this).data('bs-target');
                // Validate and switch to the next tab
                validateAndSwitchTab(targetTabId);
            });
            // Event handler for the "Previous" button
            $('.tab-trigger-previous').on('click', function(event) {
                // Assuming the data-bs-target attribute contains the tab ID to switch to
                const targetTabId = $(this).data('bs-target');
                // Validate and switch to the previous tab
                validateAndSwitchTab(targetTabId);
            });
        });
    </script>
@endpush
