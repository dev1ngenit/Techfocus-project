<?php

namespace App\Http\Requests;

use Illuminate\Contracts\Validation\Validator;
use Illuminate\Foundation\Http\FormRequest;

class CatalogRequest extends FormRequest
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
            'category' => 'string|nullable',
            'brand_id' => 'array|nullable',
            'product_id' => 'array|nullable',
            'industry_id' => 'array|nullable',
            'solution_id' => 'array|nullable',
            'company_id' => 'array|nullable',
            'name' => 'string|nullable',
            'slug' => 'string|unique:catalogs,slug|nullable',
            'thumbnail' => 'image|nullable',
            'page_number' => 'string|max:20|nullable',
            'description' => 'string|nullable',
            'company_button_name' => 'string|nullable',
            'company_button_link' => 'string|nullable',
            'document' => 'file|mimes:pdf|nullable',
            'attachments' => 'array',
            'attachments.*.page_image' => 'image|nullable',
            'attachments.*.page_description' => 'string|nullable',
            'attachments.*.page_link' => 'string|nullable',
            'attachments.*.button_name' => 'string|nullable',
            'attachments.*.button_link' => 'string|nullable',
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
