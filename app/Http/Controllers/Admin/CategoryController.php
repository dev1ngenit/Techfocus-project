<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Support\Str;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\File;
use App\Http\Requests\CategoryRequest;
use App\Repositories\Interfaces\CategoryRepositoryInterface;

class CategoryController extends Controller
{
    private $categoryRepository;

    public function __construct(CategoryRepositoryInterface $categoryRepository)
    {
        $this->categoryRepository = $categoryRepository;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = [
            'categories'    => $this->categoryRepository->allCategory(),
        ];
        return view('admin.pages.category.index', $data);
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
    public function store(CategoryRequest $request)
    {
        $mainFile = $request->file('image');
        $logoFile = $request->file('logo');
        $filePath = storage_path('app/public/');
        if (!empty($mainFile)) {
            $globalFunImage = customUpload($mainFile, $filePath,   44, 44);
        } else {
            $globalFunImage = ['status' => 0];
        }
        if (!empty($logoFile)) {
            $globalFunLogo = customUpload($logoFile, $filePath,   44, 44);
        } else {
            $globalFunLogo = ['status' => 0];
        }

        $data = [
            'country_id'  => $request->country_id,
            'parent_id'   => $request->parent_id,
            'name'        => $request->name,
            'slug'        => Str::slug($request->name),
            'is_parent'   => $request->is_parent ?? '0',
            'image'       => $globalFunImage['status'] == 1 ? $globalFunImage['file_name'] : null,
            'logo'        => $globalFunLogo['status']  == 1 ? $globalFunLogo['file_name'] : null,
            'description' => $request->description,
        ];
        $this->categoryRepository->storeCategory($data);

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
    public function update(CategoryRequest $request, $id)
    {
        $category =  $this->categoryRepository->findCategory($id);

        $mainFile = $request->file('image');
        $logoFile = $request->file('logo');
        $filePath = storage_path('app/public/');

        if (!empty($mainFile)) {
            $globalFunImage = customUpload($mainFile, $filePath, 44, 44);
            $paths = [
                storage_path("app/public/{$category->image}"),
                storage_path("app/public/requestImg/{$category->image}")
            ];
            foreach ($paths as $path) {
                if (File::exists($path)) {
                    File::delete($path);
                }
            }
        } else {
            $globalFunImage = ['status' => 0];
        }

        if (!empty($logoFile)) {
            $globalFunLogo = customUpload($logoFile, $filePath, 44, 44);
            $paths = [
                storage_path("app/public/{$category->logo}"),
                storage_path("app/public/requestImg/{$category->logo}")
            ];
            foreach ($paths as $path) {
                if (File::exists($path)) {
                    File::delete($path);
                }
            }
        } else {
            $globalFunLogo = ['status' => 0];
        }

        $data = [
            'country_id'  => $request->country_id,
            'parent_id'   => $request->parent_id,
            'name'        => $request->name,
            'slug'        => Str::slug($request->name),
            'is_parent'   => $request->is_parent ?? '0',
            'image'        => $globalFunImage['status'] == 1 ? $globalFunImage['file_name'] : $category->image,
            'logo'         => $globalFunLogo['status'] == 1 ? $globalFunLogo['file_name'] : $category->logo,
            'description' => $request->description,
        ];

        $this->categoryRepository->updateCategory($data, $id);

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
        $category =  $this->categoryRepository->findCategory($id);

        $paths = [
            storage_path('app/public/') . $category->image,
            storage_path('app/public/requestImg/') . $category->image,

            storage_path('app/public/') . $category->logo,
            storage_path('app/public/requestImg/') . $category->logo,
        ];

        foreach ($paths as $path) {
            if (File::exists($path)) {
                File::delete($path);
            }
        }
        $this->categoryRepository->destroyCategory($id);
    }
}
