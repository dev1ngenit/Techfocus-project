<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Models\HR\Attendance;
use App\Http\Controllers\Controller;
use App\Models\Admin;
use App\Models\Admin\Company;

class AttendanceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.pages.attendance.index', [
            'attendances' => Attendance::get(),
            'employees'   => Admin::get(),
            'companies'   => Company::get(),
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
    public function store(Request $request)
    {
        $data = [
            'country_id'  => $request->country_id,
            'employee_id' => $request->employee_id,
            'company_id'  => $request->company_id,
            'year'        => $request->year,
            'month'       => $request->month,
            'date'        => $request->date,
            'check_in'    => $request->check_in,
            'check_out'   => $request->check_out,
            'status'      => $request->status,
        ];
        Attendance::create($data);

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
    public function update(Request $request, $id)
    {
        $attendance = Attendance::find($id);

        $attendance->update([
            'country_id'  => $request->country_id,
            'employee_id' => $request->employee_id,
            'company_id'  => $request->company_id,
            'year'        => $request->year,
            'month'       => $request->month,
            'date'        => $request->date,
            'check_in'    => $request->check_in,
            'check_out'   => $request->check_out,
            'status'      => $request->status,
        ]);

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
        Attendance::find($id)->delete();
    }
}
