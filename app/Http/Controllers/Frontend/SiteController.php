<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Admin\Category;
use Illuminate\Support\Str;
use Illuminate\Http\Request;

class SiteController extends Controller
{
    public function homePage() {
        return view('frontend.pages.home.index');
    }
    public function solutionDetails() {
        return view('frontend.pages.solution.solution_details');
    }
    public function category($slug) {
        return view('frontend.pages.category.category');
    }
    public function filterProducts($slug) {
        // if (Category::where('slug' , $slug)->) {
        //     # code...
        // }
        return view('frontend.pages.shop.filterProducts');
    }
    public function faq() {
        return view('frontend.pages.others.faq');
    }
    public function terms() {
        return view('frontend.pages.others.terms');
    }
    public function allCatalog() {
        return view('frontend.pages.catalog.allCatalog');
    }
    public function rfq() {
        return view('frontend.pages.rfq.rfq');
    }
    public function contact() {
        return view('frontend.pages.crm.contact');
    }
}
