<?php
$title = "Портфолио";
require_once __DIR__ . '/../vendor/autoload.php';
require_once __DIR__ . '/../templates/header.php';

$controller = new PortfolioController();
$controller->index();
$controller_admin = new PortfolioController_Admin();
$controller_admin->index();
$admin = $controller_admin->admin;
?>

<body class="d-flex flex-column min-vh-100">
<header>
    <?php require_once __DIR__ . '/../templates/header.php'; ?>
</header>

<div class="container my-5">
    <div class="row">
        <!-- Секция списка тестировщиков -->
        <div class="col-md-8">
            <h2 class="text-center">Мои тестировщики</h2>
            <div class="row">
                <?php foreach ($controller->users_array as $user): ?>
                    <div class="col-md-6 mb-4">
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title"><?php echo $user->getUsername(); ?></h5>
                                <p class="card-text">Пароль: <?php echo $user->getPassword(); ?></p>
                                <p class="card-text">ID пользователя: <?php echo $user->getId(); ?></p>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>

        <!-- Секция с кнопками -->
        <div class="col-md-4 mb-4">
            <h2 class="text-center">Навигация</h2>
            <div class="btn-group-vertical w-100" role="group" aria-label="Vertical button group">
                <!-- Кнопка для описания работы с классами -->
                <a target=_blank href="php_classes.php" class="btn btn-warning btn-lg mb-3">
                    Моя работа с классами PHP
                </a>

                <!-- Кнопка для описания работы с Composer -->
                <a target=_blank href="composer_usage.php" class="btn btn-warning btn-lg mb-3">
                    Описание Composer и его использование
                </a>

                <!-- Кнопка для описания структуры MVC -->
                <a target=_blank href="mvc_structure.php" class="btn btn-warning btn-lg">
                    Описание структуры MVC
                </a>
            </div>
        </div>
    </div>
    <div class="col-md-4">
        <div class="card">
            <div class="card-body">
                <h5 class="card-title"><?php echo "Admin: " ?></h5>
                <p class="card-text"> <?php echo $admin->getUsername(); ?></p>
                <p class="card-text"> <?php echo $admin->print_Hi(); ?></p>
            </div>
        </div>
    </div>
</div>

<footer class="mt-auto bg-light text-center py-3">
    <?php require '../templates/footer.php'; ?>
</footer>
</body>
