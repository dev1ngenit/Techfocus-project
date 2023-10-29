<?php

namespace App\Repositories;

use App\Models\Admin\LeaveApplication;
use App\Repositories\Interfaces\LeaveApplicationRepositoryInterface;

class LeaveApplicationRepository implements LeaveApplicationRepositoryInterface
{
    public function allLeaveApplication()
    {
        return LeaveApplication::latest()->get();
    }

    public function storeLeaveApplication(array $data)
    {
        return LeaveApplication::create($data);
    }

    public function findLeaveApplication(int $id)
    {
        return LeaveApplication::findOrFail($id);
    }

    public function updateLeaveApplication(array $data, int $id)
    {
        return LeaveApplication::findOrFail($id)->update($data);
    }

    public function destroyLeaveApplication(int $id)
    {
        return LeaveApplication::destroy($id);
    }
}
