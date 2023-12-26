<?php

namespace App\Http\Controllers\Admin;

use App\Models\Admin\Brand;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Models\Admin\Catalog;
use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use App\Http\Controllers\Controller;
use App\Http\Requests\CatalogRequest;
use App\Models\Admin\CatalogAttachment;
use App\Models\Admin\Company;
use App\Models\Admin\Industry;
use App\Models\Admin\Product;
use Spatie\Ignition\Contracts\Solution;

class CatalogController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.pages.catalog.index', [
            'catalogs' => Catalog::join('catalog_attachments', 'catalog_attachments.catalog_id', '=', 'catalogs.id')
                ->get(),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.pages.catalog.create', [
            'brands' => Brand::get('id', 'name'),
            'products' => Product::get('id', 'name'),
            'industries' => Industry::get('id', 'name'),
            // 'solutions' => Solution::get('id','name'),
            'companies' => Company::get('id', 'name'),
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CatalogRequest $request)
    {
        $catalogData = [
            'category'            => $request->input('category'),
            'brand_id'            => json_encode($request->input('brand_id', [])),
            'product_id'          => json_encode($request->input('product_id', [])),
            'industry_id'         => json_encode($request->input('industry_id', [])),
            'solution_id'         => json_encode($request->input('solution_id', [])),
            'company_id'          => json_encode($request->input('company_id', [])),
            'name'                => $request->input('name'),
            'page_number'         => $request->input('page_number'),
            'description'         => $request->input('description'),
            'company_button_name' => $request->input('company_button_name'),
            'company_button_link' => $request->input('company_button_link')
        ];
        if ($request->hasFile('thumbnail')) {
            $uploadResult = customUpload($request->file('thumbnail'),  storage_path('app/public/catalog/thumbnail/'));
            $catalogData['thumbnail'] = $uploadResult['file_name'];
        }

        if ($request->hasFile('document')) {
            $uploadResult = customUpload($request->file('document'),  storage_path('app/public/catalog/document/'));
            $catalogData['document'] = $uploadResult['file_name'];
        }

        // Create the catalog
        $catalog = Catalog::create($catalogData);

        $pageImages = $request->file('page_image');
        if (!empty($pageImages)) {
            foreach ($pageImages as $imageFile) {
                $uploadImage = customUpload($imageFile,  storage_path('app/public/catalog/document/'));
                if ($uploadImage['status'] == 1) {
                    $attachmentData = [
                        'catalog_id'       => $catalog->id,
                        'page_image'       => $uploadImage['file_name'],
                        'page_description' => $request->company_button_link,
                        'page_link'        => $request->company_button_link,
                        'button_name'      => $request->company_button_link,
                        'button_link'      => $request->company_button_link,
                    ];
                    CatalogAttachment::create($attachmentData);
                }
            }
        }
        return redirect()->back()->with('success', 'Catalog and attachments saved successfully.');
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
        return view('admin.pages.catalog.edit', [
            'catalog' => Catalog::findOrFail($id),
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
        //
    }
}
