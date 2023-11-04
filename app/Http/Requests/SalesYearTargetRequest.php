<?php

namespace App\Http\Requests;

use Illuminate\Contracts\Validation\Validator;
use Illuminate\Foundation\Http\FormRequest;

class SalesYearTargetRequest extends FormRequest
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
            'fiscal_year' => 'nullable|digits:4|integer|min:1900|max:' . (date('Y') + 10),
            'year_target' => 'nullable|numeric',
            'quarter_one_target' => 'nullable|numeric',
            'quarter_two_target' => 'nullable|numeric',
            'quarter_three_target' => 'nullable|numeric',
            'quarter_four_target' => 'nullable|numeric',
            'year_started' => 'nullable|in:january,july',
            'january_target' => 'nullable|numeric',
            'february_target' => 'nullable|numeric',
            'march_target' => 'nullable|numeric',
            'april_target' => 'nullable|numeric',
            'may_target' => 'nullable|numeric',
            'june_target' => 'nullable|numeric',
            'july_target' => 'nullable|numeric',
            'august_target' => 'nullable|numeric',
            'september_target' => 'nullable|numeric',
            'october_target' => 'nullable|numeric',
            'november_target' => 'nullable|numeric',
            'december_target' => 'nullable|numeric',
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
            'company_id.exists' => 'The selected company does not exist.',
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
            'january_target.numeric' => 'The January target must be a number.',
            'february_target.numeric' => 'The February target must be a number.',
            'march_target.numeric' => 'The March target must be a number.',
            'april_target.numeric' => 'The April target must be a number.',
            'may_target.numeric' => 'The May target must be a number.',
            'june_target.numeric' => 'The June target must be a number.',
            'july_target.numeric' => 'The July target must be a number.',
            'august_target.numeric' => 'The August target must be a number.',
            'september_target.numeric' => 'The September target must be a number.',
            'october_target.numeric' => 'The October target must be a number.',
            'november_target.numeric' => 'The November target must be a number.',
            'december_target.numeric' => 'The December target must be a number.',
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
            'company_id' => 'company',
            'fiscal_year' => 'fiscal year',
            'year_target' => 'year target',
            'quarter_one_target' => 'quarter one target',
            'quarter_two_target' => 'quarter two target',
            'quarter_three_target' => 'quarter three target',
            'quarter_four_target' => 'quarter four target',
            'year_started' => 'year started',
            'january_target' => 'January target',
            'february_target' => 'February target',
            'march_target' => 'March target',
            'april_target' => 'April target',
            'may_target' => 'May target',
            'june_target' => 'June target',
            'july_target' => 'July target',
            'august_target' => 'August target',
            'september_target' => 'September target',
            'october_target' => 'October target',
            'november_target' => 'November target',
            'december_target' => 'December target',
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
