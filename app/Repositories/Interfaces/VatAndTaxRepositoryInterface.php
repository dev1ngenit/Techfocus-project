<?php

namespace App\Repositories\Interfaces;

interface VatAndTaxRepositoryInterface
{
    public function allVatAndTax();
    public function storeVatAndTax(array $data);
    public function findVatAndTax(int $id);
    public function updateVatAndTax(array $data, int $id);
    public function destroyVatAndTax(int $id);
}
