@extends('admin.master')
@section('content')
    <div class="container h-100">
        <div class="row">
            <div class="col-lg-12 card rounded-0 shadow-sm">
                <div class="card card-p-0 card-flush">
                    <div class="card-header align-items-center py-5 gap-2 gap-md-5">
                        <div class="container px-0">
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
                                        <h2 class="text-center">Bankings</h2>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-sm-12 text-lg-end text-sm-center">
                                    <button type="button" class="btn btn-sm btn-light-primary rounded-0"
                                        data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
                                        {{-- <span class="svg-icon svg-icon-1 position-absolute ms-4"></span> --}}
                                        Export Report
                                    </button>
                                    <button type="button" class="btn btn-sm btn-light-success rounded-0"
                                        data-kt-menu-placement="bottom-end" data-bs-toggle="modal"
                                        data-bs-target="#BankingsAddModal">
                                        Add New
                                    </button>
                                    <div id="kt_datatable_example_1_export_menu"
                                        class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-bold fs-7 w-200px py-4"
                                        data-kt-menu="true">
                                        <div class="menu-item px-3">
                                            <a href="#" class="menu-link px-3" data-kt-export="copy">
                                                Copy to clipboard
                                            </a>
                                        </div>
                                        <div class="menu-item px-3">
                                            <a href="#" class="menu-link px-3" data-kt-export="excel">
                                                Export as Excel
                                            </a>
                                        </div>
                                        <div class="menu-item px-3">
                                            <a href="#" class="menu-link px-3" data-kt-export="csv">
                                                Export as CSV
                                            </a>
                                        </div>
                                        <div class="menu-item px-3">
                                            <a href="#" class="menu-link px-3" data-kt-export="pdf">
                                                Export as PDF
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <table
                            class="table table-striped table-hover align-middle rounded-0 table-row-bordered border fs-6 g-5"
                            id="kt_datatable_example_1">
                            <thead class="table_header_bg">
                                <tr class="text-center text-gray-900 fw-bolder fs-7 text-uppercase">
                                    <th width="5%">Sl</th>
                                    <th width="35%">Bank Name</th>
                                    <th width="15%">Date</th>
                                    <th width="20%">Order Id</th>
                                    <th width="10%">Country Name</th>
                                    <th class="text-center" width="10%">Action</th>
                            </thead>
                            <tbody class="fw-bold text-gray-600 text-center">
                                @if ($bankings)
                                    @foreach ($bankings as $banking)
                                        <tr class="odd">
                                            <td>
                                                {{ $loop->iteration }}
                                            </td>
                                            <td>
                                                {{ $banking->bank_name }}
                                            </td>
                                            <td> {{ $banking->date }}
                                            </td>
                                            <td> {{ $banking->invoice_number }}
                                            </td>
                                            <td>
                                                {{ $banking->companyName() ?? '---' }}
                                            </td>
                                            <td class="d-flex justify-content-between align-items-center">
                                                <a href="#"
                                                    class="btn btn-icon btn-bg-light btn-active-color-primary btn-sm me-1"
                                                    data-bs-toggle="modal"
                                                    data-bs-target="#BankingsmentEditModal_{{ $banking->id }}">
                                                    <i class="fa-solid fa-pen"></i>
                                                </a>
                                                <a href="{{ route('admin.banking.destroy', $banking->id) }}"
                                                    class="btn btn-icon btn-bg-light btn-active-color-primary btn-sm me-1 delete"
                                                    data-kt-docs-table-filter="delete_row">
                                                    <i class="fa-solid fa-trash-can-arrow-up"></i>
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
        </div>
    </div>
    {{-- Add Modal --}}
    <div class="modal fade" id="BankingsAddModal" data-backdrop="static">
        <div class="modal-dialog modal-dialog-centered modal-lg">
            <div class="modal-content rounded-0 border-0 shadow-sm">
                <div class="modal-header p-2 rounded-0">
                    <h5 class="modal-title">Add Bankings</h5>
                    <div class="btn btn-icon btn-sm btn-active-light-primary ms-2" data-bs-dismiss="modal"
                        aria-label="Close">
                        <i class="fa-solid fa-circle-xmark"></i>
                    </div>
                </div>
                <form action="{{ route('admin.banking.store') }}" class="needs-validation" method="post" novalidate>
                    @csrf
                    <div class="modal-body">
                        <div class="container px-0">
                            <div class="row">
                                <div class="col-lg-12 col-sm-12">
                                    <div class="row">
                                        <div class="col-md-4">
                                            <label for="validationCustom04" class="form-label required">Country
                                                Name</label>
                                            <select class="form-select form-select-solid" name="country_id"
                                                data-dropdown-parent="#BankingsAddModal" data-control="select2"
                                                data-placeholder="Select a Name" data-allow-clear="true" required>
                                                <option></option>
                                                @foreach (getAllCountry() as $country)
                                                    <option value="{{ $country->id }}">{{ $country->name }}</option>
                                                @endforeach
                                            </select>
                                            <div class="invalid-feedback"> Please Select Country Name. </div>
                                        </div>
                                        <div class="col-md-4">
                                            <label for="validationCustom04" class="form-label required">Company
                                                Name</label>
                                            <select class="form-select form-select-solid" name="company_id"
                                                data-dropdown-parent="#BankingsAddModal" data-control="select2"
                                                data-placeholder="Select a Company" data-allow-clear="true" required>
                                                <option></option>
                                                @foreach ($companies as $company)
                                                    <option value="{{ $company->id }}">{{ $company->name }}</option>
                                                @endforeach
                                            </select>
                                            <div class="invalid-feedback"> Please Select Company Name. </div>
                                        </div>
                                        <div class="col-md-3 mb-1">
                                            <label for="validationCustom01" class="form-label required ">Month
                                            </label>
                                            <input type="month" class="form-control form-control-solid form-control-sm"
                                                name="month" id="validationCustom01" placeholder="Enter month"
                                                required>
                                            <div class="invalid-feedback"> Please Enter Month </div>
                                        </div>

                                        <div class="col-md-3 mb-1">
                                            <label for="validationCustom01" class="form-label required ">Date
                                            </label>
                                            <input type="date" class="form-control form-control-solid form-control-sm"
                                                name="date" id="validationCustom01" required>
                                            <div class="invalid-feedback"> Please Enter date </div>
                                        </div>

                                        <div class="col-md-3 mb-1">
                                            <label for="validationCustom01" class="form-label required ">Fiscal Year
                                            </label>
                                            <input type="number" class="form-control form-control-solid form-control-sm"
                                                name="fiscal_year" id="validationCustom01" placeholder="YYYY"
                                                pattern="\d{4}" required>
                                            <div class="invalid-feedback"> Please Enter fiscal_year </div>
                                        </div>
                                        <div class="col-md-3 mb-1">
                                            <label for="validationCustom01" class="form-label required ">Deposit
                                            </label>
                                            <input type="number" step="0.01"
                                                class="form-control form-control-solid form-control-sm" name="deposit"
                                                id="validationCustom01" placeholder="Enter Deposit" required>
                                            <div class="invalid-feedback"> Please Enter Deposit </div>
                                        </div>
                                        <div class="col-md-3 mb-1">
                                            <label for="validationCustom01" class="form-label required ">Withdraw
                                            </label>
                                            <input type="number" step="0.01"
                                                class="form-control form-control-solid form-control-sm" name="deposit"
                                                id="validationCustom01" placeholder="Enter Withdraw" required>
                                            <div class="invalid-feedback"> Please Enter Withdraw </div>
                                        </div>
                                        <div class="col-md-3 mb-1">
                                            <label for="validationCustom01" class="form-label required ">Purpose
                                            </label>
                                            <input type="text" class="form-control form-control-solid form-control-sm"
                                                name="purpose" id="validationCustom01" placeholder="Enter Purpose"
                                                required>
                                            <div class="invalid-feedback"> Please Enter Purpose </div>
                                        </div>
                                        <div class="col-md-3 mb-1">
                                            <label for="validationCustom01" class="form-label required ">Notes
                                            </label>
                                            <input type="text" class="form-control form-control-solid form-control-sm"
                                                name="notes" id="validationCustom01" placeholder="Enter notes"
                                                required>
                                            <div class="invalid-feedback"> Please Enter Notes </div>
                                        </div>
                                        <div class="col-md-3 mb-1">
                                            <label for="validationCustom01" class="form-label required ">Transaction id
                                            </label>
                                            <input type="text" class="form-control form-control-solid form-control-sm"
                                                name="transaction_id" id="validationCustom01"
                                                placeholder="Enter Transaction id" required>
                                            <div class="invalid-feedback"> Please Enter Transaction id </div>
                                        </div>
                                        <div class="col-md-3 mb-1">
                                            <label for="validationCustom01" class="form-label required ">Invoice Number
                                            </label>
                                            <input type="text" class="form-control form-control-solid form-control-sm"
                                                name="invoice_number" id="validationCustom01"
                                                placeholder="Enter Invoice Number" required>
                                            <div class="invalid-feedback"> Please Enter Invoice Number </div>
                                        </div>
                                        <div class="col-md-3 mb-1">
                                            <label for="validationCustom01" class="form-label required ">Status
                                            </label>
                                            <input type="text" class="form-control form-control-solid form-control-sm"
                                                name="status" id="validationCustom01" placeholder="Enter Status"
                                                required>
                                            <div class="invalid-feedback"> Please Enter Status </div>
                                        </div>
                                        <div class="col-md-3 mb-1">
                                            <label for="validationCustom01" class="form-label required ">Bank Name
                                            </label>
                                            <input type="text" class="form-control form-control-solid form-control-sm"
                                                name="bank_name" id="validationCustom01" placeholder="Enter Bank Name"
                                                required>
                                            <div class="invalid-feedback"> Please Enter Bank Name </div>
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
    @foreach ($bankings as $banking)
        <div class="modal fade" id="BankingsmentEditModal_{{ $banking->id }}" data-backdrop="static">
            <div class="modal-dialog modal-dialog-centered modal-lg">
                <div class="modal-content rounded-0 border-0 shadow-sm">
                    <div class="modal-header p-2 rounded-0">
                        <h5 class="modal-title">Edit Bankings</h5>
                        <div class="btn btn-icon btn-sm btn-active-light-primary ms-2" data-bs-dismiss="modal"
                            aria-label="Close">
                            <i class="fa-solid fa-circle-xmark"></i>
                        </div>
                    </div>
                    <form action="{{ route('admin.banking.update', $banking->id) }}" class="needs-validation"
                        method="post" novalidate>
                        @csrf
                        @method('PUT')
                        <div class="modal-body">
                            <div class="container px-0">
                                <div class="row">
                                    <div class="col-lg-12 col-sm-12">
                                        <div class="row">
                                            <div class="col-md-4">
                                                <label for="validationCustom04" class="form-label required">Country
                                                    Name</label>
                                                <select class="form-select form-select-solid" name="country_id"
                                                    data-dropdown-parent="#BankingsmentEditModal_{{ $banking->id }}"
                                                    data-control="select2" data-placeholder="Select a Name"
                                                    data-allow-clear="true" required>
                                                    <option></option>
                                                    @foreach (getAllCountry() as $country)
                                                        <option @selected($banking->country_id == $country->id) value="{{ $country->id }}">
                                                            {{ $country->name }}</option>
                                                    @endforeach
                                                </select>
                                                <div class="invalid-feedback"> Please Select Country Name. </div>
                                            </div>
                                            <div class="col-md-4">
                                                <label for="validationCustom04" class="form-label required">Company
                                                    Name</label>
                                                <select class="form-select form-select-solid" name="company_id"
                                                    data-dropdown-parent="#BankingsmentEditModal_{{ $banking->id }}"
                                                    data-control="select2" data-placeholder="Select a Company"
                                                    data-allow-clear="true" required>
                                                    <option></option>
                                                    @foreach ($companies as $company)
                                                        <option @selected($banking->company_id == $company->id) value="{{ $company->id }}">
                                                            {{ $company->name }}</option>
                                                    @endforeach
                                                </select>
                                                <div class="invalid-feedback"> Please Select Company Name. </div>
                                            </div>
                                            <div class="col-md-3 mb-1">
                                                <label for="validationCustom01" class="form-label required ">Month
                                                </label>
                                                <input type="month"
                                                    class="form-control form-control-solid form-control-sm" name="month"
                                                    value="{{ $banking->month }}" id="validationCustom01"
                                                    placeholder="Enter month" required>
                                                <div class="invalid-feedback"> Please Enter Month </div>
                                            </div>

                                            <div class="col-md-3 mb-1">
                                                <label for="validationCustom01" class="form-label required ">Date
                                                </label>
                                                <input type="date"
                                                    class="form-control form-control-solid form-control-sm" name="date"
                                                    value="{{ $banking->date }}" id="validationCustom01" required>
                                                <div class="invalid-feedback"> Please Enter date </div>
                                            </div>

                                            <div class="col-md-3 mb-1">
                                                <label for="validationCustom01" class="form-label required ">Fiscal Year
                                                </label>
                                                <input type="number"
                                                    class="form-control form-control-solid form-control-sm"
                                                    name="fiscal_year" value="{{ $banking->fiscal_year }}"
                                                    id="validationCustom01" placeholder="YYYY" pattern="\d{4}" required>
                                                <div class="invalid-feedback"> Please Enter fiscal_year </div>
                                            </div>
                                            <div class="col-md-3 mb-1">
                                                <label for="validationCustom01" class="form-label required ">Deposit
                                                </label>
                                                <input type="number" step="0.01"
                                                    class="form-control form-control-solid form-control-sm" name="deposit"
                                                    value="{{ $banking->deposit }}" id="validationCustom01"
                                                    placeholder="Enter Deposit" required>
                                                <div class="invalid-feedback"> Please Enter Deposit </div>
                                            </div>
                                            <div class="col-md-3 mb-1">
                                                <label for="validationCustom01" class="form-label required ">Withdraw
                                                </label>
                                                <input type="number" step="0.01"
                                                    class="form-control form-control-solid form-control-sm" name="deposit"
                                                    value="{{ $banking->deposit }}" id="validationCustom01"
                                                    placeholder="Enter Withdraw" required>
                                                <div class="invalid-feedback"> Please Enter Withdraw </div>
                                            </div>
                                            <div class="col-md-3 mb-1">
                                                <label for="validationCustom01" class="form-label required ">Purpose
                                                </label>
                                                <input type="text"
                                                    class="form-control form-control-solid form-control-sm" name="purpose"
                                                    value="{{ $banking->purpose }}" id="validationCustom01"
                                                    placeholder="Enter Purpose" required>
                                                <div class="invalid-feedback"> Please Enter Purpose </div>
                                            </div>
                                            <div class="col-md-3 mb-1">
                                                <label for="validationCustom01" class="form-label required ">Notes
                                                </label>
                                                <input type="text"
                                                    class="form-control form-control-solid form-control-sm" name="notes"
                                                    value="{{ $banking->notes }}" id="validationCustom01"
                                                    placeholder="Enter notes" required>
                                                <div class="invalid-feedback"> Please Enter Notes </div>
                                            </div>
                                            <div class="col-md-3 mb-1">
                                                <label for="validationCustom01" class="form-label required ">Transaction
                                                    id
                                                </label>
                                                <input type="text"
                                                    class="form-control form-control-solid form-control-sm"
                                                    name="transaction_id" value="{{ $banking->transaction_id }}"
                                                    id="validationCustom01" placeholder="Enter Transaction id" required>
                                                <div class="invalid-feedback"> Please Enter Transaction id </div>
                                            </div>
                                            <div class="col-md-3 mb-1">
                                                <label for="validationCustom01" class="form-label required ">Invoice
                                                    Number
                                                </label>
                                                <input type="text"
                                                    class="form-control form-control-solid form-control-sm"
                                                    name="invoice_number" value="{{ $banking->invoice_number }}"
                                                    id="validationCustom01" placeholder="Enter Invoice Number" required>
                                                <div class="invalid-feedback"> Please Enter Invoice Number </div>
                                            </div>
                                            <div class="col-md-3 mb-1">
                                                <label for="validationCustom01" class="form-label required ">Status
                                                </label>
                                                <input type="text"
                                                    class="form-control form-control-solid form-control-sm" name="status"
                                                    value="{{ $banking->status }}" id="validationCustom01"
                                                    placeholder="Enter Status" required>
                                                <div class="invalid-feedback"> Please Enter Status </div>
                                            </div>
                                            <div class="col-md-3 mb-1">
                                                <label for="validationCustom01" class="form-label required ">Bank Name
                                                </label>
                                                <input type="text"
                                                    class="form-control form-control-solid form-control-sm"
                                                    name="bank_name" value="{{ $banking->bank_name }}"
                                                    id="validationCustom01" placeholder="Enter Bank Name" required>
                                                <div class="invalid-feedback"> Please Enter Bank Name </div>
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
