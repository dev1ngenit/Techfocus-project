<?php

namespace App\Http\Controllers\HR;

use Illuminate\Support\Str;
use App\Http\Controllers\Controller;
use App\Http\Requests\EmployeeProjectRequest;
use App\Models\Admin\Company;
use App\Models\Admin\EmployeeProject;
use Illuminate\Http\Request;

class EmployeeProjectController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.pages.employeeProject.index', [
            'employeeProjects'    => EmployeeProject::get(),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.pages.employeeProject.create', [
            'companies'    => Company::get(['id', 'name']),
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(EmployeeProjectRequest $request)
    {
        EmployeeProject::create([
            'country_id'             => $request->country_id,
            'company_id'             => $request->company_id,
            'name'                   => $request->name,
            'description'            => $request->description,
            'type'                   => $request->type,
            'start_date'             => $request->start_date,
            'end_date'               => $request->end_date,
            'start_time'             => $request->start_time,
            'end_time'               => $request->end_time,
            'supervisor'             => json_encode($request->supervisor),
            'assigned_employee'      => json_encode($request->assigned_employee),
            'review'                 => $request->review,
            'project_status'         => $request->project_status,
            'status'                 => $request->status,
            'weight'                 => $request->weight,
            'kpi_rating'             => $request->kpi_rating,
            'total_working_day'      => $request->total_working_day,
            'total_working_man_hour' => $request->total_working_man_hour,
        ]);

        return redirect()->back()->with('success', 'Data has been saved successfully!');
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
        return view('admin.pages.employeeProject.create', [
            'employeeProject'    => EmployeeProject::find($id),
            'companies'    => Company::get(['id', 'name']),
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(EmployeeProjectRequest $request, $id)
    {
        $employeeProject = EmployeeProject::find($id);

        $employeeProject->update([
            'country_id'             => $request->country_id,
            'company_id'             => $request->company_id,
            'name'                   => $request->name,
            'description'            => $request->description,
            'type'                   => $request->type,
            'start_date'             => $request->start_date,
            'end_date'               => $request->end_date,
            'start_time'             => $request->start_time,
            'end_time'               => $request->end_time,
            'supervisor'             => json_encode($request->supervisor),
            'assigned_employee'      => json_encode($request->assigned_employee),
            'review'                 => $request->review,
            'project_status'         => $request->project_status,
            'status'                 => $request->status,
            'weight'                 => $request->weight,
            'kpi_rating'             => $request->kpi_rating,
            'total_working_day'      => $request->total_working_day,
            'total_working_man_hour' => $request->total_working_man_hour,
        ]);

        return redirect()->back()->with('success', 'Data has been saved successfully!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        EmployeeProject::find($id)->delete();
    }
}
