@extends('admin.master')
@section('content')
    <div class="container-fluid h-100">
        <div class="row">
            <div class="col-lg-12 card rounded-0 shadow-sm">
                <div class="card card-p-0 card-flush">
                    <div class="card-header align-items-center py-5 gap-2 gap-md-5">
                        <div class="container-fluid">
                            <div class="row">
                                <div class="col-lg-4 col-sm-12 text-lg-start text-sm-center">
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
                                    <div id="kt_datatable_example_1_export" class="d-none"></div>
                                </div>
                                <div class="col-lg-4 col-sm-12 text-lg-center text-sm-center">
                                    <div class="card-title table_title">
                                        <h2 class="text-center">Sales Year Target</h2>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-sm-12 text-lg-end text-sm-center">
                                    <button type="button" class="btn btn-sm btn-light-success rounded-0"
                                        data-kt-menu-placement="bottom-end" data-bs-toggle="modal"
                                        data-bs-target="#salesYearAddModal">
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
                                    <th width="40%">Company Name</th>
                                    <th width="15%">Fiscal Year</th>
                                    <th width="15%">Year Target</th>
                                    <th width="15%">Year Started</th>
                                    <th width="10%">Action</th>
                                </tr>
                            </thead>
                            <tbody class="fw-bold text-gray-600 text-center">
                                @if ($salesYearTargets)
                                    @foreach ($salesYearTargets as $salesYearTarget)
                                        <tr class="odd">
                                            <td>
                                                {{ $loop->iteration }}
                                            </td>
                                            <td>
                                                <span>{{ $salesYearTarget->companyName() ?? 'No Company' }}</span>
                                            </td>
                                            <td>
                                                {{ $salesYearTarget->fiscal_year }}
                                            </td>
                                            <td>
                                                {{ $salesYearTarget->year_target }}
                                            </td>
                                            <td>
                                                {{ $salesYearTarget->year_started }}
                                            </td>
                                            <td>
                                                <div class="d-flex justify-content-center align-items-center">
                                                    <a href="#"
                                                        class="btn btn-icon btn-bg-light btn-active-color-primary btn-sm me-1"
                                                        data-bs-toggle="modal"
                                                        data-bs-target="#salesmanEditModal_{{ $salesYearTarget->id }}">
                                                        <i class="fa-solid fa-pen"></i>
                                                    </a>
                                                    <a href="{{ route('admin.sales-year-target.destroy', $salesYearTarget->id) }}"
                                                        class="btn btn-icon btn-bg-light btn-active-color-primary btn-sm me-1 delete"
                                                        data-kt-docs-table-filter="delete_row">
                                                        <i class="fa-solid fa-trash-can-arrow-up"></i>
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
    <div class="modal fade" id="salesYearAddModal" data-backdrop="static">
        <div class="modal-dialog modal-dialog-centered modal-lg">
            <div class="modal-content rounded-0 border-0 shadow-sm">
                <div class="modal-header p-2 rounded-0">
                    <h5 class="modal-title ps-5">Add Sales Year</h5>
                    <div class="btn btn-icon btn-sm btn-active-light-primary ms-2" data-bs-dismiss="modal"
                        aria-label="Close">
                        <i class="fa-solid fa-circle-xmark"></i>
                    </div>
                </div>
                <form action="{{ route('admin.sales-year-target.store') }}" class="needs-validation" method="post"
                    novalidate>
                    @csrf
                    <div class="modal-body">
                        <div class="container-fluid">
                            <div class="row">
                                <div class="col-lg-12 col-sm-12">
                                    <div class="row">
                                        <div class="col-md-3 mb-2">
                                            <label for="validationCustom04" class="form-label required">Country
                                                Name</label>
                                            <select class="form-select form-select-solid" name="country_id"
                                                data-dropdown-parent="#salesYearAddModal" data-control="select2"
                                                data-placeholder="Select an option" data-allow-clear="true" required>
                                                <option></option>
                                                @foreach (getAllCountry() as $country)
                                                    <option value="{{ $country->id }}">
                                                        {{ $country->name }}</option>
                                                @endforeach
                                            </select>
                                            <div class="valid-feedback"> Looks good! </div>
                                            <div class="invalid-feedback"> Please provide a valid zip. </div>
                                        </div>
                                        <div class="col-md-3 mb-2">
                                            <label for="validationCustom04" class="form-label required">Company
                                                Name</label>
                                            <select class="form-select form-select-solid" name="company_id"
                                                data-dropdown-parent="#salesYearAddModal" data-control="select2"
                                                data-placeholder="Select an option" data-allow-clear="true">
                                                <option></option>
                                                @foreach ($companies as $company)
                                                    <option value="{{ $company->id }}">
                                                        {{ $company->name }}</option>
                                                @endforeach
                                            </select>
                                            <div class="valid-feedback"> Looks good! </div>
                                            <div class="invalid-feedback"> Please provide a valid zip. </div>
                                        </div>

                                        <div class="col-md-3 mb-2">
                                            <label for="validationCustom01" class="form-label required mb-0">Fiscal Year
                                            </label>
                                            <input type="number" class="form-control form-control-solid form-control-sm"
                                                name="fiscal_year" id="validationCustom01" required>
                                            <div class="invalid-feedback"> Please Enter Fiscal Year </div>
                                        </div>

                                        <div class="col-md-3 mb-2">
                                            <label for="validationCustom01" class="form-label required mb-0">Year Target
                                            </label>
                                            <input type="number" step="0.01"
                                                class="form-control form-control-solid form-control-sm" name="year_target"
                                                id="validationCustom01" required>
                                            <div class="invalid-feedback"> Please Enter Year Target </div>
                                        </div>
                                        <div class="col-md-3 mb-2">
                                            <label for="validationCustom01" class="form-label required mb-0">Quarter One
                                                Target
                                            </label>
                                            <input type="number" step="0.01"
                                                class="form-control form-control-solid form-control-sm"
                                                name="quarter_one_target" id="validationCustom01" required>
                                            <div class="invalid-feedback"> Please Enter Quarter One Target </div>
                                        </div>
                                        <div class="col-md-3 mb-2">
                                            <label for="validationCustom01" class="form-label required mb-0">Quarter Two
                                                Target
                                            </label>
                                            <input type="number" step="0.01"
                                                class="form-control form-control-solid form-control-sm"
                                                name="quarter_two_target" id="validationCustom01" required>
                                            <div class="invalid-feedback"> Please Enter Quarter Two Target </div>
                                        </div>
                                        <div class="col-md-3 mb-2">
                                            <label for="validationCustom01" class="form-label required mb-0">Quarter Three
                                                Target
                                            </label>
                                            <input type="number" step="0.01"
                                                class="form-control form-control-solid form-control-sm"
                                                name="quarter_three_target" id="validationCustom01" required>
                                            <div class="invalid-feedback"> Please Enter Quarter Three Target </div>
                                        </div>
                                        <div class="col-md-3 mb-2">
                                            <label for="validationCustom01" class="form-label required mb-0">Quarter Four
                                                Target
                                            </label>
                                            <input type="number" step="0.01"
                                                class="form-control form-control-solid form-control-sm"
                                                name="quarter_four_target" id="validationCustom01" required>
                                            <div class="invalid-feedback"> Please Enter Quarter Four Target </div>
                                        </div>


                                        <div class="col-md-3 mb-2">
                                            <label for="validationCustom01" class="form-label required mb-0">January
                                                Target
                                            </label>
                                            <input type="number" step="0.01"
                                                class="form-control form-control-solid form-control-sm"
                                                name="january_target" id="validationCustom01" required>
                                            <div class="invalid-feedback"> Please Enter January Target </div>
                                        </div>
                                        <div class="col-md-3 mb-2">
                                            <label for="validationCustom01" class="form-label required mb-0">February
                                                Target
                                            </label>
                                            <input type="number" step="0.01"
                                                class="form-control form-control-solid form-control-sm"
                                                name="february_target" id="validationCustom01" required>
                                            <div class="invalid-feedback"> Please Enter February Target </div>
                                        </div>
                                        <div class="col-md-3 mb-2">
                                            <label for="validationCustom01" class="form-label required mb-0">March Target
                                            </label>
                                            <input type="number" step="0.01"
                                                class="form-control form-control-solid form-control-sm"
                                                name="march_target" id="validationCustom01" required>
                                            <div class="invalid-feedback"> Please Enter March Target </div>
                                        </div>
                                        <div class="col-md-3 mb-2">
                                            <label for="validationCustom01" class="form-label required mb-0">April Target
                                            </label>
                                            <input type="number" step="0.01"
                                                class="form-control form-control-solid form-control-sm"
                                                name="april_target" id="validationCustom01" required>
                                            <div class="invalid-feedback"> Please Enter April Target </div>
                                        </div>
                                        <div class="col-md-3 mb-2">
                                            <label for="validationCustom01" class="form-label required mb-0">May Target
                                            </label>
                                            <input type="number" step="0.01"
                                                class="form-control form-control-solid form-control-sm" name="may_target"
                                                id="validationCustom01" required>
                                            <div class="invalid-feedback"> Please Enter May Target </div>
                                        </div>
                                        <div class="col-md-3 mb-2">
                                            <label for="validationCustom01" class="form-label required mb-0">June Target
                                            </label>
                                            <input type="number" step="0.01"
                                                class="form-control form-control-solid form-control-sm" name="june_target"
                                                id="validationCustom01" required>
                                            <div class="invalid-feedback"> Please Enter June Target </div>
                                        </div>
                                        <div class="col-md-3 mb-2">
                                            <label for="validationCustom01" class="form-label required mb-0">July Target
                                            </label>
                                            <input type="number" step="0.01"
                                                class="form-control form-control-solid form-control-sm" name="july_target"
                                                id="validationCustom01" required>
                                            <div class="invalid-feedback"> Please Enter July Target </div>
                                        </div>
                                        <div class="col-md-3 mb-2">
                                            <label for="validationCustom01" class="form-label required mb-0">August Target
                                            </label>
                                            <input type="number" step="0.01"
                                                class="form-control form-control-solid form-control-sm"
                                                name="august_target" id="validationCustom01" required>
                                            <div class="invalid-feedback"> Please Enter August Target </div>
                                        </div>
                                        <div class="col-md-3 mb-2">
                                            <label for="validationCustom01" class="form-label required mb-0">September
                                                Target
                                            </label>
                                            <input type="number" step="0.01"
                                                class="form-control form-control-solid form-control-sm"
                                                name="september_target" id="validationCustom01" required>
                                            <div class="invalid-feedback"> Please Enter September Target </div>
                                        </div>
                                        <div class="col-md-3 mb-2">
                                            <label for="validationCustom01" class="form-label required mb-0">October
                                                Target
                                            </label>
                                            <input type="number" step="0.01"
                                                class="form-control form-control-solid form-control-sm"
                                                name="october_target" id="validationCustom01" required>
                                            <div class="invalid-feedback"> Please Enter October Target </div>
                                        </div>
                                        <div class="col-md-3 mb-2">
                                            <label for="validationCustom01" class="form-label required mb-0">November
                                                Target
                                            </label>
                                            <input type="number" step="0.01"
                                                class="form-control form-control-solid form-control-sm"
                                                name="november_target" id="validationCustom01" required>
                                            <div class="invalid-feedback"> Please Enter November Target </div>
                                        </div>
                                        <div class="col-md-3 mb-2">
                                            <label for="validationCustom01" class="form-label required mb-0">December
                                                Target
                                            </label>
                                            <input type="number" step="0.01"
                                                class="form-control form-control-solid form-control-sm"
                                                name="december_target" id="validationCustom01" required>
                                            <div class="invalid-feedback"> Please Enter December Target </div>
                                        </div>
                                        <div class="col-md-4 mb-2">
                                            <label for="validationCustom04" class="form-label required mb-0">
                                                Year Started</label>
                                            <select class="form-select-sm form-select form-select-solid"
                                                name="year_started" data-dropdown-parent="#salesYearAddModal"
                                                data-control="select2" data-placeholder="Select an option"
                                                data-allow-clear="true" data-hide-search="true" required>
                                                <option></option>
                                                <option value="january">January</option>
                                                <option value="july">July</option>
                                            </select>
                                            <div class="invalid-feedback"> Please Select a option. </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer p-2">
                        <button type="submit" class="btn btn-sm btn-light-primary rounded-0">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    {{-- Edit Modal --}}
    @foreach ($salesYearTargets as $salesYearTarget)
        <div class="modal fade" id="salesmanEditModal_{{ $salesYearTarget->id }}" data-backdrop="static">
            <div class="modal-dialog modal-dialog-centered modal-lg">
                <div class="modal-content rounded-0 border-0 shadow-sm">
                    <div class="modal-header p-2 rounded-0">
                        <h5 class="modal-title ps-5">Edit Sales Year</h5>
                        <div class="btn btn-icon btn-sm btn-active-light-primary ms-2" data-bs-dismiss="modal"
                            aria-label="Close">
                            <i class="fa-solid fa-circle-xmark"></i>
                        </div>
                    </div>
                    <form action="{{ route('admin.sales-year-target.update', $salesYearTarget->id) }}"
                        class="needs-validation" method="post" novalidate>
                        @csrf
                        @method('PUT')
                        <div class="modal-body">
                            <div class="container-fluid">
                                <div class="row">
                                    <div class="col-lg-12 col-sm-12">
                                        <div class="row">
                                            <div class="col-md-3">
                                                <label for="validationCustom04" class="form-label required">Country
                                                    Name</label>
                                                <select class="form-select form-select-solid" name="country_id"
                                                    data-dropdown-parent="#salesmanEditModal_{{ $salesYearTarget->id }}"
                                                    data-control="select2" data-placeholder="Select an option"
                                                    data-allow-clear="true" required>
                                                    <option></option>
                                                    @foreach (getAllCountry() as $country)
                                                        <option @selected($country->id == $salesYearTarget->country_id) value="{{ $country->id }}">
                                                            {{ $country->name }}</option>
                                                    @endforeach
                                                </select>
                                                <div class="valid-feedback"> Looks good! </div>
                                                <div class="invalid-feedback"> Please provide a valid zip. </div>
                                            </div>
                                            <div class="col-md-3">
                                                <label for="validationCustom04" class="form-label required">Company
                                                    Name</label>
                                                <select class="form-select form-select-solid" name="company_id"
                                                    data-dropdown-parent="#salesmanEditModal_{{ $salesYearTarget->id }}"
                                                    data-control="select2" data-placeholder="Select an option"
                                                    data-allow-clear="true">
                                                    <option></option>
                                                    @foreach ($companies as $company)
                                                        <option @selected($company->id == $salesYearTarget->company_id) value="{{ $company->id }}">
                                                            {{ $company->name }}</option>
                                                    @endforeach
                                                </select>
                                                <div class="valid-feedback"> Looks good! </div>
                                                <div class="invalid-feedback"> Please provide a valid zip. </div>
                                            </div>
                                            <div class="col-md-3 mb-2">
                                                <label for="validationCustom01" class="form-label required mb-0">Fiscal
                                                    Year
                                                </label>
                                                <input type="number"
                                                    class="form-control form-control-solid form-control-sm"
                                                    name="fiscal_year" value="{{ $salesYearTarget->fiscal_year }}"
                                                    id="validationCustom01" required>
                                                <div class="invalid-feedback"> Please Enter Fiscal Year </div>
                                            </div>
                                            <div class="col-md-3 mb-2">
                                                <label for="validationCustom01" class="form-label required mb-0">Year
                                                    Target
                                                </label>
                                                <input type="number" step="0.01"
                                                    class="form-control form-control-solid form-control-sm"
                                                    name="year_target" value="{{ $salesYearTarget->year_target }}"
                                                    id="validationCustom01" required>
                                                <div class="invalid-feedback"> Please Enter Year Target </div>
                                            </div>
                                            <div class="col-md-3 mb-2">
                                                <label for="validationCustom01" class="form-label required mb-0">Quarter
                                                    One
                                                    Target
                                                </label>
                                                <input type="number" step="0.01"
                                                    class="form-control form-control-solid form-control-sm"
                                                    name="quarter_one_target"
                                                    value="{{ $salesYearTarget->quarter_one_target }}"
                                                    id="validationCustom01" required>
                                                <div class="invalid-feedback"> Please Enter Quarter One Target </div>
                                            </div>
                                            <div class="col-md-3 mb-2">
                                                <label for="validationCustom01" class="form-label required mb-0">Quarter
                                                    Two
                                                    Target
                                                </label>
                                                <input type="number" step="0.01"
                                                    class="form-control form-control-solid form-control-sm"
                                                    name="quarter_two_target"
                                                    value="{{ $salesYearTarget->quarter_two_target }}"
                                                    id="validationCustom01" required>
                                                <div class="invalid-feedback"> Please Enter Quarter Two Target </div>
                                            </div>
                                            <div class="col-md-3 mb-2">
                                                <label for="validationCustom01" class="form-label required mb-0">Quarter
                                                    Three
                                                    Target
                                                </label>
                                                <input type="number" step="0.01"
                                                    class="form-control form-control-solid form-control-sm"
                                                    name="quarter_three_target"
                                                    value="{{ $salesYearTarget->quarter_three_target }}"
                                                    id="validationCustom01" required>
                                                <div class="invalid-feedback"> Please Enter Quarter Three Target </div>
                                            </div>
                                            <div class="col-md-3 mb-2">
                                                <label for="validationCustom01" class="form-label required mb-0">Quarter
                                                    Four
                                                    Target
                                                </label>
                                                <input type="number" step="0.01"
                                                    class="form-control form-control-solid form-control-sm"
                                                    name="quarter_four_target"
                                                    value="{{ $salesYearTarget->quarter_four_target }}"
                                                    id="validationCustom01" required>
                                                <div class="invalid-feedback"> Please Enter Quarter Four Target </div>
                                            </div>


                                            <div class="col-md-3 mb-2">
                                                <label for="validationCustom01" class="form-label required mb-0">January
                                                    Target
                                                </label>
                                                <input type="number" step="0.01"
                                                    class="form-control form-control-solid form-control-sm"
                                                    name="january_target" value="{{ $salesYearTarget->january_target }}"
                                                    id="validationCustom01" required>
                                                <div class="invalid-feedback"> Please Enter January Target </div>
                                            </div>
                                            <div class="col-md-3 mb-2">
                                                <label for="validationCustom01" class="form-label required mb-0">February
                                                    Target
                                                </label>
                                                <input type="number" step="0.01"
                                                    class="form-control form-control-solid form-control-sm"
                                                    name="february_target"
                                                    value="{{ $salesYearTarget->february_target }}"
                                                    id="validationCustom01" required>
                                                <div class="invalid-feedback"> Please Enter February Target </div>
                                            </div>
                                            <div class="col-md-3 mb-2">
                                                <label for="validationCustom01" class="form-label required mb-0">March
                                                    Target
                                                </label>
                                                <input type="number" step="0.01"
                                                    class="form-control form-control-solid form-control-sm"
                                                    name="march_target" value="{{ $salesYearTarget->march_target }}"
                                                    id="validationCustom01" required>
                                                <div class="invalid-feedback"> Please Enter March Target </div>
                                            </div>
                                            <div class="col-md-3 mb-2">
                                                <label for="validationCustom01" class="form-label required mb-0">April
                                                    Target
                                                </label>
                                                <input type="number" step="0.01"
                                                    class="form-control form-control-solid form-control-sm"
                                                    name="april_target" value="{{ $salesYearTarget->april_target }}"
                                                    id="validationCustom01" required>
                                                <div class="invalid-feedback"> Please Enter April Target </div>
                                            </div>
                                            <div class="col-md-3 mb-2">
                                                <label for="validationCustom01" class="form-label required mb-0">May
                                                    Target
                                                </label>
                                                <input type="number" step="0.01"
                                                    class="form-control form-control-solid form-control-sm"
                                                    name="may_target" value="{{ $salesYearTarget->may_target }}"
                                                    id="validationCustom01" required>
                                                <div class="invalid-feedback"> Please Enter May Target </div>
                                            </div>
                                            <div class="col-md-3 mb-2">
                                                <label for="validationCustom01" class="form-label required mb-0">June
                                                    Target
                                                </label>
                                                <input type="number" step="0.01"
                                                    class="form-control form-control-solid form-control-sm"
                                                    name="june_target" value="{{ $salesYearTarget->june_target }}"
                                                    id="validationCustom01" required>
                                                <div class="invalid-feedback"> Please Enter June Target </div>
                                            </div>
                                            <div class="col-md-3 mb-2">
                                                <label for="validationCustom01" class="form-label required mb-0">July
                                                    Target
                                                </label>
                                                <input type="number" step="0.01"
                                                    class="form-control form-control-solid form-control-sm"
                                                    name="july_target" value="{{ $salesYearTarget->july_target }}"
                                                    id="validationCustom01" required>
                                                <div class="invalid-feedback"> Please Enter July Target </div>
                                            </div>
                                            <div class="col-md-3 mb-2">
                                                <label for="validationCustom01" class="form-label required mb-0">August
                                                    Target
                                                </label>
                                                <input type="number" step="0.01"
                                                    class="form-control form-control-solid form-control-sm"
                                                    name="august_target" value="{{ $salesYearTarget->august_target }}"
                                                    id="validationCustom01" required>
                                                <div class="invalid-feedback"> Please Enter August Target </div>
                                            </div>
                                            <div class="col-md-3 mb-2">
                                                <label for="validationCustom01" class="form-label required mb-0">September
                                                    Target
                                                </label>
                                                <input type="number" step="0.01"
                                                    class="form-control form-control-solid form-control-sm"
                                                    name="september_target"
                                                    value="{{ $salesYearTarget->september_target }}"
                                                    id="validationCustom01" required>
                                                <div class="invalid-feedback"> Please Enter September Target </div>
                                            </div>
                                            <div class="col-md-3 mb-2">
                                                <label for="validationCustom01" class="form-label required mb-0">October
                                                    Target
                                                </label>
                                                <input type="number" step="0.01"
                                                    class="form-control form-control-solid form-control-sm"
                                                    name="october_target" value="{{ $salesYearTarget->october_target }}"
                                                    id="validationCustom01" required>
                                                <div class="invalid-feedback"> Please Enter October Target </div>
                                            </div>
                                            <div class="col-md-3 mb-2">
                                                <label for="validationCustom01" class="form-label required mb-0">November
                                                    Target
                                                </label>
                                                <input type="number" step="0.01"
                                                    class="form-control form-control-solid form-control-sm"
                                                    name="november_target"
                                                    value="{{ $salesYearTarget->november_target }}"
                                                    id="validationCustom01" required>
                                                <div class="invalid-feedback"> Please Enter November Target </div>
                                            </div>
                                            <div class="col-md-3 mb-2">
                                                <label for="validationCustom01" class="form-label required mb-0">December
                                                    Target
                                                </label>
                                                <input type="number" step="0.01"
                                                    class="form-control form-control-solid form-control-sm"
                                                    name="december_target"
                                                    value="{{ $salesYearTarget->december_target }}"
                                                    id="validationCustom01" required>
                                                <div class="invalid-feedback"> Please Enter December Target </div>
                                            </div>
                                            <div class="col-md-4 mb-2">
                                                <label for="validationCustom04" class="form-label required mb-0">
                                                    Year Started</label>
                                                <select class="form-select-sm form-select form-select-solid"
                                                    name="year_started"
                                                    data-dropdown-parent="#salesmanEditModal_{{ $salesYearTarget->id }}"
                                                    data-control="select2" data-placeholder="Select an option"
                                                    data-allow-clear="true" data-hide-search="true" required>
                                                    <option></option>
                                                    <option @selected($salesYearTarget->year_started == 'january') value="january">January</option>
                                                    <option @selected($salesYearTarget->year_started == 'july') value="july">July</option>
                                                </select>
                                                <div class="invalid-feedback"> Please Select a option. </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="modal-footer p-2">
                            <button type="submit" class="btn btn-sm btn-light-primary rounded-0">Submit</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    @endforeach
@endsection
