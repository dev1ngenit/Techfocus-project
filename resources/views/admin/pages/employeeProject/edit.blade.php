@extends('admin.master')
@section('content')
    <div class="container-fluid h-100">
        <div class="row">
            <div class="col-lg-12 card rounded-0 shadow-sm px-0">
                <div class="card card-flush">
                    <div class="card-header align-items-center gap-2 gap-md-5 shadow-lg bg-light-primary px-0"
                        style="min-height: 45px;">
                        <div class="container-fluid">
                            <div class="row align-items-center">
                                <div class="col-lg-6 col-sm-12 text-lg-start text-sm-center">
                                    <div class="card-title ps-3">
                                        <h2 class="text-start">Employee Project Edit</h2>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-sm-12 text-lg-end text-sm-center">
                                    <a href="{{ route('admin.employee-project.index') }}"
                                        class="btn btn-icon btn-primary w-auto px-3 rounded-0">
                                        <i class="las la-arrow-left fs-2 me-2"></i> Back</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <form id="myForm" action="{{ route('admin.employee-project.update', $employeeProject->id) }}"
                            method="post">
                            @csrf
                            @method('PUT')
                            <div class="container-fluid">
                                <div class="row">
                                    <div class="col-lg-12 col-sm-12">
                                        <div class="row">
                                            <div class="col-md-3 mb-1">
                                                <label for="name" class="form-label mb-0">Name</label>
                                                <input type="text"
                                                    class="form-control form-control-solid form-control-sm @error('name') is-invalid @enderror"
                                                    name="name" value="{{ $employeeProject->name }}" id="name"
                                                    placeholder="E.g : Your Name">
                                                @error('name')
                                                    <span class="invalid-feedback">
                                                        {{ $message }}
                                                    </span>
                                                @enderror
                                            </div>
                                            <div class="col-md-3 mb-2">
                                                <label for="validationCustom04" class="form-label mb-0">Type</label>
                                                <select
                                                    class="form-select form-select-solid form-select-sm @error('type') is-invalid @enderror"
                                                    name="type" data-control="select2" data-filter="false"
                                                    data-placeholder="Select an option" data-allow-clear="true">
                                                    <option></option>
                                                    <option @selected($employeeProject->type == 'new') value="new">New</option>
                                                    <option @selected($employeeProject->type == 'update') value="update">Update</option>
                                                    <option @selected($employeeProject->type == 'new_version') value="new_version">New Version
                                                    </option>
                                                </select>
                                                @error('type')
                                                    <div class="invalid-feedback">{{ $message }}</div>
                                                @enderror
                                            </div>
                                            <div class="col-md-3 mb-2">
                                                <label for="validationCustom04" class="form-label mb-0">Start
                                                    Date</label>
                                                <input type="date"
                                                    class="form-control form-control-solid form-control-sm @error('start_date') is-invalid @enderror"
                                                    name="start_date" value="{{ $employeeProject->start_date }}"
                                                    id="validationCustom01" placeholder="Enter Start Date">
                                                @error('start_date')
                                                    <div class="invalid-feedback">{{ $message }}</div>
                                                @enderror
                                            </div>
                                            <div class="col-md-3 mb-2">
                                                <label for="validationCustom04" class="form-label mb-0">End
                                                    Date</label>
                                                <input type="date"
                                                    class="form-control form-control-solid form-control-sm @error('end_date') is-invalid @enderror"
                                                    name="end_date" value="{{ $employeeProject->end_date }}"
                                                    id="validationCustom01" placeholder="Enter End Date">
                                                @error('end_date')
                                                    <div class="invalid-feedback">{{ $message }}</div>
                                                @enderror
                                            </div>
                                            <div class="col-md-3 mb-2">
                                                <label for="validationCustom04" class="form-label mb-0">Start
                                                    Time</label>
                                                <input type="time"
                                                    class="form-control form-control-solid form-control-sm @error('start_time') is-invalid @enderror"
                                                    name="start_time" value="{{ $employeeProject->start_time }}"
                                                    id="validationCustom01" placeholder="Enter End Time">
                                                @error('start_time')
                                                    <div class="invalid-feedback">{{ $message }}</div>
                                                @enderror
                                            </div>

                                            <div class="col-md-3 mb-2">
                                                <label for="validationCustom04" class="form-label mb-0">End
                                                    Time</label>
                                                <input type="time"
                                                    class="form-control form-control-solid form-control-sm @error('end_time') is-invalid @enderror"
                                                    name="end_time" value="{{ $employeeProject->end_time }}"
                                                    id="validationCustom01" placeholder="Enter End Time">
                                                @error('end_time')
                                                    <div class="invalid-feedback">{{ $message }}</div>
                                                @enderror
                                            </div>
                                            <div class="col-md-3 mb-2">
                                                <label for="validationCustom04" class="form-label mb-0">Supervisor</label>
                                                <select class="form-select form-select-solid" name="supervisor[]"
                                                    id="field2" multiple multiselect-search="true"
                                                    multiselect-select-all="true" multiselect-max-items="3"
                                                    onchange="console.log(this.selectedOptions)">
                                                    @foreach (json_decode($admins) as $admin)
                                                        <option value="{{ $admin->id }}">{{ $admin->name }}</option>
                                                    @endforeach
                                                </select>
                                                @error('supervisor')
                                                    <div class="invalid-feedback">{{ $message }}</div>
                                                @enderror
                                            </div>
                                            <div class="col-md-3 mb-2">
                                                <label for="validationCustom04" class="form-label mb-0">Assigned
                                                    Employee</label>
                                                <select
                                                    class="form-select form-select-solid @error('assigned_employee') is-invalid @enderror"
                                                    name="assigned_employee[]" id="field2" multiple
                                                    multiselect-search="true" multiselect-select-all="true"
                                                    multiselect-max-items="3"
                                                    onchange="console.log(this.selectedOptions)">
                                                    @foreach (json_decode($admins) as $admin)
                                                        <option value="{{ $admin->id }}">{{ $admin->name }}</option>
                                                    @endforeach
                                                </select>
                                                @error('assigned_employee')
                                                    <div class="invalid-feedback">{{ $message }}</div>
                                                @enderror
                                            </div>
                                            <div class="col-md-3 mb-2">
                                                <label for="validationCustom04" class="form-label mb-0">Project
                                                    Status</label>
                                                <select
                                                    class="form-select form-select-solid form-select-sm @error('project_status') is-invalid @enderror"
                                                    name="project_status" value="{{ $employeeProject->id }}"
                                                    data-control="select2" data-placeholder="Select an option"
                                                    data-allow-clear="true">
                                                    <option @selected($employeeProject->project_status == 'planned') value="planned">Planned</option>
                                                    <option @selected($employeeProject->project_status == 'on_going') value="on_going">On Going</option>
                                                    <option @selected($employeeProject->project_status == 'completed') value="completed">Completed
                                                    </option>
                                                </select>
                                                @error('project_status')
                                                    <div class="invalid-feedback">{{ $message }}</div>
                                                @enderror
                                            </div>
                                            <div class="col-md-3 mb-2">
                                                <label for="validationCustom04" class="form-label mb-0">Review</label>
                                                <textarea class="form-control form-control-solid form-control-sm" name="review" id="" cols="30"
                                                    rows="1" placeholder="Enter Your Review">{{ $employeeProject->review }}</textarea>
                                                @error('review')
                                                    <div class="invalid-feedback">{{ $message }}</div>
                                                @enderror
                                            </div>

                                            <div class="col-md-3 mb-2">
                                                <label for="validationCustom04" class="form-label mb-0">Status</label>
                                                <input type="text"
                                                    class="form-control form-control-solid form-control-sm @error('status') is-invalid @enderror"
                                                    name="status" value="{{ $employeeProject->status }}"
                                                    id="validationCustom01" placeholder="Enter Your Status">
                                                @error('status')
                                                    <div class="invalid-feedback">{{ $message }}</div>
                                                @enderror
                                            </div>
                                            <div class="col-md-3 mb-2">
                                                <label for="validationCustom04" class="form-label mb-0">Weight</label>
                                                <input type="text"
                                                    class="form-control form-control-solid form-control-sm @error('weight') is-invalid @enderror"
                                                    name="weight" value="{{ $employeeProject->weight }}"
                                                    id="validationCustom01" placeholder="Enter Your Weight">
                                                @error('weight')
                                                    <div class="invalid-feedback">{{ $message }}</div>
                                                @enderror
                                            </div>

                                            <div class="col-md-4 mb-2">
                                                <label for="validationCustom04" class="form-label mb-0">Kpi
                                                    Rating</label>
                                                <input type="number"
                                                    class="form-control form-control-solid form-control-sm @error('kpi_rating') is-invalid @enderror"
                                                    name="kpi_rating" value="{{ $employeeProject->kpi_rating }}"
                                                    id="validationCustom01" placeholder="Enter Your Kpi Rating">
                                                @error('kpi_rating')
                                                    <div class="invalid-feedback">{{ $message }}</div>
                                                @enderror
                                            </div>
                                            <div class="col-md-4 mb-2">
                                                <label for="validationCustom04"
                                                    class="form-label mb-0 @error('total_working_day') is-invalid @enderror">Total
                                                    Working Day (In Days)</label>
                                                <input type="number"
                                                    class="form-control form-control-solid form-control-sm @error('total_working_day') is-invalid @enderror"
                                                    name="total_working_day"
                                                    value="{{ $employeeProject->total_working_day }}"
                                                    id="validationCustom01" placeholder="Enter Your Total Working Day">
                                                @error('total_working_day')
                                                    <div class="invalid-feedback">{{ $message }}</div>
                                                @enderror
                                            </div>
                                            <div class="col-md-4 mb-2">
                                                <label for="validationCustom04"
                                                    class="form-label mb-0 @error('total_working_day') is-invalid @enderror">Total
                                                    Working Man Hour</label>
                                                <input type="number"
                                                    class="form-control form-control-solid form-control-sm @error('total_working_man_hour') is-invalid @enderror"
                                                    name="total_working_man_hour"
                                                    value="{{ $employeeProject->total_working_man_hour }}"
                                                    id="validationCustom01"
                                                    placeholder="Enter Your Total Working Man Hour">
                                                @error('total_working_man_hour')
                                                    <div class="invalid-feedback">{{ $message }}</div>
                                                @enderror
                                            </div>

                                            <div class="col-md-12 mb-2">
                                                <label for="longText" class="form-label mb-0">Project Description</label>
                                                <textarea id="longText" name="description"
                                                    class="tox-target kt_docs_tinymce_plugins @error('description') is-invalid @enderror">{!! $employeeProject->description !!} </textarea>
                                                @error('description')
                                                    <div class="invalid-feedback">{{ $message }}</div>
                                                @enderror
                                            </div>

                                            <div class="col-lg-12 mt-5">
                                                <div class="d-flex justify-content-end">
                                                    <button type="submit"
                                                        class="btn btn-sm btn-light-primary rounded-0 p-3">Submit</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
