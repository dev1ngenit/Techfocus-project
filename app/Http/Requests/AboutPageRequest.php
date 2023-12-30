<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Contracts\Validation\Validator;

class AboutPageRequest extends FormRequest
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
            'section_two_badge' => 'required|string|max:30',
            'section_two_title_1' => 'required|string|max:230',
            'section_two_title_span' => 'required|string|max:230',
            'section_two_subtitle' => 'required|string|max:230',
            'section_two_description' => 'required|string',
            'section_two_main_image' => 'nullable|string|max:230',
            'section_two_secondary_image' => 'nullable|string|max:230',
            'section_two_secondary_image_count' => 'nullable|string|max:230',
            'section_two_secondary_image_title' => 'nullable|string|max:230',
            'section_two_button_name' => 'nullable|string|max:230',
            'section_two_button_link' => 'nullable|string',
            'section_three_tab_one_title' => 'required|string|max:230',
            'section_three_tab_one_short_description' => 'required|string',
            'section_three_tab_one_detailed_description' => 'required|string',
            'section_three_tab_one_list_title' => 'nullable|string|max:230',
            'section_three_tab_one_list_1' => 'nullable|string|max:230',
            'section_three_tab_one_list_2' => 'nullable|string|max:230',
            'section_three_tab_one_list_3' => 'nullable|string|max:230',
            'section_three_tab_one_list_4' => 'nullable|string|max:230',
            'section_three_tab_one_quote' => 'nullable|string|max:250',
            'section_three_tab_one_button_name' => 'nullable|string|max:230',
            'section_three_tab_one_button_link' => 'nullable|string',
            'section_three_tab_two_title' => 'required|string|max:230',
            'section_three_tab_two_short_description' => 'required|string',
            'section_three_tab_two_detailed_description' => 'required|string',
            'section_three_tab_two_list_title' => 'nullable|string|max:230',
            'section_three_tab_two_list_1' => 'nullable|string|max:230',
            'section_three_tab_two_list_2' => 'nullable|string|max:230',
            'section_three_tab_two_list_3' => 'nullable|string|max:230',
            'section_three_tab_two_list_4' => 'nullable|string|max:230',
            'section_three_tab_two_quote' => 'nullable|string|max:250',
            'section_three_tab_two_quote_author' => 'nullable|string|max:230',
            'section_three_tab_two_button_name' => 'nullable|string|max:230',
            'section_three_tab_two_button_link' => 'nullable|string',
            'section_three_tab_three_title' => 'required|string|max:230',
            'section_three_tab_three_short_description' => 'required|string',
            'section_three_tab_three_detailed_description' => 'required|string',
            'section_three_tab_three_list_title' => 'nullable|string|max:230',
            'section_three_tab_three_list_1' => 'nullable|string|max:230',
            'section_three_tab_three_list_2' => 'nullable|string|max:230',
            'section_three_tab_three_list_3' => 'nullable|string|max:230',
            'section_three_tab_three_list_4' => 'nullable|string|max:230',
            'section_three_tab_three_quote' => 'nullable|string|max:250',
            'section_three_tab_three_quote_author' => 'nullable|string|max:230',
            'section_three_tab_three_button_name' => 'nullable|string|max:230',
            'section_three_tab_three_button_link' => 'nullable|string',
            'section_three_tab_four_title' => 'required|string|max:230',
            'section_three_tab_four_short_description' => 'required|string',
            'section_three_tab_four_detailed_description' => 'required|string',
            'section_three_tab_four_list_title' => 'nullable|string|max:230',
            'section_three_tab_four_list_1' => 'nullable|string|max:230',
            'section_three_tab_four_list_2' => 'nullable|string|max:230',
            'section_three_tab_four_list_3' => 'nullable|string|max:230',
            'section_three_tab_four_list_4' => 'nullable|string|max:230',
            'section_three_tab_four_quote' => 'nullable|string|max:250',
            'section_three_tab_four_quote_author' => 'nullable|string|max:230',
            'section_three_tab_four_button_name' => 'nullable|string|max:230',
            'section_three_tab_four_button_link' => 'nullable|string',
            'section_four_banner_middle_image' => 'required|string|max:230',
            'section_five_col_one_description' => 'required|string',
            'section_five_col_one_title' => 'required|string|max:230',
            'section_five_ceo_sign' => 'nullable|string|max:230',
            'section_five_ceo_name' => 'nullable|string|max:230',
            'section_five_ceo_designation' => 'nullable|string|max:230',
            'section_five_ceo_facebook_account_link' => 'nullable|string',
            'section_five_ceo_twitter_account_link' => 'nullable|string',
            'section_five_ceo_whatsapp_account_link' => 'nullable|string',
            'section_five_col_two_content' => 'nullable|string',
            'section_five_col_two_title' => 'nullable|string|max:230',
            'section_five_col_two_list_1' => 'nullable|string|max:230',
            'section_five_col_two_list_2' => 'nullable|string|max:230',
            'section_five_col_two_list_3' => 'nullable|string|max:230',
            'section_five_col_two_list_4' => 'nullable|string|max:230',
            'section_six_card_one_title' => 'required|string|max:230',
            'section_six_card_one_count' => 'required|string|max:230',
            'section_six_card_one_icon' => 'nullable|string|max:230',
            'section_six_card_one_short_description' => 'required|string',
            'section_six_card_two_title' => 'required|string|max:230',
            'section_six_card_two_count' => 'required|string|max:230',
            'section_six_card_two_icon' => 'nullable|string|max:230',
            'section_six_card_two_short_description' => 'required|string',
            'section_six_card_three_title' => 'required|string|max:230',
            'section_six_card_three_count' => 'required|string|max:230',
            'section_six_card_three_icon' => 'nullable|string|max:230',
            'section_six_card_three_short_description' => 'required|string',
            'section_six_card_four_title' => 'required|string|max:230',
            'section_six_card_four_count' => 'required|string|max:230',
            'section_six_card_four_icon' => 'nullable|string|max:230',
            'section_six_card_four_short_description' => 'required|string',
            'brand_id' => 'required|array',
            'status' => 'nullable|in:active,inactive',
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
