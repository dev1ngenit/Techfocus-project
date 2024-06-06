<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Contracts\Validation\Validator;

class EmployeeCategoryRequest extends FormRequest
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
            'country_id'            => 'nullable|exists:countries,id',
            'company_id'            => 'nullable|exists:companies,id',
            'name'                  => 'required|string|max:255',
            'evaluation_period'     => 'required|integer',
            'monthly_earned_leave'  => 'nullable|integer|min:0',
            'monthly_casual_leave'  => 'nullable|integer|min:0',
            'monthly_medical_leave' => 'nullable|integer|min:0',
            'yearly_earned_leave'   => 'required|integer|min:0',
            'yearly_casual_leave'   => 'required|integer|min:0',
            'yearly_medical_leave'  => 'required|integer|min:0',
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
            'country_id.exists'              => 'The selected country name is invalid.',
            'company_id.exists'              => 'The selected company name is invalid.',
            'name.required'                  => 'The name field is required.',
            'evaluation_period.required'     => 'The evaluation period field is required.',
            'monthly_earned_leave.required'  => 'The monthly earned leave field is required.',
            'monthly_casual_leave.required'  => 'The monthly casual leave field is required.',
            'monthly_medical_leave.required' => 'The monthly medical leave field is required.',
            'yearly_earned_leave.required'   => 'The yearly earned leave field is required.',
            'yearly_casual_leave.required'   => 'The yearly casual leave field is required.',
            'yearly_medical_leave.required'  => 'The yearly medical leave field is required.',
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
            'country_id'            => 'Country Name',
            'company_id'            => 'Company Name',
            'name'                  => 'Name',
            'evaluation_period'     => 'Evaluation Period',
            'monthly_earned_leave'  => 'Monthly Earned Leave',
            'monthly_casual_leave'  => 'Monthly Casual Leave',
            'monthly_medical_leave' => 'Monthly Medical Leave',
            'yearly_earned_leave'   => 'Yearly Earned Leave',
            'yearly_casual_leave'   => 'Yearly Casual Leave',
            'yearly_medical_leave'  => 'Yearly Medical Leave',
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
