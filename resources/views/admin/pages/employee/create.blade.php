@extends('admin.master')
@section('content')
<div class="post d-flex flex-column-fluid mb-3" id="kt_post">
    <div id="kt_content_container" class="container-fluid mb-3">
        <div class="card">
            <div class="main_bg card-header py-2 main_bg align-items-center">
                <div class="col-lg-5 col-sm-12">
                    <div>
                        <a class="btn btn-sm btn-primary btn-rounded rounded-circle btn-icon back-btn"
                            href="{{ URL::previous() }}">
                            <i class="fa-solid fa-arrow-left text-white" style="padding-top: 3px;"></i>
                        </a>
                    </div>
                </div>
                <div class="col-lg-7 col-sm-12 d-flex justify-content-end">
                    <h4 class="text-white p-0 m-0 fw-bold">Employee Create Add</h4>
                </div>
            </div>
            <div class="card-body p-0 pt-1">
                <div class="row gx-0">
                    <div class="col-lg-2">
                        <ul class="nav nav-tabs nav-pills border-0 flex-row flex-md-column mb-3 mb-md-0 fs-6"
                            role="tablist">
                            <li class="nav-item w-md-290px my-1 mt-0" role="presentation">
                                <a class="nav-link p-5 rounded-0 active tab-trigger" data-bs-toggle="tab"
                                    href="#personal-info" aria-selected="true" role="tab">Personal Information</a>
                            </li>
                            <li class="nav-item w-md-290px my-1" role="presentation">
                                <a class="nav-link p-5 rounded-0 tab-trigger" data-bs-toggle="tab" href="#job-academic"
                                    aria-selected="false" role="tab">Previous Job & Academic Info</a>
                            </li>
                            <li class="nav-item w-md-290px my-1" role="presentation">
                                <a class="nav-link p-5 rounded-0 tab-trigger" data-bs-toggle="tab"
                                    href="#family-emergency" aria-selected="false" role="tab" tabindex="-1">Emergency
                                    Contact Info</a>
                            </li>
                            <li class="nav-item w-md-290px my-1" role="presentation">
                                <a class="nav-link p-5 rounded-0 tab-trigger" data-bs-toggle="tab"
                                    href="#acknowledge-sign" aria-selected="false" role="tab" tabindex="-1">
                                    Acknowledge/Sign</a>
                            </li>
                        </ul>
                    </div>
                    <div class="col-lg-10 px-4 p-2">
                        <form id="productForm" method="post" action="" enctype="multipart/form-data">
                            @csrf
                            <div class="tab-content" id="myTabContent">
                                <div class="tab-pane fade active show" id="personal-info" role="tabpanel">
                                    <div class="w-100">
                                        <div class="pb-5 pb-lg-5">
                                            <h2
                                                class="fw-bolder d-flex justify-content-center align-items-center text-dark">
                                                Personal Information
                                            </h2>
                                            <p class="text-center p-0 m-0"><small
                                                    class="ms-4 text-danger fw-normal fs-sm-9">All The Red Star Mark
                                                    Field Is Required.</small></p>
                                        </div>
                                        <div class="fv-row">
                                            <div class="row">
                                                <div class="col-lg-6 pt-1">
                                                    <div class="mb-1">
                                                        <label class="p-0 text-start text-black">Job Category
                                                            Name</label>
                                                        <select name="category_id"
                                                            class="form-select form-select-sm form-select-solid"
                                                            data-control="select2" data-placeholder="Select an option"
                                                            data-allow-clear="true">
                                                            <option></option>
                                                            <!-- Blank option for placeholder -->
                                                            {{-- @foreach ($employeeCategorys as
                                                            $employeeCategory)
                                                            <option value="{{ $employeeCategory->id }}">
                                                                {{ $employeeCategory->name }}
                                                            </option>
                                                            @endforeach --}}
                                                        </select>
                                                        <div class="invalid-feedback"> Please Enter Name.</div>
                                                        <div class="invalid-feedback"> Please Enter Name.</div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-6 pt-1">
                                                    <div class="mb-1">
                                                        <label class="p-0 text-start text-black">Depertment
                                                            Name</label>
                                                        <select name="department_id"
                                                            class="form-select form-select-sm form-select-solid"
                                                            data-control="select2" data-placeholder="Select an option"
                                                            data-allow-clear="true">
                                                            <option></option>
                                                            <!-- Blank option for placeholder -->
                                                            {{-- @foreach ($employeeDepartments as
                                                            $employeeDepartment)
                                                            <option value="{{ $employeeDepartment->id }}">
                                                                {{ $employeeDepartment->name }}
                                                            </option>
                                                            @endforeach --}}
                                                        </select>
                                                        <div class="invalid-feedback"> Please Enter Name.</div>
                                                        <div class="invalid-feedback"> Please Enter Name.</div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-3 pt-1">
                                                    <div class="mb-1">
                                                        <label class="p-0 text-start text-black">Designation </label>
                                                        <input type="text"
                                                            class="form-control form-control-sm form-control-solid"
                                                            maxlength="100" name="designation"
                                                            placeholder="Enter Designation">
                                                        <div class="invalid-feedback"> Please Enter Name.</div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-3 pt-1">
                                                    <div class="mb-1">
                                                        <label class="p-0 text-start text-black">Status</label>
                                                        <select name="status"
                                                            class="form-select form-select-sm form-select-solid"
                                                            data-control="select2" data-placeholder="Select an option"
                                                            data-allow-clear="true">
                                                            <option></option>
                                                            <option value="active">Active</option>
                                                            <option value="inactive">Inactive</option>
                                                        </select>
                                                        <div class="invalid-feedback"> Please Enter Name.</div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-3 pt-1">
                                                    <div class="mb-1">
                                                        <label class="p-0 text-start text-black">Mobile </label>
                                                        <input type="number"
                                                            class="form-control form-control-sm form-control-solid"
                                                            maxlength="20" name="mobile" placeholder="Enter Mobile">
                                                        <div class="invalid-feedback"> Please Enter Name.</div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-3 pt-1">
                                                    <div class="mb-1">
                                                        <label class="p-0 text-start text-black">Home Phone </label>
                                                        <input type="text" name="home_phone"
                                                            class="form-control form-control-sm form-control-solid"
                                                            placeholder="Enter Home Phone ">
                                                    </div>
                                                </div>
                                                <div class="col-lg-3 pt-1">
                                                    <div class="mb-1">
                                                        <label class="p-0 text-start text-black">Emergency Number
                                                        </label>
                                                        <input type="text" name="emergency_number"
                                                            class="form-control form-control-sm form-control-solid"
                                                            placeholder="Enter Emergency Number ">
                                                        <div class="invalid-feedback"> Please Enter Name.</div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-3 pt-1">
                                                    <div class="mb-1">
                                                        <label class="p-0 text-start text-black">Permanent Address City
                                                            <span class="text-danger">*</span></label>
                                                        <input type="text" name="permanent_address_city"
                                                            class="form-control form-control-sm form-control-solid"
                                                            placeholder="Enter Permanent Address City">
                                                        <div class="invalid-feedback"> Please Enter Name.</div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-3 pt-1">
                                                    <div class="mb-1">
                                                        <label class="p-0 text-start text-black">Permanent Address State
                                                        </label>
                                                        <input type="text" name="permanent_address_state"
                                                            class="form-control form-control-sm form-control-solid"
                                                            placeholder="Enter Permanent Address State ">
                                                    </div>
                                                </div>

                                                <div class="col-lg-3 pt-1">
                                                    <div class="mb-1">
                                                        <label class="p-0 text-start text-black">Permanent Address Zip
                                                            Code <span class="text-danger">*</span>
                                                        </label>
                                                        <input type="text" name="permanent_address_zip_code"
                                                            class="form-control form-control-sm form-control-solid"
                                                            placeholder="Enter Permanent Address Zip Code ">
                                                        <div class="invalid-feedback"> Please Enter Name.</div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-3 pt-1">
                                                    <div class="mb-1">
                                                        <label class="p-0 text-start text-black">Permanent Address
                                                        </label>
                                                        <textarea type="text" name="permanent_address"
                                                            class="form-control form-control-sm form-control-solid"
                                                            placeholder="Enter Permanent Address" id="" cols="30"
                                                            rows="1"></textarea>
                                                        <div class="invalid-feedback"> Please Enter Name.</div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-3 pt-1">
                                                    <div class="mb-1">
                                                        <label class="p-0 text-start text-black">Current Address City
                                                            <span class="text-danger">*</span></label>
                                                        <input type="text" name="current_address_city"
                                                            class="form-control form-control-sm form-control-solid"
                                                            placeholder="Enter Current Address City ">
                                                        <div class="invalid-feedback"> Please Enter Name.</div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-3 pt-1">
                                                    <div class="mb-1">
                                                        <label class="p-0 text-start text-black">Current Address
                                                            State</label>
                                                        <input type="text" name="current_address_state"
                                                            class="form-control form-control-sm form-control-solid"
                                                            placeholder="Enter Current Address State">
                                                    </div>
                                                </div>
                                                <div class="col-lg-3 pt-1">
                                                    <div class="mb-1">
                                                        <label class="p-0 text-start text-black">Current Address Zip
                                                            Code <span class="text-danger">*</span></label>
                                                        <input type="text" name="current_address_zip_code"
                                                            class="form-control form-control-sm form-control-solid"
                                                            placeholder="Enter Current Address Zip Code ">
                                                        <div class="invalid-feedback"> Please Enter Name.</div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-3 pt-1">
                                                    <div class="mb-1">
                                                        <label class="p-0 text-start text-black">Current Address
                                                        </label>
                                                        <textarea type="text" name="current_address"
                                                            class="form-control form-control-sm form-control-solid"
                                                            placeholder="Enter Current Address " id="" cols="30"
                                                            rows="1"></textarea>
                                                        <div class="invalid-feedback"> Please Enter Name.</div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-3 pt-1">
                                                    <div class="mb-1">
                                                        <label class="p-0 text-start text-black">Alternate Email
                                                        </label>
                                                        <input type="email" name="alternate_email"
                                                            class="form-control form-control-sm form-control-solid"
                                                            placeholder="Enter Alternate Email ">
                                                    </div>
                                                </div>
                                                <div class="col-lg-3 pt-1">
                                                    <div class="mb-1">
                                                        <label class="p-0 text-start text-black">Nid/Bri/Ppn </label>
                                                        <input type="text" name="nid_bri_ppn"
                                                            class="form-control form-control-sm form-control-solid"
                                                            placeholder="Enter Nid Bri Ppn">
                                                        <div class="invalid-feedback"> Please Enter Name.</div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-3 pt-1">
                                                    <div class="mb-1">
                                                        <label class="p-0 text-start text-black">Birth Date </label>
                                                        <input type="date" name="birth_date"
                                                            class="form-control form-control-sm form-control-solid"
                                                            placeholder="Enter Birth Date">
                                                        <div class="invalid-feedback"> Please Enter Name.</div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-3 pt-1">
                                                    <div class="mb-1">
                                                        <label class="p-0 text-start text-black">Marital Status</label>
                                                        <select name="marital_status"
                                                            class="form-select form-select-sm form-select-solid"
                                                            data-control="select2" data-placeholder="Select an option"
                                                            data-allow-clear="true">
                                                            <option></option>
                                                            <option value="single">Single</option>
                                                            <option value="married">Married</option>
                                                            <option value="divorced">Divorced</option>
                                                            <option value="widowed">Widowed</option>
                                                        </select>
                                                        <div class="invalid-feedback"> Please Enter Name.</div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-3 pt-1">
                                                    <div class="mb-1">
                                                        <label class="p-0 text-start text-black">Spouse Name </label>
                                                        <input type="text" name="spouse_name"
                                                            class="form-control form-control-sm form-control-solid"
                                                            placeholder="Enter Spouse Name ">
                                                    </div>
                                                </div>
                                                <div class="col-lg-3 pt-1">
                                                    <div class="mb-1">
                                                        <label class="p-0 text-start text-black">Spouse Employer
                                                        </label>
                                                        <input type="text" name="spouse_employer"
                                                            class="form-control form-control-sm form-control-solid"
                                                            placeholder="Enter Spouse Employer ">
                                                    </div>
                                                </div>
                                                <div class="col-lg-3 pt-1">
                                                    <div class="mb-1">
                                                        <label class="p-0 text-start text-black">Spouse Work Phone
                                                        </label>
                                                        <input type="text" name="spouse_work_phone"
                                                            class="form-control form-control-sm form-control-solid"
                                                            placeholder="Enter Spouse Work Phone ">
                                                    </div>
                                                </div>
                                                <div class="col-lg-3 pt-1">
                                                    <div class="mb-1">
                                                        <label class="p-0 text-start text-black">Lower Job Duration In
                                                            Past</label>
                                                        <input type="number"
                                                            class="form-control form-control-sm form-control-solid"
                                                            name="lowest_job_duration_in_past" id=""
                                                            placeholder="Enter Lower Job Duration In Past">
                                                    </div>
                                                </div>
                                                <div class="col-lg-3 pt-1">
                                                    <div class="mb-1">
                                                        <label class="p-0 text-start text-black">Higest Job Duration In
                                                            Past</label>
                                                        <input type="number"
                                                            class="form-control form-control-sm form-control-solid"
                                                            name="highest_job_duration_in_past" id=""
                                                            placeholder="Enter Higest Job Duration In Past">
                                                    </div>
                                                </div>
                                                <div class="col-lg-3 pt-1">
                                                    <div class="mb-1">
                                                        <label class="p-0 text-start text-black">Concern With Social
                                                            Work</label>
                                                        <input type="number"
                                                            class="form-control form-control-sm form-control-solid"
                                                            name="concern_with_social_work" id=""
                                                            placeholder="Enter Concern With Social Work">
                                                    </div>
                                                </div>
                                                <div class="col-lg-3 pt-1">
                                                    <div class="mb-1">
                                                        <label class="p-0 text-start text-black">What Turns You On
                                                            Off</label>
                                                        <textarea name="what_turns_you_on_off"
                                                            class="form-control form-control-sm form-control-solid"
                                                            placeholder="Enter What Turns You On Off" id="" cols="30"
                                                            rows="1"></textarea>
                                                    </div>
                                                </div>
                                                <div class="col-lg-3 pt-1">
                                                    <div class="mb-1">
                                                        <label class="p-0 text-start text-black">Preference In
                                                            Professional
                                                            Life</label>
                                                        <textarea name="preference_in_professional_life"
                                                            class="form-control form-control-sm form-control-solid"
                                                            placeholder="Enter Preference In Professional Life" id=""
                                                            cols="30" rows="1"></textarea>
                                                    </div>
                                                </div>
                                                <div class="col-lg-3 pt-1">
                                                    <div class="mb-1">
                                                        <label class="p-0 text-start text-black">Action In Negative
                                                            Situation</label>
                                                        <textarea name="action_in_negative_situation"
                                                            class="form-control form-control-sm form-control-solid"
                                                            placeholder="Enter Action In Negative Situation" id=""
                                                            cols="30" rows="1"></textarea>
                                                    </div>
                                                </div>
                                                <div class="col-lg-3 pt-1">
                                                    <div class="mb-1">
                                                        <label class="p-0 text-start text-black">Total Years Of Job
                                                            Experience</label>
                                                        <input type="number"
                                                            class="form-control form-control-sm form-control-solid"
                                                            name="total_years_of_job_experience" id="" maxlength="2"
                                                            max="2" min="1"
                                                            placeholder="Enter Total Years Of Job Experience">
                                                    </div>
                                                </div>
                                                <div class="col-lg-3 pt-1">
                                                    <div class="mb-1">
                                                        <label class="p-0 text-start text-black">Total Years Of Releted
                                                            Experience</label>
                                                        <input type="number"
                                                            class="form-control form-control-sm form-control-solid"
                                                            name="total_years_of_related_experience" id=""
                                                            placeholder="Enter Total Years Of Releted Experience">
                                                    </div>
                                                </div>
                                                <div class="col-lg-3 pt-1">
                                                    <div class="mb-1">
                                                        <label class="p-0 text-start text-black">Total Years Of Releted
                                                            Education</label>
                                                        <input type="number"
                                                            class="form-control form-control-sm form-control-solid"
                                                            name="total_years_of_related_education" id=""
                                                            placeholder="Enter Total Years Of Releted Education">
                                                    </div>
                                                </div>
                                                <div class="col-md-3">
                                                    <label for="validationCustom04" class="form-label">Job Category
                                                        Name</label>
                                                    <select class="form-select form-select-sm form-select-solid"
                                                        name="category_id" data-control="select2"
                                                        data-placeholder="Select an option" data-allow-clear="true">
                                                        <option></option>
                                                        <option value="Top">Top</option>
                                                        <option value="Featured">Featured</option>
                                                        <option value="Others">Others</option>
                                                    </select>
                                                    <div class="invalid-feedback"> Please Enter Name.</div>
                                                </div>
                                                <div class="col-md-3">
                                                    <label for="validationCustom04" class="form-label">Depertment
                                                        Name</label>
                                                    <select class="form-select form-select-sm form-select-solid"
                                                        name="department_id" data-control="select2"
                                                        data-placeholder="Select an option" data-allow-clear="true">
                                                        <option></option>
                                                        <option value="Top">Top</option>
                                                        <option value="Featured">Featured</option>
                                                        <option value="Others">Others</option>
                                                    </select>
                                                    <div class="invalid-feedback"> Please Enter Name.</div>
                                                </div>
                                                <div class="col-lg-3">
                                                    <div class="fv-row mb-3">
                                                        <label class="form-label">Name</label>
                                                        <input name="name"
                                                            class="form-control form-control-sm form-control-solid"
                                                            placeholder="Enter Name" type="text" />
                                                        <div class="invalid-feedback"> Please Enter Name.</div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-3">
                                                    <div class="fv-row mb-3">
                                                        <label class="form-label"> Image</label>
                                                        <input name="image"
                                                            class="form-control form-control-sm form-control-solid"
                                                            placeholder="Enter Image" type="file" />
                                                        <div class="invalid-feedback"> Please Enter Image.</div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-3">
                                                    <div class="fv-row mb-3">
                                                        <label class="form-label">Logo</label>
                                                        <input name="logo"
                                                            class="form-control form-control-sm form-control-solid"
                                                            placeholder="Enter Name" type="file" />
                                                        <div class="invalid-feedback"> Please Enter logo.
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-3">
                                                    <div class="fv-row mb-3">
                                                        <label class="form-label">Banner Image</label>
                                                        <input name="banner_image"
                                                            class="form-control form-control-sm form-control-solid"
                                                            placeholder="Enter Banner Image" type="file" />
                                                        <div class="invalid-feedback"> Please Enter Banner Image.</div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-3">
                                                    <div class="fv-row mb-3">
                                                        <label class="form-label">Header</label>
                                                        <input name="header"
                                                            class="form-control form-control-sm form-control-solid"
                                                            placeholder="Enter Banner Image" type="text" />
                                                        <div class="invalid-feedback"> Please Enter Header.</div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-6">
                                                    <div class="fv-row mb-3">
                                                        <label class="form-label">Description</label>
                                                        <textarea rows="1" name="description"
                                                            class="form-control form-control-sm form-control-solid"
                                                            placeholder="Enter Description"></textarea>
                                                        <div class="invalid-feedback"> Please Enter Description.</div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-6">
                                                    <div class="fv-row mb-3">
                                                        <label class="form-label">Website URL</label>
                                                        <textarea rows="1" name="website_url"
                                                            class="form-control form-control-sm form-control-solid"
                                                            placeholder="Enter Website URL"></textarea>
                                                        <div class="invalid-feedback"> Please Enter Website URL.</div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row mt-2 justify-content-end">
                                                <div class="d-flex align-items-center justify-content-end">
                                                    <a class="btn btn-lg btn-info rounded-0 tab-trigger-next"
                                                        data-bs-toggle="tab" data-bs-target="#job-academic"
                                                        aria-selected="false" role="tab" tabindex="-1">
                                                        Continue
                                                        <span class="svg-icon svg-icon-4 ms-1 me-0">
                                                            <i class="fa-solid fa-arrow-right"></i>
                                                        </span>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="job-academic" role="tabpanel">
                                    <div class="w-100">
                                        <div class="pb-10 pb-lg-10">
                                            <h2
                                                class="fw-bolder d-flex justify-content-center align-items-center text-dark">
                                                Previous Job & Academic Info
                                            </h2>
                                        </div>
                                        <div class="fv-row">
                                            <div class="row border p-4">
                                                <p class="badge badge-info custom-badge"
                                                    style="margin-top: -15px; width: 10%">Job Info One</span>
                                                <div class="col-lg-12">
                                                    <div class="row">
                                                        <div class="col-lg-4 pt-1">
                                                            <div class="mb-1">
                                                                <label class="p-0 text-start text-black">Recent Job Info
                                                                    One
                                                                    Company
                                                                    Name</label>
                                                                <input name="recent_job_info_one_company_name"
                                                                    class="form-control form-control-sm form-control-solid"
                                                                    placeholder="Enter Recent Job Info One Company Name">
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-4 pt-1">
                                                            <div class="mb-1">
                                                                <label class="p-0 text-start text-black">Recent Job Info
                                                                    One
                                                                    Designation</label>
                                                                <input name="recent_job_info_one_designation"
                                                                    class="form-control form-control-sm form-control-solid"
                                                                    placeholder="Enter Recent Job Info One Designation">
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-4 pt-1">
                                                            <div class="mb-1">
                                                                <label class="p-0 text-start text-black">Recent Job Info
                                                                    One
                                                                    Contact
                                                                    Number</label>
                                                                <input name="recent_job_info_one_contact_no"
                                                                    class="form-control form-control-sm form-control-solid"
                                                                    placeholder="Enter Recent Job Info One Contact Number">
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-6 pt-1">
                                                            <div class="mb-1">
                                                                <label class="p-0 text-start text-black">Recent Job Info
                                                                    One
                                                                    Duration</label>
                                                                <input name="recent_job_info_one_duration"
                                                                    class="form-control form-control-sm form-control-solid"
                                                                    placeholder="Enter Recent Job Info Duration">
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-6 pt-1">
                                                            <div class="mb-1">
                                                                <label class="p-0 text-start text-black">Recent Job Info
                                                                    One
                                                                    Address</label>
                                                                <textarea type="text" name="recent_job_info_one_address"
                                                                    class="form-control form-control-sm form-control-solid"
                                                                    placeholder="Enter Recent Job Info One Address"
                                                                    id="" cols="30" rows="1"></textarea>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="row border p-4 mt-5">
                                                <p class="badge badge-info custom-badge"
                                                    style="margin-top: -15px; width: 10%">Job Info Two</span>
                                                <div class="col-lg-12">
                                                    <div class="row">
                                                        <div class="col-lg-4 pt-1">
                                                            <div class="mb-1">
                                                                <label class="p-0 text-start text-black">Recent Job Info
                                                                    Two
                                                                    Company
                                                                    Name</label>
                                                                <input name="recent_job_info_two_company_name"
                                                                    class="form-control form-control-sm form-control-solid"
                                                                    placeholder="Enter Recent Job Info Two Company Name">
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-4 pt-1">
                                                            <div class="mb-1">
                                                                <label class="p-0 text-start text-black">Recent Job Info
                                                                    Two
                                                                    Designation</label>
                                                                <input name="recent_job_info_two_designation"
                                                                    class="form-control form-control-sm form-control-solid"
                                                                    placeholder="Enter Recent Job Info Two Designation">
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-4 pt-1">
                                                            <div class="mb-1">
                                                                <label class="p-0 text-start text-black">Recent Job Info
                                                                    Two
                                                                    Contact
                                                                    Number</label>
                                                                <input name="recent_job_info_two_contact_no"
                                                                    class="form-control form-control-sm form-control-solid"
                                                                    placeholder="Enter Recent Job Info Two Contact Number">
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-6 pt-1">
                                                            <div class="mb-1">
                                                                <label class="p-0 text-start text-black">Recent Job Info
                                                                    Two
                                                                    Duration</label>
                                                                <input name="recent_job_info_two_duration"
                                                                    class="form-control form-control-sm form-control-solid"
                                                                    placeholder="Enter Recent Job Info Duration">
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-6 pt-1">
                                                            <div class="mb-1">
                                                                <label class="p-0 text-start text-black">Recent Job Info
                                                                    Two
                                                                    Address</label>
                                                                <textarea type="text" name="recent_job_info_two_address"
                                                                    class="form-control form-control-sm form-control-solid"
                                                                    placeholder="Enter Recent Job Info Two Address"
                                                                    id="" cols="30" rows="1"></textarea>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row border p-4 mt-5">
                                                <p class="badge badge-info custom-badge"
                                                    style="margin-top: -15px; width: 16%">Previous Job & Academic
                                                    Info</span>
                                                <div class="col-lg-12">
                                                    <div class="row">
                                                        <div class="col-lg-3 pt-1">
                                                            <div class="mb-1">
                                                                <label class="p-0 text-start text-black">Highest Degree
                                                                </label>
                                                                <input type="number"
                                                                    class="form-control form-control-sm form-control-solid"
                                                                    name="highest_degree" id=""
                                                                    placeholder="Enter Highest Degree">
                                                                <div class="invalid-feedback"> Please Enter Name.</div>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-3 pt-1">
                                                            <div class="mb-1">
                                                                <label class="p-0 text-start text-black">Passing Year
                                                                </label>
                                                                <input type="number"
                                                                    class="form-control form-control-sm form-control-solid"
                                                                    name="passing_year" id=""
                                                                    placeholder="Enter Passing Year">
                                                                <div class="invalid-feedback"> Please Enter Name.</div>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-3 pt-1">
                                                            <div class="mb-1">
                                                                <label class="p-0 text-start text-black">University
                                                                </label>
                                                                <input type="text" name="university"
                                                                    class="form-control form-control-sm form-control-solid"
                                                                    placeholder="Enter University ">
                                                                <div class="invalid-feedback"> Please Enter Name.</div>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-3 pt-1">
                                                            <div class="mb-1">
                                                                <label class="p-0 text-start text-black">Major Subjects
                                                                </label>
                                                                <input type="text" name="major_subjects"
                                                                    class="form-control form-control-sm form-control-solid"
                                                                    placeholder="Enter Major Subjects ">
                                                                <div class="invalid-feedback"> Please Enter Name.</div>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-6 pt-1">
                                                            <div class="mb-1">
                                                                <label class="p-0 text-start text-black">Other Training
                                                                    Information
                                                                    Technical</label>
                                                                <textarea type="text"
                                                                    name="other_training_information_technical_training"
                                                                    class="form-control form-control-sm form-control-solid"
                                                                    placeholder="Enter Other Training Information Technical"
                                                                    id="" cols="30" rows="1"></textarea>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-6 pt-1">
                                                            <div class="mb-1">
                                                                <label class="p-0 text-start text-black">Technical
                                                                    Training
                                                                    Duration Date
                                                                </label>
                                                                <input type="text"
                                                                    name="technical_training_duration_date"
                                                                    class="form-control form-control-sm form-control-solid"
                                                                    placeholder="Enter Technical Training Duration Date ">
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-6 pt-1">
                                                            <div class="mb-1">
                                                                <label class="p-0 text-start text-black">Other Training
                                                                    Information
                                                                    Certificate</label>
                                                                <textarea type="text"
                                                                    name="other_training_information_certificate_course"
                                                                    class="form-control form-control-sm form-control-solid"
                                                                    placeholder="Enter Other Training Information Certificate"
                                                                    id="" cols="30" rows="1"></textarea>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-6 pt-1">
                                                            <div class="mb-1">
                                                                <label class="p-0 text-start text-black">Certificate
                                                                    Course
                                                                    Duration Date
                                                                </label>
                                                                <input type="text"
                                                                    name="certificate_course_duration_date"
                                                                    class="form-control form-control-sm form-control-solid"
                                                                    placeholder="Enter Certificate Course Duration Date ">
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-3 pt-1">
                                                            <div class="mb-1">
                                                                <label class="p-0 text-start text-black">Academic
                                                                    Achievements
                                                                </label>
                                                                <textarea type="text" name="academic_achievements"
                                                                    class="form-control form-control-sm form-control-solid"
                                                                    placeholder="Enter Academic Achievements " id=""
                                                                    cols="30" rows="1"></textarea>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-3 pt-1">
                                                            <div class="mb-1">
                                                                <label class="p-0 text-start text-black">Professional
                                                                    Achievements </label>
                                                                <textarea type="text" name="professional_achievements"
                                                                    class="form-control form-control-sm form-control-solid"
                                                                    placeholder="Enter Professional Achievements " id=""
                                                                    cols="30" rows="1"></textarea>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-3 pt-1">
                                                            <div class="mb-1">
                                                                <label class="p-0 text-start text-black">Social
                                                                    Achievements
                                                                </label>
                                                                <textarea type="text" name="social_achievements"
                                                                    class="form-control form-control-sm form-control-solid"
                                                                    placeholder="Enter Social Achievements " id=""
                                                                    cols="30" rows="1"></textarea>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-3 pt-1">
                                                            <div class="mb-1">
                                                                <label class="p-0 text-start text-black">Personal
                                                                    Achievements
                                                                </label>
                                                                <textarea type="text" name="personal_achievements"
                                                                    class="form-control form-control-sm form-control-solid"
                                                                    placeholder="Enter Personal Achievements " id=""
                                                                    cols="30" rows="1"></textarea>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-3 pt-1">
                                                            <div class="mb-1">
                                                                <label class="p-0 text-start text-black">Professional
                                                                    Reference
                                                                    Name</label>
                                                                <input type="text" name="professional_reference_name"
                                                                    class="form-control form-control-sm form-control-solid"
                                                                    placeholder="Enter Professional Reference Name">
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-3 pt-1">
                                                            <div class="mb-1">
                                                                <label class="p-0 text-start text-black">Professional
                                                                    Reference
                                                                    Address</label>
                                                                <textarea type="text"
                                                                    name="professional_reference_address"
                                                                    class="form-control form-control-sm form-control-solid"
                                                                    placeholder="Enter Professional Reference Address"
                                                                    id="" cols="30" rows="1"></textarea>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-3 pt-1">
                                                            <div class="mb-1">
                                                                <label class="p-0 text-start text-black">Professional
                                                                    Reference
                                                                    Contact Number
                                                                    One</label>
                                                                <input type="text"
                                                                    name="professional_reference_contact_no_one"
                                                                    class="form-control form-control-sm form-control-solid"
                                                                    placeholder="Enter Professional Reference Contact Number One">
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-3 pt-1">
                                                            <div class="mb-1">
                                                                <label class="p-0 text-start text-black">Professional
                                                                    Reference
                                                                    Contact Number
                                                                    Two</label>
                                                                <input type="text"
                                                                    name="professional_reference_contact_no_two"
                                                                    class="form-control form-control-sm form-control-solid"
                                                                    placeholder="Enter Professional Reference Contact Number Two">
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-3 pt-1">
                                                            <div class="mb-1">
                                                                <label class="p-0 text-start text-black">Professional
                                                                    Reference
                                                                    Contact
                                                                    Relation</label>
                                                                <input type="text"
                                                                    name="professional_reference_contact_relation"
                                                                    class="form-control form-control-sm form-control-solid"
                                                                    placeholder="Enter Professional Reference Contact Relation">
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-3 pt-1">
                                                            <div class="mb-1">
                                                                <label class="p-0 text-start text-black">Relative
                                                                    Reference
                                                                    Name</label>
                                                                <input type="text" name="relative_reference_name"
                                                                    class="form-control form-control-sm form-control-solid"
                                                                    placeholder="Enter Relative Reference Name">
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-3 pt-1">
                                                            <div class="mb-1">
                                                                <label class="p-0 text-start text-black">Replative
                                                                    Reference
                                                                    Address</label>
                                                                <textarea type="text" name="relative_reference_address"
                                                                    class="form-control form-control-sm form-control-solid"
                                                                    placeholder="Enter Replative Reference Address"
                                                                    id="" cols="30" rows="1"></textarea>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-3 pt-1">
                                                            <div class="mb-1">
                                                                <label class="p-0 text-start text-black">Relative
                                                                    Reference
                                                                    Contact
                                                                    Relation</label>
                                                                <input type="text"
                                                                    name="relative_reference_contact_relation"
                                                                    class="form-control form-control-sm form-control-solid"
                                                                    placeholder="Enter Relative Reference Contact Relation">
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-3 pt-1">
                                                            <div class="mb-1">
                                                                <label class="p-0 text-start text-black">Relative
                                                                    Reference
                                                                    Contact No
                                                                    One</label>
                                                                <input type="text"
                                                                    name="relative_reference_contact_no_one"
                                                                    class="form-control form-control-sm form-control-solid"
                                                                    placeholder="Enter Relative Reference Contact No One">
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-9 pt-1">
                                                            <div class="mb-1">
                                                                <label class="p-0 text-start text-black">Relative
                                                                    Reference
                                                                    Contact No
                                                                    Two</label>
                                                                <input type="text"
                                                                    name="relative_reference_contact_no_two"
                                                                    class="form-control form-control-sm form-control-solid"
                                                                    placeholder="Enter Relative Reference Contact No Two">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row mt-4 justify-content-end">
                                                <div class="d-flex align-items-center justify-content-between p-0">
                                                    <a class="btn btn-lg btn-info rounded-0 tab-trigger-previous"
                                                        data-bs-target="#personal-info" aria-selected="false" role="tab"
                                                        tabindex="-1">
                                                        Previous
                                                        <span class="svg-icon svg-icon-4 ms-1 me-0">
                                                            <i class="fa-solid fa-arrow-right"></i>
                                                        </span>
                                                    </a>
                                                    <a class="btn btn-lg btn-info rounded-0 tab-trigger-next"
                                                        data-bs-toggle="tab" data-bs-target="#family-emergency"
                                                        aria-selected="false" role="tab" tabindex="-1">
                                                        Continue
                                                        <span class="svg-icon svg-icon-4 ms-1 me-0">
                                                            <i class="fa-solid fa-arrow-right"></i>
                                                        </span>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="family-emergency" role="tabpanel">
                                    <div class="w-100">
                                        <div class="pb-10 pb-lg-10">
                                            <h2
                                                class="fw-bolder d-flex justify-content-center align-items-center text-dark">
                                                Family & Emergency Contact Info
                                            </h2>
                                        </div>
                                        <div class="fv-row">
                                            <div class="row">
                                                <div class="col-lg-3 pt-1">
                                                    <div class="mb-1">
                                                        <label class="p-0 text-start text-black">Name
                                                        </label>
                                                        <input type="text" name="emergency_contact_information_name"
                                                            class="form-control form-control-sm form-control-solid"
                                                            placeholder="Enter Emergency Contact Information Name ">
                                                    </div>
                                                </div>
                                                <div class="col-lg-3 pt-1">
                                                    <div class="mb-1">
                                                        <label class="p-0 text-start text-black"> Address
                                                        </label>
                                                        <textarea type="text"
                                                            name="emergency_contact_information_address"
                                                            class="form-control form-control-sm form-control-solid"
                                                            placeholder="Enter Emergency Contact Information Address "
                                                            id="" cols="30" rows="1"></textarea>
                                                    </div>
                                                </div>

                                                <div class="col-lg-3 pt-1">
                                                    <div class="mb-1">
                                                        <label class="p-0 text-start text-black">City
                                                        </label>
                                                        <input type="text" name="emergency_contact_information_city"
                                                            class="form-control form-control-sm form-control-solid"
                                                            placeholder="Enter Emergency Contact Information City ">
                                                    </div>
                                                </div>
                                                <div class="col-lg-3 pt-1">
                                                    <div class="mb-1">
                                                        <label class="p-0 text-start text-black">Zip
                                                            Code </label>
                                                        <input type="text" name="emergency_contact_information_zip_code"
                                                            class="form-control form-control-sm form-control-solid"
                                                            placeholder="Enter Emergency Contact Information Zip Code ">
                                                    </div>
                                                </div>
                                                <div class="col-lg-3 pt-1">
                                                    <div class="mb-1">
                                                        <label class="p-0 text-start text-black">
                                                            Phone </label>
                                                        <input type="text" name="emergency_contact_information_phone"
                                                            class="form-control form-control-sm form-control-solid"
                                                            placeholder="Enter Emergency Contact Information Phone ">
                                                    </div>
                                                </div>

                                                <div class="col-lg-3 pt-1">
                                                    <div class="mb-1">
                                                        <label class="p-0 text-start text-black">
                                                            Relationsip </label>
                                                        <input type="text"
                                                            name="emergency_contact_information_relationsip"
                                                            class="form-control form-control-sm form-control-solid"
                                                            placeholder="Enter Emergency Contact Information Relationsip ">
                                                    </div>
                                                </div>

                                                <div class="col-lg-3 pt-1">
                                                    <div class="mb-1">
                                                        <label class="p-0 text-start text-black">Father Name </label>
                                                        <input type="text" name="father_name"
                                                            class="form-control form-control-sm form-control-solid"
                                                            placeholder="Enter Father Name ">
                                                    </div>
                                                </div>
                                                <div class="col-lg-3 pt-1">
                                                    <div class="mb-1">
                                                        <label class="p-0 text-start text-black">Father's Service
                                                        </label>
                                                        <input type="text" name="father_service"
                                                            class="form-control form-control-sm form-control-solid"
                                                            placeholder="Enter Father Service ">
                                                    </div>
                                                </div>
                                                <div class="col-lg-3 pt-1">
                                                    <div class="mb-1">
                                                        <label class="p-0 text-start text-black">Mother Name </label>
                                                        <input type="text" name="mother_name"
                                                            class="form-control form-control-sm form-control-solid"
                                                            placeholder="Enter Mother Name ">
                                                    </div>
                                                </div>
                                                <div class="col-lg-3 pt-1">
                                                    <div class="mb-1">
                                                        <label class="p-0 text-start text-black">Mother's Service
                                                        </label>
                                                        <input type="text" name="mother_service"
                                                            class="form-control form-control-sm form-control-solid"
                                                            placeholder="Enter Mother Service ">
                                                    </div>
                                                </div>
                                                <div class="col-lg-3 pt-1">
                                                    <div class="mb-1">
                                                        <label class="p-0 text-start text-black">Total Brother's</label>
                                                        <input type="number"
                                                            class="form-control form-control-sm form-control-solid"
                                                            name="brothers_total" id=""
                                                            placeholder="Enter Brothers Total">
                                                    </div>
                                                </div>
                                                <div class="col-lg-3 pt-1">
                                                    <div class="mb-1">
                                                        <label class="p-0 text-start text-black">Total Sister's</label>
                                                        <input type="number"
                                                            class="form-control form-control-sm form-control-solid"
                                                            name="sisters_total" id=""
                                                            placeholder="Enter Total Sister's">
                                                    </div>
                                                </div>
                                                <div class="col-lg-3 pt-1">
                                                    <div class="mb-1">
                                                        <label class="p-0 text-start text-black">Siblings Contact Info
                                                            One </label>
                                                        <textarea type="text" name="siblings_contact_info_one"
                                                            class="form-control form-control-sm form-control-solid"
                                                            placeholder="Enter Siblings Contact Info One " id=""
                                                            cols="30" rows="1"></textarea>
                                                    </div>
                                                </div>
                                                <div class="col-lg-9 pt-1">
                                                    <div class="mb-1">
                                                        <label class="p-0 text-start text-black">Siblings Contact Info
                                                            Two </label>
                                                        <textarea type="text" name="siblings_contact_info_two"
                                                            class="form-control form-control-sm form-control-solid"
                                                            placeholder="Enter Siblings Contact Info Two " id=""
                                                            cols="30" rows="1"></textarea>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row mt-4 justify-content-end">
                                                <div class="d-flex align-items-center justify-content-between">
                                                    <a class="btn btn-lg btn-info rounded-0 tab-trigger-previous"
                                                        data-bs-target="#job-academic" aria-selected="false" role="tab"
                                                        tabindex="-1">
                                                        Previous
                                                        <span class="svg-icon svg-icon-4 ms-1 me-0">
                                                            <i class="fa-solid fa-arrow-right"></i>
                                                        </span>
                                                    </a>
                                                    <a class="btn btn-lg btn-info rounded-0 tab-trigger-next"
                                                        data-bs-toggle="tab" data-bs-target="#acknowledge-sign"
                                                        aria-selected="false" role="tab" tabindex="-1">
                                                        Continue
                                                        <span class="svg-icon svg-icon-4 ms-1 me-0">
                                                            <i class="fa-solid fa-arrow-right"></i>
                                                        </span>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="acknowledge-sign" role="tabpanel">
                                    <div class="w-100">
                                        <div class="pb-10 pb-lg-10">
                                            <h2
                                                class="fw-bolder d-flex justify-content-center align-items-center text-dark">
                                                Acknowledge/Sign
                                            </h2>
                                        </div>
                                        <div class="fv-row">
                                            <div class="row mb-5">
                                                <div class="col-lg-12">
                                                    <p class="pb-5">
                                                        I hereby affirm the accuracy of all the information provided
                                                        above. I am cognizant that any inaccuracies in the details
                                                        shared may lead to appropriate actions by the relevant
                                                        authorities. Additionally, I acknowledge my responsibility to
                                                        promptly disclose any pertinent information required for
                                                        security purposes by the company. This commitment extends to
                                                        being at the disposal of the company for any such disclosures
                                                        deemed necessary.</p>

                                                    <p>Your Sincearly,</p>
                                                </div>
                                            </div>
                                            <div class="row border p-4">
                                                <p class="badge badge-info custom-badge"
                                                    style="margin-top: -15px; width: 8%">Sign</span>
                                                <div class="col-lg-12">
                                                    <div class="row">
                                                        <div class="col-lg-3 pt-1">
                                                            <div class="mb-1">
                                                                <label class="p-0 text-start text-black">Sign </label>
                                                                <input type="file" name="sign"
                                                                    class="form-control form-control-sm form-control-solid"
                                                                    placeholder="Enter Sign ">
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-3 pt-1">
                                                            <div class="mb-1">
                                                                <label class="p-0 text-start text-black">Ceo Sign
                                                                </label>
                                                                <input type="file" name="ceo_sign"
                                                                    class="form-control form-control-sm form-control-solid"
                                                                    placeholder="Enter Ceo Sign ">
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-3 pt-1">
                                                            <div class="mb-1">
                                                                <label class="p-0 text-start text-black">Operation
                                                                    Director Sign
                                                                </label>
                                                                <input type="file" name="operation_director_sign"
                                                                    class="form-control form-control-sm form-control-solid"
                                                                    placeholder="Enter Operation Director Sign ">
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-3 pt-1">
                                                            <div class="mb-1">
                                                                <label class="p-0 text-start text-black">Managing
                                                                    Director Sign
                                                                </label>
                                                                <input type="file" name="managing_director_sign"
                                                                    class="form-control form-control-sm form-control-solid">
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-3 pt-1">
                                                            <div class="mb-1">
                                                                <label class="p-0 text-start text-black">Sign
                                                                    Date</label>
                                                                <input type="date" name="sign_date"
                                                                    class="form-control form-control-sm form-control-solid"
                                                                    placeholder="Enter Sign Date">
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-3 pt-1">
                                                            <div class="mb-1">
                                                                <label class="p-0 text-start text-black">Police
                                                                    Verification</label>
                                                                <select name="police_verification"
                                                                    class="form-select form-select-sm form-select-solid"
                                                                    data-control="select2"
                                                                    data-placeholder="Select an option"
                                                                    data-allow-clear="true">
                                                                    <option></option>
                                                                    <option value="verified">Verified</option>
                                                                    <option value="unverified">Unverified</option>
                                                                </select>
                                                                <div class="invalid-feedback"> Please Enter Name.</div>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-6 pt-1">
                                                            <div class="mb-1">
                                                                <label
                                                                    class="p-0 text-start text-black">Acknowledgement</label>
                                                                <select name="acknowledgement"
                                                                    class="form-select form-select-sm form-select-solid"
                                                                    data-control="select2"
                                                                    data-placeholder="Select an option"
                                                                    data-allow-clear="true">
                                                                    <option></option>
                                                                    <option value="acknowledged">Acknowledged</option>
                                                                    <option value="unacknowledged">Unacknowledged
                                                                    </option>
                                                                </select>
                                                                <div class="invalid-feedback"> Please Enter Name.</div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row mt-4 justify-content-end">
                                                <div class="d-flex align-items-center justify-content-between p-0">
                                                    <a class="btn btn-lg btn-info rounded-0 tab-trigger-previous"
                                                        data-bs-target="#family-emergency" aria-selected="false"
                                                        role="tab" tabindex="-1">
                                                        Previous
                                                        <span class="svg-icon svg-icon-4 ms-1 me-0">
                                                            <i class="fa-solid fa-arrow-right"></i>
                                                        </span>
                                                    </a>
                                                    <button type="submit" class="btn btn-lg btn-info rounded-0">
                                                        Submit
                                                        <span class="svg-icon svg-icon-4 ms-1 me-0">
                                                            <i class="fa-solid fa-arrow-right"></i>
                                                        </span>
                                                    </button>
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
</div>
@endsection
@push('scripts')
<script>
    $(document).ready(function() {
            $('.nav-tabs a').click(function() {
                $(this).tab('show');
            });
        });
</script>
<script>
    // Stepper lement
        var element = document.querySelector("#kt_stepper_example_clickable");


        // Initialize Stepper
        var stepper = new KTStepper(element);


        // Handle navigation click
        stepper.on("kt.stepper.click", function(stepper) {
            stepper.goTo(stepper.getClickedStepIndex()); // go to clicked step
        });


        // Handle next step
        stepper.on("kt.stepper.next", function(stepper) {
            stepper.goNext(); // go next step
        });


        // Handle previous step
        stepper.on("kt.stepper.previous", function(stepper) {
            stepper.goPrevious(); // go previous step
        });
</script>
<script>
    //---------Sidebar list Show Hide----------
        $(document).ready(function() {


            $('#dealId').click(function() {
                $("#dealExpand").toggle(this.checked);
            });


            $('#rfqId').click(function() {


                $("#rfqExpand").toggle('slow');


            });

        });
</script>
<script>
    $('.stock_select').on('change', function() {


            var stock_value = $(this).find(":selected").val();


            if (stock_value == 'available') {
                $(".qty_display").removeClass("d-none");
                $(".qty_required").prop('required', true);
            } else if (stock_value == 'limited') {
                $(".qty_display").removeClass("d-none");
                $(".qty_required").prop('required', true);
            } else {
                $(".qty_display").addClass("d-none");
                $(".qty_required").prop('required', false);
            }


        });


        $('.price_select').on('change', function() {


            var price_value = $(this).find(":selected").val();
            if (price_value == 'rfq') {
                // alert(price_value);
                $(".rfq_price").removeClass("d-none");
                $(".offer_price").addClass("d-none");
                $(".price").addClass("d-none");
            } else if (price_value == 'offer_price') {
                $(".offer_price").removeClass("d-none");
                $(".rfq_price").addClass("d-none");
                $(".price").addClass("d-none");
            } else {
                $(".price").removeClass("d-none");
                $(".offer_price").addClass("d-none");
                $(".rfq_price").addClass("d-none");
            }


        });
</script>
<script>
    var myDropzone = new Dropzone("#kt_dropzonejs_example_1", {
            url: "https://keenthemes.com/scripts/void.php", // Set the url for your upload script location
            paramName: "file", // The name that will be used to transfer the file
            maxFiles: 10,
            maxFilesize: 10, // MB
            addRemoveLinks: true,
            accept: function(file, done) {
                if (file.name == "wow.jpg") {
                    done("Naha, you don't.");
                } else {
                    done();
                }
            }
        });
</script>
<script>
    // The DOM elements you wish to replace with Tagify
        var input1 = document.querySelector("#kt_tagify_1");
        var input2 = document.querySelector("#kt_tagify_2");

        // Initialize Tagify components on the above inputs
        new Tagify(input1);
        new Tagify(input2);
</script>
<script>
    document.addEventListener('DOMContentLoaded', function() {
            // Get the checkbox and colors input container
            var checkbox = document.getElementById('dealCheckbox');
            var dealsInputContainer = document.getElementById('dealsInputContainer');

            // Add change event listener to the checkbox
            checkbox.addEventListener('change', function() {
                // Toggle the visibility of the colors input field based on checkbox state
                dealsInputContainer.style.display = checkbox.checked ? 'block' : 'none';
            });
        });
</script>
<script>
    $(document).ready(function() {
            // Function to validate and switch tabs
            function validateAndSwitchTab(targetTabId) {
                let isValid = true;


                // Get the index of the tab to be shown
                const activeTabHref = $('.tab-trigger.active').attr('href');
                $(activeTabHref).find('input, textarea, select').each(function() {
                    var $field = $(this);


                    // Check if it's a Select2 element
                    var isSelect2 = $field.hasClass('select2-hidden-accessible');


                    if ($field.prop('required') && $field.val() === '') {
                        isValid = false;


                        if (isSelect2) {
                            // Apply CSS based on the element type
                            $field.next('.select2-container').addClass('is-invalid');
                        } else {
                            $field.addClass('is-invalid');
                        }
                    }
                });


                if (!isValid) {
                    // Fields are not valid, prevent the tab switch
                    return false;
                } else {
                    // Fields are valid, switch to the next tab
                    switchTab(targetTabId);
                    return true;
                }
            }


            // Function to switch tabs
            function switchTab(targetTabId) {
                $('.nav-link[href="' + targetTabId + '"]').tab('show');
            }


            // Event handler for tab switch
            $('.tab-trigger').on('show.bs.tab', function(event) {
                return validateAndSwitchTab($(this).data('bs-target'));
            });


            // Event handler for input change
            $('.tab-content').on('input change', 'input, textarea, select', function() {
                var $field = $(this);
                var isSelect2 = $field.hasClass('select2-hidden-accessible');


                // Remove red border when user interacts with the field
                if (isSelect2) {
                    $field.next('.select2-container').removeClass('is-invalid');
                } else {
                    $field.removeClass('is-invalid');
                }
            });


            // Event handler for multi-select change
            $('.multiple-select').on('change', function() {
                // Remove validation error only from the changed multi-select field
                var $multiSelect = $(this);
                $multiSelect.removeClass('is-invalid');
            });


            // Event handler for the "Continue" button
            $('.tab-trigger-next').on('click', function(event) {
                // Assuming the data-bs-target attribute contains the tab ID to switch to
                const targetTabId = $(this).data('bs-target');


                // Validate and switch to the next tab
                validateAndSwitchTab(targetTabId);
            });


            // Event handler for the "Previous" button
            $('.tab-trigger-previous').on('click', function(event) {
                // Assuming the data-bs-target attribute contains the tab ID to switch to
                const targetTabId = $(this).data('bs-target');


                // Validate and switch to the previous tab
                validateAndSwitchTab(targetTabId);
            });
        });
</script>
@endpush