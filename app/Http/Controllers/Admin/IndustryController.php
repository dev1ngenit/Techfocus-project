<?php

namespace App\Http\Controllers\Admin;

use App\Models\Admin\Row;
use Illuminate\Support\Str;
use App\Models\Admin\Industry;
use App\Models\Admin\SolutionCard;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\File;
use App\Http\Requests\IndustryRequest;
use Illuminate\Http\Request;
use App\Models\Admin\NewsTrend;
use App\Models\Admin\SolutionDetail;

class IndustryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['industries'] =  Industry::get();
        return view('admin.pages.industry.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data['industryParents'] =  Industry::get(['id', 'name']);
        $data['solutionDetails'] =  SolutionDetail::get(['id', 'name']);
        $data['newsTrends'] =  NewsTrend::get(['id', 'title']);
        return view('admin.pages.industry.create', $data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $RowsMainFileImageOne   = $request->file('rows_image_one');
        $RowsMainFileImageThree = $request->file('rows_image_three');
        $RowsMainFileImageFive  = $request->file('rows_image_five');

        $mainFile = $request->file('image');
        $logoFile = $request->file('logo');
        $bannerImageFile = $request->file('banner_image');

        $filePathRowsImageOnes  = storage_path('app/public/row/');
        $filePathRowsImageThree = storage_path('app/public/row/');
        $filePathRowsImageFives = storage_path('app/public/row/');

        $filePathImage = storage_path('app/public/industry/image');
        $filePathLogo = storage_path('app/public/industry/logo');
        $filePathBannerImage = storage_path('app/public/industry/banner-image');

        if (!empty($mainFile)) {
            $globalFunImage = customUpload($mainFile, $filePathImage);
        } else {
            $globalFunImage = ['status' => 0];
        }

        if (!empty($logoFile)) {
            $globalFunLogo = customUpload($logoFile, $filePathLogo);
        } else {
            $globalFunLogo = ['status' => 0];
        }

        if (!empty($bannerImageFile)) {
            $globalFunBannerImage = customUpload($bannerImageFile, $filePathBannerImage);
        } else {
            $globalFunBannerImage = ['status' => 0];
        }

        if (!empty($RowsMainFileImageOne)) {
            $globalFunRowsImageOnes  = customUpload($RowsMainFileImageOne, $filePathRowsImageOnes);
        } else {
            $globalFunRowsImageOnes = ['status' => 0];
        }

        if (!empty($RowsMainFileImageThree)) {
            $globalFunRowsImageThree  = customUpload($RowsMainFileImageThree, $filePathRowsImageThree);
        } else {
            $globalFunRowsImageThree = ['status' => 0];
        }

        if (!empty($RowsMainFileImageFive)) {
            $globalFunRowsImageFives  = customUpload($RowsMainFileImageFive, $filePathRowsImageFives);
        } else {
            $globalFunRowsImageFives = ['status' => 0];
        }

        $rowOneId = Row::create([
            'badge'       => $request->row_one_badge,
            'title'       => $request->row_one_title,
            'image'       => $globalFunRowsImageOnes['status'] == 1 ? $globalFunRowsImageOnes['file_name'] : null,
            'btn_name'    => $request->row_one_btn_name,
            'link'        => $request->row_one_link,
            'description' => $request->row_one_description,
        ]);

        $rowThreeId = Row::create([
            'badge'       => $request->row_three_badge,
            'title'       => $request->row_three_title,
            'image'       => $globalFunRowsImageThree['status'] == 1 ? $globalFunRowsImageThree['file_name'] : null,
            'btn_name'    => $request->row_three_btn_name,
            'link'        => $request->row_three_link,
            'description' => $request->row_three_description,
        ]);

        $rowFiveId = Row::create([
            'badge'       => $request->row_five_badge,
            'title'       => $request->row_five_title,
            'image'        => $globalFunRowsImageFives['status'] == 1 ? $globalFunRowsImageFives['file_name'] : null,
            'btn_name'    => $request->row_five_btn_name,
            'link'        => $request->row_five_link,
            'description' => $request->row_five_description,
        ]);

        Industry::create([
            'parent_id'               => $request->parent_id,
            'name'                    => $request->name,
            'description'             => $request->description,
            'image'                   => $globalFunImage['status'] == 1 ? $globalFunImage['file_name'] : null,
            'logo'                    => $globalFunLogo['status']  == 1 ? $globalFunLogo['file_name'] : null,
            'banner_image'                    => $globalFunBannerImage['status']  == 1 ? $globalFunBannerImage['file_name'] : null,
            'website_url'             => $request->website_url,

            'row_one_id'              => $rowOneId->id,
            'row_three_id'            => $rowThreeId->id,
            'row_five_id'             => $rowFiveId->id,

            'solution_one_id'              => $request->solution_one_id,
            'solution_two_id'              => $request->solution_two_id,
            'solution_three_id'            => $request->solution_three_id,
            'solution_four_id'             => $request->solution_four_id,
            'client_story_id'              => $request->client_story_id,
            'header'                       => $request->header,

            'row_four_title'               => $request->row_four_title,
            'row_four_header'              => $request->row_four_header,
            'row_four_col_one_title'       => $request->row_four_col_one_title,
            'row_four_col_one_header'      => $request->row_four_col_one_header,
            'row_four_col_two_title'       => $request->row_four_col_two_title,
            'row_four_col_two_header'      => $request->row_four_col_two_header,
            'footer_title'                 => $request->footer_title,
            'footer_header'                => $request->footer_header,
            'row_four_col_one_button_name' => $request->row_four_col_one_button_name,
            'row_four_col_one_button_link' => $request->row_four_col_one_button_link,
            'row_four_col_two_button_name' => $request->row_four_col_two_button_name,
            'row_four_col_two_button_link' => $request->row_four_col_two_button_link,
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
        return view('admin.pages.industry.edit', [
            'industry' =>  Industry::with('rowOne', 'rowThree', 'rowFive')->findOrFail($id),
            'industryParents' =>  Industry::get(['id', 'name']),
            'solutionDetails' =>  SolutionDetail::get(['id', 'name']),
            'newsTrends' =>  NewsTrend::get(['id', 'title']),
        ]);
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
        $industry = Industry::with('rowOne', 'rowThree', 'rowFive')->find($id);

        $RowsMainFileImageOne   = $request->file('rows_image_one');
        $RowsMainFileImageThree = $request->file('rows_image_three');
        $RowsMainFileImageFive  = $request->file('rows_image_five');

        $mainFile = $request->file('image');
        $logoFile = $request->file('logo');
        $bannerImageFile = $request->file('banner_image');


        $filePathRowsImageOnes  = storage_path('app/public/row/');
        $filePathRowsImageThree = storage_path('app/public/row/');
        $filePathRowsImageFives = storage_path('app/public/row/');

        $filePathImage = storage_path('app/public/industry/image');
        $filePathLogo = storage_path('app/public/industry/logo');
        $filePathBannerImage = storage_path('app/public/industry/banner-image');

        if (!empty($mainFile)) {
            $globalFunImage = customUpload($mainFile, $filePathImage);

            $paths = [
                storage_path("app/public/industry/image/{$industry->image}"),
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
            $globalFunLogo = customUpload($logoFile, $filePathLogo);
            $paths = [
                storage_path("app/public/industry/logo/{$industry->logo}"),
            ];
            foreach ($paths as $path) {
                if (File::exists($path)) {
                    File::delete($path);
                }
            }
        } else {
            $globalFunLogo = ['status' => 0];
        }

        if (!empty($bannerImageFile)) {
            $globalFunBannerImage = customUpload($bannerImageFile, $filePathBannerImage);
            $paths = [
                storage_path("app/public/industry/banner-image/{$industry->banner_image}"),
            ];
            foreach ($paths as $path) {
                if (File::exists($path)) {
                    File::delete($path);
                }
            }
        } else {
            $globalFunBannerImage = ['status' => 0];
        }

        if (!empty($RowsMainFileImageOne)) {
            $globalFunRowsImageOnes  = customUpload($RowsMainFileImageOne, $filePathRowsImageOnes);
            $paths = [
                storage_path("app/public/row/{$industry->rowOne->image}"),
            ];
            foreach ($paths as $path) {
                if (File::exists($path)) {
                    File::delete($path);
                }
            }
        } else {
            $globalFunRowsImageOnes = ['status' => 0];
        }

        if (!empty($RowsMainFileImageThree)) {
            $globalFunRowsImageThree  = customUpload($RowsMainFileImageThree, $filePathRowsImageThree);
            $paths = [
                storage_path("app/public/row/{$industry->rowThree->image}"),
            ];
            foreach ($paths as $path) {
                if (File::exists($path)) {
                    File::delete($path);
                }
            }
        } else {
            $globalFunRowsImageThree = ['status' => 0];
        }

        if (!empty($RowsMainFileImageFive)) {
            $globalFunRowsImageFives  = customUpload($RowsMainFileImageFive, $filePathRowsImageFives);
            $paths = [
                storage_path("app/public/row/{$industry->rowFive->image}"),
            ];
            foreach ($paths as $path) {
                if (File::exists($path)) {
                    File::delete($path);
                }
            }
        } else {
            $globalFunRowsImageFives = ['status' => 0];
        }

        $rowOneId = $industry->rowOne->update([
            'badge'       => $request->row_one_badge,
            'title'       => $request->row_one_title,
            'image'       => $globalFunRowsImageOnes['status'] == 1 ? $globalFunRowsImageOnes['file_name'] : $industry->rowOne->image,
            'btn_name'    => $request->row_one_btn_name,
            'link'        => $request->row_one_link,
            'description' => $request->row_one_description,
        ]);

        $rowThreeId = $industry->rowThree->update([
            'badge'       => $request->row_three_badge,
            'title'       => $request->row_three_title,
            'image'       => $globalFunRowsImageThree['status'] == 1 ? $globalFunRowsImageThree['file_name'] : $industry->rowThree->image,
            'btn_name'    => $request->row_three_btn_name,
            'link'        => $request->row_three_link,
            'description' => $request->row_three_description,
        ]);

        $rowFiveId = $industry->rowFive->update([
            'badge'       => $request->row_five_badge,
            'title'       => $request->row_five_title,
            'image'        => $globalFunRowsImageFives['status'] == 1 ? $globalFunRowsImageFives['file_name'] : $industry->rowFive->image,
            'btn_name'    => $request->row_five_btn_name,
            'link'        => $request->row_five_link,
            'description' => $request->row_five_description,
        ]);

        $industry->update([
            'parent_id'               => $request->parent_id,
            'name'                    => $request->name,
            'description'             => $request->description,
            'image'                   => $globalFunImage['status'] == 1 ? $globalFunImage['file_name'] :  $industry->image,
            'logo'                    => $globalFunLogo['status']  == 1 ? $globalFunLogo['file_name'] :  $industry->logo,
            'banner_image'            => $globalFunBannerImage['status']  == 1 ? $globalFunBannerImage['file_name'] :  $industry->banner_image,
            'website_url'             => $request->website_url,

            // 'row_one_id'              => $rowOneId->id,
            // 'row_three_id'            => $rowThreeId->id,
            // 'row_five_id'             => $rowFiveId->id,

            'solution_one_id'              => $request->solution_one_id,
            'solution_two_id'              => $request->solution_two_id,
            'solution_three_id'            => $request->solution_three_id,
            'solution_four_id'             => $request->solution_four_id,
            'client_story_id'              => $request->client_story_id,
            'header'                       => $request->header,

            'row_four_title'               => $request->row_four_title,
            'row_four_header'              => $request->row_four_header,
            'row_four_col_one_title'       => $request->row_four_col_one_title,
            'row_four_col_one_header'      => $request->row_four_col_one_header,
            'row_four_col_two_title'       => $request->row_four_col_two_title,
            'row_four_col_two_header'      => $request->row_four_col_two_header,
            'footer_title'                 => $request->footer_title,
            'footer_header'                => $request->footer_header,
            'row_four_col_one_button_name' => $request->row_four_col_one_button_name,
            'row_four_col_one_button_link' => $request->row_four_col_one_button_link,
            'row_four_col_two_button_name' => $request->row_four_col_two_button_name,
            'row_four_col_two_button_link' => $request->row_four_col_two_button_link,
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
        $industry = Industry::with('rowOne', 'rowThree', 'rowFive')->find($id);

        $paths = [
            storage_path("app/public/industry/image/{$industry->image}"),
            storage_path("app/public/industry/logo/{$industry->logo}"),
            storage_path("app/public/industry/banner-image/{$industry->banner_image}"),
            storage_path("app/public/row/{$industry->rowOne->image}"),
            storage_path("app/public/row/{$industry->rowThree->image}"),
            storage_path("app/public/row/{$industry->rowFive->image}"),
        ];

        foreach ($paths as $path) {
            if (File::exists($path)) {
                File::delete($path);
            }
        }
        $industry->delete();
    }
}
