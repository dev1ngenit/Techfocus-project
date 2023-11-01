<?php

namespace App\Repositories;

use App\Models\Admin\Address;
use App\Repositories\Interfaces\AddressRepositoryInterface;

class AddressRepository implements AddressRepositoryInterface
{
    public function allAddress()
    {
        return Address::latest()->get();
    }

    public function storeAddress(array $data)
    {
        return Address::create($data);
    }

    public function findAddress(int $id)
    {
        return Address::findOrFail($id);
    }

    public function updateAddress(array $data, int $id)
    {
        return Address::findOrFail($id)->update($data);
    }

    public function destroyAddress(int $id)
    {
        return Address::destroy($id);
    }
}
