<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Support\Str;
use App\Http\Requests\BrandRequest;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Session;
use App\Repositories\Interfaces\BrandRepositoryInterface;

class BrandController extends Controller
{
    private $brandRepository;

    public function __construct(BrandRepositoryInterface $brandRepository)
    {
        $this->brandRepository = $brandRepository;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.pages.brand.index', [
            'brands' =>  $this->brandRepository->allBrand(),
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
    public function store(BrandRequest $request)
    {

        $mainFile = $request->file('image');
        $logoFile = $request->file('logo');

        $filePath_image = storage_path('app/public/brand/image/');
        $filePath_logo = storage_path('app/public/brand/logo/');

        if (!empty($mainFile)) {
            $globalFunImage = customUpload($mainFile, $filePath_image,   44, 44);
        } else {
            $globalFunImage = ['status' => 0];
        }
        if (!empty($logoFile)) {
            $globalFunLogo = customUpload($logoFile, $filePath_logo,   44, 44);
        } else {
            $globalFunLogo = ['status' => 0];
        }

        $data = [
            'country_id'   => $request->country_id,
            'name'         => $request->name,
            'description'  => $request->description,
            'image'        => $globalFunImage['status'] == 1 ? $globalFunImage['file_name'] : null,
            'logo'         => $globalFunLogo['status'] == 1 ? $globalFunLogo['file_name'] : null,
            'website_url'  => $request->website_url,
            'category'     => $request->category,
        ];
        $this->brandRepository->storeBrand($data);
        Session::flash('success', ['message' => 'Row is created successfully']);
        // toastr()->success('Data has been saved successfully!');
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
    public function update(BrandRequest $request, $id)
    {
        $brand =  $this->brandRepository->findBrand($id);

        $mainFile = $request->file('image');
        $logoFile = $request->file('logo');
        $filePath_image = storage_path('app/public/brand/image/');
        $filePath_logo = storage_path('app/public/brand/logo/');

        if (!empty($mainFile)) {
            $globalFunImage = customUpload($mainFile, $filePath_image, 44, 44);
            $paths = [
                storage_path("app/public/brand/image/{$brand->image}"),
                storage_path("app/public/brand/image/requestImg/{$brand->image}")
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
            $globalFunLogo = customUpload($logoFile, $filePath_logo, 44, 44);
            $paths = [
                storage_path("app/public/brand/logo/{$brand->logo}"),
                storage_path("app/public/brand/logo/requestImg/{$brand->logo}")
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
            'country_id'   => $request->country_id,
            'name'         => $request->name,
            'description'  => $request->description,
            'image'        => $globalFunImage['status'] == 1 ? $globalFunImage['file_name'] : $brand->image,
            'logo'         => $globalFunLogo['status'] == 1 ? $globalFunLogo['file_name'] : $brand->logo,
            'website_url'  => $request->website_url,
            'category'     => $request->category,
        ];

        $this->brandRepository->updateBrand($data, $id);

        // toastr()->success('Data has been updated successfully!');
        return redirect()->route('admin.brand.index')->with('message', 'Data updated Successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $brand =  $this->brandRepository->findBrand($id);

        $paths = [
            storage_path("app/public/brand/image/{$brand->image}"),
            storage_path("app/public/brand/image/requestImg/{$brand->image}"),
            storage_path("app/public/brand/logo/{$brand->logo}"),
            storage_path("app/public/brand/logo/requestImg/{$brand->logo}"),
        ];

        foreach ($paths as $path) {
            if (File::exists($path)) {
                File::delete($path);
            }
        }
        $this->brandRepository->destroyBrand($id);
    }
}
