<?php

namespace App\Repositories\Interfaces;

interface HrPolicyRepositoryInterface
{
    public function allHrPolicy();
    public function storeHrPolicy(array $data);
    public function findHrPolicy(int $id);
    public function updateHrPolicy(array $data, int $id);
    public function destroyHrPolicy(int $id);
}
