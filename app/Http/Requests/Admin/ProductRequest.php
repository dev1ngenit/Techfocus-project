<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Contracts\Validation\Validator;

class ProductRequest extends FormRequest
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
        $product = $this->route('product'); // Directly access the brand ID from the route parameter.

        return [
            // 'country_id'                => 'nullable|exists:countries,id',
            // 'company_id'                => 'nullable|exists:companies,id',
            'ref_code'                  => 'nullable|string|max:50',
            'name'                      => 'required|string|unique:products,name,' . $product . '|max:255',
            'sku_code'                  => 'nullable|string|max:50|unique:products,sku_code,' . $product,
            'mf_code'                   => 'nullable|string|max:50|unique:products,mf_code,' . $product,
            'product_code'              => 'nullable|string|max:50',
            'tags'                      => 'nullable',
            'color_id'                  => 'nullable|array',
            'short_desc'                => 'nullable|string',
            'overview'                  => 'nullable|string',
            'specification'             => 'nullable|string',
            'accessories'               => 'nullable|string',
            'warranty'                  => 'nullable|string',
            'thumbnail'                 => 'required|image|mimes:png,jpg,jpeg|max:2024',
            'qty'                       => 'nullable',
            'stock'                     => 'nullable|string|max:50',
            'price'                     => 'nullable|numeric',
            'sas_price'                 => 'nullable|numeric',
            'discount'                  => 'nullable|numeric',
            'deal'                      => 'nullable|string|max:50',
            'industry'                  => 'nullable|array',
            'solution'                  => 'nullable|array',
            'refurbished'               => 'nullable|in:0,1',
            'price_status'              => 'required|in:rfq,price,offer_price,starting_price',
            'rfq'                       => 'nullable|in:0,1',
            'product_type'              => 'required|string|max:50',
            'category_id'               => 'nullable|exists:categories,id',
            'brand_id'                  => 'nullable|exists:brands,id',
            // 'status'                    => 'required|in:active,inactive',
            // 'product_status'            => 'required|in:sourcing,product',
            'source_one_price'          => 'nullable|numeric',
            'source_two_price'          => 'nullable|numeric',
            'source_one_name'           => 'nullable|string|max:255',
            'source_two_name'           => 'nullable|string|max:255',
            'competitor_one_price'      => 'nullable|numeric',
            'competitor_two_price'      => 'nullable|numeric',
            'competitor_one_name'       => 'nullable|string|max:255',
            'competitor_two_name'       => 'nullable|string|max:255',
            'source_one_approval'       => 'nullable|in:0,1',
            'source_two_approval'       => 'nullable|in:0,1',
            'notification_days'         => 'nullable|string|max:50',
            'create_date'               => 'nullable|date',
            'solid_source'              => 'nullable|in:yes,no',
            'direct_principal'          => 'nullable|in:yes,no',
            'agreement'                 => 'nullable|in:yes,no',
            'source_type'               => 'nullable|string|max:50',
            'source_contact'            => 'nullable|string',
            'action_status'             => 'nullable|string|max:50',
            'added_by'                  => 'nullable|string|max:255',
            'source_one_estimate_time'  => 'nullable|string|max:60',
            'source_one_principal_time' => 'nullable|string|max:60',
            'source_one_shipping_time'  => 'nullable|string|max:60',
            'source_one_location'       => 'nullable|string|max:255',
            'source_one_country'        => 'nullable|string|max:255',
            'source_two_estimate_time'  => 'nullable|string|max:60',
            'source_two_principal_time' => 'nullable|string|max:60',
            'source_two_shipping_time'  => 'nullable|string|max:60',
            'source_two_location'       => 'nullable|string|max:255',
            'source_two_country'        => 'nullable|string|max:255',
            'rejection_note'            => 'nullable|string',
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
            'country_id.exists'                 => 'The selected: attribute is invalid.',
            'company_id.exists'                 => 'The selected :attribute is invalid.',
            'sku_code.unique'                   => 'The :attribute has already been taken.',
            'mf_code.unique'                    => 'The :attribute has already been taken.',
            'name.required'                     => 'The :attribute field is required.',
            'name.max'                          => 'The :attribute may not be greater than :max characters.',
            'sku_code.max'                      => 'The :attribute may not be greater than :max characters.',
            'mf_code.max'                       => 'The :attribute may not be greater than :max characters.',
            'product_code.max'                  => 'The :attribute may not be greater than :max characters.',
            'tags.array'                         => 'The :attribute must be a valid JSON string.',
            'color_id.array'                     => 'The :attribute must be a valid JSON string.',
            'short_desc.max'                    => 'The :attribute may not be greater than :max characters.',
            'overview.max'                      => 'The :attribute may not be greater than :max characters.',
            'specification.max'                 => 'The :attribute may not be greater than :max characters.',
            'accessories.max'                   => 'The :attribute may not be greater than :max characters.',
            'warranty.max'                      => 'The :attribute may not be greater than :max characters.',
            'thumbnail.max'                     => 'The :attribute may not be greater than :max KB.',
            'qty.required'                      => 'The :attribute field is required.',
            'qty.min'                           => 'The :attribute must be at least :min.',
            'price.numeric'                     => 'The :attribute must be a number.',
            'sas_price.numeric'                 => 'The :attribute must be a number.',
            'discount.numeric'                  => 'The :attribute must be a number.',
            'deal.max'                          => 'The :attribute may not be greater than :max characters.',
            'industry.array'                     => 'The :attribute must be a valid JSON string.',
            'solution.array'                     => 'The :attribute must be a valid JSON string.',
            'refurbished.required'              => 'The :attribute field is required.',
            'refurbished.in'                    => 'The selected :attribute is invalid.',
            'price_status.required'             => 'The :attribute field is required.',
            'price_status.in'                   => 'The selected :attribute is invalid.',
            'rfq.required'                      => 'The :attribute field is required.',
            'rfq.in'                            => 'The selected :attribute is invalid.',
            'product_type.required'             => 'The :attribute field is required.',
            'product_type.max'                  => 'The :attribute may not be greater than :max characters.',
            'category_id.exists'                => 'The selected :attribute is invalid.',
            'brand_id.exists'                   => 'The selected :attribute is invalid.',
            'status.required'                   => 'The :attribute field is required.',
            'status.in'                         => 'The selected :attribute is invalid.',
            'product_status.required'           => 'The :attribute field is required.',
            'product_status.in'                 => 'The selected :attribute is invalid.',
            'source_one_price.numeric'          => 'The :attribute must be a number.',
            'source_two_price.numeric'          => 'The :attribute must be a number.',
            'source_one_name.max'               => 'The :attribute may not be greater than :max characters.',
            'source_two_name.max'               => 'The :attribute may not be greater than :max characters.',
            'competitor_one_price.numeric'      => 'The :attribute must be a number.',
            'competitor_two_price.numeric'      => 'The :attribute must be a number.',
            'competitor_one_name.max'           => 'The :attribute may not be greater than :max characters.',
            'competitor_two_name.max'           => 'The :attribute may not be greater than :max characters.',
            'source_one_approval.in'            => 'The selected :attribute is invalid.',
            'source_two_approval.in'            => 'The selected :attribute is invalid.',
            'notification_days.max'             => 'The :attribute may not be greater than :max characters.',
            'create_date.date'                  => 'The :attribute must be a valid date.',
            'solid_source.in'                   => 'The selected :attribute is invalid.',
            'direct_principal.in'               => 'The selected :attribute is invalid.',
            'agreement.in'                      => 'The selected :attribute is invalid.',
            'source_type.max'                   => 'The :attribute may not be greater than :max characters.',
            'source_contact.max'                => 'The :attribute may not be greater than :max characters.',
            'action_status.max'                 => 'The :attribute may not be greater than :max characters.',
            'added_by.max'                      => 'The :attribute may not be greater than :max characters.',
            'source_one_estimate_time.max'      => 'The :attribute may not be greater than :max characters.',
            'source_one_principal_time.max'     => 'The :attribute may not be greater than :max characters.',
            'source_one_shipping_time.max'      => 'The :attribute may not be greater than :max characters.',
            'source_one_location.max'           => 'The :attribute may not be greater than :max characters.',
            'source_one_country.max'            => 'The :attribute may not be greater than :max characters.',
            'source_two_estimate_time.max'      => 'The :attribute may not be greater than :max characters.',
            'source_two_principal_time.max'     => 'The :attribute may not be greater than :max characters.',
            'source_two_shipping_time.max'      => 'The :attribute may not be greater than :max characters.',
            'source_two_location.max'           => 'The :attribute may not be greater than :max characters.',
            'source_two_country.max'            => 'The :attribute may not be greater than :max characters.',
            'rejection_note.max'                => 'The :attribute may not be greater than :max characters.',
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
            'country_id'                => 'Country',
            'company_id'                => 'Company',
            'ref_code'                  => 'Reference Code',
            'name'                      => 'Product Name',
            'slug'                      => 'Slug',
            'sku_code'                  => 'SKU Code',
            'mf_code'                   => 'Manufacturer Code',
            'product_code'              => 'Product Code',
            'tags'                      => 'Tags',
            'attribute_id'              => 'Attributes',
            'color_id'                  => 'Color',
            'short_desc'                => 'Short Description',
            'overview'                  => 'Overview',
            'specification'             => 'Specification',
            'accessories'               => 'Accessories',
            'warranty'                  => 'Warranty',
            'thumbnail'                 => 'Thumbnail',
            'qty'                       => 'Quantity',
            'stock'                     => 'Stock',
            'price'                     => 'Price',
            'sas_price'                 => 'SAS Price',
            'discount'                  => 'Discount',
            'deal'                      => 'Deal',
            'industry'                  => 'Industry',
            'solution'                  => 'Solution',
            'refurbished'               => 'Refurbished',
            'price_status'              => 'Price Status',
            'rfq'                       => 'RFQ',
            'product_type'              => 'Product Type',
            'category_id'               => 'Category',
            'brand_id'                  => 'Brand',
            'status'                    => 'Status',
            'product_status'            => 'Product Status',
            'source_one_price'          => 'Source One Price',
            'source_two_price'          => 'Source Two Price',
            'source_one_name'           => 'Source One Name',
            'source_two_name'           => 'Source Two Name',
            'source_one_link'           => 'Source One Link',
            'source_two_link'           => 'Source Two Link',
            'competitor_one_price'      => 'Competitor One Price',
            'competitor_two_price'      => 'Competitor Two Price',
            'competitor_one_name'       => 'Competitor One Name',
            'competitor_two_name'       => 'Competitor Two Name',
            'competitor_one_link'       => 'Competitor One Link',
            'competitor_two_link'       => 'Competitor Two Link',
            'source_one_approval'       => 'Source One Approval',
            'source_two_approval'       => 'Source Two Approval',
            'notification_days'         => 'Notification Days',
            'create_date'               => 'Create Date',
            'solid_source'              => 'Solid Source',
            'direct_principal'          => 'Direct Principal',
            'agreement'                 => 'Agreement',
            'source_type'               => 'Source Type',
            'source_contact'            => 'Source Contact',
            'action_status'             => 'Action Status',
            'added_by'                  => 'Added By',
            'source_one_estimate_time'  => 'Source One Estimate Time',
            'source_one_principal_time' => 'Source One Principal Time',
            'source_one_shipping_time'  => 'Source One Shipping Time',
            'source_one_location'       => 'Source One Location',
            'source_one_country'        => 'Source One Country',
            'source_two_estimate_time'  => 'Source Two Estimate Time',
            'source_two_principal_time' => 'Source Two Principal Time',
            'source_two_shipping_time'  => 'Source Two Shipping Time',
            'source_two_location'       => 'Source Two Location',
            'source_two_country'        => 'Source Two Country',
            'rejection_note'            => 'Rejection Note',
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
