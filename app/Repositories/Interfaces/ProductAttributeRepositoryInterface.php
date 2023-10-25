<?php

namespace App\Repositories\Interfaces;

interface ProductAttributeRepositoryInterface
{
    public function allProductAttribute();
    public function storeProductAttribute(array $data);
    public function findProductAttribute(int $id);
    public function updateProductAttribute(array $data, int $id);
    public function destroyProductAttribute(int $id);
}
