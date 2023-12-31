<table class="table table-striped table-hover align-middle rounded-0 table-row-bordered border fs-6 g-5"
    id="kt_datatable_example">
    <thead class="table_header_bg">
        <!--begin::Table row-->
        <tr class="text-center text-gray-900 fw-bolder fs-7 text-uppercase">
            <th width="5%">Sl</th>
            <th width="30%">Name</th>
            <th width="15%">Target</th>
            <th width="15%">Status</th>
            <th class="text-center" width="10%">Action</th>
        </tr>
        <!--end::Table row-->
    </thead>
    <tbody class="fw-bold text-gray-600 text-center">
        @if ($tasks)
            @foreach ($tasks as $task)
                <tr class="odd">
                    <td>{{ $loop->iteration }}</td>
                    <td>
                        {{ $task->task_name }}
                    </td>

                    <td>{{ $task->task_target }}</td>
                    <td>
                        {{ $task->status }}
                    </td>
                    <td>
                        <div class="d-flex justify-content-between align-items-center">
                            <a href="#" class="btn btn-icon btn-bg-light btn-active-color-primary btn-sm me-1"
                                data-bs-toggle="modal" data-bs-target="#employeeTaskViewModal_{{ $task->id }}">
                                <i class="fa-solid fa-expand"></i>
                                <!--View-->
                            </a>
                            <a href="#" class="btn btn-icon btn-bg-light btn-active-color-primary btn-sm me-1"
                                data-bs-toggle="modal" data-bs-target="#employeeTasktEditModal_{{ $task->id }}">
                                <i class="fa-solid fa-pen"></i>
                                <!--Edit-->
                            </a>
                            <a href="{{ route('admin.task.destroy', $task->id) }}"
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
