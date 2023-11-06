<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Support\Str;
use App\Http\Controllers\Controller;
use App\Http\Requests\EmployeeDepartmentRequest;
use App\Repositories\Interfaces\CompanyRepositoryInterface;
use App\Repositories\Interfaces\EmployeeDepartmentRepositoryInterface;

class EmployeeDepartmentController extends Controller
{
    private $employeeDepartmentRepository, $companyRepository;

    public function __construct(EmployeeDepartmentRepositoryInterface $employeeDepartmentRepository, CompanyRepositoryInterface $companyRepository)
    {
        $this->employeeDepartmentRepository = $employeeDepartmentRepository;
        $this->companyRepository            = $companyRepository;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = [
            'employeeDepartments' => $this->employeeDepartmentRepository->allEmployeeDepartment(),
            'companies'           => $this->companyRepository->allCompany(),
        ];
        return view('admin.pages.employeeDepartment.index', $data);
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
    public function store(EmployeeDepartmentRequest $request)
    {
        $data = [
            'country_id'  => $request->country_id,
            'company_id'  => $request->company_id,
            'name'        => $request->name,
            'slug'        => Str::slug($request->name),
        ];
        $this->employeeDepartmentRepository->storeEmployeeDepartment($data);

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
    public function update(EmployeeDepartmentRequest $request, $id)
    {
        $data = [
            'country_id'  => $request->country_id,
            'company_id'  => $request->company_id,
            'name'        => $request->name,
            'slug'        => Str::slug($request->name),
        ];
        $this->employeeDepartmentRepository->updateEmployeeDepartment($data, $id);

        toastr()->success('Data has been saved successfully!');
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
        $this->employeeDepartmentRepository->destroyEmployeeDepartment($id);
    }
}
