<?php

namespace App\Repositories;

use App\Models\Admin\Event;
use App\Repositories\Interfaces\EventRepositoryInterface;

class EventRepository implements EventRepositoryInterface
{
    public function allEvent()
    {
        return Event::latest('id')->get();
    }

    public function storeEvent(array $data)
    {
        return Event::create($data);
    }

    public function findEvent(int $id)
    {
        return Event::findOrFail($id);
    }

    public function updateEvent(array $data, int $id)
    {
        return Event::findOrFail($id)->update($data);
    }

    public function destroyEvent(int $id)
    {
        return Event::destroy($id);
    }
}
