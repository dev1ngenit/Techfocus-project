<?php

namespace App\Repositories\Interfaces;

interface TermsAndPolicyRepositoryInterface
{
    public function allTermsAndPolicy();
    public function storeTermsAndPolicy(array $data);
    public function findTermsAndPolicy(int $id);
    public function updateTermsAndPolicy(array $data, int $id);
    public function destroyTermsAndPolicy(int $id);
}
