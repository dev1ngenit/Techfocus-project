<?php

namespace App\Http\Controllers\Admin;

use App\Models\Admin\Row;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Models\Admin\Industry;
use App\Models\Admin\SolutionCard;
use App\Http\Controllers\Controller;
use App\Models\Admin\SolutionDetail;

class SolutionDetailsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.pages.solutionDetails.index', [
            'solutionDetails' => SolutionDetail::get(),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.pages.solutionDetails.create', [
            'industries' => Industry::get(),
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
        $BannerMainFileImage    = $request->file('banner_image');

        $RowsMainFileImageOne   = $request->file('rows_image_one');
        $RowsMainFileImageFour  = $request->file('rows_image_four');

        $solutionCardMainFileImageOne   = $request->file('solution_card_image_one');
        $solutionCardMainFileImageTwo   = $request->file('solution_card_image_two');
        $solutionCardMainFileImageThree = $request->file('solution_card_image_three');
        $solutionCardMainFileImageFour  = $request->file('solution_card_image_four');
        $solutionCardMainFileImageFive  = $request->file('solution_card_image_five');
        $solutionCardMainFileImageSix   = $request->file('solution_card_image_Six');
        $solutionCardMainFileImageSeven = $request->file('solution_card_image_seven');
        $solutionCardMainFileImageEight = $request->file('solution_card_image_eight');

        $filePathRowsImageOnes  = storage_path('app/public/row/');
        $filePathRowsImageFours = storage_path('app/public/row/');

        $filePathBannerImage    = storage_path('app/public/solution-details/banner-image/');

        $filePathSolutionCardImageOne   = storage_path('app/public/solution-card/');
        $filePathSolutionCardImageTwo   = storage_path('app/public/solution-card/');
        $filePathSolutionCardImageThree = storage_path('app/public/solution-card/');
        $filePathSolutionCardImageFour  = storage_path('app/public/solution-card/');
        $filePathSolutionCardImageFive  = storage_path('app/public/solution-card/');
        $filePathSolutionCardImageSix   = storage_path('app/public/solution-card/');
        $filePathSolutionCardImageSeven = storage_path('app/public/solution-card/');
        $filePathSolutionCardImageEight = storage_path('app/public/solution-card/');

        if (!empty($RowsMainFileImageOne)) {
            $globalFunRowsImageOnes  = customUpload($RowsMainFileImageOne, $filePathRowsImageOnes);
        } else {
            $globalFunRowsImageOnes = ['status' => 0];
        }

        if (!empty($RowsMainFileImageFour)) {
            $globalFunRowsImageFours  = customUpload($RowsMainFileImageFour, $filePathRowsImageFours);
        } else {
            $globalFunRowsImageFours = ['status' => 0];
        }

        if (!empty($BannerMainFileImage)) {
            $globalFunBannerImage  = customUpload($BannerMainFileImage, $filePathBannerImage);
        } else {
            $globalFunBannerImage = ['status' => 0];
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
        if (!empty($solutionCardMainFileImageFour)) {
            $globalFunSolutionCardImageFour  = customUpload($solutionCardMainFileImageFour, $filePathSolutionCardImageFour);
        } else {
            $globalFunSolutionCardImageFour = ['status' => 0];
        }
        if (!empty($solutionCardMainFileImageFive)) {
            $globalFunSolutionCardImageFive  = customUpload($solutionCardMainFileImageFive, $filePathSolutionCardImageFive);
        } else {
            $globalFunSolutionCardImageFive = ['status' => 0];
        }
        if (!empty($solutionCardMainFileImageSix)) {
            $globalFunSolutionCardImageSix  = customUpload($solutionCardMainFileImageSix, $filePathSolutionCardImageSix);
        } else {
            $globalFunSolutionCardImageSix = ['status' => 0];
        }
        if (!empty($solutionCardMainFileImageSeven)) {
            $globalFunSolutionCardImageSeven  = customUpload($solutionCardMainFileImageSeven, $filePathSolutionCardImageSeven);
        } else {
            $globalFunSolutionCardImageSeven = ['status' => 0];
        }
        if (!empty($solutionCardMainFileImageEight)) {
            $globalFunSolutionCardImageEight  = customUpload($solutionCardMainFileImageEight, $filePathSolutionCardImageEight);
        } else {
            $globalFunSolutionCardImageEight = ['status' => 0];
        }

        $rowOneId = Row::create([
            'badge'       => $request->row_one_badge,
            'title'       => $request->row_one_title,
            'image'       => $globalFunRowsImageOnes['status'] == 1 ? $globalFunRowsImageOnes['file_name'] : null,
            'btn_name'    => $request->row_one_btn_name,
            'link'        => $request->row_one_link,
            'description' => $request->row_one_description,
        ]);

        $rowFourId = Row::create([
            'badge'       => $request->row_four_badge,
            'title'       => $request->row_four_title,
            'image'       => $globalFunRowsImageFours['status'] == 1 ? $globalFunRowsImageFours['file_name'] : null,
            'btn_name'    => $request->row_four_btn_name,
            'link'        => $request->row_four_link,
            'description' => $request->row_four_description,
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

        $solutionCardFourId = SolutionCard::create([
            'badge'       => $request->solutionCardTwoId_badge,
            'title'       => $request->solutionCardTwoId_title,
            'image'         => $globalFunSolutionCardImageFour['status'] == 1 ? $globalFunSolutionCardImageFour['file_name'] : null,
            'short_des'   => $request->solutionCardTwoId_short_des,
            'link'        => $request->solutionCardTwoId_link,
            'button_name' => $request->solutionCardTwoId_button_name,
        ]);
        $solutionCardFiveId = SolutionCard::create([
            'badge'       => $request->solutionCardTwoId_badge,
            'title'       => $request->solutionCardTwoId_title,
            'image'         => $globalFunSolutionCardImageFive['status'] == 1 ? $globalFunSolutionCardImageFive['file_name'] : null,
            'short_des'   => $request->solutionCardTwoId_short_des,
            'link'        => $request->solutionCardTwoId_link,
            'button_name' => $request->solutionCardTwoId_button_name,
        ]);
        $solutionCardSixId = SolutionCard::create([
            'badge'       => $request->solutionCardTwoId_badge,
            'title'       => $request->solutionCardTwoId_title,
            'image'         => $globalFunSolutionCardImageSix['status'] == 1 ? $globalFunSolutionCardImageSix['file_name'] : null,
            'short_des'   => $request->solutionCardTwoId_short_des,
            'link'        => $request->solutionCardTwoId_link,
            'button_name' => $request->solutionCardTwoId_button_name,
        ]);
        $solutionCardSevenId = SolutionCard::create([
            'badge'       => $request->solutionCardTwoId_badge,
            'title'       => $request->solutionCardTwoId_title,
            'image'         => $globalFunSolutionCardImageSeven['status'] == 1 ? $globalFunSolutionCardImageSeven['file_name'] : null,
            'short_des'   => $request->solutionCardTwoId_short_des,
            'link'        => $request->solutionCardTwoId_link,
            'button_name' => $request->solutionCardTwoId_button_name,
        ]);
        $solutionCardEightId = SolutionCard::create([
            'badge'       => $request->solutionCardTwoId_badge,
            'title'       => $request->solutionCardTwoId_title,
            'image'         => $globalFunSolutionCardImageEight['status'] == 1 ? $globalFunSolutionCardImageEight['file_name'] : null,
            'short_des'   => $request->solutionCardTwoId_short_des,
            'link'        => $request->solutionCardTwoId_link,
            'button_name' => $request->solutionCardTwoId_button_name,
        ]);

        SolutionDetail::create([
            'industry_id'            => json_encode($request->industry_id),
            'name'                   => $request->name,
            'header'                 => $request->header,
            'banner_image'           => $globalFunBannerImage['status'] == 1 ? $globalFunBannerImage['file_name'] : null,

            'row_one_id'             => $rowOneId->id,

            'row_two_title'          => $request->row_two_title,
            'row_two_header'         => $request->row_two_header,
            'row_three_title'        => $request->row_three_title,
            'row_three_header'       => $request->row_three_header,

            'row_four_id'            => $rowFourId->id,

            'row_five_title'         => $request->row_five_title,
            'row_five_header'        => $request->row_five_header,

            'solution_card_one_id'   => $solutionCardOneId->id,
            'solution_card_two_id'   => $solutionCardTwoId->id,
            'solution_card_three_id' => $solutionCardThreeId->id,
            'solution_card_four_id'  => $solutionCardFourId->id,
            'solution_card_five_id'  => $solutionCardFiveId->id,
            'solution_card_six_id'   => $solutionCardSixId->id,
            'solution_card_seven_id' => $solutionCardSevenId->id,
            'solution_card_eight_id' => $solutionCardEightId->id,

            'added_by'               => auth()->guard('admin')->user()->id,
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
        return view('admin.pages.solutionDetails.edit');
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
        //
    }
}
