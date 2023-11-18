<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Support\Str;
use App\Http\Controllers\Controller;
use App\Http\Requests\VatTaxRequest;
use App\Repositories\Interfaces\CompanyRepositoryInterface;
use App\Repositories\Interfaces\VatAndTaxRepositoryInterface;

class VatAndTaxController extends Controller
{
    private $vatAndTaxRepository, $companyRepository;

    public function __construct(VatAndTaxRepositoryInterface $vatAndTaxRepository, CompanyRepositoryInterface $companyRepository)
    {
        $this->vatAndTaxRepository = $vatAndTaxRepository;
        $this->companyRepository   = $companyRepository;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.pages.vatAndTax.index', [
            'vatAndTaxes' => $this->vatAndTaxRepository->allVatAndTax(),
            'companies'   => $this->companyRepository->allCompany(),
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
    public function store(VatTaxRequest $request)
    {
        $data = [
            'country_id'  => $request->country_id,
            'company_id'  => $request->company_id,
            'type'        => $request->type,
            'name'        => $request->name,
            'slug'        => Str::slug($request->name),
            'rate'        => $request->rate,
            'description' => $request->description,
            'status'      => $request->status,
        ];
        $this->vatAndTaxRepository->storeVatAndTax($data);

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
    public function update(VatTaxRequest $request, $id)
    {
        $data = [
            'country_id'  => $request->country_id,
            'company_id'  => $request->company_id,
            'type'        => $request->type,
            'name'        => $request->name,
            'slug'        => Str::slug($request->name),
            'rate'        => $request->rate,
            'description' => $request->description,
            'status'      => $request->status,
        ];

        $this->vatAndTaxRepository->updateVatAndTax($data, $id);

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
        $this->vatAndTaxRepository->destroyVatAndTax($id);
    }
}
