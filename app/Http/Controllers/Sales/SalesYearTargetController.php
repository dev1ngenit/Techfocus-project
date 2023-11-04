<?php

namespace App\Http\Controllers\Sales;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\SalesYearTargetRequest;
use App\Repositories\Interfaces\SalesYearTargetRepositoryInterface;

class SalesYearTargetController extends Controller
{
    private $salesYearTargetRepository;

    public function __construct(SalesYearTargetRepositoryInterface $salesYearTargetRepository)
    {
        $this->salesYearTargetRepository = $salesYearTargetRepository;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.pages.salesYearTarget.index', [
            'salesYearTargets' => $this->salesYearTargetRepository->allSalesYearTarget(),
        ]);
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
    public function store(SalesYearTargetRequest $request)
    {
        $data = [
            'country_id'           => $request->country_id,
            'company_id'           => $request->company_id,
            'fiscal_year'          => $request->fiscal_year,
            'year_target'          => $request->year_target,
            'quarter_one_target'   => $request->quarter_one_target,
            'quarter_two_target'   => $request->quarter_two_target,
            'quarter_three_target' => $request->quarter_three_target,
            'quarter_four_target'  => $request->quarter_four_target,
            'year_started'         => $request->year_started,
            'january_target'       => $request->january_target,
            'february_target'      => $request->february_target,
            'march_target'         => $request->march_target,
            'april_target'         => $request->april_target,
            'may_target'           => $request->may_target,
            'june_target'          => $request->june_target,
            'july_target'          => $request->july_target,
            'august_target'        => $request->august_target,
            'september_target'     => $request->september_target,
            'october_target'       => $request->october_target,
            'november_target'      => $request->november_target,
            'december_target'      => $request->december_target,
        ];
        $this->salesYearTargetRepository->storeSalesYearTarget($data);

        toastr()->success('Data has been saved successfully!');
        return redirect()->back();
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
    public function update(SalesYearTargetRequest $request, $id)
    {
        $data = [
            'country_id'           => $request->country_id,
            'company_id'           => $request->company_id,
            'fiscal_year'          => $request->fiscal_year,
            'year_target'          => $request->year_target,
            'quarter_one_target'   => $request->quarter_one_target,
            'quarter_two_target'   => $request->quarter_two_target,
            'quarter_three_target' => $request->quarter_three_target,
            'quarter_four_target'  => $request->quarter_four_target,
            'year_started'         => $request->year_started,
            'january_target'       => $request->january_target,
            'february_target'      => $request->february_target,
            'march_target'         => $request->march_target,
            'april_target'         => $request->april_target,
            'may_target'           => $request->may_target,
            'june_target'          => $request->june_target,
            'july_target'          => $request->july_target,
            'august_target'        => $request->august_target,
            'september_target'     => $request->september_target,
            'october_target'       => $request->october_target,
            'november_target'      => $request->november_target,
            'december_target'      => $request->december_target,
        ];

        $this->salesYearTargetRepository->updateSalesYearTarget($data, $id);

        toastr()->success('Data has been updated successfully!');
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
        $this->salesYearTargetRepository->destroySalesYearTarget($id);
    }
}
