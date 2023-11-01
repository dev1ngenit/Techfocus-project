<?php

namespace App\Repositories\Interfaces;

interface AddressRepositoryInterface
{
    public function allAddress();
    public function storeAddress(array $data);
    public function findAddress(int $id);
    public function updateAddress(array $data, int $id);
    public function destroyAddress(int $id);
}
