<?php

namespace App\Repositories\Interfaces;

interface ContactRepositoryInterface
{
    public function allContact();
    public function storeContact(array $data);
    public function findContact(int $id);
    public function updateContact(array $data, int $id);
    public function destroyContact(int $id);
}
