<?php

namespace App\Http\Controllers\Rfq;

use Illuminate\Support\Str;
use App\Http\Controllers\Controller;
use App\Http\Requests\RfqProductRequest;
use App\Models\Admin\Brand;
use App\Models\Admin\Category;
use App\Models\Admin\Product;
use App\Models\Rfq\Rfq;
use App\Models\Rfq\RfqProduct;

class RfqProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.pages.rfqProduct.index', [
            'rfqProducts' => RfqProduct::get(),
            'rfq_id'      => Rfq::get(),
            'product_id'  => Product::get(),
            // 'solution_id' => Solution::get(),
            'category_id' => Category::get(),
            'brand_id'    => Brand::get(),
        ]);
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
    public function store(RfqProductRequest $request)
    {
        RfqProduct::create([
            'rfq_id'         => $request->rfq_id,
            'product_id'     => $request->product_id,
            'solution_id'    => $request->solution_id,
            'category_id'    => $request->category_id,
            'brand_id'       => $request->brand_id,
            'name'           => $request->name,
            'qty'            => $request->qty,
            'unit_price'     => $request->unit_price,
            'discount'       => $request->discount,
            'discount_price' => $request->discount_price,
            'total_price'    => $request->total_price,
            'sub_total'      => $request->sub_total,
            'tax'            => $request->tax,
            'tax_price'      => $request->tax_price,
            'vat'            => $request->vat,
            'vat_price'      => $request->vat_price,
            'grand_total'    => $request->grand_total,
            'product_des'    => $request->product_des,
        ]);
        return redirect()->back()->with('success', 'Data has been saved successfully!');
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
    public function update(RfqProductRequest $request, $id)
    {
        $rfqProduct = RfqProduct::find($id);

        $rfqProduct->update([
            'rfq_id'         => $request->rfq_id,
            'product_id'     => $request->product_id,
            'solution_id'    => $request->solution_id,
            'category_id'    => $request->category_id,
            'brand_id'       => $request->brand_id,
            'name'           => $request->name,
            'qty'            => $request->qty,
            'unit_price'     => $request->unit_price,
            'discount'       => $request->discount,
            'discount_price' => $request->discount_price,
            'total_price'    => $request->total_price,
            'sub_total'      => $request->sub_total,
            'tax'            => $request->tax,
            'tax_price'      => $request->tax_price,
            'vat'            => $request->vat,
            'vat_price'      => $request->vat_price,
            'grand_total'    => $request->grand_total,
            'product_des'    => $request->product_des,
        ]);
        return redirect()->back()->with('success', 'Data has been saved successfully!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        RfqProduct::find($id)->delete();
    }
}
