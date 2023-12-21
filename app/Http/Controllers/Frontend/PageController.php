<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function overview($id)
    {
        // $data['brand'] = Brand::where('slug', $id)->select('id', 'slug', 'title', 'image')->first();
        // $data['brandpage'] = BrandPage::where('brand_id', $data['brand']->id)->first();
        // if (!empty($data['brandpage'])) {

        //     if ($data['brandpage']) {
        //         $data['row_one'] = Row::where('id', $data['brandpage']->row_four_id)->first();
        //         $data['row_three'] = Row::where('id', $data['brandpage']->row_five_id)->first();
        //         $data['row_four'] = Row::where('id', $data['brandpage']->row_seven_id)->first();
        //         $data['row_five'] = Row::where('id', $data['brandpage']->row_eight_id)->first();
        //         $data['card1'] = SolutionCard::where('id', $data['brandpage']->solution_card_one_id)->first();
        //         $data['card2'] = SolutionCard::where('id', $data['brandpage']->solution_card_two_id)->first();
        //         $data['card3'] = SolutionCard::where('id', $data['brandpage']->solution_card_three_id)->first();
        //     }

        //     return view('frontend.pages.kukapages.overview', $data);
        // } else {
        //     Toastr::error('No Details information found for this Brand.');
        //     return redirect()->back();
        // }
            return view('frontend.pages.brandPage.overview');

    }
}
