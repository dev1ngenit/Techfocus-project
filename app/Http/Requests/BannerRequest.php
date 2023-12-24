<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Contracts\Validation\Validator;

class BannerRequest extends FormRequest
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
        $bannerId = $this->route('banner');

        return [
            'category' => 'nullable|string',
            'brand_id' => 'nullable|exists:brands,id',
            'category_id' => 'nullable|exists:categories,id',
            'product_id' => 'nullable|exists:products,id',
            'solution_id' => 'nullable|exists:solution_details,id',
            'industry_id' => 'nullable|exists:industries,id',
            'content_id' => 'nullable|exists:news_trends,id',
            'page_name' => 'nullable|string',
            'page_title' => 'nullable|string',
            'banner_one_name' => 'required|string',
            'banner_two_name' => 'nullable|string',
            'banner_three_name' => 'nullable|string',
            'banner_one_slug' => 'nullable|string|unique:banners,banner_one_slug,' . $bannerId . ',id',
            'banner_two_slug' => 'nullable|string|unique:banners,banner_two_slug,' . $bannerId . ',id',
            'banner_three_slug' => 'nullable|string|unique:banners,banner_three_slug,' . $bannerId . ',id',
            'banner_one_image' => 'sometimes|image|mimes:jpeg,png,jpg|max:2048',
            'banner_two_image' => 'sometimes|image|mimes:jpeg,png,jpg|max:2048',
            'banner_three_image' => 'sometimes|image|mimes:jpeg,png,jpg|max:2048',
            'banner_one_link' => 'nullable|url',
            'banner_two_link' => 'nullable|url',
            'banner_three_link' => 'nullable|url',
            'meta_title' => 'nullable|string',
            'meta_description' => 'nullable|string',
            'meta_tags' => 'nullable|array',
            'meta_image' => 'sometimes|image|mimes:jpeg,png,jpg|max:2048',
            'status' => 'required|in:active,inactive',
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

    // /**
    //  * Handle a failed validation attempt.
    //  *
    //  * @param  \Illuminate\Contracts\Validation\Validator  $validator
    //  * @return void
    //  */
    // protected function failedValidation(Validator $validator)
    // {
    //     $this->recordErrorMessages($validator);
    //     parent::failedValidation($validator);
    // }

    // /**
    //  * Record the error messages displayed to the user.
    //  *
    //  * @param  \Illuminate\Contracts\Validation\Validator  $validator
    //  * @return void
    //  */
    // protected function recordErrorMessages(Validator $validator)
    // {
    //     $errorMessages = $validator->errors()->all();

    //     foreach ($errorMessages as $errorMessage) {
    //         toastr()->error($errorMessage);
    //     }
    // }
}
