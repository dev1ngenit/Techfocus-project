<?php

namespace App\Http\Requests;

use Illuminate\Contracts\Validation\Validator;
use Illuminate\Foundation\Http\FormRequest;

class LeaveApplicationRequest extends FormRequest
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
        return [
            'country_id' => 'nullable|exists:countries,id',
            'employee_id' => 'nullable|exists:admins,id',
            'company_id' => 'nullable|exists:companies,id',
            'name' => 'nullable|string',
            'type_of_leave' => 'nullable|string',
            'designation' => 'nullable|string',
            'company' => 'nullable|string',
            'leave_start_date' => 'nullable|date',
            'leave_end_date' => 'nullable|date|after_or_equal:leave_start_date',
            'total_days' => 'nullable|integer|min:0',
            'job_status' => 'nullable|string',
            'reporting_on' => 'nullable|date',
            'leave_explanation' => 'nullable|string',
            'substitute_during_leave' => 'nullable|string',
            'leave_address' => 'nullable|string',
            'is_between_holidays' => 'nullable|string',
            'leave_contact_no' => 'nullable|string',
            'included_open_saturday' => 'nullable|string',
            'substitute_signature' => 'nullable|image|mimes:jpeg,png,jpg|max:2048',
            'applicant_signature' => 'nullable|image|mimes:jpeg,png,jpg|max:2048',
            'leave_position' => 'nullable|string',
            'casual_leave_due_as_on' => 'nullable|integer|min:0',
            'casual_leave_availed' => 'nullable|integer|min:0',
            'casual_balance_due' => 'nullable|integer|min:0',
            'earned_leave_due_as_on' => 'nullable|integer|min:0',
            'earned_leave_availed' => 'nullable|integer|min:0',
            'earned_balance_due' => 'nullable|integer|min:0',
            'medical_leave_due_as_on' => 'nullable|integer|min:0',
            'medical_leave_availed' => 'nullable|integer|min:0',
            'medical_balance_due' => 'nullable|integer|min:0',
            'checked_by' => 'nullable|image|mimes:jpeg,png,jpg|max:2048',
            'recommended_by' => 'nullable|image|mimes:jpeg,png,jpg|max:2048',
            'reviewed_by' => 'nullable|image|mimes:jpeg,png,jpg|max:2048',
            'approved_by' => 'nullable|image|mimes:jpeg,png,jpg|max:2048',
            'application_status' => 'nullable|in:approved,rejected,pending',
            'note' => 'nullable|string',
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
            'country_id.exists' => 'The selected country is invalid.',
            'employee_id.exists' => 'The selected employee is invalid.',
            'company_id.exists' => 'The selected company is invalid.',
            'name.string' => 'The name must be a string.',
            'type_of_leave.string' => 'The type of leave must be a string.',
            'designation.string' => 'The designation must be a string.',
            'company.string' => 'The company name must be a string.',
            'leave_start_date.date' => 'The leave start date must be a valid date.',
            'leave_end_date.date' => 'The leave end date must be a valid date.',
            'leave_end_date.after_or_equal' => 'The leave end date must be a date after or equal to the leave start date.',
            'total_days.integer' => 'The total days must be an integer.',
            'total_days.min' => 'The total days must be at least 0.',
            'job_status.string' => 'The job status must be a string.',
            'reporting_on.date' => 'The reporting on date must be a valid date.',
            'leave_explanation.string' => 'The leave explanation must be a string.',
            'substitute_during_leave.string' => 'The substitute during leave must be a string.',
            'leave_address.string' => 'The leave address must be a string.',
            'is_between_holidays.string' => 'The is between holidays field must be a string.',
            'leave_contact_no.string' => 'The leave contact number must be a string.',
            'included_open_saturday.string' => 'The included open Saturday field must be a string.',
            'substitute_signature.image' => 'The substitute signature must be an image.',
            'substitute_signature.mimes' => 'The substitute signature must be a file of type: jpeg, png, jpg.',
            'substitute_signature.max' => 'The substitute signature may not be greater than 2048 kilobytes.',
            'applicant_signature.image' => 'The applicant signature must be an image.',
            'applicant_signature.mimes' => 'The applicant signature must be a file of type: jpeg, png, jpg.',
            'applicant_signature.max' => 'The applicant signature may not be greater than 2048 kilobytes.',
            'leave_position.string' => 'The leave position must be a string.',
            'casual_leave_due_as_on.integer' => 'The casual leave due as on must be an integer.',
            'casual_leave_due_as_on.min' => 'The casual leave due as on must be at least 0.',
            'casual_leave_availed.integer' => 'The casual leave availed must be an integer.',
            'casual_leave_availed.min' => 'The casual leave availed must be at least 0.',
            'casual_balance_due.integer' => 'The casual balance due must be an integer.',
            'casual_balance_due.min' => 'The casual balance due must be at least 0.',
            'earned_leave_due_as_on.integer' => 'The earned leave due as on must be an integer.',
            'earned_leave_due_as_on.min' => 'The earned leave due as on must be at least 0.',
            'earned_leave_availed.integer' => 'The earned leave availed must be an integer.',
            'earned_leave_availed.min' => 'The earned leave availed must be at least 0.',
            'earned_balance_due.integer' => 'The earned balance due must be an integer.',
            'earned_balance_due.min' => 'The earned balance due must be at least 0.',
            'medical_leave_due_as_on.integer' => 'The medical leave due as on must be an integer.',
            'medical_leave_due_as_on.min' => 'The medical leave due as on must be at least 0.',
            'medical_leave_availed.integer' => 'The medical leave availed must be an integer.',
            'medical_leave_availed.min' => 'The medical leave availed must be at least 0.',
            'medical_balance_due.integer' => 'The medical balance due must be an integer.',
            'medical_balance_due.min' => 'The medical balance due must be at least 0.',
            'checked_by.image' => 'The checked by signature must be an image.',
            'checked_by.mimes' => 'The checked by signature must be a file of type: jpeg, png, jpg.',
            'checked_by.max' => 'The checked by signature may not be greater than 2048 kilobytes.',
            'recommended_by.image' => 'The recommended by signature must be an image.',
            'recommended_by.mimes' => 'The recommended by signature must be a file of type: jpeg, png, jpg.',
            'recommended_by.max' => 'The recommended by signature may not be greater than 2048 kilobytes.',
            'reviewed_by.image' => 'The reviewed by signature must be an image.',
            'reviewed_by.mimes' => 'The reviewed by signature must be a file of type: jpeg, png, jpg.',
            'reviewed_by.max' => 'The reviewed by signature may not be greater than 2048 kilobytes.',
            'approved_by.image' => 'The approved by signature must be an image.',
            'approved_by.mimes' => 'The approved by signature must be a file of type: jpeg, png, jpg.',
            'approved_by.max' => 'The approved by signature may not be greater than 2048 kilobytes.',
            'application_status.in' => 'The application status must be either approved, rejected, or pending.',
            'note.string' => 'The note must be a string.',
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
            'country_id'              => 'Country',
            'employee_id'             => 'Employee',
            'company_id'              => 'Company',
            'name'                    => 'Name',
            'type_of_leave'           => 'Type of Leave',
            'designation'             => 'Designation',
            'company'                 => 'Company',
            'leave_start_date'        => 'Leave Start Date',
            'leave_end_date'          => 'Leave End Date',
            'total_days'              => 'Total Days',
            'job_status'              => 'Job Status',
            'reporting_on'            => 'Reporting On',
            'leave_explanation'       => 'Leave Explanation',
            'substitute_during_leave' => 'Substitute During Leave',
            'leave_address'           => 'Leave Address',
            'is_between_holidays'     => 'Is Between Holidays',
            'leave_contact_no'        => 'Leave Contact Number',
            'included_open_saturday'  => 'Included Open Saturday',
            'substitute_signature'    => 'Substitute Signature',
            'applicant_signature'     => 'Applicant Signature',
            'leave_position'          => 'Leave Position',
            'casual_leave_due_as_on'  => 'Casual Leave Due As On',
            'casual_leave_availed'    => 'Casual Leave Availed',
            'casual_balance_due'      => 'Casual Balance Due',
            'earned_leave_due_as_on'  => 'Earned Leave Due As On',
            'earned_leave_availed'    => 'Earned Leave Availed',
            'earned_balance_due'      => 'Earned Balance Due',
            'medical_leave_due_as_on' => 'Medical Leave Due As On',
            'medical_leave_availed'   => 'Medical Leave Availed',
            'medical_balance_due'     => 'Medical Balance Due',
            'checked_by'              => 'Checked By',
            'recommended_by'          => 'Recommended By',
            'reviewed_by'             => 'Reviewed By',
            'approved_by'             => 'Approved By',
            'application_status'      => 'Application Status',
            'note'                    => 'Note',
        ];
    }

    /**
     * Handle a failed validation attempt.
     *
     * @param  \Illuminate\Contracts\Validation\Validator  $validator
     * @return void
     */
    protected function failedValidation(Validator $validator)
    {
        $this->recordErrorMessages($validator);
        parent::failedValidation($validator);
    }

    /**
     * Record the error messages displayed to the user.
     *
     * @param  \Illuminate\Contracts\Validation\Validator  $validator
     * @return void
     */
    protected function recordErrorMessages(Validator $validator)
    {
        $errorMessages = $validator->errors()->all();

        foreach ($errorMessages as $errorMessage) {
            toastr()->error($errorMessage);
        }
    }
}
