<?php

namespace App\Repositories\Interfaces;

interface EmployeeCategoryRepositoryInterface
{
    public function allEmployeeCategory();
    public function storeEmployeeCategory(array $data);
    public function findEmployeeCategory(int $id);
    public function updateEmployeeCategory(array $data, int $id);
    public function destroyEmployeeCategory(int $id);
}
