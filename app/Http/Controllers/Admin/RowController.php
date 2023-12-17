<?php

namespace App\Http\Controllers\Admin;

use App\Models\Admin\Row;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;

class RowController extends Controller
{
    
    public function index()
    {
        $data['rows'] = DB::table('rows')->orderBy('id', 'desc')->get();
        return view('admin.pages.row.index', $data);
    }

    
    public function create()
    {
        return view('admin.pages.row.create');
    }

    
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'title'   => 'required|max:255',
            'image'   => 'image|mimes:png,jpg,jpeg|max:2048',
        ], [
            'required'    => 'The row title must be required',
            'name.max'    => 'The row title may not be greater than 255 characters.',
            'image.image' => 'The file must be an image.',
            'image.mimes' => 'The image must be a file of type: jpeg, png, jpg, gif.',
            'image.max'   => 'The image may not be greater than 2048 kilobytes.',
        ]);

        if ($validator->fails()) {
            Session::flash('error', $validator->errors()->all());
            return redirect()->back()->withInput();
        }

        $mainFile = $request->file('image');
        $filePath = storage_path('app/public/row/');
        $globalFunImage = !empty($mainFile) ? customUpload($mainFile, $filePath) : ['status' => 0];

        Row::create([
            'title'       => $request->title,
            'badge'       => $request->badge,
            'short_des'   => $request->short_des,
            'btn_name'    => $request->btn_name,
            'link'        => $request->link,
            'list_title'  => $request->list_title,
            'list_one'    => $request->list_one,
            'list_two'    => $request->list_two,
            'list_three'  => $request->list_three,
            'list_four'   => $request->list_four,
            'description' => $request->description,
            'image'       => $globalFunImage['status'] == 1 ? $globalFunImage['file_name'] : null,
        ]);

        Session::flash('success', ['message' => 'Row is created successfully']);
        return redirect()->back()->withInput();
    }

   
    public function show($id)
    {
        //
    } 

    public function edit($id)
    {
        $data['row'] = Row::findOrFail($id);
        return view('admin.pages.row.edit', $data);
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
        $validator = Validator::make($request->all(), [
            'title' => 'required|max:255',
            'image' => 'image|mimes:png,jpg,jpeg|max:2048',
        ], [
            'required'    => 'The row title must be required',
            'name.max'    => 'The row title may not be greater than 255 characters.',
            'image.image' => 'The file must be an image.',
            'image.mimes' => 'The image must be a file of type: jpeg, png, jpg, gif.',
            'image.max'   => 'The image may not be greater than 2048 kilobytes.',
        ]);

        if ($validator->fails()) {
            Session::flash('error', $validator->errors()->all());
            return redirect()->back();
        }
 
        $row = Row::findOrFail($id);

        $mainFile = $request->file('image');
        $filePath = storage_path('app/public/row/');

        if (!empty($mainFile)) {
            $globalFunImage = customUpload($mainFile, $filePath);
            if (!empty($row->image)) {
                Storage::delete("public/row/requestImg/{$row->image}");
                Storage::delete("public/row/{$row->image}");
            }
        } else {
            $globalFunImage = ['status' => 0];
        }

        if ($row->title !== $request->title) {
            $slug = Str::slug($request->title);
            $slug = Row::where('slug', $slug)
                ->where('id', '!=', $id)
                ->exists() ? $slug . '-' . now()->format('ymdis') . '-' . rand(0, 999) : $slug;
        } else {
            $slug = $row->slug;
        }


        $row->update([
            'title'       => $request->title,
            'badge'       => $request->badge,
            'slug'        => $slug,
            'short_des'   => $request->short_des,
            'btn_name'    => $request->btn_name,
            'link'        => $request->link,
            'list_title'  => $request->list_title,
            'list_one'    => $request->list_one,
            'list_two'    => $request->list_two,
            'list_three'  => $request->list_three,
            'list_four'   => $request->list_four,
            'description' => $request->description,
            'image'       => $globalFunImage['status'] == 1 ? $globalFunImage['file_name'] : null,
        ]);

        Session::flash('success', ['message' => 'Row is updated successfully']);
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
        $row = Row::findOrFail($id);

        if (File::exists(public_path('storage/row/') . $row->image)) {
            File::delete(public_path('storage/row/') . $row->image);
        }
        if (File::exists(public_path('storage/row/requestImg/') . $row->image)) {
            File::delete(public_path('storage/row/requestImg/') . $row->image);
        }
        $row->delete();
    }
}
