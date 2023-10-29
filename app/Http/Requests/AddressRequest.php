<?php

namespace App\Http\Requests;

use Illuminate\Contracts\Validation\Validator;
use Illuminate\Foundation\Http\FormRequest;

class AddressRequest extends FormRequest
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
            'state_id' => 'nullable|exists:states,id',
            'city_id' => 'nullable|exists:cities,id',
            'admin_id' => 'nullable|exists:admins,id',
            'user_id' => 'nullable|exists:users,id',
            'user_type' => 'required|in:admin,client',
            'address_type' => 'required|in:billing,shipping',
            'address' => 'nullable|string|max:255',
            'postal_code' => 'nullable|string|max:20',
            'phone' => 'nullable|string|max:20',
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
            'country_id.exists'     => 'The selected country is invalid.',
            'state_id.exists'       => 'The selected state is invalid.',
            'city_id.exists'        => 'The selected city is invalid.',
            'admin_id.exists'       => 'The selected admin is invalid.',
            'user_id.exists'        => 'The selected user is invalid.',
            'user_type.required'    => 'The user type is required.',
            'user_type.in'          => 'The user type must be either admin or client.',
            'address_type.required' => 'The address type is required.',
            'address_type.in'       => 'The address type must be either billing or shipping.',
            'address.string'        => 'The address must be a string.',
            'address.max'           => 'The address may not be greater than 255 characters.',
            'postal_code.string'    => 'The postal code must be a string.',
            'postal_code.max'       => 'The postal code may not be greater than 20 characters.',
            'phone.string'          => 'The phone number must be a string.',
            'phone.max'             => 'The phone number may not be greater than 20 characters.',
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
            'country_id'   => 'country',
            'state_id'     => 'state',
            'city_id'      => 'city',
            'admin_id'     => 'admin',
            'user_id'      => 'user',
            'user_type'    => 'user type',
            'address_type' => 'address type',
            'address'      => 'address',
            'postal_code'  => 'postal code',
            'phone'        => 'phone number',
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
