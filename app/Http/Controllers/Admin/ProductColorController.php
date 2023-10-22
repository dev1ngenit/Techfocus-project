<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Models\Admin\ProductColor;
use App\Http\Controllers\Controller;
use App\Http\Requests\ProductColorRequest;

class ProductColorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = [
            'productColors'    => ProductColor::latest()->get(),
        ];
        return view('admin.pages.productColor.index', $data);
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
    public function store(ProductColorRequest $request)
    {
        ProductColor::create([
            'country_id' => $request->country_id,
            'name'       => $request->name,
            'slug'       => Str::slug($request->name),
            'color_code' => $request->color_code,
        ]);

        toastr()->success('Data has been saved successfully!');
        return redirect()->back();
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
    public function update(ProductColorRequest $request, $id)
    {
        $productColor = ProductColor::findOrFail($id);

        $productColor->update([
            'country_id' => $request->country_id,
            'name'       => $request->name,
            'slug'       => Str::slug($request->name),
            'color_code' => $request->color_code,
        ]);

        toastr()->success('Data has been updated successfully!');
        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $productColor = ProductColor::findOrFail($id);

        $productColor->delete();
    }
}
