<?php

namespace App\Http\Requests;

use Illuminate\Contracts\Validation\Validator;
use Illuminate\Foundation\Http\FormRequest;

class SalesTeamTargetRequest extends FormRequest
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
            'sales_man_id' => 'nullable|exists:admins,id',
            'country_id' => 'nullable|exists:countries,id',
            'company_id' => 'nullable|exists:companies,id',
            'name' => 'nullable|string|max:255',
            'fiscal_year' => 'nullable|digits:4|integer|min:1900|max:' . (date('Y') + 10),
            'year_target' => 'nullable|numeric',
            'quarter_one_target' => 'nullable|numeric',
            'quarter_two_target' => 'nullable|numeric',
            'quarter_three_target' => 'nullable|numeric',
            'quarter_four_target' => 'nullable|numeric',
            'year_started' => 'nullable|in:january,july',
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
            'sales_man_id.exists' => 'The selected sales person does not exist.',
            'country_id.exists' => 'The selected country does not exist.',
            'company_id.exists' => 'The selected company does not exist.',
            'name.string' => 'The name must be a string.',
            'name.max' => 'The name may not be greater than 255 characters.',
            'fiscal_year.digits' => 'The fiscal year must be a 4-digit number.',
            'fiscal_year.integer' => 'The fiscal year must be an integer.',
            'fiscal_year.min' => 'The fiscal year must be at least 1900.',
            'fiscal_year.max' => 'The fiscal year may not be greater than ' . (date('Y') + 10) . '.',
            'year_target.numeric' => 'The year target must be a number.',
            'quarter_one_target.numeric' => 'The quarter one target must be a number.',
            'quarter_two_target.numeric' => 'The quarter two target must be a number.',
            'quarter_three_target.numeric' => 'The quarter three target must be a number.',
            'quarter_four_target.numeric' => 'The quarter four target must be a number.',
            'year_started.in' => 'The year started must be either January or July.',
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
            'sales_man_id' => 'sales person',
            'country_id' => 'country',
            'company_id' => 'company',
            'name' => 'name',
            'fiscal_year' => 'fiscal year',
            'year_target' => 'year target',
            'quarter_one_target' => 'quarter one target',
            'quarter_two_target' => 'quarter two target',
            'quarter_three_target' => 'quarter three target',
            'quarter_four_target' => 'quarter four target',
            'year_started' => 'year started',
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
