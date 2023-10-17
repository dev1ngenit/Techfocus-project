<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class VatTaxRequest extends FormRequest
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
            'country_id'  => 'nullable|exists:countries,id',
            'type'        => 'required|in:tax,vat',
            'name'        => 'required|string|max:255',
            'rate'        => 'required|numeric|between:0,999.99',
            'description' => 'nullable|string',
            'status'      => 'required|in:active,inactive',
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
            'country_id.exists' => 'The selected country name is invalid.',
            'type.in'           => 'The type must be either tax or vat.',
            'name.required'     => 'The name field is required.',
            'rate.between'      => 'The rate must be between 0 and 999.99.',
            'status.in'         => 'The status must be either active or inactive.',
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
            'country_id'  => 'Country Name',
            'type'        => 'Type',
            'name'        => 'Name',
            'rate'        => 'Rate',
            'description' => 'Description',
            'status'      => 'Status',
        ];
    }
}
