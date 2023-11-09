<?php

namespace App\Repositories;

use App\Models\Admin\HrPolicy;
use App\Repositories\Interfaces\HrPolicyRepositoryInterface;

class HrPolicyRepository implements HrPolicyRepositoryInterface
{
    public function allHrPolicy()
    {
        return HrPolicy::latest('id')->get();
    }

    public function storeHrPolicy(array $data)
    {
        return HrPolicy::create($data);
    }

    public function findHrPolicy(int $id)
    {
        return HrPolicy::findOrFail($id);
    }

    public function updateHrPolicy(array $data, int $id)
    {
        return HrPolicy::findOrFail($id)->update($data);
    }

    public function destroyHrPolicy(int $id)
    {
        return HrPolicy::destroy($id);
    }
}
