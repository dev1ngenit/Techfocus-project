@extends('admin.master')
@section('content')
    <style>
        td {
            font-size: 12px !important;
        }
    </style>
    <div class="container-fluid h-100">
        <div class="row">
            <div class="col-lg-12 card rounded-0 shadow-sm p-0">
                <div class="card card-p-0 card-flush">
                    <div class="card-header align-items-center gap-2 gap-md-5 border-bottom bg-primary">
                        <div class="container-fluid px-4">
                            <div class="row align-items-center">
                                <div class="col-lg-4">
                                    <div class="d-flex">
                                        <p class="pe-2 m-0 text-white">SAS REF : <strong>{{$product->ref_code}}</strong></p>
                                        <p class="m-0 text-white">Price Status : <strong>{{ucfirst($product->price_status)}}</strong></p>
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="d-flex justify-content-center">
                                        <h3 class="mb-0 text-white">Product SAS Creation</h3>
                                    </div>
                                </div>
                                <div class="col-lg-4 ">
                                    <div class="d-flex justify-content-end">
                                        <p class="m-0 text-white">Product Sourcing Date : <strong>{{$product->create_date}}</strong></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <form action="{{ route('admin.product-sas.store') }}" method="POST">
                            @csrf
                            <div class="row gx-1">
                                <div class="col-lg-4">
                                    <div class="m-2" style="border-right: 1px solid #eeeeee;">
                                        <div class="d-flex justify-content-between align-items-center pb-2">
                                            <div>
                                                <h4 class="text-info p-2 m-0"> Cost Of Goods</h4>
                                            </div>
                                            <div
                                                class="text-info p-2 m-0 d-flex justify-content-between align-items-center">
                                                <a href="javascript:void(0)" data-bs-toggle="modal"
                                                    data-bs-target="#ProductSasEditModal"
                                                    class="btn btn-icon btn-icon-muted btn-active-light btn-active-color-primary w-30px h-30px w-md-40px h-md-40px"
                                                    data-kt-menu-trigger="click" data-kt-menu-attach="parent"
                                                    data-kt-menu-placement="bottom-end">
                                                    <!--begin::Svg Icon | path: icons/duotune/general/gen022.svg-->
                                                    <span class="svg-icon svg-icon-1">
                                                        <i class="fa-solid fa-expand"></i>
                                                    </span>
                                                    <!--end::Svg Icon-->
                                                </a>
                                                <a href="#"
                                                    class="btn btn-icon btn-icon-muted btn-active-light btn-active-color-primary w-30px h-30px w-md-40px h-md-40px">
                                                    <!--begin::Svg Icon | path: icons/duotune/general/gen022.svg-->
                                                    <span class="svg-icon svg-icon-1">
                                                        <i class="fa-solid fa-pen"></i>
                                                    </span>
                                                    <!--end::Svg Icon-->
                                                </a>
                                            </div>
                                        </div>
                                        <div>
                                            <p class=" p-2 m-0"><strong>Item:</strong> {{$product->name}}</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="m-2 p-3" style="border-right: 1px solid #eeeeee;">
                                        <div class="pb-2">
                                            <h4 class="text-info p-2 m-0 text-center"> Cost Of</h4>
                                        </div>
                                        <div class="row pt-2">
                                            <div class="col-lg-6">
                                                <div class="d-flex justify-content-between align-items-center">
                                                    <p class="m-0 p-0 me-2">Goods</p>
                                                    <input type="text"
                                                        class="form-control form-control-solid form-control-sm"
                                                        name="cog_price" id="validationCustom01"
                                                        placeholder="E.g: 0.05%, 0.5%, 5%">
                                                </div>
                                            </div>
                                            <div class="col-lg-6">
                                                <div class="d-flex justify-content-between align-items-center">
                                                    <p class="m-0 p-0 me-2">Sales</p>
                                                    <input type="text"
                                                        class="form-control form-control-solid form-control-sm"
                                                        name="sales-value" id="validationCustom01"
                                                        placeholder="E.g: 0.05%, 0.5%, 5%" value="" disabled>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="m-2 p-3">
                                        <div class="text-end pb-2">
                                            <h4 class="text-info p-2 m-0"> Competetitors & Comparison</h4>
                                        </div>
                                        <div class="row pt-3">
                                            <div class="col-lg-4">
                                                <div class="d-flex justify-content-between align-items-center">
                                                    <p class="m-0 p-0 me-2">Lowest Source</p>
                                                </div>
                                            </div>
                                            <div class="col-lg-4">
                                                <div class="d-flex justify-content-center align-items-center">
                                                    <p class="m-0 p-0 me-2">Lowest Competetor</p>
                                                </div>
                                            </div>
                                            <div class="col-lg-4">
                                                <div class="d-flex justify-content-end align-items-center">
                                                    <p class="m-0 p-0 me-2 text-end">TK: 2494.8</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row gx-1">
                                <div class="col-lg-4">
                                    <div class="table-responsive p-2">
                                        <p class="text-center m-0 bg-light-primary p-2 fw-bold">Expenses Table</p>
                                        <table class="table table-rounded border gy-7 gs-7"
                                            style="border-top-left-radius: 0px; border-top-right-radius: 0px;">
                                            <tbody>
                                                <tr class="d-flex align-items-center">
                                                    <td width="60%">Bank & Remittance Charge - (1.5%)</td>
                                                    <td class="p-1">
                                                        <div>
                                                            <input type="text"
                                                                class="form-control form-control-outline form-control-sm bank_charge-value"
                                                                name="bank_charge" id="validationCustom01"
                                                                placeholder="E.g: 0.05%, 0.5%, 5%">
                                                        </div>
                                                    </td>
                                                    <td class="p-1">
                                                        <div>
                                                            <input type="text"
                                                                class="form-control form-control-solid form-control-sm"
                                                                name="bank_charge-value" id="validationCustom01"
                                                                placeholder="E.g: 0.05%, 0.5%, 5%" disabled>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr class="d-flex align-items-center">
                                                    <td width="60%">Customs & Duty - (5.0%)</td>
                                                    <td class="p-1">
                                                        <div>
                                                            <input type="text"
                                                                class="form-control form-control-outline form-control-sm customs-value"
                                                                name="customs" id="validationCustom01"
                                                                placeholder="E.g: 0.05%, 0.5%, 5%">
                                                        </div>
                                                    </td>
                                                    <td class="p-1">
                                                        <div>
                                                            <input type="text"
                                                                class="form-control form-control-solid form-control-sm"
                                                                name="customs-value" id="validationCustom01"
                                                                placeholder="E.g: 0.05%, 0.5%, 5%" disabled>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr class="d-flex align-items-center">
                                                    <td width="60%">HR , Office & Utility Cost- (5.0%)</td>
                                                    <td class="p-1">
                                                        <div>
                                                            <input type="text"
                                                                class="form-control form-control-outline form-control-sm utility_cost-value"
                                                                name="utility_cost" id="validationCustom01"
                                                                placeholder="E.g: 0.05%, 0.5%, 5%">
                                                        </div>
                                                    </td>
                                                    <td class="p-1">
                                                        <div>
                                                            <input type="text"
                                                                class="form-control form-control-solid form-control-sm"
                                                                name="utility_cost-value" id="validationCustom01"
                                                                placeholder="E.g: 0.05%, 0.5%, 5%" disabled>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr class="d-flex align-items-center">
                                                    <td width="60%">Sales / Consult. Comission - (5.0%)</td>
                                                    <td class="p-1">
                                                        <div>
                                                            <input type="text"
                                                                class="form-control form-control-outline form-control-sm sales_comission-value"
                                                                name="sales_comission" id="validationCustom01"
                                                                placeholder="E.g: 0.05%, 0.5%, 5%">
                                                        </div>
                                                    </td>
                                                    <td class="p-1">
                                                        <div>
                                                            <input type="text"
                                                                class="form-control form-control-solid form-control-sm"
                                                                name="sales_comission-value" id="validationCustom01"
                                                                placeholder="E.g: 0.05%, 0.5%, 5%" disabled>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr class="d-flex align-items-center">
                                                    <td width="60%">Bank Loan / Liability / Debt - (5.0%)</td>
                                                    <td class="p-1">
                                                        <div>
                                                            <input type="text"
                                                                class="form-control form-control-outline form-control-sm liability-value"
                                                                name="liability" id="validationCustom01"
                                                                placeholder="E.g: 0.05%, 0.5%, 5%">
                                                        </div>
                                                    </td>
                                                    <td class="p-1">
                                                        <div>
                                                            <input type="text"
                                                                class="form-control form-control-solid form-control-sm"
                                                                name="liability-value" id="validationCustom01"
                                                                placeholder="E.g: 0.05%, 0.5%, 5%" disabled>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr class="d-flex align-items-center">
                                                    <td width="60%">Loan / Capital / Partner Share - (5%)</td>
                                                    <td class="p-1">
                                                        <div>
                                                            <input type="text"
                                                                class="form-control form-control-outline form-control-sm capital_share-value"
                                                                name="capital_share" id="validationCustom01"
                                                                placeholder="E.g: 0.05%, 0.5%, 5%">
                                                        </div>
                                                    </td>
                                                    <td class="p-1">
                                                        <div>
                                                            <input type="text"
                                                                class="form-control form-control-solid form-control-sm"
                                                                name="capital_share-value" id="validationCustom01"
                                                                placeholder="E.g: 0.05%, 0.5%, 5%" disabled>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr class="d-flex align-items-center">
                                                    <td width="60%">Management Cost - (5%)</td>
                                                    <td class="p-1">
                                                        <div>
                                                            <input type="text"
                                                                class="form-control form-control-outline form-control-sm management_cost-value"
                                                                name="management_cost" id="validationCustom01"
                                                                placeholder="E.g: 0.05%, 0.5%, 5%">
                                                        </div>
                                                    </td>
                                                    <td class="p-1">
                                                        <div>
                                                            <input type="text"
                                                                class="form-control form-control-solid form-control-sm"
                                                                name="management_cost-value" id="validationCustom01"
                                                                placeholder="E.g: 0.05%, 0.5%, 5%" disabled>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr class="d-flex align-items-center">
                                                    <td width="60%">Tax / AIT / VAT - (10.0%)</td>
                                                    <td class="p-1">
                                                        <div>
                                                            <input type="text"
                                                                class="form-control form-control-outline form-control-sm tax-value"
                                                                name="tax" id="validationCustom01"
                                                                placeholder="E.g: 0.05%, 0.5%, 5%">
                                                        </div>
                                                    </td>
                                                    <td class="p-1">
                                                        <div>
                                                            <input type="text"
                                                                class="form-control form-control-solid form-control-sm"
                                                                name="tax-value" id="validationCustom01"
                                                                placeholder="E.g: 0.05%, 0.5%, 5%" disabled>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr class="d-flex align-items-center">
                                                    <td width="60%">Shipping & Handling Cost- (5.0%)</td>
                                                    <td class="p-1">
                                                        <div>
                                                            <input type="text"
                                                                class="form-control form-control-outline form-control-sm shiping_cost-value"
                                                                name="shiping_cost" id="validationCustom01"
                                                                placeholder="E.g: 0.05%, 0.5%, 5%">
                                                        </div>
                                                    </td>
                                                    <td class="p-1">
                                                        <div>
                                                            <input type="text"
                                                                class="form-control form-control-solid form-control-sm"
                                                                name="shiping_cost-value" id="validationCustom01"
                                                                placeholder="E.g: 0.05%, 0.5%, 5%" disabled>
                                                        </div>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="table-responsive p-2">
                                        <p class="text-center m-0 bg-light-primary p-2 fw-bold">Offering Value Adding</p>
                                        <table class="table table-rounded border gy-7 gs-7"
                                            style="border-top-left-radius: 0px; border-top-right-radius: 0px;">
                                            <tbody>
                                                <tr class="d-flex align-items-center">
                                                    <td width="60%">Promo / Deal / Regular Discounts</td>
                                                    <td class="p-1">
                                                        <div>
                                                            <input type="text"
                                                                class="form-control form-control-outline form-control-sm regular_discounts"
                                                                name="regular_discounts" id="validationCustom01"
                                                                placeholder="E.g: 0.05%, 0.5%, 5%">
                                                        </div>
                                                    </td>
                                                    <td class="p-1">
                                                        <div>
                                                            <input type="text"
                                                                class="form-control form-control-solid form-control-sm regular_discounts-value"
                                                                name="regular_discounts-value" id="validationCustom01"
                                                                placeholder="E.g: 0.05%, 0.5%, 5%">
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr class="d-flex align-items-center">
                                                    <td width="60%">Deal Closing / Rebates</td>
                                                    <td class="p-1">
                                                        <div>
                                                            <input type="text"
                                                                class="form-control form-control-outline form-control-sm rebates"
                                                                name="rebates" id="validationCustom01"
                                                                placeholder="E.g: 0.05%, 0.5%, 5%">
                                                        </div>
                                                    </td>
                                                    <td class="p-1">
                                                        <div>
                                                            <input type="text"
                                                                class="form-control form-control-solid form-control-sm rebates-value"
                                                                name="rebates-value" id="validationCustom01"
                                                                placeholder="E.g: 0.05%, 0.5%, 5%">
                                                        </div>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                    <div class="table-responsive p-2">
                                        <p class="text-center m-0 bg-light-primary p-2 fw-bold">Other Income</p>
                                        <table class="table table-rounded border gy-7 gs-7"
                                            style="border-top-left-radius: 0px; border-top-right-radius: 0px;">
                                            <tbody>
                                                <tr class="d-flex align-items-center">
                                                    <td width="60%">Net Profit - (5%)</td>
                                                    <td class="p-1">
                                                        <div>
                                                            <input type="text"
                                                                class="form-control form-control-outline form-control-sm"
                                                                name="net-profit" id="validationCustom01"
                                                                placeholder="E.g: 0.05%, 0.5%, 5%">
                                                        </div>
                                                    </td>
                                                    <td class="p-1">
                                                        <div>
                                                            <input type="text"
                                                                class="form-control form-control-solid form-control-sm"
                                                                name="net-profit-percentage" id="validationCustom01"
                                                                placeholder="E.g: 0.05%, 0.5%, 5%">
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr class="d-flex align-items-center">
                                                    <td width="60%">Gross Profit (%)</td>
                                                    <td class="p-1">
                                                        <div>
                                                            <input type="text"
                                                                class="form-control form-control-outline form-control-sm"
                                                                name="gross-total" id="validationCustom01"
                                                                placeholder="E.g: 0.05%, 0.5%, 5%">
                                                        </div>
                                                    </td>
                                                    <td class="p-1">
                                                        <div>
                                                            <input type="text"
                                                                class="form-control form-control-solid form-control-sm"
                                                                name="gross-percentage" id="validationCustom01"
                                                                placeholder="E.g: 0.05%, 0.5%, 5%" disabled>
                                                        </div>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="table-responsive p-2 pb-0">
                                        <p class="text-center m-0 bg-light-primary p-2 fw-bold">Competetitors Details</p>
                                        <table class="table table-rounded table-striped border gy-7 gs-7"
                                            style="border-top-left-radius: 0px; border-top-right-radius: 0px;">
                                            <thead>
                                                <tr class="fw-bold fs-6 text-gray-800 border-bottom border-gray-200">
                                                    <th>Name</th>
                                                    <th>Compttr. Price</th>
                                                    <th>Our Price</th>
                                                    <th>Diff.</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>a1securitycameras</td>
                                                    <td><span class="text-muted">E.g: 000.00</span></td>
                                                    <td><span class="text-muted">E.g: 000.00</span></td>
                                                    <td><span class="text-muted">E.g: 000.00</span></td>
                                                </tr>
                                                <tr>
                                                    <td>Vivotek</td>
                                                    <td><span class="text-muted">E.g: 000.00</span></td>
                                                    <td><span class="text-muted">E.g: 000.00</span></td>
                                                    <td><span class="text-muted">E.g: 000.00</span></td>
                                                </tr>
                                                <tr>
                                                    <td>Vivotek</td>
                                                    <td><span class="text-muted">E.g: 000.00</span></td>
                                                    <td><span class="text-muted">E.g: 000.00</span></td>
                                                    <td><span class="text-muted">E.g: 000.00</span></td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                    <div class="table-responsive p-2 pt-0">
                                        <p class="text-center m-0 bg-light-primary p-2 fw-bold">Sourcing Details</p>
                                        <table class="table table-rounded table-striped border gy-7 gs-7"
                                            style="border-top-left-radius: 0px; border-top-right-radius: 0px;">
                                            <thead>
                                                <tr class="fw-bold fs-6 text-gray-800 border-bottom border-gray-200">
                                                    <th>Name</th>
                                                    <th>Price</th>
                                                    <th>Estmt. Time</th>
                                                    <th>Country</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>Vivotek</td>
                                                    <td><span>E.g: 000.00</span></td>
                                                    <td><span>E.g: 000.00</span></td>
                                                    <td><span>E.g: 000.00</span></td>
                                                </tr>
                                                <tr>
                                                    <td>Vivotek</td>
                                                    <td><span>E.g: 000.00</span></td>
                                                    <td><span>E.g: 000.00</span></td>
                                                    <td><span>E.g: 000.00</span></td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-12 pb-3">
                                    <div class="d-flex justify-content-end me-2">
                                        {{-- <a href="" class="btn btn-sm btn-primary">Create</a> --}}
                                        <button type="submit" class="btn btn-sm btn-primary">Create</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    {{-- Edit Modal --}}
    <div class="modal fade" id="ProductSasEditModal" data-backdrop="static">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content rounded-0 modal-dialog-lg  border-0 shadow-sm">
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
                                        <div class="col-md-6">
                                            <label for="validationCustom04" class="form-label required">Country
                                                Name</label>
                                            <select class="form-select form-select-solid" name="country_id"
                                                data-dropdown-parent="#categorymentEditModal" data-control="select2"
                                                data-placeholder="Select an option" data-allow-clear="true" required>
                                                <option></option>
                                                <option value="1">Bangaldesh</option>
                                                <option value="2">India</option>
                                                <option value="2">Pakistan</option>
                                                <option value="2">Nepal</option>
                                            </select>
                                            <div class="invalid-feedback"> Please Select Country Name. </div>
                                        </div>
                                        <div class="col-md-6 mb-1">
                                            <label for="validationCustom01" class="form-label required ">Name
                                            </label>
                                            <input type="text" class="form-control form-control-solid form-control-sm"
                                                name="name" id="validationCustom01" placeholder="Enter Name"
                                                name="Ngen It" required>
                                            <div class="valid-feedback"> Looks good! </div>
                                            <div class="invalid-feedback"> Please Enter Name </div>
                                        </div>
                                        <div class="col-md-6 mb-1">
                                            <label for="validationCustom01" class="form-label required ">Image
                                            </label>
                                            <input type="file" class="form-control form-control-solid form-control-sm"
                                                name="image" id="validationCustom01" required>
                                            <div class="valid-feedback"> Looks good! </div>
                                            <div class="invalid-feedback"> Please Enter Image </div>
                                        </div>
                                        <div class="col-md-6 mb-1">
                                            <label for="validationCustom01" class="form-label required ">Logo
                                            </label>
                                            <input type="file" class="form-control form-control-solid form-control-sm"
                                                name="logo" id="validationCustom01" required>
                                            <div class="valid-feedback"> Looks good! </div>
                                            <div class="invalid-feedback"> Please Enter Logo </div>
                                        </div>
                                        <div class="col-md-6 mb-1">
                                            <label for="validationCustom01" class="form-label">
                                            </label>
                                            <div
                                                class="form-check form-check-custom form-check-warning form-check-solid form-check-sm mt-3 ms-4">
                                                <input class="form-check-input bg-primary" name="is_parent"
                                                    value="1" type="checkbox" id="flexRadioLg" />
                                                <label class="form-check-label" for="flexRadioLg">Is Parent</label>
                                            </div>
                                        </div>

                                        <div class="col-md-6 mb-1 hide_parent_input" id="parentInputContainer">
                                            <label for="validationCustom01" class="form-label required">Parent
                                                Name</label>
                                            <select class="form-select form-select-solid" name="parent_id"
                                                data-dropdown-parent="#categorymentEditModal" data-control="select2"
                                                data-placeholder="Select an option" data-allow-clear="true" required>
                                                <option></option>
                                                <option value="1">Option 1</option>
                                                <option value="2">Option 2</option>
                                            </select>
                                            <div class="valid-feedback">Looks good!</div>
                                            <div class="invalid-feedback">Please Select Parent Name</div>
                                        </div>

                                        <div class="col-md-12">
                                            <label for="validationCustom010"
                                                class="form-label required">Description</label>
                                            <textarea rows="1" name="description" class="form-control form-control-sm form-control-solid"
                                                placeholder="Enter Description" required></textarea>
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
    {{-- View Modal --}}
    <div class="modal fade" id="ProductSasModal" data-backdrop="static">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content rounded-0 modal-dialog-lg border-0 shadow-sm">
                <div class="modal-header p-2 rounded-0">
                    <h5 class="modal-title">PRODUCT DETAILS </h5>
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
                                    <p class="badge badge-info custom-badge">Info</span>
                                    <div class="card-body p-1 px-2">
                                        <div class="row">
                                            <div class="col-lg-6">
                                                <div class="row">
                                                    <div class="col-lg-6 col-sm-5">
                                                        <p class="fw-bold" title="Country Name">Name</p>
                                                    </div>
                                                    <div class="col-lg-6 col-sm-6">
                                                        <p>Bangladesh</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-6">
                                                <div class="row">
                                                    <div class="col-lg-7 col-sm-5">
                                                        <p class="fw-bold">Parent Name</p>
                                                    </div>
                                                    <div class="col-lg-5 col-sm-6">
                                                        <p>Intern</p>
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
                                                                src="https://img.freepik.com/free-vector/bird-colorful-logo-gradient-vector_343694-1365.jpg"
                                                                alt="">
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
                                                                src="https://img.freepik.com/free-vector/bird-colorful-logo-gradient-vector_343694-1365.jpg"
                                                                alt="">
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
                                                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Sint a
                                                            ipsam, doloremque maxime assumenda eaque adipisci eum in iste
                                                            quam, ipsa vitae, commodi voluptatem dicta. Sed hic officiis a
                                                            autem?
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
@endsection


@push('scripts')
    {{-- Product Sass Start Here --}}


    <!-- Add this script after your HTML table -->
    <script>
        // Function to calculate and update the total value
        function calculateAndUpdateTotal() {
            // Get the input values for cog_price, bank_charge, customs, utility_cost, etc.
            var cogPriceValue = parseFloat(document.querySelector('input[name="cog_price"]').value) || 0;
            var bankChargeValue = parseFloat(document.querySelector('.bank_charge-value').value) || 0;
            var customsValue = parseFloat(document.querySelector('.customs-value').value) || 0;
            var utilityCostValue = parseFloat(document.querySelector('.utility_cost-value').value) || 0;
            var salesComissionValue = parseFloat(document.querySelector('.sales_comission-value').value) || 0;
            var liabilityValue = parseFloat(document.querySelector('.liability-value').value) || 0;
            var capitalShareValue = parseFloat(document.querySelector('.capital_share-value').value) || 0;
            var managementCostValue = parseFloat(document.querySelector('.management_cost-value').value) || 0;
            var taxValue = parseFloat(document.querySelector('.tax-value').value) || 0;
            var shippingCostValue = parseFloat(document.querySelector('.shiping_cost-value').value) || 0;
            var regularDiscountsValue = parseFloat(document.querySelector('.regular_discounts-value').value) || 0;
            var rebatesValue = parseFloat(document.querySelector('.rebates-value').value) || 0;


            // Calculate the total value based on the provided formula
            var totalValue = cogPriceValue + (cogPriceValue * (
                bankChargeValue +
                customsValue +
                utilityCostValue +
                salesComissionValue +
                liabilityValue +
                capitalShareValue +
                managementCostValue +
                taxValue +
                regularDiscountsValue +
                rebatesValue +
                (shippingCostValue / 100)
            ) / 100);


            // Update the total value in the disabled input field
            document.querySelector('input[name="sales-value"]').value = totalValue.toFixed(2);
        }


        // Attach the function to the input fields' onchange event
        document.querySelectorAll('.form-control-outline').forEach(function(input) {
            input.addEventListener('change', calculateAndUpdateTotal);
        });
    </script>
    <script>
        // Function to calculate and update the total value for specific items
        function calculateAndUpdateTotal() {
            // Get the input values for the specified expense items
            var bankChargeValue = parseFloat(document.querySelector('.bank_charge-value').value) || 0;
            var customsValue = parseFloat(document.querySelector('.customs-value').value) || 0;
            var utilityCostValue = parseFloat(document.querySelector('.utility_cost-value').value) || 0;
            var salesComissionValue = parseFloat(document.querySelector('.sales_comission-value').value) || 0;
            var liabilityValue = parseFloat(document.querySelector('.liability-value').value) || 0;
            var capitalShareValue = parseFloat(document.querySelector('.capital_share-value').value) || 0;
            var managementCostValue = parseFloat(document.querySelector('.management_cost-value').value) || 0;
            var taxValue = parseFloat(document.querySelector('.tax-value').value) || 0;
            var shippingCostValue = parseFloat(document.querySelector('.shiping_cost-value').value) || 0;
            var regularDiscountsValue = parseFloat(document.querySelector('.regular_discounts-value').value) || 0;
            var rebatesValue = parseFloat(document.querySelector('.rebates-value').value) || 0;


            // Calculate the total value for the specified items
            var totalValue = bankChargeValue + customsValue + utilityCostValue + salesComissionValue +
                liabilityValue + capitalShareValue + managementCostValue + taxValue + shippingCostValue +
                regularDiscountsValue + rebatesValue;


            // Update the total value in the corresponding input field
            document.querySelector('input[name="gross-total"]').value = totalValue.toFixed(2);
        }


        // Attach the function to the input fields' onchange event
        document.querySelectorAll('.form-control-outline').forEach(function(input) {
            input.addEventListener('change', calculateAndUpdateTotal);
        });
    </script>
    <script>
        // Function to calculate and update the values for each corresponding field based on the formula
        function calculateAndUpdateValues() {
            // Get the input value for cog_price
            var cogPrice = parseFloat(document.querySelector('input[name="cog_price"]').value) || 0;


            // Get the percentage values for each field
            var bankChargePercentage = parseFloat(document.querySelector('input[name="bank_charge"]').value) || 0;
            var customsPercentage = parseFloat(document.querySelector('input[name="customs"]').value) || 0;
            var utilityCostPercentage = parseFloat(document.querySelector('input[name="utility_cost"]').value) || 0;
            var salesComissionPercentage = parseFloat(document.querySelector('input[name="sales_comission"]').value) || 0;
            var liabilityPercentage = parseFloat(document.querySelector('input[name="liability"]').value) || 0;
            var capitalSharePercentage = parseFloat(document.querySelector('input[name="capital_share"]').value) || 0;
            var managementCostPercentage = parseFloat(document.querySelector('input[name="management_cost"]').value) || 0;
            var taxPercentage = parseFloat(document.querySelector('input[name="tax"]').value) || 0;
            var shipingCostPercentage = parseFloat(document.querySelector('input[name="shiping_cost"]').value) || 0;
            var regularDiscountsPercentage = parseFloat(document.querySelector('input[name="regular_discounts"]').value) ||
                0;
            var rebatesPercentage = parseFloat(document.querySelector('input[name="rebates"]').value) || 0;


            // Calculate the values based on the formula
            var bankChargeValue = cogPrice * (bankChargePercentage / 100);
            var customsValue = cogPrice * (customsPercentage / 100);
            var utilityCostValue = cogPrice * (utilityCostPercentage / 100);
            var salesComissionValue = cogPrice * (salesComissionPercentage / 100);
            var liabilityValue = cogPrice * (liabilityPercentage / 100);
            var capitalShareValue = cogPrice * (capitalSharePercentage / 100);
            var managementCostValue = cogPrice * (managementCostPercentage / 100);
            var taxValue = cogPrice * (taxPercentage / 100);
            var shipingCostValue = cogPrice * (shipingCostPercentage / 100);
            var regularDiscountsValue = cogPrice * (regularDiscountsPercentage / 100);
            var rebatesValue = cogPrice * (rebatesPercentage / 100);


            // Show the calculated values in each corresponding field
            document.querySelector('input[name="bank_charge-value"]').value = bankChargeValue.toFixed(2);
            document.querySelector('input[name="customs-value"]').value = customsValue.toFixed(2);
            document.querySelector('input[name="utility_cost-value"]').value = utilityCostValue.toFixed(2);
            document.querySelector('input[name="sales_comission-value"]').value = salesComissionValue.toFixed(2);
            document.querySelector('input[name="liability-value"]').value = liabilityValue.toFixed(2);
            document.querySelector('input[name="capital_share-value"]').value = capitalShareValue.toFixed(2);
            document.querySelector('input[name="management_cost-value"]').value = managementCostValue.toFixed(2);
            document.querySelector('input[name="tax-value"]').value = taxValue.toFixed(2);
            document.querySelector('input[name="shiping_cost-value"]').value = shipingCostValue.toFixed(2);
            document.querySelector('input[name="regular_discounts-value"]').value = regularDiscountsValue.toFixed(2);
            document.querySelector('input[name="rebates-value"]').value = rebatesValue.toFixed(2);
        }


        // Attach the function to the input event of each percentage field
        document.querySelector('input[name="bank_charge"]').addEventListener('input', calculateAndUpdateValues);
        document.querySelector('input[name="customs"]').addEventListener('input', calculateAndUpdateValues);
        document.querySelector('input[name="utility_cost"]').addEventListener('input', calculateAndUpdateValues);
        document.querySelector('input[name="sales_comission"]').addEventListener('input', calculateAndUpdateValues);
        document.querySelector('input[name="liability"]').addEventListener('input', calculateAndUpdateValues);
        document.querySelector('input[name="capital_share"]').addEventListener('input', calculateAndUpdateValues);
        document.querySelector('input[name="management_cost"]').addEventListener('input', calculateAndUpdateValues);
        document.querySelector('input[name="tax"]').addEventListener('input', calculateAndUpdateValues);
        document.querySelector('input[name="shiping_cost"]').addEventListener('input', calculateAndUpdateValues);
        document.querySelector('input[name="regular_discounts"]').addEventListener('input', calculateAndUpdateValues);
        document.querySelector('input[name="rebates"]').addEventListener('input', calculateAndUpdateValues);
    </script>
    <script>
        // Function to calculate and update gross percentage
        function updateGrossPercentage() {
            // Get values from input fields
            var bankCharge = parseFloat(document.getElementsByName('bank_charge-value')[0].value) || 0;
            var customs = parseFloat(document.getElementsByName('customs-value')[0].value) || 0;
            var utilityCost = parseFloat(document.getElementsByName('utility_cost-value')[0].value) || 0;
            var salesComission = parseFloat(document.getElementsByName('sales_comission-value')[0].value) || 0;
            var liability = parseFloat(document.getElementsByName('liability-value')[0].value) || 0;
            var capitalShare = parseFloat(document.getElementsByName('capital_share-value')[0].value) || 0;
            var managementCost = parseFloat(document.getElementsByName('management_cost-value')[0].value) || 0;
            var tax = parseFloat(document.getElementsByName('tax-value')[0].value) || 0;
            var shipingCost = parseFloat(document.getElementsByName('shiping_cost-value')[0].value) || 0;
            var regularDiscount = parseFloat(document.getElementsByName('regular_discounts-value')[0].value) || 0;
            var rebate = parseFloat(document.getElementsByName('rebates-value')[0].value) || 0;


            // Calculate the sum
            var total = bankCharge + customs + utilityCost + salesComission + liability +
                capitalShare + managementCost + tax + shipingCost + regularDiscount + rebate;


            // Update the gross-percentage field
            document.getElementsByName('gross-percentage')[0].value = total.toFixed(2);
        }


        // Attach the function to the input fields' input event
        var inputFields = document.querySelectorAll(
            '[name^="bank_charge"], [name^="customs"], [name^="utility_cost"], [name^="sales_comission"], [name^="liability"], [name^="capital_share"], [name^="management_cost"], [name^="tax"], [name^="shiping_cost"], [name^="regular_discounts"], [name^="rebates"]'
        );
        inputFields.forEach(function(inputField) {
            inputField.addEventListener('input', updateGrossPercentage);
            inputField.addEventListener('change', updateGrossPercentage);
        });
    </script>




    <script>
        // Function to update net profit and net profit percentage
        function updateNetProfit() {
            // Get values from management_cost and cog_price fields
            var managementCost = parseFloat(document.getElementsByName('management_cost')[0].value) || 0;
            var cogPrice = parseFloat(document.getElementsByName('cog_price')[0].value) || 0;


            // Calculate (management_cost * cog_price / 100)
            var netProfitPercentage = (managementCost * cogPrice) / 100;


            // Update the net-profit-percentage field
            document.getElementsByName('net-profit-percentage')[0].value = netProfitPercentage.toFixed(2);


            // Set management_cost to be equal to net-profit
            document.getElementsByName('net-profit')[0].value = netProfitPercentage.toFixed(2);
        }


        // Attach the function to the management_cost and cog_price fields' input events
        var managementCostField = document.getElementsByName('management_cost')[0];
        var cogPriceField = document.getElementsByName('cog_price')[0];


        managementCostField.addEventListener('input', updateNetProfit);
        cogPriceField.addEventListener('input', updateNetProfit);
    </script>
@endpush
