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
                                        <h2 class="text-center mb-0">Category</h2>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-sm-12 text-lg-end text-sm-center">
                                    <!--begin::Export dropdown-->
                                    <button type="button" class="btn btn-sm btn-light-success rounded-0"
                                        data-kt-menu-placement="bottom-end" data-bs-toggle="modal"
                                        data-bs-target="#categoryAddModal">
                                        Add New
                                    </button>
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
                                    <th class="" width="5%">Sl</th>
                                    <th class="" width="10%">Logo</th>
                                    <th class="" width="30%">Parent Name</th>
                                    <th class="" width="10%">Name</th>
                                    <th class="" width="10%">Action</th>
                                </tr>
                                <!--end::Table row-->
                            </thead>
                            <tbody class="fw-bold text-gray-600 text-center">
                                @if ($categories)
                                    @foreach ($categories as $category)
                                        <tr class="odd">
                                            <td>{{ $loop->iteration }}</td>
                                            <td>
                                                <img class="img-fluid rounded-circle" width="35px"
                                                    src="{{ !empty($category->logo) ? asset('storage/' . $category->logo) : asset('storage/main/no-image-available.png') }}"
                                                    alt="{{ $category->name }} Logo">
                                            </td>
                                            {{-- <td>
                                                {{ getAllCountry()->where('id', $category->country_id)->first()->name ?? 'Unknown Country' }}
                                            </td> --}}
                                            <td>{{ $category->parentName() ?? 'No Parent' }}
                                            </td>
                                            <td>{{ $category->name }}
                                            </td>
                                            <td>
                                                <div class="d-flex justify-content-between align-items-center">
                                                    <a href="#"
                                                        class="btn btn-icon btn-bg-light btn-active-color-primary btn-sm me-1"
                                                        data-bs-toggle="modal"
                                                        data-bs-target="#categoryViewModal_{{ $category->id }}">
                                                        <i class="fa-solid fa-expand"></i>
                                                        <!--View-->
                                                    </a>
                                                    <a href="#"
                                                        class="btn btn-icon btn-bg-light btn-active-color-primary btn-sm me-1 categoryEditModal"
                                                        data-bs-toggle="modal" data-id="{{ $category->id }}"
                                                        data-bs-target="#categoryEditModal_{{ $category->id }}">
                                                        <i class="fa-solid fa-pen"></i>
                                                        <!--Edit-->
                                                    </a>
                                                    <a href="{{ route('admin.category.destroy', $category->id) }}"
                                                        class="btn btn-icon btn-bg-light btn-active-color-primary btn-sm me-1 delete"
                                                        data-kt-docs-table-filter="delete_row">
                                                        <i class="fa-solid fa-trash-can-arrow-up"></i>
                                                        <!--Delete-->
                                                    </a>
                                                </div>
                                            </td>
                                        </tr>
                                    @endforeach
                                @endif
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>



    {{-- Add Modal --}}
    <div class="modal fade" id="categoryAddModal" data-backdrop="static">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content rounded-0 border-0 shadow-sm">
                <div class="modal-header p-2 rounded-0">
                    <h5 class="modal-title">Add Category</h5>
                    <!-- Close button in the header -->
                    <div class="btn btn-icon btn-sm btn-active-light-primary ms-2" data-bs-dismiss="modal"
                        aria-label="Close">
                        <i class="fa-solid fa-circle-xmark"></i>
                    </div>
                    <!-- End Close button in the header -->
                </div>
                <form action="{{ route('admin.category.store') }}" class="needs-validation" method="post"
                    enctype="multipart/form-data" novalidate>
                    @csrf
                    <div class="modal-body">
                        <div class="container px-0">
                            <div class="row">
                                <div class="col-lg-12 col-sm-12">
                                    <div class="row">
                                        <div class="col-md-6 mb-1">
                                            <label for="validationCustom01" class="form-label required ">Name
                                            </label>
                                            <input type="text" class="form-control form-control-solid form-control-sm"
                                                name="name" id="validationCustom01" placeholder="Enter Name" required>
                                            <div class="valid-feedback"> Looks good! </div>
                                            <div class="invalid-feedback"> Please Enter Name </div>
                                        </div>

                                        <div class="col-md-6 mb-1">
                                            <label for="validationCustom01" class="form-label  ">Image
                                            </label>
                                            <input type="file" class="form-control form-control-solid form-control-sm"
                                                name="image" id="validationCustom01">
                                        </div>

                                        <div class="col-md-6 mb-1">
                                            <label for="validationCustom01" class="form-label  ">Logo
                                            </label>
                                            <input type="file" class="form-control form-control-solid form-control-sm"
                                                name="logo" id="validationCustom01">
                                        </div>

                                        <div class="col-md-4 mb-1">
                                            <label for="validationCustom01" class="form-label">
                                            </label>
                                            <div
                                                class="form-check form-check-custom form-check-warning form-check-solid form-check-sm mt-3 ms-4 mb-3">
                                                <input class="form-check-input bg-primary" name="is_parent"
                                                    value="1" type="checkbox" id="flexRadioLg" />
                                                <label class="form-check-label" for="flexRadioLg">Is Parent</label>
                                            </div>
                                        </div>

                                        <div class="col-md-8 mb-1 hide_parent_input" id="parentInputContainer">
                                            <label for="validationCustom01" class="form-label ">Parent
                                                Name</label>
                                            <select class="form-select form-select-solid" name="parent_id"
                                                data-dropdown-parent="#categoryAddModal" data-control="select2"
                                                data-placeholder="Select a Parent" data-allow-clear="true">
                                                <option></option>
                                                @if (count($categories))
                                                    @foreach ($categories->whereNull('parent_id') as $category)
                                                        @include(
                                                            'admin.pages.category.partial.add_parent',
                                                            ['category' => $category, 'level' => 0]
                                                        )
                                                    @endforeach
                                                @endif
                                            </select>
                                            <div class="valid-feedback">Looks good!</div>
                                            <div class="invalid-feedback">Please Select Parent Name</div>
                                        </div>

                                        <div class="col-md-12">
                                            <label for="validationCustom010" class="form-label ">Description</label>
                                            <textarea rows="1" name="description" class="form-control form-control-sm form-control-solid"
                                                placeholder="Enter Description"></textarea>
                                            <div class="valid-feedback"> Looks good! </div>
                                            <div class="invalid-feedback"> Please Enter description</div>
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
    {{-- Edit Modal --}}
    @foreach ($categories as $category)
        <div class="modal fade" id="categoryEditModal_{{ $category->id }}" data-backdrop="static">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content rounded-0 border-0 shadow-sm">
                    <div class="modal-header p-2 rounded-0">
                        <h5 class="modal-title">Edit Category</h5>
                        <!-- Close button in the header -->
                        <div class="btn btn-icon btn-sm btn-active-light-primary ms-2" data-bs-dismiss="modal"
                            aria-label="Close">
                            <i class="fa-solid fa-circle-xmark"></i>
                        </div>
                        <!-- End Close button in the header -->
                    </div>
                    <form action="" class="needs-validation" method="post" novalidate>
                        @csrf
                        <div class="modal-body">
                            <div class="container px-0">
                                <div class="row">
                                    <div class="col-lg-12 col-sm-12">
                                        <div class="row">
                                            <div class="col-md-6 mb-1">
                                                <label for="validationCustom01" class="form-label required ">Name
                                                </label>
                                                <input type="text"
                                                    class="form-control form-control-solid form-control-sm" name="name"
                                                    id="validationCustom01" placeholder="Enter Name"
                                                    value="{{ $category->name }}" required>
                                                <div class="valid-feedback"> Looks good! </div>
                                                <div class="invalid-feedback"> Please Enter Name </div>
                                            </div>
                                            <div class="col-md-6 mb-1">
                                                <label for="validationCustom01" class="form-label required ">Image
                                                </label>
                                                <input type="file"
                                                    class="form-control form-control-solid form-control-sm" name="image"
                                                    id="validationCustom01">
                                                <div class="mt-2">
                                                    <img src="{{ asset('storage/requestImg/' . $category->image) }}"
                                                        alt="" class="img-fluid">
                                                </div>
                                                <div class="valid-feedback"> Looks good! </div>
                                                <div class="invalid-feedback"> Please Enter Image </div>
                                            </div>
                                            <div class="col-md-6 mb-1">
                                                <label for="validationCustom01" class="form-label required ">Logo
                                                </label>
                                                <input type="file"
                                                    class="form-control form-control-solid form-control-sm" name="logo"
                                                    id="validationCustom01">
                                                <div class="mt-2">
                                                    <img src="{{ asset('storage/requestImg/' . $category->logo) }}"
                                                        alt="" class="img-fluid">
                                                </div>
                                                <div class="valid-feedback"> Looks good! </div>
                                                <div class="invalid-feedback"> Please Enter Logo </div>
                                            </div>
                                            <div class="col-md-6 mb-1">
                                                <label for="validationCustom01" class="form-label">
                                                </label>
                                                <div
                                                    class="form-check form-check-custom form-check-warning form-check-solid form-check-sm mt-3 ms-4  mb-3">
                                                    <input class="form-check-input bg-primary" name="is_parent"
                                                        @checked($category->is_parent == 1) value="1" type="checkbox"
                                                        id="flexRadioLg-{{ $category->id }}" />
                                                    <label class="form-check-label"
                                                        for="flexRadioLg-{{ $category->id }}">Is Parent</label>
                                                </div>
                                            </div>

                                            <div class="col-md-6 mb-1 hide_parent_input"
                                                id="parentInputContainer-{{ $category->id }}">
                                                <label for="validationCustom01" class="form-label required">Parent
                                                    Name</label>
                                                <select class="form-select form-select-solid" name="parent_id"
                                                    data-dropdown-parent="#categoryEditModal_{{ $category->id }}"
                                                    data-control="select2" data-placeholder="Select an option"
                                                    data-allow-clear="true">
                                                    <option></option>
                                                    @foreach ($categories->whereNull('parent_id') as $category)
                                                        @include(
                                                            'admin.pages.category.partial.edit_parent',
                                                            ['category' => $category, 'level' => 0]
                                                        )
                                                    @endforeach
                                                </select>
                                                <div class="valid-feedback">Looks good!</div>
                                                <div class="invalid-feedback">Please Select Parent Name</div>
                                            </div>

                                            <div class="col-md-12">
                                                <label for="validationCustom010"
                                                    class="form-label required">Description</label>
                                                <textarea rows="1" name="description" class="form-control form-control-sm form-control-solid"
                                                    placeholder="Enter Description" required>{{ $category->description }}</textarea>
                                                <div class="valid-feedback"> Looks good! </div>
                                                <div class="invalid-feedback"> Please Enter Description</div>
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

        <div class="modal fade" id="categoryViewModal_{{ $category->id }}" data-backdrop="static">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content rounded-0 border-0 shadow-sm">
                    <div class="modal-header p-2 rounded-0">
                        <h5 class="modal-title mb-0">Category View </h5>
                        <!-- Close button in the header -->
                        <div class="btn btn-icon btn-sm btn-active-light-primary ms-2" data-bs-dismiss="modal"
                            aria-label="Close">
                            <i class="fa-solid fa-circle-xmark"></i>
                        </div>
                    </div>
                    <div class="modal-body">
                        <div class="container px-0">
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="card border rounded-0">
                                        <div class="card-body p-1 px-2">
                                            <div class="row">
                                                <div class="col-lg-6">
                                                    <div class="row">
                                                        <div class="col-lg-6 col-sm-5">
                                                            <p class="fw-bold" title="Country Name">Name</p>
                                                        </div>
                                                        <div class="col-lg-6 col-sm-6">
                                                            <p>{{ $category->name }}</p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-6">
                                                    <div class="row">
                                                        <div class="col-lg-7 col-sm-5">
                                                            <p class="fw-bold">Parent Name</p>
                                                        </div>
                                                        <div class="col-lg-5 col-sm-6">
                                                            <p>{{ $category->parentName() ?? 'No Parent' }}</p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-6">
                                                    <div class="row">
                                                        <div class="col-lg-7 col-sm-5">
                                                            <p class="fw-bold">Image</p>
                                                        </div>
                                                        <div class="col-lg-5 col-sm-6">
                                                            <p>
                                                                <img class="img-fluid rounded-circle" width="35px"
                                                                    src="{{ !empty($category->image) ? asset('storage/' . $category->image) : asset('storage/main/no-image-available.png') }}"
                                                                    alt="{{ $category->slug }} Logo">
                                                            </p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-6">
                                                    <div class="row">
                                                        <div class="col-lg-7 col-sm-5">
                                                            <p class="fw-bold">Logo</p>
                                                        </div>
                                                        <div class="col-lg-5 col-sm-6">
                                                            <p>
                                                                <img class="img-fluid rounded-circle" width="35px"
                                                                    src="{{ !empty($category->logo) ? asset('storage/' . $category->logo) : asset('storage/main/no-image-available.png') }}"
                                                                    alt="{{ $category->slug }} Logo">
                                                            </p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-12">
                                                    <div class="row">
                                                        <div class="col-lg-3 col-sm-5">
                                                            <p class="fw-bold">Description</p>
                                                        </div>
                                                        <div class="col-lg-9 col-sm-6">
                                                            <p>
                                                                {{ $category->description }}
                                                            </p>
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



@endsection

@push('scripts')
    {{-- Hide the Parent Name Input Field On Checkbox Click Start  --}}
    <script>
        $(document).ready(function() {
            // Toggle visibility on checkbox change
            $('#flexRadioLg').change(function() {
                var checkbox = $('.form-check-input');
                if (checkbox.is(':checked')) {
                    $('.hide_parent_input').hide();
                } else {
                    $('.hide_parent_input').show();
                }
            });
            $('.categoryEditModal').click(function() {
                var categoryId = $(this).data('id');
                // alert(categoryId);
                var parentInputContainer = $('#parentInputContainer-' + categoryId);
                var checkboxID = $('#flexRadioLg-' + categoryId);

                if (checkboxID.is(':checked')) {
                    parentInputContainer.hide();
                } else {
                    parentInputContainer.show();
                }
            });
        });
    </script>
@endpush
