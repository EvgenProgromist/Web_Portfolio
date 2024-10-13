<?php

require_once __DIR__ . '/../vendor/autoload.php';

class PortfolioController_Admin extends PortfolioController
{
    public function index(): void
    {
        $admin = Admin::get_admin();
        include_once __DIR__ . '/../views/portfolio.php';
    }
}