<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Support\Str;
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
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(DynamicCategoryRequest $request)
    {
        $data = [
            'parent_id'  => $request->parent_id,
            'name'       => $request->name,
            'type'       => $request->type,
            'status'     => $request->status,
        ];
        $this->dynamicCategoryRepository->storeDynamicCategory($data);

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
        $data = [
            'parent_id'  => $request->parent_id,
            'name'       => $request->name,
            'type'       => $request->type,
            'status'     => $request->status,
        ];

        $this->dynamicCategoryRepository->updateDynamicCategory($data, $id);

        return redirect()->back()->with('success', 'Data has been Updated successfully!');
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
