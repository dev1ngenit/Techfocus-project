@extends('admin.master')
@section('content')
    <div class="container h-100">
        <div class="row gap-4 mx-auto">
            <div class="col-lg-7 card rounded-0 custom_shadow">
                <div class="card card-p-0 card-flush">
                    <div class="card-header align-items-center py-1 gap-2 gap-md-5">
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
                                <div class="col-lg-6 col-sm-12 text-lg-center text-sm-center">
                                    <div class="card-title table_title">
                                        <h2 class="mt-3">Colors</h2>
                                    </div>
                                </div>
                                
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <table
                            class="table table-striped table-hover align-middle rounded-0 table-row-bordered border fs-6 g-5"
                            id="kt_datatable_example">
                            <thead class="table_header_bg">
                                <!--begin::Table row-->
                                <tr class="text-center text-gray-900 fw-bolder fs-7 text-uppercase">
                                    <th width="10%">Sl</th>
                                    <th width="50%">Name</th>
                                    <th width="25%">Color Code</th>
                                    <th width="15%">Action</th>
                                    <!--end::Table row-->
                            </thead>
                            <tbody class="fw-bold text-gray-600 text-center">
                                @if (count($colors) > 0)
                                    @foreach ($colors as $key => $color)
                                        <tr>
                                            <td>
                                                {{ ++$key }}
                                            </td>
                                            <td>
                                                {{ $color->name }}
                                            </td>
                                            <td>
                                                <div class="d-flex align-items-center">
                                                    <div class="me-4"
                                                        style="display: inline-block; width: 20px; height: 20px; background-color: {{ $color->color_code }};">
                                                    </div>
                                                    <p class="mb-0">
                                                        {{ $color->color_code }}
                                                    </p>
                                                </div>
                                            </td>
                                            <td class="d-flex justify-content-between align-items-center">
                                                <a href="#"
                                                    class="btn btn-icon btn-bg-light btn-active-color-primary btn-sm me-1"
                                                    data-bs-toggle="modal"
                                                    data-bs-target="#colorEditModal-{{ $color->id }}">
                                                    <!--begin::Svg Icon | path: icons/duotune/art/art005.svg-->
                                                    <i class="fa-solid fa-pen"></i>
                                                    <!--Edit-->
                                                </a>
                                                <a href="{{ route('admin.product-color.destroy', $color->id) }}"
                                                    class="btn btn-icon btn-bg-light btn-active-color-primary btn-sm me-1 delete"
                                                    data-kt-docs-table-filter="delete_row">
                                                    <!--begin::Svg Icon | path: icons/duotune/art/art005.svg-->
                                                    <i class="fa-solid fa-trash-can-arrow-up"></i>
                                                    <!--Delete-->
                                                </a>
                                            </td>
                                        </tr>
                                    @endforeach
                                @endif
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 card rounded-0 custom_shadow">
                <form action="{{ route('admin.product-color.store') }}" class="needs-validation" method="post" novalidate>
                    @csrf
                    <div class="card">
                        <div class="card-header d-flex justify-content-center align-items-center py-3">
                            <h6 class="mb-0 w-175px text-center">Add Color</h6>
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-12 mb-5">
                                    <label for="validationCustom01" class="form-label required ">Name </label>
                                    <input type="text" class="form-control form-control-solid form-control-sm"
                                        name="name" id="validationCustom01" placeholder="Enter Name" required>
                                    <div class="valid-feedback"> Looks good! </div>
                                    <div class="invalid-feedback"> Please Enter Color Code E.g: #FFFF</div>
                                </div>
                                <div class="col-md-12 mb-5">
                                    <label for="colorCode" class="form-label required">Values</label>
                                    <div class="row align-items-center">
                                        <div class="col-4">
                                            <input type="color" pattern="#[0-9a-fA-F]{6}"
                                                class="form-control form-control-solid form-control-sm colorCode"
                                                name="color_code" step="0.01" id="colorCode"
                                                placeholder="Enter Color Code" style="height:3rem;" required>
                                        </div>
                                        <div class="col-8">
                                            {{-- <div class="input-group-append"> --}}
                                            <span class="input-group-text rounded-0 colorCodePreview"
                                                id="colorCodePreview">#000000</span>
                                            {{-- </div> --}}
                                        </div>
                                    </div>

                                    <div class="valid-feedback">Looks good!</div>
                                    <div class="invalid-feedback">Please Enter a Valid Color Code (e.g., #000000)
                                        Must 6 Ch </div>
                                </div>
                                <div class="col-md-12 mb-3">
                                    <div class="d-flex justify-content-end align-items-center">
                                        <button type="submit" id="common_submit"
                                            class="btn btn-lg common-btn-3 fw-bolder me-4 w-125px">
                                            <span class="indicator-label">Submit</span>
                                            <span class="indicator-progress">Please wait...
                                                <span class="spinner-border spinner-border-sm align-middle ms-2"></span>
                                            </span>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    {{-- Edit Modal --}}
    @foreach ($colors as $color)
        <div class="modal fade" id="colorEditModal-{{ $color->id }}" data-backdrop="static">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content rounded-0 border-0 shadow-sm">
                    <div class="modal-header p-2 rounded-0">
                        <h5 class="modal-title">Edit Color</h5>
                        <!-- Close button in the header -->
                        <div class="btn btn-icon btn-sm btn-active-light-primary ms-2" data-bs-dismiss="modal"
                            aria-label="Close">
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
                    <form action="{{ route('admin.product-color.update', $color->id) }}" class="needs-validation"
                        method="post" novalidate>
                        @csrf
                        @method('PUT')
                        <div class="modal-body">
                            <div class="container px-0">
                                <div class="row modal_body_badge">
                                    <div class="col-lg-12 col-sm-12">
                                        <div class="row">
                                            <div class="col-md-6 mb-1">
                                                <label for="validationCustom01" class="form-label required ">Name </label>
                                                <input type="text"
                                                    class="form-control form-control-solid form-control-sm" name="name"
                                                    id="validationCustom01" value="{{ $color->name }}"
                                                    placeholder="Enter Name" required>
                                                <div class="valid-feedback"> Looks good! </div>
                                                <div class="invalid-feedback"> Please Enter Color Code E.g: #FFFF</div>
                                            </div>
                                            <div class="col-md-6 mb-1">
                                                <label for="validationCustom01" class="form-label required">Values</label>
                                                <div class="row align-items-center">
                                                    <div class="col-4">
                                                        <input type="color" pattern="#[0-9a-fA-F]{6}"
                                                            class="form-control form-control-solid form-control-sm colorCode"
                                                            name="color_code" step="0.01" id="colorCode"
                                                            value="{{ $color->color_code }}"
                                                            placeholder="Enter Color Code" style="height:3rem;" required>
                                                    </div>
                                                    <div class="col-8">
                                                        {{-- <div class="input-group-append"> --}}
                                                        <span class="input-group-text rounded-0 colorCodePreview"
                                                            id="colorCodePreview">{{ $color->color_code }}</span>
                                                        {{-- </div> --}}
                                                    </div>
                                                </div>
                                                <div class="valid-feedback">Looks good!</div>
                                                <div class="invalid-feedback">Please enter a valid color code (e.g.,
                                                    #RRGGBB)
                                                    with 6 characters.</div>
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
    @endforeach
@endsection

@push('scripts')
    
    <script>
        $(document).ready(function() {
            // Attach an input event listener to the color input
            $('.colorCode').on('input', function() {
                // Get the entered color code
                var colorCode = $(this).val();

                // Update the content of the preview element
                $('.colorCodePreview').text(colorCode);
            });
        });
    </script>
@endpush
