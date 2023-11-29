<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Models\Admin\Catalog;
use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use App\Http\Controllers\Controller;
use App\Models\Admin\CatalogAttachment;

class CatalogController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // Validate the request data
        $request->validate([
            'category' => 'string|nullable',
            'brand_id' => 'array|nullable',
            'product_id' => 'array|nullable',
            'industry_id' => 'array|nullable',
            'solution_id' => 'array|nullable',
            'company_id' => 'array|nullable',
            'name' => 'string|nullable',
            'slug' => 'string|unique:catalogs,slug|nullable',
            'thumbnail' => 'image|nullable',
            'page_number' => 'string|max:20|nullable',
            'description' => 'string|nullable',
            'company_button_name' => 'string|nullable',
            'company_button_link' => 'string|nullable',
            'document' => 'file|mimes:pdf|nullable',
            'attachments' => 'array',
            'attachments.*.page_image' => 'image|nullable',
            'attachments.*.page_description' => 'string|nullable',
            'attachments.*.page_link' => 'string|nullable',
            'attachments.*.button_name' => 'string|nullable',
            'attachments.*.button_link' => 'string|nullable',
        ]);

        DB::beginTransaction();

        try {
            // Prepare catalog data
            $catalogData = [
                'category' => $request->input('category'),
                'brand_id' => json_encode($request->input('brand_id', [])),
                'product_id' => json_encode($request->input('product_id', [])),
                'industry_id' => json_encode($request->input('industry_id', [])),
                'solution_id' => json_encode($request->input('solution_id', [])),
                'company_id' => json_encode($request->input('company_id', [])),
                'name' => $request->input('name'),
                'slug' => $request->input('slug'),
                'page_number' => $request->input('page_number'),
                'description' => $request->input('description'),
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

            // Handle attachments
            foreach ($request->input('attachments', []) as $attachmentData) {
                $attachmentCreateData = [
                    'catalog_id'       => $catalog->id,
                    'page_description' => $attachmentData['page_description'] ?? null,
                    'page_link'        => $attachmentData['page_link'] ?? null,
                    'button_name'      => $attachmentData['button_name'] ?? null,
                    'button_link'      => $attachmentData['button_link'] ?? null,
                ];

                if (isset($attachmentData['page_image']) && $attachmentData['page_image'] instanceof UploadedFile) {
                    $uploadResult = customUpload($attachmentData['page_image'], storage_path('app/public/catalog-attachment/page-image/'));
                    $attachmentCreateData['page_image'] = $uploadResult['file_name'];
                }

                CatalogAttachment::create($attachmentCreateData);
            }

            DB::commit();
            return response()->json(['message' => 'Catalog and attachments saved successfully.'], 200);
        } catch (\Exception $e) {
            DB::rollBack();
            Log::error('Catalog creation failed: ' . $e->getMessage());
            return response()->json(['error' => 'Failed to save catalog and attachments.'], 500);
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
