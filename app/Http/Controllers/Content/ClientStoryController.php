<?php

namespace App\Http\Controllers\Content;

use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Models\Admin\Category;
use App\Models\Admin\NewsTrend;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;

class ClientStoryController extends Controller
{
    public function index()
    {
        return view('admin.pages.story.index', [
            'contents' => NewsTrend::byType('client_stories')->latest('id')->get(['title','author','added_by','type','id']),
        ]);
    }

   
    public function create()
    {
        
        $data = [
            // 'products'   => DB::table('products')->select('id', 'name')->get(),
            'brands'     => DB::table('brands')->select('id', 'title')->orderBy('id', 'desc')->get(),
            'categories' => Category::with('children.children.children.children.children.children')->latest('id')->get(),
            'industries' => DB::table('industries')->select('id', 'name')->orderBy('id', 'desc')->get(),
            'solutions'  => DB::table('solution_details')->select('id', 'name')->orderBy('id', 'desc')->get(),
        ];
        return view('admin.pages.story.create', $data);
    }

   
    public function edit($id)
    {
        $data = [
            // 'products'   => DB::table('products')->select('id', 'name')->get(),
            'content'    => NewsTrend::findOrFail($id),
            'brands'     => DB::table('brands')->select('id', 'title')->orderBy('id', 'desc')->get(),
            'categories' => Category::with('children.children.children.children.children.children')->latest('id')->get(),
            'industries' => DB::table('industries')->select('id', 'name')->orderBy('id', 'desc')->get(),
            'solutions'  => DB::table('solution_details')->select('id', 'name')->orderBy('id', 'desc')->get(),
        ];
        return view('admin.pages.story.edit', $data);
    }
}
