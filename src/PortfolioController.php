<?php

require_once __DIR__ . '/../vendor/autoload.php';

//use models_portfolio_admin\Admin;
//use models_portfolio_users\Users;

class PortfolioController
{
    public array $users_array;
    public function index() : void {

        $this->users_array = [
            new Users("Daniil", "_123456789"),
            new Users("Stepa", "v294743829"),
            new Users("Ruslan", "wfsdf3213123"),
            new Users("Kristina", "r1002239Kris"),
            new Users("Aleksandra", "f123456789")
        ];
    }
}

