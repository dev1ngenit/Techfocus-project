<?php

namespace App\Http\Requests;

use Illuminate\Contracts\Validation\Validator;
use Illuminate\Foundation\Http\FormRequest;

class BrandPageRequest extends FormRequest
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
            // Brand Pages Table Rules
            'brand_id' => 'nullable|exists:brands,id',
            'banner_image' => 'sometimes|image|mimes:jpeg,png,jpg|max:2048',
            'header' => 'required|string',
            'brand_logo' => 'sometimes|image|mimes:jpeg,png,jpg|max:2048',
            'row_six_title' => 'nullable|string',
            'row_six_header' => 'nullable|string',
            'row_four_id' => 'nullable|exists:rows,id',
            'row_five_id' => 'nullable|exists:rows,id',
            'solution_card_one_id' => 'nullable|exists:solution_cards,id',
            'solution_card_two_id' => 'nullable|exists:solution_cards,id',
            'solution_card_three_id' => 'nullable|exists:solution_cards,id',
            'row_six_image' => 'sometimes|image|mimes:jpeg,png,jpg|max:2048',
            'row_seven_id' => 'nullable|exists:rows,id',
            'row_eight_id' => 'nullable|exists:rows,id',
            'row_one_title' => 'nullable|string',
            'row_one_header' => 'nullable|string',
            'row_nine_title' => 'nullable|string',
            'row_nine_header' => 'nullable|string',
            'added_by' => 'nullable|string',

            // Rows Table Rules
            'badge' => 'nullable|string',
            'title' => 'required|string',
            'image' => 'sometimes|image|mimes:jpeg,png,jpg|max:2048',
            'short_des' => 'nullable|string',
            'btn_name' => 'nullable|string',
            'link' => 'nullable|url',
            'list_title' => 'nullable|string',
            'list_one' => 'nullable|string',
            'list_two' => 'nullable|string',
            'list_three' => 'nullable|string',
            'list_four' => 'nullable|string',
            'description' => 'nullable|string',

            // Solution Cards Table Rules
            'badge' => 'nullable|string',
            'title' => 'nullable|string',
            'image' => 'sometimes|image|mimes:jpeg,png,jpg|max:2048',
            'short_des' => 'nullable|string',
            'link' => 'nullable|url',
            'button_name' => 'nullable|string',
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
