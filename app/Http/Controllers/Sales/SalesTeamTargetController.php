<?php

namespace App\Http\Controllers\Sales;

use App\Http\Controllers\Controller;
use App\Http\Requests\SalesTeamTargetRequest;
use App\Models\Admin;
use App\Repositories\Interfaces\CompanyRepositoryInterface;
use App\Repositories\Interfaces\SalesTeamTargetRepositoryInterface;

class SalesTeamTargetController extends Controller
{
    private $salesTeamTargetRepository;
    private $companyRepository;

    public function __construct(SalesTeamTargetRepositoryInterface $salesTeamTargetRepository, CompanyRepositoryInterface $companyRepository)
    {
        $this->salesTeamTargetRepository = $salesTeamTargetRepository;
        $this->companyRepository = $companyRepository;
    }
 
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.pages.salesTeamTarget.index', [
            'salesTeamTargets' => $this->salesTeamTargetRepository->allSalesTeamTarget(),
            'companies' => $this->companyRepository->allCompany(),
            'admins' => Admin::get(['id','name']),
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
    public function store(SalesTeamTargetRequest $request)
    {
        $data = [
            'sales_man_id'         => $request->sales_man_id,
            'country_id'           => $request->country_id,
            'company_id'           => $request->company_id,
            'name'                 => $request->name,
            'fiscal_year'          => $request->fiscal_year,
            'year_target'          => $request->year_target,
            'quarter_one_target'   => $request->quarter_one_target,
            'quarter_two_target'   => $request->quarter_two_target,
            'quarter_three_target' => $request->quarter_three_target,
            'quarter_four_target'  => $request->quarter_four_target,
            'year_started'         => $request->year_started,
        ];
        $this->salesTeamTargetRepository->storeSalesTeamTarget($data);

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
    public function update(SalesTeamTargetRequest $request, $id)
    {
        $data = [
            'sales_man_id'         => $request->sales_man_id,
            'country_id'           => $request->country_id,
            'company_id'           => $request->company_id,
            'name'                 => $request->name,
            'fiscal_year'          => $request->fiscal_year,
            'year_target'          => $request->year_target,
            'quarter_one_target'   => $request->quarter_one_target,
            'quarter_two_target'   => $request->quarter_two_target,
            'quarter_three_target' => $request->quarter_three_target,
            'quarter_four_target'  => $request->quarter_four_target,
            'year_started'         => $request->year_started,
        ];

        $this->salesTeamTargetRepository->updateSalesTeamTarget($data, $id);

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
        $this->salesTeamTargetRepository->destroySalesTeamTarget($id);
    }
}
