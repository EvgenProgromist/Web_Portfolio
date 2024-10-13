<?php
require_once "./vendor/autoload.php";

$collection = new RoutCollection();
$collection->add(new Route("/Web_Portfolio/", "GET", IndexController::class, 'home'));
$collection->add(new Route("/Web_Portfolio/home", "GET", IndexController::class, 'home'));
$collection->add(new Route("/Web_Portfolio/portfolio", "GET", IndexController::class, 'portfolio'));
$collection->add(new Route("/Web_Portfolio/resume", "GET", IndexController::class, 'resume'));
$collection->add(new Route("/Web_Portfolio/mvc", "GET", IndexController::class, 'mvc'));
$collection->add(new Route("/Web_Portfolio/php", "GET", IndexController::class, 'php'));
$collection->add(new Route("/Web_Portfolio/composer", "GET", IndexController::class, 'composer'));
$collection->add(new Route("/Web_Portfolio/add_users", "GET", PortfolioController::class, 'addUser')); // Рендеринг формы
$collection->add(new Route("/Web_Portfolio/add_users", "POST", PortfolioController::class, 'addUser')); // Обработка формы
$collection->add(new Route("/Web_Portfolio/delete_user", "POST", PortfolioController::class, 'deleteUser'));

$routMatcher = new RoutMatcher($collection);
$rout = $routMatcher->match($_SERVER['REQUEST_URI']);

$class_name = $rout->getClass();
$method = $rout->getClassMethod();
$controller = new $class_name();
$controller->$method();


