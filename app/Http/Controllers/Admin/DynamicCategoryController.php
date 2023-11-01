<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\DynamicCategoryRequest;
use App\Repositories\Interfaces\DynamicCategoryRepositoryInterface;

class DynamicCategoryController extends Controller
{
    private $dynamicCategoryRepository;

    public function __construct(DynamicCategoryRepositoryInterface $dynamicCategoryRepository)
    {
        $this->dynamicCategoryRepository = $dynamicCategoryRepository;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.pages.dynamicCategory.index', [
            'dynamicCategories'    => $this->dynamicCategoryRepository->allDynamicCategory(),
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
    public function store(DynamicCategoryRequest $request)
    {
        $data = [
            'company_id' => $request->company_id,
            'parent_id'  => $request->parent_id,
            'name'       => $request->name,
            'slug'       => Str::slug($request->name),
            'type'       => $request->type,
            'status'     => $request->status,
        ];
        $this->dynamicCategoryRepository->storeDynamicCategory($data);

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
    public function update(DynamicCategoryRequest $request, $id)
    {
        $data = [
            'company_id' => $request->company_id,
            'parent_id'  => $request->parent_id,
            'name'       => $request->name,
            'slug'       => Str::slug($request->name),
            'type'       => $request->type,
            'status'     => $request->status,
        ];

        $this->dynamicCategoryRepository->updateDynamicCategory($data, $id);

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
        $this->vatAndTaxRepository->destroyVatAndTax($id);
    }
}
