<?php

namespace App\Repositories\Interfaces;

interface IndustryRepositoryInterface
{
    public function allIndustry();
    public function storeIndustry(array $data);
    public function findIndustry(int $id);
    public function updateIndustry(array $data, int $id);
    public function destroyIndustry(int $id);
}
