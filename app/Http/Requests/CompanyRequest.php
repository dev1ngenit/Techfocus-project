<?php

namespace App\Http\Requests;

use Illuminate\Contracts\Validation\Validator;
use Illuminate\Foundation\Http\FormRequest;

class CompanyRequest extends FormRequest
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
            'headquarter_country_id' => 'nullable|exists:countries,id',
            'name' => 'required|string',
            'industry' => 'nullable|json',
            'country' => 'nullable|json',
            'location' => 'nullable|json',
            'phone' => 'nullable|string|max:20',
            'email' => 'nullable|email',
            'website_url' => 'nullable|url',
            'logo'        => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'postal_code' => 'nullable|string|max:10',
            'contact_name' => 'nullable|string',
            'contact_email' => 'nullable|email',
            'contact_phone' => 'nullable|string',
            'headquarter' => 'nullable|string',
            'founder' => 'nullable|string',
            'year_founded' => 'nullable|date_format:"Y"',
            'ceo' => 'nullable|string',
            'mission' => 'nullable|string',
            'vision' => 'nullable|string',
            'history' => 'nullable|string',
            'about' => 'nullable|string',
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
            'headquarter_country_id.exists' => 'The specified headquarter country Name does not exist in the countries table.',
            'phone.max'                     => 'The phone number must not exceed 20 characters.',
            'phone.string'                  => 'The phone number must be a string.',
            'email.email'                   => 'Please provide a valid email address.',
            'website_url.url'               => 'Please provide a valid URL for the website.',
            'logo.image'                    => 'The file must be an image.',
            'logo.mimes'                    => 'The logo must be a file of type: jpeg, png, jpg, gif.',
            'logo.max'                      => 'The logo may not be greater than 2048 kilobytes.',
            'postal_code.max'               => 'The postal code must not exceed 10 characters.',
            'postal_code.string'            => 'The postal code must be a string.',
            'contact_email.email'           => 'Please provide a valid contact email address.',
            'year_founded.date_format'      => 'The year founded must be in a Y format.',
            'name.string'                   => 'The company name must be a string.',
            'industry.json'                 => 'The industry field must be a valid JSON string.',
            'country.json'                  => 'The country field must be a valid JSON string.',
            'location.json'                 => 'The location field must be a valid JSON string.',
            'contact_name.string'           => 'The contact name must be a string.',
            'contact_phone.string'          => 'The contact phone must be a string.',
            'headquarter.string'            => 'The headquarter location must be a string.',
            'founder.string'                => 'The founder name must be a string.',
            'ceo.string'                    => 'The CEO name must be a string.',
            'mission.string'                => 'The mission statement must be a string.',
            'vision.string'                 => 'The vision statement must be a string.',
            'history.string'                => 'The history information must be a string.',
            'about.string'                  => 'The about information must be a string.'
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
            'headquarter_country_id' => 'Headquarter Country Name',
            'name'                   => 'Company Name',
            'industry'               => 'Industry',
            'country'                => 'Country',
            'location'               => 'Location',
            'phone'                  => 'Phone Number',
            'email'                  => 'Email Address',
            'website_url'            => 'Website URL',
            'logo'                   => 'Logo',
            'postal_code'            => 'Postal Code',
            'contact_name'           => 'Contact Name',
            'contact_email'          => 'Contact Email',
            'contact_phone'          => 'Contact Phone',
            'headquarter'            => 'Headquarter Location',
            'founder'                => "Founder's Name",
            'year_founded'           => 'Year Founded',
            'ceo'                    => "CEO's Name",
            'mission'                => 'Mission Statement',
            'vision'                 => 'Vision Statement',
            'history'                => 'Historical Information',
            'about'                  => 'About Information',
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
