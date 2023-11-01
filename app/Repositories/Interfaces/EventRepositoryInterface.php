<?php

namespace App\Repositories\Interfaces;

interface EventRepositoryInterface
{
    public function allEvent();
    public function storeEvent(array $data);
    public function findEvent(int $id);
    public function updateEvent(array $data, int $id);
    public function destroyEvent(int $id);
}
