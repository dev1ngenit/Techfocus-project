<?php

namespace App\Http\Requests;

use Illuminate\Support\Facades\Session;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Contracts\Validation\Validator;

class EmployeeRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {
        $employee = $this->route('employee');
        return [
            'country_id' => 'nullable|exists:countries,id',
            'employee_department_id' => 'nullable|exists:employee_departments,id',
            'name' => 'required|string|max:255',
            'username' => 'nullable|string|max:30|unique:admins,username,'. $employee,
            'email' => 'required|string|email|max:255|unique:admins,email,'. $employee,
            'photo' => 'sometimes|image|mimes:jpeg,png,jpg|max:2048',
            'phone' => 'nullable|string|max:20',
            'designation' => 'nullable|string|max:30',
            'address' => 'nullable|string',
            'city' => 'nullable|string|max:100',
            'postal' => 'nullable|string|max:20',
            'last_seen' => 'nullable|date',
            'department' => 'nullable|array',
            'status' => 'nullable|in:active,inactive',
            'email_verified_at' => 'nullable|date',
            'password' => 'required|string|max:255',
            'employee_category_id' => 'nullable|exists:employee_categories,id',
            'employee_id' => 'nullable|string|unique:admins,employee_id,'. $employee,
            'mobile' => 'nullable|string|max:20',
            'total_years_of_job_experience' => 'nullable|string',
            'total_years_of_related_experience' => 'nullable|string',
            'total_years_of_related_education' => 'nullable|string',
            'lowest_job_duration_in_past' => 'nullable|string|max:50',
            'highest_job_duration_in_past' => 'nullable|string|max:50',
            'concern_with_social_work' => 'nullable|string|max:50',
            'what_turns_you_on_off' => 'nullable|string',
            'preference_in_professional_life' => 'nullable|string',
            'action_in_negative_situation' => 'nullable|string',
            'recent_job_info_one_company_name' => 'nullable|string',
            'recent_job_info_one_address' => 'nullable|string',
            'recent_job_info_one_designation' => 'nullable|string|max:30',
            'recent_job_info_one_contact_no' => 'nullable|string|max:20',
            'recent_job_info_one_duration' => 'nullable|string|max:50',
            'recent_job_info_two_company_name' => 'nullable|string',
            'recent_job_info_two_address' => 'nullable|string',
            'recent_job_info_two_designation' => 'nullable|string|max:30',
            'recent_job_info_two_contact_no' => 'nullable|string|max:20',
            'recent_job_info_two_duration' => 'nullable|string|max:50',
            'professional_reference_name' => 'nullable|string',
            'professional_reference_address' => 'nullable|string',
            'professional_reference_contact_no_one' => 'nullable|string|max:20',
            'professional_reference_contact_no_two' => 'nullable|string|max:20',
            'professional_reference_contact_relation' => 'nullable|string',
            'relative_reference_name' => 'nullable|string',
            'relative_reference_address' => 'nullable|string',
            'relative_reference_contact_no_one' => 'nullable|string|max:20',
            'relative_reference_contact_no_two' => 'nullable|string|max:20',
            'relative_reference_contact_relation' => 'nullable|string',
            'highest_degree' => 'nullable|string|max:50',
            'passing_year' => 'nullable|integer',
            'university' => 'nullable|string|max:100',
            'major_subjects' => 'nullable|string|max:100',
            'technical_training_duration_date' => 'nullable|string',
            'other_training_information_certificate_course' => 'nullable|string',
            'certificate_course_duration_date' => 'nullable|string',
            'academic_achievements' => 'nullable|string',
            'professional_achievements' => 'nullable|string',
            'social_achievements' => 'nullable|string',
            'personal_achievements' => 'nullable|string',
            'permanent_address' => 'nullable|string',
            'permanent_address_city' => 'nullable|string',
            'permanent_address_state' => 'nullable|string',
            'permanent_address_zip_code' => 'nullable|string',
            'current_address' => 'nullable|string',
            'current_address_city' => 'nullable|string',
            'current_address_state' => 'nullable|string',
            'current_address_zip_code' => 'nullable|string',
            'alternate_email' => 'nullable|email|unique:admins,alternate_email,'. $employee,
            'home_phone' => 'nullable|string|max:20',
            'emergency_number' => 'nullable|string|max:20',
            'nid_bri_ppn' => 'nullable|string|max:50|unique:admins,nid_bri_ppn,'. $employee,
            'birth_date' => 'nullable|date',
            'marital_status' => 'nullable|in:single,married,divorced,widowed',
            'spouse_name' => 'nullable|string|max:100',
            'spouse_employer' => 'nullable|string|max:100',
            'spouse_work_phone' => 'nullable|string|max:20',
            'emergency_contact_information_name' => 'nullable|string',
            'emergency_contact_information_address' => 'nullable|string',
            'emergency_contact_information_city' => 'nullable|string',
            'emergency_contact_information_zip_code' => 'nullable|string',
            'emergency_contact_information_phone' => 'nullable|string|max:20',
            'emergency_contact_information_relationsip' => 'nullable|string',
            'father_name' => 'nullable|string|max:100',
            'mother_name' => 'nullable|string|max:100',
            'father_service' => 'nullable|string|max:100',
            'mother_service' => 'nullable|string|max:100',
            'brothers_total' => 'nullable|string',
            'sisters_total' => 'nullable|string',
            'siblings_contact_info_one' => 'nullable|string',
            'siblings_contact_info_two' => 'nullable|string',
            'sign' => 'sometimes|image|mimes:jpeg,png,jpg|max:2048',
            'ceo_sign' => 'sometimes|image|mimes:jpeg,png,jpg|max:2048',
            'operation_director_sign' => 'sometimes|image|mimes:jpeg,png,jpg|max:2048',
            'managing_director_sign' => 'sometimes|image|mimes:jpeg,png,jpg|max:2048',
            'sign_date' => 'nullable|date',
            'evaluation_date' => 'nullable|date',
            'casual_leave_due_as_on' => 'nullable|integer',
            'casual_leave_availed' => 'nullable|integer',
            'casual_balance_due' => 'nullable|integer',
            'earned_leave_due_as_on' => 'nullable|integer',
            'earned_leave_availed' => 'nullable|integer',
            'earned_balance_due' => 'nullable|integer',
            'medical_leave_due_as_on' => 'nullable|integer',
            'medical_leave_availed' => 'nullable|integer',
            'medical_balance_due' => 'nullable|integer',
            'police_verification' => 'nullable|in:verified,unverified',
            'acknowledgement' => 'nullable|in:acknowledged,unacknowledged',
        ];
    }

    /**
     * Get custom messages for validator errors.
     *
     * @return array
     */
    public function messages()
    {
        return [
            //
        ];
    }

    /**
     * Get custom attributes for validator errors.
     *
     * @return array
     */
    public function attributes()
    {
        return [
            //
        ];
    }

    protected function recordErrorMessages(Validator $validator)
    {
        $errorMessages = $validator->errors()->all();

        foreach ($errorMessages as $errorMessage) {
            Session::flash('error', $errorMessage);
            // toastr()->error($errorMessage);
        }
    }
}
