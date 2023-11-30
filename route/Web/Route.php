<?php

namespace Route\Web;

use App\Http\Controllers\V1\PageController;

class Route
{
    public function dispatch(): void
    {
        $url = $_GET['url'] ?? '';

        switch ($url) {
            case 'folder1':
                $this->loadController(PageController::class, 'folder1');
                break;

            case 'folder2':
                $this->loadController(PageController::class, 'folder2');
                break;

            default:
                $this->loadController(PageController::class, 'home');
                break;
        }
    }

    private function loadController(string $controller, string $method): void
    {
        $controllerName = new $controller();
        $controllerName->{$method}();
    }
}
