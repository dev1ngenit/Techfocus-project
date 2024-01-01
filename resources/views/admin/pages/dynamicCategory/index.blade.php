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
                                    <div class="card-title justify-content-center">
                                        <h2 class="text-center">Dynamic Category</h2>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-sm-12 text-lg-end text-sm-center">
                                    <button type="button" class="btn btn-sm btn-light-success rounded-0 p-3"
                                        data-kt-menu-placement="bottom-end" data-bs-toggle="modal"
                                        data-bs-target="#dynamicCategoryAdd">
                                        Add New
                                    </button>
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
                                    <th width="35%">Name</th>
                                    <th width="25%">Type</th>
                                    <th width="30%">Status</th>
                                    <th class="text-center" width="10%">Action</th>
                            </thead>
                            <tbody class="fw-bold text-gray-600 text-center">
                                @foreach ($dynamicCategories as $dynamicCategory)
                                    <tr class="odd">
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $dynamicCategory->name }}</td>
                                        <td>{{ formatText($dynamicCategory->type) }}</td>
                                        <td>
                                            <span @class([
                                                'badge',
                                                'badge-success' => $dynamicCategory->status == 'active',
                                                'badge-danger' => $dynamicCategory->status == 'inactive',
                                            ])>
                                                {{ $dynamicCategory->status }}
                                            </span>
                                        </td>
                                        <td>
                                            <div class="d-flex justify-content-between align-items-center">
                                                <a href="javascript:void()"
                                                    class="btn btn-icon btn-bg-light btn-active-color-primary btn-sm me-1"
                                                    data-kt-menu-placement="bottom-end" data-bs-toggle="modal"
                                                    data-bs-target="#dynamicCategoryEdit_{{ $dynamicCategory->id }}">
                                                    <i class="fa-solid fa-pen"></i>
                                                </a>
                                                <a href="{{ route('admin.dynamic-category.destroy', $dynamicCategory->id) }}"
                                                    class="btn btn-icon btn-bg-light btn-active-color-primary btn-sm me-1 delete"
                                                    data-kt-docs-table-filter="delete_row">
                                                    <i class="fa-solid fa-trash-can-arrow-up"></i>
                                                </a>
                                            </div>
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
    <div class="modal fade" id="dynamicCategoryAdd" data-backdrop="static">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content rounded-0 border-0 shadow-sm">
                <div class="modal-header p-2 rounded-0">
                    <h5 class="modal-title">Add Dynamic Category</h5>
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
                <form method="POST" action="{{ route('admin.dynamic-category.store') }}" class="needs-validation"
                    novalidate>
                    @csrf
                    <div class="modal-body">
                        <div class="container px-0">
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="fv-row mb-3">
                                        <label class="form-label">Name</label>
                                        <input name="name"
                                            class="form-control form-control-sm form-control-solid @error('name') is-invalid @enderror"
                                            placeholder="Enter Button Name" type="text" maxlength="100" />
                                        @error('name')
                                            <div class="invalid-feedback"> {{ message }}</div>
                                        @enderror
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <label for="validationCustom04"
                                        class="form-label type @error('type') is-invalid @enderror">Type</label>
                                    <select class="form-select form-select-solid form-select-sm" name="type"
                                        data-dropdown-parent="#dynamicCategoryAdd" data-control="select2"
                                        data-placeholder="Select an option" data-allow-clear="true">
                                        <option></option>
                                        <option value="hr_policies">Hr Policy</option>
                                    </select>
                                    @error('type')
                                        <div class="invalid-feedback"> {{ message }}</div>
                                    @enderror
                                </div>

                                <div class="col-md-6">
                                    <label for="validationCustom04"
                                        class="form-label status @error('status') is-invalid @enderror">Status</label>
                                    <select class="form-select form-select-solid form-select-sm" name="status"
                                        data-dropdown-parent="#dynamicCategoryAdd" data-control="select2"
                                        data-placeholder="Select an option" data-allow-clear="true">
                                        <option></option>
                                        <option value="active">Active</option>
                                        <option value="inactive">Inactive</option>
                                    </select>
                                    @error('status')
                                        <div class="invalid-feedback"> {{ message }}</div>
                                    @enderror
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
    @foreach ($dynamicCategories as $dynamicCategory)
        <div class="modal fade" id="dynamicCategoryEdit_{{ $dynamicCategory->id }}" data-backdrop="static">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content rounded-0 border-0 shadow-sm">
                    <div class="modal-header p-2 rounded-0">
                        <h5 class="modal-title">Edit Dynamic Category</h5>
                        <!-- Close button in the header -->
                        <div class="btn btn-icon btn-sm btn-active-light-primary ms-2" data-bs-dismiss="modal"
                            aria-label="Close">
                            <!--begin::Svg Icon | path: icons/duotune/arrows/arr061.svg-->
                            <span class="svg-icon svg-icon-2x">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                    viewBox="0 0 24 24" fill="none">
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
                    <form method="POST" action="{{ route('admin.dynamic-category.update', $dynamicCategory->id) }}"
                        class="needs-validation" novalidate>
                        @csrf
                        @method('PUT')
                        <div class="modal-body">
                            <div class="container px-0">
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="fv-row mb-3">
                                            <label class="form-label">Name</label>
                                            <input name="name" value="{{ $dynamicCategory->name }}"
                                                class="form-control form-control-sm form-control-solid @error('name') is-invalid @enderror"
                                                placeholder="Enter Button Name" type="text" />
                                            @error('name')
                                                <div class="invalid-feedback"> {{ message }}</div>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <label for="validationCustom04"
                                            class="form-label type @error('type') is-invalid @enderror">Type</label>
                                        <select class="form-select form-select-solid form-select-sm" name="type"
                                            data-dropdown-parent="#dynamicCategoryEdit_{{ $dynamicCategory->id }}" data-control="select2"
                                            data-placeholder="Select an option" data-allow-clear="true">
                                            <option></option>
                                            @foreach ($dynamicCategories as $dynamicCategory)
                                                <option @selected($dynamicCategory->type == $dynamicCategory->type) value="{{ $dynamicCategory->type }}">
                                                    Hr Policy</option>
                                            @endforeach
                                        </select>
                                        @error('type')
                                            <div class="invalid-feedback"> {{ message }}</div>
                                        @enderror
                                    </div>

                                    <div class="col-md-6">
                                        <label for="validationCustom04"
                                            class="form-label status @error('status') is-invalid @enderror">Status</label>
                                        <select class="form-select form-select-solid form-select-sm" name="status"
                                            data-dropdown-parent="#dynamicCategoryEdit_{{ $dynamicCategory->id }}"
                                            data-control="select2" data-placeholder="Select an option"
                                            data-allow-clear="true">
                                            <option></option>
                                            <option @selected($dynamicCategory->status == 'active') value="active">Active</option>
                                            <option @selected($dynamicCategory->status == 'inactive') value="inactive">Inactive</option>
                                        </select>
                                        @error('status')
                                            <div class="invalid-feedback"> {{ message }}</div>
                                        @enderror
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
    @endforeach
@endsection
