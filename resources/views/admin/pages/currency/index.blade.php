@extends('admin.master')
@section('metadata')
@endsection
@section('content')
    <div class="container h-100">
        <div class="row">
            <div class="col-lg-12 card rounded-0 shadow-lg">
                <div class="card card-p-0 card-flush">
                    <div class="card-header align-items-center pt-2 pb-1 gap-2 gap-md-5">
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
                                        <h2>Available Currency</h2>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-sm-12 text-lg-end text-sm-center">

                                    <button type="button" class="btn btn-sm btn-light-success rounded-0"
                                        data-kt-menu-placement="bottom-end" data-bs-toggle="modal"
                                        data-bs-target="#currencyAddModal">
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
                            id="kt_datatable_example">
                            <thead class="table_header_bg">
                                <!--begin::Table row-->
                                <tr class="text-center text-gray-900 fw-bolder fs-7 text-uppercase">
                                    <th width="5%">Sl</th>
                                    <th width="10%">Logo</th>
                                    <th width="40%">Name</th>
                                    <th width="10%">Image</th>
                                    <th class="text-center" width="10%">Action</th>
                                </tr>
                                <!--end::Table row-->
                            </thead>
                            <tbody class="fw-bold text-gray-600 text-center">
                                @if ($currencys)
                                    @foreach ($currencys as $currency)
                                        <tr class="odd">
                                            <td>{{ $loop->iteration }}</td>
                                            <td>
                                                <img class="img-fluid" width="50px"
                                                    src="{{ !empty($currency->logo) && file_exists(public_path('storage/currency/logo/' . $currency->logo)) ? asset('storage/currency/logo/' . $currency->logo) : asset('backend/images/no-image-available.png') }}"
                                                    alt="{{ $currency->name }} Logo">
                                            </td>

                                            <td>{{ $currency->title }}</td>
                                            <td>
                                                <img class="img-fluid" width="50px"
                                                    src="{{ !empty($currency->image) && file_exists(public_path('storage/currency/image/' . $currency->image)) ? asset('storage/currency/image/' . $currency->image) : asset('backend/images/no-image-available.png') }}"
                                                    alt="{{ $currency->name }} image">
                                            </td>
                                            <td>
                                                <div class="d-flex justify-content-between align-items-center">
                                                    <a href="#"
                                                        class="btn btn-icon btn-bg-light btn-active-color-primary btn-sm me-1"
                                                        data-bs-toggle="modal"
                                                        data-bs-target="#currencyViewModal_{{ $currency->id }}">
                                                        <i class="fa-solid fa-expand"></i>
                                                        <!--View-->
                                                    </a>
                                                    <a href="#"
                                                        class="btn btn-icon btn-bg-light btn-active-color-primary btn-sm me-1"
                                                        data-bs-toggle="modal"
                                                        data-bs-target="#currencyEditModal_{{ $currency->id }}">
                                                        <i class="fa-solid fa-pen"></i>
                                                        <!--Edit-->
                                                    </a>
                                                    <a href="{{ route('admin.currency.destroy', $currency->id) }}"
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

                        {{-- <p>{!! nl2br() !!}</p> --}}
                    </div>
                </div>
            </div>
        </div>
    </div>
    {{-- Add Modal --}}
    <div class="modal fade" id="currencyAddModal" data-backdrop="static">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content rounded-0 border-0 shadow-sm">
                <div class="modal-header p-2 rounded-0">
                    <h5 class="modal-title">Add currency</h5>
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
                <form method="POST" action="{{ route('admin.currency.store') }}" class="needs-validation" novalidate
                    enctype="multipart/form-data">
                    @csrf
                    <div class="modal-body">
                        <div class="container px-0">
                            <div class="row">
                                <div class="col-lg-12 col-sm-12">
                                    <div class="row">
                                        {{-- <div class="col-md-6">
                                        <label for="validationCustom04" class="form-label required">Country
                                            Name</label>
                                        <select class="form-select form-select-solid" name="country_id"
                                            data-dropdown-parent="#currencyAddModal" data-control="select2"
                                            data-placeholder="Select an option" data-allow-clear="true" required>
                                            <option></option>
                                            @foreach (getAllCountry() as $country)
                                                <option value="{{ $country->id }}">{{ $country->name }}</option>
                                            @endforeach
                                        </select>
                                        <div class="valid-feedback"> Looks good! </div>
                                        <div class="invalid-feedback"> Please provide a valid zip. </div>
                                    </div> --}}
                                        <div class="col-md-6 mb-1">
                                            <label for="validationCustom01" class="form-label required ">Currency Name
                                            </label>
                                            <input type="text" class="form-control form-control-solid form-control-sm"
                                                name="name" id="validationCustom01" placeholder="Enter Name" required>
                                            <div class="valid-feedback"> Looks good! </div>
                                            <div class="invalid-feedback"> Please Enter Name </div>
                                        </div>
                                        <div class="col-md-6 mb-1">
                                            <label for="validationCustom01" class="form-label">Currency Symbol
                                            </label>
                                            <input type="text" class="form-control form-control-solid form-control-sm"
                                                name="symbol" id="validationCustom01"
                                                placeholder="Enter Currency Symbol">
                                        </div>
                                        <div class="col-md-6 mb-1">
                                            <label for="validationCustom01" class="form-label">Code
                                            </label>
                                            <input type="text" class="form-control form-control-solid form-control-sm"
                                                name="code" id="validationCustom01" placeholder="Enter Code">
                                        </div>
                                        <div class="col-lg-6 mb-1">
                                            <label class="form-label"></label>
                                            <div class="form-check form-check-custom form-check-solid mb-5">
                                                <input class="form-check-input me-3" name="system_default_currency"
                                                    type="checkbox" value="true" id="defaultCheckbox">
                                                <label class="form-check-label">
                                                    <div class="fw-bolder text-gray-800">Is Default </div>
                                                </label>
                                            </div>
                                        </div>
                                        <div class="col-md-6 mb-1" id="defaultInputContainer">
                                            <label for="validationCustom01" class="form-label">Exchange Rate
                                            </label>
                                            <input type="number" step="0.000001"
                                                class="form-control form-control-solid form-control-sm"
                                                name="exchange_rate" id="validationCustom01"
                                                placeholder="Enter Exchange Rate">
                                        </div>
                                        <div class="col-md-6 mb-1">
                                            <label for="thousand_separator" class="form-label">Thousand Separator</label>
                                            <select class="form-control form-control-sm" id="thousand_separator"
                                                name="thousand_separator">
                                                <option value="." selected> . (23.456,70)</option>
                                                <option value=","> , (23,456.70)</option>
                                            </select>
                                        </div>
                                        <div class="col-md-6 mb-1">
                                            <label for="decimal_separator" class="form-label">Decimal Separator</label>
                                            <select class="form-control form-control-sm" id="decimal_separator"
                                                name="decimal_separator">
                                                <option value="." selected> . (1.23.456,70)</option>
                                                <option value=","> , (1,23,456.70)</option>
                                            </select>
                                        </div>
                                        <div class="col-md-6 mb-1">
                                            <label for="decimal_separator" class="form-label">Decimal Separator</label>
                                            <select class="form-control form-control-sm" id="decimal_separator"
                                                name="decimal_separator">
                                                <option value="." selected> . (1.23.456,70)</option>
                                                <option value=","> , (1,23,456.70)</option>
                                            </select>
                                        </div>
                                        
                                        <div class="form-group">
                                            <label for="no_of_decimals">Number of Decimals</label>
                                            <select class="form-control form-control-sm" id="no_of_decimals"
                                                name="no_of_decimals">
                                                <option value="." selected> . (1.23.456,70)</option>
                                                <option value=","> , (1,23,456.70)</option>
                                            </select>
                                            <input type="number" class="form-control" id="no_of_decimals"
                                                name="no_of_decimals" placeholder="Enter number of decimals"
                                                value="2">
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
    @foreach ($currencys as $currency)
        <div class="modal fade" id="currencyEditModal_{{ $currency->id }}" data-backdrop="static">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content rounded-0 border-0 shadow-sm">
                    <div class="modal-header p-2 rounded-0">
                        <h5 class="modal-title">Edit currency</h5>
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
                    <form method="POST" action="{{ route('admin.currency.update', $currency->id) }}"
                        class="needs-validation" novalidate enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="modal-body">
                            <div class="container px-0">
                                <div class="row">
                                    <div class="col-lg-12 col-sm-12">
                                        <div class="row">
                                            {{-- <div class="col-md-6">
                                            <label for="validationCustom04" class="form-label required">Country
                                                Name</label>
                                            <select class="form-select form-select-solid" name="country_id"
                                                data-dropdown-parent="#currencyEditModal_{{ $currency->id }}" data-control="select2"
                                                data-placeholder="Select an option" data-allow-clear="true" required>
                                                <option></option>
                                                @foreach (getAllCountry() as $country)
                                                    <option @selected($country->id == $currency->country_id) value="{{ $country->id }}">
                                                        {{ $country->name }}</option>
                                                @endforeach
                                            </select>
                                            <div class="valid-feedback"> Looks good! </div>
                                            <div class="invalid-feedback"> Please provide a valid zip. </div>
                                        </div> --}}
                                            <div class="col-md-6 mb-1">
                                                <label for="validationCustom01" class="form-label required ">currency Name
                                                </label>
                                                <input type="text"
                                                    class="form-control form-control-solid form-control-sm" name="title"
                                                    value="{{ $currency->title }}" id="validationCustom01"
                                                    placeholder="Enter Name" required>
                                                <div class="valid-feedback"> Looks good! </div>
                                                <div class="invalid-feedback"> Please Enter Name </div>
                                            </div>
                                            <div class="col-md-6 mb-1">
                                                <label for="validationCustom01" class="form-label  ">Image
                                                </label>
                                                <input type="file"
                                                    class="form-control form-control-solid form-control-sm" name="image"
                                                    id="validationCustom01">
                                                <div class="valid-feedback"> Looks good! </div>
                                                <div class="invalid-feedback"> Please Enter Image(jpg,jpeg,png) </div>
                                            </div>
                                            <div class="col-md-6 mb-1">
                                                <label for="validationCustom01" class="form-label  ">Logo
                                                </label>
                                                <input type="file"
                                                    class="form-control form-control-solid form-control-sm" name="logo"
                                                    id="validationCustom01">
                                                <div class="valid-feedback"> Looks good! </div>
                                                <div class="invalid-feedback"> Please Enter logo(jpg,jpeg,png) </div>
                                            </div>
                                            <div class="col-md-6 mb-1">
                                                <label for="validationCustom01" class="form-label">Website URL
                                                </label>
                                                <input type="url"
                                                    class="form-control form-control-solid form-control-sm"
                                                    name="website_url" value="{{ $currency->website_url }}"
                                                    id="validationCustom01" placeholder="Enter Web Site Url">
                                                <div class="valid-feedback"> Looks good! </div>
                                                <div class="invalid-feedback"> Please Enter Url </div>
                                            </div>
                                            <div class="col-md-6">
                                                <label for="validationCustom010" class="form-label">Description</label>
                                                <textarea rows="1" name="description" class="form-control form-control-sm form-control-solid">{{ $currency->description }}</textarea>
                                                <div class="valid-feedback"> Looks good! </div>
                                                <div class="invalid-feedback"> Please Enter description</div>
                                            </div>
                                            <div class="col-md-6">
                                                <label for="validationCustom04"
                                                    class="form-label required">Category</label>
                                                <select class="form-select form-select-solid" name="category"
                                                    data-dropdown-parent="#currencyEditModal_{{ $currency->id }}"
                                                    data-control="select2" data-placeholder="Select an option"
                                                    data-allow-clear="true" required>
                                                    <option></option>
                                                    <option value="Top"
                                                        {{ $currency->category == 'Top' ? 'selected' : '' }}>
                                                        Top
                                                    </option>
                                                    <option value="Featured"
                                                        {{ $currency->category == 'Featured' ? 'selected' : '' }}>
                                                        Featured</option>
                                                    <option value="Others"
                                                        {{ $currency->category == 'Others' ? 'selected' : '' }}>
                                                        Others</option>
                                                </select>
                                                <div class="valid-feedback"> Looks good! </div>
                                                <div class="invalid-feedback"> Please provide a valid Option. </div>
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

        <div class="modal fade" id="currencyViewModal_{{ $currency->id }}" data-backdrop="static">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content rounded-0 border-0 shadow-sm">
                    <div class="modal-header p-2 rounded-0">
                        <h5 class="modal-title mb-0 text-center">currency View </h5>
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
                        </div>
                    </div>
                    <div class="modal-body">
                        <div class="container px-0">
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="card border rounded-0">
                                        {{-- <p class="badge badge-info custom-badge">currency</span> --}}
                                        <div class="card-body p-1 px-2">
                                            <div class="row">

                                                <div class="col-lg-12 mb-3">
                                                    <div class="row">
                                                        <div class="col-lg-7 col-sm-5">
                                                            <p class="fw-bold">currency Name</p>
                                                        </div>
                                                        <div class="col-lg-5 col-sm-6">
                                                            <p>{{ $currency->title }}</p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-6 mb-3">
                                                    <div class="row">
                                                        <div class="col-lg-7 col-sm-5">
                                                            <p class="fw-bold">Image</p>
                                                        </div>
                                                        <div class="col-lg-5 col-sm-6">
                                                            <p>
                                                                <img class="img-fluid rounded-circle" width="35px"
                                                                    src="{{ !empty($currency->image) && file_exists(public_path('storage/currency/image/' . $currency->image)) ? asset('storage/currency/image/' . $currency->image) : asset('backend/images/no-image-available.png') }}"
                                                                    alt="{{ $currency->image }}">
                                                            </p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-6 mb-3">
                                                    <div class="row">
                                                        <div class="col-lg-7 col-sm-5">
                                                            <p class="fw-bold">Logo</p>
                                                        </div>
                                                        <div class="col-lg-5 col-sm-6">
                                                            <p>
                                                                <img class="img-fluid" width="50px"
                                                                    src="{{ !empty($currency->logo) && file_exists(public_path('storage/currency/logo/' . $currency->logo)) ? asset('storage/currency/logo/' . $currency->logo) : asset('backend/images/no-image-available.png') }}"
                                                                    alt="{{ $currency->name }} Logo">
                                                            </p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-12 mb-3">
                                                    <div class="row">
                                                        <div class="col-lg-3 col-sm-5">
                                                            <p class="fw-bold">Description</p>
                                                        </div>
                                                        <div class="col-lg-9 col-sm-6">
                                                            <p>
                                                                {{ $currency->description }}
                                                            </p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-12 mb-3">
                                                    <div class="row">
                                                        <div class="col-lg-3 col-sm-5">
                                                            <p class="fw-bold">Website Url</p>
                                                        </div>
                                                        <div class="col-lg-9 col-sm-6">
                                                            <p>
                                                                <a href="{{ $currency->website_url }}">{{ $currency->website_url }}
                                                                </a>
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
    <script>
        $(document).ready(function() {
            $('#defaultCheckbox').change(function() {
                var checkbox = $('#defaultCheckbox');
                if (checkbox.is(':checked')) {
                    $('#defaultInputContainer').hide();
                } else {
                    $('#defaultInputContainer').show();
                }
            });
            });
    </script>
@endpush