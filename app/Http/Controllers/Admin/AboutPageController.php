<?php

namespace App\Http\Controllers\Admin;

use App\Models\Admin\Brand;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Models\Admin\AboutPage;
use App\Http\Controllers\Controller;
use App\Http\Requests\AboutPageRequest;
use Illuminate\Support\Facades\File;

class AboutPageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.pages.aboutPage.index', [
            'aboutPages' => AboutPage::get(),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.pages.aboutPage.create', [
            'brands' => Brand::get(['id', 'name']),
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(AboutPageRequest $request)
    {
        $mainFileSectionTwoMainImage          = $request->file('section_two_main_image');
        $mainFileSectionTwoSecondaryImage     = $request->file('section_two_secondary_image');
        $mainFileSectionFourBannerMiddleImage = $request->file('section_four_banner_middle_image');
        $mainFileSectionFourCeoSign           = $request->file('section_four_ceo_sign');

        $filePathSectionTwoMainImage          = storage_path('app/public/about-us/');
        $filePathSectionTwoSecondaryImage     = storage_path('app/public/about-us/');
        $filePathSectionFourBannerMiddleImage = storage_path('app/public/about-us/');
        $filePathSectionFourCeoSign           = storage_path('app/public/about-us/');

        if (!empty($mainFileSectionTwoMainImage)) {
            $globalFunSectionTwoMainImage = customUpload($mainFileSectionTwoMainImage, $filePathSectionTwoMainImage);
        } else {
            $globalFunSectionTwoMainImage = ['status' => 0];
        }
        if (!empty($mainFileSectionTwoSecondaryImage)) {
            $globalFunSectionTwoSecondaryImage = customUpload($mainFileSectionTwoSecondaryImage, $filePathSectionTwoSecondaryImage);
        } else {
            $globalFunSectionTwoSecondaryImage = ['status' => 0];
        }
        if (!empty($mainFileSectionFourBannerMiddleImage)) {
            $globalFunSectionFourBannerMiddleImage = customUpload($mainFileSectionFourBannerMiddleImage, $filePathSectionFourBannerMiddleImage);
        } else {
            $globalFunSectionFourBannerMiddleImage = ['status' => 0];
        }
        if (!empty($mainFileSectionFourCeoSign)) {
            $globalFunSectionFourCeoSign = customUpload($mainFileSectionFourCeoSign, $filePathSectionFourCeoSign);
        } else {
            $globalFunSectionFourCeoSign = ['status' => 0];
        }

        AboutPage::create([
            'section_two_badge'                            => $request->section_two_badge,
            'section_two_title_1'                          => $request->section_two_title_1,
            'section_two_title_span'                       => $request->section_two_title_span,
            'section_two_subtitle'                         => $request->section_two_subtitle,
            'section_two_description'                      => $request->section_two_description,
            'section_two_main_image'                             => $globalFunSectionTwoMainImage['status']          == 1 ? $globalFunSectionTwoMainImage['file_name']         : null,
            'section_two_secondary_image'                             => $globalFunSectionTwoSecondaryImage['status']     == 1 ? $globalFunSectionTwoSecondaryImage['file_name']    : null,
            'section_two_secondary_image_count'            => $request->section_two_secondary_image_count,
            'section_two_secondary_image_title'            => $request->section_two_secondary_image_title,
            'section_two_button_name'                      => $request->section_two_button_name,
            'section_two_button_link'                      => $request->section_two_button_link,
            'section_three_tab_one_title'                  => $request->section_three_tab_one_title,
            'section_three_tab_one_short_description'      => $request->section_three_tab_one_short_description,
            'section_three_tab_one_detailed_description'   => $request->section_three_tab_one_detailed_description,
            'section_three_tab_one_list_title'             => $request->section_three_tab_one_list_title,
            'section_three_tab_one_list_1'                 => $request->section_three_tab_one_list_1,
            'section_three_tab_one_list_2'                 => $request->section_three_tab_one_list_2,
            'section_three_tab_one_list_3'                 => $request->section_three_tab_one_list_3,
            'section_three_tab_one_list_4'                 => $request->section_three_tab_one_list_4,
            'section_three_tab_one_quote'                  => $request->section_three_tab_one_quote,
            'section_three_tab_one_quote_author'           => $request->section_three_tab_one_quote_author,
            'section_three_tab_one_button_name'            => $request->section_three_tab_one_button_name,
            'section_three_tab_one_button_link'            => $request->section_three_tab_one_button_link,
            'section_three_tab_two_title'                  => $request->section_three_tab_two_title,
            'section_three_tab_two_short_description'      => $request->section_three_tab_two_short_description,
            'section_three_tab_two_detailed_description'   => $request->section_three_tab_two_detailed_description,
            'section_three_tab_two_list_title'             => $request->section_three_tab_two_list_title,
            'section_three_tab_two_list_1'                 => $request->section_three_tab_two_list_1,
            'section_three_tab_two_list_2'                 => $request->section_three_tab_two_list_2,
            'section_three_tab_two_list_3'                 => $request->section_three_tab_two_list_3,
            'section_three_tab_two_list_4'                 => $request->section_three_tab_two_list_4,
            'section_three_tab_two_quote'                  => $request->section_three_tab_two_quote,
            'section_three_tab_two_quote_author'           => $request->section_three_tab_two_quote_author,
            'section_three_tab_two_button_name'            => $request->section_three_tab_two_button_name,
            'section_three_tab_two_button_link'            => $request->section_three_tab_two_button_link,
            'section_three_tab_three_title'                => $request->section_three_tab_three_title,
            'section_three_tab_three_short_description'    => $request->section_three_tab_three_short_description,
            'section_three_tab_three_detailed_description' => $request->section_three_tab_three_detailed_description,
            'section_three_tab_three_list_title'           => $request->section_three_tab_three_list_title,
            'section_three_tab_three_list_1'               => $request->section_three_tab_three_list_1,
            'section_three_tab_three_list_2'               => $request->section_three_tab_three_list_2,
            'section_three_tab_three_list_3'               => $request->section_three_tab_three_list_3,
            'section_three_tab_three_list_4'               => $request->section_three_tab_three_list_4,
            'section_three_tab_three_quote'                => $request->section_three_tab_three_quote,
            'section_three_tab_three_quote_author'         => $request->section_three_tab_three_quote_author,
            'section_three_tab_three_button_name'          => $request->section_three_tab_three_button_name,
            'section_three_tab_three_button_link'          => $request->section_three_tab_three_button_link,
            'section_three_tab_four_title'                 => $request->section_three_tab_four_title,
            'section_three_tab_four_short_description'     => $request->section_three_tab_four_short_description,
            'section_three_tab_four_detailed_description'  => $request->section_three_tab_four_detailed_description,
            'section_three_tab_four_list_title'            => $request->section_three_tab_four_list_title,
            'section_three_tab_four_list_1'                => $request->section_three_tab_four_list_1,
            'section_three_tab_four_list_2'                => $request->section_three_tab_four_list_2,
            'section_three_tab_four_list_3'                => $request->section_three_tab_four_list_3,
            'section_three_tab_four_list_4'                => $request->section_three_tab_four_list_4,
            'section_three_tab_four_quote'                 => $request->section_three_tab_four_quote,
            'section_three_tab_four_quote_author'          => $request->section_three_tab_four_quote_author,
            'section_three_tab_four_button_name'           => $request->section_three_tab_four_button_name,
            'section_three_tab_four_button_link'           => $request->section_three_tab_four_button_link,
            'section_four_banner_middle_image'                           => $globalFunSectionFourBannerMiddleImage['status'] == 1 ? $globalFunSectionFourBannerMiddleImage['file_name'] : null,
            'section_four_col_one_title'                   => $request->section_four_col_one_title,
            'section_four_col_one_description'             => $request->section_four_col_one_description,
            'section_four_ceo_sign'                                   => $globalFunSectionFourCeoSign['status']           == 1 ? $globalFunSectionFourCeoSign['file_name']          : null,
            'section_four_ceo_name'                        => $request->section_four_ceo_name,
            'section_four_ceo_designation'                 => $request->section_four_ceo_designation,
            'section_four_ceo_facebook_account_link'       => $request->section_four_ceo_facebook_account_link,
            'section_four_ceo_twitter_account_link'        => $request->section_four_ceo_twitter_account_link,
            'section_four_ceo_whatsapp_account_link'       => $request->section_four_ceo_whatsapp_account_link,
            'section_four_col_two_title'                   => $request->section_four_col_two_title,
            'section_four_col_two_content'                 => $request->section_four_col_two_content,
            'section_four_col_two_list_1'                  => $request->section_four_col_two_list_1,
            'section_four_col_two_list_2'                  => $request->section_four_col_two_list_2,
            'section_four_col_two_list_3'                  => $request->section_four_col_two_list_3,
            'section_four_col_two_list_4'                  => $request->section_four_col_two_list_4,
            'section_five_card_one_title'                  => $request->section_five_card_one_title,
            'section_five_card_one_count'                  => $request->section_five_card_one_count,
            'section_five_card_one_short_description'      => $request->section_five_card_one_short_description,
            'section_five_card_one_icon'                   => $request->section_five_card_one_icon,
            'section_five_card_two_title'                  => $request->section_five_card_two_title,
            'section_five_card_two_count'                  => $request->section_five_card_two_count,
            'section_five_card_two_short_description'      => $request->section_five_card_two_short_description,
            'section_five_card_two_icon'                   => $request->section_five_card_two_icon,
            'section_five_card_three_title'                => $request->section_five_card_three_title,
            'section_five_card_three_count'                => $request->section_five_card_three_count,
            'section_five_card_three_short_description'    => $request->section_five_card_three_short_description,
            'section_five_card_three_icon'                 => $request->section_five_card_three_icon,
            'section_five_card_four_title'                 => $request->section_five_card_four_title,
            'section_five_card_four_count'                 => $request->section_five_card_four_count,
            'section_five_card_four_short_description'     => $request->section_five_card_four_short_description,
            'section_five_card_four_icon'                  => $request->section_five_card_four_icon,
            'brand_id'                                     => json_encode($request->brand_id),
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
        return view('admin.pages.aboutPage.edit', [
            'aboutPage' => AboutPage::find($id),
            'brands' => Brand::get(['id', 'name']),
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(AboutPageRequest $request, $id)
    {
        $aboutPage = AboutPage::find($id);

        $mainFileSectionTwoMainImage          = $request->file('section_two_main_image');
        $mainFileSectionTwoSecondaryImage     = $request->file('section_two_secondary_image');
        $mainFileSectionFourBannerMiddleImage = $request->file('section_four_banner_middle_image');
        $mainFileSectionFourCeoSign           = $request->file('section_four_ceo_sign');

        $filePathSectionTwoMainImage          = storage_path('app/public/about-us/');
        $filePathSectionTwoSecondaryImage     = storage_path('app/public/about-us/');
        $filePathSectionFourBannerMiddleImage = storage_path('app/public/about-us/');
        $filePathSectionFourCeoSign           = storage_path('app/public/about-us/');

        if (!empty($mainFileSectionTwoMainImage)) {
            $globalFunSectionTwoMainImage = customUpload($mainFileSectionTwoMainImage, $filePathSectionTwoMainImage);
            $paths = [
                storage_path("app/public/about-us/{$aboutPage->section_two_main_image}"),
            ];
            foreach ($paths as $path) {
                if (File::exists($path)) {
                    File::delete($path);
                }
            }
        } else {
            $globalFunSectionTwoMainImage = ['status' => 0];
        }
        if (!empty($mainFileSectionTwoSecondaryImage)) {
            $globalFunSectionTwoSecondaryImage = customUpload($mainFileSectionTwoSecondaryImage, $filePathSectionTwoSecondaryImage);
            $paths = [
                storage_path("app/public/about-us/{$aboutPage->section_two_secondary_image}"),
            ];
            foreach ($paths as $path) {
                if (File::exists($path)) {
                    File::delete($path);
                }
            }
        } else {
            $globalFunSectionTwoSecondaryImage = ['status' => 0];
        }
        if (!empty($mainFileSectionFourBannerMiddleImage)) {
            $globalFunSectionFourBannerMiddleImage = customUpload($mainFileSectionFourBannerMiddleImage, $filePathSectionFourBannerMiddleImage);
            $paths = [
                storage_path("app/public/about-us/{$aboutPage->section_four_banner_middle_image}"),
            ];
            foreach ($paths as $path) {
                if (File::exists($path)) {
                    File::delete($path);
                }
            }
        } else {
            $globalFunSectionFourBannerMiddleImage = ['status' => 0];
        }
        if (!empty($mainFileSectionFourCeoSign)) {
            $globalFunSectionFourCeoSign = customUpload($mainFileSectionFourCeoSign, $filePathSectionFourCeoSign);
            $paths = [
                storage_path("app/public/about-us/{$aboutPage->section_four_ceo_sign}"),
            ];
            foreach ($paths as $path) {
                if (File::exists($path)) {
                    File::delete($path);
                }
            }
        } else {
            $globalFunSectionFourCeoSign = ['status' => 0];
        }

        $aboutPage->update([
            'section_two_badge'                            => $request->section_two_badge,
            'section_two_title_1'                          => $request->section_two_title_1,
            'section_two_title_span'                       => $request->section_two_title_span,
            'section_two_subtitle'                         => $request->section_two_subtitle,
            'section_two_description'                      => $request->section_two_description,
            'section_two_main_image'                             => $globalFunSectionTwoMainImage['status']          == 1 ? $globalFunSectionTwoMainImage['file_name']         : $aboutPage->section_two_main_image,
            'section_two_secondary_image'                             => $globalFunSectionTwoSecondaryImage['status']     == 1 ? $globalFunSectionTwoSecondaryImage['file_name']    : $aboutPage->section_two_secondary_image,
            'section_two_secondary_image_count'            => $request->section_two_secondary_image_count,
            'section_two_secondary_image_title'            => $request->section_two_secondary_image_title,
            'section_two_button_name'                      => $request->section_two_button_name,
            'section_two_button_link'                      => $request->section_two_button_link,
            'section_three_tab_one_title'                  => $request->section_three_tab_one_title,
            'section_three_tab_one_short_description'      => $request->section_three_tab_one_short_description,
            'section_three_tab_one_detailed_description'   => $request->section_three_tab_one_detailed_description,
            'section_three_tab_one_list_title'             => $request->section_three_tab_one_list_title,
            'section_three_tab_one_list_1'                 => $request->section_three_tab_one_list_1,
            'section_three_tab_one_list_2'                 => $request->section_three_tab_one_list_2,
            'section_three_tab_one_list_3'                 => $request->section_three_tab_one_list_3,
            'section_three_tab_one_list_4'                 => $request->section_three_tab_one_list_4,
            'section_three_tab_one_quote'                  => $request->section_three_tab_one_quote,
            'section_three_tab_one_quote_author'           => $request->section_three_tab_one_quote_author,
            'section_three_tab_one_button_name'            => $request->section_three_tab_one_button_name,
            'section_three_tab_one_button_link'            => $request->section_three_tab_one_button_link,
            'section_three_tab_two_title'                  => $request->section_three_tab_two_title,
            'section_three_tab_two_short_description'      => $request->section_three_tab_two_short_description,
            'section_three_tab_two_detailed_description'   => $request->section_three_tab_two_detailed_description,
            'section_three_tab_two_list_title'             => $request->section_three_tab_two_list_title,
            'section_three_tab_two_list_1'                 => $request->section_three_tab_two_list_1,
            'section_three_tab_two_list_2'                 => $request->section_three_tab_two_list_2,
            'section_three_tab_two_list_3'                 => $request->section_three_tab_two_list_3,
            'section_three_tab_two_list_4'                 => $request->section_three_tab_two_list_4,
            'section_three_tab_two_quote'                  => $request->section_three_tab_two_quote,
            'section_three_tab_two_quote_author'           => $request->section_three_tab_two_quote_author,
            'section_three_tab_two_button_name'            => $request->section_three_tab_two_button_name,
            'section_three_tab_two_button_link'            => $request->section_three_tab_two_button_link,
            'section_three_tab_three_title'                => $request->section_three_tab_three_title,
            'section_three_tab_three_short_description'    => $request->section_three_tab_three_short_description,
            'section_three_tab_three_detailed_description' => $request->section_three_tab_three_detailed_description,
            'section_three_tab_three_list_title'           => $request->section_three_tab_three_list_title,
            'section_three_tab_three_list_1'               => $request->section_three_tab_three_list_1,
            'section_three_tab_three_list_2'               => $request->section_three_tab_three_list_2,
            'section_three_tab_three_list_3'               => $request->section_three_tab_three_list_3,
            'section_three_tab_three_list_4'               => $request->section_three_tab_three_list_4,
            'section_three_tab_three_quote'                => $request->section_three_tab_three_quote,
            'section_three_tab_three_quote_author'         => $request->section_three_tab_three_quote_author,
            'section_three_tab_three_button_name'          => $request->section_three_tab_three_button_name,
            'section_three_tab_three_button_link'          => $request->section_three_tab_three_button_link,
            'section_three_tab_four_title'                 => $request->section_three_tab_four_title,
            'section_three_tab_four_short_description'     => $request->section_three_tab_four_short_description,
            'section_three_tab_four_detailed_description'  => $request->section_three_tab_four_detailed_description,
            'section_three_tab_four_list_title'            => $request->section_three_tab_four_list_title,
            'section_three_tab_four_list_1'                => $request->section_three_tab_four_list_1,
            'section_three_tab_four_list_2'                => $request->section_three_tab_four_list_2,
            'section_three_tab_four_list_3'                => $request->section_three_tab_four_list_3,
            'section_three_tab_four_list_4'                => $request->section_three_tab_four_list_4,
            'section_three_tab_four_quote'                 => $request->section_three_tab_four_quote,
            'section_three_tab_four_quote_author'          => $request->section_three_tab_four_quote_author,
            'section_three_tab_four_button_name'           => $request->section_three_tab_four_button_name,
            'section_three_tab_four_button_link'           => $request->section_three_tab_four_button_link,
            'section_four_banner_middle_image'                           => $globalFunSectionFourBannerMiddleImage['status'] == 1 ? $globalFunSectionFourBannerMiddleImage['file_name'] : $aboutPage->section_four_banner_middle_image,
            'section_four_col_one_title'                   => $request->section_four_col_one_title,
            'section_four_col_one_description'             => $request->section_four_col_one_description,
            'section_four_ceo_sign'                                   => $globalFunSectionFourCeoSign['status']           == 1 ? $globalFunSectionFourCeoSign['file_name']          : $aboutPage->section_four_ceo_sign,
            'section_four_ceo_name'                        => $request->section_four_ceo_name,
            'section_four_ceo_designation'                 => $request->section_four_ceo_designation,
            'section_four_ceo_facebook_account_link'       => $request->section_four_ceo_facebook_account_link,
            'section_four_ceo_twitter_account_link'        => $request->section_four_ceo_twitter_account_link,
            'section_four_ceo_whatsapp_account_link'       => $request->section_four_ceo_whatsapp_account_link,
            'section_four_col_two_title'                   => $request->section_four_col_two_title,
            'section_four_col_two_content'                 => $request->section_four_col_two_content,
            'section_four_col_two_list_1'                  => $request->section_four_col_two_list_1,
            'section_four_col_two_list_2'                  => $request->section_four_col_two_list_2,
            'section_four_col_two_list_3'                  => $request->section_four_col_two_list_3,
            'section_four_col_two_list_4'                  => $request->section_four_col_two_list_4,
            'section_five_card_one_title'                  => $request->section_five_card_one_title,
            'section_five_card_one_count'                  => $request->section_five_card_one_count,
            'section_five_card_one_short_description'      => $request->section_five_card_one_short_description,
            'section_five_card_one_icon'                   => $request->section_five_card_one_icon,
            'section_five_card_two_title'                  => $request->section_five_card_two_title,
            'section_five_card_two_count'                  => $request->section_five_card_two_count,
            'section_five_card_two_short_description'      => $request->section_five_card_two_short_description,
            'section_five_card_two_icon'                   => $request->section_five_card_two_icon,
            'section_five_card_three_title'                => $request->section_five_card_three_title,
            'section_five_card_three_count'                => $request->section_five_card_three_count,
            'section_five_card_three_short_description'    => $request->section_five_card_three_short_description,
            'section_five_card_three_icon'                 => $request->section_five_card_three_icon,
            'section_five_card_four_title'                 => $request->section_five_card_four_title,
            'section_five_card_four_count'                 => $request->section_five_card_four_count,
            'section_five_card_four_short_description'     => $request->section_five_card_four_short_description,
            'section_five_card_four_icon'                  => $request->section_five_card_four_icon,
            'brand_id'                                     => json_encode($request->brand_id),
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


        $aboutPage = AboutPage::find($id);

        $paths = [
            storage_path("app/public/about-us/{$aboutPage->section_two_main_image}"),
            storage_path("app/public/about-us/{$aboutPage->section_two_secondary_image}"),
            storage_path("app/public/about-us/{$aboutPage->section_four_banner_middle_image}"),
            storage_path("app/public/about-us/{$aboutPage->section_four_ceo_sign}"),
        ];

        foreach ($paths as $path) {
            if (File::exists($path)) {
                File::delete($path);
            }
        }
        $aboutPage->delete();
    }
}
