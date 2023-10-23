<?php

namespace App\Repositories;

use App\Models\Admin\Industry;
use App\Repositories\Interfaces\IndustryRepositoryInterface;

class IndustryRepository implements IndustryRepositoryInterface
{
    public function allIndustry()
    {
        return Industry::latest()->get();
    }

    public function storeIndustry(array $data)
    {
        return Industry::create($data);
    }

    public function findIndustry(int $id)
    {
        return Industry::findOrFail($id);
    }

    public function updateIndustry(array $data, int $id)
    {
        return Industry::findOrFail($id)->update($data);
    }

    public function destroyIndustry(int $id)
    {
        return Industry::destroy($id);
    }
}
