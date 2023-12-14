<?php

namespace App\Http\Requests;

use Illuminate\Contracts\Validation\Validator;
use Illuminate\Foundation\Http\FormRequest;

class AccountsDocumentRequest extends FormRequest
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
            'fiscal_year' => 'nullable|integer',
            'name' => 'required|unique:accounts_documents|string',
            'attachment' => 'sometimes|file|mimes:jpg,jpeg,png,doc,docx,pdf', 
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

    // /**
    //  * Handle a failed validation attempt.
    //  *
    //  * @param  \Illuminate\Contracts\Validation\Validator  $validator
    //  * @return void
    //  */
    // protected function failedValidation(Validator $validator)
    // {
    //     $this->recordErrorMessages($validator);
    //     parent::failedValidation($validator);
    // }

    // /**
    //  * Record the error messages displayed to the user.
    //  *
    //  * @param  \Illuminate\Contracts\Validation\Validator  $validator
    //  * @return void
    //  */
    // protected function recordErrorMessages(Validator $validator)
    // {
    //     $errorMessages = $validator->errors()->all();

    //     foreach ($errorMessages as $errorMessage) {
    //         toastr()->error($errorMessage);
    //     }
    // }
}
