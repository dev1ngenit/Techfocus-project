<?php

namespace App\Repositories;

use App\Models\Admin\Contact;
use App\Repositories\Interfaces\ContactRepositoryInterface;

class ContactRepository implements ContactRepositoryInterface
{
    public function allContact()
    {
        return Contact::latest()->get();
    }

    public function storeContact(array $data)
    {
        return Contact::create($data);
    }

    public function findContact(int $id)
    {
        return Contact::findOrFail($id);
    }

    public function updateContact(array $data, int $id)
    {
        return Contact::findOrFail($id)->update($data);
    }

    public function destroyContact(int $id)
    {
        return Contact::destroy($id);
    }
}
