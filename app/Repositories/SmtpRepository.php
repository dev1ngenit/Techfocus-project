<?php

namespace App\Repositories;

use App\Models\Admin\Smtp;
use App\Repositories\Interfaces\SmtpRepositoryInterface;

class SmtpRepository implements SmtpRepositoryInterface
{
    public function getFirstSmtp()
    {
        return Smtp::first();
    }

    public function updateOrCreateSmtp(array $data)
    {
        return Smtp::updateOrCreate([], $data);
    }
}
