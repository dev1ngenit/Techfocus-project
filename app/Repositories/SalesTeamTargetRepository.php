<?php

namespace App\Repositories;

use App\Models\Sales\SalesTeamTarget;
use App\Repositories\Interfaces\SalesTeamTargetRepositoryInterface;

class SalesTeamTargetRepository implements SalesTeamTargetRepositoryInterface
{
    public function allSalesTeamTarget()
    {
        return SalesTeamTarget::latest('id')->get();
    }

    public function storeSalesTeamTarget(array $data)
    {
        return SalesTeamTarget::create($data);
    }

    public function findSalesTeamTarget(int $id)
    {
        return SalesTeamTarget::findOrFail($id);
    }

    public function updateSalesTeamTarget(array $data, int $id)
    {
        return SalesTeamTarget::findOrFail($id)->update($data);
    }

    public function destroySalesTeamTarget(int $id)
    {
        return SalesTeamTarget::destroy($id);
    }
}
