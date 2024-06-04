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
use Illuminate\Support\Facades\Session;
use App\Http\Requests\Admin\ProductRequest;
use Illuminate\Support\Facades\Notification;
use Illuminate\Support\Facades\Validator;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['products'] = Product::with('productSas')->where('product_status', 'product')->latest('id', 'desc')
            ->get(['id', 'slug', 'thumbnail', 'price', 'name', 'stock', 'action_status', 'price_status', 'added_by']);
        return view('admin.pages.product.completed_products', $data);
    }
    public function savedProducts()
    {
        $data['saved_products'] = Product::with('productSas')->where('product_status', 'sourcing')->where('action_status', 'save')->latest('id', 'desc')
            ->get(['id', 'slug', 'thumbnail', 'price', 'discount', 'name', 'stock', 'source_one_price', 'source_two_price', 'action_status', 'price_status', 'added_by']);
        return view('admin.pages.product.saved_products', $data);
    }
    public function sourcedProducts()
    {
        $data['products'] = Product::with('productSas')->where('product_status', 'sourcing')->where('action_status', '!=', 'save')->select('id', 'name', 'slug', 'thumbnail', 'price_status', 'action_status', 'added_by')->get();
        return view('admin.pages.product.sourced_products', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data = [
            'products'   => DB::table('products')->select('id', 'name')->get(),
            'brands'     => DB::table('brands')->select('id', 'title')->orderBy('id', 'desc')->get(),
            'currencys'  => DB::table('currencies')->select('id', 'name')->orderBy('id', 'desc')->get(),
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
        $validator = Validator::make(
            $request->all(),
            [
                'name'     => 'required|unique:products,name|max:200',
                'thumbnail' => 'required|image|mimes:png,jpg,jpeg|max:5000',

            ],
            [
                'thumbnail' => [
                    'max'   => 'The image field must be smaller than 10 MB.',
                ],
                'thumbnail' => 'The file must be an image.',
                'mimes'     => 'The :attribute must be a file of type:PNG-JPEG-JPG',
                'required'  => 'The :attribute field must be given.',
                'unique'    => 'The Product Name has already been existed in the database.',
            ]
        );

        if ($validator->passes()) {

        $thumbnail = $request->file('thumbnail');
        $thumbnailName = Str::random(20) . '.' . $thumbnail->getClientOriginalExtension();
        $thumbnailPath = $thumbnail->storeAs('upload/Products/thumbnail', $thumbnailName, 'public');
        $save_url = asset('storage/' . $thumbnailPath);

        $productData = [
            'name'                      => $request->name,
            'sku_code'                  => $request->sku_code,
            'mf_code'                   => $request->mf_code,
            'product_code'              => $request->product_code,
            'tags'                      => $request->tags,
            'price_status'              => $request->price_status,
            'short_desc'                => $request->short_desc,
            'overview'                  => $request->overview,
            'specification'             => $request->specification,
            'accessories'               => $request->accessories,
            'warranty'                  => $request->warranty,
            'thumbnail'                 => $save_url,
            'stock'                     => $request->stock,
            'currency_id'               => $request->currency_id,
            'qty'                       => $request->qty,
            'rfq'                       => ($request->price_status == 'rfq') ? '1' : '0',
            'deal'                      => $request->deal,
            'refurbished'               => $request->refurbished,
            'product_type'              => $request->product_type,
            'category_id'               => json_encode($request->category_id),
            'color_id'                  => json_encode($request->color_id),
            'parent_id'                 => json_encode($request->parent_id),
            'child_id'                  => json_encode($request->child_id),
            'brand_id'                  => $request->brand_id,
            'source_one_name'           => $request->source_one_name,
            'source_one_link'           => $request->source_one_link,
            'source_one_price'          => $request->source_one_price,
            'source_one_estimate_time'  => $request->source_one_estimate_time,
            'source_one_principal_time' => $request->source_one_principal_time,
            'source_one_shipping_time'  => $request->source_one_shipping_time,
            'source_one_location'       => $request->source_one_location,
            'source_one_country'        => $request->source_one_country,
            'source_two_name'           => $request->source_two_name,
            'source_two_link'           => $request->source_two_link,
            'source_two_price'          => $request->source_two_price,
            'source_two_estimate_time'  => $request->source_two_estimate_time,
            'source_two_principal_time' => $request->source_two_principal_time,
            'source_two_shipping_time'  => $request->source_two_shipping_time,
            'source_two_location'       => $request->source_two_location,
            'source_two_country'        => $request->source_two_country,
            'competitor_one_name'       => $request->competitor_one_name,
            'competitor_one_price'      => $request->competitor_one_price,
            'competitor_two_name'       => $request->competitor_two_name,
            'competitor_two_price'      => $request->competitor_two_price,
            'competitor_one_link'       => $request->competitor_one_link,
            'competitor_two_link'       => $request->competitor_two_link,
            'source_one_approval'       => ($request->source_one_price > $request->source_two_price) ? '0' : '1',
            'source_two_approval'       => ($request->source_one_price > $request->source_two_price) ? '1' : '0',
            'notification_days'         => $request->notification_days,
            'create_date'               => Carbon::now(),
            'solid_source'              => $request->solid_source,
            'direct_principal'          => $request->direct_principal,
            'agreement'                 => $request->agreement,
            'source_type'               => $request->source_type,
            'source_contact'            => $request->source_contact,
            'added_by'                  => Auth::guard('admin')->user()->name,
            'action_status'             => ($request->action == 'save') ? 'save' : 'listed',
            'product_status'            => 'sourcing',
            'created_at'                => Carbon::now(),
        ];

        $product = Product::create($productData);

        // Multiple Image Upload From it
        $images = $request->file('multi_img');
        if ($images) {
            foreach ($images as $img) {
                $makeName = Str::random(20) . '.' . $img->getClientOriginalExtension();
                $multiPath = $img->storeAs('upload/Products/multi-image', $makeName, 'public');

                ProductImage::create([
                    'product_id' => $product->id,
                    'photo' => asset('storage/' . $multiPath),
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
        toastr()->success('Data Inserted Successfully');
        return redirect()->back();
            } else {
                $messages = $validator->messages();
                foreach ($messages->all() as $message) {
                    toastr()->error($message, 'Failed', ['timeOut' => 30000]);
                }
                return redirect()->back()->withInput();
            }


       
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
        $product = Product::with('multiImages', 'industries', 'solutions')->findOrFail($id);

        $data = [
            'product'            => $product,
            'selectedSolutions'  => $product->solutions->pluck('id')->toArray(),
            'selectedIndustries' => $product->industries->pluck('id')->toArray(),
            'products'           => DB::table('products')->select('id', 'name')->get(),
            'brands'             => DB::table('brands')->select('id', 'title')->orderBy('id', 'desc')->get(),
            'currencys'          => DB::table('currencies')->select('id', 'name')->orderBy('id', 'desc')->get(),
            'colors'             => DB::table('product_colors')->select('id', 'color_code', 'name')->orderBy('id', 'desc')->get(),
            'categories'         => Category::with('children.children.children.children.children.children')->latest('id')->get(),
            'industrys'          => DB::table('industries')->select('id', 'name')->orderBy('id', 'desc')->get(),
            'solutions'          => DB::table('solution_details')->select('id', 'name')->orderBy('id', 'desc')->get(),
        ];

        return view('admin.pages.product.edit', $data);
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
        $product = Product::findOrFail($id);
        $thumbnail = $request->file('thumbnail');
        if (!empty($thumbnail)) {
            $thumbnailName = Str::random(20) . '.' . $thumbnail->getClientOriginalExtension();
            $thumbnailPath = $thumbnail->storeAs('upload/Products/thumbnail', $thumbnailName, 'public');
            $save_url = asset('storage/' . $thumbnailPath);
        } else {
            $save_url = $product->thumbnail ;
        }


        $product->update([
            'name'                      => $request->name,
            'sku_code'                  => $request->sku_code,
            'mf_code'                   => $request->mf_code,
            'product_code'              => $request->product_code,
            'tags'                      => $request->tags,
            'price_status'              => $request->price_status,
            'short_desc'                => $request->short_desc,
            'overview'                  => $request->overview,
            'specification'             => $request->specification,
            'accessories'               => $request->accessories,
            'warranty'                  => $request->warranty,
            'thumbnail'                 => $save_url,
            'stock'                     => $request->stock,
            'currency_id'               => $request->currency_id,
            'qty'                       => $request->qty,
            'rfq'                       => ($request->price_status == 'rfq') ? '1' : '0',
            'deal'                      => $request->deal,
            'refurbished'               => $request->refurbished,
            'product_type'              => $request->product_type,
            'category_id'               => json_encode($request->category_id),
            'color_id'                  => json_encode($request->color_id),
            'parent_id'                 => json_encode($request->parent_id),
            'child_id'                  => json_encode($request->child_id),
            'brand_id'                  => $request->brand_id,
            'source_one_name'           => $request->source_one_name,
            'source_one_link'           => $request->source_one_link,
            'source_one_price'          => $request->source_one_price,
            'source_one_estimate_time'  => $request->source_one_estimate_time,
            'source_one_principal_time' => $request->source_one_principal_time,
            'source_one_shipping_time'  => $request->source_one_shipping_time,
            'source_one_location'       => $request->source_one_location,
            'source_one_country'        => $request->source_one_country,
            'source_two_name'           => $request->source_two_name,
            'source_two_link'           => $request->source_two_link,
            'source_two_price'          => $request->source_two_price,
            'source_two_estimate_time'  => $request->source_two_estimate_time,
            'source_two_principal_time' => $request->source_two_principal_time,
            'source_two_shipping_time'  => $request->source_two_shipping_time,
            'source_two_location'       => $request->source_two_location,
            'source_two_country'        => $request->source_two_country,
            'competitor_one_name'       => $request->competitor_one_name,
            'competitor_one_price'      => $request->competitor_one_price,
            'competitor_two_name'       => $request->competitor_two_name,
            'competitor_two_price'      => $request->competitor_two_price,
            'competitor_one_link'       => $request->competitor_one_link,
            'competitor_two_link'       => $request->competitor_two_link,
            'source_one_approval'       => ($request->source_one_price > $request->source_two_price) ? '0' : '1',
            'source_two_approval'       => ($request->source_one_price > $request->source_two_price) ? '1' : '0',
            'notification_days'         => $request->notification_days,
            'solid_source'              => $request->solid_source,
            'direct_principal'          => $request->direct_principal,
            'agreement'                 => $request->agreement,
            'source_type'               => $request->source_type,
            'source_contact'            => $request->source_contact,
            'added_by'                  => Auth::user()->name,
            'updated_at'                => Carbon::now(),
            // 'action_status'             => ($request->action == 'save') ? 'save' : 'listed',
            // 'product_status'            => 'sourcing',
        ]);


        // Multiple Image Upload From it
        $images = $request->file('multi_img');
        if (!empty($images)) {
            foreach ($images as $img) {
                $makeName = Str::random(20) . '.' . $img->getClientOriginalExtension();
                $multiPath = $img->storeAs('upload/Products/multi-image', $makeName, 'public');

                ProductImage::create([
                    'product_id' => $product->id,
                    'photo' => asset('storage/' . $multiPath),
                ]);
            }
        }

        if (!empty($request->industry_id)) {
            $industry_destroys = IndustryProduct::where('product_id', $id)->get();

            foreach ($industry_destroys as $industry_destroy) {
                IndustryProduct::find($industry_destroy->id)->delete();
            }

            $industrys = $request->industry_id;
            foreach ($industrys as $industry) {
                IndustryProduct::insert([

                    'product_id' => $id,
                    'industry_id' => $industry,
                    'created_at' => Carbon::now(),

                ]);
            }
        }
        if (!empty($request->solution_id)) {
            $solution_destroys = SolutionProduct::where('product_id', $id)->get();

            foreach ($solution_destroys as $solution_destroy) {
                SolutionProduct::find($solution_destroy->id)->delete();
            }
            $solutions = $request->solution_id;
            foreach ($solutions as $solution) {
                SolutionProduct::insert([

                    'product_id' => $id,
                    'solution_id' => $solution,
                    'created_at' => Carbon::now(),

                ]);
            }
        }
        Session::flash('success', 'Data has been updated successfully!');
        return redirect()->back();
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