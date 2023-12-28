<?php

namespace App\Http\Controllers\Admin;

use Carbon\Carbon;
use Illuminate\Http\Request;
use App\Models\Admin\Category;
use App\Models\Admin\NewsTrend;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use App\Models\Admin\SolutionDetail;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;
use App\Http\Requests\NewsTrendRequest;
use App\Repositories\Interfaces\BrandRepositoryInterface;
use App\Repositories\Interfaces\CategoryRepositoryInterface;
use App\Repositories\Interfaces\IndustryRepositoryInterface;
use App\Repositories\Interfaces\NewsTrendRepositoryInterface;

class NewsTrendController extends Controller
{
    private $newsTrendRepository;
    private $categoryRepository;
    private $brandRepository;
    private $industryRepository;
    // private $solutionRepository;

    public function __construct(
        NewsTrendRepositoryInterface $newsTrendRepository,
        CategoryRepositoryInterface $categoryRepository,
        BrandRepositoryInterface $brandRepository,
        IndustryRepositoryInterface $industryRepository,
    ) {
        $this->newsTrendRepository = $newsTrendRepository;
        $this->categoryRepository  = $categoryRepository;
        $this->brandRepository     = $brandRepository;
        $this->industryRepository  = $industryRepository;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.pages.newsTrend.index', [
            'newsTrends' => $this->newsTrendRepository->allNewsTrend(),
        ]);
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.pages.newsTrend.create', [
            'categories' => $this->categoryRepository->allCategory(),
            'brands'     => $this->brandRepository->allBrand(),
            'industries' => $this->industryRepository->allIndustry(),
            'solutions'  => SolutionDetail::latest('id')->get(['id', 'name']),
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(NewsTrendRequest $request)
    {
        $bannerFile    = $request->file('banner_image');
        $thumbnailFile = $request->file('thumbnail_image');
        $sourceFile = $request->file('source_image');
        $filePath      = storage_path('app/public/content/');
        if (!empty($bannerFile)) {
            $globalFunBanner = customUpload($bannerFile, $filePath);
        } else {
            $globalFunBanner = ['status' => 0];
        }
        if (!empty($thumbnailFile)) {
            $globalFunThumbnail = customUpload($thumbnailFile, $filePath);
        } else {
            $globalFunThumbnail = ['status' => 0];
        }
        if (!empty($sourceFile)) {
            $globalFunSource = customUpload($sourceFile, $filePath);
        } else {
            $globalFunSource = ['status' => 0];
        }

        $data = [
            'category_id'            => json_encode($request->category_id),
            'brand_id'               => json_encode($request->brand_id),
            'industry_id'            => json_encode($request->industry_id),
            'solution_id'            => json_encode($request->solution_id),
            'product_id'             => json_encode($request->product_id),
            'featured'               => $request->featured,
            'type'                   => $request->type,
            'badge'                  => $request->badge,
            'title'                  => $request->title,
            'header'                 => $request->header,
            'short_des'              => $request->short_des,
            'long_des'               => $request->long_des,
            'author'                 => $request->author,
            'address'                => $request->address,
            'tags'                   => $request->tags,
            'banner_image'           => $globalFunBanner['status']    == 1 ? $globalFunBanner['file_name']   : null,
            'thumbnail_image'        => $globalFunThumbnail['status'] == 1 ? $globalFunThumbnail['file_name'] : null,
            'source_image'           => $globalFunSource['status']    == 1 ? $globalFunSource['file_name']   : null,
            'additional_button_name' => $request->additional_button_name,
            'additional_url'         => $request->additional_url,
            'source_link'            => $request->source_link,
            'added_by'               => Auth::guard('admin')->user()->id,
            'footer'                 => $request->footer,
            'created_at'             => Carbon::now(),
        ];
        $this->newsTrendRepository->storeNewsTrend($data);

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
        return view('admin.pages.newsTrend.edit', [
            'content'    => NewsTrend::findOrFail($id),
            'brands'     => DB::table('brands')->select('id', 'title')->orderBy('id', 'desc')->get(),
            'categories' => Category::with('children.children.children.children.children.children')->latest('id')->get(),
            'industries' => DB::table('industries')->select('id', 'name')->orderBy('id', 'desc')->get(),
            'solutions'  => DB::table('solution_details')->select('id', 'name')->orderBy('id', 'desc')->get(),
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(NewsTrendRequest $request, $id)
    {
        $newsTrend =  $this->newsTrendRepository->findNewsTrend($id);

        $bannerFile = $request->file('banner_image');
        $thumbnailFile = $request->file('thumbnail_image');
        $sourceFile = $request->file('source_image');
        $filePath = storage_path('app/public/content/');

        if (!empty($bannerFile)) {
            $globalFunBanner = customUpload($bannerFile, $filePath);
            $paths = [
                storage_path("app/public/content/{$newsTrend->banner_image}"),
                storage_path("app/public/content/requestImg/{$newsTrend->banner_image}")
            ];
            foreach ($paths as $path) {
                if (File::exists($path)) {
                    File::delete($path);
                }
            }
        } else {
            $globalFunBanner = ['status' => 0];
        }

        if (!empty($thumbnailFile)) {
            $globalFunThumbnail = customUpload($thumbnailFile, $filePath);
            $paths = [
                storage_path("app/public/content/{$newsTrend->thumbnail_image}"),
                storage_path("app/public/content/requestImg/{$newsTrend->thumbnail_image}")
            ];
            foreach ($paths as $path) {
                if (File::exists($path)) {
                    File::delete($path);
                }
            }
        } else {
            $globalFunThumbnail = ['status' => 0];
        }
        if (!empty($sourceFile)) {
            $globalFunSource = customUpload($sourceFile, $filePath);
            $paths = [
                storage_path("app/public/content/{$newsTrend->source_image}"),
                storage_path("app/public/content/requestImg/{$newsTrend->source_image}")
            ];
            foreach ($paths as $path) {
                if (File::exists($path)) {
                    File::delete($path);
                }
            }
        } else {
            $globalFunSource = ['status' => 0];
        }

        $data = [
            'category_id'            => json_encode($request->category_id),
            'brand_id'               => json_encode($request->brand_id),
            'industry_id'            => json_encode($request->industry_id),
            'solution_id'            => json_encode($request->solution_id),
            'product_id'             => json_encode($request->product_id),
            'featured'               => $request->featured,
            'type'                   => $request->type,
            'badge'                  => $request->badge,
            'title'                  => $request->title,
            'header'                 => $request->header,
            'short_des'              => $request->short_des,
            'long_des'               => $request->long_des,
            'author'                 => $request->author,
            'address'                => $request->address,
            'tags'                   => $request->tags,
            'banner_image'           => $globalFunBanner['status']    == 1 ? $globalFunBanner['file_name']   : $newsTrend->banner_image,
            'thumbnail_image'        => $globalFunThumbnail['status'] == 1 ? $globalFunThumbnail['file_name'] : $newsTrend->thumbnail_image,
            'source_image'           => $globalFunSource['status']    == 1 ? $globalFunSource['file_name']   : $newsTrend->source_image,
            'additional_button_name' => $request->additional_button_name,
            'additional_url'         => $request->additional_url,
            'source_link'            => $request->source_link,
            'footer'                 => $request->footer,
            'updated_at'             => Carbon::now(),
            
        ];

        $this->newsTrendRepository->updateNewsTrend($data, $id);

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
        $newsTrend =  $this->newsTrendRepository->findNewsTrend($id);

        $paths = [
            storage_path('app/public/content/') . $newsTrend->banner_image,
            storage_path('app/public/content/') . $newsTrend->thumbnail_image,
            storage_path('app/public/content/') . $newsTrend->source_image,
            storage_path('app/public/content/requestImg/') . $newsTrend->thumbnail_image,
        ];

        foreach ($paths as $path) {
            if (File::exists($path)) {
                File::delete($path);
            }
        }
        $this->newsTrendRepository->destroyNewsTrend($id);
    }
}
