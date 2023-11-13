<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Models\Admin\Attribute;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
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

            return redirect()->back()->with('success', ['message' => 'Atrribute added successfully']);
        } else {

            // $messages = $validator->messages();
            // return redirect()->back()->with('error', ['messages' => $messages->all()]);
            return redirect()->back()->with('error', $validator->errors());
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
