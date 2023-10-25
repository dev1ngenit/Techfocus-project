<?php

namespace App\Repositories;

use App\Models\Admin\EmployeeCategory;
use App\Repositories\Interfaces\EmployeeCategoryRepositoryInterface;

class EmployeeCategoryRepository implements EmployeeCategoryRepositoryInterface
{
    public function allEmployeeCategory()
    {
        return EmployeeCategory::latest()->get();
    }

    public function storeEmployeeCategory(array $data)
    {
        return EmployeeCategory::create($data);
    }

    public function findEmployeeCategory(int $id)
    {
        return EmployeeCategory::findOrFail($id);
    }

    public function updateEmployeeCategory(array $data, int $id)
    {
        return EmployeeCategory::findOrFail($id)->update($data);
    }

    public function destroyEmployeeCategory(int $id)
    {
        return EmployeeCategory::destroy($id);
    }
}
