<?php

namespace App\Repositories;

use App\Models\Admin\NewsTrend;
use App\Repositories\Interfaces\NewsTrendRepositoryInterface;

class NewsTrendRepository implements NewsTrendRepositoryInterface
{
    public function allNewsTrend()
    {
        return NewsTrend::latest('id')->get();
    }

    public function storeNewsTrend(array $data)
    {
        return NewsTrend::create($data);
    }

    public function findNewsTrend(int $id)
    {
        return NewsTrend::findOrFail($id);
    }

    public function updateNewsTrend(array $data, int $id)
    {
        return NewsTrend::findOrFail($id)->update($data);
    }

    public function destroyNewsTrend(int $id)
    {
        return NewsTrend::destroy($id);
    }
}
