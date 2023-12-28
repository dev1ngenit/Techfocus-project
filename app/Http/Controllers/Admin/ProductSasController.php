<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Models\Admin\Product;
use App\Http\Controllers\Controller;
use App\Http\Requests\ProductSasRequest;
use App\Models\Admin\ProductSas;

class ProductSasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.pages.product-sas.index', [
            'ProductSases' => ProductSas::get(),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ProductSasRequest $request)
    {
        ProductSas::create([
            'product_id'          => $request->product_id,
            'ref_code'            => generateRefUniqueCode(),
            'create'              => $request->create,
            'item_name'           => $request->item_name,
            'cog_price'           => $request->cog_price,
            'sales_price'         => $request->sales_price,
            'bank_charge'         => $request->bank_charge,
            'customs'             => $request->customs,
            'tax'                 => $request->tax,
            'utility_cost'        => $request->utility_cost,
            'shiping_cost'        => $request->shiping_cost,
            'sales_comission'     => $request->sales_comission,
            'liability'           => $request->liability,
            'regular_discounts'   => $request->regular_discounts,
            'rebates'             => $request->rebates,
            'capital_share'       => $request->capital_share,
            'management_cost'     => $request->management_cost,
            'net_profit'          => $request->net_profit,
            'gross_profit'        => $request->gross_profit,
            'net_profit_amount'   => $request->net_profit_amount,
            'gross_profit_amount' => $request->gross_profit_amount,
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
        return view('admin.pages.product-sas.create', [
            'product' => Product::where('slug' , $id)->firstOrFail(),
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     * 
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        return view('admin.pages.product-sas.edit', [
            'ProductSas' => ProductSas::find($id),
            'products' => Product::get(['id', 'name']),
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(ProductSasRequest $request, $id)
    {
        $productSas = ProductSas::find($id);

        $productSas->update([
            'product_id'          => $request->product_id,
            // 'ref_code'            =>  $productSas->generateRefUniqueCode(),
            'create'              => $request->create,
            'item_name'           => $request->item_name,
            'cog_price'           => $request->cog_price,
            'sales_price'         => $request->sales_price,
            'bank_charge'         => $request->bank_charge,
            'customs'             => $request->customs,
            'tax'                 => $request->tax,
            'utility_cost'        => $request->utility_cost,
            'shiping_cost'        => $request->shiping_cost,
            'sales_comission'     => $request->sales_comission,
            'liability'           => $request->liability,
            'regular_discounts'   => $request->regular_discounts,
            'rebates'             => $request->rebates,
            'capital_share'       => $request->capital_share,
            'management_cost'     => $request->management_cost,
            'net_profit'          => $request->net_profit,
            'gross_profit'        => $request->gross_profit,
            'net_profit_amount'   => $request->net_profit_amount,
            'gross_profit_amount' => $request->gross_profit_amount,
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
        ProductSas::find($id)->delete();
    }
}
