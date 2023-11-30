<?php

namespace App\Http\Controllers\V1;

class PageController
{
    public function home(): void
    {
        $this->renderView('home');
    }

    private function renderView($name): void
    {
        require_once __DIR__ . '/../../../../resources/views/view.php';
    }

    public function folder1(): void
    {
        $this->renderView('folder1');
    }

    public function folder2(): void
    {
        $this->renderView('folder2');
    }
}
