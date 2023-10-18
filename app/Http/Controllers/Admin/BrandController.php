<?php

namespace App\Http\Controllers\Admin;

use App\Models\Admin\Brand;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Http\Requests\BrandRequest;
use App\Http\Controllers\Controller;
use App\Models\Country;

class BrandController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['brands'] = Brand::latest()->get();
        $data['countries'] = Country::latest()->get();
        return view('admin.pages.brand.index', $data);
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
        $logoFile = $request->file('logo');  // Handle logo file
        $filePath = storage_path('app/public/');
        if (!empty($mainFile)) {
            $globalFunImage = customUpload($mainFile, $filePath,   44, 44);
        } else {
            $globalFunImage = ['status' => 0];
        }
        if (!empty($logoFile)) {  // Handle logo file upload
            $globalFunLogo = customUpload($logoFile, $filePath,   44, 44);
        } else {
            $globalFunLogo = ['status' => 0];
        }

        Brand::create([
            'country_id'   => $request->country_id,
            'name'         => $request->name,
            'slug'         => Str::slug($request->name),
            'description'  => $request->description,
            'image'        => $globalFunImage['status'] == 1 ? $globalFunImage['file_name'] : null,
            'logo'         => $globalFunLogo['status'] == 1 ? $globalFunLogo['file_name'] : null,  // Handle logo filename
            'website_url'  => $request->website_url,  // Handle website_url
        ]);

        // return redirect()->route('brand.index')->with('success', 'Data added Successfully');
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
    public function update(BrandRequest $request, $id)
    {
        $brand = Brand::findOrFail($id);

        $mainFile = $request->file('image');
        $filePath = storage_path('app/public/');

        if (!empty($mainFile)) {
            $globalFunImage = customUpload($mainFile, $filePath, 44, 44);

            $paths = [
                storage_path("app/public/{$brand->image}"),
                storage_path("app/public/requestImg/{$brand->image}")
            ];
            foreach ($paths as $path) {
                if (File::exists($path)) {
                    File::delete($path);
                }
            }
        } else {
            $globalFunImage = ['status' => 0];
        }

        $brand->update([
            'name'        => $request->name,
            'slug'        => Str::slug($request->name),
            'description' => $request->description,
            'image'       => $globalFunImage['status'] == 1 ? $mainFile->hashName() : $brand->image,
        ]);

        toastr()->success('Data has been saved successfully!');

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
        $brand = Brand::findOrFail($id);
        $paths = [
            storage_path('app/public/') . $brand->image,
            storage_path('app/public/requestImg/') . $brand->image
        ];

        foreach ($paths as $path) {
            if (File::exists($path)) {
                File::delete($path);
            }
        }
        $brand->forceDelete();
    }
}
