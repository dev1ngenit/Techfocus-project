<?php

namespace App\Repositories;

use App\Models\Admin\PolicyAcknowledgment;
use App\Repositories\Interfaces\PolicyAcknowledgmentRepositoryInterface;

class PolicyAcknowledgmentRepository implements PolicyAcknowledgmentRepositoryInterface
{
    public function allPolicyAcknowledgment()
    {
        return PolicyAcknowledgment::latest()->get();
    }

    public function storePolicyAcknowledgment(array $data)
    {
        return PolicyAcknowledgment::create($data);
    }

    public function findPolicyAcknowledgment(int $id)
    {
        return PolicyAcknowledgment::findOrFail($id);
    }

    public function updatePolicyAcknowledgment(array $data, int $id)
    {
        return PolicyAcknowledgment::findOrFail($id)->update($data);
    }

    public function destroyPolicyAcknowledgment(int $id)
    {
        return PolicyAcknowledgment::destroy($id);
    }
}
