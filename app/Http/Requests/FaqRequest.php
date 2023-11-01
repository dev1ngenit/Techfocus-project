<?php

namespace App\Http\Requests;

use Illuminate\Contracts\Validation\Validator;
use Illuminate\Foundation\Http\FormRequest;

class FaqRequest extends FormRequest
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
            'dynamic_category_id' => 'nullable|exists:dynamic_categories,id',
            'question' => 'required|string|max:255',
            'answer' => 'required|string',
            'order' => 'nullable|integer|min:0',
            'is_published' => 'required|in:0,1',
            'created_by' => 'nullable|exists:users,id',
            'updated_by' => 'nullable|exists:users,id',
            'deleted_by' => 'nullable|exists:users,id',
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
            'dynamic_category_id.exists' => 'The selected dynamic category is invalid.',
            'question.required' => 'The question field is required.',
            'question.string' => 'The question must be a string.',
            'question.max' => 'The question may not be greater than 255 characters.',
            'answer.required' => 'The answer field is required.',
            'answer.string' => 'The answer must be a string.',
            'order.integer' => 'The order must be an integer.',
            'order.min' => 'The order must be at least 0.',
            'is_published.required' => 'The is published field is required.',
            'is_published.in' => 'The selected published status is invalid.',
            'created_by.exists' => 'The selected creator is invalid.',
            'updated_by.exists' => 'The selected updater is invalid.',
            'deleted_by.exists' => 'The selected deleter is invalid.',
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
            'country_id'          => 'country',
            'company_id'          => 'company',
            'dynamic_category_id' => 'dynamic category',
            'question'            => 'question',
            'answer'              => 'answer',
            'order'               => 'order',
            'is_published'        => 'publication status',
            'created_by'          => 'creator',
            'updated_by'          => 'updater',
            'deleted_by'          => 'deleter',
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
