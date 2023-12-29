<?php

namespace App\Http\Controllers\HR;

use App\Models\HR\Task;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class TaskController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
        // Validate the incoming request data
        $request->validate([
            // 'employee_id' => 'required|numeric',
            'supervisor_id' => 'nullable|numeric',
            'task_name' => 'required|string',
            'task_description' => 'nullable|string',
            'task_target' => 'nullable|string',
            'task_rating' => 'nullable|string',
            'task_weight' => 'nullable|numeric',
            'assignees' => 'nullable|string',
            'supervisors' => 'nullable|string',
            'notify_id' => 'nullable|string',
            'supervisor_rating' => 'nullable|numeric',
            'hr_rating' => 'nullable|numeric',
            'ceo_rating' => 'nullable|numeric',
            'supervisor_review' => 'nullable|string',
            'hr_review' => 'nullable|string',
            'ceo_review' => 'nullable|string',
            'priority' => 'nullable|string',
            'task_type' => 'nullable|in:project_task,agenda,task',
            'status' => 'nullable|in:done,not_done,partial_done',
        ]);

        // Set default values for fields not present in the request
        $validatedData = $request->all();
        $validatedData['employee_id'] = Auth::guard('admin')->user()->id;
        $validatedData['task_type'] = 'agenda';

        // Create a new task with the validated data
        $task = Task::create($validatedData);

        // You can add additional logic or redirection here based on your requirements

        return redirect()->back()->with('success', 'Task created successfully!');
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
