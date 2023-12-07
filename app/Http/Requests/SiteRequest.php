<?php

namespace App\Http\Requests;

use Illuminate\Contracts\Validation\Validator;
use Illuminate\Foundation\Http\FormRequest;

class SiteRequest extends FormRequest
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
            'system_name' => 'nullable|string',
            'frontend_website_name' => 'nullable|string',
            'site_motto' => 'nullable|string',
            'site_icon' => 'sometimes|image|mimes:jpeg,png,jpg|max:2048',
            'system_logo_white' => 'sometimes|image|mimes:jpeg,png,jpg|max:2048',
            'system_logo_black' => 'sometimes|image|mimes:jpeg,png,jpg|max:2048',
            'system_timezone' => 'nullable|string',
            'base_color' => 'nullable|string',
            'base_hover_color' => 'nullable|string',
            'secondary_base_color' => 'nullable|string',
            'secondary_base_hover_color' => 'nullable|string',
            'phone_one' => 'nullable|string|max:20',
            'phone_two' => 'nullable|string|max:20',
            'whatsapp_number' => 'nullable|string|max:20',
            'default_language' => 'nullable|string|max:50',
            'contact_email' => 'nullable|email|max:100',
            'support_email' => 'nullable|email|max:100',
            'info_email' => 'nullable|email|max:100',
            'sales_email' => 'nullable|email|max:100',
            'facebook_url' => 'nullable|url|max:255',
            'twitter_url' => 'nullable|url|max:255',
            'instagram_url' => 'nullable|url|max:255',
            'linkedin_url' => 'nullable|url|max:255',
            'youtube_url' => 'nullable|url|max:255',
            'github_url' => 'nullable|url|max:255',
            'portfolio_url' => 'nullable|url|max:255',
            'fiver_url' => 'nullable|url|max:255',
            'upwork_url' => 'nullable|url|max:255',
            'service_days' => 'nullable|string|max:100',
            'service_time' => 'nullable|string',
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
}
