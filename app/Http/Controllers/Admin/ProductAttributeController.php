<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Support\Str;
use App\Http\Controllers\Controller;
use App\Http\Requests\ProductAttributeRequest;
use App\Repositories\Interfaces\ProductAttributeRepositoryInterface;

class ProductAttributeController extends Controller
{
    private $productAttributeRepository;

    public function __construct(ProductAttributeRepositoryInterface $productAttributeRepository)
    {
        $this->productAttributeRepository = $productAttributeRepository;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = [
            'productAttributes' => $this->productAttributeRepository->allProductAttribute(),
        ];
        return view('admin.pages.productAttribute.index', $data);
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
    public function store(ProductAttributeRequest $request)
    {
        $data = [
            'name'       => $request->name,
            'slug'       => Str::slug($request->name),
            'values'     => json_encode($request->values),
        ];
        $this->productAttributeRepository->storeProductAttribute($data);

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
    public function update(ProductAttributeRequest $request, $id)
    {
        $data = [
            'name'       => $request->name,
            'slug'       => Str::slug($request->name),
            'values'     => json_encode($request->values),
        ];

        $this->productAttributeRepository->updateProductAttribute($data, $id);

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
        $this->productAttributeRepository->destroyProductAttribute($id);
    }
}
