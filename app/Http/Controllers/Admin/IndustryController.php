<?php

namespace App\Http\Controllers\Admin;

use App\Models\Admin\Row;
use Illuminate\Support\Str;
use App\Models\Admin\Industry;
use App\Models\Admin\SolutionCard;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\File;
use App\Http\Requests\IndustryRequest;

class IndustryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['industries'] =  Industry::get();
        return view('admin.pages.industry.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data['industryParentID'] =  Industry::get(['id', 'name']);
        return view('admin.pages.industry.create', $data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(IndustryRequest $request)
    {
        $RowsMainFileImageOne   = $request->file('rows_image_one');
        $RowsMainFileImageThree = $request->file('rows_image_three');
        $RowsMainFileImageFive  = $request->file('rows_image_five');

        $mainFile = $request->file('image');
        $logoFile = $request->file('logo');

        $filePathRowsImageOnes  = storage_path('app/public/row/');
        $filePathRowsImageThree = storage_path('app/public/row/');
        $filePathRowsImageFives = storage_path('app/public/row/');

        $filePathImage = storage_path('app/public/industry/image');
        $filePathLogo = storage_path('app/public/industry/logo');

        if (!empty($mainFile)) {
            $globalFunImage = customUpload($mainFile, $filePathImage);
        } else {
            $globalFunImage = ['status' => 0];
        }

        if (!empty($logoFile)) {
            $globalFunLogo = customUpload($logoFile, $filePathLogo);
        } else {
            $globalFunLogo = ['status' => 0];
        }

        if (!empty($RowsMainFileImageOne)) {
            $globalFunRowsImageOnes  = customUpload($RowsMainFileImageOne, $filePathRowsImageOnes);
        } else {
            $globalFunRowsImageOnes = ['status' => 0];
        }

        if (!empty($RowsMainFileImageThree)) {
            $globalFunRowsImageThree  = customUpload($RowsMainFileImageThree, $filePathRowsImageThree);
        } else {
            $globalFunRowsImageThree = ['status' => 0];
        }

        if (!empty($RowsMainFileImageFive)) {
            $globalFunRowsImageFives  = customUpload($RowsMainFileImageFive, $filePathRowsImageFives);
        } else {
            $globalFunRowsImageFives = ['status' => 0];
        }

        $rowOneId = Row::create([
            'badge'       => $request->row_one_badge,
            'title'       => $request->row_one_title,
            'image'       => $globalFunRowsImageOnes['status'] == 1 ? $globalFunRowsImageOnes['file_name'] : null,
            'btn_name'    => $request->row_one_btn_name,
            'link'        => $request->row_one_link,
            'description' => $request->row_one_description,
        ]);

        $rowFourId = Row::create([
            'badge'       => $request->row_four_badge,
            'title'       => $request->row_four_title,
            'image'       => $globalFunRowsImageThree['status'] == 1 ? $globalFunRowsImageThree['file_name'] : null,
            'btn_name'    => $request->row_four_btn_name,
            'link'        => $request->row_four_link,
            'description' => $request->row_four_description,
        ]);

        $rowFiveId = Row::create([
            'badge'       => $request->row_five_badge,
            'title'       => $request->row_five_title,
            'image'        => $globalFunRowsImageFives['status'] == 1 ? $globalFunRowsImageFives['file_name'] : null,
            'btn_name'    => $request->row_five_btn_name,
            'link'        => $request->row_five_link,
            'description' => $request->row_five_description,
        ]);

        Industry::create([
            'parent_id'               => $request->parent_id,
            'name'                    => $request->name,
            'description'             => $request->description,
            'image'                   => $globalFunImage['status'] == 1 ? $globalFunImage['file_name'] : null,
            'logo'                    => $globalFunLogo['status']  == 1 ? $globalFunLogo['file_name'] : null,
            'website_url'             => $request->website_url,

            'row_one_id'              => $rowOneId->id,
            'row_three_id'            => $rowFourId->id,
            'row_five_id'             => $rowFiveId->id,

            'solution_one_id'         => $request->solution_one_id,
            'solution_two_id'         => $request->solution_two_id,
            'solution_three_id'       => $request->solution_three_id,
            'solution_four_id'        => $request->solution_four_id,
            'client_story_id'         => $request->client_story_id,
            'header'                  => $request->header,
            'btn_one_name'            => $request->btn_one_name,
            'btn_one_link'            => $request->btn_one_link,
            'row_four_title'          => $request->row_four_title,
            'row_four_header'         => $request->row_four_header,
            'row_four_col_one_title'  => $request->row_four_col_one_title,
            'row_four_col_one_header' => $request->row_four_col_one_header,
            'row_four_col_two_title'  => $request->row_four_col_two_title,
            'row_four_col_two_header' => $request->row_four_col_two_header,
            'footer_title'            => $request->footer_title,
            'footer_header'           => $request->footer_header,
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
        return view('admin.pages.industry.create', [
            'industries' =>  Industry::find($id),
            'industryParentID' =>  Industry::get(['id', 'name']),
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(IndustryRequest $request, $id)
    {
        $industry = Industry::with('rowOne', 'rowThree', 'rowFive')->find($id);

        $RowsMainFileImageOne   = $request->file('rows_image_one');
        $RowsMainFileImageThree = $request->file('rows_image_three');
        $RowsMainFileImageFive  = $request->file('rows_image_five');

        $mainFile = $request->file('image');
        $logoFile = $request->file('logo');

        $filePathRowsImageOnes  = storage_path('app/public/row/');
        $filePathRowsImageThree = storage_path('app/public/row/');
        $filePathRowsImageFives = storage_path('app/public/row/');

        $filePathImage = storage_path('app/public/industry/image');
        $filePathLogo = storage_path('app/public/industry/logo');

        if (!empty($mainFile)) {
            $globalFunImage = customUpload($mainFile, $filePathImage);

            $paths = [
                storage_path("'app/public/industry/image/{$industry->image}"),
            ];
            foreach ($paths as $path) {
                if (File::exists($path)) {
                    File::delete($path);
                }
            }
        } else {
            $globalFunImage = ['status' => 0];
        }

        if (!empty($logoFile)) {
            $globalFunLogo = customUpload($logoFile, $filePathLogo);
            $paths = [
                storage_path("'app/public/industry/logo/{$industry->logo}"),
            ];
            foreach ($paths as $path) {
                if (File::exists($path)) {
                    File::delete($path);
                }
            }
        } else {
            $globalFunLogo = ['status' => 0];
        }

        if (!empty($RowsMainFileImageOne)) {
            $globalFunRowsImageOnes  = customUpload($RowsMainFileImageOne, $filePathRowsImageOnes);
            $paths = [
                storage_path("app/public/row/{$industry->rowOne->image}"),
            ];
            foreach ($paths as $path) {
                if (File::exists($path)) {
                    File::delete($path);
                }
            }
        } else {
            $globalFunRowsImageOnes = ['status' => 0];
        }

        if (!empty($RowsMainFileImageThree)) {
            $globalFunRowsImageThree  = customUpload($RowsMainFileImageThree, $filePathRowsImageThree);
            $paths = [
                storage_path("app/public/row/{$industry->rowThree->image}"),
            ];
            foreach ($paths as $path) {
                if (File::exists($path)) {
                    File::delete($path);
                }
            }
        } else {
            $globalFunRowsImageThree = ['status' => 0];
        }

        if (!empty($RowsMainFileImageFive)) {
            $globalFunRowsImageFives  = customUpload($RowsMainFileImageFive, $filePathRowsImageFives);
            $paths = [
                storage_path("app/public/row/{$industry->rowFive->image}"),
            ];
            foreach ($paths as $path) {
                if (File::exists($path)) {
                    File::delete($path);
                }
            }
        } else {
            $globalFunRowsImageFives = ['status' => 0];
        }

        $rowOneId = $industry->rowOne->update([
            'badge'       => $request->row_one_badge,
            'title'       => $request->row_one_title,
            'image'       => $globalFunRowsImageOnes['status'] == 1 ? $globalFunRowsImageOnes['file_name'] : $industry->rowOne->image,
            'btn_name'    => $request->row_one_btn_name,
            'link'        => $request->row_one_link,
            'description' => $request->row_one_description,
        ]);

        $rowFourId = $industry->rowThree->update([
            'badge'       => $request->row_four_badge,
            'title'       => $request->row_four_title,
            'image'       => $globalFunRowsImageThree['status'] == 1 ? $globalFunRowsImageThree['file_name'] : $industry->rowThree->image,
            'btn_name'    => $request->row_four_btn_name,
            'link'        => $request->row_four_link,
            'description' => $request->row_four_description,
        ]);

        $rowFiveId = $industry->rowFive->update([
            'badge'       => $request->row_five_badge,
            'title'       => $request->row_five_title,
            'image'        => $globalFunRowsImageFives['status'] == 1 ? $globalFunRowsImageFives['file_name'] : $industry->rowFive->image,
            'btn_name'    => $request->row_five_btn_name,
            'link'        => $request->row_five_link,
            'description' => $request->row_five_description,
        ]);

        $industry->update([
            'parent_id'               => $request->parent_id,
            'name'                    => $request->name,
            'description'             => $request->description,
            'image'                   => $globalFunImage['status'] == 1 ? $globalFunImage['file_name'] :  $industry->image,
            'logo'                    => $globalFunLogo['status']  == 1 ? $globalFunLogo['file_name'] :  $industry->logo,
            'website_url'             => $request->website_url,

            // 'row_one_id'              => $rowOneId->id,
            // 'row_three_id'            => $rowFourId->id,
            // 'row_five_id'             => $rowFiveId->id,

            'solution_one_id'         => $request->solution_one_id,
            'solution_two_id'         => $request->solution_two_id,
            'solution_three_id'       => $request->solution_three_id,
            'solution_four_id'        => $request->solution_four_id,
            'client_story_id'         => $request->client_story_id,
            'header'                  => $request->header,
            'btn_one_name'            => $request->btn_one_name,
            'btn_one_link'            => $request->btn_one_link,
            'row_four_title'          => $request->row_four_title,
            'row_four_header'         => $request->row_four_header,
            'row_four_col_one_title'  => $request->row_four_col_one_title,
            'row_four_col_one_header' => $request->row_four_col_one_header,
            'row_four_col_two_title'  => $request->row_four_col_two_title,
            'row_four_col_two_header' => $request->row_four_col_two_header,
            'footer_title'            => $request->footer_title,
            'footer_header'           => $request->footer_header,
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
        $industry = Industry::with('rowOne', 'rowThree', 'rowFive')->find($id);

        $paths = [
            storage_path("'app/public/industry/image/{$industry->image}"),
            storage_path("'app/public/industry/logo/{$industry->logo}"),
            storage_path("app/public/row/{$industry->rowOne->image}"),
            storage_path("app/public/row/{$industry->rowThree->image}"),
            storage_path("app/public/row/{$industry->rowFive->image}"),
        ];

        foreach ($paths as $path) {
            if (File::exists($path)) {
                File::delete($path);
            }
        }
        $industry->delete();
    }
}
