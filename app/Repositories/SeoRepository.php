<?php

namespace App\Repositories;

use App\Models\Admin\Seo;
use App\Repositories\Interfaces\SeoRepositoryInterface;

class SeoRepository implements SeoRepositoryInterface
{
    public function getFirstSeo()
    {
        return Seo::first();
    }

    public function updateOrCreateSeo(array $data)
    {
        return Seo::updateOrCreate([], $data);
    }
}
