@extends('admin.master')
@section('content')
    <div class="container h-100">
        <div class="row">
            <div class="col-lg-12 card rounded-0 shadow-sm">
                <div class="card card-p-0 card-flush">
                    
                    <div class="card-header align-items-center py-0 gap-2 gap-md-5">
                        <div class="row w-100 align-items-center">
                            <div class="col-lg-3 col-sm-12">
                                <div class="card-title">
                                    <!--begin::Search-->
                                    <div class="d-flex align-items-center position-relative my-1">
                                        <span class="svg-icon fs-1 position-absolute ms-4"><i
                                                class="fa-solid fa-magnifying-glass"></i></span>
                                        <input type="text" data-kt-filter="search"
                                            class="form-control form-control-solid w-250px ps-14" placeholder="Search" />
                                    </div>
                                    <!--end::Search-->
                                    <!--begin::Export buttons-->
                                    <div id="kt_datatable_example_1_export" class="d-none"></div>
                                    <!--end::Export buttons-->
                                </div>
                            </div>
                            <div class="col-lg-5 col-sm-12">
                                <div class="card-title table_title">
                                    <h2 class="text-center document_title">All Rows</h2>
                                </div>
                            </div>
                            <div class="col-lg-4 col-sm-12">
                                <div class="card-toolbar flex-row-fluid justify-content-end gap-5">
                                    {{-- Add Button --}}
                                    <a href="{{ route('admin.row.create') }}" type="button"
                                        class="btn btn-sm btn-light-success rounded-0">
                                        Add Row
                                    </a>
                                    {{-- Add Button --}}
                                    <!--begin::Export dropdown-->
                                    <button type="button" class="btn btn-light-primary" data-kt-menu-trigger="click"
                                        data-kt-menu-placement="bottom-end">
                                        <i class="ki-duotone ki-exit-down fs-2"><span class="path1"></span><span
                                                class="path2"></span></i>
                                        Export Table
                                    </button>
                                    <!--begin::Menu-->
                                    <div id="kt_datatable_example_export_menu"
                                        class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-200px py-4"
                                        data-kt-menu="true">
                                        <!--begin::Menu item-->
                                        <div class="menu-item px-3">
                                            <a href="#" class="menu-link px-3" data-kt-export="copy">
                                                Copy to clipboard
                                            </a>
                                        </div>
                                        <!--end::Menu item-->
                                        <!--begin::Menu item-->
                                        <div class="menu-item px-3">
                                            <a href="#" class="menu-link px-3" data-kt-export="excel">
                                                Export as Excel
                                            </a>
                                        </div>
                                        <!--end::Menu item-->
                                        <!--begin::Menu item-->
                                        <div class="menu-item px-3">
                                            <a href="#" class="menu-link px-3" data-kt-export="csv">
                                                Export as CSV
                                            </a>
                                        </div>
                                        <!--end::Menu item-->
                                        <!--begin::Menu item-->
                                        <div class="menu-item px-3">
                                            <a href="#" class="menu-link px-3" data-kt-export="pdf">
                                                Export as PDF
                                            </a>
                                        </div>
                                        <!--end::Menu item-->
                                    </div>
                                    <!--end::Menu-->
                                    <!--end::Export dropdown-->

                                    <!--begin::Hide default export buttons-->
                                    <div id="kt_datatable_example_buttons" class="d-none"></div>
                                    <!--end::Hide default export buttons-->
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
                                    <th width="10%">Image</th>
                                    <th width="40%">Title</th>
                                    <th width="35%">List Title</th>
                                    <th width="10%">Action</th>
                                    <!--end::Table row-->
                            </thead>
                            <tbody class="fw-bold text-gray-600 text-center">
                                @if (count($rows) > 0)
                                    @foreach ($rows as $key => $row)
                                        <tr>
                                            <td>
                                                {{ ++$key }}
                                            </td>
                                            <td>
                                                @if (!empty($row->image))
                                                    <img class="img-fluid" width="50px"
                                                        src="{{ Storage::exists("public/row/requestImg/{$row->image}") ? asset("storage/row/requestImg/{$row->image}") : asset('backend/images/no-image-available.png') }}"
                                                        alt="">
                                                @endif
                                            <td>{{ $row->title }}
                                            </td>
                                            <td>{{ $row->list_title }}
                                            </td>
                                            <td class="d-flex justify-content-between align-items-center">
                                                {{-- <a href="#"
                                                    class="btn btn-icon btn-bg-light btn-active-color-primary btn-sm me-1"
                                                    data-bs-toggle="modal" data-bs-target="#categoryViewModal">
                                                    <i class="fa-solid fa-expand"></i>
                                                    <!--View-->
                                                </a> --}}
                                                <a href="{{ route('admin.row.edit', $row->id) }}"
                                                    class="btn btn-icon btn-bg-light btn-active-color-primary btn-sm me-1">
                                                    <i class="fa-solid fa-pen"></i>
                                                    <!--Edit-->
                                                </a>
                                                <a href="{{ route('admin.row.destroy', $row->id) }}"
                                                    class="btn btn-icon btn-bg-light btn-active-color-primary btn-sm me-1 delete"
                                                    data-kt-docs-table-filter="delete_row">
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
        </div>
    </div>
@endsection
