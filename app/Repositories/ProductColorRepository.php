<?php

namespace App\Repositories;


use App\Models\Admin\ProductColor;
use App\Repositories\Interfaces\ProductColorRepositoryInterface;

class ProductColorRepository implements ProductColorRepositoryInterface
{
    public function allProductColor()
    {
        return ProductColor::latest()->get();
    }

    public function storeProductColor(array $data)
    {
        return ProductColor::create($data);
    }

    public function findProductColor(int $id)
    {
        return ProductColor::findOrFail($id);
    }

    public function updateProductColor(array $data, int $id)
    {
        return ProductColor::findOrFail($id)->update($data);
    }

    public function destroyProductColor(int $id)
    {
        return ProductColor::destroy($id);
    }
}
