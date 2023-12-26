<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Contracts\Validation\Validator;

class EmployeeProjectRequest extends FormRequest
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
            // 'country_id' => 'nullable|exists:countries,id|integer',
            // 'company_id' => 'nullable|exists:companies,id|integer',
            'name' => 'required|string|max:255',
            'description' => 'nullable|string',
            'type' => 'nullable|in:new,update,new_version',
            'start_date' => 'nullable|date',
            'end_date' => 'nullable|date',
            'start_time' => 'nullable',
            'end_time' => 'nullable',
            'supervisor' => 'nullable|array',
            'assigned_employee' => 'nullable|array',
            'review' => 'nullable|string',
            'project_status' => 'nullable|in:planned,on_going,completed',
            'status' => 'nullable|string|max:255',
            'weight' => 'nullable|string|max:255',
            'kpi_rating' => 'nullable|numeric',
            'total_working_day' => 'nullable|integer',
            'total_working_man_hour' => 'nullable|numeric',
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
