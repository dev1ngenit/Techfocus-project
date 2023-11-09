<?php

namespace App\Repositories;

use App\Models\Admin\EmployeeDepartment;
use App\Repositories\Interfaces\EmployeeDepartmentRepositoryInterface;

class EmployeeDepartmentRepository implements EmployeeDepartmentRepositoryInterface
{
    public function allEmployeeDepartment()
    {
        return EmployeeDepartment::latest('id')->get();
    }

    public function storeEmployeeDepartment(array $data)
    {
        return EmployeeDepartment::create($data);
    }

    public function findEmployeeDepartment(int $id)
    {
        return EmployeeDepartment::findOrFail($id);
    }

    public function updateEmployeeDepartment(array $data, int $id)
    {
        return EmployeeDepartment::findOrFail($id)->update($data);
    }

    public function destroyEmployeeDepartment(int $id)
    {
        return EmployeeDepartment::destroy($id);
    }
}
