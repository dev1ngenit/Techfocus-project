<?php

namespace App\Http\Requests;

use Illuminate\Validation\Rule;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Contracts\Validation\Validator;

class ContactRequest extends FormRequest
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
        $contact = $this->route('contact');  // Assuming 'contact' is the route parameter name for the Contact model instance

        return [
            'country_id' => 'nullable|exists:countries,id',
            'code' => [
                'required',
                'string',
                'max:255',
                Rule::unique('contacts', 'code')->ignore($contact->id),
            ],
            'name' => 'nullable|string|max:255',
            'email' => 'nullable|email|max:255',
            'phone' => 'nullable|string|max:255',
            'subject' => 'nullable|string|max:255',
            'message' => 'nullable|string',
            'ip_address' => 'nullable|ip|max:100',
            'status' => 'required|in:pending,replied,on_going,closed',
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
            'code.required'     => 'The code field is required.',
            'code.unique'       => 'The code has already been taken.',
            'name.string'       => 'The name must be a string.',
            'email.email'       => 'The email must be a valid email address.',
            'phone.string'      => 'The phone number must be a string.',
            'subject.string'    => 'The subject must be a string.',
            'message.string'    => 'The message must be a string.',
            'ip_address.ip'     => 'The IP address must be a valid IP address.',
            'status.required'   => 'The status field is required.',
            'status.in'         => 'The status must be one of the following: pending, replied, on_going, closed.',
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
            'code'       => 'contact code',
            'name'       => 'name',
            'email'      => 'email address',
            'phone'      => 'phone number',
            'subject'    => 'subject',
            'message'    => 'message',
            'ip_address' => 'IP address',
            'status'     => 'status',
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
