<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\HrPolicyRequest;
use App\Repositories\Interfaces\CompanyRepositoryInterface;
use App\Repositories\Interfaces\HrPolicyRepositoryInterface;
use App\Repositories\Interfaces\DynamicCategoryRepositoryInterface;

class HrPolicyController extends Controller
{
    private $hrPolicyRepository, $dynamicCategoryRepository, $companyRepository;

    public function __construct(HrPolicyRepositoryInterface $hrPolicyRepository, DynamicCategoryRepositoryInterface $dynamicCategoryRepository, CompanyRepositoryInterface $companyRepository)
    {
        $this->hrPolicyRepository        = $hrPolicyRepository;
        $this->dynamicCategoryRepository = $dynamicCategoryRepository;
        $this->companyRepository         = $companyRepository;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.pages.hrPolicy.index', [
            'hrPolicys'         => $this->hrPolicyRepository->allHrPolicy(),
            'dynamicCategories' => $this->dynamicCategoryRepository->allDynamicCategory(),
            'companies'         => $this->companyRepository->allCompany(),
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
    public function store(HrPolicyRequest $request)
    {
        $data = [
            'country_id'          => $request->country_id,
            'dynamic_category_id' => $request->dynamic_category_id,
            'title'               => $request->title,
            'description'         => $request->description,
            'effective_date'      => $request->effective_date,
            'expiration_date'     => $request->expiration_date,
            'status'              => $request->status,
            'version'             => $request->version,
        ];
        $this->hrPolicyRepository->storeHrPolicy($data);

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
    public function update(HrPolicyRequest $request, $id)
    {
        $data = [
            'country_id'          => $request->country_id,
            'dynamic_category_id' => $request->dynamic_category_id,
            'title'               => $request->title,
            'description'         => $request->description,
            'effective_date'      => $request->effective_date,
            'expiration_date'     => $request->expiration_date,
            'status'              => $request->status,
            'version'             => $request->version,
        ];

        $this->hrPolicyRepository->updateHrPolicy($data, $id);

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
        $this->hrPolicyRepository->destroyHrPolicy($id);
    }
}
