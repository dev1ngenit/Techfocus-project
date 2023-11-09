<?php

namespace App\Repositories;


use App\Models\Admin\ProductAttribute;
use App\Repositories\Interfaces\ProductAttributeRepositoryInterface;

class ProductAttributeRepository implements ProductAttributeRepositoryInterface
{
    public function allProductAttribute()
    {
        return ProductAttribute::latest('id')->get();
    }

    public function storeProductAttribute(array $data)
    {
        return ProductAttribute::create($data);
    }

    public function findProductAttribute(int $id)
    {
        return ProductAttribute::findOrFail($id);
    }

    public function updateProductAttribute(array $data, int $id)
    {
        return ProductAttribute::findOrFail($id)->update($data);
    }

    public function destroyProductAttribute(int $id)
    {
        return ProductAttribute::destroy($id);
    }
}
