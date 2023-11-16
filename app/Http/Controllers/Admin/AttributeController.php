<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Models\Admin\Attribute;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;

class AttributeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['attributes'] = Attribute::with('values')->latest('id')->get();
        return view('admin.pages.attribute.index', $data);
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
        $validator = Validator::make(
            $request->all(),
            [
                'name' => 'required|unique:attributes',
            ],
            [
                'required' => 'The attribute name must be required',
                'unique'   => 'This attribute name has already been taken.',
            ],

        );

        if ($validator->passes()) {
            $slug = Str::slug($request->name);
            $count = Attribute::where('slug', $slug)->count();
            if ($count > 0) {
                $slug = $slug . '-' . date('ymdis') . '-' . rand(0, 999);
            }
            $data['slug'] = $slug;

            Attribute::create([
                'name'    => $request->name,
                'slug' => $data['slug'],
            ]);
            Session::flash('success', ['message' => 'Atrribute added successfully']);
            return redirect()->back();
        } else {

            // $messages = $validator->messages();
            // return redirect()->back()->with('error', ['messages' => $messages->all()]);
            Session::flash('error', $validator->errors()->all());
            return redirect()->back();
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
        $validator = Validator::make(
            $request->all(),
            [
                'name' => 'required|unique:attributes',
            ],
            [
                'required' => 'The attribute name must be required',
                'unique'   => 'This attribute name has already been taken.',
            ],

        );
        $attribute = Attribute::findOrFail($id);
        if ($validator->passes()) {
            $slug = Str::slug($request->name);
            $count = Attribute::where('slug', $slug)->count();
            if ($count > 0) {
                $slug = $slug . '-' . date('ymdis') . '-' . rand(0, 999);
            }
            $data['slug'] = $slug;

            $attribute->update([
                'name'    => $request->name,
                'slug' => $data['slug'],
            ]);
            Session::flash('success', ['message' => 'Atrribute added successfully']);
            return redirect()->back();
        } else {

            // $messages = $validator->messages();
            // return redirect()->back()->with('error', ['messages' => $messages->all()]);
            Session::flash('error', $validator->errors()->all());
            return redirect()->back();
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $attribute = Attribute::findOrFail($id);
        $attribute->delete(); 
    }
}
