<?php

namespace App\Http\Requests;

use Illuminate\Contracts\Validation\Validator;
use Illuminate\Foundation\Http\FormRequest;

class RfqRequest extends FormRequest
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
            'rfq_code' => 'required|string|unique:rfqs',
            'sales_man_id_L1' => 'nullable|exists:admins,id',
            'sales_man_id_T1' => 'nullable|exists:admins,id',
            'sales_man_id_T2' => 'nullable|exists:admins,id',
            'client_id' => 'nullable|exists:users,id',
            'client_type' => 'nullable|in:client,partner',
            'name' => 'nullable|string',
            'email' => 'nullable|email',
            'phone' => 'nullable|string',
            'company_name' => 'nullable|string',
            'designation' => 'nullable|string',
            'address' => 'nullable|string',
            'create_date' => 'nullable|date',
            'close_date' => 'nullable|date',
            'sale_date' => 'nullable|date',
            'pq_code' => 'nullable|string',
            'pqr_code_one' => 'nullable|string',
            'pqr_code_two' => 'nullable|string',
            'qty' => 'nullable|integer',
            'image' => 'nullable|string',
            'message' => 'nullable|string',
            'rfq_type' => 'nullable|in:rfq,deal,sales,order,delivery',
            'call' => 'nullable|in:0,1',
            'regular' => 'nullable|in:0,1',
            'special' => 'nullable|in:0,1',
            'tax_status' => 'nullable|in:0,1',
            'deal_type' => 'nullable|in:new,renew',
            'status' => 'nullable|string',
            'tax' => 'nullable|numeric',
            'vat' => 'nullable|numeric',
            'total_price' => 'nullable|numeric',
            'quoted_price' => 'nullable|numeric',
            'price_text' => 'nullable|string',
            'rfq_department' => 'nullable|string',
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
