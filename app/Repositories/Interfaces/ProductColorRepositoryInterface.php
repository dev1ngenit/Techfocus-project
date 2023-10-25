<?php

namespace App\Repositories\Interfaces;

interface ProductColorRepositoryInterface
{
    public function allProductColor();
    public function storeProductColor(array $data);
    public function findProductColor(int $id);
    public function updateProductColor(array $data, int $id);
    public function destroyProductColor(int $id);
}
