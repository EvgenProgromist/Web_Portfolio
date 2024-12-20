<?php
$title = "Портфолио";
require_once __DIR__ . '/../vendor/autoload.php';
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
                <?php foreach ($users_array as $user): ?>
                    <div class="col-md-6 mb-4">
                        <div class="card">
                            <div class="card-body">
                                <form action="/Web_Portfolio/delete_user" method="POST" style="display: inline;">
                                <h5 class="card-title"><?php echo $user->getUsername(); ?></h5>
                                    <input type="hidden" name="user_id" value="<?= $user->getId() ?>">
                                    <p class="card-text">Пароль: <?php echo $user->getPassword(); ?></p>
                                    <p class="card-text">ID пользователя: <?php echo $user->getId(); ?></p>
                                    <button type="submit" class="btn btn-danger">Удалить</button>
                                </form>
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
                <a target=_blank href="/Web_Portfolio/php" class="btn btn-warning btn-lg mb-3">
                    Моя работа с классами PHP
                </a>

                <!-- Кнопка для описания работы с Composer -->
                <a target=_blank href="/Web_Portfolio/composer" class="btn btn-warning btn-lg mb-3">
                    Описание Composer и его использование
                </a>

                <!-- Кнопка для описания структуры MVC -->
                <a target=_blank href="/Web_Portfolio/mvc" class="btn btn-warning btn-lg">
                    Описание структуры MVC
                </a>
            </div>
        </div>
    </div>
</div>

<footer class="mt-auto bg-light text-center py-3">
    <?php require_once __DIR__ . '/../templates/footer.php'; ?>
</footer>
</body>
