<?php

namespace App\Http\Controllers\Admin;

use App\Models\Admin;
use Illuminate\Support\Str;
use App\Http\Requests\EventRequest;
use App\Http\Controllers\Controller;
use App\Repositories\Interfaces\EventRepositoryInterface;
use App\Repositories\Interfaces\DynamicCategoryRepositoryInterface;
use App\Repositories\Interfaces\EmployeeDepartmentRepositoryInterface;

class EventController extends Controller
{
    private $eventRepository;
    private $dynamicCategoryRepository;
    private $employeedepartmentRepository;

    public function __construct(EventRepositoryInterface $eventRepository, DynamicCategoryRepositoryInterface $dynamicCategoryRepository, EmployeeDepartmentRepositoryInterface $employeedepartmentRepository)
    {
        $this->eventRepository              = $eventRepository;
        $this->dynamicCategoryRepository    = $dynamicCategoryRepository;
        $this->employeedepartmentRepository = $employeedepartmentRepository;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.pages.event.index', [
            'events'              => $this->eventRepository->allEvent(),
            'dynamicCategories'   => $this->dynamicCategoryRepository->allDynamicCategory(),
            'admins' =>  Admin::get(['id', 'name']),
            'employeedepartments' => $this->employeedepartmentRepository->allEmployeeDepartment(),
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
    public function store(EventRequest $request)
    {
        $data = [
            'country_id'          => $request->country_id,
            'dynamic_category_id' => $request->dynamic_category_id,
            'employee_id'         => $request->employee_id,
            'department_id'       => $request->department_id,
            'title'               => $request->title,
            'slug'                => Str::slug($request->title),
            'start_date'          => $request->start_date,
            'end_date'            => $request->end_date,
            'start_time'          => $request->start_time,
            'end_time'            => $request->end_time,
            'status'              => $request->status,
            'description'         => $request->description
        ];
        $this->eventRepository->storeEvent($data);

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
    public function update(EventRequest $request, $id)
    {
        $data = [
            'country_id'          => $request->country_id,
            'dynamic_category_id' => $request->dynamic_category_id,
            'employee_id'         => $request->employee_id,
            'department_id'       => $request->department_id,
            'title'               => $request->title,
            'slug'                => Str::slug($request->title),
            'start_date'          => $request->start_date,
            'end_date'            => $request->end_date,
            'start_time'          => $request->start_time,
            'end_time'            => $request->end_time,
            'status'              => $request->status,
            'description'         => $request->description
        ];

        $this->eventRepository->updateEvent($data, $id);

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
        $this->eventRepository->destroyEvent($id);
    }
}
