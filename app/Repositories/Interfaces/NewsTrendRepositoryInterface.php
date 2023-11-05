<?php

namespace App\Repositories\Interfaces;

interface NewsTrendRepositoryInterface
{
    public function allNewsTrend();
    public function storeNewsTrend(array $data);
    public function findNewsTrend(int $id);
    public function updateNewsTrend(array $data, int $id);
    public function destroyNewsTrend(int $id);
}
