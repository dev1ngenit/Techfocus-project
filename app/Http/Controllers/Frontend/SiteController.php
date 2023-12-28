<?php

namespace App\Http\Controllers\Frontend;

use App\Models\Admin\Brand;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Models\Admin\Category;
use App\Http\Controllers\Controller;

class SiteController extends Controller
{

    public function homePage()
    {
        $data = [
            'categories' => Category::with('children.children.children.children.children.children.children.children.children.children')->where('is_parent', '1')->get(['id', 'parent_id', 'name', 'slug']),
        ];
        return view('frontend.pages.home.index', $data);
    }
    public function solutionDetails()
    {
        return view('frontend.pages.solution.solution_details');
    }
    public function category($slug)
    {
        return view('frontend.pages.category.category');
    }
    public function filterProducts($slug)
    {
        // if (Category::where('slug' , $slug)->) {
        //     # code...
        // }
        return view('frontend.pages.shop.filterProducts');
    }
    public function faq()
    {
        return view('frontend.pages.others.faq');
    }
    public function terms()
    {
        return view('frontend.pages.others.terms');
    }

    public function allCatalog()
    {
        $data = [
            'categories' => Category::with('children.children.children.children.children.children.children.children.children.children')->where('is_parent', '1')->get(['id', 'parent_id', 'name', 'slug']),
        ];
        return view('frontend.pages.catalog.allCatalog', $data);
    }

    public function rfq()
    {
        return view('frontend.pages.rfq.rfq');
    }
    public function contact()
    {
        return view('frontend.pages.crm.contact');
    }
    public function about()
    {
        return view('frontend.pages.about.about');
    }
    public function subscription()
    {
        return view('frontend.pages.others.subscription');
    }
    public function brandList()
    {
        $paginationSettings = ['*'];

        $data = [
            'top_brands' => Brand::byCategory('Top')->latest('id')->paginate(18, $paginationSettings, 'top_brands'),
            'featured_brands' => Brand::byCategory('Featured')->latest('id')->paginate(18, $paginationSettings, 'featured_brands'),
            'others' => Brand::with('brandPage')->select('id', 'slug', 'title')->get(),
        ];
        return view('frontend.pages.brand.brand_list', $data);
    }
    public function service()
    {
        return view('frontend.pages.service.service');
    }

    public function sourcingGuide()
    {
        return view('frontend.pages.guide.sourcing_guide');
    }

    public function buyingGuide()
    {
        return view('frontend.pages.guide.buying_guide');
    }

    public function exhibit()
    {
        return view('frontend.pages.others.exhibit');
    }
    public function manufacturerAccount()
    {
        return view('frontend.pages.manufacturer.account');
    }
}
