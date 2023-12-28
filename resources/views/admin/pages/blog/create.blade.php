@extends('admin.master')
@section('content')
    <div class="container-fluid h-100">
        <div class="row">
            <div class="col-lg-12 card rounded-0 shadow-sm px-0">
                <div class="card card-flush">
                    <div class="card-header align-items-center gap-2 gap-md-5 shadow-lg bg-light-primary px-0"
                        style="min-height: 45px;">
                        <div class="container-fluid">
                            <div class="row align-items-center">
                                <div class="col-lg-6 col-sm-12 text-lg-start text-sm-center">
                                    <div class="card-title ps-3">
                                        <h2 class="text-start ps-5">Blogs Add From</h2>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-sm-12 text-lg-end text-sm-center">
                                    <a href="{{ route('admin.blog.index') }}"
                                        class="btn btn-icon btn-primary w-auto px-3 rounded-0">
                                        <i class="las la-arrow-left fs-2 me-2"></i> Back</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <form action="{{ route('admin.news-trend.store') }}" class="needs-validation" method="POST"
                            enctype="multipart/form-data" novalidate>
                            @csrf
                            <div class="row">
                                <div class="col-lg-3">
                                    <div class="fv-row mb-3">
                                        <label class="form-label">Brand Name</label>
                                        <select class="form-select form-select-solid form-select-sm" name="brand_id[]"
                                            id="field2" multiple multiselect-search="true" multiselect-select-all="true"
                                            multiselect-max-items="2">
                                            @foreach ($brands as $brand)
                                                <option value="{{ $brand->id }}">{{ $brand->title }}
                                                </option>
                                            @endforeach
                                        </select>
                                        <div class="invalid-feedback"> Please Select Brand.
                                        </div>
                                    </div>
                                    <div class="fv-row mb-3 mt-1">
                                        <label class="form-label">Category Name</label>
                                        <select class="form-select form-select-solid form-select-sm" name="category_id[]"
                                            id="field2" multiple multiselect-search="true" multiselect-select-all="true">
                                            @if (count($categories) > 0)
                                                @foreach ($categories->whereNull('parent_id') as $category)
                                                    @include('admin.pages.category.partial.add_parent', [
                                                        'category' => $category,
                                                        'level' => 0,
                                                    ])
                                                @endforeach
                                            @endif
                                        </select>
                                        <div class="invalid-feedback"> Please Select Category.
                                        </div>
                                    </div>
                                    <div class="fv-row mb-3 mt-1">
                                        <label class="form-label">Industry Name</label>
                                        <select class="form-select form-select-solid form-select-sm" name="industry_id[]"
                                            id="field2" multiple multiselect-search="true" multiselect-select-all="true"
                                            multiselect-max-items="2">
                                            @if (count($industries) > 0)
                                                @foreach ($industries as $industry)
                                                    <option value="{{ $industry->id }}">
                                                        {{ $industry->name }}</option>
                                                @endforeach
                                            @endif
                                        </select>
                                        <div class="invalid-feedback"> Please Select Industry Name.
                                        </div>
                                    </div>
                                    <div class="fv-row mb-3 mt-1">
                                        <label class="form-label">Solution Name</label>
                                        <select class="form-select form-select-solid form-select-sm" name="solution_id[]"
                                            id="field2" multiple multiselect-search="true" multiselect-select-all="true"
                                            multiselect-max-items="2">
                                            @if (count($solutions) > 0)
                                                @foreach ($solutions as $solution)
                                                    <option value="{{ $solution->id }}">
                                                        {{ $solution->name }}</option>
                                                @endforeach
                                            @endif
                                        </select>
                                        <div class="invalid-feedback"> Please Select Solution Name.
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="row">
                                        <div class="col-lg-8 mb-3">
                                            <label for="validationCustom01" class="form-label required ">Badge
                                            </label>
                                            <input type="text" class="form-control form-control-solid form-control-sm"
                                                id="validationCustom01" placeholder="Enter Badge" name="badge" required>
                                            <div class="invalid-feedback"> Please Enter Badge </div>
                                        </div>
                                        <div class="col-lg-4 mb-3">
                                            <label for="validationCustom010"
                                                class="form-label required mb-0">Featured</label>
                                            <select class="form-select form-select-solid" data-control="select2"
                                                data-placeholder="Select an option" data-allow-clear="true" name="featured"
                                                data-hide-search="true" required>
                                                <option></option>
                                                <option value="0">No</option>
                                                <option value="1">Yes</option>
                                            </select>
                                            <div class="invalid-feedback"> Please Select Featured. </div>
                                        </div>
                                    </div>
                                    <div class="fv-row mb-3">
                                        <label for="validationCustom01" class="form-label required ">Title</label>
                                        <input type="text" class="form-control form-control-solid form-control-sm"
                                            id="validationCustom01" placeholder="Enter Title" name="title" required>
                                        <div class="invalid-feedback"> Please Enter Title </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-6 mb-2">
                                            <label for="validationCustom01" class="form-label required">Author
                                                Name</label>
                                            <input type="text" class="form-control form-control-solid form-control-sm"
                                                id="validationCustom01" placeholder="Enter Author Name" name="author"
                                                required>
                                            <div class="invalid-feedback"> Please Enter Author Name</div>
                                        </div>
                                        <div class="col-lg-6 mb-3">
                                            <label for="validationCustom01" class="form-label">Source URL</label>
                                            <input type="url" class="form-control form-control-solid form-control-sm"
                                                id="validationCustom01" placeholder="Enter Additional  URL"
                                                name="source_link">
                                            <div class="invalid-feedback"> Please Enter Source URL</div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-6 mb-3">
                                            <label for="validationCustom01" class="form-label">Aditional
                                                Button Name</label>
                                            <input type="text" class="form-control form-control-solid form-control-sm"
                                                id="validationCustom01" placeholder="Enter Additional Button Name"
                                                name="additional_button_name">
                                            <div class="invalid-feedback"> Please Enter Additional Button Name</div>
                                        </div>
                                        <div class="col-lg-6 mb-3">
                                            <label for="validationCustom01" class="form-label">Aditional
                                                Button URL</label>
                                            <input type="url" class="form-control form-control-solid form-control-sm"
                                                id="validationCustom01" placeholder="Enter Additional  URL"
                                                name="additional_url">
                                            <div class="invalid-feedback"> Please Enter Additional URL</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3">
                                    <div class="fv-row mb-3">
                                        <label for="validationCustom010" class="form-label required mb-0">Type</label>
                                        <select class="form-select form-select-sm rounded-0" data-control="select2"
                                            data-placeholder="Select an option" data-allow-clear="false" name="type"
                                            data-hide-search="true" required>
                                            <option value="blogs" selected>Blogs</option>
                                        </select>
                                        <div class="invalid-feedback"> Please Select Type. </div>
                                    </div>
                                    <div class="fv-row mb-3">
                                        <label for="validationCustom01" class="form-label required ">Thumbnail
                                            Image</label>
                                        <input type="file" class="form-control form-control-solid form-control-sm"
                                            id="validationCustom01" placeholder="Enter Thumbnail Image"
                                            name="thumbnail_image" required>
                                        <div class="invalid-feedback"> Please Enter Thumbnail Image </div>
                                    </div>
                                    <div class="fv-row mb-3">
                                        <label for="validationCustom01" class="form-label required ">Banner
                                            Image</label>
                                        <input type="file" class="form-control form-control-solid form-control-sm"
                                            id="validationCustom01" placeholder="Enter Banner Image" name="banner_image"
                                            required>
                                        <div class="invalid-feedback"> Please Enter Banner Image </div>
                                    </div>
                                    <div class="fv-row mb-3">
                                        <label for="validationCustom01" class="form-label required ">Source Image</label>
                                        <input type="file" class="form-control form-control-solid form-control-sm"
                                            id="validationCustom01" placeholder="Enter Source Image" name="source_image"
                                            required>
                                        <div class="invalid-feedback"> Please Enter Source Image </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-12 col-sm-12">
                                    <div class="row">
                                        <div class="col-lg-6 mb-3">
                                            <label for="validationCustom010" class="form-label required mb-0">Tags</label>
                                            <input type="text" name="tags" value="{{ old('tags') }}"
                                                class="form-control form-control-sm visually-hidden" data-role="tagsinput"
                                                placeholder="Enter Tags">
                                            <div class="invalid-feedback"> Please Select Tags. </div>
                                        </div>
                                        <div class="col-lg-6 mb-3">
                                            <label for="validationCustom010"
                                                class="form-label required mb-0">Address</label>
                                            <textarea rows="1" name="address" class="form-control form-control-sm form-control-solid"
                                                placeholder="Enter Address" required></textarea>
                                            <div class="invalid-feedback"> Please Enter Address</div>
                                        </div>

                                        <div class="col-lg-6 mb-3">
                                            <label for="validationCustom010"
                                                class="form-label required mb-0">Header</label>
                                            <textarea rows="1" name="header" class="form-control form-control-sm form-control-solid"
                                                placeholder="Enter Header" required></textarea>
                                            <div class="invalid-feedback"> Please Enter Header</div>
                                        </div>

                                        <div class="col-lg-6 mb-3">
                                            <label for="validationCustom010"
                                                class="form-label required mb-0">Footer</label>
                                            <textarea rows="1" name="footer" class="form-control form-control-sm form-control-solid"
                                                placeholder="Enter Footer" required></textarea>
                                            <div class="invalid-feedback"> Please Enter Footer</div>
                                        </div>
                                        <div class="col-md-12 mb-1 mt-3">
                                            <label for="validationCustom01" class="form-label required mb-0">Short
                                                Description</label>
                                            <textarea name="short_des" class="tox-target kt_docs_tinymce_plugins">
                                                 
                                                </textarea>
                                            <div class="invalid-feedback"> Please Enter Title </div>
                                        </div>
                                        <div class="col-md-12 mb-1 mt-3">
                                            <label for="validationCustom01" class="form-label required mb-0">Long
                                                Description</label>
                                            <textarea name="long_des" class="tox-target kt_docs_tinymce_plugins"> </textarea>
                                            <div class="invalid-feedback"> Please Enter Title </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="row p-2">
                                <button type="submit" class="btn btn-sm btn-primary rounded-0">Submit</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
