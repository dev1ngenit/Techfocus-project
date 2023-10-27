<?php

namespace App\Repositories\Interfaces;

interface SmtpRepositoryInterface
{
    public function getFirstSmtp();
    public function updateOrCreateSmtp(array $data);
}
