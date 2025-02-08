<?php

namespace App\Interfaces;

interface DesignInterface
{
    public function get(int $promoId): array;
}