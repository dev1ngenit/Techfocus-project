<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Models\Admin\SolutionCard;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\File;

class SolutionCardController extends Controller
{

    public function index()
    {
        $data['cards'] = DB::table('solution_cards')->orderBy('id', 'desc')->get();
        return view('admin.pages.solutionCard.index', $data);
    }


    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'title'   => 'required|max:255',
            'image'   => 'image|mimes:png,jpg,jpeg|max:2048',
            'icon'    => 'image|mimes:png,jpg,jpeg|max:2048',
        ], [
            'required'    => 'The Solution Card title must be required',
            'title.max'   => 'The Solution Card title may not be greater than 255 characters.',
            'image.image' => 'The Solution Card Image must be an image.',
            'image.mimes' => 'The Solution Card Image must be a file of type: jpeg, png, jpg, gif.',
            'image.max'   => 'The Solution Card Image may not be greater than 2048 kilobytes.',
            'icon.image'  => 'The Solution Card Icon must be an Image.',
            'icon.mimes'  => 'The Solution Card Icon must be a file of type: jpeg, png, jpg, gif.',
            'icon.max'    => 'The Solution Card Icon may not be greater than 2048 kilobytes.',
        ]);

        if ($validator->fails()) {
            Session::flash('error', $validator->errors()->all());
            return redirect()->back()->withInput();
        }

        $mainImageFile  = $request->file('image');
        $fileImagePath  = storage_path('app/public/solution-card/image/');
        $globalFunImage = !empty($mainImageFile) ? customUpload($mainImageFile, $fileImagePath) : ['status' => 0];

        $mainIconFile  = $request->file('icon');
        $fileIconPath  = storage_path('app/public/solution-card/icon/');
        $globalFunIcon = !empty($mainIconFile) ? customUpload($mainIconFile, $fileIconPath) : ['status' => 0];

        SolutionCard::create([
            'badge'       => $request->badge,
            'title'       => $request->title,
            'image'       => $globalFunImage['status'] == 1 ? $globalFunImage['file_name'] : null,
            'icon'        => $globalFunIcon['status'] == 1 ? $globalFunIcon['file_name'] : null,
            'short_des'   => $request->short_des,
            'link'        => $request->link,
            'button_name' => $request->button_name,
        ]);

        Session::flash('success', ['message' => 'Solution Card is created successfully']);
        return redirect()->back();
    }


    public function update(Request $request, $id)
    {
        $validator = Validator::make($request->all(), [
            'title'   => 'required|max:255',
            'image'   => 'image|mimes:png,jpg,jpeg|max:2048',
            'icon'    => 'image|mimes:png,jpg,jpeg|max:2048',
        ], [
            'required'    => 'The Solution Card title must be required',
            'title.max'   => 'The Solution Card title may not be greater than 255 characters.',
            'image.image' => 'The Solution Card Image must be an image.',
            'image.mimes' => 'The Solution Card Image must be a file of type: jpeg, png, jpg, gif.',
            'image.max'   => 'The Solution Card Image may not be greater than 2048 kilobytes.',
            'icon.image'  => 'The Solution Card Icon must be an Image.',
            'icon.mimes'  => 'The Solution Card Icon must be a file of type: jpeg, png, jpg, gif.',
            'icon.max'    => 'The Solution Card Icon may not be greater than 2048 kilobytes.',
        ]);

        if ($validator->fails()) {
            Session::flash('error', $validator->errors()->all());
            return redirect()->back()->withInput();
        }

        $solution_card = SolutionCard::findOrFail($id);

        $mainImageFile = $request->file('image');
        $fileImagePath = storage_path('app/public/solution-card/image/');

        $mainIconFile = $request->file('icon');
        $fileIconPath = storage_path('app/public/solution-card/icon/');

        $globalFunImage = ['status' => 0];
        $globalFunIcon = ['status' => 0];

        if (!empty($mainImageFile)) {
            $globalFunImage = customUpload($mainImageFile, $fileImagePath);

            if (!empty($solution_card->image)) {
                Storage::delete("public/solution-card/image/requestImg/{$solution_card->image}");
                Storage::delete("public/solution-card/image/{$solution_card->image}");
            }
        }

        if (!empty($mainIconFile)) {
            $globalFunIcon = customUpload($mainIconFile, $fileIconPath);

            if (!empty($solution_card->icon)) {
                Storage::delete("public/solution-card/icon/requestImg/{$solution_card->icon}");
                Storage::delete("public/solution-card/icon/{$solution_card->icon}");
            }
        }

        if ($solution_card->title !== $request->title) {
            $slug = Str::slug($request->title);
            $slug = SolutionCard::where('slug', $slug)
                ->where('id', '!=', $id)
                ->exists() ? $slug . '-' . now()->format('ymdis') . '-' . rand(0, 999) : $slug;
        } else {
            $slug = $solution_card->slug;
        }

        $solution_card->update([
            'badge'       => $request->badge,
            'title'       => $request->title,
            'slug'        => $slug,
            'image'       => $globalFunImage['status'] == 1 ? $globalFunImage['file_name'] : null,
            'icon'        => $globalFunIcon['status'] == 1 ? $globalFunIcon['file_name'] : null,
            'short_des'   => $request->short_des,
            'link'        => $request->link,
            'button_name' => $request->button_name,
        ]);

        Session::flash('success', ['message' => 'Solution Card is updated successfully']);
        return redirect()->back();
    }


    public function destroy($id)
    {
        $solution_card = SolutionCard::findOrFail($id);

        if (File::exists(public_path('storage/solution-card/image/') . $solution_card->image)) {
            File::delete(public_path('storage/solution-card/image/') . $solution_card->image);
        }
        if (File::exists(public_path('storage/solution-card/image/requestImg/') . $solution_card->image)) {
            File::delete(public_path('storage/solution-card/image/requestImg/') . $solution_card->image);
        }
        if (File::exists(public_path('storage/solution-card/icon/') . $solution_card->icon)) {
            File::delete(public_path('storage/solution-card/icon/') . $solution_card->icon);
        }
        if (File::exists(public_path('storage/solution-card/icon/requestImg/') . $solution_card->icon)) {
            File::delete(public_path('storage/solution-card/icon/requestImg/') . $solution_card->icon);
        }
        $solution_card->delete();
    }
}
