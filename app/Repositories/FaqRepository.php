<?php

namespace App\Repositories;

use App\Models\Admin\Faq;
use App\Repositories\Interfaces\FaqRepositoryInterface;

class FaqRepository implements FaqRepositoryInterface
{
    public function allFaq()
    {
        return Faq::latest('id')->get();
    }

    public function storeFaq(array $data)
    {
        return Faq::create($data);
    }

    public function findFaq(int $id)
    {
        return Faq::findOrFail($id);
    }

    public function updateFaq(array $data, int $id)
    {
        return Faq::findOrFail($id)->update($data);
    }

    public function destroyFaq(int $id)
    {
        return Faq::destroy($id);
    }
}
