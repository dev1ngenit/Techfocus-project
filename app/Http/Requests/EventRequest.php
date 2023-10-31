<?php

namespace App\Http\Requests;

use Illuminate\Contracts\Validation\Validator;
use Illuminate\Foundation\Http\FormRequest;

class EventRequest extends FormRequest
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
            'employee_id' => 'nullable|exists:employees,id',
            'department_id' => 'nullable|exists:departments,id',
            'title' => 'required|string|max:255',
            'start_date' => 'nullable|date',
            'end_date' => 'nullable|date|after_or_equal:start_date',
            'start_time' => 'nullable|date_format:H:i',
            'end_time' => 'nullable|date_format:H:i|after:start_time',
            'status' => 'required|in:active,inactive',
            'description' => 'nullable|string',
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
            'country_id.exists' => 'The selected country does not exist.',
            'dynamic_category_id.exists' => 'The selected dynamic category does not exist.',
            'employee_id.exists' => 'The selected employee does not exist.',
            'department_id.exists' => 'The selected department does not exist.',
            'title.required' => 'The title field is required.',
            'title.string' => 'The title must be a string.',
            'title.max' => 'The title may not be greater than 255 characters.',
            'start_date.date' => 'The start date must be a valid date.',
            'end_date.date' => 'The end date must be a valid date.',
            'end_date.after_or_equal' => 'The end date must be a date after or equal to the start date.',
            'start_time.date_format' => 'The start time must be a valid time.',
            'end_time.date_format' => 'The end time must be a valid time.',
            'end_time.after' => 'The end time must be a time after the start time.',
            'status.required' => 'The status field is required.',
            'status.in' => 'The status must be either active or inactive.',
            'description.string' => 'The description must be a string.',
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
            'country_id' => 'country',
            'dynamic_category_id' => 'dynamic category',
            'employee_id' => 'employee',
            'department_id' => 'department',
            'title' => 'title',
            'start_date' => 'start date',
            'end_date' => 'end date',
            'start_time' => 'start time',
            'end_time' => 'end time',
            'status' => 'status',
            'description' => 'description',
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
