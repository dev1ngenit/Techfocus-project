<?php

namespace App\Repositories;

use App\Models\Admin\Industry;
use App\Repositories\Interfaces\IndustryRepositoryInterface;

class IndustryRepository implements IndustryRepositoryInterface
{
    public function all()
    {
        return Industry::latest()->get();
    }

    public function store(array $data)
    {
        return Industry::create($data);
    }

    public function find(int $id)
    {
        return Industry::find($id);
    }

    public function update(array $data, int $id)
    {
        return Industry::find($id)->update($data);
    }

    public function destroy(int $id)
    {
        return Industry::destroy($id);
    }
}
