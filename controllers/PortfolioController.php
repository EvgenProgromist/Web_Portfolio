<?php
namespace PortfolioController;

use models_portfolio_admin\Admin;
use models_portfolio_users\Users;

class PortfolioController {
    public function index() {
        $admini_object = new Admin("Evgen", 2002);

        $users_array = [
            new Users("Daniil", "_123456789"),
            new Users("Stepa", "v294743829"),
            new Users("Ruslan", "wfsdf3213123"),
            new Users("Kristina", "r1002239Kris"),
            new Users("Aleksandra", "f123456789")
        ];
        include __DIR__ . "/../views/portfolio.php";
    }

}