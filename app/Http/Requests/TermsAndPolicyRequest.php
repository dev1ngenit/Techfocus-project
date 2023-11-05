<?php

namespace App\Http\Requests;

use Illuminate\Contracts\Validation\Validator;
use Illuminate\Foundation\Http\FormRequest;

class TermsAndPolicyRequest extends FormRequest
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
            'company_id' => 'nullable|exists:companies,id',
            'name' => 'required|string|max:255',
            'content' => 'required|string',
            'is_active' => 'boolean',
            'version' => 'required|string|max:255',
            'effective_date' => 'required|date',
            'expiration_date' => 'nullable|date|after_or_equal:effective_date',
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
            'company_id.exists' => 'The selected company is invalid.',
            'name.required' => 'The name field is required.',
            'name.max' => 'The name field cannot exceed :max characters.',
            'content.required' => 'The content field is required.',
            'is_active.boolean' => 'The is active field must be a boolean.',
            'version.required' => 'The version field is required.',
            'version.max' => 'The version field cannot exceed :max characters.',
            'effective_date.required' => 'The effective date field is required.',
            'effective_date.date' => 'The effective date is not a valid date.',
            'expiration_date.date' => 'The expiration date is not a valid date.',
            'expiration_date.after_or_equal' => 'The expiration date must be after or equal to the effective date.',
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
            'company_id' => 'Company',
            'name' => 'Name',
            'content' => 'Content',
            'is_active' => 'Is Active',
            'version' => 'Version',
            'effective_date' => 'Effective Date',
            'expiration_date' => 'Expiration Date',
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
