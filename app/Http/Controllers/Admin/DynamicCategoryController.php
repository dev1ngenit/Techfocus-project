<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\DynamicCategoryRequest;
use App\Repositories\Interfaces\DynamicCategoryRepositoryInterface;

class DynamicCategoryController extends Controller
{
    public function __construct(
        private DynamicCategoryRepositoryInterface $dynamicCategoryRepository
    ) {
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.pages.dynamicCategory.index', [
            'dynamicCategories' => $this->dynamicCategoryRepository->allDynamicCategory(),
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(DynamicCategoryRequest $request)
    {
        $this->dynamicCategoryRepository->storeDynamicCategory($request->only('parent_id', 'name', 'type', 'status'));

        return redirect()->back()->with('success', 'Data has been saved successfully!');
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
        $this->dynamicCategoryRepository->updateDynamicCategory($request->only('parent_id', 'name', 'type', 'status'), $id);

        return redirect()->back()->with('success', 'Data has been updated successfully!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $this->dynamicCategoryRepository->destroyDynamicCategory($id);
    }
}
