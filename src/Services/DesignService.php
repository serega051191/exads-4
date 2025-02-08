<?php

namespace App\Services;

use App\Interfaces\DesignInterface;
use Exads\ABTestData;

class DesignService implements DesignInterface
{
    public function get(int $promoId): array
    {
        $abTest = new ABTestData($promoId);
        $designs = $abTest->getAllDesigns();

        return $this->select($designs);
    }

    private function select(array $designs): array
    {
        $rate = rand(1, 100);
        $accumulator = 0;
        foreach ($designs as $design) {
            $accumulator += $design['splitPercent'];
            if ($rate <= $accumulator) {
                return $design;
            }
        }

        return $designs[0];
    }
}