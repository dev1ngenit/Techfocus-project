<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\TermsAndPolicyRequest;
use App\Repositories\Interfaces\CompanyRepositoryInterface;
use App\Repositories\Interfaces\TermsAndPolicyRepositoryInterface;

class TermsAndPolicyController extends Controller
{
    private $termsAndPolicyRepository, $companyRepository;

    public function __construct(TermsAndPolicyRepositoryInterface $termsAndPolicyRepository, CompanyRepositoryInterface $companyRepository)
    {
        $this->termsAndPolicyRepository = $termsAndPolicyRepository;
        $this->companyRepository        = $companyRepository;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.pages.termsAndPolicy.index', [
            'termsAndPolicies' => $this->termsAndPolicyRepository->allTermsAndPolicy(),
            'companies'        => $this->companyRepository->allCompany(),
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
    public function store(TermsAndPolicyRequest $request)
    {
        // dd($request->all());
        $data = [
            'country_id'      => $request->country_id,
            'company_id'       => $request->company_id,
            'name'            => $request->name,
            'content'         => $request->content,
            'is_active'       => $request->is_active ?? '0',
            'version'         => $request->version,
            'effective_date'  => $request->effective_date,
            'expiration_date' => $request->expiration_date,
        ];
        $this->termsAndPolicyRepository->storeTermsAndPolicy($data);

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
    public function update(TermsAndPolicyRequest $request, $id)
    {
        $data = [
            'country_id'      => $request->country_id,
            'company_id'       => $request->company_id,
            'name'            => $request->name,
            'content'         => $request->content,
            'is_active'       => $request->is_active ?? '0',
            'version'         => $request->version,
            'effective_date'  => $request->effective_date,
            'expiration_date' => $request->expiration_date,
        ];

        $this->termsAndPolicyRepository->updateTermsAndPolicy($data, $id);

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
        $this->termsAndPolicyRepository->destroyTermsAndPolicy($id);
    }
}
