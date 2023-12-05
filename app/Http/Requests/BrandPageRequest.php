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
            'brand_id' => 'nullable|exists:brands,id',
            'banner_image' => 'sometimes|image|mimes:jpeg,png,jpg|max:2048',
            'header' => 'required|text',
            'brand_logo' => 'nullable|string',
            'row_six_title' => 'nullable|string',
            'row_six_header' => 'nullable|text',
            'row_four_id' => 'nullable|exists:rows,id',
            'row_five_id' => 'nullable|exists:rows,id',
            'solution_card_one_id' => 'nullable|exists:solution_cards,id',
            'solution_card_two_id' => 'nullable|exists:solution_cards,id',
            'solution_card_three_id' => 'nullable|exists:solution_cards,id',
            'row_six_image' => 'sometimes|image|mimes:jpeg,png,jpg|max:2048',
            'row_seven_id' => 'nullable|exists:rows,id',
            'row_eight_id' => 'nullable|exists:rows,id',
            'row_one_title' => 'nullable|string',
            'row_one_header' => 'nullable|text',
            'row_nine_title' => 'nullable|string',
            'row_nine_header' => 'nullable|text',
            'added_by' => 'nullable|string',
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
