<?php

namespace App\Interfaces;

interface RedirectInterface
{
    public function redirect(string $url): void;
}