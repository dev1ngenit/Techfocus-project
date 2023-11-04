<?php

namespace App\Repositories;

use App\Models\Sales\SalesYearTarget;
use App\Repositories\Interfaces\SalesYearTargetRepositoryInterface;

class SalesYearTargetRepository implements SalesYearTargetRepositoryInterface
{
    public function allSalesYearTarget()
    {
        return SalesYearTarget::latest()->get();
    }

    public function storeSalesYearTarget(array $data)
    {
        return SalesYearTarget::create($data);
    }

    public function findSalesYearTarget(int $id)
    {
        return SalesYearTarget::findOrFail($id);
    }

    public function updateSalesYearTarget(array $data, int $id)
    {
        return SalesYearTarget::findOrFail($id)->update($data);
    }

    public function destroySalesYearTarget(int $id)
    {
        return SalesYearTarget::destroy($id);
    }
}
