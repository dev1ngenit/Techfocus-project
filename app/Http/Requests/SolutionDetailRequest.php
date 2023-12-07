<?php

namespace App\Http\Requests;

use Illuminate\Contracts\Validation\Validator;
use Illuminate\Foundation\Http\FormRequest;

class SolutionDetailRequest extends FormRequest
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
            'industry_id' => 'nullable|array',
            'name' => 'nullable|string',
            'header' => 'nullable|text',
            'banner_image' => 'sometimes|image|mimes:jpeg,png,jpg|max:2048',
            'row_one_id' => 'nullable|exists:rows,id',
            'row_two_title' => 'nullable|string',
            'row_two_header' => 'nullable|text',
            'row_three_title' => 'nullable|string',
            'row_three_header' => 'nullable|text',
            'row_four_id' => 'nullable|exists:rows,id',
            'row_five_title' => 'nullable|string',
            'row_five_header' => 'nullable|text',
            'solution_card_one_id' => 'nullable|exists:solution_cards,id',
            'solution_card_two_id' => 'nullable|exists:solution_cards,id',
            'solution_card_three_id' => 'nullable|exists:solution_cards,id',
            'solution_card_four_id' => 'nullable|exists:solution_cards,id',
            'solution_card_five_id' => 'nullable|exists:solution_cards,id',
            'solution_card_six_id' => 'nullable|exists:solution_cards,id',
            'solution_card_seven_id' => 'nullable|exists:solution_cards,id',
            'solution_card_eight_id' => 'nullable|exists:solution_cards,id',
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
