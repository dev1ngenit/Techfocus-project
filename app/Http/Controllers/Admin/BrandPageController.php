<?php

namespace App\Http\Controllers\Admin;

use App\Models\Admin\Row;
use App\Models\Admin\Brand;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Models\Admin\BrandPage;
use App\Models\Admin\SolutionCard;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\File;

class BrandPageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.pages.brandPage.index', [
            'brandPages' => BrandPage::get(),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.pages.brandPage.create', [
            'brands' => Brand::get(['id', 'name']),
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $RowsMainFileImageFour          = $request->file('rows_image_four');
        $RowsMainFileImageFive          = $request->file('rows_image_five');
        $RowsMainFileImageSeven         = $request->file('rows_image_seven');
        $RowsMainFileImageEight         = $request->file('rows_image_eight');

        $BannerMainFileImage            = $request->file('banner_image');
        $rowSixMainFileImage            = $request->file('row_six_image');

        $solutionCardMainFileImageOne   = $request->file('solution_card_image_one');
        $solutionCardMainFileImageTwo   = $request->file('solution_card_image_two');
        $solutionCardMainFileImageThree = $request->file('solution_card_image_three');

        $filePathRowsImageFours         = storage_path('app/public/row-image/');
        $filePathRowsImageFives         = storage_path('app/public/row-image/');
        $filePathRowsImageSevens        = storage_path('app/public/row-image/');
        $filePathRowsImageEights        = storage_path('app/public/row-image/');

        $filePathBannerImage            = storage_path('app/public/brand-page/banner-image/');
        $filePathRowSixImage            = storage_path('app/public/brand-page/rowSix-image/');

        $filePathSolutionCardImageOne   = storage_path('app/public/solution-card-image/');
        $filePathSolutionCardImageTwo   = storage_path('app/public/solution-card-image/');
        $filePathSolutionCardImageThree = storage_path('app/public/solution-card-image/');

        if (!empty($RowsMainFileImageFour)) {
            $globalFunRowsImageFours  = customUpload($RowsMainFileImageFour, $filePathRowsImageFours);
        } else {
            $globalFunRowsImageFours = ['status' => 0];
        }
        if (!empty($RowsMainFileImageFive)) {
            $globalFunRowsImageFives  = customUpload($RowsMainFileImageFive, $filePathRowsImageFives);
        } else {
            $globalFunRowsImageFives = ['status' => 0];
        }
        if (!empty($RowsMainFileImageSeven)) {
            $globalFunRowsImageSevens  = customUpload($RowsMainFileImageSeven, $filePathRowsImageSevens);
        } else {
            $globalFunRowsImageSevens = ['status' => 0];
        }
        if (!empty($RowsMainFileImageEight)) {
            $globalFunRowsImageEights  = customUpload($RowsMainFileImageEight, $filePathRowsImageEights);
        } else {
            $globalFunRowsImageEights = ['status' => 0];
        }


        if (!empty($BannerMainFileImage)) {
            $globalFunBannerImage  = customUpload($BannerMainFileImage, $filePathBannerImage);
        } else {
            $globalFunBannerImage = ['status' => 0];
        }
        if (!empty($rowSixMainFileImage)) {
            $globalFunRowSixImage  = customUpload($rowSixMainFileImage, $filePathRowSixImage);
        } else {
            $globalFunRowSixImage = ['status' => 0];
        }


        if (!empty($solutionCardMainFileImageOne)) {
            $globalFunSolutionCardImageOne  = customUpload($solutionCardMainFileImageOne, $filePathSolutionCardImageOne);
        } else {
            $globalFunSolutionCardImageOne = ['status' => 0];
        }
        if (!empty($solutionCardMainFileImageTwo)) {
            $globalFunSolutionCardImageTwo  = customUpload($solutionCardMainFileImageTwo, $filePathSolutionCardImageTwo);
        } else {
            $globalFunSolutionCardImageTwo = ['status' => 0];
        }
        if (!empty($solutionCardMainFileImageThree)) {
            $globalFunSolutionCardImageThree  = customUpload($solutionCardMainFileImageThree, $filePathSolutionCardImageThree);
        } else {
            $globalFunSolutionCardImageThree = ['status' => 0];
        }

        $rowFourId = Row::create([
            'badge'       => $request->row_four_badge,
            'title'       => $request->row_four_title,
            'image'        => $globalFunRowsImageFours['status'] == 1 ? $globalFunRowsImageFours['file_name'] : null,
            'short_des'   => $request->row_four_short_des,
            'btn_name'    => $request->row_four_btn_name,
            'link'        => $request->row_four_link,
            'list_title'  => $request->row_four_list_title,
            'list_one'    => $request->row_four_list_one,
            'list_two'    => $request->row_four_list_two,
            'list_three'  => $request->row_four_list_three,
            'list_four'   => $request->row_four_list_four,
            'description' => $request->row_four_description,
        ]);

        $rowFiveId = Row::create([
            'badge'       => $request->row_five_badge,
            'title'       => $request->row_five_title,
            'image'        => $globalFunRowsImageFives['status'] == 1 ? $globalFunRowsImageFives['file_name'] : null,
            'short_des'   => $request->row_five_short_des,
            'btn_name'    => $request->row_five_btn_name,
            'link'        => $request->row_five_link,
            'list_title'  => $request->row_five_list_title,
            'list_one'    => $request->row_five_list_one,
            'list_two'    => $request->row_five_list_two,
            'list_three'  => $request->row_five_list_three,
            'list_four'   => $request->row_five_list_four,
            'description' => $request->row_five_description,
        ]);

        $rowSevenId = Row::create([
            'badge'       => $request->rowSevenId_badge,
            'title'       => $request->rowSevenId_title,
            'image'        => $globalFunRowsImageSevens['status'] == 1 ? $globalFunRowsImageSevens['file_name'] : null,
            'short_des'   => $request->rowSevenId_short_des,
            'btn_name'    => $request->rowSevenId_btn_name,
            'link'        => $request->rowSevenId_link,
            'list_title'  => $request->rowSevenId_list_title,
            'list_one'    => $request->rowSevenId_list_one,
            'list_two'    => $request->rowSevenId_list_two,
            'list_three'  => $request->rowSevenId_list_three,
            'list_four'   => $request->rowSevenId_list_four,
            'description' => $request->rowSevenId_description,
        ]);

        $rowEightId = Row::create([
            'badge'       => $request->rowEightId_badge,
            'title'       => $request->rowEightId_title,
            'image'        => $globalFunRowsImageEights['status'] == 1 ? $globalFunRowsImageEights['file_name'] : null,
            'short_des'   => $request->rowEightId_short_des,
            'btn_name'    => $request->rowEightId_btn_name,
            'link'        => $request->rowEightId_link,
            'list_title'  => $request->rowEightId_list_title,
            'list_one'    => $request->rowEightId_list_one,
            'list_two'    => $request->rowEightId_list_two,
            'list_three'  => $request->rowEightId_list_three,
            'list_four'   => $request->rowEightId_list_four,
            'description' => $request->rowEightId_description,
        ]);

        $solutionCardOneId = SolutionCard::create([
            'badge'       => $request->solutionCardOneId_badge,
            'title'       => $request->solutionCardOneId_title,
            'image'         => $globalFunSolutionCardImageOne['status'] == 1 ? $globalFunSolutionCardImageOne['file_name'] : null,
            'short_des'   => $request->solutionCardOneId_short_des,
            'link'        => $request->solutionCardOneId_link,
            'button_name' => $request->solutionCardOneId_button_name,
        ]);

        $solutionCardTwoId = SolutionCard::create([
            'badge'       => $request->solutionCardTwoId_badge,
            'title'       => $request->solutionCardTwoId_title,
            'image'         => $globalFunSolutionCardImageTwo['status'] == 1 ? $globalFunSolutionCardImageTwo['file_name'] : null,
            'short_des'   => $request->solutionCardTwoId_short_des,
            'link'        => $request->solutionCardTwoId_link,
            'button_name' => $request->solutionCardTwoId_button_name,
        ]);

        $solutionCardThreeId = SolutionCard::create([
            'badge'       => $request->solutionCardTwoId_badge,
            'title'       => $request->solutionCardTwoId_title,
            'image'         => $globalFunSolutionCardImageThree['status'] == 1 ? $globalFunSolutionCardImageThree['file_name'] : null,
            'short_des'   => $request->solutionCardTwoId_short_des,
            'link'        => $request->solutionCardTwoId_link,
            'button_name' => $request->solutionCardTwoId_button_name,
        ]);

        BrandPage::create([
            'brand_id'               => $request->brand_id,
            'banner_image'           => $globalFunBannerImage['status'] == 1 ? $globalFunBannerImage['file_name'] : null,
            'header'                 => $request->header,
            'brand_logo'             => $request->brand_logo,
            'row_six_title'          => $request->row_six_title,
            'row_six_header'         => $request->row_six_header,
            'row_four_id'            => $rowFourId->id,
            'row_five_id'            => $rowFiveId->id,
            'solution_card_one_id'   => $solutionCardOneId->id,
            'solution_card_two_id'   => $solutionCardTwoId->id,
            'solution_card_three_id' => $solutionCardThreeId->id,
            'row_six_image'          => $globalFunRowSixImage['status'] == 1 ? $globalFunRowSixImage['file_name'] : null,
            'row_seven_id'           => $rowSevenId->id,
            'row_eight_id'           => $rowEightId->id,
            'row_one_title'          => $request->row_one_title,
            'row_one_header'         => $request->row_one_header,
            'row_nine_title'         => $request->row_nine_title,
            'row_nine_header'        => $request->row_nine_header,
            'added_by'               => $request->added_by,
        ]);
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
        return view('admin.pages.brandPage.edit', [
            'brand' => Brand::get(['id', 'name']),
            'brandPage' => BrandPage::find($id),
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $brandPage = BrandPage::findOrFail($id);
        $paths = [
            storage_path("app/public/row-image/{$brandPage->image}"),
            storage_path("app/public/brand-page/banner-image/{$brandPage->brand_logo}"),
            storage_path("app/public/brand-page/rowSix-image/{$brandPage->row_six_image}"),
            storage_path("app/public/solution-card-image/{$brandPage->image}"),
        ];

        foreach ($paths as $path) {
            if (File::exists($path)) {
                File::delete($path);
            }
        }
        $brandPage->delete($id);
    }
}
