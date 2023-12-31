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
                                @if ($brands)
                                    @foreach ($brands as $brand)
                                        <tr class="odd">
                                            <td>{{ $loop->iteration }}</td>
                                            <td>
                                                <img class="img-fluid" width="50px"
                                                    src="{{ !empty($brand->logo) && file_exists(public_path('storage/brand/logo/' . $brand->logo)) ? asset('storage/brand/logo/' . $brand->logo) : asset('backend/images/no-image-available.png') }}"
                                                    alt="{{ $brand->name }} Logo">
                                            </td>

                                            <td>{{ $brand->title }}</td>
                                            <td>
                                                <img class="img-fluid" width="50px"
                                                    src="{{ !empty($brand->image) && file_exists(public_path('storage/brand/image/' . $brand->image)) ? asset('storage/brand/image/' . $brand->image) : asset('backend/images/no-image-available.png') }}"
                                                    alt="{{ $brand->name }} image">
                                            </td>
                                            <td>
                                                <div class="d-flex justify-content-between align-items-center">
                                                    <a href="#"
                                                        class="btn btn-icon btn-bg-light btn-active-color-primary btn-sm me-1"
                                                        data-bs-toggle="modal"
                                                        data-bs-target="#brandViewModal_{{ $brand->id }}">
                                                        <i class="fa-solid fa-expand"></i>
                                                        <!--View-->
                                                    </a>
                                                    <a href="#"
                                                        class="btn btn-icon btn-bg-light btn-active-color-primary btn-sm me-1"
                                                        data-bs-toggle="modal"
                                                        data-bs-target="#brandtEditModal_{{ $brand->id }}">
                                                        <i class="fa-solid fa-pen"></i>
                                                        <!--Edit-->
                                                    </a>
                                                    <a href="{{ route('admin.brand.destroy', $brand->id) }}"
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