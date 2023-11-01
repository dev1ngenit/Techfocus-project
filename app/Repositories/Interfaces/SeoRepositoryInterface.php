<?php

namespace App\Repositories\Interfaces;

interface SeoRepositoryInterface
{
    public function getFirstSeo();
    public function updateOrCreateSeo(array $data);
}
