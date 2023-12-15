@extends('admin.master')

@section('content')
    <div class="container mt-5">
        <form action="#" method="POST" enctype="multipart/form-data">
            @csrf

            <!-- Column 1 -->
            <div class="fv-row mb-3">
                <label class="form-label required">Select Country</label>
                <select class="form-select form-select-solid" name="country_id" id="field2" multiple
                    multiselect-search="true" multiselect-select-all="true" multiselect-max-items="3"
                    onchange="console.log(this.selectedOptions)">
                    @foreach (getAllCountry() as $country)
                        <option value="{{ $country->id }}">{{ $country->name }}</option>
                    @endforeach
                </select>
            </div>

            <!-- Column 2 -->
            <div class="fv-row mb-3">
                <label class="form-label required">Select Employee Department Name</label>
                <select class="form-select form-select-solid" name="employee_department_id" id="field2" multiple
                    multiselect-search="true" multiselect-select-all="true" multiselect-max-items="3"
                    onchange="console.log(this.selectedOptions)">
                    @foreach ($employeeDepartments as $employeeDepartment)
                        <option value="{{ $employeeDepartment->id }}">{{ $employeeDepartment->name }}</option>
                    @endforeach
                </select>
            </div>

            <!-- Column 3 -->
            <label for="name">Name:</label>
            <input type="text" id="name" name="name" required>

            <!-- Column 4 -->
            <label for="username">Username:</label>
            <input type="text" id="username" name="username">

            <!-- Column 5 -->
            <label for="email">Email:</label>
            <input type="email" id="email" name="email" required>

            <!-- Column 6 -->
            <label for="photo">Photo:</label>
            <input type="file" id="photo" name="photo">

            <!-- Column 7 -->
            <label for="phone">Phone:</label>
            <input type="number" id="phone" name="phone">

            <!-- Column 8 -->
            <label for="designation">Designation:</label>
            <input type="text" id="designation" name="designation">

            <!-- Column 9 -->
            <label for="address">Address:</label>
            <textarea id="address" name="address"></textarea>

            <!-- Column 10 -->
            <label for="city">City:</label>
            <input type="text" id="city" name="city">

            <!-- Column 11 -->
            <label for="postal">Postal Code:</label>
            <input type="text" id="postal" name="postal">

            <!-- Column 12 -->
            <label for="last_seen">Last Seen:</label>
            <input type="datetime-local" id="last_seen" name="last_seen">

            <!-- Column 13 -->
            <label for="role">Role:</label>
            <input type="text" id="role" name="role">

            <!-- Column 14 -->
            <label for="department">Department:</label>
            <input type="text" id="department" name="department">

            <!-- Column 15 -->
            <label for="status">Status:</label>
            <select id="status" name="status">
                <option value="active">Active</option>
                <option value="inactive">Inactive</option>
            </select>

            <!-- Column 16 -->
            <label for="email_verified_at">Email Verified At:</label>
            <input type="datetime-local" id="email_verified_at" name="email_verified_at">

            <!-- Column 17 -->
            <label for="password">Password:</label>
            <input type="password" id="password" name="password" required>

            <!-- Column 18 -->

            <div class="fv-row mb-3">
                <label class="form-label required">Select Employee Category Name</label>
                <select class="form-select form-select-solid" name="employee_category_id" id="field2" multiple
                    multiselect-search="true" multiselect-select-all="true" multiselect-max-items="3"
                    onchange="console.log(this.selectedOptions)">
                    @foreach ($employeeCategories as $employeeCategory)
                        <option value="{{ $employeeCategory->id }}">{{ $employeeCategory->name }}</option>
                    @endforeach
                </select>
            </div>

            <!-- Column 19 -->
            <label for="employee_id">Employee ID:</label>
            <input type="text" id="employee_id" name="employee_id">

            <!-- Column 20 -->
            <label for="mobile">Mobile:</label>
            <input type="number" id="mobile" name="mobile">

            <!-- Column 21 -->
            <label for="total_years_of_job_experience">Total Years of Job Experience:</label>
            <input type="text" id="total_years_of_job_experience" name="total_years_of_job_experience">

            <!-- Column 22 -->
            <label for="total_years_of_related_experience">Total Years of Related Experience:</label>
            <input type="text" id="total_years_of_related_experience" name="total_years_of_related_experience">

            <!-- Column 23 -->
            <label for="total_years_of_related_education">Total Years of Related Education:</label>
            <input type="text" id="total_years_of_related_education" name="total_years_of_related_education">

            <!-- Column 24 -->
            <label for="lowest_job_duration_in_past">Lowest Job Duration in Past:</label>
            <input type="text" id="lowest_job_duration_in_past" name="lowest_job_duration_in_past">

            <!-- Column 25 -->
            <label for="highest_job_duration_in_past">Highest Job Duration in Past:</label>
            <input type="text" id="highest_job_duration_in_past" name="highest_job_duration_in_past">

            <!-- Column 26 -->
            <label for="concern_with_social_work">Concern with Social Work:</label>
            <input type="text" id="concern_with_social_work" name="concern_with_social_work">

            <!-- Column 27 -->
            <label for="what_turns_you_on_off">What Turns You On/Off:</label>
            <textarea id="what_turns_you_on_off" name="what_turns_you_on_off"></textarea>

            <!-- Column 28 -->
            <label for="preference_in_professional_life">Preference in Professional Life:</label>
            <textarea id="preference_in_professional_life" name="preference_in_professional_life"></textarea>

            <!-- Column 29 -->
            <label for="action_in_negative_situation">Action in Negative Situation:</label>
            <textarea id="action_in_negative_situation" name="action_in_negative_situation"></textarea>

            <!-- Column 30 -->
            <label for="recent_job_info_one_company_name">Recent Job Info One - Company Name:</label>
            <input type="text" id="recent_job_info_one_company_name" name="recent_job_info_one_company_name">

            <!-- Column 31 -->
            <label for="recent_job_info_one_address">Recent Job Info One - Address:</label>
            <textarea id="recent_job_info_one_address" name="recent_job_info_one_address"></textarea>

            <!-- Column 32 -->
            <label for="recent_job_info_one_designation">Recent Job Info One - Designation:</label>
            <input type="text" id="recent_job_info_one_designation" name="recent_job_info_one_designation">

            <!-- Column 33 -->
            <label for="recent_job_info_one_contact_no">Recent Job Info One - Contact Number:</label>
            <input type="text" id="recent_job_info_one_contact_no" name="recent_job_info_one_contact_no">

            <!-- Column 34 -->
            <label for="recent_job_info_one_duration">Recent Job Info One - Duration:</label>
            <input type="text" id="recent_job_info_one_duration" name="recent_job_info_one_duration">

            <!-- Column 35 -->
            <label for="recent_job_info_two_company_name">Recent Job Info Two - Company Name:</label>
            <input type="text" id="recent_job_info_two_company_name" name="recent_job_info_two_company_name">

            <!-- Column 36 -->
            <label for="recent_job_info_two_address">Recent Job Info Two - Address:</label>
            <textarea id="recent_job_info_two_address" name="recent_job_info_two_address"></textarea>

            <!-- Column 37 -->
            <label for="recent_job_info_two_designation">Recent Job Info Two - Designation:</label>
            <input type="text" id="recent_job_info_two_designation" name="recent_job_info_two_designation">

            <!-- Column 38 -->
            <label for="recent_job_info_two_contact_no">Recent Job Info Two - Contact Number:</label>
            <input type="text" id="recent_job_info_two_contact_no" name="recent_job_info_two_contact_no">

            <!-- Column 39 -->
            <label for="recent_job_info_two_duration">Recent Job Info Two - Duration:</label>
            <input type="text" id="recent_job_info_two_duration" name="recent_job_info_two_duration">

            <!-- Column 40 -->
            <label for="professional_reference_name">Professional Reference - Name:</label>
            <input type="text" id="professional_reference_name" name="professional_reference_name">

            <!-- Column 41 -->
            <label for="professional_reference_address">Professional Reference - Address:</label>
            <textarea id="professional_reference_address" name="professional_reference_address"></textarea>

            <!-- Column 42 -->
            <label for="professional_reference_contact_no_one">Professional Reference - Contact Number One:</label>
            <input type="text" id="professional_reference_contact_no_one"
                name="professional_reference_contact_no_one">

            <!-- Column 43 -->
            <label for="professional_reference_contact_no_two">Professional Reference - Contact Number Two:</label>
            <input type="text" id="professional_reference_contact_no_two"
                name="professional_reference_contact_no_two">

            <!-- Column 44 -->
            <label for="professional_reference_contact_relation">Professional Reference - Contact Relation:</label>
            <input type="text" id="professional_reference_contact_relation"
                name="professional_reference_contact_relation">

            <!-- Column 45 -->
            <label for="relative_reference_name">Relative Reference - Name:</label>
            <input type="text" id="relative_reference_name" name="relative_reference_name">

            <!-- Column 46 -->
            <label for="relative_reference_address">Relative Reference - Address:</label>
            <textarea id="relative_reference_address" name="relative_reference_address"></textarea>

            <!-- Column 47 -->
            <label for="relative_reference_contact_no_one">Relative Reference - Contact Number One:</label>
            <input type="text" id="relative_reference_contact_no_one" name="relative_reference_contact_no_one">

            <!-- Column 48 -->
            <label for="relative_reference_contact_no_two">Relative Reference - Contact Number Two:</label>
            <input type="text" id="relative_reference_contact_no_two" name="relative_reference_contact_no_two">

            <!-- Column 49 -->
            <label for="relative_reference_contact_relation">Relative Reference - Contact Relation:</label>
            <input type="text" id="relative_reference_contact_relation" name="relative_reference_contact_relation">

            <!-- Column 50 -->
            <label for="highest_degree">Highest Degree:</label>
            <input type="text" id="highest_degree" name="highest_degree">

            <!-- Column 51 -->
            <label for="passing_year">Passing Year:</label>
            <input type="number" id="passing_year" name="passing_year">

            <!-- Column 52 -->
            <label for="university">University:</label>
            <input type="text" id="university" name="university">

            <!-- Column 53 -->
            <label for="major_subjects">Major Subjects:</label>
            <input type="text" id="major_subjects" name="major_subjects">

            <!-- Column 54 -->
            <label for="other_training_information_technical_training">Technical Training - Other Information:</label>
            <textarea id="other_training_information_technical_training" name="other_training_information_technical_training"></textarea>

            <!-- Column 55 -->
            <label for="technical_training_duration_date">Technical Training - Duration/Date:</label>
            <input type="text" id="technical_training_duration_date" name="technical_training_duration_date">

            <!-- Column 56 -->
            <label for="other_training_information_certificate_course">Certificate Course - Other Information:</label>
            <textarea id="other_training_information_certificate_course" name="other_training_information_certificate_course"></textarea>

            <!-- Column 57 -->
            <label for="certificate_course_duration_date">Certificate Course - Duration/Date:</label>
            <input type="text" id="certificate_course_duration_date" name="certificate_course_duration_date">

            <!-- Column 58 -->
            <label for="academic_achievements">Academic Achievements:</label>
            <textarea id="academic_achievements" name="academic_achievements"></textarea>

            <!-- Column 59 -->
            <label for="professional_achievements">Professional Achievements:</label>
            <textarea id="professional_achievements" name="professional_achievements"></textarea>

            <!-- Column 60 -->
            <label for="social_achievements">Social Achievements:</label>
            <textarea id="social_achievements" name="social_achievements"></textarea>

            <!-- Column 61 -->
            <label for="personal_achievements">Personal Achievements:</label>
            <textarea id="personal_achievements" name="personal_achievements"></textarea>

            <!-- Column 62 -->
            <label for="permanent_address">Permanent Address:</label>
            <textarea id="permanent_address" name="permanent_address"></textarea>

            <!-- Column 63 -->
            <label for="permanent_address_city">Permanent Address City:</label>
            <input type="text" id="permanent_address_city" name="permanent_address_city">

            <!-- Column 64 -->
            <label for="permanent_address_state">Permanent Address State:</label>
            <input type="text" id="permanent_address_state" name="permanent_address_state">

            <!-- Column 65 -->
            <label for="permanent_address_zip_code">Permanent Address Zip Code:</label>
            <input type="text" id="permanent_address_zip_code" name="permanent_address_zip_code">

            <!-- Column 66 -->
            <label for="current_address">Current Address:</label>
            <textarea id="current_address" name="current_address"></textarea>

            <!-- Column 67 -->
            <label for="current_address_city">Current Address City:</label>
            <input type="text" id="current_address_city" name="current_address_city">

            <!-- Column 68 -->
            <label for="current_address_state">Current Address State:</label>
            <input type="text" id="current_address_state" name="current_address_state">

            <!-- Column 69 -->
            <label for="current_address_zip_code">Current Address Zip Code:</label>
            <input type="text" id="current_address_zip_code" name="current_address_zip_code">

            <!-- Column 70 -->
            <label for="alternate_email">Alternate Email:</label>
            <input type="email" id="alternate_email" name="alternate_email">

            <!-- Column 71 -->
            <label for="home_phone">Home Phone:</label>
            <input type="number" id="home_phone" name="home_phone">

            <!-- Column 72 -->
            <label for="emergency_number">Emergency Number:</label>
            <input type="number" id="emergency_number" name="emergency_number">

            <!-- Column 73 -->
            <label for="nid_bri_ppn">NID/BRI/PPN:</label>
            <input type="text" id="nid_bri_ppn" name="nid_bri_ppn">

            <!-- Column 74 -->
            <label for="birth_date">Birth Date:</label>
            <input type="date" id="birth_date" name="birth_date">

            <!-- Column 75 -->
            <label for="marital_status">Marital Status:</label>
            <select id="marital_status" name="marital_status">
                <option value="single">Single</option>
                <option value="married">Married</option>
                <option value="divorced">Divorced</option>
                <option value="widowed">Widowed</option>
            </select>

            <!-- Column 76 -->
            <label for="spouse_name">Spouse Name:</label>
            <input type="text" id="spouse_name" name="spouse_name">

            <!-- Column 77 -->
            <label for="spouse_employer">Spouse Employer:</label>
            <input type="text" id="spouse_employer" name="spouse_employer">

            <!-- Column 78 -->
            <label for="spouse_work_phone">Spouse Work Phone:</label>
            <input type="number" id="spouse_work_phone" name="spouse_work_phone">

            <!-- Column 79 -->
            <label for="emergency_contact_information_name">Emergency Contact Information - Name:</label>
            <input type="text" id="emergency_contact_information_name" name="emergency_contact_information_name">

            <!-- Column 80 -->
            <label for="emergency_contact_information_address">Emergency Contact Information - Address:</label>
            <textarea id="emergency_contact_information_address" name="emergency_contact_information_address"></textarea>

            <!-- Column 81 -->
            <label for="emergency_contact_information_city">Emergency Contact Information - City:</label>
            <input type="text" id="emergency_contact_information_city" name="emergency_contact_information_city">

            <!-- Column 82 -->
            <label for="emergency_contact_information_zip_code">Emergency Contact Information - Zip Code:</label>
            <input type="text" id="emergency_contact_information_zip_code"
                name="emergency_contact_information_zip_code">

            <!-- Column 83 -->
            <label for="emergency_contact_information_phone">Emergency Contact Information - Phone:</label>
            <input type="number" id="emergency_contact_information_phone" name="emergency_contact_information_phone">

            <!-- Column 84 -->
            <label for="emergency_contact_information_relationsip">Emergency Contact Information - Relationship:</label>
            <input type="text" id="emergency_contact_information_relationsip"
                name="emergency_contact_information_relationsip">

            <!-- Column 85 -->
            <label for="father_name">Father's Name:</label>
            <input type="text" id="father_name" name="father_name">

            <!-- Column 86 -->
            <label for="mother_name">Mother's Name:</label>
            <input type="text" id="mother_name" name="mother_name">

            <!-- Column 87 -->
            <label for="father_service">Father's Service:</label>
            <input type="text" id="father_service" name="father_service">

            <!-- Column 88 -->
            <label for="mother_service">Mother's Service:</label>
            <input type="text" id="mother_service" name="mother_service">

            <!-- Column 89 -->
            <label for="brothers_total">Total Brothers:</label>
            <input type="text" id="brothers_total" name="brothers_total">

            <!-- Column 90 -->
            <label for="sisters_total">Total Sisters:</label>
            <input type="text" id="sisters_total" name="sisters_total">

            <!-- Column 91 -->
            <label for="siblings_contact_info_one">Siblings Contact Information One:</label>
            <textarea id="siblings_contact_info_one" name="siblings_contact_info_one"></textarea>

            <!-- Column 92 -->
            <label for="siblings_contact_info_two">Siblings Contact Information Two:</label>
            <textarea id="siblings_contact_info_two" name="siblings_contact_info_two"></textarea>

            <!-- Column 93 -->
            <label for="sign">Sign (File):</label>
            <input type="file" id="sign" name="sign">

            <!-- Column 94 -->
            <label for="ceo_sign">CEO Sign (File):</label>
            <input type="file" id="ceo_sign" name="ceo_sign">

            <!-- Column 95 -->
            <label for="operation_director_sign">Operation Director Sign (File):</label>
            <input type="file" id="operation_director_sign" name="operation_director_sign">

            <!-- Column 96 -->
            <label for="managing_director_sign">Managing Director Sign (File):</label>
            <input type="file" id="managing_director_sign" name="managing_director_sign">

            <!-- Column 97 -->
            <label for="sign_date">Sign Date:</label>
            <input type="date" id="sign_date" name="sign_date">

            <!-- Column 98 -->
            <label for="evaluation_date">Evaluation Date:</label>
            <input type="date" id="evaluation_date" name="evaluation_date">

            <!-- Column 99 -->
            <label for="casual_leave_due_as_on">Casual Leave Due As On:</label>
            <input type="number" id="casual_leave_due_as_on" name="casual_leave_due_as_on">

            <!-- Column 100 -->
            <label for="casual_leave_availed">Casual Leave Availed:</label>
            <input type="number" id="casual_leave_availed" name="casual_leave_availed">

            <!-- Column 101 -->
            <label for="casual_balance_due">Casual Balance Due:</label>
            <input type="number" id="casual_balance_due" name="casual_balance_due">

            <!-- Column 102 -->
            <label for="earned_leave_due_as_on">Earned Leave Due As On:</label>
            <input type="number" id="earned_leave_due_as_on" name="earned_leave_due_as_on">

            <!-- Column 103 -->
            <label for="earned_leave_availed">Earned Leave Availed:</label>
            <input type="number" id="earned_leave_availed" name="earned_leave_availed">

            <!-- Column 104 -->
            <label for="earned_balance_due">Earned Balance Due:</label>
            <input type="number" id="earned_balance_due" name="earned_balance_due">

            <!-- Column 105 -->
            <label for="medical_leave_due_as_on">Medical Leave Due As On:</label>
            <input type="number" id="medical_leave_due_as_on" name="medical_leave_due_as_on">

            <!-- Column 106 -->
            <label for="medical_leave_availed">Medical Leave Availed:</label>
            <input type="number" id="medical_leave_availed" name="medical_leave_availed">

            <!-- Column 107 -->
            <label for="medical_balance_due">Medical Balance Due:</label>
            <input type="number" id="medical_balance_due" name="medical_balance_due">

            <!-- Column 108 -->
            <label for="police_verification">Police Verification:</label>
            <select id="police_verification" name="police_verification">
                <option value="verified">Verified</option>
                <option value="unverified">Unverified</option>
            </select>

            <!-- Column 109 -->
            <label for="acknowledgement">Acknowledgement:</label>
            <select id="acknowledgement" name="acknowledgement">
                <option value="acknowledged">Acknowledged</option>
                <option value="unacknowledged">Unacknowledged</option>
            </select>

            <!-- Column 110 -->
            {{-- <label for="remember_token">Remember Token:</label>
            <input type="text" id="remember_token" name="remember_token" disabled> --}}

            <button type="submit" id="common_submit" class="btn btn-lg common-btn-3 fw-bolder me-4 w-175px mb-5">
                <span class="indicator-label">Submit</span>
                <span class="indicator-progress">Please wait...
                    <span class="spinner-border spinner-border-sm align-middle ms-2"></span>
                </span>
            </button>
        </form>

    </div>
@endsection
