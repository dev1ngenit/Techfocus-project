<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Support\Str;
use App\Http\Controllers\Controller;
use App\Models\Admin\HomePage;
use Illuminate\Http\Request;

class HomePageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.pages.homePage.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.pages.homePage.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $mainFileSectionOneImage              = $request->file('section_one_image');
        $mainFileSectionThreeFirstColumnLogo  = $request->file('section_three_first_column_logo');
        $mainFileSectionThreeSecondColumnLogo = $request->file('section_three_second_column_logo');
        $mainFileSectionThreeThirdColumnLogo  = $request->file('section_three_third_column_logo');
        $mainFileSectionThreeFourthColumnLogo = $request->file('section_three_fourth_column_logo');
        $mainFileSectionSixFirstColumnImage   = $request->file('section_six_first_column_image');
        $mainFileSectionSixSecondColumnImage  = $request->file('section_six_second_column_image');
        $mainFileSectionSixThirdColumnImage   = $request->file('section_six_third_column_image');
        $mainFileSectionSevenFirstGridIcon    = $request->file('section_seven_first_grid_icon');
        $mainFileSectionSevenSecondGridIcon   = $request->file('section_seven_second_grid_icon');
        $mainFileSectionSevenThirdGridIcon    = $request->file('section_seven_third_grid_icon');
        $mainFileSectionSevenFourthGridIcon   = $request->file('section_seven_fourth_grid_icon');

        $filePathSectionOneImage              = storage_path('app/public/home-page/image/');
        $filePathSectionThreeFirstColumnLogo  = storage_path('app/public/home-page/logo/');
        $filePathSectionThreeSecondColumnLogo = storage_path('app/public/home-page/logo/');
        $filePathSectionThreeThirdColumnLogo  = storage_path('app/public/home-page/logo/');
        $filePathSectionThreeFourthColumnLogo = storage_path('app/public/home-page/logo/');
        $filePathSectionSixFirstColumnImage   = storage_path('app/public/home-page/image/');
        $filePathSectionSixSecondColumnImage  = storage_path('app/public/home-page/image/');
        $filePathSectionSixThirdColumnImage   = storage_path('app/public/home-page/image/');
        $filePathSectionSevenFirstGridIcon    = storage_path('app/public/home-page/icon/');
        $filePathSectionSevenSecondGridIcon   = storage_path('app/public/home-page/icon/');
        $filePathSectionSevenThirdGridIcon    = storage_path('app/public/home-page/icon/');
        $filePathSectionSevenFourthGridIcon   = storage_path('app/public/home-page/icon/');

        if (!empty($mainFileSectionOneImage)) {
            $globalFunSectionOneImage = customUpload($mainFileSectionOneImage, $filePathSectionOneImage);
        } else {
            $globalFunSectionOneImage = ['status' => 0];
        }
        if (!empty($mainFileSectionThreeFirstColumnLogo)) {
            $globalFunSectionThreeFirstColumnLogo = customUpload($mainFileSectionThreeFirstColumnLogo, $filePathSectionThreeFirstColumnLogo);
        } else {
            $globalFunSectionThreeFirstColumnLogo = ['status' => 0];
        }
        if (!empty($mainFileSectionThreeSecondColumnLogo)) {
            $globalFunSectionThreeSecondColumnLogo = customUpload($mainFileSectionThreeSecondColumnLogo, $filePathSectionThreeSecondColumnLogo);
        } else {
            $globalFunSectionThreeSecondColumnLogo = ['status' => 0];
        }
        if (!empty($mainFileSectionThreeThirdColumnLogo)) {
            $globalFunSectionThreeThirdColumnLogo = customUpload($mainFileSectionThreeThirdColumnLogo, $filePathSectionThreeThirdColumnLogo);
        } else {
            $globalFunSectionThreeThirdColumnLogo = ['status' => 0];
        }
        if (!empty($mainFileSectionThreeFourthColumnLogo)) {
            $globalFunSectionThreeFourthColumnLogo = customUpload($mainFileSectionThreeFourthColumnLogo, $filePathSectionThreeFourthColumnLogo);
        } else {
            $globalFunSectionThreeFourthColumnLogo = ['status' => 0];
        }
        if (!empty($mainFileSectionSixFirstColumnImage)) {
            $globalFunSectionSixFirstColumnImage = customUpload($mainFileSectionSixFirstColumnImage, $filePathSectionSixFirstColumnImage);
        } else {
            $globalFunSectionSixFirstColumnImage = ['status' => 0];
        }
        if (!empty($mainFileSectionSixSecondColumnImage)) {
            $globalFunSectionSixSecondColumnImage = customUpload($mainFileSectionSixSecondColumnImage, $filePathSectionSixSecondColumnImage);
        } else {
            $globalFunSectionSixSecondColumnImage = ['status' => 0];
        }
        if (!empty($mainFileSectionSixThirdColumnImage)) {
            $globalFunSectionSixThirdColumnImage = customUpload($mainFileSectionSixThirdColumnImage, $filePathSectionSixThirdColumnImage);
        } else {
            $globalFunSectionSixThirdColumnImage = ['status' => 0];
        }
        if (!empty($mainFileSectionSevenFirstGridIcon)) {
            $globalFunSectionSevenFirstGridIcon = customUpload($mainFileSectionSevenFirstGridIcon, $filePathSectionSevenFirstGridIcon);
        } else {
            $globalFunSectionSevenFirstGridIcon = ['status' => 0];
        }
        if (!empty($mainFileSectionSevenSecondGridIcon)) {
            $globalFunSectionSevenSecondGridIcon = customUpload($mainFileSectionSevenSecondGridIcon, $filePathSectionSevenSecondGridIcon);
        } else {
            $globalFunSectionSevenSecondGridIcon = ['status' => 0];
        }
        if (!empty($mainFileSectionSevenThirdGridIcon)) {
            $globalFunSectionSevenThirdGridIcon = customUpload($mainFileSectionSevenThirdGridIcon, $filePathSectionSevenThirdGridIcon);
        } else {
            $globalFunSectionSevenThirdGridIcon = ['status' => 0];
        }
        if (!empty($mainFileSectionSevenFourthGridIcon)) {
            $globalFunSectionSevenFourthGridIcon = customUpload($mainFileSectionSevenFourthGridIcon, $filePathSectionSevenFourthGridIcon);
        } else {
            $globalFunSectionSevenFourthGridIcon = ['status' => 0];
        }

        HomePage::create([
            'country_id'                            => $request->country_id,
            'section_one_name'                      => $request->section_one_name,
            'section_one_badge'                     => $request->section_one_badge,
            'section_one_title'                     => $request->section_one_title,
            'section_one_description'               => $request->section_one_description,
            'section_one_button'                    => $request->section_one_button,
            'section_one_link'                      => $request->section_one_link,
            'section_one_image'                => $globalFunSectionOneImage['status']              == 1 ? $globalFunSectionOneImage['file_name']             : null,
            'section_two_name'                      => $request->section_two_name,
            'section_two_products'                  => $request->section_two_products,
            'section_three_name'                    => $request->section_three_name,
            'section_three_badge'                   => $request->section_three_badge,
            'section_three_title'                   => $request->section_three_title,
            'section_three_button'                  => $request->section_three_button,
            'section_three_link'                    => $request->section_three_link,
            'section_three_first_column_logo'  => $globalFunSectionThreeFirstColumnLogo['status']  == 1 ? $globalFunSectionThreeFirstColumnLogo['file_name'] : null,
            'section_three_first_column_title'      => $request->section_three_first_column_title,
            'section_three_first_column_link'       => $request->section_three_first_column_link,
            'section_three_second_column_logo' => $globalFunSectionThreeSecondColumnLogo['status'] == 1 ? $globalFunSectionThreeSecondColumnLogo['file_name'] : null,
            'section_three_second_column_title'     => $request->section_three_second_column_title,
            'section_three_second_column_link'      => $request->section_three_second_column_link,
            'section_three_third_column_logo'  => $globalFunSectionThreeThirdColumnLogo['status']  == 1 ? $globalFunSectionThreeThirdColumnLogo['file_name'] : null,
            'section_three_third_column_title'      => $request->section_three_third_column_title,
            'section_three_third_column_link'       => $request->section_three_third_column_link,
            'section_three_fourth_column_logo' => $globalFunSectionThreeFourthColumnLogo['status'] == 1 ? $globalFunSectionThreeFourthColumnLogo['file_name'] : null,
            'section_three_fourth_column_title'     => $request->section_three_fourth_column_title,
            'section_three_fourth_column_link'      => $request->section_three_fourth_column_link,
            'section_four_name'                     => $request->section_four_name,
            'section_four_contents'                 => $request->section_four_contents,
            'section_five_title'                    => $request->section_five_title,
            'section_five_link_one_title'           => $request->section_five_link_one_title,
            'section_five_link_one_icon'            => $request->section_five_link_one_icon,
            'section_five_link_one_link'            => $request->section_five_link_one_link,
            'section_five_link_two_title'           => $request->section_five_link_two_title,
            'section_five_link_two_icon'            => $request->section_five_link_two_icon,
            'section_five_link_two_link'            => $request->section_five_link_two_link,
            'section_five_link_three_title'         => $request->section_five_link_three_title,
            'section_five_link_three_icon'          => $request->section_five_link_three_icon,
            'section_five_link_three_link'          => $request->section_five_link_three_link,
            'section_five_button_title'             => $request->section_five_button_title,
            'section_five_button_sub_title'         => $request->section_five_button_sub_title,
            'section_five_button_link'              => $request->section_five_button_link,
            'section_six_name'                      => $request->section_six_name,
            'section_six_first_column_image'   => $globalFunSectionSixFirstColumnImage['status']   == 1 ? $globalFunSectionSixFirstColumnImage['file_name']  : null,
            'section_six_first_column_title'        => $request->section_six_first_column_title,
            'section_six_first_column_description'  => $request->section_six_first_column_description,
            'section_six_first_column_button_name'  => $request->section_six_first_column_button_name,
            'section_six_first_column_button_link'  => $request->section_six_first_column_button_link,
            'section_six_second_column_image'  => $globalFunSectionSixSecondColumnImage['status']  == 1 ? $globalFunSectionSixSecondColumnImage['file_name'] : null,
            'section_six_second_column_title'       => $request->section_six_second_column_title,
            'section_six_second_column_description' => $request->section_six_second_column_description,
            'section_six_second_column_button_name' => $request->section_six_second_column_button_name,
            'section_six_second_column_button_link' => $request->section_six_second_column_button_link,
            'section_six_third_column_image'   => $globalFunSectionSixThirdColumnImage['status']   == 1 ? $globalFunSectionSixThirdColumnImage['file_name']  : null,
            'section_six_third_column_title'        => $request->section_six_third_column_title,
            'section_six_third_column_description'  => $request->section_six_third_column_description,
            'section_six_third_column_button_name'  => $request->section_six_third_column_button_name,
            'section_six_third_column_button_link'  => $request->section_six_third_column_button_link,
            'section_seven_name'                    => $request->section_seven_name,
            'section_seven_badge'                   => $request->section_seven_badge,
            'section_seven_title'                   => $request->section_seven_title,
            'section_seven_description'             => $request->section_seven_description,
            'section_seven_button'                  => $request->section_seven_button,
            'section_seven_link'                    => $request->section_seven_link,
            'section_seven_first_grid_icon'    => $globalFunSectionSevenFirstGridIcon['status']    == 1 ? $globalFunSectionSevenFirstGridIcon['file_name']   : null,
            'section_seven_first_grid_title'        => $request->section_seven_first_grid_title,
            'section_seven_first_grid_button_name'  => $request->section_seven_first_grid_button_name,
            'section_seven_first_grid_button_link'  => $request->section_seven_first_grid_button_link,
            'section_seven_second_grid_icon'   => $globalFunSectionSevenSecondGridIcon['status']   == 1 ? $globalFunSectionSevenSecondGridIcon['file_name']  : null,
            'section_seven_second_grid_title'       => $request->section_seven_second_grid_title,
            'section_seven_second_grid_button_name' => $request->section_seven_second_grid_button_name,
            'section_seven_second_grid_button_link' => $request->section_seven_second_grid_button_link,
            'section_seven_third_grid_icon'    => $globalFunSectionSevenThirdGridIcon['status']    == 1 ? $globalFunSectionSevenThirdGridIcon['file_name']   : null,
            'section_seven_third_grid_title'        => $request->section_seven_third_grid_title,
            'section_seven_third_grid_button_name'  => $request->section_seven_third_grid_button_name,
            'section_seven_third_grid_button_link'  => $request->section_seven_third_grid_button_link,
            'section_seven_fourth_grid_icon'   => $globalFunSectionSevenFourthGridIcon['status']   == 1 ? $globalFunSectionSevenFourthGridIcon['file_name']  : null,
            'section_seven_fourth_grid_title'       => $request->section_seven_fourth_grid_title,
            'section_seven_fourth_grid_button_name' => $request->section_seven_fourth_grid_button_name,
            'section_seven_fourth_grid_button_link'   => $request->section_seven_fourth_grid_button_link,
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
        return view('admin.pages.homePage.edit');
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
