<?php

namespace App\Http\Controllers\Admin;

use App\Models\Admin\Brand;
use Illuminate\Support\Str;
use App\Models\Admin\Banner;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\BannerRequest;
use App\Models\Admin\Brand;
use App\Models\Admin\Category;
use App\Models\Admin\Industry;
use App\Models\Admin\NewsTrend;
use App\Models\Admin\Product;
use App\Models\Admin\SolutionDetail;
use Illuminate\Support\Facades\File;

class BannerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.pages.banner.index', [
            'banners' => Banner::get(),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.pages.banner.create', [
            'brands'     => Brand::get(['id', 'name']),
            'categories' => Category::get(['id', 'name']),
            'products'   => Product::get(['id', 'name']),
            'solutions'  => SolutionDetail::get(['id', 'name']),
            'industries' => Industry::get(['id', 'name']),
            'contents'   => NewsTrend::get(['id', 'name']),
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(BannerRequest $request)
    {
        $mainFileBannerOne = $request->file('banner_one_image');
        $mainFileBannerTwo = $request->file('banner_two_image');
        $mainFileBannerThree = $request->file('banner_three_image');

        $mainFileMetaImage = $request->file('meta_image');

        $filePathBannerOne = storage_path('app/public/banner/one/');
        $filePathBannerTwo = storage_path('app/public/banner/two/');
        $filePathBannerThree = storage_path('app/public/banner/three/');

        $filePathMetaImage  = storage_path('app/public/banner/meta-image/');

        if (!empty($mainFileBannerOne)) {
            $globalFunBannerOne = customUpload($mainFileBannerOne, $filePathBannerOne);
        } else {
            $globalFunBannerOne = ['status' => 0];
        }
        if (!empty($mainFileBannerTwo)) {
            $globalFunBannerTwo = customUpload($mainFileBannerTwo, $filePathBannerTwo);
        } else {
            $globalFunBannerTwo = ['status' => 0];
        }
        if (!empty($mainFileBannerThree)) {
            $globalFunBannerThree = customUpload($mainFileBannerThree, $filePathBannerThree);
        } else {
            $globalFunBannerThree = ['status' => 0];
        }
        if (!empty($mainFileMetaImage)) {
            $globalFunMetaImage = customUpload($mainFileMetaImage, $filePathMetaImage);
        } else {
            $globalFunMetaImage = ['status' => 0];
        }

        Banner::create([
            'category'           => $request->category,
            'brand_id'           => $request->brand_id,
            'category_id'        => $request->category_id,
            'product_id'         => $request->product_id,
            'solution_id'        => $request->solution_id,
            'industry_id'        => $request->industry_id,
            'content_id'         => $request->content_id,
            'page_name'          => $request->page_name,
            'banner_one_name'    => $request->banner_one_name,
            'banner_two_name'    => $request->banner_two_name,
            'banner_three_name'  => $request->banner_three_name,
            'banner_one_slug'    => $request->banner_one_slug,
            'banner_two_slug'    => $request->banner_two_slug,
            'banner_three_slug'  => $request->banner_three_slug,
            'banner_one_image'   => $globalFunBannerOne['status']   == 1 ? $globalFunBannerOne['file_name']  : null,
            'banner_two_image'   => $globalFunBannerTwo['status']   == 1 ? $globalFunBannerTwo['file_name']  : null,
            'banner_three_image' => $globalFunBannerThree['status'] == 1 ? $globalFunBannerThree['file_name'] : null,
            'banner_one_link'    => $request->banner_one_link,
            'banner_two_link'    => $request->banner_two_link,
            'banner_three_link'  => $request->banner_three_link,
            'meta_title'         => $request->meta_title,
            'meta_description'   => $request->meta_description,
            'meta_tags'          => $request->meta_tags,
            'meta_image'         => $globalFunMetaImage['status']   == 1 ? $globalFunMetaImage['file_name']  : null,
            'status'             => $request->status,
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
        return view('admin.pages.banner.edit');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $banner = Banner::find($id);

        $mainFileBannerOne = $request->file('banner_one_image');
        $mainFileBannerTwo = $request->file('banner_two_image');
        $mainFileBannerThree = $request->file('banner_three_image');

        $mainFileMetaImage = $request->file('meta_image');

        $filePathBannerOne = storage_path('app/public/banner/one/');
        $filePathBannerTwo = storage_path('app/public/banner/two/');
        $filePathBannerThree = storage_path('app/public/banner/three/');

        $filePathMetaImage  = storage_path('app/public/banner/meta-image/');

        if (!empty($mainFileBannerOne)) {
            $globalFunBannerOne = customUpload($mainFileBannerOne, $filePathBannerOne);
            $paths = [
                storage_path("app/public/banner/one/{$banner->banner_one_image}"),
            ];
            foreach ($paths as $path) {
                if (File::exists($path)) {
                    File::delete($path);
                }
            }
        } else {
            $globalFunBannerOne = ['status' => 0];
        }
        if (!empty($mainFileBannerTwo)) {
            $globalFunBannerTwo = customUpload($mainFileBannerTwo, $filePathBannerTwo);
            $paths = [
                storage_path("app/public/banner/two/{$banner->banner_two_image}"),
            ];
            foreach ($paths as $path) {
                if (File::exists($path)) {
                    File::delete($path);
                }
            }
        } else {
            $globalFunBannerTwo = ['status' => 0];
        }
        if (!empty($mainFileBannerThree)) {
            $globalFunBannerThree = customUpload($mainFileBannerThree, $filePathBannerThree);
            $paths = [
                storage_path("app/public/banner/three/{$banner->banner_three_image}"),
            ];
            foreach ($paths as $path) {
                if (File::exists($path)) {
                    File::delete($path);
                }
            }
        } else {
            $globalFunBannerThree = ['status' => 0];
        }
        if (!empty($mainFileMetaImage)) {
            $globalFunMetaImage = customUpload($mainFileMetaImage, $filePathMetaImage);
            $paths = [
                storage_path("app/public/banner/meta-image/{$banner->meta_image}"),
            ];
            foreach ($paths as $path) {
                if (File::exists($path)) {
                    File::delete($path);
                }
            }
        } else {
            $globalFunMetaImage = ['status' => 0];
        }

        $banner->update([
            'category'           => $request->category,
            'brand_id'           => $request->brand_id,
            'category_id'        => $request->category_id,
            'product_id'         => $request->product_id,
            'solution_id'        => $request->solution_id,
            'industry_id'        => $request->industry_id,
            'content_id'         => $request->content_id,
            'page_name'          => $request->page_name,
            'banner_one_name'    => $request->banner_one_name,
            'banner_two_name'    => $request->banner_two_name,
            'banner_three_name'  => $request->banner_three_name,
            'banner_one_slug'    => $request->banner_one_slug,
            'banner_two_slug'    => $request->banner_two_slug,
            'banner_three_slug'  => $request->banner_three_slug,
            'banner_one_image'   => $globalFunBannerOne['status']   == 1 ? $globalFunBannerOne['file_name']  :  $banner->banner_one_image,
            'banner_two_image'   => $globalFunBannerTwo['status']   == 1 ? $globalFunBannerTwo['file_name']  :  $banner->banner_two_image,
            'banner_three_image' => $globalFunBannerThree['status'] == 1 ? $globalFunBannerThree['file_name'] :  $banner->banner_three_image,
            'banner_one_link'    => $request->banner_one_link,
            'banner_two_link'    => $request->banner_two_link,
            'banner_three_link'  => $request->banner_three_link,
            'meta_title'         => $request->meta_title,
            'meta_description'   => $request->meta_description,
            'meta_tags'          => $request->meta_tags,
            'meta_image'         => $globalFunMetaImage['status']   == 1 ? $globalFunMetaImage['file_name']  :  $banner->meta_image,
            'status'             => $request->status,
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
        $banner = Banner::find($id);

        $paths = [
            storage_path("app/public/banner/one/{$banner->banner_one_image}"),
            storage_path("app/public/banner/two/{$banner->banner_two_image}"),
            storage_path("app/public/banner/three/{$banner->banner_three_image}"),
            storage_path("app/public/banner/meta-image/{$banner->meta_image}"),
        ];

        foreach ($paths as $path) {
            if (File::exists($path)) {
                File::delete($path);
            }
        }
        $banner->delete();
    }
}
