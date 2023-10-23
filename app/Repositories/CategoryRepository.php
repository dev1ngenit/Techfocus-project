<?php

namespace App\Repositories;

use App\Models\Admin\Category;
use App\Repositories\Interfaces\CategoryRepositoryInterface;

class CategoryRepository implements CategoryRepositoryInterface
{
    public function allCategory()
    {
        return Category::with('children.children.children.children.children')->where('is_parent', '1')->latest()->get();
    }

    public function storeCategory(array $data)
    {
        return Category::create($data);
    }

    public function findCategory(int $id)
    {
        return Category::findOrFail($id);
    }

    public function updateCategory(array $data, int $id)
    {
        return Category::findOrFail($id)->update($data);
    }

    public function destroyCategory(int $id)
    {
        return Category::destroy($id);
    }
}
