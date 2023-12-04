<?php

namespace App\Http\Controllers\Admin;

use Carbon\Carbon;
use App\Models\Admin;
use App\Models\Admin\Brand;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Models\Admin\Product;
use App\Models\Admin\Category;
use App\Models\Admin\Industry;
use App\Models\Admin\ProductImage;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use App\Models\Admin\IndustryProduct;
use App\Models\Admin\SolutionProduct;
use Intervention\Image\Facades\Image;
use App\Http\Requests\Admin\ProductRequest;
use Illuminate\Support\Facades\Notification;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.pages.product.completed_products');
    }
    public function savedProducts()
    {
        return view('admin.pages.product.saved_products');
    }
    public function sourcedProducts()
    {
        return view('admin.pages.product.sourced_products');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data = [
            'brands'     => DB::table('brands')->select('id', 'name')->orderBy('id', 'desc')->get(),
            'colors'     => DB::table('product_colors')->select('id', 'color_code', 'name')->orderBy('id', 'desc')->get(),
            'categories' => Category::with('children.children.children.children.children.children')->latest('id')->get(),
            'industries' => DB::table('industries')->select('id', 'name')->orderBy('id', 'desc')->get(),
            'solutions'  => DB::table('solution_details')->select('id', 'name')->orderBy('id', 'desc')->get(),
        ];

        return view('admin.pages.product.create', $data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $image = $request->file('thumbnail');
        $name_gen = hexdec(uniqid()) . '.' . $image->getClientOriginalExtension();
        $path = public_path('upload/Products/thumbnail/' . $name_gen);
        Image::make($image)->resize(376, 282)->save($path);
        $save_url = 'upload/Products/thumbnail/' . $name_gen;

        $productData = [
            'name' => $request->name,
            'sku_code' => $request->sku_code,
            'mf_code' => $request->mf_code,
            'product_code' => $request->product_code,
            'tags' => $request->tags,
            'size' => $request->size,
            'color' => $request->color,
            'price_status' => $request->price_status,
            'short_desc' => $request->short_desc,
            'overview' => $request->overview,
            'specification' => $request->specification,
            'accessories' => $request->accessories,
            'warranty' => $request->warranty,
            'thumbnail' => $save_url,
            'stock' => $request->stock,
            'qty' => $request->qty,
            'rfq' => ($request->price_status == 'rfq') ? '1' : '0',
            'deal' => $request->deal,
            'refurbished' => $request->refurbished,
            'product_type' => $request->product_type,
            'cat_id' => $request->cat_id,
            'sub_cat_id' => $request->sub_cat_id,
            'sub_sub_cat_id' => $request->sub_sub_cat_id,
            'sub_sub_sub_cat_id' => $request->sub_sub_sub_cat_id,
            'brand_id' => $request->brand_id,
            'source_one_price' => $request->source_one_price,
            'source_two_price' => $request->source_two_price,
            'source_one_name' => $request->source_one_name,
            'source_two_name' => $request->source_two_name,
            'source_one_link' => $request->source_one_link,
            'source_two_link' => $request->source_two_link,
            'competetor_one_name' => $request->competetor_one_name,
            'competetor_one_price' => $request->competetor_one_price,
            'competetor_two_name' => $request->competetor_two_name,
            'competetor_two_price' => $request->competetor_two_price,
            'competetor_one_link' => $request->competetor_one_link,
            'competetor_two_link' => $request->competetor_two_link,
            'source_one_approval' => ($request->source_one_price > $request->source_two_price) ? '0' : '1',
            'source_two_approval' => ($request->source_one_price > $request->source_two_price) ? '1' : '0',
            'notification_days' => $request->notification_days,
            'create_date' => now(),
            'solid_source' => $request->solid_source,
            'direct_principal' => $request->direct_principal,
            'agreement' => $request->agreement,
            'source_type' => $request->source_type,
            'source_contact' => $request->source_contact,
            'added_by' => Auth::user()->name,
            'action_status' => ($request->action == 'save') ? 'save' : 'listed',
            'product_status' => 'sourcing',
        ];

        $product = Product::create($productData);

        // Multiple Image Upload From it
        $images = $request->file('multi_img');
        if (!empty($images)) {
            foreach ($images as $img) {
                $make_name = hexdec(uniqid()) . '.' . $img->getClientOriginalExtension();
                $multi_path = public_path('upload/Products/multi-image/' . $make_name);
                Image::make($img)->resize(376, 282)->save($multi_path);
                $uploadPath = 'upload/Products/multi-image/' . $make_name;

                ProductImage::create([
                    'product_id' => $product->id,
                    'photo' => $uploadPath,
                ]);
            }
        }

        if (!empty($request->industry_id)) {
            $industrys = $request->industry_id;
            foreach ($industrys as $industry) {
                IndustryProduct::create([
                    'product_id' => $product->id,
                    'industry_id' => $industry,
                ]);
            }
        }

        if (!empty($request->solution_id)) {
            $solutions = $request->solution_id;
            foreach ($solutions as $solution) {
                SolutionProduct::create([
                    'product_id' => $product->id,
                    'solution_id' => $solution,
                ]);
            }
        }

        //  

        return redirect()->route('product-sourcing.index');
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
        //
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
