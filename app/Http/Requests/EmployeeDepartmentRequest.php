<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class EmployeeDepartmentRequest extends FormRequest
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
            'country_id'            => 'nullable|exists:countries,id',
            'name'                  => 'required|string|max:255',
            'slug'                  => 'required|string|unique:employee_categories,slug|max:255',
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
            'country_id.exists'              => 'The selected country name is invalid.',
            'name.required'                  => 'The name field is required.',
            'slug.required'                  => 'The slug field is required.',
            'slug.unique'                    => 'The slug has already been taken.',
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
            'country_id'            => 'Country Name',
            'name'                  => 'Name',
            'slug'                  => 'Slug',
        ];
    }
}
