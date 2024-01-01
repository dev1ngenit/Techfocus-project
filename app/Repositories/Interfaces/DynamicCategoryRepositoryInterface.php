<?php

namespace App\Repositories\Interfaces;

interface DynamicCategoryRepositoryInterface
{
    public function allDynamicCategory();
    public function allDynamicActiveCategory($categoryType);
    public function storeDynamicCategory(array $data);
    public function findDynamicCategory(int $id);
    public function updateDynamicCategory(array $data, int $id);
    public function destroyDynamicCategory(int $id);
}
