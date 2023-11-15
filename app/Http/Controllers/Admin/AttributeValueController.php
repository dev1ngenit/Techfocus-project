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
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // dd($request->all());
        $validator = Validator::make(
            $request->all(),
            [
                'name.*' => 'required', // Adjust validation rules as needed
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
                        'name' => $name,
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

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
