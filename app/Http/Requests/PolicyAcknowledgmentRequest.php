<?php

namespace App\Http\Requests;

use Illuminate\Contracts\Validation\Validator;
use Illuminate\Foundation\Http\FormRequest;

class PolicyAcknowledgmentRequest extends FormRequest
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
            'policy_id' => 'nullable|exists:hr_policies,id',
            'sign' => 'nullable|string|max:255',
            'status' => 'nullable|in:acknowledged,pending',
            'acknowledged_at' => 'nullable|date',
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
            'policy_id.exists' => 'The selected policy is invalid.',
            'sign.max' => 'The sign field cannot exceed :max characters.',
            'status.in' => 'The status must be one of: acknowledged, pending.',
            'acknowledged_at.date' => 'The acknowledged at field is not a valid date.',
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
            'country_id' => 'Country',
            'employee_id' => 'Employee',
            'policy_id' => 'Policy',
            'sign' => 'Signature',
            'status' => 'Status',
            'acknowledged_at' => 'Acknowledged At',
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
