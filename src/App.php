<?php

namespace App;

use App\Interfaces\DesignInterface;
use App\Interfaces\RedirectInterface;
use App\Services\DesignService;
use App\Services\RedirectService;

class App
{
    private DesignInterface $designService;
    private RedirectInterface $redirectService;

    public function __construct()
    {
        $this->designService = new DesignService();
        $this->redirectService = new RedirectService();
    }

    public function run(int $promoId = 1): void
    {
        $design = $this->designService->get($promoId);
        $url = "/designs/{$design['designId']}";
        $this->redirectService->redirect($url);
    }
}