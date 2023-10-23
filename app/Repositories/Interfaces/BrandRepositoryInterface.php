<?php

namespace App\Repositories\Interfaces;

interface BrandRepositoryInterface
{
    public function allBrand();
    public function storeBrand(array $data);
    public function findBrand(int $id);
    public function updateBrand(array $data, int $id);
    public function destroyBrand(int $id);
}
