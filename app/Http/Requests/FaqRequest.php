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
            'dynamic_category_id' => 'nullable|exists:dynamic_categories,id',
            'question' => 'required|string|max:255',
            'answer' => 'required|string',
            'order' => 'nullable|integer|min:0',
            'is_published' => 'required|in:0,1',
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
            'dynamic_category_id.exists' => 'The selected dynamic category is invalid.',
            'question.required'          => 'The question field is required.',
            'question.string'            => 'The question must be a string.',
            'question.max'               => 'The question may not be greater than 255 characters.',
            'answer.required'            => 'The answer field is required.',
            'answer.string'              => 'The answer must be a string.',
            'order.integer'              => 'The order must be an integer.',
            'order.min'                  => 'The order must be at least 0.',
            'is_published.required'      => 'The is published field is required.',
            'is_published.in'            => 'The selected published status is invalid.',
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
            'dynamic_category_id' => 'Dynamic category',
            'question'            => 'Question',
            'answer'              => 'Answer',
            'order'               => 'Order',
            'is_published'        => 'Publication status',
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
