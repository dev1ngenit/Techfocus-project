<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Admin\AttributeValue;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;

class AttributeValueController extends Controller
{

    public function store(Request $request)
    {
        // dd($request->all());
        $validator = Validator::make(
            $request->all(),
            [
                // 'name.*' => 'required', // Adjust validation rules as needed
                'value.*' => 'required|unique:attribute_values,value',
                'attribute_id' => 'required',
            ],
            [
                'required' => 'The :attribute name must be required',
                'unique'   => 'This :attribute name has already been taken.',
            ],

        );

        $attributeId = $request->input('attribute_id');

        if ($validator->passes()) {
            if ($request->has('name')) {
                // Loop through the submitted data and store each attribute value
                foreach ($request->input('name') as $index => $name) {
                    AttributeValue::create([
                        'attribute_id' => $attributeId,
                        'value' => $request->input('value')[$index],
                    ]);
                }
            }

            Session::flash('success', ['message' => 'Atrribute Value added successfully']);
            return redirect()->back();
        } else {

            Session::flash('error', $validator->errors()->all());
            return redirect()->back();
        }
    }

    public function update(Request $request)
    {
        $id = $request->input('pk');
        $validator = Validator::make(
            $request->all(),
            [
                'value' => 'required|unique:attribute_values,value',
            ],
            [
                'required' => 'The :attribute name must be required',
                'unique'   => 'This :attribute name has already been taken.',
            ]
        );

        if ($validator->passes()) {
            $attributeValue = AttributeValue::findOrFail($id);
            $attributeValue->update([
                'value' => $request->value,
            ]);
            $attributeId = $attributeValue->attribute_id;
            $values = AttributeValue::where('attribute_id', '=', $attributeId)->get();
            return response()->json(['success' => true, 'message' => 'Attribute updated successfully', 'values' => $values, 'attributeId' => $attributeId], 200);
        } else {
            return response()->json(['error' => true, 'errors' => $validator->errors()->all()], 422);
        }
    }



    public function destroy($id)
    {
        $attribute = AttributeValue::findOrFail($id);
        $attribute->delete(); 
    }
}
