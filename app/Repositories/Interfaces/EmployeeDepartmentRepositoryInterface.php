<?php

namespace App\Repositories\Interfaces;

interface EmployeeDepartmentRepositoryInterface
{
    public function allEmployeeDepartment();
    public function storeEmployeeDepartment(array $data);
    public function findEmployeeDepartment(int $id);
    public function updateEmployeeDepartment(array $data, int $id);
    public function destroyEmployeeDepartment(int $id);
}
