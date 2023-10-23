<?php

namespace App\Repositories\Interfaces;

interface CategoryRepositoryInterface
{
    public function allCategory();
    public function storeCategory(array $data);
    public function findCategory(int $id);
    public function updateCategory(array $data, int $id);
    public function destroyCategory(int $id);
}
