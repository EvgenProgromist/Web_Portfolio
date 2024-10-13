<?php
class IndexController
{
    public function home(): void
    {
        include_once __DIR__ . '/../views/home.php';
    }

    public function portfolio(): void
    {
        $controller = new PortfolioController();
        $controller->index();

        $controller1 = new PortfolioController_Admin();
        $controller1->index();

        include_once __DIR__ . '/../views/portfolio.php';
    }

    public function resume(): void
    {
        include_once __DIR__ . '/../views/Resume.php';
    }

    public function mvc(): void
    {
        include_once __DIR__ . '/../views/mvc_structure.php';
    }

    public function php(): void
    {
        include_once __DIR__ . '/../views/php_classes.php';
    }

    public function composer(): void
    {
        include_once __DIR__ . '/../views/composer_usage.php';
    }

}

