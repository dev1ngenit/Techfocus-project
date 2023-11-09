<?php

namespace App\Repositories;

use App\Models\Admin\Company;
use App\Repositories\Interfaces\CompanyRepositoryInterface;

class CompanyRepository implements CompanyRepositoryInterface
{
    public function allCompany()
    {
        return Company::latest('id')->get();
    }

    public function storeCompany(array $data)
    {
        return Company::create($data);
    }

    public function findCompany(int $id)
    {
        return Company::findOrFail($id);
    }

    public function updateCompany(array $data, int $id)
    {
        return Company::findOrFail($id)->update($data);
    }

    public function destroyCompany(int $id)
    {
        return Company::destroy($id);
    }
}
