<?php

namespace App\Http\Requests;

use Illuminate\Contracts\Validation\Validator;
use Illuminate\Foundation\Http\FormRequest;

class ProductSasRequest extends FormRequest
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
            // 'product_id' => 'nullable|exists:products,id',
            // 'create' => 'nullable|date',
            // 'item_name' => 'nullable|string',
            'cog_price' => 'nullable|numeric',
            'sales_price' => 'nullable|numeric',
            'bank_charge' => 'nullable|numeric',
            'customs' => 'nullable|numeric',
            'tax' => 'nullable|numeric',
            'utility_cost' => 'nullable|numeric',
            'shiping_cost' => 'nullable|numeric',
            'sales_comission' => 'nullable|numeric',
            'liability' => 'nullable|numeric',
            'regular_discounts' => 'nullable|numeric',
            'rebates' => 'nullable|numeric',
            'capital_share' => 'nullable|numeric',
            'management_cost' => 'nullable|numeric',
            // 'net_profit' => 'nullable|numeric',
            // 'gross_profit' => 'nullable|numeric',
            // 'net_profit_amount' => 'nullable|numeric',
            // 'gross_profit_amount' => 'nullable|numeric',
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
