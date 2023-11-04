<?php

namespace App\Repositories\Interfaces;

interface SalesYearTargetRepositoryInterface
{
    public function allSalesYearTarget();
    public function storeSalesYearTarget(array $data);
    public function findSalesYearTarget(int $id);
    public function updateSalesYearTarget(array $data, int $id);
    public function destroySalesYearTarget(int $id);
}
