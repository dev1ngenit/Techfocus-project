<?php

namespace App\Repositories\Interfaces;

interface CompanyRepositoryInterface
{
    public function allCompany();
    public function storeCompany(array $data);
    public function findCompany(int $id);
    public function updateCompany(array $data, int $id);
    public function destroyCompany(int $id);
}
