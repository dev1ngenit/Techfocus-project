<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\BankingRequest;
use App\Repositories\Interfaces\BankingRepositoryInterface;
use App\Repositories\Interfaces\CompanyRepositoryInterface;

class BankingController extends Controller
{
    private $bankingRepository, $companyRepository;

    public function __construct(BankingRepositoryInterface $bankingRepository, CompanyRepositoryInterface $companyRepository)
    {
        $this->bankingRepository = $bankingRepository;
        $this->companyRepository = $companyRepository;
    }

    /** 
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.pages.banking.index', [
            'bankings'  => $this->bankingRepository->allBanking(),
            'companies' => $this->companyRepository->allCompany(),
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
    public function store(BankingRequest $request)
    {
        $data = [
            'country_id'     => $request->country_id,
            'company_id'     => $request->company_id,
            'month'          => $request->month,
            'date'           => $request->date,
            'fiscal_year'    => $request->fiscal_year,
            'bank_name'      => $request->bank_name,
            'deposit'        => $request->deposit,
            'withdraw'       => $request->withdraw,
            'purpose'        => $request->purpose,
            'notes'          => $request->notes,
            'transaction_id' => $request->transaction_id,
            'invoice_number' => $request->invoice_number,
            'status'         => $request->status,
        ];
        $this->bankingRepository->storeBanking($data);

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
    public function update(BankingRequest $request, $id)
    {
        $data = [
            'country_id'     => $request->country_id,
            'company_id'     => $request->company_id,
            'month'          => $request->month,
            'date'           => $request->date,
            'fiscal_year'    => $request->fiscal_year,
            'bank_name'      => $request->bank_name,
            'deposit'        => $request->deposit,
            'withdraw'       => $request->withdraw,
            'purpose'        => $request->purpose,
            'notes'          => $request->notes,
            'transaction_id' => $request->transaction_id,
            'invoice_number' => $request->invoice_number,
            'status'         => $request->status,
        ];

        $this->bankingRepository->updateBanking($data, $id);

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
        $this->bankingRepository->destroyBanking($id);
    }
}
