<?php

namespace App\Repositories\Interfaces;

interface LeaveApplicationRepositoryInterface
{
    public function allLeaveApplication();
    public function storeLeaveApplication(array $data);
    public function findLeaveApplication(int $id);
    public function updateLeaveApplication(array $data, int $id);
    public function destroyLeaveApplication(int $id);
}
