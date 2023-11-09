<?php

namespace App\Repositories\Interfaces;

interface BankingRepositoryInterface
{
    public function allBanking();
    public function storeBanking(array $data);
    public function findBanking(int $id);
    public function updateBanking(array $data, int $id);
    public function destroyBanking(int $id);
}
