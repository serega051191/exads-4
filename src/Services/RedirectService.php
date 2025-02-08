<?php

namespace App\Services;

use App\Interfaces\RedirectInterface;

class RedirectService implements RedirectInterface
{
    public function redirect(string $url): void
    {
        header("Location: $url");
    }
}