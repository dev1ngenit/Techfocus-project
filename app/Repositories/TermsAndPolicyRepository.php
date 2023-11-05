<?php

namespace App\Repositories;

use App\Models\Admin\TermsAndPolicy;
use App\Repositories\Interfaces\TermsAndPolicyRepositoryInterface;

class TermsAndPolicyRepository implements TermsAndPolicyRepositoryInterface
{
    public function allTermsAndPolicy()
    {
        return TermsAndPolicy::latest()->get();
    }

    public function storeTermsAndPolicy(array $data)
    {
        return TermsAndPolicy::create($data);
    }

    public function findTermsAndPolicy(int $id)
    {
        return TermsAndPolicy::findOrFail($id);
    }

    public function updateTermsAndPolicy(array $data, int $id)
    {
        return TermsAndPolicy::findOrFail($id)->update($data);
    }

    public function destroyTermsAndPolicy(int $id)
    {
        return TermsAndPolicy::destroy($id);
    }
}
