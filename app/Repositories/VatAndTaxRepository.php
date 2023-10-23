<?php

namespace App\Repositories;

use App\Models\Admin\VatAndTax;
use App\Repositories\Interfaces\VatAndTaxRepositoryInterface;

class VatAndTaxRepository implements VatAndTaxRepositoryInterface
{
    public function allVatAndTax()
    {
        return VatAndTax::latest()->get();
    }

    public function storeVatAndTax(array $data)
    {
        return VatAndTax::create($data);
    }

    public function findVatAndTax(int $id)
    {
        return VatAndTax::findOrFail($id);
    }

    public function updateVatAndTax(array $data, int $id)
    {
        return VatAndTax::findOrFail($id)->update($data);
    }

    public function destroyVatAndTax(int $id)
    {
        return VatAndTax::destroy($id);
    }
}
