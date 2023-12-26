<?php

namespace App\Http\Controllers\HR;

use Illuminate\Support\Str;
use App\Http\Controllers\Controller;
use App\Http\Requests\ProjectKpiRequest;
use App\Models\Admin;
use App\Models\Admin\EmployeeProject;
use App\Models\HR\ProjectKpi;
use Illuminate\Http\Request;

class ProjectKpiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.pages.projectKpi.index', [
            'projectKpies'    => ProjectKpi::get(),
            'projects'    => EmployeeProject::get(['id', 'name']),
            'employees'    => Admin::get(['id', 'name']),
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ProjectKpiRequest $request)
    {
        ProjectKpi::create([
            'project_id'         => $request->project_id,
            'employee_id'        => $request->employee_id,
            'name'               => $request->name,
            'given_hour'         => $request->given_hour,
            'actual_hour'        => $request->actual_hour,
            'status'             => $request->status,
            'team_leader_rating' => $request->team_leader_rating,
            'supervisor_rating'  => $request->supervisor_rating,
            'kpi_ratio'          => $request->kpi_ratio,
            'late_reason'          => $request->late_reason,
            'comments'          => $request->comments,
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
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(ProjectKpiRequest $request, $id)
    {
        $projectKpi = ProjectKpi::find($id);

        $projectKpi->update([
            'project_id'         => $request->project_id,
            'employee_id'        => $request->employee_id,
            'name'               => $request->name,
            'given_hour'         => $request->given_hour,
            'actual_hour'        => $request->actual_hour,
            'status'             => $request->status,
            'team_leader_rating' => $request->team_leader_rating,
            'supervisor_rating'  => $request->supervisor_rating,
            'kpi_ratio'          => $request->kpi_ratio,
            'late_reason'          => $request->late_reason,
            'comments'          => $request->comments,
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
        ProjectKpi::find($id)->delete();
    }
}
