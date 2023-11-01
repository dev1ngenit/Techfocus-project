<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Support\Str;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\File;
use App\Http\Requests\IndustryRequest;
use App\Repositories\Interfaces\IndustryRepositoryInterface;

class IndustryController extends Controller
{
    private $industryRepository;

    public function __construct(IndustryRepositoryInterface $industryRepository)
    {
        $this->industryRepository = $industryRepository;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['industries'] =  $this->industryRepository->allIndustry();
        return view('admin.pages.industry.index', $data);
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
    public function store(IndustryRequest $request)
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
            'parent_id'   => $request->parent_id,
            'name'         => $request->name,
            'slug'         => Str::slug($request->name),
            'description'  => $request->description,
            'image'        => $globalFunImage['status'] == 1 ? $globalFunImage['file_name'] : null,
            'logo'         => $globalFunLogo['status'] == 1 ? $globalFunLogo['file_name'] : null,
            'website_url'  => $request->website_url,
        ];
        $this->industryRepository->storeIndustry($data);

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
    public function update(IndustryRequest $request, $id)
    {
        $industry =  $this->industryRepository->findIndustry($id);

        $mainFile = $request->file('image');
        $logoFile = $request->file('logo');
        $filePath = storage_path('app/public/');

        if (!empty($mainFile)) {
            $globalFunImage = customUpload($mainFile, $filePath, 44, 44);
            $paths = [
                storage_path("app/public/{$industry->image}"),
                storage_path("app/public/requestImg/{$industry->image}")
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
                storage_path("app/public/{$industry->logo}"),
                storage_path("app/public/requestImg/{$industry->logo}")
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
            'parent_id'   => $request->parent_id,
            'name'         => $request->name,
            'slug'         => Str::slug($request->name),
            'description'  => $request->description,
            'image'        => $globalFunImage['status'] == 1 ? $globalFunImage['file_name'] : $industry->image,
            'logo'         => $globalFunLogo['status'] == 1 ? $globalFunLogo['file_name'] : $industry->logo,
            'website_url'  => $request->website_url,
        ];

        $this->industryRepository->updateIndustry($data, $id);

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
        $industry =  $this->industryRepository->findIndustry($id);

        $paths = [
            storage_path('app/public/') . $industry->image,
            storage_path('app/public/requestImg/') . $industry->image,

            storage_path('app/public/') . $industry->logo,
            storage_path('app/public/requestImg/') . $industry->logo,
        ];

        foreach ($paths as $path) {
            if (File::exists($path)) {
                File::delete($path);
            }
        }
        $this->industryRepository->destroyIndustry($id);
    }
}
