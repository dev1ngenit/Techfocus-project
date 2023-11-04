<?php

namespace App\Repositories\Interfaces;

interface SalesTeamTargetRepositoryInterface
{
    public function allSalesTeamTarget();
    public function storeSalesTeamTarget(array $data);
    public function findSalesTeamTarget(int $id);
    public function updateSalesTeamTarget(array $data, int $id);
    public function destroySalesTeamTarget(int $id);
}
