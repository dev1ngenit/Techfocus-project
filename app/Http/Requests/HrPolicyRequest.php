<?php

namespace App\Http\Requests;

use Illuminate\Contracts\Validation\Validator;
use Illuminate\Foundation\Http\FormRequest;

class HrPolicyRequest extends FormRequest
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
            'dynamic_category_id' => 'nullable|exists:dynamic_categories,id',
            'title' => 'nullable|string|max:255',
            'description' => 'nullable|string',
            'effective_date' => 'nullable|date',
            'expiration_date' => 'nullable|date|after_or_equal:effective_date',
            'status' => 'nullable|in:active,inactive,archived',
            'version' => 'nullable|string|max:255',
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
            'dynamic_category_id.exists' => 'The selected dynamic category is invalid.',
            'title.max' => 'The title cannot exceed :max characters.',
            'description.string' => 'The description must be a string.',
            'effective_date.date' => 'The effective date is not a valid date.',
            'expiration_date.date' => 'The expiration date is not a valid date.',
            'expiration_date.after_or_equal' => 'The expiration date must be after or equal to the effective date.',
            'status.in' => 'The status must be one of: active, inactive, archived.',
            'version.max' => 'The version cannot exceed :max characters.',
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
            'dynamic_category_id' => 'Dynamic Category',
            'title' => 'Title',
            'description' => 'Description',
            'effective_date' => 'Effective Date',
            'expiration_date' => 'Expiration Date',
            'status' => 'Status',
            'version' => 'Version',
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
