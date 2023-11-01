<?php

namespace App\Repositories\Interfaces;

interface FaqRepositoryInterface
{
    public function allFaq();
    public function storeFaq(array $data);
    public function findFaq(int $id);
    public function updateFaq(array $data, int $id);
    public function destroyFaq(int $id);
}
