{{-- Attendance Modals --}}
<div class="modal fade" id="thisMonth" tabindex="-1" aria-hidden="true">
    <!--begin::Modal dialog-->
    <div class="modal-dialog modal-lg">
        <!--begin::Modal content-->
        <div class="modal-content rounded">
            <!--begin::Modal header-->
            <div class="modal-header justify-content-between align-items-center border-0 pt-3 pb-2">
                <!--begin::Close-->
                <div>
                    <h5 class="mb-0">This Month's Attendance ({{!empty($attendanceToday['user_name']) ? $attendanceToday['user_name'] : "Not Defined"}})</h5>
                </div>
                <div class="btn btn-sm btn-icon btn-active-color-primary" data-bs-dismiss="modal">
                    <!--begin::Svg Icon | path: icons/duotune/arrows/arr061.svg-->
                    <span class="svg-icon svg-icon-1">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                            fill="none">
                            <rect opacity="0.5" x="6" y="17.3137" width="16" height="2" rx="1"
                                transform="rotate(-45 6 17.3137)" fill="currentColor" />
                            <rect x="7.41422" y="6" width="16" height="2" rx="1"
                                transform="rotate(45 7.41422 6)" fill="currentColor" />
                        </svg>
                    </span>
                    <!--end::Svg Icon-->
                </div>
                <!--end::Close-->
            </div>
            <!--end::Modal header-->
            <!--begin::Modal body-->
            <div class="modal-body pt-0 pb-15 px-5 px-xl-20">
                <div class="row p-3">
                    <div class="table-responsive">
                        <table
                            class="table table-striped table-hover align-middle rounded-0 table-row-bordered border fs-6 g-5"
                            id="kt_datatable_example">
                            <thead class="table_header_bg">
                                <!--begin::Table row-->
                                <tr class="text-center text-gray-900 fw-bolder fs-7 text-uppercase">
                                    <th width="20%">Date</th>
                                    <th width="20%">Check In</th>
                                    <th width="20%">Check Out</th>
                                    <th width="20%">Comments</th>
                                    <th width="20%">Action</th>
                                </tr>
                                <!--end::Table row-->
                            </thead>
                            <tbody class="fw-bold text-gray-600 text-center">
                                @if ($attendanceThisMonths)
                                    @foreach ($attendanceThisMonths as $attendanceThisMonth)
                                        <tr class="odd">
                                            <td>{{ $attendanceThisMonth['date'] }}</td>
                                            <td>{{ $attendanceThisMonth['check_in'] }}</td>
                                            <td>{{ $attendanceThisMonth['check_out'] }}</td>
                                            <td>
                                                @if (Carbon\Carbon::parse($attendanceThisMonth['check_in']) > Carbon\Carbon::parse('09:05:00') &&
                                                        Carbon\Carbon::parse($attendanceThisMonth['check_in']) < Carbon\Carbon::parse('10:05:00'))
                                                    <h4 class="mb-0 text-danger fw-bold">Late (L)</h4>
                                                @endif

                                                @if (Carbon\Carbon::parse($attendanceThisMonth['check_in']) > Carbon\Carbon::parse('10:05:00'))
                                                    <h4 class="mb-0 text-danger fw-bold">Half Day (LL)</h4>
                                                @endif
                                            </td>
                                            <td></td>
                                        </tr>
                                    @endforeach
                                @endif
                            </tbody>

                        </table>
                    </div>
                </div>
                <div class="d-flex flex-center flex-row-fluid pt-12">
                    <button type="reset" class="btn btn-light me-3" data-bs-dismiss="modal">Cancel</button>
                    {{-- <button type="submit" class="btn btn-primary">Upgrade Plan</button> --}}
                </div>
            </div>
        </div>
    </div>
</div>
<div class="modal fade" id="lateCount" tabindex="-1" aria-hidden="true">
    <!--begin::Modal dialog-->
    <div class="modal-dialog modal-lg">
        <!--begin::Modal content-->
        <div class="modal-content rounded">
            <!--begin::Modal header-->
            <div class="modal-header justify-content-between align-items-center border-0 pt-3 pb-2">
                <!--begin::Close-->
                <div>
                    <h5 class="mb-0">This Month's Late Entrys ({{!empty($attendanceToday['user_name']) ? $attendanceToday['user_name'] : "Not Defined"}})</h5>
                </div>
                <div class="btn btn-sm btn-icon btn-active-color-primary" data-bs-dismiss="modal">
                    <!--begin::Svg Icon | path: icons/duotune/arrows/arr061.svg-->
                    <span class="svg-icon svg-icon-1">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                            fill="none">
                            <rect opacity="0.5" x="6" y="17.3137" width="16" height="2" rx="1"
                                transform="rotate(-45 6 17.3137)" fill="currentColor" />
                            <rect x="7.41422" y="6" width="16" height="2" rx="1"
                                transform="rotate(45 7.41422 6)" fill="currentColor" />
                        </svg>
                    </span>
                    <!--end::Svg Icon-->
                </div>
                <!--end::Close-->
            </div>
            <!--end::Modal header-->
            <!--begin::Modal body-->
            <div class="modal-body pt-0 pb-15 px-5 px-xl-20">
                <div class="row p-3">
                    <div class="table-responsive">
                        <table
                            class="table table-striped table-hover align-middle rounded-0 table-row-bordered border fs-6 g-5"
                            id="kt_datatable_example">
                            <thead class="table_header_bg">
                                <!--begin::Table row-->
                                <tr class="text-center text-gray-900 fw-bolder fs-7 text-uppercase">
                                    <th width="20%">Date</th>
                                    <th width="20%">Check In</th>
                                    <th width="20%">Check Out</th>
                                    <th width="20%">Comments</th>
                                    <th width="20%">Action</th>
                                </tr>
                                <!--end::Table row-->
                            </thead>
                            <tbody class="fw-bold text-gray-600 text-center">
                                @if ($lateCounts)
                                    @foreach ($lateCounts as $lateCount)
                                        <tr class="odd">
                                            <td>{{ $lateCount['date'] }}</td>
                                            <td>{{ $lateCount['check_in'] }}</td>
                                            <td>{{ $lateCount['check_out'] }}</td>
                                            <td>
                                                @if (Carbon\Carbon::parse($lateCount['check_in']) > Carbon\Carbon::parse('09:05:00') &&
                                                        Carbon\Carbon::parse($lateCount['check_in']) < Carbon\Carbon::parse('10:05:00'))
                                                    <h4 class="mb-0 text-danger fw-bold">Late (L)</h4>
                                                @endif

                                                @if (Carbon\Carbon::parse($lateCount['check_in']) > Carbon\Carbon::parse('10:05:00'))
                                                    <h4 class="mb-0 text-danger fw-bold">Half Day (LL)</h4>
                                                @endif
                                            </td>
                                            <td></td>
                                        </tr>
                                    @endforeach
                                @endif
                            </tbody>

                        </table>
                    </div>
                </div>
                <div class="d-flex flex-center flex-row-fluid pt-12">
                    <button type="reset" class="btn btn-light me-3" data-bs-dismiss="modal">Cancel</button>
                    {{-- <button type="submit" class="btn btn-primary">Upgrade Plan</button> --}}
                </div>
            </div>
        </div>
    </div>
</div>
<div class="modal fade" id="lastMonth" tabindex="-1" aria-hidden="true">
    <!--begin::Modal dialog-->
    <div class="modal-dialog modal-lg">
        <!--begin::Modal content-->
        <div class="modal-content rounded">
            <!--begin::Modal header-->
            <div class="modal-header justify-content-between align-items-center border-0 pt-3 pb-2">
                <!--begin::Close-->
                <div>
                    <h5 class="mb-0">{{ \Carbon\Carbon::now()->subMonth()->format('F') }}'s Attendance
                        ({{!empty($attendanceToday['user_name']) ? $attendanceToday['user_name'] : "Not Defined"}})
                    </h5>
                </div>
                <div class="btn btn-sm btn-icon btn-active-color-primary" data-bs-dismiss="modal">
                    <!--begin::Svg Icon | path: icons/duotune/arrows/arr061.svg-->
                    <span class="svg-icon svg-icon-1">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                            fill="none">
                            <rect opacity="0.5" x="6" y="17.3137" width="16" height="2" rx="1"
                                transform="rotate(-45 6 17.3137)" fill="currentColor" />
                            <rect x="7.41422" y="6" width="16" height="2" rx="1"
                                transform="rotate(45 7.41422 6)" fill="currentColor" />
                        </svg>
                    </span>
                    <!--end::Svg Icon-->
                </div>
                <!--end::Close-->
            </div>
            <!--end::Modal header-->
            <!--begin::Modal body-->
            <div class="modal-body pt-0 pb-15 px-5 px-xl-20">
                <div class="row p-3">
                    <div class="table-responsive">
                        <table
                            class="table table-striped table-hover align-middle rounded-0 table-row-bordered border fs-6 g-5"
                            id="kt_datatable_example">
                            <thead class="table_header_bg">
                                <!--begin::Table row-->
                                <tr class="text-center text-gray-900 fw-bolder fs-7 text-uppercase">
                                    <th width="20%">Date</th>
                                    <th width="20%">Check In</th>
                                    <th width="20%">Check Out</th>
                                    <th width="20%">Comments</th>
                                    <th width="20%">Action</th>
                                </tr>
                                <!--end::Table row-->
                            </thead>
                            <tbody class="fw-bold text-gray-600 text-center">
                                @if ($attendanceLastMonths)
                                    @foreach ($attendanceLastMonths as $attendanceLastMonth)
                                        <tr class="odd">
                                            <td>{{ $attendanceLastMonth['date'] }}</td>
                                            <td>{{ $attendanceLastMonth['check_in'] }}</td>
                                            <td>{{ $attendanceLastMonth['check_out'] }}</td>
                                            <td>
                                                @if (Carbon\Carbon::parse($attendanceLastMonth['check_in']) > Carbon\Carbon::parse('09:05:00') &&
                                                        Carbon\Carbon::parse($attendanceLastMonth['check_in']) < Carbon\Carbon::parse('10:05:00'))
                                                    <h5 class="text-danger fw-bold">L</h5>
                                                @endif

                                                @if (Carbon\Carbon::parse($attendanceLastMonth['check_in']) > Carbon\Carbon::parse('10:05:00'))
                                                    <h5 class="text-danger fw-bold">Half Day (LL)</h5>
                                                @endif
                                            </td>
                                            <td></td>

                                        </tr>
                                    @endforeach
                                @endif
                            </tbody>

                        </table>
                    </div>
                </div>
                <div class="d-flex flex-center flex-row-fluid pt-12">
                    <button type="reset" class="btn btn-light me-3" data-bs-dismiss="modal">Cancel</button>
                    {{-- <button type="submit" class="btn btn-primary">Upgrade Plan</button> --}}
                </div>
            </div>
        </div>
    </div>
</div>
{{-- Attendance Modals --}}
