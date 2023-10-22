<?php

namespace App\Repositories\Interfaces;

interface IndustryRepositoryInterface
{
    public function all();
    public function store(array $data);
    public function find(int $id);
    public function update(array $data, int $id);
    public function destroy(int $id);
}
