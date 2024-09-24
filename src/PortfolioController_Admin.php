<?php

require_once __DIR__ . '/../vendor/autoload.php';

class PortfolioController_Admin extends PortfolioController
{
    public $admin;
    public function index(): void
    {
        $this ->admin = new Admin("Evgen", 2003);
    }
}