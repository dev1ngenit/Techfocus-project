<?php

namespace App\Repositories;

use App\Models\Admin\Banking;
use App\Repositories\Interfaces\BankingRepositoryInterface;

class BankingRepository implements BankingRepositoryInterface
{
    public function allBanking()
    {
        return Banking::latest('id')->get();
    }

    public function storeBanking(array $data)
    {
        return Banking::create($data);
    }

    public function findBanking(int $id)
    {
        return Banking::findOrFail($id);
    }

    public function updateBanking(array $data, int $id)
    {
        return Banking::findOrFail($id)->update($data);
    }

    public function destroyBanking(int $id)
    {
        return Banking::destroy($id);
    }
}
