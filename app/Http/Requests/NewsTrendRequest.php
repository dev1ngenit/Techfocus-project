<?php

namespace App\Http\Requests;

use Illuminate\Contracts\Validation\Validator;
use Illuminate\Foundation\Http\FormRequest;

class NewsTrendRequest extends FormRequest
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
            'category_id'     => 'nullable',
            'brand_id'        => 'nullable',
            'industry_id'     => 'nullable',
            'solution_id'     => 'nullable',
            'featured'        => 'nullable|in:0,1',
            'type'            => 'nullable|in:news,trends,blogs,client_stories,tech_contents',
            'badge'           => 'nullable|string|max:50',
            'title'           => 'nullable|string|max:255',
            'header'          => 'nullable|string',
            'short_des'       => 'nullable|string',
            'long_des'        => 'nullable|string',
            'author'          => 'nullable|string',
            'address'         => 'nullable|string',
            'tags'            => 'nullable',
            'banner_image'    => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'thumbnail_image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'additional_url'  => 'nullable|url',
            'footer'          => 'nullable|string',
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
            'category_id.json' => 'The category id field must be a valid JSON string.',
            'brand_id.json' => 'The brand id field must be a valid JSON string.',
            'industry_id.json' => 'The industry id field must be a valid JSON string.',
            'solution_id.json' => 'The solution id field must be a valid JSON string.',
            'featured.in' => 'The featured field must be either 0 or 1.',
            'type.in' => 'The type field must be either news or trends.',
            'badge.max' => 'The badge field may not be greater than 50 characters.',
            'title.max' => 'The title field may not be greater than 255 characters.',
            'header.string' => 'The header field must be a string.',
            'short_des.string' => 'The short description field must be a string.',
            'long_des.string' => 'The long description field must be a string.',
            'author.string' => 'The author field must be a string.',
            'address.string' => 'The address field must be a string.',
            'tags.json' => 'The tags field must be a valid JSON string.',

            'banner_image.string' => 'The banner image field must be a string.',
            'thumbnail_image.string' => 'The thumbnail image field must be a string.',

            'banner_image.image'        => 'The file must be an image.',
            'image.mimes'        => 'The image must be a file of type:jpeg, png, jpg, gif.',
            'image.max'          => 'The image may not be greater than 2048 kilobytes.',
            'thumbnail_image.image'         => 'The file must be an image.',
            'logo.mimes'         => 'The logo must be a file of type:jpeg, png, jpg, gif.',
            'logo.max'           => 'The logo may not be greater than 2048 kilobytes.',

            'additional_url.url' => 'The additional URL field must be a valid URL.',
            'footer.string' => 'The footer field must be a string.',
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
            'category_id' => 'Category ID',
            'brand_id' => 'Brand ID',
            'industry_id' => 'Industry ID',
            'solution_id' => 'Solution ID',
            'featured' => 'Featured',
            'type' => 'Type',
            'badge' => 'Badge',
            'title' => 'Title',
            'header' => 'Header',
            'short_des' => 'Short Description',
            'long_des' => 'Long Description',
            'author' => 'Author',
            'address' => 'Address',
            'tags' => 'Tags',
            'banner_image' => 'Banner Image',
            'thumbnail_image' => 'Thumbnail Image',
            'additional_url' => 'Additional URL',
            'footer' => 'Footer',
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
