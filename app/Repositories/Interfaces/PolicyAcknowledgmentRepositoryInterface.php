<?php

namespace App\Repositories\Interfaces;

interface PolicyAcknowledgmentRepositoryInterface
{
    public function allPolicyAcknowledgment();
    public function storePolicyAcknowledgment(array $data);
    public function findPolicyAcknowledgment(int $id);
    public function updatePolicyAcknowledgment(array $data, int $id);
    public function destroyPolicyAcknowledgment(int $id);
}
