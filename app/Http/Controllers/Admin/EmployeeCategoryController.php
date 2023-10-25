<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Support\Str;
use App\Http\Controllers\Controller;
use App\Http\Requests\EmployeeCategoryRequest;
use App\Repositories\Interfaces\CompanyRepositoryInterface;
use App\Repositories\Interfaces\EmployeeCategoryRepositoryInterface;

class EmployeeCategoryController extends Controller
{
    private $employeeCategoryRepository;
    private $companyRepository;

    public function __construct(EmployeeCategoryRepositoryInterface $employeeCategoryRepository, CompanyRepositoryInterface $companyRepository)
    {
        $this->employeeCategoryRepository = $employeeCategoryRepository;
        $this->companyRepository          = $companyRepository;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = [
            'employeeCategories' => $this->employeeCategoryRepository->allEmployeeCategory(),
            'companies'          => $this->companyRepository->allCompany(),
        ];
        return view('admin.pages.employeeCategory.index', $data);
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
    public function store(EmployeeCategoryRequest $request)
    {
        $data = [
            'country_id'            => $request->country_id,
            'company_id'            => $request->company_id,
            'name'                  => $request->name,
            'slug'                  => Str::slug($request->name),
            'evaluation_period'     => $request->evaluation_period,
            'monthly_earned_leave'  => $request->monthly_earned_leave,
            'monthly_casual_leave'  => $request->monthly_casual_leave,
            'monthly_medical_leave' => $request->monthly_medical_leave,
            'yearly_earned_leave'   => $request->monthly_earned_leave * 12,
            'yearly_casual_leave'   => $request->monthly_casual_leave * 12,
            'yearly_medical_leave'  => $request->monthly_medical_leave * 12,
        ];

        $this->employeeCategoryRepository->storeEmployeeCategory($data);

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
    public function update(EmployeeCategoryRequest $request, $id)
    {
        $data = [
            'country_id'            => $request->country_id,
            'company_id'            => $request->company_id,
            'name'                  => $request->name,
            'slug'                  => Str::slug($request->name),
            'evaluation_period'     => $request->evaluation_period,
            'monthly_earned_leave'  => $request->monthly_earned_leave,
            'monthly_casual_leave'  => $request->monthly_casual_leave,
            'monthly_medical_leave' => $request->monthly_medical_leave,
            'yearly_earned_leave'   => $request->monthly_earned_leave * 12,
            'yearly_casual_leave'   => $request->monthly_casual_leave * 12,
            'yearly_medical_leave'  => $request->monthly_medical_leave * 12,
        ];

        $this->employeeCategoryRepository->updateEmployeeCategory($data, $id);

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
        $this->employeeCategoryRepository->destroyEmployeeCategory($id);
    }
}
