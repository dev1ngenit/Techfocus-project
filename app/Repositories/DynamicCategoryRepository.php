<?php

namespace App\Repositories;

use App\Models\Admin\DynamicCategory;
use App\Repositories\Interfaces\DynamicCategoryRepositoryInterface;

class DynamicCategoryRepository implements DynamicCategoryRepositoryInterface
{
    public function allDynamicCategory()
    {
        return DynamicCategory::latest('id')->get();
    }

    public function allDynamicActiveCategory($categoryType)
    {
        return DynamicCategory::where('type', $categoryType)
            ->whereStatus('active')
            ->get();
    }

    public function storeDynamicCategory(array $data)
    {
        return DynamicCategory::create($data);
    }

    public function findDynamicCategory(int $id)
    {
        return DynamicCategory::findOrFail($id);
    }

    public function updateDynamicCategory(array $data, int $id)
    {
        return DynamicCategory::findOrFail($id)->update($data);
    }

    public function destroyDynamicCategory(int $id)
    {
        return DynamicCategory::destroy($id);
    }
}
