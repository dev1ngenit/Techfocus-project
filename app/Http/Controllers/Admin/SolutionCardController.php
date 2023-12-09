<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Models\Admin\SolutionCard;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\File;

class SolutionCardController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['solutionCards'] = SolutionCard::latest()->get();
        return view('admin.pages.solutionCard.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.pages.solutionCard.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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
        $data['solutionCard'] = SolutionCard::findOrFail($id);
        return view('admin.pages.solutionCard.edit', $data);
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
        $solutionCard = SolutionCard::find($id);

        if (File::exists(public_path('storage/') . $solutionCard->image)) {
            File::delete(public_path('storage/') . $solutionCard->image);
        }
        if (File::exists(public_path('storage/requestImg/') . $solutionCard->image)) {
            File::delete(public_path('storage/requestImg/') . $solutionCard->image);
        }
        if (File::exists(public_path('storage/thumb/') . $solutionCard->image)) {
            File::delete(public_path('storage/thumb/') . $solutionCard->image);
        }
        $solutionCard->delete();
    }
}
